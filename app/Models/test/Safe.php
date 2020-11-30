<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Safe extends Model
{
    protected $table = 'safes';
    public $timestamps =false;  
    protected $guarded = [];
}
