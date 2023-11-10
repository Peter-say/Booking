@extends('web.layouts.app')

@section('content')
<!-- Banner start -->
<div class="banner" id="banner-2">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item item active">
                <img class="d-block w-100 h-100" src="{{$web_assets}}/img/banner/img-3.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100">
                    <div class="carousel-content container align-self-center">
                        <div class="row bti-section">
                            <div class="col-lg-7 col-md-12 align-self-center">
                                <div class="banner-test-info wow fadeInLeft delay-04s">
                                    <h2>Welcome To Hotel Alpha</h2>
                                    <p>Lorem ipsum dolor sit amet, conconsectetuer adipiscing elit Lorem ipsum dolor sit amet, conconsectetuer</p>
                                    <a class="btn-lg btn-4 btn-6" href="#">Get Started Now</a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12 wow fadeInRight delay-04s">
                                <div class="search-area-box-2">
                                    <div class="search-contents">
                                        <form method="GET">
                                            <h4>Search Your <span>Rooms</span></h4>
                                            <div class="form-group">
                                                <input type="text" class="btn-default datepicker" placeholder="Check In">
                                            </div>
                                            <div class="form-group clearfix">
                                                <input type="text" class="btn-default datepicker" placeholder="Check Out">
                                            </div>
                                            <div class="form-group clearfix">
                                                <select class="selectpicker search-fields" name="room">
                                                    <option>Room</option>
                                                    <option>Single Room</option>
                                                    <option>Double Room</option>
                                                    <option>Deluxe Room</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="selectpicker search-fields" name="adults">
                                                    <option>Adult</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="selectpicker search-fields" name="children">
                                                    <option>Child</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-0">
                                                <button class="w-100 btn-theme btn-4 btn-7">Search</button>
                                            </div>
                                        </form>
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
<!-- Banner end -->

<!-- Search area box 1 start -->
<div class="search-area-box-1 search-area-box-12">
    <div class="container">
        <div class="search-contents">
            <form method="GET">
                <div class="row g-0 search-your-details">
                    <div class="col-lg-3 col-md-12 align-self-center">
                        <div class="search-your-rooms">
                            <h4>Search</h4>
                            <h3 class="room-header">Your <span>Rooms</span></h3>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-12 col-pad-0">
                                <div class="form-group">
                                    <input type="text" class="btn-default datepicker" placeholder="Check In">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 col-pad-0">
                                <div class="form-group">
                                    <input type="text" class="btn-default datepicker" placeholder="Check Out">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 col-pad-0">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="room">
                                        <option>Room</option>
                                        <option>Single Room</option>
                                        <option>Double Room</option>
                                        <option>Deluxe Room</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 col-pad-0">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="adults">
                                        <option>Adult</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 col-pad-0">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="children">
                                        <option>Child</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 col-pad-0">
                                <div class="form-group">
                                    <button class="btn-md btn-theme btn-4 btn-7 w-100">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Search area box 1 end -->

<!-- About hotel alpha start -->
<div class="about-hotel-alpha content-area-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 wow fadeInLeft delay-04s">
                <div class="about-img-section">
                    <div class="image-box">
                        <div class="image-1"><img src="{{$web_assets}}/img/about/img-4.jpg" class="rounded" alt="photo"></div>
                        <div class="image-2"><img src="{{$web_assets}}/img/about/img-5.jpg" class="rounded" alt="photo"></div>
                    </div>
                    <div class="about-box-Experience">
                        <h3 class="text-white">38</h3>
                        <p class="mb-0 text-white">Years of Experience</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 wow fadeInRight delay-04s align-self-center">
                <div class="about-content-section">
                    <h5>Hotel <span>Bayview</span></h5>
                    <h1>Welcome To Hotel Alpha</h1>
                    <ul class="network-list mb-40">
                        <li>
                            <i class="icon fa fa-building-o"></i>
                            <h4>Compact and Comfortable Rooms</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed magna aliqua.eius to mod incididunt</p>
                        </li>
                        <li>
                            <i class="icon flaticon-room-service"></i>
                            <h4>Friendly Fair Prices and Service</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed magna aliqua.eius to mod incididunt</p>
                        </li>
                        <li>
                            <i class="icon flaticon-school-call-phone-reception"></i>
                            <h4>Public Safety and 24/7 Security</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed magna aliqua.eius to mod incididunt</p>
                        </li>
                    </ul>
                    <a class="btn-lg btn-5" href="#"><span>Explore More</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About hotel alpha start -->

