<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FreeService;
use App\Models\User;
use Illuminate\Http\Request;

class FreeBookingController extends Controller
{
    public function index(){
        return View('frontend.layout.booking.free_booking_form');
    }
    public function doBook(Request $request){
        $request->validate([

            'comment'=> 'required'
        ]);


        FreeService::create([

            'user_id'=>auth()->user()->id,
            'date'=> $request->date,
            'comment'=> $request->comment,
        ]);
        session()->flash('type','success');
           session()->flash('message','Yes');

       return redirect()->back();


    }
}
