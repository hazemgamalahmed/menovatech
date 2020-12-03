<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    public $timestamps =false;  
    protected $guarded = [];
    protected $appends = array('total_amount');

     ///////////////////////////////////////////////////relations
     public function orders()
     {
         return $this->hasMany('App\Models\Order','client_id');
     }
     public function payments()
     {
         return $this->hasMany('App\Models\ClientPayment','client_id');
     }
     ///////////////////////////////////////////////////functions
     public function getTotalAmountAttribute()
     {
        if($this->id==1){return 0;}
        $orders=Order::where('status','>',1)->where('client_id',$this->id)->get();
        $payments=ClientPayment::where('client_id',$this->id)->get();
        $amount=0;
         foreach ($orders as $order) {
            $amount+=$order->total;
         }
         foreach ($payments as $payment) {
            $amount-=$payment->money;
         }
         $amount+=$this->amount;
         
         return $amount;
     }
}
