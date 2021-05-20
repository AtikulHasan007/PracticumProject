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
                                    <h5 class="card-header">Change Password</h5>
                                    <div class="card-body">
                                        <form action="{{ route('motors.user.update.password')}}" method="post" enctype="multipart/form-data">
                                            @csrf



                                        <div class="form-group">
                                                <label for="old_password"> Old Password </label>
                                                <input type="text" class="form-control  @error('old_password') is-invalid @enderror" id="old_password" value="" name="old_password">
                                                 @error('old_password') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password"> New Password </label>
                                            <input type="text" class="form-control  @error('password') is-invalid @enderror" id="password" value="" name="password">
                                             @error('password') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password"> Confirmed Password </label>
                                        <input type="text" class="form-control  @error('password') is-invalid @enderror" id="password" value="" name="password_confirmation">
                                         @error('password') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
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
