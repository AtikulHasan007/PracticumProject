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
                            @if(session('success'))
                            <div class="alert alert-success text-center">
                            <p class="text-success">{{ session('success')}}</p>
                            </div>
                            @endif
                            <div class="product-content">
                                <h3>Your Booking Record</h3>
                                @foreach ($bookingRecord as $item )
                                <div class="row">
                                    <div class="col-6">
                                    <p>Booking Date: <span class="text-dark">{{ date("Y-M-d",strtotime($item->date))}}</span></p>
                                    <p>Service Name: <span class="text-dark">{{  $item->service_name}}</span></p>
                                    <p>Service Charge: <span class="text-dark">{{  $item->service_charge}}</span></p>
                                    <p>Spare Parts Used: <span class="text-dark">{{  $item->spare_parts}}</span></p>
                                    <p>Spare Parts Charge: <span class="text-dark">{{  $item->parts_charge}}</span></p>
                                    <p>Total Charge: <span class="text-dark">{{  $item->service_charge + $item->parts_charge}}</span></p>

                                    <p>Payment Status: <span class="text-dark"> @if($item->paid_amount> 0)
                                    <span> Paid</span>
                                    @else
                                    <span>Unpaid</span>

                                    @endif
                                </span></p>



                                    </div>
                                    <div class="col-6">
                                        <span class="mx-3">Booking Status</span>
                                       @if($item->status == 'confirmed')
                                       <a class="btn btn-outline-success" href="#">{{ ucfirst($item->status) }}</a>
                                        @elseif ($item->status == 'rejected')
                                        <a class="btn btn-outline-danger" href="#">{{ ucfirst($item->status) }}</a>
                                        @elseif ($item->status == 'finished')
                                        <a class="btn btn-outline-info" href="#">{{ ucfirst($item->status) }}</a>
                                       @else
                                       <a class="btn btn-outline-warning" href="#">{{ ucfirst($item->status) }}</a>

                                       @endif


                                    </div>

                                </div>
                                <hr>

                                @endforeach


                            </div>
                        </div>
                    </div>
        </div>
    </div>
</section>



@stop
