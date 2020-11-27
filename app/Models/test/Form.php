<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'forms';
    public $timestamps =false;  
    protected $guarded = [];
     ///////////////////////////////////////////////////relations
     public function medicine()
     {
         return $this->belongsTo('App\Models\Medicine','medicine_id');
     }
}
