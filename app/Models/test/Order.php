<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Carbon\Carbon;

class Order extends Model
{
    protected $table = 'orders';
    protected $guarded = [];
    protected $appends = array('total');
    
    ///////////////////////////////////////////////////Attributes
    public function gettotalAttribute()
    {
        $total=0;
        foreach ($this->details()->get() as $detail) {
            $total+=$detail->total;
        }
        foreach ($this->services()->get() as $service) {
            $total+=$service->price;
        }
        if($total>0&&$this->discount>0){
            $total=$total-(($total*$this->discount)/100);
        }
        return number_format((float)$total, 2, '.', '');
    }
    ///////////////////////////////////////////////////relations
    public function client()
    {
        return $this->belongsTo('App\Models\Client','client_id');
    }
    public function created_by()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function details()
    {
        return $this->hasMany('App\Models\OrderDetail','order_id')->orderBy('id','desc');
    }
    public function services()
    {
        return $this->hasMany('App\Models\OrderService','order_id')->orderBy('id','desc');
    }
    ///////////////////////////////////////////////////functions
    static public function getCode()
    {
        $date='C-'.Carbon::now()->format('dmy');
        $orders=Order::whereDate('created_at','>=',Carbon::now())->pluck('code')->toArray();
        $num=1;
        while (in_array($date.$num,$orders)) {
            $num++;
        }
        return $date.$num;
    }
    ///////////////////////////////////////////////////Actions
    public static function boot()
    {
        parent::boot();
        self::creating(function($model){
            $model->code=Order::getCode();
        });
        self::deleting(function($model){
            $model->details()->delete();
        });
        self::updating(function($model){
            if ($model->status==2&&$model->getOriginal('status')==1) {
                \DB::transaction(function () use($model){
                    ////////Add Total To Master Safe
                    if($model->client_id==1){
                        $safe=Safe::where('is_master',1)->first();
                        $safe->update(['amount'=>$safe->amount+$model->total]);   
                    }
                    /********************************* */
                    foreach ($model->details as $detail) {
                        $detail->medicine()->update([
                            'last_action'=>Carbon::now(),
                        ]);

                        $stocks=StockMedicine::where('medicine_id',$detail->medicine_id)
                        ->where('expiration',$detail->expiration)->get();
                        $sell_units=$detail->unit;
                        foreach ($stocks as $stock) {
                            if($stock->unit>=$sell_units){
                                $stock->unit-=$sell_units;
                                $stock->save();
                                $sell_units=0;
                                break;
                            }else{
                                $sell_units-=$stock->unit;
                                $stock->delete();
                            }
                        }
                    }
                });
            }
        });
    }
}