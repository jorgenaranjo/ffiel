<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConektaController extends Controller
{

    public function postPaymentCreditCard(Request $request){

        \Conekta::setApiKey(env('CONEKTA_PUBLIC_KEY'));
        \Conekta::setLocale('es');

        try {
            $charge = \Conekta_Charge::create(array(
                'description'=> $request->get('name'),
                'reference_id'=> $request->get('id').'_'.\Auth::user()->id,
                'amount'=> $request->get('price') * 100,
                'currency'=>'MXN',
                'card'=> $request->get('token')['id'],
                'details'=> array(
                    'name'=> $request->get('cc_name'),
                    'email'=> \Auth::user()->email,
                    'phone'=> '4777242447',
                    'line_items'=> array(
                        array(
                            'name'=> $request->get('name'),
                            'description'=> $request->get('name'),
                            'unit_price'=> $request->get('price'),
                            'quantity'=> 1,
                            'sku'=> $request->get('id'),
                        )
                    )
                )
            ));

            if($charge->status == 'paid'){
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
        } catch (\Conekta_Error $e) {
            return \Response::json(['error' => $e->message_to_purchaser], 500);
        }

    }
}
