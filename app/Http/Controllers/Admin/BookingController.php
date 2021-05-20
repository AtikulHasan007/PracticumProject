<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){
        $book= Booking::all();

    $fromDate = null;
    $toDate = null;

    if(isset($_GET['from_date']) && isset($_GET['to_date'])){
    $fromDate = $_GET['from_date'];
    $toDate = $_GET['to_date'];

    //For one date
    //$bookings = Booking::whereDate('from_date',$fromDate)->get();

    //For range date
    $book = Booking::whereBetween('date',[$fromDate,$toDate])->get();
     }
        return view('backend.layout.booking.list',compact('book','fromDate','toDate'));
    }

    public function edit($id){
        $booking = Booking::find($id);
       return \view('backend.layout.booking.edit',\compact('booking'));

    }
    public function update(Request $request,$id){
        $request->validate([
            'service_charge' => 'required',
            'parts_charge' => 'required',
            'spare_parts' => 'required',

        ]);
        $addExtra = Booking::find($id);
        $addExtra->update([
            'service_charge' => $request->service_charge,
            'parts_charge' => $request->parts_charge,
            'spare_parts' => $request->spare_parts,

        ]);
        return \redirect()->route('admin.booking.list')->with('success','Data Updated');

    }
    public function updateStatus($id,$status)
    {
        $booking = Booking::find($id);
        if($status === 'confirmed'){
            $booking->update(['status' => $status]);
        }elseif($status === 'finished'){
            $booking->update(['status' => $status]);
        }else{

        }

        return redirect()->back();
    }


}
