<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class OrderDetailIn extends Model
{
    protected $table = 'order_details_in';
    public $timestamps =false;  
    protected $guarded = [];
    protected $appends = array('total');
    protected $dates = ['expiration'];
    
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
    ///////////////////////////////////////////////////Relations
    public function medicine()
    {
        return $this->belongsTo('App\Models\Medicine','medicine_id');
    }
    public function order()
    {
        return $this->belongsTo('App\Models\OrderIn','order_id');
    }
    // $av_qty=intdiv($av_unit,$medicine->unit);
    // $av_unit=($av_unit%$medicine->unit);
}
