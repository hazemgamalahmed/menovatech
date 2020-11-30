<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderService extends Model
{
    protected $table = 'order_services';
    public $timestamps =false;  
    protected $guarded = [];
    ///////////////////////////////////////////////////relations
    public function type()
    {
        return $this->belongsTo('App\Models\ServiceType','type_id');
    }
    public function order()
    {
        return $this->belongsTo('App\Models\Order','order_id');
    }
}
