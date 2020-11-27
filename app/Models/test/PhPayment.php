<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Carbon\Carbon;

class PhPayment extends Model
{
    protected $table = 'ph_payments';
    protected $guarded = [];
    
    ///////////////////////////////////////////////////relations
    public function ph_from()
    {
        return $this->belongsTo('App\Models\Pharmacy','ph_from');
    }
    
    public function ph_to()
    {
        return $this->belongsTo('App\Models\Pharmacy','ph_to');
    }
    
}