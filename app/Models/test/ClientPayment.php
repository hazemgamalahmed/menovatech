<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientPayment extends Model
{
    protected $table = 'client_payments';
    protected $guarded = [];
    public function created_by()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function client()
    {
        return $this->belongsTo('App\Models\Client','client_id');
    }
    
}
