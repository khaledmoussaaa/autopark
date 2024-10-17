@extends('layouts.common.app')

@section('main')
<!-- Preloader -->
<div class="preloader-bg"></div>
<div id="preloader">
    <div id="preloader-status">
        <div class="preloader-position loader"> <span></span> </div>
    </div>
</div>
<!-- Progress scroll totop -->
<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

<!-- Slider -->
<header class="header slider-fade">
    <div class="owl-carousel owl-theme">
        <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
        <div class="item bg-img" data-overlay-dark="5" data-background="images/slider/11.jpg">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mb-30">
                            <div class="v-middle">
                                <h6>* Premium</h6>
                                <h1>Rental Car</h1>
                                <h5>Bentley Bentayga <span>$600 <i>/ day</i></span></h5> <a href="#0" class="button-1 mt-15 mb-15">View Details <span class="ti-arrow-top-right"></span></a> <a href="#" data-scroll-nav="1" class="button-2 mt-15 mb-15">Rent Now <span class="ti-arrow-top-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item bg-img" data-overlay-dark="5" data-background="images/slider/12.jpg">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mb-30">
                            <div class="v-middle">
                                <h6>* Premium</h6>
                                <h1>Rental Car</h1>
                                <h5>Rolls Royce Cullinan <span>$900 <i>/ day</i></span></h5> <a href="#0" class="button-1 mt-15 mb-15">View Details <span class="ti-arrow-top-right"></span></a> <a href="#" data-scroll-nav="1" class="button-2 mt-15 mb-15">Rent Now <span class="ti-arrow-top-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item bg-img" data-overlay-dark="5" data-background="images/slider/14.jpg">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mb-30">
                            <div class="v-middle">
                                <h6>* Premium</h6>
                                <h1>Rental Car</h1>
                                <h5>Audi RS7 Sportback <span>$450 <i>/ day</i></span></h5> <a href="#0" class="button-1 mt-15 mb-15">View Details <span class="ti-arrow-top-right"></span></a> <a href="#" data-scroll-nav="1" class="button-2 mt-15 mb-15">Rent Now <span class="ti-arrow-top-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- About -->
<section class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-30">
                <div class="content">
                    <div class="section-subtitle">Rentax</div>
                    <div class="section-title">We Are More Than <span>A Car Rental Company</span></div>
                    <p class="mb-30">Car repair quisque sodales dui ut varius vestibulum drana tortor turpis porttiton tellus eu euismod nisl massa nutodio in the miss volume place urna lacinia eros nunta urna mauris vehicula rutrum in the miss on volume interdum.</p>
                    <ul class="list-unstyled list mb-30">
                        <li>
                            <div class="list-icon"> <span class="ti-check"></span> </div>
                            <div class="list-text">
                                <p>Sports and Luxury Cars</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-icon"> <span class="ti-check"></span> </div>
                            <div class="list-text">
                                <p>Economy Cars</p>
                            </div>
                        </li>
                    </ul> <a href="about.html" class="button-1">Read More <span class="ti-arrow-top-right"></span></a>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-12">
                <div class="item"> <img src="images/about.jpg" class="img-fluid" alt="">
                    <div class="curv-butn icon-bg">
                        <a href="https://youtu.be/1LxcTt1adfY" class="vid">
                            <div class="icon"> <i class="ti-control-play"></i> </div>
                        </a>
                        <div class="br-left-top">
                            <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                            </svg>
                        </div>
                        <div class="br-right-bottom">
                            <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- divider line -->
