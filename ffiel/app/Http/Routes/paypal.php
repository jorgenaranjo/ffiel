<?php
/**
 * Created by PhpStorm.
 * User: taxque
 * Date: 12/07/16
 * Time: 11:15 PM
 */

Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'customer']], function () {

    /* Paypal routes */
    Route::post('paymentCC', array(
        'as' => 'paymentCC',
        'uses' => 'PaypalController@postPaymentCreditCard',
    ))->middleware('cors');

    Route::put('paymentCP', array(
        'as' => 'paymentCP',
        'uses' => 'PaypalController@postPaymentPaypalAccount',
    ))->middleware('cors');


});

Route::group(['middleware' => ['auth', 'customer']], function () {

    // this is after make the payment, PayPal redirect back to your site
    Route::get('payment/status', array(
        'as' => 'payment.status',
        'uses' => 'PaypalController@getPaymentStatus',
    ));

});