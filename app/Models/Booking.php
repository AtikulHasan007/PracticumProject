<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function bookingUser(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function bookingService(){
        return $this->belongsTo(Service::class,'service_id','id');
    }
}

