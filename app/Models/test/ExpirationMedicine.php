<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExpirationMedicine extends Model
{
    use SoftDeletes;

    protected $table = 'expiration_medicines';
    protected $guarded = [];
    // protected $softDelete = true;
    protected $dates = ['deleted_at'];
    ///////////////////////////////////////////////////relations
    public function pharmacy()
    {
        return $this->belongsTo('App\Models\Pharmacy','pharmacy_id');
    }
    
    public function medicine()
    {
        return $this->belongsTo('App\Models\Medicine','medicine_id');
    }
     //////////////////////////////////////////////////////functions
    static function stockPrice($pharmacy_id)
    {
        $stocks=ExpirationMedicine::where('pharmacy_id',$pharmacy_id)->get();
        $price=0;
        foreach ($stocks as $stock) {
            $price+=$stock->medicine->price*($stock->unit/$stock->medicine->unit);
        }
        return $price;
    }
    
}