<!-- Hotel section start -->
<div class="content-area hotel-section bg-grey">
    <div class="overlay">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>Our Best Rooms</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
            <div class="row wow fadeInUp delay-04s">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="hotel-box">
                        <!-- Photo thumbnail -->
                        <div class="photo-thumbnail">
                            <div class="photo">
                                <img src="{{$web_assets}}/img/room/img-1.jpg" alt="photo" class="img-fluid w-100">
                                <a href="rooms-details.html">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                            <div class="pr">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-full"></i>
                                </div>
                                $567.99/Night
                            </div>
                        </div>
                        <!-- Detail -->
                        <div class="detail clearfix">
                            <h3>
                                <a href="rooms-details.html">Luxury Room</a>
                            </h3>
                            <p class="location">
                                <a href="rooms-details.html">
                                    <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                </a>
                            </p>
                            <div class="fecilities">
                                <ul>
                                    <li>
                                        <i class="flaticon-bed"></i> Beds
                                    </li>
                                    <li>
                                        <i class="flaticon-air-conditioning"></i>
                                        AC
                                    </li>
                                    <li>
                                        <i class="flaticon-graph-line-screen"></i>
                                        TV
                                    </li>
                                    <li>
                                        <i class="flaticon-weightlifting"></i>
                                        GYM
                                    </li>
                                    <li>
                                        <i class="flaticon-wifi-connection-signal-symbol"></i>
                                        Wi-fi
                                    </li>
                                    <li>
                                        <i class="flaticon-parking"></i>
                                        Parking
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="hotel-box">
                        <!-- Photo thumbnail -->
                        <div class="photo-thumbnail">
                            <div class="photo">
                                <img src="{{$web_assets}}/img/room/img-2.jpg" alt="phot" class="img-fluid w-100">
                                <a href="rooms-details.html">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                            <div class="pr">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-full"></i>
                                </div>
                                $567.99/Night
                            </div>
                        </div>
                        <!-- Detail -->
                        <div class="detail clearfix">
                            <h3>
                                <a href="rooms-details.html">Double Room</a>
                            </h3>
                            <p class="location">
                                <a href="rooms-details.html">
                                    <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                </a>
                            </p>
                            <div class="fecilities">
                                <ul>
                                    <li>
                                        <i class="flaticon-bed"></i> Beds
                                    </li>
                                    <li>
                                        <i class="flaticon-air-conditioning"></i>
                                        AC
                                    </li>
                                    <li>
                                        <i class="flaticon-graph-line-screen"></i>
                                        TV
                                    </li>
                                    <li>
                                        <i class="flaticon-weightlifting"></i>
                                        GYM
                                    </li>
                                    <li>
                                        <i class="flaticon-wifi-connection-signal-symbol"></i>
                                        Wi-fi
                                    </li>
                                    <li>
                                        <i class="flaticon-parking"></i>
                                        Parking
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="hotel-box">
                        <!-- Photo thumbnail -->
                        <div class="photo-thumbnail">
                            <div class="photo">
                                <img src="{{$web_assets}}/img/room/img-4.jpg" alt="photo" class="img-fluid w-100">
                                <a href="rooms-details.html">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                            <div class="pr">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-full"></i>
                                </div>
                                $567.99/Night
                            </div>
                        </div>
                        <!-- Detail -->
                        <div class="detail clearfix">
                            <h3>
                                <a href="rooms-details.html">Single Room</a>
                            </h3>
                            <p class="location">
                                <a href="rooms-details.html">
                                    <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                </a>
                            </p>
                            <div class="fecilities">
                                <ul>
                                    <li>
                                        <i class="flaticon-bed"></i> Beds
                                    </li>
                                    <li>
                                        <i class="flaticon-air-conditioning"></i>
                                        AC
                                    </li>
                                    <li>
                                        <i class="flaticon-graph-line-screen"></i>
                                        TV
                                    </li>
                                    <li>
                                        <i class="flaticon-weightlifting"></i>
                                        GYM
                                    </li>
                                    <li>
                                        <i class="flaticon-wifi-connection-signal-symbol"></i>
                                        Wi-fi
                                    </li>
                                    <li>
                                        <i class="flaticon-parking"></i>
                                        Parking
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="hotel-box">
                        <!-- Photo thumbnail -->
                        <div class="photo-thumbnail">
                            <div class="photo">
                                <img src="{{$web_assets}}/img/room/img-3.jpg" alt="photo" class="img-fluid w-100">
                                <a href="rooms-details.html">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                            <div class="pr">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-full"></i>
                                </div>
                                $567.99/Night
                            </div>
                        </div>
                        <!-- Detail -->
                        <div class="detail clearfix">
                            <h3>
                                <a href="rooms-details.html">Single Room </a>
                            </h3>
                            <p class="location">
                                <a href="rooms-details.html">
                                    <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                </a>
                            </p>
                            <div class="fecilities">
                                <ul>
                                    <li>
                                        <i class="flaticon-bed"></i> Beds
                                    </li>
                                    <li>
                                        <i class="flaticon-air-conditioning"></i>
                                        AC
                                    </li>
                                    <li>
                                        <i class="flaticon-graph-line-screen"></i>
                                        TV
                                    </li>
                                    <li>
                                        <i class="flaticon-weightlifting"></i>
                                        GYM
                                    </li>
                                    <li>
                                        <i class="flaticon-wifi-connection-signal-symbol"></i>
                                        Wi-fi
                                    </li>
                                    <li>
                                        <i class="flaticon-parking"></i>
                                        Parking
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="hotel-box">
                        <!-- Photo thumbnail -->
                        <div class="photo-thumbnail">
                            <div class="photo">
                                <img src="{{$web_assets}}/img/room/img-5.jpg" alt="photo" class="img-fluid w-100">
                                <a href="rooms-details.html">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                            <div class="pr">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-full"></i>
                                </div>
                                $567.99/Night
                            </div>
                        </div>
                        <!-- Detail -->
                        <div class="detail clearfix">
                            <h3>
                                <a href="rooms-details.html">Luxury Room</a>
                            </h3>
                            <p class="location">
                                <a href="rooms-details.html">
                                    <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                </a>
                            </p>
                            <div class="fecilities">
                                <ul>
                                    <li>
                                        <i class="flaticon-bed"></i> Beds
                                    </li>
                                    <li>
                                        <i class="flaticon-air-conditioning"></i>
                                        AC
                                    </li>
                                    <li>
                                        <i class="flaticon-graph-line-screen"></i>
                                        TV
                                    </li>
                                    <li>
                                        <i class="flaticon-weightlifting"></i>
                                        GYM
                                    </li>
                                    <li>
                                        <i class="flaticon-wifi-connection-signal-symbol"></i>
                                        Wi-fi
                                    </li>
                                    <li>
                                        <i class="flaticon-parking"></i>
                                        Parking
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="hotel-box">
                        <!-- Photo thumbnail -->
                        <div class="photo-thumbnail">
                            <div class="photo">
                                <img src="{{$web_assets}}/img/room/img-6.jpg" alt="photo" class="img-fluid w-100">
                                <a href="rooms-details.html">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                            <div class="pr">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-full"></i>
                                </div>
                                $567.99/Night
                            </div>
                        </div>
                        <!-- Detail -->
                        <div class="detail clearfix">
                            <h3>
                                <a href="rooms-details.html">Double Room</a>
                            </h3>
                            <p class="location">
                                <a href="rooms-details.html">
                                    <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                </a>
                            </p>
                            <div class="fecilities">
                                <ul>
                                    <li>
                                        <i class="flaticon-bed"></i> Beds
                                    </li>
                                    <li>
                                        <i class="flaticon-air-conditioning"></i>
                                        AC
                                    </li>
                                    <li>
                                        <i class="flaticon-graph-line-screen"></i>
                                        TV
                                    </li>
                                    <li>
                                        <i class="flaticon-weightlifting"></i>
                                        GYM
                                    </li>
                                    <li>
                                        <i class="flaticon-wifi-connection-signal-symbol"></i>
                                        Wi-fi
                                    </li>
                                    <li>
                                        <i class="flaticon-parking"></i>
                                        Parking
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hotel section end -->

