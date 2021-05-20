@extends('backend.master')

@section('title')
    Admin-Booking-List
@stop


@section('content')



<div class="row">

        <div class="col-8 offset-2">

            <div class="card" >

                <div class="card-header d-flex justify-content-between">
                    <h4 class="">Payment Records</h4>
                    <a href="{{ route('admin.payment.form',$booking->id) }}" class="btn btn-info">Add Payment</a>

                </div>
                @if(session('message'))
                <div class="alert alert-{{session('type')}} text-center">
                    <p class="text-success text-{{session('type')}}">{{ session('message')}}</p>
                 </div>
             @endif

                <div class="card-body ">
                    <div >
                      <p>Customer Name: <span>{{ $booking->bookingUser->name }}</span></p>
                      <p>Service Name: <span>{{ $booking->bookingService->service_name }}</span> </p>
                      <p>Service Charge: {{ $booking->bookingService->service_charge.'.00 TK' }}</p>
                      <p>Spare Parts Used: {{ $booking->spare_parts }}</p>
                      <p>Spare Parts Charge: {{ $booking->parts_charge }}</p>
                      <p>Total Charge:{{ $booking->parts_charge + $booking->service_charge.'.00 TK'}} </p>
                      <p>Payment Status:@if( (($booking->parts_charge + $booking->service_charge) ==  $booking->paid_amount ))
                    <span>paid</span>
                    @else
                    <span>unpaid</span>
                    @endif
                    </p>

                    </div>

                </div>
              </div>
        </div>



</div>



@stop