<div class="line-vr-section"></div>
<!-- Services 2 -->
<section class="services2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-30">
                <div class="section-subtitle">What We Do</div>
                <div class="section-title">Our <span>Services</span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <div class="item"> <img src="images/services/1.jpg" class="img-fluid" alt="">
                        <div class="bottom-fade"></div>
                        <div class="title">
                            <h4><a href="service-details.html">Corporate Car Rental</a></h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="service-details.html" class="vid">
                                <div class="icon">01</div>
                            </a>
                            <div class="br-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="br-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item"> <img src="images/services/2.jpg" class="img-fluid" alt="">
                        <div class="bottom-fade"></div>
                        <div class="title">
                            <h4><a href="service-details.html">Car Rental with Driver</a></h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="service-details.html" class="vid">
                                <div class="icon">02</div>
                            </a>
                            <div class="br-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="br-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item"> <img src="images/services/3.jpg" class="img-fluid" alt="">
                        <div class="bottom-fade"></div>
                        <div class="title">
                            <h4><a href="service-details.html">Airport Transfer</a></h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="service-details.html" class="vid">
                                <div class="icon">03</div>
                            </a>
                            <div class="br-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="br-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item"> <img src="images/services/4.jpg" class="img-fluid" alt="">
                        <div class="bottom-fade"></div>
                        <div class="title">
                            <h4><a href="service-details.html">Fleet Leasing</a></h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="service-details.html" class="vid">
                                <div class="icon">04</div>
                            </a>
                            <div class="br-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="br-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item"> <img src="images/services/5.jpg" class="img-fluid" alt="">
                        <div class="bottom-fade"></div>
                        <div class="title">
                            <h4><a href="service-details.html">VIP Transfer</a></h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="service-details.html" class="vid">
                                <div class="icon">05</div>
                            </a>
                            <div class="br-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="br-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item"> <img src="images/services/6.jpg" class="img-fluid" alt="">
                        <div class="bottom-fade"></div>
                        <div class="title">
                            <h4><a href="service-details.html">Private Transfer</a></h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="service-details.html" class="vid">
                                <div class="icon">06</div>
                            </a>
                            <div class="br-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="br-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Booking Search -->
<section data-scroll-index="1" class="background bg-img bg-fixed section-padding" data-overlay-dark="5" data-background="images/slider/2.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-15">
                <div class="section-subtitle">Rent Now</div>
                <div class="section-title">Book Auto Rental</div>
            </div>
        </div>
        <div class="booking-inner clearfix">
            <form action="#0" class="form1 brdr clearfix">
                <div class="col2 c3">
                    <div class="select1_wrapper">
                        <label>Choose Car Type</label>
                        <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                                <option value="0">Choose Car Type</option>
                                <option value="1">All</option>
                                <option value="2">Luxury Cars</option>
                                <option value="3">Sport Cars</option>
                                <option value="4">SUVs</option>
                                <option value="5">Convertible</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col2 c4">
                    <div class="select1_wrapper">
                        <label>Pick Up Location</label>
                        <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                                <option value="0">Pick Up Location</option>
                                <option value="1">Dubai</option>
                                <option value="2">Abu Dhabi</option>
                                <option value="3">Sharjah</option>
                                <option value="4">Alain</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col1 c1">
                    <div class="input1_wrapper">
                        <label>Pick Up Date</label>
                        <div class="input1_inner">
                            <input type="text" class="form-control input datepicker" placeholder="Pick Up Date" required>
                        </div>
                    </div>
                </div>
                <div class="col2 c5">
                    <div class="select1_wrapper">
                        <label>Drop Off Location</label>
                        <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                                <option value="0">Drop Off Location</option>
                                <option value="1">Alain</option>
                                <option value="2">Sharjah</option>
                                <option value="3">Abu Dhabi</option>
                                <option value="4">Dubai</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col1 c2">
                    <div class="input1_wrapper">
                        <label>Return Date</label>
                        <div class="input1_inner">
                            <input type="text" class="form-control input datepicker" placeholder="Return Date">
                        </div>
                    </div>
                </div>
                <div class="col3 c6">
                    <button type="submit" class="booking-button">Rent Now</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Cars 1 -->