<!-- Our facilties section start -->
<div class="our-facilties-section content-area-5">
    <div class="overlay">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>Our Facilties</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                    <div class="services-box-2 d-flex">
                        <div class="icon">
                            <i class="flaticon-school-call-phone-reception"></i>
                        </div>
                        <div class="contant">
                            <h3><a href="#">24-hour Reception</a></h3>
                            <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate laboriosam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                    <div class="services-box-2 d-flex">
                        <div class="icon">
                            <i class="flaticon-room-service"></i>
                        </div>
                        <div class="contant">
                            <h3><a href="#">Room Service</a></h3>
                            <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate laboriosam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                    <div class="services-box-2 d-flex">
                        <div class="icon">
                            <i class="flaticon-graph-line-screen"></i>
                        </div>
                        <div class="contant">
                            <h3><a href="#">Flat Screen TV</a></h3>
                            <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate laboriosam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                    <div class="services-box-2 d-flex">
                        <div class="icon">
                            <i class="flaticon-weightlifting"></i>
                        </div>
                        <div class="contant">
                            <h3><a href="#">Gym</a></h3>
                            <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate laboriosam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                    <div class="services-box-2 d-flex">
                        <div class="icon">
                            <i class="flaticon-parking"></i>
                        </div>
                        <div class="contant">
                            <h3><a href="#">Free Parking</a></h3>
                            <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate laboriosam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                    <div class="services-box-2 d-flex">
                        <div class="icon">
                            <i class="flaticon-wifi-connection-signal-symbol"></i>
                        </div>
                        <div class="contant">
                            <h3><a href="#">Free Wi-Fi</a></h3>
                            <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate laboriosam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our facilties section end -->

