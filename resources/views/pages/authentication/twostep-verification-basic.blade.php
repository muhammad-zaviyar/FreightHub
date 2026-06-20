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
                                        <div class="col-xl-6 px-0">
                                            <div class="p-3">
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
                                        <div class="col-xl-6 border rounded bg-secondary-transparent border-secondary border-opacity-10">
                                            <div class="d-flex align-items-center justify-content-around flex-column gap-4 h-100">
                                                <img src="{{asset('build/assets/images/authentication/5.png')}}" alt="" class="img-fluid m-auto mb-3 flex-fill mt-2">
                                                <div class="flex-fill text-center">
                                                    <h6 class="mb-2">Verification in Progress</h6>
                                                    <p class="mb-0 text-muted fw-normal fs-12">Please enter the code sent to your Email or phone.</p>
                                                </div>
                                                <a href="{{url('index')}}"><img alt="logo" class="toggle-logo mb-2 pb-2" src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}"></a>
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

        <!-- Internal Two Step Verification JS -->
        <script src="{{asset('build/assets/two-step-verification.js')}}"></script>

@endsection