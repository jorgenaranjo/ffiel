<?php
/**
 * Created by PhpStorm.
 * User: taxque
 * Date: 12/07/16
 * Time: 09:58 PM
 */

return array(

    // set your paypal credential
    'client_id' => 'ARsnHDdkGU6IqXGgUbc-D3AOJuDWEwXBfEQmMd9euBorpvAPmazYNlEhoY5XecaWqN3EW_LdW0aMs1Ak',
    'secret' => 'EHdCajQWv4XYGzhEe-iFkrn16Sx9Eoii-f8hRZQEtnjAVvrnHfS7EUaetK_HTpOu_Ap8_KaertaEi_my',

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