<section class="cars1 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-30">
                <div class="section-subtitle">Select Your Car</div>
                <div class="section-title">Luxury <span>Car Fleet</span></div>
            </div>
        </div>
        <div class="cars1-carousel owl-theme owl-carousel">
            <div class="item">
                <div class="img el-list">
                    <img src="images/slider/7.jpg" alt="">
                </div>
                <div class="con opacity-1">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="title"><a href="#">Lamborghini Urus</a></div>
                            <div class="details"> <span><i class="omfi-door"></i> 4 Seats</span> <span><i class="omfi-transmission"></i> Auto</span> <span><i class="omfi-luggage"></i> 2 Bags</span> <span><i class="omfi-age"></i> Age 25</span> </div>
                        </div>
                        <div class="col-md-5">
                            <div class="book">
                                <div><a href="car-details.html" class="btn"><span>Details</span></a></div>
                                <div><span class="price">$750</span><span>/day</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img el-list"> <img src="images/slider/8.jpg" alt=""> </div>
                <div class="con opacity-1">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="title"><a href="#">Aston Martin DBX</a></div>
                            <div class="details"> <span><i class="omfi-door"></i> 4 Seats</span> <span><i class="omfi-transmission"></i> Auto</span> <span><i class="omfi-luggage"></i> 2 Bags</span> <span><i class="omfi-age"></i> Age 25</span></div>
                        </div>
                        <div class="col-md-5">
                            <div class="book">
                                <div><a href="car-details.html" class="btn"><span>Details</span></a></div>
                                <div><span class="price">$500</span><span>/day</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img el-list"> <img src="images/slider/9.jpg" alt=""> </div>
                <div class="con opacity-1">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="title"><a href="#">Bugatti Mistral W16</a></div>
                            <div class="details"> <span><i class="omfi-door"></i> 2 Seats</span> <span><i class="omfi-transmission"></i> Auto</span> <span><i class="omfi-luggage"></i> 2 Bags</span> <span><i class="omfi-age"></i> Age 25</span></div>
                        </div>
                        <div class="col-md-5">
                            <div class="book">
                                <div><a href="car-details.html" class="btn"><span>Details</span></a></div>
                                <div><span class="price">$800</span><span>/day</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img el-list"> <img src="images/slider/11.jpg" alt=""> </div>
                <div class="con opacity-1">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="title"><a href="#">Bentley Bentayga</a></div>
                            <div class="details"> <span><i class="omfi-door"></i> 4 Seats</span> <span><i class="omfi-transmission"></i> Auto</span> <span><i class="omfi-luggage"></i> 2 Bags</span> <span><i class="omfi-age"></i> Age 25</span></div>
                        </div>
                        <div class="col-md-5">
                            <div class="book">
                                <div><a href="car-details.html" class="btn"><span>Details</span></a></div>
                                <div><span class="price">$600</span><span>/day</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img el-list"> <img src="images/slider/12.jpg" alt=""> </div>
                <div class="con opacity-1">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="title"><a href="#">Rolls Royce Cullinan</a></div>
                            <div class="details"> <span><i class="omfi-door"></i> 4 Seats</span> <span><i class="omfi-transmission"></i> Auto</span> <span><i class="omfi-luggage"></i> 4 Bags</span> <span><i class="omfi-age"></i> Age 25</span></div>
                        </div>
                        <div class="col-md-5">
                            <div class="book">
                                <div><a href="car-details.html" class="btn"><span>Details</span></a></div>
                                <div><span class="price">$900</span><span>/day</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img el-list"> <img src="images/slider/13.jpg" alt=""> </div>
                <div class="con opacity-1">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="title"><a href="#">Bentley Continental</a></div>
                            <div class="details"> <span><i class="omfi-door"></i> 4 Seats</span> <span><i class="omfi-transmission"></i> Auto</span> <span><i class="omfi-luggage"></i> 2 Bags</span> <span><i class="omfi-age"></i> Age 25</span></div>
                        </div>
                        <div class="col-md-5">
                            <div class="book">
                                <div><a href="car-details.html" class="btn"><span>Details</span></a></div>
                                <div><span class="price">$500</span><span>/day</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img el-list"> <img src="images/slider/14.jpg" alt=""> </div>
                <div class="con opacity-1">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="title"><a href="#">Audi RS7 Sportback</a></div>
                            <div class="details"> <span><i class="omfi-door"></i> 4 Seats</span> <span><i class="omfi-transmission"></i> Auto</span> <span><i class="omfi-luggage"></i> 2 Bags</span> <span><i class="omfi-age"></i> Age 25</span></div>
                        </div>
                        <div class="col-md-5">
                            <div class="book">
                                <div><a href="car-details.html" class="btn"><span>Details</span></a></div>
                                <div><span class="price">$450</span><span>/day</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img el-list"> <img src="images/slider/15.jpg" alt=""> </div>
                <div class="con opacity-1">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="title"><a href="#">AUDI Q8</a></div>
                            <div class="details"> <span><i class="omfi-door"></i> 4 Seats</span> <span><i class="omfi-transmission"></i> Auto</span> <span><i class="omfi-luggage"></i> 3 Bags</span> <span><i class="omfi-age"></i> Age 25</span></div>
                        </div>
                        <div class="col-md-5">
                            <div class="book">
                                <div><a href="car-details.html" class="btn"><span>Details</span></a></div>
                                <div><span class="price">$450</span><span>/day</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- divider line -->
