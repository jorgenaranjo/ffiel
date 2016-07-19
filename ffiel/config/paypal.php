<?php
/**
 * Created by PhpStorm.
 * User: taxque
 * Date: 12/07/16
 * Time: 09:58 PM
 */

return array(

    //Pruebas
    'client_id' => 'AbTxwKeqgiuqwecEd-DVAQb4gwyv56ja5fiwg6EJOmlACMr0s23f8HdLTY0Iqetz6K2ErXjGz6OcgwhM',
    'secret' => 'ECstXwJrxl18jnoIzSXvGcRNNYGRV9F-7RCSElPehGIa2wVMNCL6ZS921TUp8Mqm-XzQVEL87xvJmytZ',

    //Produccion

    //'client_id' => 'AbTxwKeqgiuqwecEd-DVAQb4gwyv56ja5fiwg6EJOmlACMr0s23f8HdLTY0Iqetz6K2ErXjGz6OcgwhM',
    //'secret' => 'EAwnAxjh_G363ht4h3JodPSUsufUPOywF_8sCZatCf7rsSyvT_KdkcUmOBb0wfU-zXAsYRr-Xs0ExvCJ',


    // set your paypal credential


    /**
     * SDK configuration
     */

    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */

        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */

        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */

        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */

        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */

        'log.LogLevel' => 'FINE'
    ),
);
