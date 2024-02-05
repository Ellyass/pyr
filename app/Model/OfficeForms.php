<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OfficeForms extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $dates = [
        'offer_date'
    ];
}
