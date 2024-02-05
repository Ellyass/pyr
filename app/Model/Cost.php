<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Model\CostFormFile;

class Cost extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $dates = [
        'date'
    ];
            public function user()
         {
              return $this->belongsTo('App\User');
            }
                    public function cost_form()
                 {
                     return $this->belongsTo('App\Model\CostForm');
                 }

}
