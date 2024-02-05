<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use App\Model\Customer;
use App\Model\Offer;

class Explanation extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    //
   protected $dates = [
        'date'
    ];

}
