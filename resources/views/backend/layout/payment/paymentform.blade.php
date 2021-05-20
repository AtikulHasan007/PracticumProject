@extends('backend.master')

@section('title')
    Admin-Booking-List
@stop


@section('content')



<div class="row">

        <div class="col-8 offset-2">

            <div class="card" >

                <div class="card-header d-flex justify-content-between">
                    <h4 class="">Payment form</h4>

                </div>
                @if(session('message'))
                <div class="alert alert-{{session('type')}} text-center">
                    <p class="text-success text-{{session('type')}}">{{ session('message')}}</p>
                 </div>
             @endif

                <div class="card-body ">
                    <form action="{{ route('admin.payment.create') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="booking_id" id="" value="{{ $booking->id }}">
                            <label for="amount">Payment Amount</label>
                            <input type="number" name="amount" id="amount" class="form-control" placeholder="0.00">
                            @error('amount') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror

                        </div>
                        <div class="form-group">
                            <label for="pay_date">Payment Date</label>
                            <input type="date" name="pay_date" id="pay_date" value="{{date("Y-m-d")}}" class="form-control" placeholder="0.00">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Do Payment</button>
                        </div>


                    </form>


                </div>
              </div>
        </div>



</div>



@stop
