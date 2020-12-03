<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Money\Check;
use Carbon\Carbon;


class Supplier extends Model
{
    protected $table = 'suppliers';
    public $timestamps =false;  
    protected $guarded = [];
    protected $appends = array('total_amount');
    ///////////////////////////////////////////////////relations
    public function orders()
    {
        return $this->hasMany('App\Models\OrderIn','supplier_id');
    }
    public function payments()
    {
        return $this->hasMany('App\Models\SupplierPayment','supplier_id');
    }
    public function checks()
    {
        return $this->hasMany('App\Models\Money\Check','supplier_id');
    }
    ///////////////////////////////////////////////////functions
    public function getTotalAmountAttribute()
    {
       $orders=OrderIn::where('status','>',1)->where('supplier_id',$this->id)->get();
       $payments=SupplierPayment::where('supplier_id',$this->id)->sum('money');
       $checks=Check::where('supplier_id',$this->id)->whereDate('due_date','<',Carbon::now())->sum('money');
       $amount=0;
        foreach ($orders as $order) {
           $amount-=$order->finaltotal;
        }
        $amount+=$payments;
        $amount+=$checks;
        $amount-=$this->amount;
        
        return $amount;
    }
}
