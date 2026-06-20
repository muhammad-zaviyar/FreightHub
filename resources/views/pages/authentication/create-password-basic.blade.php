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
                                                <div class="col-xl-12">
                                                    <label class="form-label text-default" for="create-password">Create Password<sup class="fs-12 text-danger">*</sup></label>
                                                    <div class="input-group"> 
                                                        <input class="form-control create-password-input" id="create-password" placeholder="Enter your password" type="password"> 
                                                        <button class="btn btn-primary-light show-password-button" type="button" onclick="createpassword('create-password', this)">
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
                                                    <div class="mt-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="rememberPassword" type="checkbox" value=""> 
                                                            <label class="form-check-label text-muted fw-normal" for="rememberPassword">Remember password?</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-grid mt-4">
                                                <button class="btn btn-primary"><i class="ri-lock-password-line lh-1 me-2 align-middle"></i>Save Password</button>
                                            </div>
                                            <div class="text-center">
                                                <p class="text-muted mt-3 mb-0">Back to home ? <a class="text-primary fw-medium text-decoration-underline" href="{{url('index')}}">Click Here</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 border rounded bg-secondary-transparent border-secondary border-opacity-10">
                                        <div class="d-flex align-items-center justify-content-around flex-column gap-4 h-100">
                                            <img src="{{asset('build/assets/images/authentication/5.png')}}" alt="Create Password" class="img-fluid m-auto mb-3 flex-fill mt-4">
                                            <div class="flex-fill text-center">
                                                <h6 class="mb-2">Set Your New Password</h6>
                                                <p class="mb-0 text-muted fw-normal fs-12">Create a secure password for protection!</p>
                                            </div>
                                            <a href="{{url('index')}}"><img alt="logo" class="toggle-logo mb-4 pb-2" src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}"></a>
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