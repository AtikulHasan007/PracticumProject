@extends('backend.master')

@section('title')
Bike-List
@endsection

@section('content')


    <div class="row">
    <div class="col-10 offset-1">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add New Bike
</button>

    <h1 class="text-center py-3">Bike List</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Brand</th>
      <th scope="col">Model</th>
      <th scope="col">Bike CC</th>
      <th scope="col">Model Year</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($bikes as $key=> $bike)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$bike-> brand}}</td>
      <td>{{$bike-> model}}</td>
      <td>{{$bike-> cc}}</td>
      <td>{{$bike-> year}}</td>
      <td >
        <a href="#">View</a>
        <a href="#">Update</a>
        <a href="#">CC</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new Bike</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{route('admin.bike.create')}}">
      @csrf
      <div class="modal-body">
      

           
        <div class="form-group">
          <label for="brand">Bike Brand</label>
          <input type="text" class="form-control" id="brand" name="brand" placeholder="Enter Brand">
          
        </div>
        <div class="form-group">
          <label for="model">Bike Model </label>
          <input type="text" class="form-control" id="model" name="model"  placeholder="Model">
        </div>
        <div class="form-group">
          <label for="cc">Bike CC</label>
          <input type="number" class="form-control" id="cc" name="cc"  placeholder="CC">
        </div>
        <div class="form-group">
          <label for="year">Model Year</label>
          <input type="number" class="form-control" id="year" name="year"  placeholder="Year">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>







      </div>
      <div class="modal-footer">
      </div>
    </div>
    </form>

  </div>
</div>
    </div>
    </div>

@endsection