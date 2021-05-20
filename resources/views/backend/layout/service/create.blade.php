@extends('backend.master')

@section('title')
Add-Service
@stop


@section('content')
<div class="row">

    <div class="col-8 offset-2">
        <h4 class="text-center mb-4"> <u> Create A New Service </u></h4>

        <form method="post" action="{{route('admin.service.store')}}" enctype="multipart/form-data">
@csrf

                <div class="form-group row">
                <label for="example-number-input" class="col-2 col-form-label"> Service Image</label>
                <div class="col-10">
                    <input class="form-control " type="file" name="image"  id="example-number-input" >
                    @error('image') <span class="text-danger font-weight-bolder">{{$message}}</span>     @enderror
                </div>
                </div>

                <div class="form-group row">
                <label for="service_name" class="col-2 col-form-label">Service Name</label>
                <div class="col-10">
                    <input class="form-control @error('service_name') is-invalid @enderror" type="text" name="service_name" placeholder="Enter The Service Name" id="service_name" value="{{ old('service_name')}}">
                    @error('service_name') <span class="text-danger font-weight-bolder">{{$message}}</span>     @enderror
                </div>
                </div>

                <div class="form-group row">
                <label for="description" class="col-2 col-form-label">Service Description</label>
                <div class="col-10">
                    <input class="form-control @error('description') is-invalid @enderror" type="text" name="description" placeholder="Enter The Service description" id="description" value="{{ old('description')}}">
                    @error('description') <span class="text-danger font-weight-bolder">{{$message}}</span>     @enderror
                </div>
                </div>

                <div class="form-group row">
                <label for="service_charge" class="col-2 col-form-label">Service Charge</label>
                <div class="col-10">
                    <input class="form-control  @error('service_charge') is-invalid @enderror" type="number" name="service_charge"  placeholder="Enter The Service Charge" id="description" value="{{ old('service_charge')}}">
                    @error('service_charge') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
                </div>

                <button type="submit" class="btn btn-primary ml-3">Submit</button>

                <div class="form-group row">



                
                </div>
</form>
    
    
    </div>



</div>



@stop