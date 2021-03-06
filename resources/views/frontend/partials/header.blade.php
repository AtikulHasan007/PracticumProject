

<div class="top-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <ul class="top-header-information">
                    <li>
                        <i class="flaticon-pin"></i>
                        Old Bus Stand, Tangail Sadar, Tangail
                    </li>
                    <li>
                        <i class="flaticon-clock"></i>
                        Saturday to Thursday 9:00 AM - 10:00 PM
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-12">
                <ul class="top-header-optional">
                    <li>The Service Part of <b> MONDOL MOTORS</b></li>
                    <li>Currency: <b>BDT</b></li>

                </ul>
            </div>
        </div>
    </div>
</div>
    <div class="middle-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="middle-header-logo">
                        <a href="index.html"><img src="{{ asset('frontend/assets/img/logo.png')}}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="middle-header-logo">
                       <h4 class="text-center">Mehedi Hasan Mumu</h4>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="middle-header-search">
                        <form action="{{ route('motors.search') }}" method="post" class="search-form">
                            @csrf
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" name="search"  class="search-field" placeholder="Search the entire store here">
                            </label>
                            <button type="submit">
                                <i class='bx bx-search-alt'></i>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="navbar-area p-relative">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="index.html">
                        <img src="{{ asset('frontend/assets/img/logo.png')}}" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/logo-2.png" alt="image">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="{{ route('motors.home')}}" class="nav-link active">
                                    <img src="{{ asset('frontend/assets/img/logo.png')}}" alt="logo" width="100px" class="img-fluid ">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('motors.home')}}" class="nav-link active">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('motors.about')}}" class="nav-link ">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('motors.service')}}" class="nav-link ">
                                    Our Services
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link ">
                                    Blogs
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link ">
                                    Our Team
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="#" class="nav-link ">
                                    Contact Us
                                </a>
                            </li>
                            @auth
                            <!--user Profile -->
                            <li class="nav-item ">
								<a href="#" class="nav-link active">
                                <img width="32px" class="img-fluid rounded-circle" src="{{ asset('uploads/users/'.auth()->user()->image)}}" alt="image">
									<i class='bx bx-chevron-down'></i>
								</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="{{ route('motors.user.profile') }}" class="nav-link">
											{{auth()->user()->name}}
										</a>
									</li>
									<li class="nav-item">
										<a href="{{ route('motors.user.profile') }}" class="nav-link active">
											Profile
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('motors.logout')}}" class="nav-link">
											Logout
										</a>
									</li>
								</ul>
							</li>
                           @else
                            <li class="nav-item ">

                                <a href="{{route('motors.loginform')}}" class="user-btn nav-link "><i class='flaticon-enter'></i>Login </a>

                            </li>
                            <li class="nav-item ">
                                <a href="{{route('motors.registrationform')}}" class="user-btn nav-link "><i class='flaticon-enter'></i>Register</a>

                            </li>

                        </ul>
                        @endauth

                    </div>
                </nav>

            </div>
        </div>
        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="option-inner">
                        <div class="others-option d-flex align-items-center">
                            <div class="option-item">
                                <span>
                                    Hotline:
                                    <a href="tel:882563789966">(+882) 563 789 966</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
