  
    <div class="middle-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="middle-header-logo">
                        <a href="index.html"><img src="{{ asset('frontend/assets/img/logo.png')}}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="middle-header-search">
                        <form class="search-form">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" placeholder="Search the entire store here">
                            </label>
                            <button type="submit">
                                <i class='bx bx-search-alt'></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <ul class="middle-header-optional">
                        <li>
                            <a href="wishlist.html"><i class="flaticon-heart"><span>0</span></i> Wishlist</a>
                        </li>
                        <li>
                            <a href="{{route('motors.loginform')}}" class="user-btn"><i class='flaticon-enter'></i>Login </a>
                            
                        </li>
                        <li>
                            <a href="{{route('motors.registrationform')}}" class="user-btn"><i class='flaticon-enter'></i>Register</a>
                            
                        </li>
                       
                    </ul>
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
                                <img width="30px" class="img-fluid rounded-circle" src="{{ asset('frontend/assets/img/products/products-1.jpg')}}" alt="image">
									<i class='bx bx-chevron-down'></i>
								</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="index.html" class="nav-link">
											{{auth()->user()->name}}
										</a>
									</li>
									<li class="nav-item">
										<a href="index-2.html" class="nav-link active">
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
                            @endauth
                           
                        </ul>
                      
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
