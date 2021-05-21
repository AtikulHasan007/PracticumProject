@extends('backend.master')

@section('title')
    Admin-Booking-List
@stop


@section('content')

<!-- page start-->
<div class="row">
    <div class="col-sm-12">
        <section class="card">

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
                               {{--  <form action="{{ route('admin.booking.list') }}" method="GET">
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
                            </form> --}}

                            </div>
                        </section>
                    </aside>

                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                        <thead>
                            <tr>
                                <th> SL</th>
                                <th>UserName</th>
                                <th>Bike Model</th>
                                <th >Service </th>
                                <th >parts Charge</th>
                                <th>Others_charge</th>
                                <th >Total </th>
                                <th >Action</th>
                                <th >Paid Status</th>
                                <th>Payment</th>
                            </tr>
                        </thead>


                        <tbody>
@foreach ($freeService as $b)


                            <tr class="gradeX">
                                <td> {{$b->id}}</td>
                                <td>{{$b->freeUser->name}}</td>
                                <td>{{$b->freeUser->freeService->brand.' '.$b->freeUser->freeService->model}}</td>
                                <td> {{$b->freeUser->freeService->total_service}}  </td>
                                <td class="center hidden-phone">{{$b->parts_charge}}  </td>
                                <td class="center hidden-phone">{{$b->other_charge}}  </td>
                                <td class="center hidden-phone">{{$b->parts_charge + $b->other_charge}} </td>

                                <td>
                                    @if($b->status=='confirmed')
                                    <span class="text-success font-weight-bold">Confirmed <i class="fas fa-check-circle text-success fa-1x"></i></span>
                                    @elseif($b->status=='finished')
                                    <span class="text-info font-weight-bold">Finished <i class="fas fa-check-circle text-primary"></i></span>
                                    @elseif($b->status=='rejected')
                                    <span class="text-danger font-weight-bold">Rejected <i class="fas fa-times text-danger"></i></span>
                                    @else
                                    <span class="text-info font-weight-bold">Pending <i class="far fa-pause-circle text-warning"></i></span>
                                    @endif

                                    <div class="btn-group dropup pl-2">
                                        <button type="button" class="btn btn-outline-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -2px, 0px);">
                                            <a class="dropdown-item" href="{{route('admin.freebooking.status',['id'=>$b->id,'status'=>'confirmed'])}}">Confirmed</a>
                                            <a class="dropdown-item" href="{{route('admin.freebooking.status',['id'=>$b->id,'status'=>'finished'])}}">Finished</a>
                                            <a class="dropdown-item" href="{{route('admin.freebooking.status',['id'=>$b->id,'status'=>'rejected'])}}">Reject</a>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    @if($b->pay_status=='paid')
                                    <span class="text-success font-weight-bold">Paid <i class="fas fa-check-circle text-success fa-1x"></i></span>

                                    @else
                                    <span class="text-info font-weight-bold">Unpaid <i class="far fa-pause-circle text-warning"></i></span>
                                    @endif

                                    <div class="btn-group dropup pl-2">
                                        <button type="button" class="btn btn-outline-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -2px, 0px);">
                                            <a class="dropdown-item" href="{{route('admin.freebooking.paystatus',['id'=>$b->id,'pay_status'=>'paid'])}}">Paid</a>
                                            <a class="dropdown-item" href="{{route('admin.freebooking.paystatus',['id'=>$b->id,'pay_status'=>'unpaid'])}}">Unpaid</a>

                                        </div>
                                    </div>
                                </td>

                                <td class="text-center d-flex">
                                  <a class="btn btn-outline-success" href="{{route('admin.booking.edit',$b->id)}}"><i class="fa fa-edit"></i></a>
                                  <a class="btn btn-outline-info" href="{{route('admin.booking.view',$b->id)}}"><i class="fa fa-eye"></i></a>

                                  <form action="{{ route('admin.booking.delete',$b->id)}}" method="post" >
                                    @csrf
                                    @method('DELETE')
                                    <a type="submit" class="btn btn-outline-danger ">  <i class="fas fa-trash text-danger"></i></a>

                                    </form>



                                 <!-- <a class="btn btn-outline-danger" href="#"> <i class="fas fa-trash"></i></a> -->
                                  <a class="btn btn-outline-success" href="{{route('admin.payment.show',$b->id)}}">  <i class="fas fa-dollar-sign text-success"></i></a>


                                </td>
                            </tr>
                            @endforeach
                        </tbody>




                    </table>
                </div>
            </div>
        </section>
    </div>
</div>


@stop
