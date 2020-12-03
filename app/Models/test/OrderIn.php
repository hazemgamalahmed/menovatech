<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Carbon\Carbon;

class OrderIn extends Model
{
    protected $table = 'orders_in';
    protected $guarded = [];
    protected $appends = array('total');
    // protected $appends = array('total','finaltotal');

    // private $endtotal=0;
    ///////////////////////////////////////////////////Attributes
    public function gettotalAttribute()
    {
        $total=0;
        foreach ($this->details()->get() as $detail) {
            $total+=$detail->total;
        }
        if($total>0&&$this->discount>0){
            $total=$total-(($total*$this->discount)/100);
        }
        return number_format((float)$total, 2, '.', '');
    }
    // public function getfinaltotalAttribute()
    // {
    //     return number_format($this->endtotal,2,'.',''); 
    // }
    ///////////////////////////////////////////////////relations
    public function supplier()
    {
        return $this->belongsTo('App\Models\Supplier','supplier_id');
    }
    public function created_by()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function details()
    {
        return $this->hasMany('App\Models\OrderDetailIn','order_id')->orderBy('id','desc');
    }
    ///////////////////////////////////////////////////functions
    static public function getCode()
    {
        $date='S-'.Carbon::now()->format('dmy');
        $orders=OrderIn::whereDate('created_at','>=',Carbon::now())->pluck('code')->toArray();
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
            $model->code=OrderIn::getCode();
        });
        self::deleting(function($model){
            $model->details()->delete();
        });
        self::updating(function($model){
            if ($model->status==2&&$model->getOriginal('status')==1) {
                \DB::transaction(function () use($model){
                    foreach ($model->details as $detail) {
                        if($detail->expiration){
                            $code='00'.$detail->expiration->format('my');
                        }else{
                            $code='b'.$detail->medicine_id;
                        }
                        
                        $unit=((int)(($detail->unit)/$detail->medicine->unit))+(($detail->unit)%$detail->medicine->unit);
                        $jobs=PrinterJob::where('medicine_id',$detail->medicine_id)
                        ->where('expiration',$detail->expiration)->where('user_id',\Auth::id())->first();
                        if(isset($jobs)){
                            $jobs->unit+=$unit;
                        }else{
                            PrinterJob::create([
                                'user_id'=>\Auth::id(),
                                'medicine_id'=>$detail->medicine_id,
                                'expiration'=>$detail->expiration,
                                'unit'=>$unit,
                                'code'=>$code.(($detail->expiration)?$detail->medicine_id:''),
                            ]);
                        }
                        $stock=StockMedicine::firstOrCreate([
                            'expiration'=>$detail->expiration,
                            'medicine_id'=>$detail->medicine_id,
                        ]);
                        $stock->update(['unit'=>$stock->unit+$detail->unit]);
                    }
                });
            }
        });
    }
}