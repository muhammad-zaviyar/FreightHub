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
                                            <label class="form-label text-default" for="reset-password">Current Password<sup class="fs-12 text-danger">*</sup></label>
                                            <div class="input-group"> 
                                                <input class="form-control reset-password-input" id="reset-password" placeholder="Enter your current password" type="password"> 
                                                <button class="btn btn-primary-light show-password-button" type="button" onclick="createpassword('reset-password', this)">
                                                    <i class="ri-eye-off-line align-middle"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <label class="form-label text-default" for="newpassword-password">New Password<sup class="fs-12 text-danger">*</sup></label>
                                            <div class="input-group"> 
                                                <input class="form-control newpassword-password-input" id="newpassword-password" placeholder="Enter a new password" type="password"> 
                                                <button class="btn btn-primary-light show-password-button" type="button" onclick="createpassword('newpassword-password', this)">
                                                    <i class="ri-eye-off-line align-middle"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 mb-2">
                                            <label class="form-label text-default" for="create-confirmpassword">Confirm New Password<sup class="fs-12 text-danger">*</sup></label>
                                            <div class="input-group">
                                                <input class="form-control create-password-input" id="create-confirmpassword" placeholder="Re-enter your new password" type="password"> 
                                                <button class="btn btn-primary-light show-password-button" type="button" onclick="createpassword('create-confirmpassword',this)">
                                                    <i class="ri-eye-off-line align-middle"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid mt-4">
                                        <a href="{{url('index')}}" class="btn btn-primary"><i class="ri-lock-2-line lh-1 me-2 align-middle"></i>Reset Password</a>
                                    </div>
                                    <div class="text-center">
                                        <p class="text-muted mt-3 mb-0">Want to go back? <a class="text-primary fw-medium text-decoration-underline" href="{{url('index')}}">Click here</a></p>
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
                                <h4 class="text-fixed-white mb-2 fw-medium">Reset <span class="text-secondary text-shadow">Your Password</span></h4>
                                <h6 class="text-fixed-white mb-3 fw-medium">Choose a New Password</h6>
                                <p class="text-fixed-white mb-1 op-6">Please create a new password to secure your account.</p>
                                <p class="text-fixed-white op-6">Your new password should be strong and unique. Use a combination of letters, numbers, and special characters to maximize security. Avoid using personal information or passwords you've used before.</p>
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