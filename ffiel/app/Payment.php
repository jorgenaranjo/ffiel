<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'payments';

    protected $fillable = ['workshop_id', 'user_id', 'date', 'transaction_number',
            'amount', 'payment_method', 'creditCardNumber'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function workshop()
    {
        return $this->belongsTo('App\Workshop');
    }
}
