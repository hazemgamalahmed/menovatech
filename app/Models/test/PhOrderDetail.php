<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class PhOrderDetail extends Model
{
    protected $table = 'ph_order_details';
    public $timestamps =false;  
    protected $guarded = [];
    protected $dates = ['expiration'];
    protected $appends = array('total','medicine_name');
    
    ///////////////////////////////////////////////////Attributes
    public function gettotalAttribute()
    {
        if($this->unit>0){
            $total=$this->price*($this->unit/$this->medicine_unit);
            if($total>0&&$this->discount>0){
                $total=$total-(($total*$this->discount)/100);
            }
            return number_format($total,2,'.',''); 
        }
        return 0;
    }
    public function getMedicineNameAttribute()
    {
        return Medicine::find($this->medicine_id)->name;
    }
    ///////////////////////////////////////////////////Relations
    public function medicine()
    {
        return $this->belongsTo('App\Models\Medicine','medicine_id');
    }
    public function order()
    {
        return $this->belongsTo('App\Models\PhOrder','order_id');
    }
    
}
