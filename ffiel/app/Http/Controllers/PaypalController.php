<?php namespace App\Http\Controllers;

use App\Http\Requests;

use App\Payment as PaymenFFIEL;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\CreditCard;
use PayPal\Api\Details;
use PayPal\Api\FundingInstrument;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;


class PaypalController extends Controller {

    /**
     * object to authenticate the call.
     * @param object $_apiContext
     */
    private $_api_context;
    protected  $request;

    public function __construct(Request $request)
    {
        // setup PayPal api context
        $paypal_conf = Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
        $this->request = $request;
    }


    public function postPaymentCreditCard(Request $request){
        $card = new CreditCard();
        //`visa`, `mastercard`, `discover`, `amex`
        $card->setType($request->get('cc_type'))
            ->setNumber($request->get('cc_number'))
            ->setExpireMonth($request->get('cc_month'))
            ->setExpireYear($request->get('cc_year'))
            ->setCvv2($request->get('cc_ccv'))
            ->setFirstName($request->get('cc_name'))
            ->setLastName($request->get('cc_lastName'));

        $fi = new FundingInstrument();
        $fi->setCreditCard($card);

        $payer = new Payer();
        $payer->setPaymentMethod("credit_card")
            ->setFundingInstruments(array($fi));

        $item1 = new Item();
        $item1->setName($request->get('name'))
            ->setDescription($request->get('name'))
            ->setCurrency('MXN')
            ->setQuantity(1)
            ->setTax(0.0)
            ->setPrice($request->get('price'));

        $itemList = new ItemList();
        $itemList->setItems(array($item1));

        $details = new Details();
        $details->setTax(0)
            ->setSubtotal($request->get('price'));

        $amount = new Amount();
        $amount->setCurrency('MXN')
            ->setTotal($request->get('price'))
            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription('FFIEL')
            ->setInvoiceNumber(uniqid());


        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(\URL::route('payment.status'))
            ->setCancelUrl(\URL::route('payment.status'));

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));

        $data_workshop = [
            'user_id'=> \Auth::user()->id,
            'workshop_id' => $request->get('id')
        ];

        Session::put('paypal_data', $data_workshop);

        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (Config::get('app.debug')) {
                echo "Exception: " . $ex->getMessage() . PHP_EOL;
                $err_data = json_decode($ex->getData(), true);
                exit;
            } else {
                die('Some error occurred, sorry for inconvenient');
            }
        }

        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        // add payment ID to session
        Session::put('paypal_payment_id', $payment->getId());

        if(isset($redirect_url)) {
            // redirect to paypal
            return Redirect::away($redirect_url);
        }

        return Redirect::route('original.route')
            ->with('error', 'Unknown error occurred');
    }

    /*public function postPayment(Request $request){

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $iva=0.16;
        $user_type_data = UserType::findOrFail($request->get('user_type_id'));

        $item_1 = new Item();
        $item_1->setName($user_type_data->name) // item name
        ->setCurrency('MXN')
            ->setQuantity(1)
            ->setPrice($user_type_data->cost); // unit price

        // add item to list
        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $details = new Details();
        $details->setTax($user_type_data->cost*$iva)
            ->setSubtotal($user_type_data->cost);

        $amount = new Amount();
        $amount->setCurrency('MXN')
            ->setTotal($user_type_data->cost*($iva+1))
            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Ocúpate México');


        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(\URL::route('payment.status'))
            ->setCancelUrl(\URL::route('payment.status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));

        $data_user = [
            'name'=> $request->get('name'),
            'lastName'=> $request->get('lastName'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'user_type_id' => $request->get('user_type_id'),
            'code' => $request->get('code'),
            'token' => $request->get('token')
        ];
        Session::put('paypal_data_user', $data_user);

        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                echo "Exception: " . $ex->getMessage() . PHP_EOL;
                $err_data = json_decode($ex->getData(), true);
                exit;
            } else {
                die('Some error occurred, sorry for inconvenient');
            }
        }

        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        // add payment ID to session
        Session::put('paypal_payment_id', $payment->getId());

        if(isset($redirect_url)) {
            // redirect to paypal
            return Redirect::away($redirect_url);
        }

        return Redirect::route('original.route')
            ->with('error', 'Unknown error occurred');
    }
    */

    public function getPaymentStatus(Request $request)
    {

        // Get the payment ID before session clear
        $payment_id = Session::get('paypal_payment_id');

        // clear the session payment ID
        Session::forget('paypal_payment_id');

        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
            return redirect('/')
                ->with('error', 'Payment failed');
        }

        $payment = Payment::get($payment_id, $this->_api_context);

        // PaymentExecution object includes information necessary
        // to execute a PayPal account payment.
        // The payer_id is added to the request query parameters
        // when the user is redirected from paypal back to your site
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

        //Execute the payment
        $result = $payment->execute($execution, $this->_api_context);
        if ($result->getState() == 'approved') { // payment made
            $user = User::create(Session::get('paypal_data_user'));
            $user->token = $user->setTokenUser();
            $user->save();
            $payment_method = 1;
            PaymentUser::create([
                'user_id' => $user->id,
                'transaction_number' => $payment_id,
                'amount' => $user->user_type->cost,
                'date' => date('Y-m-d H:i:s'),
                'user_type_id'=> $user->user_type->id,
                'payment_method_id'=> $payment_method,
            ]);
            return redirect()->route('emailValidation', $user->id);
        }
        return redirect('/')->with('error', 'Payment failed');
    }

}