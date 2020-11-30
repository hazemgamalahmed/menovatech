<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemRequest extends Model
{
    protected $table = 'item_requests';
    protected $guarded = [];
     ///////////////////////////////////////////////////relations
     public function medicine()
     {
         return $this->belongsTo('App\Models\Medicine','medicine_id');
     }

     public function pharmacy_from()
     {
         return $this->belongsTo('App\Models\Pharmacy','pharmacy_id_from');
     }
     
     public function pharmacy_to()
     {
         return $this->belongsTo('App\Models\Pharmacy','pharmacy_id_to');
     }
}
