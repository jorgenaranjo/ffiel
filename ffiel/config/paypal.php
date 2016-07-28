<?php
/**
 * Created by PhpStorm.
 * User: taxque
 * Date: 12/07/16
 * Time: 09:58 PM
 */

return array(

    //Pruebas
    //'client_id' => 'AbTxwKeqgiuqwecEd-DVAQb4gwyv56ja5fiwg6EJOmlACMr0s23f8HdLTY0Iqetz6K2ErXjGz6OcgwhM',
    //'secret' => 'ECstXwJrxl18jnoIzSXvGcRNNYGRV9F-7RCSElPehGIa2wVMNCL6ZS921TUp8Mqm-XzQVEL87xvJmytZ',

    //Produccion

    //'client_id' => 'AWnRwoUx3s7Uwz4EySi9-6vSWQVChRz-BQeXKjgzuz0u7CBD5ix24UP1yZ8FoBU1XxPW_pvHIaiY9yO8',
    //'secret' => 'EAwnAxjh_G363ht4h3JodPSUsufUPOywF_8sCZatCf7rsSyvT_KdkcUmOBb0wfU-zXAsYRr-Xs0ExvCJ',


    'client_id' => 'Aa4LX9I7z_w6Dz8l0g0s-y_yde5nuHQT7kfKZC7psMKKJY_kywfnyTM5FMTHKZ39e4b0Kz1rvAN5pZi7',
    'secret' => 'EAjBK3V2iyh58OP_ZqzGmJn1CTqmZWQWT4qpmm_n9t-54UY8bhMd8HTgeJjKS0VizDwGZp2rbYESyXyg',




    // set your paypal credential


    /**
     * SDK configuration
     */

    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */

        'mode' => 'live',

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