<div class="line-vr-section"></div>
<!-- Car Category -->
<section class="car-types1 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-30">
                <div class="section-subtitle">Categories</div>
                <div class="section-title">Rental <span>Car Types</span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <div class="item"> <img src="images/cars/03.jpg" class="img-fluid" alt="">
                        <div class="title">
                            <h4>Luxury Cars</h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="car-details.html" class="vid">
                                <div class="icon"> <i class="ti-arrow-top-right"></i> </div>
                            </a>
                            <div class="br-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="br-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item"> <img src="images/cars/04.jpg" class="img-fluid" alt="">
                        <div class="title">
                            <h4>Sport Cars</h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="car-details.html" class="vid">
                                <div class="icon"> <i class="ti-arrow-top-right"></i> </div>
                            </a>
                            <div class="br-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="br-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item"> <img src="images/cars/02.jpg" class="img-fluid" alt="">
                        <div class="title">
                            <h4>SUV</h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="car-details.html" class="vid">
                                <div class="icon"> <i class="ti-arrow-top-right"></i> </div>
                            </a>
                            <div class="br-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="br-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item"> <img src="images/cars/01.jpg" class="img-fluid" alt="">
                        <div class="title">
                            <h4>Convertible</h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="car-details.html" class="vid">
                                <div class="icon"> <i class="ti-arrow-top-right"></i> </div>
                            </a>
                            <div class="br-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="br-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item"> <img src="images/cars/05.jpg" class="img-fluid" alt="">
                        <div class="title">
                            <h4>Sedan</h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="car-details.html" class="vid">
                                <div class="icon"> <i class="ti-arrow-top-right"></i> </div>
                            </a>
                            <div class="br-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="br-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item"> <img src="images/cars/06.jpg" class="img-fluid" alt="">
                        <div class="title">
                            <h4>Small Cars</h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="car-details.html" class="vid">
                                <div class="icon"> <i class="ti-arrow-top-right"></i> </div>
                            </a>
                            <div class="br-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="br-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- divider line -->
<div class="line-vr-section"></div>
<!-- Process -->
<section class="process section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center mb-30">
                <div class="section-subtitle">Steps</div>
                <div class="section-title white">Car Rental <span>Process</span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-30">
                <div class="item">
                    <div class="text">
                        <h5>Choose A Car</h5>
                        <p>View our range of cars, find your perfect car for the coming days.</p>
                    </div>
                    <div class="numb">
                        <div class="numb-curv">
                            <div class="number">01.</div>
                            <div class="shap-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="shap-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-30">
                <div class="item">
                    <div class="text">
                        <h5>Come In Contact</h5>
                        <p>Our advisor team is ready to help you with the booking process or any questions.</p>
                    </div>
                    <div class="numb">
                        <div class="numb-curv">
                            <div class="number">02.</div>
                            <div class="shap-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="shap-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-30">
                <div class="item">
                    <div class="text">
                        <h5>Enjoy Driving</h5>
                        <p>Receive the key and enjoy your car. We treat all our cars with respect.</p>
                    </div>
                    <div class="numb">
                        <div class="numb-curv">
                            <div class="number">03.</div>
                            <div class="shap-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="shap-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 text-center mt-15">
                <p><span class="ti-info"></span> If you've never rented a car before, we'll guide you through the process.</p>
            </div>
        </div>
    </div>
