@extends('backend.master')

@section('title')
    Admin-Free Bookings
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
                                <form action="{{ route('admin.booking.list') }}" method="GET">
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
                                <th> ID</th>
                                <th>User Name</th>
                                <th>Bike Model</th>
                                <th>Service Name</th>
                                <th class="hidden-phone">Date</th>
                                <th class="hidden-phone">Service Charge</th>
                                <th class="hidden-phone">Spare Parts</th>
                                <th class="hidden-phone">Total Amount</th>
                                <th class="hidden-phone">Status</th>
                                <th class="hidden-phone">Action</th>
                            </tr>
                        </thead>
                        @if(count($book)> 0)
                        @foreach($book as $b)
                        <tbody>

                            <tr class="gradeX">
                                <td> {{$b->id}}</td>
                                <td>{{$b->bookingUser->name}}</td>
                                <td>{{$b->bike_model}}</td>
                                <td> {{$b->service_name}}  </td>
                                <td class="center hidden-phone">{{date("Y-m-d",strtotime($b->date))}}  </td>
                                <td class="center hidden-phone">{{$b->service_charge}}  </td>
                                <td class="center hidden-phone">{{$b->parts_charge}}.00 </td>
                                <td class="center hidden-phone">{{$b->service_charge + $b->parts_charge}} </td>
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
                                            <a class="dropdown-item" href="{{route('admin.booking.status',['id'=>$b->id,'status'=>'confirmed'])}}">Confirmed</a>
                                            <a class="dropdown-item" href="{{route('admin.booking.status',['id'=>$b->id,'status'=>'finished'])}}">Finished</a>
                                            <a class="dropdown-item" href="{{route('admin.booking.status',['id'=>$b->id,'status'=>'rejected'])}}">Reject</a>
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
                        </tbody>
                            @endforeach
                            @else

                            @endif
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>


@stop
