@extends('backend.master')

@section('title')
    Admin-Bike-View
@endsection



@section('content')
   

    
<div class="row">
      <div class="col-10 offset-1">
        <div class="card ">
            <div class="card-header bg-info">
              <p class="text-light">Bike  Single Info.</p>
            </div>
            
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Bike Image</th>
                        <td>    <img class="img-thumbnail "  width="200px" src="{{url('uploads/bike/'.$bikes->image)}}" alt="">    </td>
                    </tr>

                    <tr>
                        <th>Bike Brand</th>
                        <td> {{$bikes->brand}}</td>
                    </tr>

                    <tr>
                        <th>Bike Model</th>
                        <td>  {{$bikes->model}}  </td>
                    </tr>

                    <tr>
                        <th>Bike Year</th>
                        <td> {{$bikes->year}}</td>
                    </tr>

                    <tr>
                        <th>Bike CC</th>
                        <td> {{$bikes->cc}} </td>
                    </tr>

                    <tr>
                        <th>Bike Engine No.</th>
                        <td> {{$bikes->engine_no}}</td>
                    </tr>

                    <tr>
                        <th>Date of Sell</th>
                        <td> {{$bikes->date}}</td>
                    </tr>

                    <tr>
                        <th>Free Sevices</th>
                        <td> {{$bikes->total_service}} </td>
                    </tr>
    


                </table>

            </div>
            <div class="card-footer bg-secondary text-right">
                <a href="{{route('admin.bike.list')}}" class="btn btn-primary">Go Back</a>
            </div>
          </div>

      </div>

  </div>
   

@endsection