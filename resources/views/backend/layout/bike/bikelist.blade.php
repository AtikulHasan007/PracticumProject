@extends('backend.master')

@section('title')
Bike-List
@endsection

@section('content')

  <div class="row">
  
    <div class="col-10 offset-1">
    <h3 class="text-center mb-3 "> All of our authorized Bikes </h3>

    <a href="{{route('admin.bike.create')}}" class="btn btn-primary mb-3">Add sold Bike</a>

    @if(session('success'))
    <div class="alert alert-success text-center">
    <p class="text-success">{{ session('success')}}</p>
    </div>
    @endif




<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Bike Image</th>
      <th scope="col">Brand</th>
      <th scope="col">Model</th>
      <th scope="col">Year</th>
      <th scope="col">CC</th>
      <th scope="col">Type</th>
      <th scope="col">Engine Number</th>
      <th scope="col">Date of Sell</th>
      <th scope="col">Free Services</th>
      <th scope="col">Action</th>

    </tr>
  </thead>

      @foreach($bikes as $b)

  <tbody>
    <tr>
      <th scope="row">  {{$b->id}}  </th>
      <td> <img width="100px" src="{{url('uploads/bike/'.$b->image)}}" alt=""> </td>
      <td>   {{$b->brand}} </td>
      <td>   {{$b->model}} </td>
      <td>  {{$b->year}} </td>
      <td>  {{$b->cc}} </td>
      <td>  {{$b->type}} </td>
      <td>  {{$b->engine_no}} </td>
      <td>  {{$b->date}} </td>
      <td>  {{$b->total_service}} </td>
      <td>
        <a class="btn btn-primary" href="#">View</a>
        <a  class="btn btn-success" href="#">Edit</a>

        <form action="{{ route('admin.bike.delete',$b->id)}}" method="post" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger ">Delete</button>
        
        </form>
      </td>
    

  </tbody>
  @endforeach
</table>
    
{{ $bikes->links() }}
    </div>
  
   

  </div>




@endsection