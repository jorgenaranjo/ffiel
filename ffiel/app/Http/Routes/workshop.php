<?php

// ADMIN
// Views routes
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('workshops', 'WorkshopAdminController',
        ['only' => ['index', 'create', 'edit']]);
});


// API routes of Admin
Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'admin']], function () {
    Route::post('workshops', 'WorkshopAdminController@store');
    Route::put('workshops', 'WorkshopAdminController@update');
    Route::delete('workshops/{id}', 'WorkshopAdminController@destroy');
    Route::get('workshops', 'WorkshopAdminController@getAllWorkshops');
});


// CUSTOMER
// Views routes
Route::group(['middleware' => ['auth', 'customer'], 'as' => 'workshopsCustomer'], function () {
    Route::get('talleres/', ['uses' => 'WorkshopCustomerController@index', 'as'  => '.index']);
    //Route::post('talleres/crear', ['uses' => 'WorkshopCustomerController@create', 'as'  => '.create']);
    //Route::get('talleres/editar/{id}', ['uses' => 'WorkshopCustomerController@edit', 'as'  => '.edit']);
});


// API routes of Customer
Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'customer']], function () {
    Route::get('workshops', 'WorkshopCustomerController@getAllWorkshops');
});

