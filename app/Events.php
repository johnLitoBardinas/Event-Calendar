<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
        'name',
        'from',
        'to',
        'dayofweek',
    ];

    public $timestamps = false;
}
