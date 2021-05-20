@extends('backend.master')

@section('title')
    Admin-Booking-List
@stop


@section('content')




<!-- page start-->
<div class="row">
    <div class="col-sm-12">
        <section class="card">
            <header class="card-header">
                Payment Records
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>



            <div class="card-body">
                @if(session('success'))
                <div class="alert alert-success text-center">
                <p class="text-success">{{ session('success')}}</p>
                </div>

                @endif
                <div class="adv-table">
                    <aside class="col-lg-12">
                        <section class="card bg-light">
                            <div class="card-body">
                                <form action="{{ route('admin.payment.report') }}" method="GET">
                                <div class="row ">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="from">From Date</label>
                                            <input type="date" value="{{ $fromDate }}" name="from_date" id="from" class="form-control">

                                        </div>

                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="to_date"> To Date</label>
                                            <input type="date" value="{{ $fromDate}}" name="to_date" id="to_date" class="form-control">

                                        </div>

                                    </div>
                                    <div class="col-4 my-4 pl-sm-0 ">
                                        <div class="form-group text-center p">
                                            <button type="submit" class="btn btn-outline-primary">Search</button>
                                  <!--          <button type="button" onclick="printDiv()" class="btn btn-outline-success">Print</button> -->
                                        </div>
                                    </div>

                                </div>
                            </form>

                            </div>
                        </section>
                    </aside>


                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Service Name</th>
                                <th>Service Date</th>
                                <th>Payment</th>

                                <th>Paid Amount</th>
                                <th>Transiction ID</th>
                                <th>Payment Method</th>
                                <th>  Action</th>

                            </tr>
                        </thead>

                        <tbody>
                            @if(count($payments) > 0)
                            @foreach ($payments as $key=>$p )
                            <tr class="gradeX">
                                <td> {{ $key+1 }}</td>
                                <td> {{ $p->payBooking->bookingUser->name }}</td>
                                <td>  {{ $p->payBooking->bookingService->service_name }}</td>
                                <td> {{date("Y-m-d",strtotime( $p->payBooking->date)) }}</td>
                                <td>   {{ $p->amount }}</td>
                                <td>{{ $p->payBooking->paid_amount }}</td>
                                <td>  {{ $p->trans_id }}</td>
                                <td>  {{ $p->payment_method }}</td>


                                <td class="text-center">

                                  <a class="btn btn-outline-info" href="#"><i class="fa fa-eye"></i></a>



                                </td>
                            </tr>
                            @endforeach
                           @else

                           @endif




                        </tbody>

                    </table>
                </div>
            </div>
        </section>
    </div>
</div>








@stop
