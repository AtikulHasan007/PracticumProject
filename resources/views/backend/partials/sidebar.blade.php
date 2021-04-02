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
                      <a href="javascript:;" >
                          <i class="fa fa-laptop"></i>
                          <span>Layouts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="boxed_page.html">Bookings List</a></li>
                          <li><a  href="horizontal_menu.html">Requests</a></li>
                          
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="{{request()->is('admin/customer/list') ? 'active' : ''}}" >
                          <i class="fa fa-book"></i>
                          <span>Customers</span>
                      </a>
                      <ul class="sub">
                          <li class="{{request()->is('admin/customer/list') ? 'active' : ''}}"><a  href="{{route('admin.customer.list')}}">Customers List</a></li>
                          <li><a  href="#l">Add New Customer</a></li>
                        
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
                          <li><a  href="#">Add Service List</a></li>
                  
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Bills </span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                          <li><a  href="dynamic_table.html">Dynamic Table</a></li>
                          <li><a  href="editable_table.html">Editable Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="{{request()->is('admin/product/list') ? 'active' : ''}}" >
                          <i class=" fa fa-envelope"></i>
                          <span> Product </span>
                      </a>
                      <ul class="sub">
                          <li class="{{request()->is('admin/product/list') ? 'active' : ''}}"><a  href="{{route('admin.product.list')}}"> Product List </a></li> 
                          <li><a  href="inbox_details.html">Inbox Details</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="{{request()-> is('admin/category/list') ? 'active' : ''}}" >
                          <i class=" fa fa-envelope"></i>
                          <span> Category </span>
                      </a>
                      <ul class="sub">
                          <li class="{{request()->is('admin/category/list') ? 'active' : ''}}"><a  href="{{route('admin.category.list')}}">Category List </a></li>
                          <li><a  href="inbox_details.html">Inbox Details</a></li>
                      </ul>
                  </li>
           
           
                     
               

                  <!--multi level menu start-->
                  
                  <!--multi level menu end-->

              </ul>
              <!-- sidebar menu end-->
          </div>