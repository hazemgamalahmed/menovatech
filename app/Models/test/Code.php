<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $table = 'codes';
    public $timestamps =false;  
    protected $guarded = [];
     ///////////////////////////////////////////////////relations
     public function medicine()
     {
         return $this->belongsTo('App\Models\Medicine','medicine_id');
     }
}
