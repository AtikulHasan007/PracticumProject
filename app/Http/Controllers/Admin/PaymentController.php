<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Payment;
use Exception;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function paymentShow($id){

        $booking = Booking::find($id);
        $payment = Payment::where('booking_id', '=' , $id)->get();
        return view('backend.layout.payment.show',compact('booking','payment'));
    }
    public function paymentForm($id){
        $booking = Booking::find($id);
        $payment = Payment::where('booking_id', '=' , $id)->get();
        return view('backend.layout.payment.paymentform',compact('booking','payment'));


    }
    public function paymentCreate(Request $request){
        $request->validate([
            'amount' => 'required',
        ]);

        try{
           $booking = Booking::where('id', '=', $request->booking_id)->first();


           $amount = $request->input('amount');

           $payments = Payment::where('booking_id', $booking->id)->sum('amount');


           $totalAmount =( ($booking->service_charge + $booking->parts_charge) - $payments);

           if( $amount >  $totalAmount || $amount <  $totalAmount   ){
               session()->flash('type','danger');
               session()->flash('message',"You can not pay more then " . $booking->total_price.' TK.');
               return \redirect()->back();
               }elseif( $amount == 0){
                   session()->flash('type','danger');
                   session()->flash('message',' You can not pay only zero amount');
                   return \redirect()->back();

               }

               $pay = Payment::create([
                   'booking_id' => $booking->id,
                   'amount' => $amount,
                   'trans_id' =>\ucwords(Str::random(9)),
                   'pay_date' => $request->pay_date,
               ]);
              $pay->payBooking->update([
                  'paid_amount' => $amount,

              ]);

               session()->flash('type','success');
               session()->flash('message','Payment Success');
          }catch(Exception $e){
           session()->flash('type','danger');
           session()->flash('message',$e->getMessage());
           return \redirect()->back();

        }
        return \redirect()->route('admin.payment.show',$booking->id);

    }

        //Payment Report Part

        public function report(){

            $payments = Payment::all();
    $fromDate = null;
    $toDate = null;

    if(isset($_GET['from_date']) && isset($_GET['to_date'])){
    $fromDate = $_GET['from_date'];
    $toDate = $_GET['to_date'];

    //For one date
    //$bookings = Booking::whereDate('from_date',$fromDate)->get();

    //For range date
    $payments = Payment::whereBetween('pay_date',[$fromDate,$toDate])->get();
     }
            return view('backend.layout.payment.report',compact('payments','fromDate','toDate'));
        }

}
