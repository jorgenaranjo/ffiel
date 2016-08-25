<?php

// ADMIN
// Views routes
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('conferences', 'ConferenceAdminController',
        ['only' => ['index', 'create', 'edit', 'show']]);
});


// API routes of Admin
Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'admin']], function () {
    Route::post('conferences', 'ConferenceAdminController@store');
    Route::put('conferences', 'ConferenceAdminController@update');
    Route::delete('conferences/{id}', 'ConferenceAdminController@destroy');
    Route::get('conferences', 'ConferenceAdminController@getAllConferences');
    Route::get('conferences-event', 'ConferenceAdminController@getEventConferences');

});


// CUSTOMER
// Views routes
Route::group(['middleware' => ['auth', 'customer'], 'as' => 'conferencesCustomer'], function () {
    Route::get('conferencias', ['uses' => 'ConferenceCustomerController@index', 'as'  => '.index']);

});


// API routes of Customer
Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'customer']], function () {
    Route::get('conferences', 'ConferenceCustomerController@getAllConferences');
});

