@extends('backend.master')
@section('title')

    Admin-Product-List

@stop


@section('content')

<div class="row">

    <div class="col-8 offset-2">
        <h3 class="text-center mb-3">List of Product </h3>
        <a href="{{route('admin.product.create')}}" class="btn btn-dark mb-2">  Add New Product </a>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Quantity </th>
      <th scope="col">Category ID/Name </th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $key=> $dt)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$dt->name}}</td>
      <td>{{$dt->quantity}}</td>
      <td>{{$dt->productCategory->id }}</td>
    
    </tr>
    @endforeach
  </tbody>
</table>
    
    
    
    </div>
</div>

@stop