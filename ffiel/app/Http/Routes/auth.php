<?php
/**
 * Created by PhpStorm.
 * User: taxque
 * Date: 30/06/16
 * Time: 11:00 PM
 */
Route::get('/', [
    'uses' => 'Auth\AuthController@getRegister',
    'as' => 'register'
]);

Route::get('home', [
    'uses' => 'HomeController@index',
    'as'   => 'home'
]);

Route::get('bienvenido', [
    'uses' => 'HomeController@index',
    'as'   => 'home'
]);

// Authentication routes...
Route::get('login', [
    'uses' => 'Auth\AuthController@getLogin',
    'as'   => 'login'
]);
Route::post('login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', [
    'uses' => 'Auth\AuthController@getLogout',
    'as'   => 'logout'
]);


// Registration Routes...
Route::get('registro', [
    'uses' => 'Auth\AuthController@getRegister',
    'as' => 'register'
]);
Route::post('register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');