<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://image.freepik.com/free-icon/g-logo-circle_318-26775.jpg">

    <!-- Core Stylesheet -->
    <link href="home/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="home/css/responsive/responsive.css" rel="stylesheet">

</head>

<body>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        <a class="navbar-brand" href="http://localhost/Dreamtravels/Home.php">DREAM TRAVELS</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="http://localhost/Dreamtravels/L&RPage.html">Log Out <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Booking History <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="http://localhost/Dreamtravels/Flight/f_history.php">Flight Booked History</a>
                                        <a class="dropdown-item" href="http://localhost/Dreamtravels/Hotel%20page/h_history.php">Hotel Booked History</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="hero-content">
                                <h4>Welcome</h4>
                                <h4>
                                <?php 
                            session_start();
                            echo $_SESSION['name'];
                            ?></h4>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(home/img/bg-img/hero-1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-content">
                        <h2>Discover the world</h2>
                        <h4>This is the best guide of your destination</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Catagory Area Start ***** -->
    <section class="dorne-catagory-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-catagories">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig">
                                    <div class="catagory-content">
                                        <img src="home/img/core-img/hotel.png" alt="">
                                        <a href="http://localhost/Dreamtravels/Hotel%20page/hotel_search.php">
                                            <h6>Hotel Booking</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig">
                                    <div class="catagory-content">
                                        <img src="home/img/core-img/flight.png" alt="">
                                        <a href="http://localhost/Dreamtravels/Flight/fli_rough.html">
                                            <h6>Flight Booking</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Catagory Area End ***** -->

    <!-- ***** About Area Start ***** -->
    <section class="dorne-about-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content text-center">
                        <h2>Discover your World with <br><span>DREAM Travels</span></h2>
                        <p>Travel makes one modest. You see what a tiny place you occupy in the world.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area End ***** -->  
    <!-- ***** Features Destinations Area Start ***** -->
    <section class="dorne-features-destinations-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                        <span></span>
                        <h4>Featured destinations</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="home/img/bg-img/feature-1.jpg" alt="">
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Ibiza</h5>
                                    <p>Party</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="home/img/bg-img/feature-2.jpg" alt="">
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Paris</h5>
                                    <p>Luxury</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="home/img/bg-img/feature-3.jpg" alt="">
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Lake Como</h5>
                                    <p>Spectacular</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="home/img/bg-img/feature-4.jpg" alt="">
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Greece</h5>
                                    <p>Sunny</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="home/img/bg-img/feature-5.jpg" alt="">
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>Norway</h5>
                                    <p>All Year round</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Destinations Area End ***** -->
            <div class="contact-text">
                <h4>Hello, Get in touch with us</h4>
                <div class="contact-info d-lg-flex">
                    <div class="single-contact-info">
                        <h6><i class="fa fa-map-signs" aria-hidden="true"></i> VIT Vellore</h6>
                        <h6><i class="fa fa-map-signs" aria-hidden="true"></i> G1 Slot</h6>
                    </div>
                    <div class="single-contact-info">
                        <h6><i class="fa fa-envelope-o" aria-hidden="true"></i> travelsdream95@gmail.com</h6>
                        <h6><i class="fa fa-phone" aria-hidden="true"></i>+91 7015292585</h6>
                    </div>
                </div>
            </div>


    <!-- jQuery-2.2.4 js -->
    <script src="home/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="home/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="home/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="home/js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="home/js/active.js"></script>
</body>

</html>