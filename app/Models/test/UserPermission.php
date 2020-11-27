<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    protected $table = 'user_permissions';
    public $timestamps =false;  
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    
    
}
