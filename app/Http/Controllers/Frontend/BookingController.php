<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;

class   BookingController extends Controller
{

    public function booking($id){
    
       $service=Service::find($id);

        return view('frontend.layout.booking.booking_form',compact('service'));
    }

    public function book(request $request){
        $request->validate([
            'date'=> 'required|date',
            'bike_model'=> 'required|string|max:20',
            'description'=> 'required',
           
        ]);

      
        $service=Service::find($request->service_id);

        $bookingDate = date('Y-m-d', strtotime($request->date));

       $checkBook = Booking::where('user_id',auth()->user()->id);
       $checkBook->whereDate('date',$bookingDate);
       $checkBook = $checkBook->get();
       
       if($checkBook->count() == 0){
        Booking::create([
            

            'service_id'=> $request->service_id,
            'user_id'=> auth()->user()->id,
            'date'=> $request->date,
            'bike_model'=> $request->bike_model,
            'description'=> $request->description,
            'service_charge'=> $service->service_charge,
            'service_name'=> $service->service_name,

        ]);
        return redirect()->back()->with('message','booking done successfully');
       }else{
        return redirect()->back()->with('danger','You have already a booking on the day');

       }
       
        

    }
}
 