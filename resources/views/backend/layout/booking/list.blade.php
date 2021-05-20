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
                Dynamic Table
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
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                        <thead>
                            <tr>
                                <th>Booking ID</th>
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
                        @foreach($book as $b)
                        <tbody>

                            <tr class="gradeX">
                                <td> {{$b->id}}</td>
                                <td>{{$b->bookingUser->name}}</td>
                                <td>{{$b->bike_model}}</td>
                                <td> {{$b->service_name}}  </td>
                                <td class="center hidden-phone">{{$b->date}}  </td>
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

                                <td class="text-center">
                                  <a class="btn btn-outline-success" href="{{route('admin.booking.edit',$b->id)}}"><i class="fa fa-edit"></i></a>
                                  <a class="btn btn-outline-info" href="#"><i class="fa fa-eye"></i></a>
                                  <a class="btn btn-outline-danger" href="#"> <i class="fas fa-trash"></i></a>
                                  <a class="btn btn-outline-danger" href="{{route('admin.payment.show',$b->id)}}">  <i class="fas fa-dollar-sign"></i></a>


                                </td>
                            </tr>
                        </tbody>
                            @endforeach
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>








@stop
