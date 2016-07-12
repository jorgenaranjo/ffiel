<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'events';

    protected $fillable = ['name', 'startDate', 'endDate', 'description', 'image'];

    public function workshops()
    {
        return $this->hasMany('App\Workshop');
    }

    public function conferences()
    {
        return $this->hasMany('App\Conference');
    }
}