</section>
<!-- Video -->
<section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="4" data-background="images/slider/1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-subtitle">Explore</div>
                <div class="section-title white">Car <span>Promo</span> Video</div>
            </div>
        </div>
        <div class="row">
            <div class="text-center col-md-12">
                <a class="vid" href="https://youtu.be/1LxcTt1adfY">
                    <div class="vid-butn"> <span class="icon"> <i class="ti-control-play"></i> </span> </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials -->
<section class="testimonials section-padding mt-15">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-30">
                <div class="section-subtitle">Testimonials</div>
                <div class="section-title">What Clients Say</div>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="stars"> <span class="rate">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                            <div class="shap-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="shap-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div> <i class="fa-solid fa-quote-left"></i>
                        <div class="text">
                            <p>Lorem posuere in miss drana en the nisan semere sceriun amiss etiam ornare in the miss drana is lorem fermen nunta urnase mauris in the interdum.</p>
                        </div>
                        <div class="info mt-30">
                            <div class="img-curv">
                                <div class="img el-list"> <img src="images/team/1.jpg" alt=""> </div>
                                <div class="shap-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-30">
                                <h6>Dan Martin</h6>
                                <p>Customer</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="stars"> <span class="rate">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                            <div class="shap-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="shap-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div> <i class="fa-solid fa-quote-left"></i>
                        <div class="text">
                            <p>Lorem posuere in miss drana en the nisan semere sceriun amiss etiam ornare in the miss drana is lorem fermen nunta urnase mauris in the interdum.</p>
                        </div>
                        <div class="info mt-30">
                            <div class="img-curv">
                                <div class="img el-list"> <img src="images/team/4.jpg" alt=""> </div>
                                <div class="shap-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-30">
                                <h6>Olivia Brown</h6>
                                <p>Customer</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="stars"> <span class="rate">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                            <div class="shap-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="shap-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div> <i class="fa-solid fa-quote-left"></i>
                        <div class="text">
                            <p>Lorem posuere in miss drana en the nisan semere sceriun amiss etiam ornare in the miss drana is lorem fermen nunta urnase mauris in the interdum.</p>
                        </div>
                        <div class="info mt-30">
                            <div class="img-curv">
                                <div class="img el-list"> <img src="images/team/6.jpg" alt=""> </div>
                                <div class="shap-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                        <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-30">
                                <h6>Emily Martin</h6>
                                <p>Customer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- divider line -->
