<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Occupation extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'occupations';

    protected $fillable = ['name', 'description'];

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
