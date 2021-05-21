@extends('frontend.master')


@section('content')



<div class="page-banner-area item-bg4">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-banner-content">
						<h2>Services</h2>

					</div>
				</div>
			</div>
		</div>
	</div>


	<section class="shop-area ptb-100">
	<h4 class="text-center mb-2">  <a class="text-primary" href=" "> </a> </h4>
		<div class="container">



			<div class="row">
                <div class="col-lg-12 col-md-12">
					<div class="register-form">
						<h2 class="text-center">Book Here Your Free Service</h2>
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

						<form action=" {{ route('motors.doBook') }}" method="post">
                            @csrf


						<div class="form-group">
								<label for="bike_model">User Name:  {{ auth()->user()->name }}   </label>
						</div>
                        <div class="form-group">
                            <label for="bike_model">Bike Brand:   {{ auth()->user()->freeService->brand }}  </label>
                    </div>
                    <div class="form-group">
                        <label for="bike_model">Model:  {{ auth()->user()->freeService->model }}  </label>
                </div>
                <div class="form-group">
                    <label for="bike_model">Avaiable Free Services:  {{ auth()->user()->freeService->total_service }} Times  </label>
            </div>







                        <div class="form-group">
								<label for="date">Date</label>
								<input type="date" class="form-control" id="date" name="date" value="{{date("Y-m-d")}}" min="{{date("Y-m-d")}}"  >
                                 @error('date') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
						</div>



                        <div class="form-group">
								<label for="comment">Description or Comment </label >
								<textarea name="comment" id="comment" class="form-control" cols="40" rows="5"></textarea>
                                 @error('comment') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
						</div>






							<button type="submit">Book Now</button>
						</form>
					</div>
				</div>



			</div>
		</div>
	</section>


@stop
