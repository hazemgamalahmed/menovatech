<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $table = 'medicines';
    public $timestamps =false;  
    protected $guarded = [];
    protected $appends = array('stock','is_fast');
    // protected $dates = ['last_action'];
    
    ///////////////////////////////////////////////////Attributes
    public function getIsFastAttribute()
    {
        $ItemDetail=ItemDetail::where('item_id',$this->id)->first();
        
        return (isset($ItemDetail)&&$ItemDetail->is_fast)?true:false;
    }
    
    public function getdiscountAttribute($value)
    {
        $ItemDetail=ItemDetail::where('item_id',$this->id)->first();
        return (isset($ItemDetail))?$ItemDetail->discount:$value;
    }

    public function getStockAttribute()
    {
        $unit=StockMedicine::where('medicine_id',$this->id)->sum('unit');
        $qty=(int)($unit/$this->unit);
        $unit=$unit%$this->unit;
        return ['qty'=>$qty,'unit'=>$unit];
    }
    
    public function stock($pharmacy_id)
    {
        $unit=StockMedicine::where('medicine_id',$this->id)->sum('unit');
        $qty=(int)($unit/$this->unit);
        $unit=$unit%$this->unit;
        return ['qty'=>$qty,'unit'=>$unit];
    }
    
    public function alternatives()
    {
        $medicines=Medicine::wherehas('components',function($q){
            $q->whereIn('component_id',$this->components()->pluck('component_id')->toArray());
        })->where('id','!=',$this->id)->get();
        return $medicines ;
    }
    // ///////////////////////////////////////////////////Actions
    static function getItem($barcode)
    {
        if(strlen($barcode)<2){return false;}
        if(substr($barcode,0,2)=='00'){
            $medicine=Medicine::find(substr($barcode,6));
            if(!isset($medicine)){return false;}
            return $medicine;
        }
        // dd(substr($barcode,1));
        if(substr($barcode,0,1)=='b'){
            $medicine=Medicine::find(substr($barcode,1));
            if(!isset($medicine)){return false;}
            return $medicine;
        }
        $code=Code::where('code',$barcode)->first();
        if(!isset($code)){return false;}
        return $code->medicine;
    }
    ///////////////////////////////////////////////////relations
    public function item_details($pharmacy_id)
    {
        return $this->hasMany('App\Models\ItemDetail','item_id')->first();
    }
    public function details()
    {
        return $this->hasMany('App\Models\OrderDetail','medicine_id')->orderBy('id','desc');
    }
    public function details_in()
    {
        return $this->hasMany('App\Models\OrderDetailIn','medicine_id')->orderBy('id','desc');
    }
    public function codes()
    {
        return $this->hasMany('App\Models\Code','medicine_id');
    }
    public function stock_details()
    {
        return $this->hasMany('App\Models\StockMedicine','medicine_id');
    }
    public function company()
    {
        return $this->belongsTo('App\Models\Company','company_id');
    }
    public function form()
    {
        return $this->belongsTo('App\Models\Form','form_id');
    }
    // public function components()
    // {
    //     return $this->belongsToMany('App\Models\Component','medicine_components')->withPivot('con');
    // }
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category','medicine_categories');
    }
    public function pharmacies()
    {
        return $this->belongsToMany('App\Models\Pharmacy','item_details','item_id');
    }
    public function components()
    {
        return $this->hasMany('App\Models\MedicineComponent','medicine_id')->with('component')->with('unit');
    }
}
