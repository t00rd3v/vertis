@extends('frontend_layout')
@section('title')
    My Account
    @endsection

        <!-- authentication-section -->
        <div class="authentication-section">
            <div class="authentication-grid">
                <div class="authentication-item authentication-img-bg"></div>
                <div class="authentication-item bg-white pl-15 pr-15">
                    <div class="authentication-user-panel">
                        <div class="authentication-user-header">
                            <a href="index.html"><img src="assets/images/logo.png" alt="logo"></a>
                            <h1>Welcome to {{config('rechargepro.app.site_title')}}</h1>
                        </div>
                        <div class="authentication-user-body">
                            <div class="authentication-tab">
                                <div class="authentication-tab-item authentication-tab-active"  data-authentcation-tab="1">
                                    <img src="assets/images/login.png" alt="icon">
                                    Login
                                </div>
                                <div class="authentication-tab-item"  data-authentcation-tab="2">
                                    <img src="assets/images/register.png" alt="icon">
                                    Register
                                </div>
                            </div>
                            <div class="authentication-tab-details">
                                <div class="authentication-tab-details-item authentication-tab-details-active" data-authentcation-details="1">
                                    <div class="authentication-form">
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="form-group mb-15">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Username Or Email Address *" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="form-group mb-15">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                            </div>
                                                            <input type="password" class="form-control" placeholder="Password" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <button class="btn1 orange-gradient full-width">Login</button>
                                                </div>
                                            </div>
                                            <div class="authentication-account-access mt-20">
                                                <div class="authentication-account-access-item">
                                                    <div class="authentication-checkbox">
                                                        <input type="checkbox" id="remember">
                                                        <label for="remember">Remember me</label>
                                                    </div>
                                                </div>
                                                <div class="authentication-account-access-item">
                                                    <div class="authentication-link">
                                                        <a href="forget-password.html">Forget password?</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="authentication-divider mt-20">
                                        <span>Or Login With</span>
                                    </div>
                                    <div class="authentication-social-access mt-10">
                                        <div class="authentication-social-item social-btn social-btn-fb mt-10">
                                            <a href="#">Facebook</a>
                                        </div>
                                        <div class="authentication-social-item social-btn social-btn-tw mt-10">
                                            <a href="#">Twitter</a>
                                        </div>
                                        <div class="authentication-social-item social-btn social-btn-ld mt-10">
                                            <a href="#">Linkedin</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="authentication-tab-details-item"  data-authentcation-details="2">
                                    <div class="authentication-form">
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="form-group mb-15">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Username*" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="form-group mb-15">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Email Address *" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="form-group mb-15">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                            </div>
                                                            <input type="password" class="form-control" placeholder="Password *" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="form-group mb-15">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                            </div>
                                                            <input type="password" class="form-control" placeholder="Confirm Password *" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <button class="btn1 orange-gradient full-width">Sign Up</button>
                                                </div>
                                            </div>
                                            <div class="authentication-account-access mt-20">
                                                <div class="authentication-account-access-item">
                                                    <div class="authentication-checkbox">
                                                        <input type="checkbox" id="newsletter">
                                                        <label for="newsletter">Click here to get newsletter</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="authentication-divider mt-60">
                                        <span>Or Sign Up With</span>
                                    </div>
                                    <div class="authentication-social-access mt-10">
                                        <div class="authentication-social-item social-btn social-btn-fb mt-10">
                                            <a href="#">Facebook</a>
                                        </div>
                                        <div class="authentication-social-item social-btn social-btn-tw mt-10">
                                            <a href="#">Twitter</a>
                                        </div>
                                        <div class="authentication-social-item social-btn social-btn-ld mt-10">
                                            <a href="#">Linkedin</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .end authentication-section -->