<!-- News popular testimonials start -->
<div class="news-popular-testimonials-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="recent-news mb-50">
                    <!-- Main title -->
                    <div class="main-title">
                        <h1>Recent Events</h1>
                    </div>
                    <div class="recent-news-item mb-3">
                        <div class="thumb">
                            <a href="events-details.html">
                                <img src="{{$web_assets}}/img/events/img-3.jpg" alt="small-img">
                            </a>
                        </div>
                        <div class="content">
                            <h3 class="media-heading">
                                <a href="events-details.html">Wedding David & karen</a>
                            </h3>
                            <div class="listing-post-meta">
                                $740,00 | <a href="#"><i class="fa fa-calendar"></i> Jan 12, 2021</a>
                            </div>
                        </div>
                    </div>
                    <div class="recent-news-item mb-3">
                        <div class="thumb">
                            <a href="events-details.html">
                                <img src="{{$web_assets}}/img/events/img-2.jpg" alt="small-img">
                            </a>
                        </div>
                        <div class="content">
                            <h3 class="media-heading">
                                <a href="events-details.html">Pool Party in summer</a>
                            </h3>
                            <div class="listing-post-meta">
                                $740,00 | <a href="#"><i class="fa fa-calendar"></i> Jan 12, 2021</a>
                            </div>
                        </div>
                    </div>
                    <div class="recent-news-item mb-3">
                        <div class="thumb">
                            <a href="events-details.html">
                                <img src="{{$web_assets}}/img/events/img-5.jpg" alt="small-img">
                            </a>
                        </div>
                        <div class="content">
                            <h3 class="media-heading">
                                <a href="events-details.html">Festival Music Electronic</a>
                            </h3>
                            <div class="listing-post-meta">
                                $740,00 | <a href="#"><i class="fa fa-calendar"></i> Aug 12, 2021</a>
                            </div>
                        </div>
                    </div>
                    <div class="recent-news-item">
                        <div class="thumb">
                            <a href="events-details.html">
                                <img src="{{$web_assets}}/img/events/img-8.jpg" alt="small-img">
                            </a>
                        </div>
                        <div class="content">
                            <h3 class="media-heading">
                                <a href="events-details.html">Alpha Office Events</a>
                            </h3>
                            <div class="listing-post-meta">
                                $740,00 | <a href="#"><i class="fa fa-calendar"></i> Feb 12, 2021</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                <!-- Main title -->
                <div class="main-title">
                    <h1>Testimonials</h1>
                </div>
                <!-- Testimonial 3 start -->
                <div class="testimonials-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="item-inner">
                                                <p>Lorem ipsum dolor sit amet, conser adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a conser nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat</p>
                                                <div class="testimonials-avatar">
                                                    <img src="{{$web_assets}}/img/avatar/avatar-1.jpg" alt="avatar">
                                                </div>
                                                <div class="author-name">
                                                    Karen Paran
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="item-inner">
                                                <p>Lorem ipsum dolor sit amet, conser adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a conser nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat</p>
                                                <div class="testimonials-avatar">
                                                    <img src="{{$web_assets}}/img/avatar/avatar-2.jpg" alt="avatar">
                                                </div>
                                                <div class="author-name">
                                                    David Jackson
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="item-inner">
                                                <p>Lorem ipsum dolor sit amet, conser adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a conser nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat</p>
                                                <div class="testimonials-avatar">
                                                    <img src="{{$web_assets}}/img/avatar/avatar-3.jpg" alt="avatar">
                                                </div>
                                                <div class="author-name">
                                                    Teseira Rony
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 3 end -->
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInRight delay-04s">
                <div class="gallery-section">
                    <!-- Main title -->
                    <div class="main-title">
                        <h1>Popular Places</h1>
                    </div>
                    <!-- Popular places section start -->
                    <div class="popular-places-section">
                        <div id="carouselExampleFade2" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="popular-places-item">
                                        <div class="property-inner">
                                            <div class="photo-overflow">
                                                <div class="property-photo">
                                                    <img class="img-fluid w-100" src="{{$web_assets}}/img/popular-places/img-1.jpg" alt="popular-places">
                                                </div>
                                            </div>
                                            <div class="ling-section">
                                                <h3>
                                                    <a href="rooms-details.html">Australia Melbourne</a>
                                                </h3>
                                                <p class="text">Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate</p>
                                                <a href="rooms-details.html" class="read-more-btn">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="popular-places-item">
                                        <div class="property-inner">
                                            <div class="photo-overflow">
                                                <div class="property-photo">
                                                    <img class="img-fluid w-100" src="{{$web_assets}}/img/popular-places/img-2.jpg" alt="popular-places">
                                                </div>
                                            </div>
                                            <div class="ling-section">
                                                <h3>
                                                    <a href="rooms-details.html">Dubai City</a>
                                                </h3>
                                                <p class="text">Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate</p>
                                                <a href="rooms-details.html" class="read-more-btn">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="popular-places-item">
                                        <div class="property-inner">
                                            <div class="photo-overflow">
                                                <div class="property-photo">
                                                    <img class="img-fluid w-100" src="{{$web_assets}}/img/popular-places/img-3.jpg" alt="popular-places">
                                                </div>
                                            </div>
                                            <div class="ling-section">
                                                <h3>
                                                    <a href="rooms-details.html">American Buffalo</a>
                                                </h3>
                                                <p class="text">Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate</p>
                                                <a href="rooms-details.html" class="read-more-btn">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true">
                                    <i class="fa fa-angle-left"></i>
                                </span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true">
                                     <i class="fa fa-angle-right"></i>
                                </span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <!-- Popular places section end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- News popular testimonials end -->

