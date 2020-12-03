<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClosingShift extends Model
{
    protected $table = 'closing_shifts';
    protected $guarded = [];
    
    public function created_by()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
