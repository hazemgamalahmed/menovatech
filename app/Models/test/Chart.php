<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Chart extends Model
{
    protected $table = 'charts';
    public $timestamps =false;  
    protected $guarded = [];
    protected $dates = ['day'];

    public function pharmacy()
    {
        return $this->belongsTo('App\Models\Pharmacy','pharmacy_id');
    }
    static function reporting(){
        $date=Carbon::now()->subDays(1)->format('Y-m-d');
        // $d_to=Carbon::now()->format('Y-m-d');

        foreach (Pharmacy::all() as $pharmacy) {
            $pharmacy_id=$pharmacy->id;
            //جميع المبيعات الكاش
            $success['cash_orders']=\App\Models\Order::where('status','>',1)->whereHas('created_by.pharmacy',function($q)
            use($pharmacy_id) {$q->whereId($pharmacy_id);})->where('client_id',1)
            ->whereDate('created_at',$date)->get()->sum('total');
            
            //جميع المبيعات الآجل
            $success['delay_orders']=\App\Models\Order::where('status','>',1)->whereHas('created_by.pharmacy',function($q)
            use($pharmacy_id) {$q->whereId($pharmacy_id);})->whereDate('created_at',$date)
            ->where('client_id','!=',1)->get()->sum('total');

            //جميع المشتريات
            $success['orders_in']=\App\Models\OrderIn::where('status','>',1)->whereHas('created_by.pharmacy',function($q)
            use($pharmacy_id) {$q->whereId($pharmacy_id);})->whereDate('created_at',$date)
            ->get()->sum('finaltotal');
            
            //جميع الشيكات المصروفة
            $success['checks']=\App\Models\Money\Check::where('pharmacy_id',$pharmacy_id)
            ->where('due_date','<=',Carbon::now())->whereDate('created_at',$date)->sum('money');
            
            //جميع الشيكات الواجب صرفها
            $success['delay_checks']=\App\Models\Money\Check::where('pharmacy_id',$pharmacy_id)
            ->where('due_date','>',Carbon::now())->whereDate('created_at',$date)->sum('money');
            
            //مدفوعات الموردين
            $success['supplier_payments']=\App\Models\SupplierPayment::whereHas('created_by.pharmacy',function($q)
            use($pharmacy_id) {$q->whereId($pharmacy_id);})->whereDate('created_at',$date)->sum('money');
            
            //تحصيلات العملاء
            $success['client_payments']=\App\Models\ClientPayment::whereHas('created_by.pharmacy',function($q)
            use($pharmacy_id) {$q->whereId($pharmacy_id);})->whereDate('created_at',$date)->sum('money');
            
            //تحصيلات الصيدليات
            $success['pharmacy_payment_to']=\App\Models\ExchangePayment::where('pharmacy_id_to',$pharmacy_id)
            ->where('status',2)->whereDate('created_at',$date)->sum('money');
            
            //مدفوعات الصيدليات
            $success['Pharmacy_payment_from']=\App\Models\ExchangePayment::where('pharmacy_id_from',$pharmacy_id)
            ->where('status',2)->whereDate('created_at',$date)->sum('money');

            //مدفوعات إضافية
            $success['other_expenses']=\App\Models\Money\Expense::whereHas('user',function($q)
            use($pharmacy_id) {$q->where('pharmacy_id',$pharmacy_id);})->where('type_id','!=',1)
            ->whereDate('created_at',$date)->sum('money');

            //صرف أرباح
            $success['earnings']=\App\Models\Money\Expense::whereHas('user',function($q)
            use($pharmacy_id) {$q->where('pharmacy_id',$pharmacy_id);})->where('type_id',1)
            ->whereDate('created_at',$date)->sum('money');

            $success['pharmacy_id']=$pharmacy_id;
            Chart::create($success);
        }
    }
}