<!-- staff section start -->
<div class="content-area staff-section comon-slick">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Our Staff</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
        </div>
        <div class="slick row comon-slick-inner wow fadeInUp delay-04s" data-slick='{"slidesToShow": 4, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
            <div class="item slide-box">
                <div class="staff-box-4">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{$web_assets}}/img/staff/img-5.jpg" alt="staff" class="img-fluid w-100">
                            <div class="info">
                                <h4>Hartisona Roy</h4>
                                <span>Hotel Developer</span>
                            </div>
                            <div class="overlay text-light">
                                <h4><a href="staff.html">Hartisona Roy</a></h4>
                                <p>
                                    Btuff sight equal of my woody. Him children bringing goodness suitable she entirely put far daughter pushing point.
                                </p>
                                <ul>
                                    <li class="facebook">
                                        <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="google">
                                        <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item slide-box">
                <div class="staff-box-4">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{$web_assets}}/img/staff/img-6.jpg" alt="staff" class="img-fluid w-100">
                            <div class="info">
                                <h4>Karen Paran</h4>
                                <span>Hotel Director</span>
                            </div>
                            <div class="overlay text-light">
                                <h4><a href="staff.html">Karen Paran</a></h4>
                                <p>
                                    Btuff sight equal of my woody. Him children bringing goodness suitable she entirely put far daughter pushing point.
                                </p>
                                <ul>
                                    <li class="facebook">
                                        <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="google">
                                        <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item slide-box">
                <div class="staff-box-4">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{$web_assets}}/img/staff/img-7.jpg" alt="staff" class="img-fluid w-100">
                            <div class="info">
                                <h4>Hartisona Roy</h4>
                                <span>Hotel Developer</span>
                            </div>
                            <div class="overlay text-light">
                                <h4><a href="staff.html">Hartisona Roy</a></h4>
                                <p>
                                    Btuff sight equal of my woody. Him children bringing goodness suitable she entirely put far daughter pushing point.
                                </p>
                                <ul>
                                    <li class="facebook">
                                        <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="google">
                                        <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item slide-box">
                <div class="staff-box-4">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{$web_assets}}/img/staff/img-8.jpg" alt="staff" class="img-fluid w-100">
                            <div class="info">
                                <h4>Shakira Kaisar</h4>
                                <span>Support Manager</span>
                            </div>
                            <div class="overlay text-light">
                                <h4><a href="staff.html">Shakira Kaisar</a></h4>
                                <p>
                                    Btuff sight equal of my woody. Him children bringing goodness suitable she entirely put far daughter pushing point.
                                </p>
                                <ul>
                                    <li class="facebook">
                                        <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="google">
                                        <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item slide-box">
                <div class="staff-box-4">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{$web_assets}}/img/staff/img-7.jpg" alt="staff" class="img-fluid w-100">
                            <div class="info">
                                <h4>Maikel John</h4>
                                <span>Hotel Manager</span>
                            </div>
                            <div class="overlay text-light">
                                <h4><a href="staff.html">Maikel John</a></h4>
                                <p>
                                    Btuff sight equal of my woody. Him children bringing goodness suitable she entirely put far daughter pushing point.
                                </p>
                                <ul>
                                    <li class="facebook">
                                        <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="google">
                                        <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- staff section ebd -->

