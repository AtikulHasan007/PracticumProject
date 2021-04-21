@extends('backend/master')

@section('title')
        Admin-Edit-Bike Info
@endsection


@section('content')

    <div class="row">
    
    
        <div class="col-10 offset-1">
        <h4 class="text-center mb-5">Update the form with appropiate informations</h1>
        @if(session('success'))
    <div class="alert alert-success text-center">
    <p class="text-success">{{ session('success')}}</p>
    </div>
    @endif


<form method="post" action="{{route('admin.bike.update', $bikes->id)}}" enctype="multipart/form-data">
@csrf
@method('PUT')

                <div class="form-group row">
                <label for="example-number-input" class="col-2 col-form-label">Bike Image</label>
                <div class="col-10">
                    <input class="form-control " type="file" name="image" placeholder="Enter the bike brand name" id="example-number-input" >
                    
                </div>
                </div>

                <div class="form-group row">
                <label for="example-number-input" class="col-2 col-form-label">Brand</label>
                <div class="col-10">
                    <input class="form-control @error('brand') is-invalid @enderror" type="text" name="brand" placeholder="Enter the bike brand name" id="example-number-input" value="{{ $bikes->brand}}">
                    @error('brand') <span class="text-danger font-weight-bolder">{{$message}}</span>     @enderror
                </div>
                </div>

                <div class="form-group row">
                <label for="example-number-input" class="col-2 col-form-label">Bike Model</label>
                <div class="col-10">
                    <input class="form-control  @error('model') is-invalid @enderror" type="text" name="model" placeholder="Enter the bike model name" id="example-number-input" value="{{ $bikes->model}}">
                    @error('model') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
                </div>
                </div>

                <div class="form-group row">
                <label for="example-number-input" class="col-2 col-form-label">Model year</label>
                <div class="col-10">
                    <input class="form-control  @error('year') is-invalid @enderror" type="number" name="year" placeholder="Enter the bike model year" id="example-number-input" value="{{ $bikes->year}}">
                    @error('year') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
                </div>
                </div>

                <div class="form-group row">
                <label for="example-number-input" class="col-2 col-form-label">Bike CC</label>
                <div class="col-10">
                    <input class="form-control @error('cc') is-invalid @enderror" type="text" name="cc" placeholder="Enter the bike CC" id="example-number-input" value="{{ $bikes->cc}}">
                    @error('cc') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
                </div>
                </div>

                <div class="form-group row">
                <label for="example-number-input" class="col-2 col-form-label">Bike Type</label>
                <div class="col-10">
                    <input class="form-control @error('type')  is-invalid @enderror" type="text" name="type" placeholder="Enter the bike type" id="example-number-input" value="{{ $bikes->type}}">
                    @error('type') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
                </div>
                </div>

                <div class="form-group row">
                <label for="example-number-input" class="col-2 col-form-label">Engine Number</label>
                <div class="col-10">
                    <input class="form-control @error('engine_no') is-invalid @enderror" type="text" name="engine_no" placeholder="Enter the bike engine number" id="example-number-input" value="{{ $bikes->engine_no}}">
                    @error('engine_no') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
                </div>
                </div>
                
                <div class="form-group row">
                <label for="example-date-input" class="col-2 col-form-label">Date of sell</label>
                <div class="col-10">
                    <input class="form-control" type="date" placeholder="Enter the date of today" name="date" id="example-date-input" value="{{ $bikes->date}}">
                    @error('date') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
                </div>
                </div>

                <div class="form-group row">
                <label for="example-number-input" class="col-2 col-form-label"> Total free services</label>
                <div class="col-10">
                    <input class="form-control @error('total_service') is-invalid @enderror" type="text" name="total_service" placeholder="Enter the bike free service number" id="example-number-input" value="{{ $bikes->total_service}}">
                    @error('total_service') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
                </div>
                </div>

                <div class="form-group row">



                <button type="submit" class="btn btn-primary">Submit</button>
                
                </div>
</form>
        
        </div>
    
    </div>



@stop