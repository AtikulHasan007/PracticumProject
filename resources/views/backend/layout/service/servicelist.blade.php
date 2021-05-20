@extends('backend.master')
@section('title')
Admin-Service-List
@stop

@section('content')


<div class="row">
    <div class="col-8 offset-2">
    <h3 class="text-center py-2"> Service List </h3>


<!-- Button trigger modal -->
<a  class="btn btn-primary mb-2" href="{{route('admin.service.create')}}">
  Add Service
</a>
@if(session('success'))
    <div class="alert alert-success text-center">
    <p class="text-success">{{ session('success')}}</p>
    </div>
    @endif


    
            <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Service Photo</th>
            <th scope="col">Service Name</th>
            <th scope="col">Service Description</th>
            <th scope="col">Service Charge</th>
            <th scope="col">Action </th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $key=>$d)
            <tr>
            <th scope="row">{{ $key+1}}</th>
            <td> <img width="100px" src="{{url('uploads/service/'.$d->image)}}" alt=""> </td>
            <td>  {{$d->service_name}}  </td>
            <td>{{$d->description}}</td>
            <td>{{$d->service_charge}}</td>
            <td class="d-flex">
        <a class="btn btn-primary btn-sm m-1" href="#">View</a>
        <a  class="btn btn-success btn-sm m-1" href="#">Edit</a>

        <form action="{{ route('admin.service.delete',$d->id)}}" method="post" >
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm m-1 ">Delete</button>
        
        </form>
      </td>
            </tr>
            <tr>
           @endforeach
        </tbody>
        </table>
            
    </div>

</div>





@stop