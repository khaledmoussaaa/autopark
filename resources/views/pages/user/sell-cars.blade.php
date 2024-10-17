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
<!-- Navbar -->

<!-- Parallax Image -->
<section class="parallax-header section-padding valign bg-img bg-fixed" data-overlay-dark="5" data-background="img/slider/2.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-5 mb-30 mt-30">
                <div class="v-middle2 caption">
                    <h6>* Premium</h6>
                    <h1>Rental Car</h1>
                    <h5>You can rent any of our luxurious cars.</h5>
                </div>
            </div>
            <!-- Rent Now -->
            <div class="col-lg-12 col-md-7">
                <div class="booking-box">
                    <div class="booking-inner clearfix">
                        <form enctype="multipart/form-data" method="post" action="{{route('sellcars.store')}}" class="form1 contact__form clearfix">
                            <!-- form message -->
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <input name="name" type="text" placeholder="Full Name *" required>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <input name="email" type="email" placeholder="Email *" required>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <input name="number" type="text" placeholder="Phone *" required>
                                </div>
                                <div class="col-md-4">
                                    <div class="select1_wrapper">
                                        <label>Choose Car Type</label>
                                        <div class="select1_inner">
                                            <select name="car_type" id="make" class="select2 select" style="width: 100%">
                                                <option value="0">Choose Car Type</option>
                                                <option value="BMW">BMW</option> <!-- These values are now make names -->
                                                <option value="Daewoo">Daewoo</option>
                                                <option value="Ford">Ford</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="select1_wrapper">
                                        <label>Choose Car Type</label>
                                        <div class="select1_inner">
                                            <select name="car_model" id="model" class="select2 select" style="width: 100%">
                                                <option class="0" value="0" data-make="0">Choose Car modal</option>
                                                <option class="318i" value="318i" data-make="BMW">318i</option>
                                                <option class="lanos" value="Lanos" data-make="Daewoo">Lanos</option>
                                                <option class="courier" value="Courier" data-make="Ford">Courier</option>
                                                <option class="falcon" value="Falcon" data-make="Ford">Falcon</option>
                                                <option class="festiva" value="Festiva" data-make="Ford">Festiva</option>
                                                <option class="fiesta" value="Fiesta" data-make="Ford">Fiesta</option>
                                                <option class="focus" value="Focus" data-make="Ford">Focus</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-4">
                                    <div class="select1_wrapper">
                                        <label>Drop Off Location</label>
                                        <div class="select1_inner">
                                            <select name="year" class="select2 select" style="width: 100%">
                                                <option value="0">Year</option>
                                                <option value="1">2020</option>
                                                <option value="2">2021</option>
                                                <option value="3">2022</option>
                                                <option value="4">2023</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="select1_wrapper">
                                        <label>Drop Off Location</label>
                                        <div class="select1_inner">
                                            <select name="kilometrs" class="select2 select" style="width: 100%">
                                                <option value="0">Kilometers</option>
                                                <option value="1">10,000</option>
                                                <option value="2">20,000</option>
                                                <option value="3">30,000</option>
                                                <option value="4">40,000</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="select1_wrapper">
                                        <label>Drop Off Location</label>
                                        <div class="select1_inner">
                                            <select name="transmissions" class="select2 select" style="width: 100%">
                                                <option value="0">Transmission</option>
                                                <option value="1">Automatic</option>
                                                <option value="2">Manual</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-12">
                                    <button type="submit" class="booking-button mt-15">Sell Your Car Now</button>
                                </div>
                            </div>
                        </form>
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
                        <div class="footer-logo"><img src="img/logo-light.png" alt=""></div>
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
<!-- jQuery -->


<script>
    $(document).ready(function() {
        var $make = $('#make'),
            $model = $('#model'),
            $options = $model.find('option');

        $make.on('change', function() {
            // We now filter model using the data-make attribute, not value
            $model.html($options.filter('[data-make="' + this.value + '"]'));
            $model.trigger('change');
        }).trigger('change');

        $('#carForm').submit(function(e) {
            e.preventDefault();
            let formData = $(this).serializeArray();
            let data = {};
            for (let i = 0; i < formData.length; i++) {
                data[formData[i].name] = formData[i].value;
            }

            alert('Make: ' + data.make + '\nModel: ' + data.model);
        });

    });
</script>

@endsection