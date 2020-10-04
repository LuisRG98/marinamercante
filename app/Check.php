<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    protected $casts = [
        'properties' => 'array'
    ];
}
