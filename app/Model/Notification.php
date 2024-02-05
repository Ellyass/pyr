<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $dates = [
        'offer_save_date'
    ];
    public $timestamps = false;
    public function customer()
    {
        return $this->belongsTo('App\Model\Customer','customer_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo('App\User','offer_created_user', 'id');
    }
}
