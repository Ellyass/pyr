<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OfficeCost extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $dates = [
        'date'
    ];
}
