@extends('backend.master')
@section('title')
    Admin-Category-Create
@stop

@section('content')

<div class="row">
    <div class="col-6 offset-3">
    <h3 class="text-center mb-3"> Add New Category </h3>
    <form action="{{route('admin.category.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="name">Category Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Category-Name">
  </div>

<!-- <div class="form-group">
    <label for="status">Category Status</label>
    <input type="text" class="form-control" id="status" name="status" placeholder="Enter Category-Status">
  </div>
-->
  <div class="form-group">
    <label for="description">Category Description</label>
    <input type="text" class="form-control" id="description" name="description" placeholder="Enter Category-Description">
  </div>

  <div class="form-group">
    <label for="image">Category Image</label>
    <input type="file" class="form-control" id="image" name="image" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>




    </div>

</div>

@stop