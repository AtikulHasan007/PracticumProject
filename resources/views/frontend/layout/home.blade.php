@extends('frontend.master')


@section('content')
    <div class="main-slides" >
        <div class="container">
            <div class="row">
                <div class=" col-md-12">
                    <div class="home-slides owl-carousel owl-theme">
                        <div class="main-slides-box">
                            <div class="main-slides-content">
                                <span>Get 30% Off</span>
                                <h1>Best Service For Best Performance</h1>
                                <div class="slides-btn">
                                    <a href="{{ route('motors.service') }}" class="default-btn">Book Now</a>
                                    <a href="#" class="optional-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-slides-box item-two">
                            <div class="main-slides-content">
                                <span>Get 30% Off</span>
                                <h1>Automobile Trends Collections</h1>
                                <div class="slides-btn">
                                    <a href="#" class="default-btn">Shop Now</a>
                                    <a href="#" class="optional-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-slides-box item-three">
                            <div class="main-slides-content">
                                <span>Get 30% Off</span>
                                <h1>Exciting Bundle Get 30% Off</h1>
                                <div class="slides-btn">
                                    <a href="#" class="default-btn">Shop Now</a>
                                    <a href="#" class="optional-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <section class="support-area bg-color">
        <div class="container">
            <div class="custom-row">
                <div class="custom-item">
                    <div class="single-support">
                        <div class="icon">
                            <i class="flaticon-free-delivery"></i>
                        </div>
                        <div class="support-content">
                            <h3>Free Wash</h3>
                            <span>For All Customer</span>
                        </div>
                    </div>
                </div>
                <div class="custom-item">
                    <div class="single-support">
                        <div class="icon">
                            <i class="flaticon-return-of-investment"></i>
                        </div>
                        <div class="support-content">
                            <h3>Easy Returns</h3>
                            <span>World Wide</span>
                        </div>
                    </div>
                </div>
                <div class="custom-item">
                    <div class="single-support">
                        <div class="icon">
                            <i class="flaticon-online-payment"></i>
                        </div>
                        <div class="support-content">
                            <h3>Payment Comfort</h3>
                            <span>World Wide</span>
                        </div>
                    </div>
                </div>
                <div class="custom-item">
                    <div class="single-support">
                        <div class="icon">
                            <i class="flaticon-online-support"></i>
                        </div>
                        <div class="support-content">
                            <h3>Online Support</h3>
                            <span>World Wide</span>
                        </div>
                    </div>
                </div>
                <div class="custom-item">
                    <div class="single-support">
                        <div class="icon">
                            <i class="flaticon-award"></i>
                        </div>
                        <div class="support-content">
                            <h3>Quality Product</h3>
                            <span>World Wide</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="products-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Best Selling Products</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="tab products-list-tab">
                <ul class="tabs">
                    <li>
                        <a href="#">On Sale</a>
                    </li>
                    <li>
                        <a href="#">Trending</a>
                    </li>
                    <li>
                        <a href="#">Reset</a>
                    </li>
                </ul>
                <div class="row align-items-center">

                    <div class="col-lg-12 col-md-12">
                        <div class="tab_content">
                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="single-products">
                                            <div class="products-image">
                                                <a href="products-details.html"><img src="{{ asset('frontend/assets/img/products/products-1.jpg')}}" alt="image"></a>
                                                <div class="tag">Sale!</div>
                                                <ul class="products-action">
                                                    <li>
                                                        <a href="cart.html">
                                                            <i class="flaticon-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html"><i class="flaticon-heart"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="products-content">
                                                <h3>
                                                    <a href="products-details.html">17 Inch Rim</a>
                                                </h3>
                                                <ul class="rating">
                                                    <li><i class='bx bxs-star'></i></li>
                                                    <li><i class='bx bxs-star'></i></li>
                                                    <li><i class='bx bxs-star'></i></li>
                                                    <li><i class='bx bxs-star'></i></li>
                                                    <li><i class='bx bx-star'></i></li>
                                                </ul>
                                                <span>$89.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="single-products">
                                            <div class="products-image">
                                                <a href="products-details.html"><img src="{{ asset('frontend/assets/img/products/products-2.jpg')}}" alt="image"></a>
                                                <div class="tag">Sale!</div>
                                                <ul class="products-action">
                                                    <li>
                                                        <a href="cart.html">
                                                            <i class="flaticon-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html"><i class="flaticon-heart"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="products-content">
                                                <h3>
                                                    <a href="products-details.html">Car Engine</a>
                                                </h3>
                                                <ul class="rating">
                                                    <li><i class='bx bxs-star'></i></li>
                                                    <li><i class='bx bxs-star'></i></li>
                                                    <li><i class='bx bxs-star'></i></li>
                                                    <li><i class='bx bxs-star'></i></li>
                                                    <li><i class='bx bx-star'></i></li>
                                                </ul>
                                                <span>$99.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="single-products">
                                            <div class="products-image">
                                                <a href="products-details.html"><img src="{{ asset('frontend/assets/img/products/products-3.jpg')}}" alt="image"></a>
                                                <div class="tag">Sale!</div>
                                                <ul class="products-action">
                                                    <li>
                                                        <a href="cart.html">
                                                            <i class="flaticon-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html"><i class="flaticon-heart"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="products-content">
                                                <h3>
                                                    <a href="products-details.html">Ispat Rim</a>
                                                </h3>
                                                <ul class="rating">
                                                    <li><i class='bx bxs-star'></i></li>
                                                    <li><i class='bx bxs-star'></i></li>
                                                    <li><i class='bx bxs-star'></i></li>
                                                    <li><i class='bx bxs-star'></i></li>
                                                    <li><i class='bx bx-star'></i></li>
                                                </ul>
                                                <span>$55.00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="newsletter-area item-two ptb-100">
        <div class="container">
            <div class="newsletter-content">
                <span>Special Offer For Subscription</span>
                <h3>Get Instant Discount For Membership</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                <form class="newsletter-form">
                    <input type="email" class="input-newsletter" placeholder="Enter Email Address" name="EMAIL" required autocomplete="off">
                    <button type="submit">Subscribe Now</button>
                    <div id="validator-newsletter" class="form-result"></div>
                </form>
            </div>
        </div>
    </div>



@stop
