@extends('backend.master')
@section('title')
    Admin-Category-List
@stop

@section('content')

<div class="row">
<div class="col-md-12">
    <h1 class="text-center py-3"> Category List </h1>
    <a  class="btn btn-primary my-3 " href="{{route('admin.category.create')}}"> Add New Category</a>

    <table class="table table-striped table-bordered">
  <thead>
    <tr >
      <th scope="col">SL</th>
      <th scope="col">Category Name</th>
      <th scope="col">Category Description</th>
      <th class="text-center" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($categories as $key=>$category)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$category->name}}</td>
      <td>{{$category->description}}</td>
      <td class="text-center">
      <a class="btn btn-info btn-sm" href="#">View</a>
      <a class="btn btn-success btn-sm" href="#">Update</a>
      <a class="btn btn-danger btn-sm" href="#">Delete</a>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>

    </div>
</div>



@stop