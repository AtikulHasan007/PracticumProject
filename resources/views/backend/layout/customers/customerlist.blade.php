@extends('backend.master')
@section('title')
Customers-List 
@endsection

@section('content')

<div class="row">
    <div class="col-10 offset-1">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Customer
</button>

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
      <th scope="col">Password </th>
      <th scope="col">NID Number</th>
  

    </tr>
  </thead>
  <tbody>
  @foreach($values as $data)
    <tr>
      <th scope="row">{{ $data->id}}</th>
      <td><img  width="80px" src="{{url('uploads/customer/'.$data->image)}}" alt=""></td>
      <td>{{ $data->name}}</td>
      <td>{{ $data->email}}</td>
      <td>{{ $data->contact}}</td>
      <td>{{ $data->address}}</td>
      <td>{{ $data->password}}</td>
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





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <form action="{{route('admin.customer.create')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="modal-body">
     
  <div class="form-group">
    <label for="image">Customer Image</label>
    <input type="file" class="form-control" id="image" name="image">
 
  </div>
  <div class="form-group">
    <label for="name"> Name</label>
    <input type="text" class="form-control" id="name" name="name"  placeholder="Enter name">
 
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label for="contact">Contact Number</label>
    <input type="number" class="form-control" id="contact" name="contact" placeholder="Enter contact number">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Enter customer address">
  </div>
  <div class="form-group">
    <label for="sex">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter the password">
  </div>
  <div class="form-group">
    <label for="nid"> NID Number </label>
    <input type="number" class="form-control" id="nid" name="nid" placeholder="Enter Your NID number">
  </div>
  
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
    </form>
  </div>
</div>
    </div>
    </div>









@endsection