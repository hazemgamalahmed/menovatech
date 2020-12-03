<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicineComponent extends Model
{
    protected $table = 'medicine_components';
    public $timestamps =false;  
    protected $guarded = [];
    
    ///////////////////////////////////////////////////Relations
    
    public function component()
    {
        return $this->belongsTo('App\Models\Component','component_id');
    }
    public function unit()
    {
        return $this->belongsTo('App\Models\Unit','unit_id');
    }
   
}
