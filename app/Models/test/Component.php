<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $table = 'components';
    public $timestamps =false;  
    protected $guarded = [];
     ///////////////////////////////////////////////////relations
     public function medicines()
     {
         return $this->belongsToMany('App\Models\Medicine','medicine_components');
     }
     public function unit()
     {
         return $this->belongsTo('App\Models\Unit','unit_id');
     }
}
