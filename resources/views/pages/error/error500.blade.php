@extends('layouts.auth-master')

@section('styles')

      
@endsection

@section('content')

@section('body')
<body>
@endsection

            <div class="page error-bg">
                <!-- Start::error-page -->
                <div class="error-page">
                    <div class="container">
                        <div class="my-auto">
                            <div class="row align-items-start justify-content-center h-100">
                                <div class="col-xl-10 col-lg-5 col-md-6 col-12 text-fixed-white">
                                    <div>
                                        <p class="error-text">5<span class="text-secondary">0</span>0</p>
                                        <p class="fs-20 fw-semibold mb-0 op-9">Internal Server Error...</p>
                                        <p class="fs-14 mb-5 text-fixed-white op-7 fw-normal">Something went wrong on our end. Please try again later or contact support if the issue persists.</p>
                                        <a href="{{url('index')}}" class="btn btn-primary me-1">
                                            <i class="ri-arrow-left-line align-middle me-1 d-inline-block"></i> Go Back
                                        </a>
                                        <a href="{{url('index')}}" class="btn btn-success">
                                            <i class="ri-information-line align-middle me-1 d-inline-block lh-1"></i> Learn More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection

@section('scripts')


@endsection