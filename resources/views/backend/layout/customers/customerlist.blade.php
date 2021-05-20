@extends('backend.master')
@section('title')
Customers-List 
@endsection

@section('content')

<div class="row">
    <div class="col-10 offset-1">
 

    <h1 class="text-center py-3">Customers List</h1>
    @if(session('success'))
    <div class="alert alert-success text-center">
    <p class="text-success">{{ session('success')}}</p>
    </div>

    @endif
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Customer Image</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">NID Number</th>
      <th scope="col">Action</th>
  

    </tr>
  </thead>
  <tbody>
  @foreach($users as $data)
    <tr>
      <th scope="row">{{ $data->id}}</th>
      <td><img  width="80px" src="{{url('uploads/users/'.$data->image)}}" alt=""></td>
      <td>{{ $data->name}}</td>
      <td>{{ $data->email}}</td>
      <td>{{ $data->contact}}</td>
      <td>{{ $data->address}}</td>
      <td>{{ $data->nid}}</td>
   
      <td> 
      <a href="#" class="btn btn-primary btn-sm">view</a>
      <a href="#" class="btn btn-success btn-sm">edit</a>
      <a href="#" class="btn btn-danger btn-sm">delete</a>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>



    </div>
    </div>

@endsection