<div class="line-vr-section"></div>
<!-- Blog 2 -->
<section class="blog2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-30">
                <div class="section-subtitle">Our Blog</div>
                <div class="section-title">Latest <span>News</span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <div class="item"> <img src="images/blog/3.jpg" class="img-fluid" alt="">
                        <div class="bottom-fade"></div>
                        <div class="title">
                            <h6>Rental</h6>
                            <h4>Documents required for car rental</h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="post.html" class="vid">
                                <div class="icon"> <i class="icon-show"><span>29<br><i>Apr</i></span>
                                    </i><i class="ti-arrow-top-right icon-hidden"></i> </div>
                            </a>
                            <div class="br-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="br-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item"> <img src="images/blog/4.jpg" class="img-fluid" alt="">
                        <div class="bottom-fade"></div>
                        <div class="title">
                            <h6>Sport Cars</h6>
                            <h4>Rental cost of sport and other cars</h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="post.html" class="vid">
                                <div class="icon"> <i class="icon-show"><span>27<br><i>Apr</i></span>
                                    </i><i class="ti-arrow-top-right icon-hidden"></i> </div>
                            </a>
                            <div class="br-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="br-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item"> <img src="images/blog/5.jpg" class="img-fluid" alt="">
                        <div class="bottom-fade"></div>
                        <div class="title">
                            <h6>Fines</h6>
                            <h4>Rental cars how to check driving fines?</h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="post.html" class="vid">
                                <div class="icon"> <i class="icon-show"><span>25<br><i>Apr</i></span>
                                    </i><i class="ti-arrow-top-right icon-hidden"></i> </div>
                            </a>
                            <div class="br-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="br-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item"> <img src="images/blog/6.jpg" class="img-fluid" alt="">
                        <div class="bottom-fade"></div>
                        <div class="title">
                            <h6>Airport</h6>
                            <h4>How to Rent a Car at the Airport Terminal?</h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="post.html" class="vid">
                                <div class="icon"> <i class="icon-show"><span>23<br><i>Apr</i></span>
                                    </i><i class="ti-arrow-top-right icon-hidden"></i> </div>
                            </a>
                            <div class="br-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="br-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item"> <img src="images/blog/7.jpg" class="img-fluid" alt="">
                        <div class="bottom-fade"></div>
                        <div class="title">
                            <h6>Rules</h6>
                            <h4>Penalties for violating the rules in rental cars</h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="post.html" class="vid">
                                <div class="icon"> <i class="icon-show"><span>22<br><i>Apr</i></span>
                                    </i><i class="ti-arrow-top-right icon-hidden"></i> </div>
                            </a>
                            <div class="br-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="br-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item"> <img src="images/blog/8.jpg" class="img-fluid" alt="">
                        <div class="bottom-fade"></div>
                        <div class="title">
                            <h6>Rental Car</h6>
                            <h4>How to check a car before renting?</h4>
                        </div>
                        <div class="curv-butn icon-bg">
                            <a href="post.html" class="vid">
                                <div class="icon"> <i class="icon-show"><span>20<br><i>Apr</i></span>
                                    </i><i class="ti-arrow-top-right icon-hidden"></i> </div>
                            </a>
                            <div class="br-left-top">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                            <div class="br-right-bottom">
                                <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-11 h-11">
                                    <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Lets Talk -->
<section class="lets-talk bg-img bg-fixed section-padding" data-overlay-dark="5" data-background="images/slider/3.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h6>Rent Your Car</h6>
                <h5>Interested in Renting?</h5>
                <p>Don't hesitate and send us a message.</p> <a href="tel:+8001234567" class="button-1 mt-15 mb-15 mr-10"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a> <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-2 mt-15 mb-15">Rent Now <span class="ti-arrow-top-right"></span></a>
            </div>
        </div>
    </div>
