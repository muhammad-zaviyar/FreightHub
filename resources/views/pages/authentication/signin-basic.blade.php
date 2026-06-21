@extends('layouts.auth-master')

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

                                <!-- Login Form -->
                                <div class="col-xl-6">
                                    <div class="p-3">

                                        @if ($errors->any())
                                            <div class="alert alert-danger py-2 mb-3">
                                                {{ $errors->first() }}
                                            </div>
                                        @endif

                                        <form method="POST" action="{{ route('login.post') }}">
                                            @csrf
                                            <div class="row gy-3">
                                                <div class="col-xl-12">
                                                    <label class="form-label text-default" for="signin-email">
                                                        Email Address <sup class="fs-12 text-danger">*</sup>
                                                    </label>
                                                    <input class="form-control @error('email') is-invalid @enderror"
                                                           id="signin-email"
                                                           name="email"
                                                           type="email"
                                                           placeholder="Enter your email address"
                                                           value="{{ old('email') }}"
                                                           autofocus>
                                                </div>
                                                <div class="col-xl-12">
                                                    <label class="form-label text-default" for="signin-password">
                                                        Password <sup class="fs-12 text-danger">*</sup>
                                                    </label>
                                                    <div class="input-group">
                                                        <input class="form-control signin-password-input"
                                                               id="signin-password"
                                                               name="password"
                                                               type="password"
                                                               placeholder="Enter your password">
                                                        <button class="btn btn-primary-light show-password-button" type="button"
                                                                onclick="createpassword('signin-password', this)">
                                                            <i class="ri-eye-off-line align-middle"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="form-check d-flex justify-content-between">
                                                        <div>
                                                            <input class="form-check-input" type="checkbox" name="remember" id="rememberMe">
                                                            <label class="form-check-label text-muted fw-normal fs-12" for="rememberMe">
                                                                Remember me
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-grid mt-4">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="ri-login-circle-line lh-1 me-2 align-middle"></i>Sign In
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                                <!-- Branding Panel -->
                                <div class="col-xl-6 border rounded bg-secondary-transparent border-secondary border-opacity-10">
                                    <div class="d-flex align-items-center justify-content-around flex-column gap-4 h-100">
                                        <img src="{{ asset('build/assets/images/authentication/5.png') }}"
                                             alt="Sign In" class="img-fluid m-auto mb-3 flex-fill mt-4">
                                        <div class="flex-fill text-center">
                                            <h6 class="mb-2">Welcome to FreightHub</h6>
                                            <p class="mb-0 text-muted fw-normal fs-12">Sign in to your account to continue.</p>
                                        </div>
                                        <a href="{{ url('dashboard') }}">
                                            <img alt="logo" class="toggle-logo mb-4 pb-2"
                                                 src="{{ asset('build/assets/images/brand-logos/toggle-logo.png') }}">
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
    <script src="{{ asset('build/assets/show-password.js') }}"></script>
@endsection
