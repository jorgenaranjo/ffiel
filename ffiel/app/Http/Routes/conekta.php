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
        'uses' => 'ConektaController@postPaymentCreditCard',
    ))->middleware('cors');

});