</section>
<!-- Clients -->
<section class="clients">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="owl-carousel owl-theme">
                    <div class="clients-logo">
                        <a href="#0"><img src="images/clients/1.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="images/clients/2.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="images/clients/3.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="images/clients/4.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="images/clients/5.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="images/clients/6.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="images/clients/7.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="images/clients/8.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<footer class="footer clearfix">
    <div class="container">
        <!-- first footer -->
        <div class="first-footer">
            <div class="row">
                <div class="col-md-12">
                    <div class="links dark footer-contact-links">
                        <div class="footer-contact-links-wrapper">
                            <div class="footer-contact-link-wrapper">
                                <div class="image-wrapper footer-contact-link-icon">
                                    <div class="icon-footer"> <i class="flaticon-phone-call"></i> </div>
                                </div>
                                <div class="footer-contact-link-content">
                                    <h6>Call us</h6>
                                    <p>+971 52-333-4444</p>
                                </div>
                            </div>
                            <div class="footer-contact-links-divider"></div>
                            <div class="footer-contact-link-wrapper">
                                <div class="image-wrapper footer-contact-link-icon">
                                    <div class="icon-footer"> <i class="omfi-envelope"></i> </div>
                                </div>
                                <div class="footer-contact-link-content">
                                    <h6>Write to us</h6>
                                    <p>info@Auto park.com</p>
                                </div>
                            </div>
                            <div class="footer-contact-links-divider"></div>
                            <div class="footer-contact-link-wrapper">
                                <div class="image-wrapper footer-contact-link-icon">
                                    <div class="icon-footer"> <i class="omfi-location"></i> </div>
                                </div>
                                <div class="footer-contact-link-content">
                                    <h6>Address</h6>
                                    <p>Dubai, Water Tower, Office 123</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- second footer -->
        <div class="second-footer">
            <div class="row">
                <!-- about & social icons -->
                <div class="col-md-4 widget-area">
                    <div class="widget clearfix">
                        <div class="footer-logo"><img src="images/logo-light.png" alt=""></div>
                        <!-- <div class="footer-logo"><h2>CARE<span>X</span></h2></div> -->
                        <div class="widget-text">
                            <p>Rent a car imperdiet sapien porttito the bibenum ellentesue the commodo erat nesuen.</p>
                            <div class="social-icons">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- quick links -->
                <div class="col-md-3 offset-md-1 widget-area">
                    <div class="widget clearfix usful-links">
                        <h3 class="widget-title">Quick Links</h3>
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="cars.html">Cars</a></li>
                            <li><a href="car-types.html">Car Types</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- subscribe -->
                <div class="col-md-4 widget-area">
                    <div class="widget clearfix">
                        <h3 class="widget-title">Subscribe</h3>
                        <p>Want to be notified about our services. Just sign up and we'll send you a notification by email.</p>
                        <div class="widget-newsletter">
                            <form action="#">
                                <input type="email" placeholder="Email Address" required>
                                <button type="submit"><i class="ti-arrow-top-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bottom footer -->
        <div class="bottom-footer-text">
            <div class="row copyright">
                <div class="col-md-12">
                    <p class="mb-0">&copy;2024 <a href="#">DuruThemes</a>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- RentNow Popup -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Booking Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="booking-box">
                    <div class="booking-inner clearfix">
                        <form method="post" action="#0" class="form1 contact__form clearfix">
                            <!-- form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                                </div>
                            </div>
                            <!-- form elements -->
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <input name="name" type="text" placeholder="Full Name *" required>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <input name="email" type="email" placeholder="Email *" required>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <input name="phone" type="text" placeholder="Phone *" required>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="select1_wrapper">
                                        <label>Choose Car Type</label>
                                        <div class="select1_inner">
                                            <select class="select2 select" style="width: 100%">
                                                <option value="0">Choose Car Type</option>
                                                <option value="1">All</option>
                                                <option value="2">Luxury Cars</option>
                                                <option value="3">Sport Cars</option>
                                                <option value="4">SUVs</option>
                                                <option value="5">Convertible</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="select1_wrapper">
                                        <label>Pick Up Location</label>
                                        <div class="select1_inner">
                                            <select class="select2 select" style="width: 100%">
                                                <option value="0">Pick Up Location</option>
                                                <option value="1">Dubai</option>
                                                <option value="2">Abu Dhabi</option>
                                                <option value="3">Sharjah</option>
                                                <option value="4">Alain</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="input1_wrapper">
                                        <label>Pick Up Date</label>
                                        <div class="input1_inner">
                                            <input type="text" class="form-control input datepicker" placeholder="Pick Up Date" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="select1_wrapper">
                                        <label>Drop Off Location</label>
                                        <div class="select1_inner">
                                            <select class="select2 select" style="width: 100%">
                                                <option value="0">Drop Off Location</option>
                                                <option value="1">Alain</option>
                                                <option value="2">Sharjah</option>
                                                <option value="3">Abu Dhabi</option>
                                                <option value="4">Dubai</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="input1_wrapper">
                                        <label>Return Date</label>
                                        <div class="input1_inner">
                                            <input type="text" class="form-control input datepicker" placeholder="Return Date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Additional Note"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="booking-button mt-15">Rent Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection