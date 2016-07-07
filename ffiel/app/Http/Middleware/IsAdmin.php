<?php
/**
 * Created by PhpStorm.
 * User: taxque
 * Date: 23/02/16
 * Time: 09:09 PM
 */
namespace App\Http\Middleware;

class IsAdmin extends IsType{

    public function getType()
    {
        return 'admin';
    }

}