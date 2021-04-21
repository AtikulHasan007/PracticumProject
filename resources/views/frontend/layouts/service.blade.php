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
		<div class="container">
			<div class="row">
				

			@foreach($bikes as $b)
				<div class="col-lg-12 col-md-12">
					<div class="shop-item-box">
						<div class="row align-items-center">
							<div class="col-lg-3 col-sm-3">
								<div class="shop-image">
									<a href="products-details.html">
										<img src="{{asset('uploads/bike/'.$b->image)}} " alt="image">
									</a>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6">
								<div class="shop-content">
									<h3>
										<a href="products-details.html">{{$b->brand. ' '. $b->model}}</a>
									</h3>
									<div class="rating">
										<i class='bx bxs-star'></i>
										<i class='bx bxs-star'></i>
										<i class='bx bxs-star'></i>
										<i class='bx bxs-star'></i>
										<i class='bx bxs-star'></i>
										<a href="#" class="rating-count">3 reviews</a>
									</div>
									<ul class="shop-list">
										<li>Speed: 750 RPM</li>
										<li>Power Source: Electrical</li>
										<li>Battery Cell Type: Aluminium</li>
										<li>Voltage: 20 Volts</li>
										<li>Battery Capacity: 2 Ah</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-sm-3">
								<ul class="shop-btn-list">
									<li>
										<span>$189.00</span>
									</li>
									<li>
										<a href="cart.html">Add To Cart</a>
									</li>
									<li>
										<a href="wishlist.html">Add To Wishlist</a>
									</li>
									<li>
										<a href="compare.html">Add To Compare</a>
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