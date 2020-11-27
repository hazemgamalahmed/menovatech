<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class StockMedicine extends Model
{
    protected $table = 'stock_medicines';
    protected $guarded = [];
    protected $dates = ['expiration'];
    ///////////////////////////////////////////////////relations
    public function medicine()
    {
        return $this->belongsTo('App\Models\Medicine','medicine_id');
    }
    //////////////////////////////////////////////////////functions
    static function stockPrice($pharmacy_id)
    {
        $stocks=StockMedicine::where('pharmacy_id',$pharmacy_id)->get();
        $price=0;
        foreach ($stocks as $stock) {
            $price+=$stock->medicine->price*($stock->unit/$stock->medicine->unit);
        }
        return $price;
    }
    
}
