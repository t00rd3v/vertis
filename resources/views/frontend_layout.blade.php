<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Aila">
    <meta name="keywords" content="Buy Data, Buy tv subscription">
    <meta name="author" content="Rechargepro">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{config('rechargepro.app.site_title')}} - @yield('title') </title>
    <link rel="icon" href="assets/images/tab.png" type="image/png" sizes="16x16">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all" />
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.min.css" type="text/css" media="all" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css"  type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css"  type="text/css" media="all" />
    <!-- meanmenu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" type="text/css" media="all" />
    <!-- magnific popup css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css" type="text/css" media="all" />
    <!-- boxicons css -->
    <link rel='stylesheet' href='assets/css/boxicons.min.css' type="text/css" media="all" />
    <!-- Line Awesome CSS -->
    <link rel='stylesheet' href='assets/css/line-awesome.min.css' type="text/css" media="all" />
    <!-- flaticon css -->
    <link rel='stylesheet' href='assets/css/flaticon.css' type="text/css" media="all" />
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all" />
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
<!-- preloader -->
<div class="preloader orange-gradient">
    <div class="preloader-wrapper">
        <div class="preloader-grid">
            <div class="preloader-grid-item preloader-grid-item-1"></div>
            <div class="preloader-grid-item preloader-grid-item-2"></div>
            <div class="preloader-grid-item preloader-grid-item-3"></div>
            <div class="preloader-grid-item preloader-grid-item-4"></div>
            <div class="preloader-grid-item preloader-grid-item-5"></div>
            <div class="preloader-grid-item preloader-grid-item-6"></div>
            <div class="preloader-grid-item preloader-grid-item-7"></div>
            <div class="preloader-grid-item preloader-grid-item-8"></div>
            <div class="preloader-grid-item preloader-grid-item-9"></div>
        </div>
    </div>
</div>
<!-- .end preloader -->
<!-- navbar -->
<div class="fixed-top">
    <div class="navbar-area">
        <!-- mobile menu -->
        <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img src="assets/images/logo.png" alt="logo">
            </a>
        </div>
        <!-- desktop menu -->
        <div class="main-nav main-nav-2">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="assets/images/logo.png" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="/" class="nav-link active">Home</a>
{{--                                <ul class="dropdown-menu">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="index.html" class="nav-link">Home Page 1</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="index-2.html" class="nav-link active">Home Page 2</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="index-3.html" class="nav-link">Home Page 3</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
                            </li>
                            <li class="nav-item">
                                <a href="about-us.html" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Pages</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="faqs.html" class="nav-link">FAQ's</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">Services</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="services.html" class="nav-link">Services</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="service-details.html" class="nav-link">Service Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms-conditions.html" class="nav-link">Terms & Conditions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="testimonials.html" class="nav-link">Testimonials</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">User</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="/account" class="nav-link">Login | Register</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="forget-password.html" class="nav-link">Forget Password</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="404.html" class="nav-link">404 Error Page</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Features</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="features.html" class="nav-link">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="feature-details.html" class="nav-link">Feature Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="pricing.html" class="nav-link">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Blogs</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blogs.html" class="nav-link">Blogs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-details.html" class="nav-link">Blog Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="contact-us.html" class="nav-link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <!-- navbar option -->
                    <div class="navbar-option">
                        <div class="navbar-option-item dropdown">
                            <button class="language-option" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="assets/images/flag.png" alt="flag">
                                Eng
                                <i class='bx bx-chevron-down'></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">
                                    <img src="assets/images/flag-1.png" alt="flag">
                                    UK
                                </a>
                                <a class="dropdown-item" href="#">
                                    <img src="assets/images/flag-2.png" alt="flag">
                                    Germany
                                </a>
                            </div>
                        </div>
                        <div class="navbar-option-item">
                            <a href="/account" class="btn1 btn-with-image">
                                <i class="flaticon-login"></i>
                                <i class="flaticon-login"></i>
                                Sign Up / Login
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--end navbar-->

@yield('content')

    <!-- footer -->
    <footer class="footer-bg">
        <div class="container">
            <div class="footer-upper">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="footer-content-item">
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/images/logo-white.png" alt="logo"></a>
                            </div>
                            <div class="footer-details">
                                <p>Lorem ipsum dolor sit amet, consectetur adiisicing elit, sed do eiusmod tempor inc
                                    Neque porro quisquam est qui dolorem aliquam quaerat luptatem. sed do eiusmod tempor
                                    inc </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <div class="footer-content-list footer-content-item">
                            <div class="footer-content-title">
                                <h3>Support</h3>
                            </div>
                            <ul class="footer-details footer-list">
                                <li><a href="faqs.html">FAQ's</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                                <li><a href="blogs.html">Blogs</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <div class="footer-content-list footer-content-item">
                            <div class="footer-content-title">
                                <h3>Company</h3>
                            </div>
                            <ul class="footer-details footer-list">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="features.html">Features</a></li>
                                <li><a href="pricing.html">Our Pricing</a></li>
                                <li><a href="blogs.html">Blogs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="footer-content-list footer-content-item">
                            <div class="footer-content-title">
                                <h3>Address</h3>
                            </div>
                            <ul class="footer-details footer-list">
                                <li>Address: <span>456 Labisto Parkways, CA, United States</span></li>
                                <li>Message: <span><a href="mailto:info@alia.com">info@alia.com</a></span></li>
                                <li>Phone: <span><a href="tel:(+00)67834598">(+00) 678 345 98</a></span></li>
                                <li>Faq: <span>+(456) 332-897-234</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-lower">
                <div class="footer-lower-item footer-copyright-text">
                    <p>Copyright ©2020 Design & Developed by <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
                </div>
                <div class="footer-lower-item footer-social-logo">
                    <ul class="footer-social-list">
                        <li class="social-btn social-btn-fb"><a href="#"><i class='bx bxl-facebook'></i></a></li>
                        <li class="social-btn social-btn-tw"><a href="#"><i class='bx bxl-twitter'></i></a></li>
                        <li class="social-btn social-btn-ins"><a href="#"><i class='bx bxl-instagram'></i></a></li>
                        <li class="social-btn social-btn-pin"><a href="#"><i class='bx bxl-pinterest-alt'></i></a></li>
                        <li class="social-btn social-btn-yt"><a href="#"><i class='bx bxl-youtube'></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
<!-- essential js -->
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- magnific popup js -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- owl carousel js -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- form ajazchimp js -->
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<!-- form validator js  -->
<script src="assets/js/form-validator.min.js"></script>
<!-- contact form js -->
<script src="assets/js/contact-form-script.js"></script>
<!-- meanmenu js -->
<script src="assets/js/jquery.meanmenu.min.js"></script>
<!-- waypoints js -->
<script src="assets/js/jquery.waypoints.js"></script>
<!-- counter js -->
<script src="assets/js/counter-up.js"></script>
<!-- main js -->
<script src="assets/js/script.js"></script>

@stack('js')
</body>

</html>
