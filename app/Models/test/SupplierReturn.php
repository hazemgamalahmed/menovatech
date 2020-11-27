<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupplierReturn extends Model
{
    protected $table = 'supplier_returns';
    protected $guarded = [];
    public function created_by()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function supplier()
    {
        return $this->belongsTo('App\Models\Supplier','supplier_id');
    }
    public function medicine()
    {
        return $this->belongsTo('App\Models\Medicine','medicine_id');
    }
    
}
