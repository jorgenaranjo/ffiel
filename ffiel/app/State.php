<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table='states';

    protected $fillable=['name', 'country_id'];

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    public function citys()
    {
        return $this->hasMany('App\City');
    }
}
