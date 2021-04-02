@extends('backend.master')
@section('title')
    Admin-Product-Category
@stop

@section('content')
   
   <div class="row">
        <div class="col-6 offset-3">
        <h3 class="text-center py-3">   Add a New Product</h3>

        <form method="post" action="{{ route('admin.product.store')}}">
        @csrf
  <!--<div class="form-group">
    <label for="category_id"> Category Name </label>
    <select name="category_id" id="category_id" class="form-control">

    <option value="">select</option>
    @foreach($cats as $cat)
    <option value="{{ $cat->id}}">{{$cat->name}}</option>
    @endforeach
    
    </select>
  
  </div>-->

  <div class="form-group">
    <label for="name"> Product Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Enter product name">
  </div>

  <div class="form-group">
    <label for="quantity">Quantity</label>
    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter Total Quantity">
  </div>
  <div class="form-group">
    <label for="category_id">CTG ID</label>
    <input type="number" class="form-control" id="category_id" name="category_id" placeholder="Enter Total Quantity">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        
        </div>
   </div>
   

@stop

