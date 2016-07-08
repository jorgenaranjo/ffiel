<?php

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


/* API routes of Customer
Route::group(['prefix' => 'api/v1', 'middleware' => ['auth', 'customer']], function () {
    Route::get('workshops', 'UserController@getAllWorkshops');
});

*/