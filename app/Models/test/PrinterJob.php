<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrinterJob extends Model
{
    protected $table = 'printer_jobs';
    public $timestamps =false;  
    protected $guarded = [];
    
    public function created_by()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function medicine()
    {
        return $this->belongsTo('App\Models\Medicine','medicine_id');
    }
}
