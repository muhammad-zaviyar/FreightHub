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
                                    <p class="fs-14 mb-4 fw-medium ">Enter Verification Code : </p>
                                    <div class="row gy-3">
                                        <div class="col-xl-12 mb-2">
                                            <div class="row">
                                                <div class="col-3">
                                                    <input type="text" class="form-control text-center" id="one" maxlength="1" onkeyup="clickEvent(this,'two')">
                                                </div>
                                                <div class="col-3">
                                                    <input type="text" class="form-control text-center" id="two" maxlength="1" onkeyup="clickEvent(this,'three')">
                                                </div>
                                                <div class="col-3">
                                                    <input type="text" class="form-control text-center" id="three" maxlength="1" onkeyup="clickEvent(this,'four')">
                                                </div>
                                                <div class="col-3">
                                                    <input type="text" class="form-control text-center" id="four" maxlength="1">
                                                </div>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label fs-14" for="defaultCheck1">
                                                    Didn't receive a code? <a href="{{url('index')}}" class="text-primary ms-2 d-inline-block">Resend</a>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 d-grid mt-3">
                                            <a href="{{url('index')}}" class="btn btn-primary">Verify</a>
                                        </div>
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
                                <h4 class="text-fixed-white mb-2 fw-medium">Verify Your <span class="text-secondary text-shadow">Identity</span></h4>
                                <h6 class="text-fixed-white mb-3 fw-medium">Enter the Verification Code</h6>
                                <p class="text-fixed-white mb-1 op-6">We have sent a verification code to your email or phone. Please enter the code to proceed.</p>
                                <p class="text-fixed-white op-6">If you didn't receive the code, check your spam folder or request a new one. This extra step helps keep your account secure.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
@endsection

@section('scripts')

        <!-- Internal Two Step Verification JS -->
        <script src="{{asset('build/assets/two-step-verification.js')}}"></script>

@endsection