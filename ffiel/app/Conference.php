<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conference extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'conferences';

    protected $fillable = ['name', 'startDate', 'quantity', 'street', 'noExt',
        'city', 'state', 'description', 'speaker_name', 'speaker_image', 'image',
        'endDate',  'code', 'active', 'event_id'];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function event()
    {
        return $this->belongsTo('App\Event');
    }
}

