<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;

class SafeTransfer extends Model
{
    protected $table = 'safe_transfers';
    public $timestamps =false;  
    protected $guarded = [];
    public function safe_to()
    {
        return $this->belongsTo('App\Models\Safe','safe_id_to');
    }
    public function safe_from()
    {
        return $this->belongsTo('App\Models\Safe','safe_id_from');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    static function transfer($from,$to,$money)
    {
        DB::transaction(function () use($from,$to,$money) {
            $safe_from=Safe::find($from);
            $safe_to=Safe::find($to);
            if(isset($safe_from)&&$safe_from->amount>=$money){
                $safe_from->update(['amount'=>($safe_from->amount-$money)]);
                $safe_to->update(['amount'=>($safe_to->amount+$money)]);
                SafeTransfer::create(['safe_id_to'=>$to,'safe_id_from'=>$from,'money'=>$money,'user_id'=>Auth::id()]);
            }
        });
        return true;
    }
}
