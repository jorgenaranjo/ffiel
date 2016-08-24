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
//Route::group(['middleware' => ['auth', 'customer'], 'as' => 'workshopsCustomer'], function () {
//    Route::get('talleres/', ['uses' => 'WorkshopCustomerController@index', 'as'  => '.index']);
//    Route::get('mistalleres/', ['uses' => 'WorkshopCustomerController@indexMyWorkshops', 'as'  => '.indexMyWorkshops']);

    //Route::post('talleres/crear', ['uses' => 'WorkshopCustomerController@create', 'as'  => '.create']);
    //Route::get('talleres/editar/{id}', ['uses' => 'WorkshopCustomerController@edit', 'as'  => '.edit']);
//});


// API routes of Customer
//Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'customer']], function () {
//    Route::get('workshops', 'WorkshopCustomerController@getAllWorkshops');
//    Route::get('myWorkshops', 'WorkshopCustomerController@getMyWorkshops');
//    Route::get('myWorkshops/createPDFWorkshop/{id}', 'WorkshopCustomerController@createPDFWorkshop');
//});

