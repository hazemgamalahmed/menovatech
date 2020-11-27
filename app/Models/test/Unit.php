<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'units';
    public $timestamps =false;  
    protected $guarded = [];
     ///////////////////////////////////////////////////relations
     public function components()
     {
         return $this->hasMany('App\Models\Component','unit_id');
     }
     
}
