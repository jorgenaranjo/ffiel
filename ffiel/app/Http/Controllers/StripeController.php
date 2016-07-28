<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StripeController extends Controller
{
    public function postPaymentCreditCard(Request $request){
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        try {
            $charge = \Stripe\Charge::create(array(
                "amount" => $request->get('price')  * 100,
                "currency" => "MXN",
                "source" => $request->get('token'), // obtained with Stripe.js
                "description" => $request->get('name')
            ));

            if($charge->status == "succeeded" && $charge->paid == true){
                $now = date('Y-m-d H:i:s');
                Payment::create([
                    'workshop_id' => $request->get('id'),
                    'user_id' => \Auth::user()->id,
                    'date' => $now,
                    'transaction_number' => $charge->id,
                    'amount' => $request->get('price'),
                    'payment_method' => 'Tarjeta de credito',
                    'creditCardNumber' => $request->get('cc_number')
                ]);
                \DB::table('workshops')->where('id', $request->get('id'))->decrement('available');

                \DB::table('user_workshop')->insert([
                    'user_id' => \Auth::user()->id,
                    'workshop_id' => $request->get('id'),
                    'created_at' => $now
                ]);
            }
            return \Response::json(['success' => 'ok', 'id' => $charge->id, 'create_time'=>$now], 200);

        } catch(\Stripe\Error\Card $e) {
            return \Response::json(['error' => $e->getMessage()], 500);
        }


    }
}
