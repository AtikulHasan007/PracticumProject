@extends('frontend.master')


@section('content')
<section class="my-account-area ptb-100">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-12 col-md-12">
					<div class="register-form">
						<h2 class="text-center">Book Here Your Service</h2>
                        @if(session('message'))
                    <div class="alert alert-success text-center">
                        <p class="text-success text-{{session('type')}}">{{ session('message')}}</p>
                     </div>
                 @endif
				 @if(session('danger'))
                    <div class="alert alert-danger text-center">
                        <p class="text-success text-danger">{{ session('danger')}}</p>
                     </div>
                 @endif
 
						<form action="{{route('motors.book')}}" method="post">
                            @csrf


							<div class="form-group">

								<input type="hidden" value="{{$service->id}}" name="service_id">
								<label for="bike_model">Service Name:- {{$service->service_name}} </label>
								
						</div>	

						<div class="form-group">
								<label for="bike_model">Service Charge:- {{$service->service_charge}} </label>
								
						</div>	


						<div class="form-group">
								<label for="bike_model">Bike Model</label>
								<input type="text" class="form-control" id="bike_model" name="bike_model"  placeholder="Enter your bike model">
                                 @error('bike_model') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
						</div>	
                       

                        <div class="form-group">
								<label for="description">Date</label>
								<input type="date" class="form-control" id="date" name="date" value="{{date("Y-m-d")}}" min="{{date("Y-m-d")}}" placeholder="Tell your service in detail">
                                 @error('date') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
						</div>	

						 
                        
                        <div class="form-group">
								<label for="description">Description or Comment </label>
								<input type="text" class="form-control" id="description" name="description" placeholder="Tell your service in detail">
                                 @error('description') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
						</div>	

						

                       
                       
                     
							<button type="submit">Book Now</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>



@stop