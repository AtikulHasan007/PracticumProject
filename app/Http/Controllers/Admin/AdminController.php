<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bike;
use App\Models\Booking;
use App\Models\Payment;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function master(){
        return view('backend.master');
    }
    public function dashboard(){
        $user=User::where('role','=','user')->get();
        $service=Service::all();
        $booking=Booking::all();
        $payment=Payment::all();
        $bike=Bike::all();
        return view('backend.layout.dashboard',compact('user','service','booking','payment','bike'));
    }
}
