<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CostForm extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'cost_forms';
    protected $dates = [
        'date'
    ];


}
