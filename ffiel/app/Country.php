<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'countrys';

    protected $fillable = ['code', 'name'];

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function states()
    {
        return $this->hasMany('App\State');
    }
}
