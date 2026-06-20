@extends('layouts.auth-master')

@section('styles')

      
@endsection

@section('content')

@section('body')
<body class="coming-soon-main">
@endsection

            <div class="row authentication coming-soon-row mx-0">
                <div class="col-xxl-12 px-0">
                    <div class="authentication-cover-comingsoon overflow-hidden flex-column">
                        <div class="coming-soon-logo">
                            <a href="{{url('index')}}">
                                <img src="{{asset('build/assets/images/brand-logos/desktop-white.png')}}" alt="" class="desktop-white">
                            </a>
                        </div>
                        <div class="coming-soon-maincontent">
                            <div class="row justify-content-center">
                                <div class="col-xxl-10">
                                    <div class="authentication-cover-content d-flex align-items-center justify-content-center text-center">
                                        <div>
                                            <h1 class="fw-medium text-fixed-white">We're Launching Soon!</h1>
                                            <h6 class=" mb-3 fw-medium text-fixed-white">Stay Tuned for Updates</h6>
                                            <p class=" mb-1 op-6 text-fixed-white">
                                                We are currently working hard to bring you a new and improved experience. 
                                                Please provide your email below to be the first to know when we launch!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex gap-4 flex-wrap flex-xl-nowrap flex-shrink-0 mt-5 mb-0 gy-xxl-0 gy-3 justify-content-center authentication-time-count" id="timer">
                            </div>
                            <div class="row my-5 justify-content-center">
                                <div class="col-xl-7">
                                    <div class="input-group rounded-pill">
                                        <input type="email" class="form-control form-control-lg coming-soon-form shadow-sm" placeholder="your_email@example.com" aria-label="your_email@example.com" aria-describedby="button-addon2">
                                        <button class="btn btn-primary btn-lg" type="button" id="button-addon2">Notify Me!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="snow-container"></div>
                        <div class="coming-soon-footer text-fixed-white">
                            <span>
                                Copyright © <span id="year"></span> 
                                <a href="javascript:void(0);" class="fw-semibold text-secondary">Rixzo</a>.
                                Designed with <span class="bi bi-heart-fill text-danger"></span> by 
                                <a href="javascript:void(0);">
                                    <span class="fw-semibold text-primary text-decoration-underline">Spruko</span>
                                </a>. 
                                All rights reserved.
                            </span>
                            <span class="op-6">|</span>
                            <div class="d-flex gap-2 align-items-center">
                                <div>Follow Us:</div>
                                <div class="btn-list">
                                    <button class="btn btn-icon btn-sm btn-wave rounded-circle btn-outline-light auth-social-icons text-fixed-white">
                                        <i class="ri-facebook-line lh-1 align-middle"></i>
                                    </button>
                                    <button class="btn btn-icon btn-sm btn-wave rounded-circle btn-outline-light auth-social-icons text-fixed-white">
                                        <i class="ri-twitter-x-line lh-1 align-middle"></i>
                                    </button>
                                    <button class="btn btn-icon btn-sm btn-wave rounded-circle btn-outline-light auth-social-icons text-fixed-white">
                                        <i class="ri-instagram-line lh-1 align-middle"></i>
                                    </button>
                                    <button class="btn btn-icon btn-sm btn-wave rounded-circle btn-outline-light auth-social-icons text-fixed-white">
                                        <i class="ri-github-line lh-1 align-middle"></i>
                                    </button>
                                </div>
                            </div>                                   
                        </div>
                    </div>
                </div>
            </div>
    
@endsection

@section('scripts')

        <!-- Anime JS -->
        <script src="{{asset('build/assets/libs/animejs/lib/anime.min.js')}}"></script>

        <!-- Internal Coming Soon JS -->
        <script src="{{asset('build/assets/coming-soon.js')}}"></script>
    
@endsection