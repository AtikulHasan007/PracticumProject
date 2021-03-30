@extends('backend.master')
@section('title')
Admin-Service-List
@stop

@section('content')


<div class="row">
    <div class="col-8 offset-2">
    <h3 class="text-center py-2"> Service List </h3>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModalLong">
  Create Service
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('admin.service.create')}}" method="post">
      @csrf
      <div class="modal-body">
        
                       
                    <div class="form-group">
                        <label for="name">Service Name </label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Service Name">
                       
                    </div>
                    <div class="form-group">
                        <label for="description">Service Description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Enter Service Description">
                    </div>
                    <div class="form-group">
                        <label for="charge">Service Charge</label>
                        <input type="number" class="form-control" id="charge" name="charge" placeholder="Enter Service Charge">
                    </div>
 


      </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-success">Create Service</button>
      </div>
    </div>
    </form>
  </div>
</div>
    
            <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
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
            <td>  {{$d->name}}  </td>
            <td>{{$d->description}}</td>
            <td>{{$d->charge}}</td>
            <td> 
                <a href="#"> View</a>
                <a href="#"> Edit</a>
                <a href="#"> Update</a>
            
            </td>
            </tr>
            <tr>
           @endforeach
        </tbody>
        </table>
            
    </div>

</div>





@stop