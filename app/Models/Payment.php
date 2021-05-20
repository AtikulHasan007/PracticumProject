<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'booking_id',
        'pay_date',
        'amount',
        'trans_id',
        'payment_method',

    ];

    public function payBooking(){
        return $this->belongsTo(Booking::class,'booking_id','id');
    }
}
