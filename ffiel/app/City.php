<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table='citys';

    protected $fillable=['name', 'state_id'];

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function state()
    {
        return $this->belongsTo('App\State');
    }
}
