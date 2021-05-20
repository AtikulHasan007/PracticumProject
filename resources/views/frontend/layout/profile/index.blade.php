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
                                            <a href="{{ route('motors.user.edit.password') }}">Change Password </i></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('motors.logout') }}">Logout</i></a>
                                        </li>

                                    </ul>
                                </section>

                            </aside>
                        </div>
                        <div class="col-lg-8 col-md-8 bg-light pl-3">
                            @if(session('success'))
                            <div class="alert alert-success text-center">
                            <p class="text-success">{{ session('success')}}</p>
                            </div>
                            @endif
                            <div class="product-content">
                                <h3>Your Information</h3>
                                <div class="product-quantities">
                                    <p>Your Name: <span>{{ auth()->user()->name }}</span></p>
                                    <p>Your Email: <span>{{ auth()->user()->email }}</span></p>
                                    <p>Contact Number: <span>{{ auth()->user()->contact }}</span></p>
                                    <p>Address: <span>{{ auth()->user()->address }}</span></p>
                                    <p>NID: <span>{{ auth()->user()->nid }}</span></p>
                                    <p>Role: <span>{{ auth()->user()->role }}</span></p>

                                </div>
                                <div class="product-add-to-cart">
                                    <a  class="default-btn" href="{{ route('motors.user.profile.edit', auth()->user()->id) }}">

                                       Edit Profile

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</section>



@stop
