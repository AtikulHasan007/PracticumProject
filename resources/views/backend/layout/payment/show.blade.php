@extends('backend.master')

@section('title')
Your service Invoice
@stop


@section('content')

<div class="row">
    <div class="col-8 offset-2">
        <div class="card-header">
            <h4 class="">Booking Records</h4>

        </div>
        <div class="card-header text-right">

            <a href="{{ route('admin.payment.form',$booking->id) }}" class="btn btn-info">Add Payment</a>
            <button type="button" class="btn btn-info" onclick="printDiv()">Print </button>

        </div>

    </div>
</div>


<div id="printArea">
    <div class="row">

        <div class="col-8 offset-2">

            <div class="card" >


                @if(session('message'))
                <div class="alert alert-{{session('type')}} text-center">
                    <p class="text-success text-{{session('type')}}">{{ session('message')}}</p>
                 </div>
             @endif

                <div class="card-body ">
                    <h4 class="text-center font-weight-bold">Mondol Service</h4>
                    <div >
                      <p>Customer Name: <span>{{ $booking->bookingUser->name }}</span></p>
                      <p>Service Name: <span>{{ $booking->bookingService->service_name }}</span> </p>
                      <p>Service Charge: {{ $booking->bookingService->service_charge.'.00 TK' }}</p>
                      <p>Spare Parts Used: {{ $booking->spare_parts }}</p>
                      <p>Spare Parts Charge: {{ $booking->parts_charge }}</p>
                      <p>Total Charge:{{ $booking->parts_charge + $booking->service_charge.'.00 TK'}} </p>
                      <p>Payment Status:@if( (($booking->parts_charge + $booking->service_charge) ==  $booking->paid_amount ))
                    <span>paid</span> <span class="text-dark font-weight-bold">( {{$booking->paid_amount }})</span>
                    @else
                    <span>unpaid</span>  <span class="text-danger font-weight-bold">( {{$booking->parts_charge + $booking->service_charge }})</span>
                    @endif
                    </p>

                    </div>

                </div>

            </div>


            <div class="card" >

                <div class="card-header d-flex justify-content-between">
                    <h4 class="">Payment Invoice</h4>
                </div>
                <div class="card-body ">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Transaction Id</th>
                                <th>Booking Date and  Time</th>
                                <th>Payment Amount</th>
                                <th>Payment Method</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payment as $item )
                            <tr>
                                <td>{{ $item-> trans_id }}</td>
                                <td>{{date("Y-m-d , h:i:s a") }}</td>
                                <td>{{ $item-> amount }}</td>
                                <td>{{ $item-> payment_method }}</td>
                            </tr>

                            @endforeach

                        </tbody>

                    </table>
                </div>
              </div>
            </div>

        </div>

</div>


</div>

<script type="text/javascript">

    function printDiv(){
        var printContents = document.getElementById("printArea").innerHTML;
        var orginalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;
        window.print();

        document.body.innerHTML = orginalContents;
    }

</script>


@stop
