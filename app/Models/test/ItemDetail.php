<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemDetail extends Model
{
    protected $table = 'item_details';
    protected $dates = ['freezing'];
    protected $guarded = [];
     ///////////////////////////////////////////////////relations
     public function medicine()
     {
         return $this->belongsTo('App\Models\Medicine','item_id');
     }

     public function pharmacy()
     {
         return $this->belongsTo('App\Models\Pharmacy','pharmacy_id');
     }
     
}
