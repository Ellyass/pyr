<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Customer;
use App\Model\DemoExplanation;

class DemoMetrik extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo('App\Model\Customer');

    }
    protected $dates = [
        'demo_date'
    ];

    public function demo()
    {
        return $this->hasMany('App\Model\DemoExplanation','demo_id','id');
    }
}
