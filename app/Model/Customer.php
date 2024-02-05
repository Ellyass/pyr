<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\CustomerEmail;
use App\Model\CustomerType;

class Customer extends Model
{
    public $timestamps = false;
    protected $guarded = [];


    public function emails()
    {
        return $this->hasMany('App\Model\CustomerEmail');
    }

    public function customer_emails()
    {
        return $this->hasMany('App\Model\CustomerEmail');
    }

    public function customer_types()
    {
        return $this->hasMany('App\Model\CustomerType');
    }
}
