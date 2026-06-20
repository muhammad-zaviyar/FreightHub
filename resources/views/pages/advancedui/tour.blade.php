@extends('layouts.master')

@section('styles')

        <!-- Shepherd Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/shepherd.js/css/shepherd.css')}}">
      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Tour</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Ui</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tour</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start:: row-1 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        SHEPHERD JS
                                    </div>
                                </div>
                                <div class="card-body p-5 text-center">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-7 mb-5 pb-3">
                                            <span class="avatar avatar-md">
                                                <img src="{{asset('build/assets/images/company-logos/7.png')}}" alt="" id="step-1">
                                            </span>
                                            <h5 class="fw-medium">Welcome to the Knowledge Base</h5>
                                            <span class="text-muted">Explore helpful resources, articles, and solutions designed to assist you with various topics and issues.</span>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center gap-3">
                                        <div class="col-xl-3">
                                            <div class="card custom-card shadow-none border border-primary border-opacity-25 text-start">
                                                <div class="card-body">
                                                    <div class="">
                                                        <span class="avatar avatar-md avatar-rounded bg-primary svg-white mb-3 shadow-primary" id="step-2">
                                                            <i class="ri-search-line fs-18"></i>
                                                        </span>
                                                        <div>
                                                            <h6 class="fw-semibold mb-2">Search for Topics.</h6>
                                                            <span class="text-muted">Find articles and tutorials by searching for keywords, categories, or FAQs.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="card custom-card shadow-none border border-secondary border-opacity-25 text-start">
                                                <div class="card-body">
                                                    <div class="">
                                                        <span class="avatar avatar-md bg-secondary svg-white mb-3 avatar-rounded shadow-secondary" id="step-3">
                                                            <i class="ri-question-line fs-20"></i>
                                                        </span>
                                                        <div>
                                                            <h6 class="fw-semibold mb-2">FAQ Section</h6>
                                                            <span class="text-muted">Our FAQ section covers common questions and provides quick answers to help resolve issues.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="card custom-card shadow-none border border-success border-opacity-25 text-start">
                                                <div class="card-body">
                                                    <div class="">
                                                        <span class="avatar avatar-md bg-success svg-white mb-3 avatar-rounded shadow-success" id="step-4">
                                                            <i class="ri-guide-line fs-18"></i>
                                                        </span>
                                                        <div>
                                                            <h6 class="fw-semibold mb-2">Step-by-Step Guides</h6>
                                                            <span class="text-muted">Access detailed guides to help you solve specific problems or complete tasks efficiently.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="card custom-card shadow-none border border-info border-opacity-25 text-start">
                                                <div class="card-body">
                                                    <div class="">
                                                        <span class="avatar avatar-md bg-info svg-white mb-3 avatar-rounded shadow-info" id="step-5">
                                                            <i class="ri-user-community-line fs-20"></i>
                                                        </span>
                                                        <div>
                                                            <h6 class="fw-semibold mb-2">Community Support</h6>
                                                            <span class="text-muted">Join discussions, ask questions, and share insights with other users in the community forum.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="card custom-card shadow-none border border-pink border-opacity-25 text-start">
                                                <div class="card-body">
                                                    <div class="">
                                                        <span class="avatar avatar-md bg-pink svg-white mb-3 avatar-rounded shadow-pink" id="step-6">
                                                            <i class="ri-ticket-2-line fs-20"></i>
                                                        </span>
                                                        <div>
                                                            <h6 class="fw-semibold mb-2">Support Tickets</h6>
                                                            <span class="text-muted">Submit a support ticket for personalized help from our team if you can't find the solution you need.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-sm-flex justify-content-end">
                                        <button class="btn btn-primary-light m-1">Go Back</button>
                                        <button class="btn btn-success-light m-1" id="step-7">Stay Updated</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Shepherd JS -->
        <script src="{{asset('build/assets/libs/shepherd.js/js/shepherd.min.js')}}"></script>

        <!-- Internal Tour JS -->
        @vite('resources/assets/js/tour.js')

    
@endsection