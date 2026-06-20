@extends('layouts.auth-master')

@section('styles')

      
@endsection

@section('content')

@section('body')
<body>
@endsection

            <div class="authentication-background">
                <div class="container-lg">
                    <div class="row justify-content-center authentication authentication-basic align-items-center h-100">
                        <div class="col-xxl-7 col-sm-8 col-12">
                            <div class="card custom-card my-4 border">
                                <div class="card-body">
                                    <div class="row mx-0 align-items-center">
                                        <div class="col-xl-6">
                                            <div class="p-3">
                                                <div class="row gy-3">
                                                    <div class="col-xl-12 mt-2">
                                                        <label class="form-label text-default" for="signup-email">Email Address<sup class="fs-12 text-danger">*</sup></label>
                                                        <input class="form-control signup-email-input" id="signup-email" placeholder="Enter your email address" type="email"> 
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <label class="form-label text-default" for="signup-password">Password<sup class="fs-12 text-danger">*</sup></label>
                                                        <div class="input-group"> 
                                                            <input class="form-control signup-password-input" id="signup-password" placeholder="Create a password" type="password"> 
                                                            <button class="btn btn-primary-light show-password-button" type="button" onclick="createpassword('signup-password', this)">
                                                                <i class="ri-eye-off-line align-middle"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 mb-2">
                                                        <label class="form-label text-default" for="create-confirmpassword">Confirm Password<sup class="fs-12 text-danger">*</sup></label>
                                                        <div class="input-group">
                                                            <input class="form-control create-password-input" id="create-confirmpassword" placeholder="Re-enter your password" type="password"> 
                                                            <button class="btn btn-primary-light show-password-button" type="button" onclick="createpassword('create-confirmpassword',this)">
                                                                <i class="ri-eye-off-line align-middle"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="form-check mt-3">
                                                        <input class="form-check-input" type="checkbox" value="" id="termsCheck">
                                                        <label class="form-check-label text-muted fw-normal fs-11" for="termsCheck">
                                                            By creating an account, you agree to our 
                                                            <a href="{{url('terms-conditions')}}" class="text-success"><u>Terms & Conditions</u></a> and 
                                                            <a href="javascript:void(0);" class="text-success"><u>Privacy Policy</u></a>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="d-grid mt-3">
                                                    <a href="{{url('index')}}" class="btn btn-primary"><i class="ri-user-add-line lh-1 me-2 align-middle"></i>Create Account</a>
                                                </div>
                                                <div class="text-center">
                                                    <p class="text-muted mt-3 mb-0">Already have an account? <a class="text-primary fw-medium text-decoration-underline" href="{{url('signin-basic')}}">Sign In</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 border rounded bg-secondary-transparent border-secondary border-opacity-10">
                                            <div class="d-flex align-items-center justify-content-around flex-column gap-4 h-100">
                                                <img src="{{asset('build/assets/images/authentication/5.png')}}" alt="Sign Up" class="img-fluid m-auto mb-3 flex-fill mt-4">
                                                <div class="flex-fill text-center">
                                                    <h6 class="mb-2">Create Your Account</h6>
                                                    <p class="mb-0 text-muted fw-normal fs-12">Join us and enjoy exclusive benefits!</p>
                                                </div>
                                                <div class="d-flex mb-1 justify-content-between gap-2 flex-wrap flex-lg-nowrap">
                                                    <button class="btn btn-sm d-flex align-items-center justify-content-center flex-fill btn-danger-light">
                                                        <i class="ri-google-fill"></i>
                                                        <span class="ms-2">Google</span>
                                                    </button>
                                                    <button class="btn btn-sm d-flex align-items-center justify-content-center flex-fill btn-primary-light">
                                                        <i class="ri-facebook-fill"></i>
                                                        <span class="ms-2">Facebook</span>
                                                    </button>
                                                    <button class="btn btn-sm d-flex align-items-center justify-content-center flex-fill btn-info-light">
                                                        <i class="ri-twitter-x-line"></i>
                                                        <span class="ms-2">Twitter</span>
                                                    </button>
                                                </div>
                                                <a href="{{url('index')}}">
                                                    <img alt="logo" class="toggle-logo mb-4 pb-2" src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}">
                                                </a>
                                            </div>
                                        </div>                                
                                    </div>
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