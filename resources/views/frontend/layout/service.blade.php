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
	<h4 class="text-center mb-2"> Do you have free service? If have, then <a class="text-primary" href="{{ route('motors.free_booking') }}">chick here</a> </h4>
		<div class="container">

			<div class="row">
                @if(isset($search))
                <p class="bg-light p-3 text-dark">
                    Your searching results for :-
                    <span class="text-danger font-weight-bolder">'{{ ' '.$search }}'</span>
                     , <span class="text-dark font-weight-bold"> found ( {{ count($service) }} results )</span>
                    </p>
                @endif


			@foreach($service as $d)
				<div class="col-lg-12 col-md-12">
					<div class="shop-item-box">
						<div class="row align-items-center">
							<div class="col-lg-3 col-sm-3">
								<div class="shop-image">
									<a href="products-details.html">
										<img src="{{asset('uploads/service/'.$d->image)}} " alt="image">
									</a>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6">
								<div class="shop-content">
									<h3>
										<a href="products-details.html">{{$d->service_name}}</a>
									</h3>

									<ul class="shop-list">
										<li>Detalis: {{$d->description}}</li>

									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-sm-3">
								<ul class="shop-btn-list">
									<li>
										<span>BDT. {{$d->service_charge}}</span>
									</li>

									<li>
										<a href="{{route('motors.booking',$d->id)}}">Book Now</a>
									</li>

								</ul>
							</div>
						</div>
					</div>

				</div>
			@endforeach
			</div>
		</div>
	</section>


@stop
