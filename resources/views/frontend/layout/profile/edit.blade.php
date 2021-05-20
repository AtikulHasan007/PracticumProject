@extends('frontend.master')


@section('content')
<section class="products-details-area ptb-100">
    <div class="container">

                <div class="products-details-desc">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4 ">
                            <div class="main-products-image">
                                <img width="280px" class="img-fluid rounded-circle" src="{{ asset('uploads/users/'.auth()->user()->image) }}" alt="image">
                            </div>
                            <aside class="widget-area">

                                <section class="widget widget_categories">
                                  <a class="{{ request()->is('user/profile') ? 'active' : '' }}" href="{{ route('motors.user.profile') }}">
                                    <h3 class="widget-title">{{ auth()->user()->name }}</h3>
                                </a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('motors.user.profile.booking_records') }}">Booking Records </i></a>
                                        </li>
                                        <li>
                                            <a href="#">Change Password </i></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('motors.logout') }}">Logout</i></a>
                                        </li>

                                    </ul>
                                </section>

                            </aside>
                        </div>
                        <div class="col-lg-8 col-md-8 bg-light pl-3">
                            <div class="product-content">
                                <div class="card">
                                    <h5 class="card-header">Featured</h5>
                                    <div class="card-body">
                                        <form action="{{ route('motors.user.profile.update',auth()->user()->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method("PUT")

                                        <div class="form-group">
                                                <label for="image">Your Photo</label>
                                                <input type="file" class="form-control" id="image" name="image">

                                        </div>
                                        <div class="form-group">
                                                <label for="name">Your Name</label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$userEdit->name}}" >
                                                 @error('name') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
                                        </div>



                                        <div class="form-group">
                                                <label for="contact">Contact </label>
                                                <input type="text" class="form-control  @error('contact') is-invalid @enderror" id="contact" value="{{$userEdit->contact}}" name="contact" >
                                                 @error('contact') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
                                        </div>

                                        <div class="form-group">
                                                <label for="address">Address </label>
                                                <input type="text" class="form-control  @error('address') is-invalid @enderror" id="address" value="{{$userEdit->address}}" name="address">
                                                 @error('address') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
                                        </div>

                                           <button type="submit" class="btn btn-outline-success my-3">Update Now</button>
                                        </form>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</section>



@stop