<!-- Counters strat -->
<div class="counters-4">
    <div class="container">
        <div class="row">
            <div class="left align-self-center wow fadeInLeft delay-04s">
                <!-- Main title -->
                <div class="main-title main-title-4">
                    <h1>Hotel Statistics</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
            </div>
            <div class="right float-end wow fadeInRight delay-04s">
                <div class="counter-inner">
                    <div class="counter-box blue ml-0">
                        <h1 class="counter">1963</h1>
                        <h5>Guest Stay</h5>
                    </div>
                    <div class="counter-box">
                        <h1 class="counter">1854</h1>
                        <h5>Book Room</h5>
                    </div>
                    <div class="counter-box green">
                        <h1 class="counter">1823</h1>
                        <h5>Member Stay</h5>
                    </div>
                    <div class="counter-box cgreen">
                        <h1 class="counter">1756</h1>
                        <h5>Meals Served</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters strat -->

<!-- Blog section start -->
<div class="blog-section content-area comon-slick">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Our Blog</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
        </div>
        <div class="slick row comon-slick-inner wow fadeInUp delay-04s" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
            <div class="item slide-box">
                <div class="blog-1">
                    <div class="blog-image">
                        <img src="{{$web_assets}}/img/blog/img-5.jpg" alt="image" class="img-fluid w-100">
                        <div class="profile-user">
                            <img src="{{$web_assets}}/img/avatar/avatar-1.jpg" alt="user">
                        </div>
                        <div class="date-box">
                            <span>09</span>Sep
                        </div>
                    </div>
                    <div class="detail">
                        <div class="post-meta clearfix">
                            <ul>
                                <li>
                                    <strong><a href="#">By: Auro Navanth</a></strong>
                                </li>
                                <li class="float-right mr-0"><a href="#"><i class="fa fa-commenting-o"></i></a>205</li>
                                <li class="float-right"><a href="#"><i class="fa fa-calendar"></i></a>328</li>
                            </ul>
                        </div>
                        <h3>
                            <a href="blog-details.html">Standard Post Format Title</a>
                        </h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    </div>
                </div>
            </div>
            <div class="item slide-box">
                <div class="blog-1">
                    <div class="blog-image">
                        <img src="{{$web_assets}}/img/blog/img-4.jpg" alt="image" class="img-fluid w-100">
                        <div class="profile-user">
                            <img src="{{$web_assets}}/img/avatar/avatar-2.jpg" alt="user">
                        </div>
                        <div class="date-box">
                            <span>06</span>Sep
                        </div>
                    </div>
                    <div class="detail">
                        <div class="post-meta clearfix">
                            <ul>
                                <li>
                                    <strong><a href="#">By: Navanth Auro</a></strong>
                                </li>
                                <li class="float-right mr-0"><a href="#"><i class="fa fa-commenting-o"></i></a>205</li>
                                <li class="float-right"><a href="#"><i class="fa fa-calendar"></i></a>328</li>
                            </ul>
                        </div>
                        <h3>
                            <a href="blog-details.html">Alpha Hotel Pars Studiorum</a>
                        </h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    </div>
                </div>
            </div>
            <div class="item slide-box">
                <div class="blog-1">
                    <div class="blog-image">
                        <img src="{{$web_assets}}/img/blog/img-5.jpg" alt="image" class="img-fluid w-100">
                        <div class="profile-user">
                            <img src="{{$web_assets}}/img/avatar/avatar-3.jpg" alt="user">
                        </div>
                        <div class="date-box">
                            <span>14</span>Sep
                        </div>
                    </div>
                    <div class="detail">
                        <div class="post-meta clearfix">
                            <ul>
                                <li>
                                    <strong><a href="#">By: Tanzim</a></strong>
                                </li>
                                <li class="float-right mr-0"><a href="#"><i class="fa fa-commenting-o"></i></a>205</li>
                                <li class="float-right"><a href="#"><i class="fa fa-calendar"></i></a>328</li>
                            </ul>
                        </div>
                        <h3>
                            <a href="blog-details.html">Best Night Photo at Alpha Hotel </a>
                        </h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    </div>
                </div>
            </div>
            <div class="item slide-box">
                <div class="blog-1">
                    <div class="blog-image">
                        <img src="{{$web_assets}}/img/blog/img-6.jpg" alt="image" class="img-fluid w-100">
                        <div class="profile-user">
                            <img src="{{$web_assets}}/img/avatar/avatar-3.jpg" alt="user">
                        </div>
                        <div class="date-box">
                            <span>14</span>Sep
                        </div>
                    </div>
                    <div class="detail">
                        <div class="post-meta clearfix">
                            <ul>
                                <li>
                                    <strong><a href="#">By: Tanzim</a></strong>
                                </li>
                                <li class="float-right mr-0"><a href="#"><i class="fa fa-commenting-o"></i></a>205</li>
                                <li class="float-right"><a href="#"><i class="fa fa-calendar"></i></a>328</li>
                            </ul>
                        </div>
                        <h3>
                            <a href="blog-details.html">Best Night Photo at Alpha Hotel </a>
                        </h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog section end -->

