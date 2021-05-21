<div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="{{ request()->is('admin/dashboard') ? 'active' : ''}}" href="{{route('admin.dashboard')}}" >
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="{{route('admin.booking.list')}}" >
                          <i class="fa fa-laptop"></i>
                          <span  >Bookings </span>
                      </a>

                  </li>

                  <li class="sub-menu">
                    <a href="{{route('admin.freebooking')}}" >
                        <i class="fa fa-laptop"></i>
                        <span  >Free Bookings </span>
                    </a>

                </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="{{request()->is('admin/customer/list') ? 'active' : ''}}" >
                          <i class="fa fa-book"></i>
                          <span>Customers</span>
                      </a>
                      <ul class="sub">
                          <li class="{{request()->is('admin/customer/list') ? 'active' : ''}}"><a  href="{{route('admin.customer.list')}}">Customers List</a></li>


                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="{{request()->is('admin/bike/list') ? 'active' : ''}}" >
                          <i class="fa fa-cogs"></i>
                          <span>Bikes</span>
                      </a>
                      <ul class="sub">
                          <li class="{{request()->is('admin/bike/list') ? 'active' : ''}}"><a  href="{{route('admin.bike.list')}}">Bike List</a></li>
                          <li><a  href="#">Add Bike</a></li>


                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="{{request()->is('admin/service/list') ? 'active' : ''}}" >
                          <i class="fa fa-tasks"></i>
                          <span> Service </span>
                      </a>
                      <ul class="sub">
                          <li   class="{{request()->is('admin/service/list') ? 'active' : ''}}"><a  href="{{route('admin.service.list')}}">Service</a></li>
                          <li><a  href="{{route('admin.service.create')}}">Add Service  </a></li>

                      </ul>
                  </li>

                  <li class="sub-menu">
                    <a href="{{route('admin.payment.report')}}" >
                        <i class="fa fa-laptop"></i>
                        <span  >Payments report </span>
                    </a>

                </li>










                  <!--multi level menu start-->

                  <!--multi level menu end-->

              </ul>
              <!-- sidebar menu end-->
          </div>
