<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Workshop extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'workshops';

    protected $fillable = ['name', 'startDate', 'quantity', 'street', 'noExt',
                           'city', 'state', 'description', 'speaker_name',
                           'speaker_image', 'image', 'endDate', 'price', 'code',
                           'active', 'available', 'speaker_occupation', 'event_id',
                           'hours'];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function event()
    {
        return $this->belongsTo('App\Event');
    }

    public function payments()
    {
        return $this->hasMany('App\Payment');
    }
}

