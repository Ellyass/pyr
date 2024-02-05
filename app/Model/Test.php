<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['ad', 'created_at'];
    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo('App\Model\Customer','customer_id', 'id');
    }
}
