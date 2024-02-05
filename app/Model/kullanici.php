<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class kullanici extends Model
{
    protected $fillable = ['ad','soyad'];
    public $timestamps=false;

}
