@extends('layouts.auth-master')

@section('styles')

      
@endsection

@section('content')

@section('body')
<body>
@endsection

            <div class="row authentication authentication-cover-main mx-0">
                <div class="col-xxl-5 col-xl-7">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-xxl-7 col-xl-9 col-lg-6 col-md-6 col-sm-8 col-12">
                            <div class="card custom-card my-auto border authentication-cover-right">
                                <div class="card-body p-4">
                                    <div class="text-center mb-4 bg-primary-transparent rounded border border-primary border-opacity-10 pt-2 position-relative overflow-hidden">
                                        <i class="ri-lock-2-line position-absolute lock-icon-auth"></i>
                                        <img src="{{asset('build/assets/images/authentication/6.png')}}" alt="" class="img-fluid ms-4">
                                    </div>
                                    <div class="row gy-3">
                                        <div class="col-xl-12">
                                            <label class="form-label text-default" for="signin-email">Email Address<sup class="fs-12 text-danger">*</sup></label>
                                            <input class="form-control signin-email-input" id="signin-email" placeholder="Enter your email address" type="email"> 
                                        </div>
                                        <div class="col-xl-12">
                                            <label class="form-label text-default" for="signin-password">Password<sup class="fs-12 text-danger">*</sup></label>
                                            <div class="input-group"> 
                                                <input class="form-control signin-password-input" id="signin-password" placeholder="Enter your password" type="password"> 
                                                <button class="btn btn-primary-light show-password-button" type="button" onclick="createpassword('signin-password', this)">
                                                    <i class="ri-eye-off-line align-middle"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="form-check d-flex justify-content-between">
                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                                    <label class="form-check-label text-muted fw-normal fs-12" for="rememberMe">
                                                        Remember me
                                                    </label>
                                                </div>
                                                <a href="{{url('reset-password-basic')}}" class="text-success fw-medium fs-12">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid mt-4">
                                        <a href="{{url('index')}}" class="btn btn-primary"><i class="ri-login-circle-line lh-1 me-2 align-middle"></i>Sign In</a>
                                    </div>
                                    <div class="text-center">
                                        <p class="text-muted mt-3 mb-0">Don't have an account? <a class="text-primary fw-medium text-decoration-underline" href="{{url('signup-basic')}}">Sign Up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-5 col-lg-12 d-xl-block d-none px-0">
                    <div class="authentication-cover overflow-hidden">
                        <div class="aunthentication-cover-content d-flex align-items-center justify-content-center">
                            <div>
                                <a href="{{url('index')}}"> 
                                    <img src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="" class="authentication-brand toggle-white img-fluid mb-4"> 
                                </a> 
                                <h4 class="text-fixed-white mb-2 fw-medium">Welcome Back! <span class="text-secondary text-shadow">Sign In</span></h4>
                                <h6 class="text-fixed-white mb-3 fw-medium">Access Your Account</h6>
                                <p class="text-fixed-white mb-1 op-6">Please enter your email and password to continue.</p>
                                <p class="text-fixed-white op-6 mb-5">If you've forgotten your password, use the "Forgot Password" option to reset it. Make sure your login details are secure and up to date.</p>
                                <div class="d-flex mb-1 gap-2 flex-wrap flex-lg-nowrap">
                                    <button class="btn btn-icon rounded-circle btn-sm d-flex align-items-center justify-content-center btn-info">
                                        <i class="ri-twitter-x-line"></i>
                                    </button>
                                    <button class="btn btn-icon rounded-circle btn-sm d-flex align-items-center justify-content-center btn-pink">
                                        <i class="ri-google-line fs-16"></i>
                                    </button>
                                    <button class="btn btn-icon rounded-circle btn-sm d-flex align-items-center justify-content-center btn-primary">
                                        <i class="ri-facebook-line fs-16"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection

@section('scripts')

        <!-- Show Password JS -->
        <script src="{{asset('build/assets/show-password.js')}}"></script>

@endsection