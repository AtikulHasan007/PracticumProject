@extends('backend.master')

@section('title')
Employee-List
@ 


@section('content')

<div class="row">
    <div class="col-md-8 offset-2">
    <h3 class="text-center"> Employee List </h3>
    <a href="{{route('admin.employee.create')}}" class="btn btn-primary mb-3">Add New</a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col"> ID</th>
      <th scope="col">image</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($data as $key=>$d)
  <tbody>
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td><img  width="80px" src="{{url('uploads/employee/'.$d->image)}}" alt=""></td>
      <td> {{$d->name}}</td>
      <td>{{$d->email}}</td>
      <td>{{$d->password}}</td>
      <td>
      <a class="btn btn-primary" href="#">View</a>
      <a class="btn btn-success" href="#">Edit</a>
      <a class="btn btn-danger" href="#">Delete</a>
      
      </td>
    </tr>
    
  </tbody>
  @endforeach
</table>

    
    
    </div>

</div>

@stop