<!-- Partners 2 start -->
<div class="partners-2 comon-slick">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="left-info">
                    <h2>Our Partners</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="partners-inner">
                    <div class="slick row comon-slick-inner" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 2}}]}'>
                        <div class="item slide-box">
                            <div class="partners-box">
                                <img src="{{$web_assets}}/img/brand/brand-1.png" alt="brand" class="img-fluid">
                            </div>
                        </div>
                        <div class="item slide-box">
                            <div class="partners-box">
                                <img src="{{$web_assets}}/img/brand/brand-2.png" alt="brand" class="img-fluid">
                            </div>
                        </div>
                        <div class="item slide-box">
                            <div class="partners-box">
                                <img src="{{$web_assets}}/img/brand/brand-3.png" alt="brand" class="img-fluid">
                            </div>
                        </div>
                        <div class="item slide-box">
                            <div class="partners-box">
                                <img src="{{$web_assets}}/img/brand/brand-4.png" alt="brand" class="img-fluid">
                            </div>
                        </div>
                        <div class="item slide-box">
                            <div class="partners-box">
                                <img src="{{$web_assets}}/img/brand/brand-5.png" alt="brand" class="img-fluid">
                            </div>
                        </div>
                        <div class="item slide-box">
                            <div class="partners-box">
                                <img src="{{$web_assets}}/img/brand/brand-6.png" alt="brand" class="img-fluid">
                            </div>
                        </div>
                        <div class="item slide-box">
                            <div class="partners-box">
                                <img src="{{$web_assets}}/img/brand/brand-4.png" alt="brand" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partners 2 end -->

@endsection