<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    public $timestamps =false;  
    protected $guarded = [];
    

    // public function subs()
    // {
    //     return $this->hasMany('App\Models\SubCategory','category_id');
    // }
    
}
