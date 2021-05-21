@extends('backend.master')

@section('title')
Admin-Dashboard
@endsection

@section('content')
<div class="row state-overview">
                  <div class="col-lg-3 col-sm-6">
                      <section class="card">
                          <div class="symbol terques">
                            <a href="{{ route('admin.customer.list') }}">  <i class="fas fa-user-tie"></i>  </a>
                          </div>
                          <div class="value">
                              <h1 class="">
                                {{ count($user) }}
                              </h1>
                              <p>Total Customers</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="card">
                          <div class="symbol bg-dark">
                            <a href="{{ route('admin.bike.list') }}"> <i class="fas fa-motorcycle text-white"></i> </a>
                          </div>
                          <div class="value">
                              <h1 class="  ">
                                {{ count($bike) }}
                              </h1>
                              <p>Authorized Bikes</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="card">
                          <div class="symbol yellow">
                            <a href="{{ route('admin.booking.list') }}">  <i class="fab fa-hive"> </i> </a>
                          </div>
                          <div class="value">
                              <h1 class="  ">
                                {{ count($booking) }}
                              </h1>
                              <p>Total Bookings</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="card">
                          <div class="symbol blue">
                            <a href="{{ route('admin.service.list') }}">    <i class="fas fa-tools"></i>    </a>
                          </div>
                          <div class="value">
                              <h1 class="  ">
                                {{ count($service) }}
                              </h1>
                              <p>  Services</p>
                          </div>
                      </section>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <section class="card">
                        <div class="symbol bg-dark">
                            <a href="{{ route('admin.payment.report') }}">    <i class="fas fa-dollar-sign"></i>  </a>
                        </div>
                        <div class="value">
                            <h1 class="  ">
                                {{ count($payment) }}
                            </h1>
                            <p>Payments</p>
                        </div>
                    </section>
                </div>

              </div>

@endsection
