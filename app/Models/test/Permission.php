<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';
    public $timestamps =false;  
    protected $guarded = [];
    public function users()
    {
        return $this->belongsToMany('App\Models\User','user_permissions');
    }
    
    
}
