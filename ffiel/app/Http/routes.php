<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

require __DIR__ . '/Routes/auth.php';
require __DIR__ . '/Routes/workshop.php';
require __DIR__ . '/Routes/paypal.php';
//require __DIR__ . '/Routes/conekta.php';
require __DIR__ . '/Routes/stripe.php';
require __DIR__ . '/Routes/user.php';

