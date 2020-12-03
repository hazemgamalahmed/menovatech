<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    public $timestamps =false;  
    protected $guarded = [];
     ///////////////////////////////////////////////////relations
     public function medicine()
     {
         return $this->hasMany('App\Models\Medicine','medicine_id');
     }
}
