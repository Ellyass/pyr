<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Customer;

class CustomerEmail extends Model
{

    public $timestamps = false;
    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo('App\Model\Customer');
    }
}
