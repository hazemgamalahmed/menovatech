<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientReturn extends Model
{
    protected $table = 'client_returns';
    protected $guarded = [];
    public function created_by()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function client()
    {
        return $this->belongsTo('App\Models\Client','client_id');
    }
    public function medicine()
    {
        return $this->belongsTo('App\Models\Medicine','medicine_id');
    }
    
}
