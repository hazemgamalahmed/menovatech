<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class OrderDetail extends Model
{
    protected $table = 'order_details';
    public $timestamps =false;  
    protected $guarded = [];
    protected $appends = array('total');
    
    ///////////////////////////////////////////////////Attributes
    public function gettotalAttribute()
    {
        if($this->unit>0){
            $total=$this->price*($this->unit/$this->medicine_unit);
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
        return $this->belongsTo('App\Models\Order','order_id');
    }
    ///////////////////////////////////////////////////functions
    public function barcode()
    {
        return '00'.Carbon::createFromFormat('Y-m-d', $this->expiration)->format('my').$this->medicine_id;
    }
}