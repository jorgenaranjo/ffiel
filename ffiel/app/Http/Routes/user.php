<?php
/**
 * Created by PhpStorm.
 * User: taxque
 * Date: 29/07/16
 * Time: 11:44 PM
 */

// ADMIN
// Views routes
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('users', 'UserController',
        ['only' => ['index', 'create', 'edit', 'show']]);
});
