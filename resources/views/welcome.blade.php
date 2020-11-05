@extends('frontend_layout')
@section('title')
    Home
    @endsection
@section('content')
    <!-- header -->
    <header class="header header-bg-2">
        <div class="header-shape-2">
            <div class="header-shape-2-item">
                <img src="assets/images/header-2-shape.png" alt="shape">
            </div>
        </div>
        <div class="container-fluid">
            <div class="header-inner">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="header-content-2">
                            <h1>Digital Banking Easy to Handle With Mobile</h1>
                            <p>The advantage of online banking is that you can pay bills superfast and your account is
                                automatically credited or debited for each deposit and payment</p>
                            <ul class="">

{{--                                <li style="margin-bottom: 5%">--}}
{{--                                    <button class="btn1 orange-gradient btn-with-image">--}}
{{--                                        <i class="flaticon-login"></i>--}}
{{--                                       Make Payment for:--}}
{{--                                    </button>--}}
{{--                                </li>--}}


                                <div class="row">

{{--                                    <div class="col-sm-6 col-md-6 col-lg-6">--}}
{{--                                        <div class="form-group mb-15">--}}
{{--                                                <select id="service_provider" name="service_provider" class="form-control border" style="height: 40px;padding-left: 10px">--}}
{{--                                                    <option> Select Service </option>--}}
{{--                                                    <option value="dstv"> Dstv Subscription </option>--}}
{{--                                                    <option value="dstv"> Dstv Subscription </option>--}}
{{--                                                    <option value="buy_airtime"> Airtime Top up </option>--}}
{{--                                                    <option value="school_fees"> Pay School Fees </option>--}}
{{--                                                </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="col-sm-6 col-md-6 col-lg-6">--}}
{{--                                        <div class="form-group mb-15">--}}
{{--                                          <input type="text" placeholder="Enter Dstv Card Number" class="form-control border" style="height: 40px;padding-left: 10px">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}




    <!-- Modal -->
    <div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Make  A Payment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>

                        <div class="row">

                            <div class="col-sm-12 col-md-12 col-lg-12" id="service_layout">
                                <div class="form-group mb-15">
                                    <label>Select Service Type</label>

                                    <select name="service_provider" class="form-control" id="service_provider">
                                        <option value=""> </option>
                                        <option value="airtime"> Airtime Top Up </option>
                                        <option value="pay_tv"> Pay Tv Subscription </option>
                                        <option value="data"> Internet Data </option>
                                        <option value="school_fees"> Pay School Fees </option>
                                    </select>

                                </div>
                            </div>

                        </div>

                    </form>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Proceed</button>
                </div>
            </div>
        </div>
    </div>


{{--    <a href="" class="btn1 blue-gradient" style="width: 95%;margin-left: 15px;color:#fff">--}}
{{--        <i class="flaticon-right-arrow"></i>--}}
{{--        Make A Payment--}}
{{--    </a>--}}

    <!-- Button trigger modal -->
    <button type="button" class="btn1 blue-gradient" style="width: 95%;margin-left: 15px;color:#fff;" data-toggle="modal" data-target="#requestModal">
        <i class="flaticon-right-arrow"></i>
        Make A Payment
    </button>


                                </div>


{{--                                    <a class="btn1 btn-with-image blue-gradient video-modal" href="http://www.youtube.com/watch?v=aJJoV0xSDqA">--}}
{{--                                        <i class="flaticon-play-button-1"></i>--}}
{{--                                        <i class="flaticon-play-button-1"></i>--}}
{{--                                        Intro Video--}}
{{--                                    </a>--}}

{{--                                </li>--}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="header-content-2-img">
                            <img src="assets/images/imac.png" alt="imac">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <!-- .end header -->
    <!-- home-logo-section-2 -->
    <div class="home-logo-section-2 border-top-mob">
        <div class="container">
            <div class="section-title">
                <p>More than 50k brand trusted by using pay </p>
            </div>
            <div class="home-logo-content mt-30">
                <div class="home-logo-item">
                    <a href="#"><img src="assets/images/logo-1.png" alt="logo"></a>
                </div>
                <div class="home-logo-item">
                    <a href="#"><img src="assets/images/logo-2.png" alt="logo"></a>
                </div>
                <div class="home-logo-item">
                    <a href="#"><img src="assets/images/logo-3.png" alt="logo"></a>
                </div>
                <div class="home-logo-item">
                    <a href="#"><img src="assets/images/logo-4.png" alt="logo"></a>
                </div>
                <div class="home-logo-item">
                    <a href="#"><img src="assets/images/logo-5.png" alt="logo"></a>
                </div>
                <div class="home-logo-item">
                    <a href="#"><img src="assets/images/logo-6.png" alt="logo"></a>
                </div>
                <div class="home-logo-item">
                    <a href="#"><img src="assets/images/logo-7.png" alt="logo"></a>
                </div>
                <div class="home-logo-item">
                    <a href="#"><img src="assets/images/logo-8.png" alt="logo"></a>
                </div>
                <div class="home-logo-item">
                    <a href="#"><img src="assets/images/logo-9.png" alt="logo"></a>
                </div>
                <div class="home-logo-item">
                    <a href="#"><img src="assets/images/logo-10.png" alt="logo"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- .end home-logo-section-2 -->
    <!-- home-about-section-2 -->
    <section class="home-about-section-2 bg-off-white pt-100 pb-70 overflow-hidden">
        <div class="container-fluid p-0">
            <div class="home-about-content">
                <!-- enterprise -->
                <div class="row align-items-center m-0">
                    <div class="col-sm-12 col-md-12 col-lg-6 p-0">
                        <div class="home-facility-overview desk-ml-auto pr-20 pl-20 pb-30">
                            <h3 class="home-about-title">
                                A fully integrated suite for Large enterprise
                            </h3>
                            <p class="home-about-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod cste et dolore magnam aliquam quaerat voluptatem.</p>
                            <div class="home-about-list">
                                <div class="home-about-list-item">
                                    <img src="assets/images/check.png" alt="checl">
                                    International Payments
                                </div>
                                <div class="home-about-list-item">
                                    <img src="assets/images/check.png" alt="checl">
                                    Request Features
                                </div>
                                <div class="home-about-list-item">
                                    <img src="assets/images/check.png" alt="checl">
                                    Premium Support
                                </div>
                                <div class="home-about-list-item">
                                    <img src="assets/images/check.png" alt="checl">
                                    Direct Debit
                                </div>
                                <div class="home-about-list-item">
                                    <img src="assets/images/check.png" alt="checl">
                                    Automated accounting
                                </div>
                                <div class="home-about-list-item">
                                    <img src="assets/images/check.png" alt="checl">
                                    Web Design
                                </div>
                            </div>
                            <div class="home-about-animation">
                                <div class="home-animation-item">
                                    <img src="assets/images/curve-line.png" alt="animated-icon">
                                </div>
                                <div class="home-animation-item">
                                    <img src="assets/images/triangle.png" alt="animated-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 p-0">
                        <div class="home-facility-item img-right-res pb-30">
                            <img src="assets/images/home-enterprise-2.png" alt="facility">
                        </div>
                    </div>
                </div>
                <div class="section-mtb-40"></div>
                <!-- business -->
                <div class="row align-items-center m-0">
                    <div class="col-sm-12 col-md-12 col-lg-6 p-0">
                        <div class="home-facility-item img-left-res pb-30">
                            <img src="assets/images/home-business-2.png" alt="facility">

                            <div class="home-about-animated-img home-animated-img-right">
                                <img src="assets/images/smartphone1.png" alt="smartphone">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 p-0">
                        <div class="home-facility-overview desk-mr-auto pr-20 pl-20 pb-30">
                            <h3 class="home-about-title">
                                Small to medium-sized businesses
                            </h3>
                            <p class="home-about-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod cste et dolore magnam aliquam quaerat voluptatem.</p>
                            <div class="home-about-list">
                                <div class="home-about-list-item">
                                    <img src="assets/images/check.png" alt="checl">
                                    Deposit Checks Instantly
                                </div>
                                <div class="home-about-list-item">
                                    <img src="assets/images/check.png" alt="checl">
                                    A powerful open API
                                </div>
                                <div class="home-about-list-item">
                                    <img src="assets/images/check.png" alt="checl">
                                    Affiliates and partnerships
                                </div>
                                <div class="home-about-list-item">
                                    <img src="assets/images/check.png" alt="checl">
                                    Coverage around the world
                                </div>
                                <div class="home-about-list-item">
                                    <img src="assets/images/check.png" alt="checl">
                                    Business without borders
                                </div>
                                <div class="home-about-list-item">
                                    <img src="assets/images/check.png" alt="checl">
                                    Web Design
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-mtb-40"></div>
                <!-- entrepreneur -->
                <div class="row align-items-center m-0">
                    <div class="col-sm-12 col-md-12 col-lg-6 p-0">
                        <div class="home-facility-overview desk-ml-auto pr-20 pl-20 pb-30">
                            <h3 class="home-about-title">
                                Entrepreneurs, and sole traders & Freelancers
                            </h3>
                            <p class="home-about-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod cste et dolore magnam aliquam quaerat voluptatem.</p>
                            <div class="home-about-list">
                                <div class="home-about-list-item">
                                    <img src="assets/images/check.png" alt="checl">
                                    International Payments
                                </div>
                                <div class="home-about-list-item">
                                    <img src="assets/images/check.png" alt="checl">
                                    Request Features
                                </div>
                                <div class="home-about-list-item">
                                    <img src="assets/images/check.png" alt="checl">
                                    Premium Support
                                </div>
                                <div class="home-about-list-item">
                                    <img src="assets/images/check.png" alt="checl">
                                    Direct Debit
                                </div>
                                <div class="home-about-list-item">
                                    <img src="assets/images/check.png" alt="checl">
                                    Automated accounting
                                </div>
                                <div class="home-about-list-item">
                                    <img src="assets/images/check.png" alt="checl">
                                    Web Design
                                </div>
                            </div>
                            <div class="home-about-animation entrepreneur-animation">
                                <div class="home-animation-item">
                                    <img src="assets/images/curve-line.png" alt="animated-icon">
                                </div>
                                <div class="home-animation-item">
                                    <img src="assets/images/triangle.png" alt="animated-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 p-0">
                        <div class="home-facility-item img-right-res pb-30">
                            <img src="assets/images/home-entreprenour-2.png" alt="facility">
                            <div class="home-about-animated-img home-animated-table-img home-animated-img-left">
                                <img src="assets/images/data-table.png" alt="data-table">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- .end home-about-section -->
    <!-- counter-section -->
    <section class="counter-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>We always try to evaluate customers Values</h2>
            </div>
            <!-- counter-content -->
            <div class="counter-content">
                <div class="counter-item">
                    <h3><span class="counter">70</span><span class="counter-text-lg">+</span></h3>
                    <p>Contributors</p>
                </div>
                <div class="counter-item">
                    <h3><span class="counter">40</span><span class="counter-text-sm">K</span></h3>
                    <p>Feedback</p>
                    <div class="counter-loader">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="counter-item">
                    <h3><span class="counter">1000</span><span class="counter-text-sm">k</span></h3>
                    <p>Downloaded</p>
                    <div class="counter-loader">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="counter-item">
                    <h3><span class="counter">590</span><span class="counter-text-lg">+</span></h3>
                    <p>Workers</p>
                    <div class="counter-loader">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- .end counter-section -->
    <!-- home-facility-section -->
    <section class="home-facility-section pt-100 pb-70 border-top-mob">
        <div class="container">
            <div class="home-facility-content">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="home-facility-item pb-30">
                            <div class="home-facility-details">
                                <div class="home-service-start">
                                    <h2>Payment gateway is easy to fill with our system</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod cste et
                                        dolore magnam aliquam quaerat voluptatem.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim numquam eius modi
                                        tempora incidunt ut labore et dolore magnam </p>
                                    <button class="btn1 blue-gradient btn-with-image">
                                        <i class="flaticon-login"></i>
                                        <i class="flaticon-login"></i>
                                        Get Started
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="home-facility-item-2 home-image-content pb-30">
                            <img src="assets/images/home-facility-bg-2.png" alt="facility" class="scale-one-zero-six">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- .end home-facility-section -->
    <!-- home-quick-contact-section -->
    <section class="home-quick-contact-section blue-gradient">
        <div class="container-fluid">
            <div class="home-quick-contact home-quick-contact-2">
                <div class="logo-bg-icon">
                    <div class="logo-bg-item">
                        <img src="assets/images/circle.png" alt="icon">
                    </div>
                    <div class="logo-bg-item">
                        <img src="assets/images/square.png" alt="icon">
                    </div>
                </div>
                <div class="quick-contact-inner">
                    <h2>What are you thinking? <br> don’t worry! get connected and say hello to us</h2>
                    <p>*We’re willingly is here to answer your question about aila</p>
                    <ul class="section-button">
                        <li>
                            <a href="contact-us.html" class="btn1 orange-gradient btn-with-image">
                                <i class="flaticon-agenda"></i>
                                <i class="flaticon-agenda"></i>
                                Contact us
                            </a>
                        </li>
                        <li>
                            <button class="btn1 btn-with-image">
                                <i class="flaticon-approval"></i>
                                <i class="flaticon-approval"></i>
                                Free trial
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- .end home-quick-contact-section -->
    <!-- home-client-section -->
    <div class="home-client-section p-tb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="client-details-carousel owl-carousel owl-theme">
                        <div class="item">
                            <div class="home-client-details-2">
                                <p class="client-caption-para">Online payment ipsum dolor sit amet, consectetur adi
                                    pisicing elit sed do eusmod tempor incididunt ut labore et dolore magna aliq enim ad
                                    minim veniam, quis nostrud exercitation ullamcoonisi aliquip ex ea commodo
                                    consequat.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="home-client-details-2">
                                <p class="client-caption-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="home-client-details-2">
                                <p class="client-caption-para">Sed ut perspiciatis unde omnis iste natus error sit
                                    voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                    illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="home-client-details-2">
                                <p class="client-caption-para">Online payment ipsum dolor sit amet, consectetur
                                    adipisicing elit sed do eusmod tempor incididunt ut labore et dolore magna aliq enim
                                    ad minim veniam, quis nostrud exercitation ullamcoonisi aliquip ex ea commodo
                                    consequat.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="home-client-details-2">
                                <p class="client-caption-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="home-client-details-2">
                                <p class="client-caption-para">Sed ut perspiciatis unde omnis iste natus error sit
                                    voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                    illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-client-thumbnail-section">
                <div class="client-thumbnail-carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="client-thumbnail-content">
                            <div class="client-thumbnail-img">
                                <img src="assets/images/client-thumb-1.png" alt="carousel">
                            </div>
                            <div class="client-thumbnail-info">
                                <h3 class="client-caption-title">Devit M. kolin</h3>
                                <h4 class="client-caption-designation">CEO & Founder</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-thumbnail-content">
                            <div class="client-thumbnail-img">
                                <img src="assets/images/client-thumb-2.png" alt="carousel">
                            </div>
                            <div class="client-thumbnail-info">
                                <h3 class="client-caption-title">Michael</h3>
                                <h4 class="client-caption-designation">Money Loaner</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-thumbnail-content">
                            <div class="client-thumbnail-img">
                                <img src="assets/images/client-thumb-3.png" alt="carousel">
                            </div>
                            <div class="client-thumbnail-info">
                                <h3 class="client-caption-title">Christoper</h3>
                                <h4 class="client-caption-designation">Ronin Bank Inc.</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-thumbnail-content">
                            <div class="client-thumbnail-img">
                                <img src="assets/images/client-thumb-4.png" alt="carousel">
                            </div>
                            <div class="client-thumbnail-info">
                                <h3 class="client-caption-title">Kenneth</h3>
                                <h4 class="client-caption-designation">Finance Consultant</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-thumbnail-content">
                            <div class="client-thumbnail-img">
                                <img src="assets/images/client-thumb-5.png" alt="carousel">
                            </div>
                            <div class="client-thumbnail-info">
                                <h3 class="client-caption-title">Edward</h3>
                                <h4 class="client-caption-designation">Money founding</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-thumbnail-content">
                            <div class="client-thumbnail-img">
                                <img src="assets/images/client-thumb-6.png" alt="carousel">
                            </div>
                            <div class="client-thumbnail-info">
                                <h3 class="client-caption-title">Devit M. kolin</h3>
                                <h4 class="client-caption-designation">CTO</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .end home-client-section -->
    <!-- home-download-section -->
    <section class="home-download-section-2 pt-100 pb-70">
        <div class="container">
            <div class="home-download-content">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <div class="home-download-item pb-30">
                            <div class="home-download-image scale-one-half">
                                <img src="assets/images/download.png" alt="smartphone">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-7">
                        <div class="home-download-item pb-30">
                            <div class="home-download-details home-service-start">
                                <h2>Free app download now <br> get sit back & enjoy</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim numquam eius modi
                                    tempora incidunt ut labore et dolore magnam</p>
                                <div class="download-feature">
                                    <div class="download-feature-item">
                                        <div class="download-feature-item-inner">
                                            <h3>$100,000</h3>
                                            <p>Guarantee on deposits</p>
                                        </div>
                                    </div>
                                    <div class="download-feature-item">
                                        <div class="download-feature-item-inner">
                                            <h3>$0.00 / mo</h3>
                                            <p>Free account available</p>
                                        </div>
                                    </div>
                                    <div class="download-feature-item">
                                        <div class="download-feature-item-inner">
                                            <h3>10 minutes</h3>
                                            <p>Available Jobs</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="download-option">
                                    <ul class="download-option-list">
                                        <li>
                                            <a href="#" class="orange-gradient">
                                                <img src="assets/images/apple.png" alt="apple">
                                                <img src="assets/images/apple.png" alt="apple">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="blue-gradient">
                                                <img src="assets/images/android.png" alt="android">
                                                <img src="assets/images/android.png" alt="android">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end home-download-section-->
    <!-- home-contact-section -->
    <section class="home-contact-section overflow-hidden blue-gradient pt-100 pb-80">
        <div class="home-contact-bg-circle">
            <div class="home-contact-circle-item">
                <img src="assets/images/lg-circle-1.png" alt="circle">
            </div>
            <div class="home-contact-circle-item">
                <img src="assets/images/lg-circle-1.png" alt="circle">
            </div>
        </div>
        <div class="container">
            <div class="home-contact-inner">
                <h2>493 businesses! create your bank account now</h2>
                <p>What’s next in Aila Bank? <a href="#">Learn more</a></p>
                <ul class="section-button">
                    <li>
                        <a href="authentication.html" class="btn1 orange-gradient btn-with-image">
                            <i class="flaticon-agenda"></i>
                            <i class="flaticon-agenda"></i>
                            Create Your Account
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- .end home-contact-section -->
    @endsection
@push('js')
    <script src="/rechargepro.js"></script>
    @endpush
