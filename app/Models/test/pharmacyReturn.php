<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pharmacyReturn extends Model
{
    protected $table = 'ph_returns';
    protected $guarded = [];
    public function created_by()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function pharmacy()
    {
        return $this->belongsTo('App\Models\Pharmacy','pharmacy_id');
    }
    public function medicine()
    {
        return $this->belongsTo('App\Models\Medicine','medicine_id');
    }
    
}
