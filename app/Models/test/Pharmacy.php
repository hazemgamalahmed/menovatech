<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    protected $table = 'pharmacies';
    public $timestamps =false;  
    protected $guarded = [];
    protected $appends = array('total_amount');
    public function medicines()
    {
        return $this->belongsToMany('App\Models\Medicine','fast_items');
    }
    public function request_from()
    {
        return $this->hasMany('App\Models\ItemRequest','pharmacy_id_from');
    }
    public function request_to()
    {
        return $this->hasMany('App\Models\ItemRequest','pharmacy_id_to');
    }
    ///////////////////////////////////////////////////functions
    public function getTotalAmountAttribute()
    {
       $data['orders_in']=PhOrder::where('pharmacy_id',$this->id)->where('status',1)->get()->sum('total');
       $data['orders_out']=PhOrder::where('pharmacy_id',$this->id)->where('status',2)->get()->sum('total');
       $data['payments_in']=PhPayment::where('pharmacy_id',$this->id)->where('status',1)->sum('money');
       $data['payments_out']=PhPayment::where('pharmacy_id',$this->id)->where('status',2)->sum('money');
       $data['amount']=$this->amount;
       
    //    $orders_in=PhOrder::where('ph_to',\Auth::user()->pharmacy_id)->get()->sum('total');
    //    $payments=PhPayment::where('supplier_id',$this->id)->sum('money');
       
    //    $checks=Check::where('supplier_id',$this->id)->whereDate('due_date','<',Carbon::now())->sum('money');
    //    $amount=0;
    //     foreach ($orders as $order) {
    //        $amount-=$order->finaltotal;
    //     }
    //     $amount+=$payments;
    //     $amount+=$checks;
    //     $amount-=$this->amount;
        return $data;
        
    }
}
