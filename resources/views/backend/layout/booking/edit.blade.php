@extends('backend.master')

@section('title')
    Admin-Booking-List 
@stop


@section('content')
<div class="row">
    <div class="col-10 offset-1">
        <div class="card">
            <h5 class="card-header bg-info text-light text-center font-weight-bolder">Add or edit Spare parts and charge</h5>
            <div class="card-body">
           <form action="{{ route('admin.booking.update',$booking->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="service_charge">Service Charge</label>
                <input type="number" name="service_charge" id="service_charge" value="{{$booking->service_charge}}" class="form-control">
                 @error('service_charge') <span class="text-danger font-weight-bolder">{{$message}}</span>     @enderror
            </div>
            <div class="form-group">
                <label for=" parts_charge">Parts Bill</label>
                <input type="number" name="parts_charge" id="parts_charge" value="{{$booking->parts_charge}}" class="form-control">
                 @error('parts_charge') <span class="text-danger font-weight-bolder">{{$message}}</span>     @enderror
            </div>
            <div class="form-group">
                <label for="spare_parts">Spare Parts</label>
               <textarea name="spare_parts" id="spare_parts"  class="form-control" rows="5">{{$booking->spare_parts}}     </textarea>
                @error('spare_parts') <span class="text-danger font-weight-bolder">{{$message}}</span>     @enderror
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-info bt-lg ">Add</button>
            </div>
            </div>
          </div>
           </form>

    </div>

</div>


@stop