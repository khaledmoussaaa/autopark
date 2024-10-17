<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper">
            <a class="logo" href="index.html"> <img src="images/logo-light.png" class="logo-img" alt=""> </a>
            <a class="logo-light" href="index.html"> <img src="images/logo-light-2.png" class="logo-img" alt=""> </a>
            <!-- <a class="logo" href="index.html"><h2>Renta<span>x</span></h2></a> -->
        </div>
        <!-- Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span> </button>
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="">Home</a></li>
                <ul class="dropdown-menu">
                    <li><a href="index.html" class="dropdown-item active"><span>Slider 01</span></a></li>
                    <li><a href="index5.html" class="dropdown-item"><span>Slider 02</span></a></li>
                    <li><a href="index2.html" class="dropdown-item"><span>Image</span></a></li>
                    <li><a href="index3.html" class="dropdown-item"><span>Video</span></a></li>
                    <li><a href="index4.html" class="dropdown-item"><span>Slideshow</span></a></li>
                    <li><a href="index6.html" class="dropdown-item"><span>Grid Background</span></a></li>
                    <li class="dropdown-submenu dropdown"> <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Onepage <i class="ti-angle-right"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="onepage-slider.html" class="dropdown-item"><span>Slider 01</span></a></li>
                            <li><a href="onepage-slider2.html" class="dropdown-item"><span>Slider 02</span></a></li>
                            <li><a href="onepage-image.html" class="dropdown-item"><span>Image</span></a></li>
                            <li><a href="onepage-video.html" class="dropdown-item"><span>Video</span></a></li>
                            <li><a href="onepage-slideshow.html" class="dropdown-item"><span>Slideshow</span></a></li>
                            <li><a href="onepage-grid-background.html" class="dropdown-item"><span>Grid Background</span></a></li>
                        </ul>
                    </li>
                </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                <li class="nav-item dropdown">
                    <!-- Removed the href here to prevent navigation and keep it as a toggle -->
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        Services <i class="ti-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- Separate link to the services page -->
                        <li><a href="{{ route('services.index') }}" class="dropdown-item"><span>All Services</span></a></li>

                        <!-- Dropdown items -->
                        <li><a href="service-details.html" class="dropdown-item"><span>Service Details 01</span></a></li>
                        <li><a href="service-details.html" class="dropdown-item"><span>Service Details 02</span></a></li>
                        <li><a href="service-details.html" class="dropdown-item"><span>Service Details 03</span></a></li>
                        <li><a href="service-details.html" class="dropdown-item"><span>Service Details 04</span></a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="cars4.html">Buy Car</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('sellcars.index') }}">Sell Car</a></li>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu dropdown"> <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Car Grid <i class="ti-angle-right"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="cars.html" class="dropdown-item"><span>Car Grid 01</span></a></li>
                            <li><a href="cars2.html" class="dropdown-item"><span>Car Grid 02</span></a></li>
                            <li><a href="cars3.html" class="dropdown-item"><span>Car Grid 03</span></a></li>
                        </ul>
                    </li>
                    <li><a href="cars4.html" class="dropdown-item"><span>Car Listing</span></a></li>
                    <li class="dropdown-submenu dropdown"> <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Car Types <i class="ti-angle-right"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="car-types.html" class="dropdown-item"><span>Car Types 01</span></a></li>
                            <li><a href="car-types2.html" class="dropdown-item"><span>Car Types 02</span></a></li>
                            <li><a href="car-types3.html" class="dropdown-item"><span>Car Types 03</span></a></li>
                            <li><a href="car-types4.html" class="dropdown-item"><span>Car Types 04</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu dropdown"> <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Car Details <i class="ti-angle-right"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="car-details.html" class="dropdown-item"><span>Car Details 01</span></a></li>
                            <li><a href="car-details2.html" class="dropdown-item"><span>Car Details 02</span></a></li>
                            <li><a href="car-details3.html" class="dropdown-item"><span>Car Details 03</span></a></li>
                            <li><a href="car-details4.html" class="dropdown-item"><span>Car Details 04</span></a></li>
                        </ul>
                    </li>
                </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="faq.html">FAQ</a></li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Pages <i class="ti-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="team.html" class="dropdown-item"><span>Team</span></a></li>
                        <li class="dropdown-submenu dropdown"> <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Image Gallery <i class="ti-angle-right"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="gallery-image.html" class="dropdown-item"><span>Image Gallery Grid</span></a></li>
                                <li><a href="gallery-image2.html" class="dropdown-item"><span>Image Gallery Masonry</span></a></li>
                            </ul>
                        </li>
                        <li><a href="gallery-video.html" class="dropdown-item"><span>Video Gallery</span></a></li>
                        <li><a href="price.html" class="dropdown-item"><span>Pricing</span></a></li>
                        <li><a href="faq.html" class="dropdown-item"><span>FAQ</span></a></li>
                        <li><a href="testiominals.html" class="dropdown-item"><span>Testiominals</span></a></li>
                        <li><a href="team-single.html" class="dropdown-item"><span>Team Single</span></a></li>
                        <li><a href="404.html" class="dropdown-item"><span>404 Page</span></a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Blog <i class="ti-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="blog.html" class="dropdown-item"><span>Blog Grid 01</span></a></li>
                        <li><a href="blog2.html" class="dropdown-item"><span>Blog Grid 02</span></a></li>
                        <li><a href="blog3.html" class="dropdown-item"><span>Blog List</span></a></li>
                        <li><a href="post.html" class="dropdown-item"><span>Post Single</span></a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="">Contact</a></li>
            </ul>
            <div class="navbar-right">
                <div class="wrap">
                    <div class="icon"> <a href="find-your-car.html"><i class="flaticon-car"></i></a> </div>
                    <div class="text">
                        <p>Need help?</p>
                        <h5><a href="find-your-car.html">Find Your Car</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>