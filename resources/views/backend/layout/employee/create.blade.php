@extends('backend.master')

@section('title')
Add-Employee
@stop

@section('content') 

    
<div class="row">
    <div class="col-md-8 offset-2">
    <h3 class="text-center mb-3"> Add Employee</h3>

    <form method="post" action="{{route('admin.employee.store')}}">
    @csrf
    <div class="form-group">
    <label for="image">Employee Photo</label>
    <input type="file" class="form-control" name='image' id="image"   >
  </div>
  <div class="form-group">
    <label for="name">Employee Name</label>
    <input type="text" class="form-control" name='name' id="name"  placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="email">Employee email</label>
    <input type="email" class="form-control" name='email' id="email"  placeholder="Enter Email">
  </div>

  <div class="form-group">
    <label for="password">Employee Password</label>
    <input type="password" class="form-control" name='password' id="name"  placeholder="Enter Password">
  </div>

 <button type="submit" class="btn btn-primary">Submit</button>
</form>
    

    

    
    
    </div>

</div>

@stop