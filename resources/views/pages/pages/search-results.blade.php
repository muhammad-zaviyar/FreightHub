@extends('layouts.master')

@section('styles')

        <!-- GLightbox CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">
      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Search Results</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Search Results</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body p-0">
                                    <div class="p-3 border-bottom">
                                        <div class="p-3 bg-light rounded-3">
                                            <div class="input-group mb-3 search-result-input gap-2 align-items-center">
                                                <input type="text" class="form-control form-control-lg rounded-pill w-auto" placeholder="Search Here ..." aria-label="Search Here ..." aria-describedby="button-addon1">
                                                <button class="btn btn-success btn-icon btn-wave rounded-circle" type="button" id="button-addon1"> <i class="ri-mic-line fs-15"></i></button>
                                                <button class="btn btn-primary btn-wave btn-w-sm rounded-pill" type="button" id="button-addon11"> Search</button>
                                            </div>
                                            <p class="text-muted ms-2 fw-medium">Recommended for You!</p>
                                            <div class="d-flex gap-2 flex-wrap">
                                                <span class="badge bg-white border border-primary border-opacity-25 text-default rounded-pill fs-11">Designs <a href="javascript:void(0);"><i class="ri-close-line"></i></a></span>
                                                <span class="badge bg-white border border-primary border-opacity-25 text-default rounded-pill fs-11">Template <a href="javascript:void(0);"><i class="ri-close-line"></i></a></span>
                                                <span class="badge bg-white border border-primary border-opacity-25 text-default rounded-pill fs-11">Dashboard <a href="javascript:void(0);"><i class="ri-close-line"></i></a></span>
                                                <span class="badge bg-white border border-primary border-opacity-25 text-default rounded-pill fs-11">Admin Templates <a href="javascript:void(0);"><i class="ri-close-line"></i></a></span>
                                                <span class="badge bg-white border border-primary border-opacity-25 text-default rounded-pill fs-11"> Templates <a href="javascript:void(0);"><i class="ri-close-line"></i></a></span>
                                                <span class="badge bg-white border border-primary border-opacity-25 text-default rounded-pill fs-11">Admin <a href="javascript:void(0);"><i class="ri-close-line"></i></a></span>
                                                <span class="badge bg-white border border-primary border-opacity-25 text-default rounded-pill fs-11">Hosting Templates <a href="javascript:void(0);"><i class="ri-close-line"></i></a></span>
                                                <span class="badge bg-white border border-primary border-opacity-25 text-default rounded-pill fs-11">Hosting <a href="javascript:void(0);"><i class="ri-close-line"></i></a></span>
                                                <span class="badge bg-white border border-primary border-opacity-25 text-default rounded-pill fs-11">Bootstrap <a href="javascript:void(0);"><i class="ri-close-line"></i></a></span>
                                                <span class="badge bg-white border border-primary border-opacity-25 text-default rounded-pill fs-11">Sales  <a href="javascript:void(0);"><i class="ri-close-line"></i></a></span>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="text-secondary text-decoration-underline fw-medium mx-2"> Clear All </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 d-flex gap-2 justify-content-between flex-wrap align-items-center pb-1">
                                        <div class="text-muted">57,894 results found for best.</div>
                                        <div class="ms-auto d-flex gap-2 flex-wrap">
                                            <div class="dropdown"> 
                                                <a href="javascript:void(0);" class="btn btn-sm btn-w-md btn-light text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true"> Sort By</a> 
                                                <ul class="dropdown-menu"> 
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Alphabets</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">First Word</a></li> 
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Numeric</a></li>  
                                                </ul> 
                                            </div>
                                            <div class="dropdown"> 
                                                <a href="javascript:void(0);" class="btn btn-sm btn-w-md btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true"> Filter By</a> 
                                                <ul class="dropdown-menu"> 
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Alphabets</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">First Word</a></li> 
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Numeric</a></li> 
                                                </ul> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 px-3 pt-1 pb-3">
                                        <ul class="nav nav-tabs tab-style-8 scaleX profile-settings-tab gap-2" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link fs-15 fw-medium active" data-bs-toggle="tab" role="tab" aria-current="page" href="#search-all" aria-selected="true"><i class="ti ti-search fs-15 text-success fw-medium me-2 d-inline-block"></i>All</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link fs-15 fw-medium" data-bs-toggle="tab" role="tab" aria-current="page" href="#search-images" aria-selected="false" tabindex="-1"><i class="ti ti-photo fs-15 text-success fw-medium me-2 d-inline-block"></i>Images</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link fs-15 fw-medium" data-bs-toggle="tab" role="tab" aria-current="page" href="#search-news" aria-selected="false" tabindex="-1"><i class="ti ti-news fs-15 text-success fw-medium me-2 d-inline-block"></i>News</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link fs-15 fw-medium" data-bs-toggle="tab" role="tab" aria-current="page" href="#search-videos" aria-selected="false" tabindex="-1"><i class="ti ti-video fs-15 text-success fw-medium me-2 d-inline-block"></i>Videos</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link fs-15 fw-medium" data-bs-toggle="tab" role="tab" aria-current="page" href="#search-books" aria-selected="false" tabindex="-1"><i class="ti ti-book fs-15 text-success fw-medium me-2 d-inline-block"></i>Books</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="tab-content">
                                <div class="tab-pane p-0 border-0 show active" id="search-all" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-start justify-content-between flex-wrap gap-1 mb-3">
                                                        <div class="d-flex gap-2 align-items-start flex-wrap">
                                                            <span class="avatar avatar-lg avatar-rounded bg-primary-transparent p-2">
                                                                <img src="{{asset('build/assets/images/company-logos/1.png')}}" alt="Modern Admin Logo">
                                                            </span>
                                                            <div class="align-self-center">
                                                                <h6 class="fw-semibold mb-0">
                                                                    <a href="javascript:void(0);" class="searched-item-main-link">Modern Admin Dashboard Template</a>
                                                                </h6>
                                                                <span class="fs-12 text-muted">A complete solution for admin dashboards</span>
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto d-flex gap-1 flex-wrap">
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="btn btn-light btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    View By
                                                                    <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                                </a>
                                                                <ul class="dropdown-menu" role="menu">
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="btn btn-secondary-light btn-sm btn-wave waves-effect waves-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill align-middle d-inline-block fs-15 fw-medium lh-1"></i>
                                                                </a>
                                                                <ul class="dropdown-menu" role="menu">
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Read More</a></li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Report</a></li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <p class="text-muted">
                                                        The Modern Admin Dashboard template is a sleek, feature-packed template ideal for managing data in any web application, offering a clean design and user-friendly interface.
                                                    </p>
                                                    <div class="mb-3 d-flex gap-2 flex-wrap text-break">
                                                        <span class="fw-medium">Links:</span>
                                                        <a href="javascript:void(0);" class="link-info text-decoration-underline">https://www.modernadmin.com/features</a> ,
                                                        <a href="javascript:void(0);" class="link-info text-decoration-underline">https://www.modernadmin.com/demo</a>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2 flex-wrap">
                                                        <span class="fw-medium">Related Tags:</span>
                                                        <a href="javascript:void(0);" class="badge bg-primary-transparent rounded-pill fs-11">Admin Template</a>
                                                        <a href="javascript:void(0);" class="badge bg-secondary-transparent rounded-pill fs-11">Dashboard</a>
                                                        <a href="javascript:void(0);" class="badge bg-success-transparent rounded-pill fs-11">Bootstrap</a>
                                                        <a href="javascript:void(0);" class="badge bg-info-transparent rounded-pill fs-11">Responsive</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-start justify-content-between flex-wrap gap-1 mb-3">
                                                        <div class="d-flex gap-2 align-items-start flex-wrap">
                                                            <span class="avatar avatar-lg avatar-rounded bg-primary-transparent p-2">
                                                                <img src="{{asset('build/assets/images/company-logos/2.png')}}" alt="Company XYZ Logo">
                                                            </span>
                                                            <div class="align-self-center">
                                                                <h6 class="fw-semibold mb-0">
                                                                    <a href="javascript:void(0);" class="searched-item-main-link">Understanding AI for Beginners</a>
                                                                </h6>
                                                                <span class="fs-12 text-muted">Introductory course on Artificial Intelligence</span>
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto d-flex gap-1 flex-wrap">
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="btn btn-light btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    View By
                                                                    <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                                </a>
                                                                <ul class="dropdown-menu" role="menu">
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="btn btn-secondary-light btn-sm btn-wave waves-effect waves-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill align-middle d-inline-block fs-15 fw-medium lh-1"></i>
                                                                </a>
                                                                <ul class="dropdown-menu" role="menu">
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Read More</a></li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Report</a></li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <p class="text-muted">
                                                        Dive into the world of Artificial Intelligence, explore the basics of machine learning, neural networks, and algorithms designed to mimic human cognition.
                                                    </p>
                                                    <div class="mb-3 d-flex gap-2 flex-wrap text-break">
                                                        <span class="fw-medium">Links:</span>
                                                        <a href="javascript:void(0);" class="link-info text-decoration-underline">https://www.companyxyz.com/ai-intro</a> ,
                                                        <a href="javascript:void(0);" class="link-info text-decoration-underline">https://www.companyxyz.com/resources</a>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2 flex-wrap">
                                                        <span class="fw-medium">Related Tags:</span>
                                                        <a href="javascript:void(0);" class="badge bg-primary-transparent rounded-pill fs-11">AI</a>
                                                        <a href="javascript:void(0);" class="badge bg-secondary-transparent rounded-pill fs-11">Machine Learning</a>
                                                        <a href="javascript:void(0);" class="badge bg-success-transparent rounded-pill fs-11">Neural Networks</a>
                                                        <a href="javascript:void(0);" class="badge bg-danger-transparent rounded-pill fs-11">AI Basics</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-start justify-content-between flex-wrap gap-1 mb-3">
                                                        <div class="d-flex gap-2 align-items-start flex-wrap">
                                                            <span class="avatar avatar-lg avatar-rounded bg-primary-transparent p-2">
                                                                <img src="{{asset('build/assets/images/company-logos/3.png')}}" alt="AdminPro Logo">
                                                            </span>
                                                            <div class="align-self-center">
                                                                <h6 class="fw-semibold mb-0">
                                                                    <a href="javascript:void(0);" class="searched-item-main-link">AdminPro - Professional Admin Template</a>
                                                                </h6>
                                                                <span class="fs-12 text-muted">Pro-level tools for admin dashboards</span>
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto d-flex gap-1 flex-wrap">
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="btn btn-light btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    View By
                                                                    <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                                </a>
                                                                <ul class="dropdown-menu" role="menu">
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="btn btn-secondary-light btn-sm btn-wave waves-effect waves-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill align-middle d-inline-block fs-15 fw-medium lh-1"></i>
                                                                </a>
                                                                <ul class="dropdown-menu" role="menu">
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Read More</a></li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Report</a></li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <p class="text-muted">
                                                        AdminPro is a fully responsive admin template designed for all your data management needs, with advanced widgets, charts, and forms to boost your dashboard experience.
                                                    </p>
                                                    <div class="mb-3 d-flex gap-2 flex-wrap text-break">
                                                        <span class="fw-medium">Links:</span>
                                                        <a href="javascript:void(0);" class="link-info text-decoration-underline">https://www.adminpro.com/documentation</a> ,
                                                        <a href="javascript:void(0);" class="link-info text-decoration-underline">https://www.adminpro.com/pricing</a>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2 flex-wrap">
                                                        <span class="fw-medium">Related Tags:</span>
                                                        <a href="javascript:void(0);" class="badge bg-primary-transparent rounded-pill fs-11">Admin Pro</a>
                                                        <a href="javascript:void(0);" class="badge bg-secondary-transparent rounded-pill fs-11">Charts</a>
                                                        <a href="javascript:void(0);" class="badge bg-warning-transparent rounded-pill fs-11">Forms</a>
                                                        <a href="javascript:void(0);" class="badge bg-info-transparent rounded-pill fs-11">Widgets</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-start justify-content-between flex-wrap gap-1 mb-3">
                                                        <div class="d-flex gap-2 align-items-start flex-wrap">
                                                            <span class="avatar avatar-lg avatar-rounded bg-primary-transparent p-2">
                                                                <img src="{{asset('build/assets/images/company-logos/5.png')}}" alt="Creative UI Kit Logo">
                                                            </span>
                                                            <div class="align-self-center">
                                                                <h6 class="fw-semibold mb-0">
                                                                    <a href="javascript:void(0);" class="searched-item-main-link">Creative UI Kit</a>
                                                                </h6>
                                                                <span class="fs-12 text-muted">Comprehensive design kit for modern applications</span>
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto d-flex gap-1 flex-wrap">
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="btn btn-light btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    View By
                                                                    <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                                </a>
                                                                <ul class="dropdown-menu" role="menu">
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="btn btn-secondary-light btn-sm btn-wave waves-effect waves-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill align-middle d-inline-block fs-15 fw-medium lh-1"></i>
                                                                </a>
                                                                <ul class="dropdown-menu" role="menu">
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Read More</a></li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Report</a></li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <p class="text-muted">
                                                        Creative UI Kit is a robust design toolkit offering hundreds of ready-made components and templates for building modern, responsive web applications with ease.
                                                    </p>
                                                    <div class="mb-3 d-flex gap-2 flex-wrap text-break">
                                                        <span class="fw-medium">Links:</span>
                                                        <a href="javascript:void(0);" class="link-info text-decoration-underline">https://www.creativeuikit.com/components</a> ,
                                                        <a href="javascript:void(0);" class="link-info text-decoration-underline">https://www.creativeuikit.com/documentation</a>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2 flex-wrap">
                                                        <span class="fw-medium">Related Tags:</span>
                                                        <a href="javascript:void(0);" class="badge bg-primary-transparent rounded-pill fs-11">UI Kit</a>
                                                        <a href="javascript:void(0);" class="badge bg-secondary-transparent rounded-pill fs-11">Design</a>
                                                        <a href="javascript:void(0);" class="badge bg-success-transparent rounded-pill fs-11">Components</a>
                                                        <a href="javascript:void(0);" class="badge bg-info-transparent rounded-pill fs-11">Responsive</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-start justify-content-between flex-wrap gap-1 mb-3">
                                                        <div class="d-flex gap-2 align-items-start flex-wrap">
                                                            <span class="avatar avatar-lg avatar-rounded bg-primary-transparent p-2">
                                                                <img src="{{asset('build/assets/images/company-logos/6.png')}}" alt="Minimalist UI Template Logo">
                                                            </span>
                                                            <div class="align-self-center">
                                                                <h6 class="fw-semibold mb-0">
                                                                    <a href="javascript:void(0);" class="searched-item-main-link">Minimalist UI Design Template</a>
                                                                </h6>
                                                                <span class="fs-12 text-muted">Elegant and clean design for web and mobile apps</span>
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto d-flex gap-1 flex-wrap">
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="btn btn-light btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    View By
                                                                    <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                                </a>
                                                                <ul class="dropdown-menu" role="menu">
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="btn btn-secondary-light btn-sm btn-wave waves-effect waves-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill align-middle d-inline-block fs-15 fw-medium lh-1"></i>
                                                                </a>
                                                                <ul class="dropdown-menu" role="menu">
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Read More</a></li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Report</a></li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <p class="text-muted">
                                                        The Minimalist UI Design Template offers a simple yet stylish design approach for both web and mobile applications, featuring clean lines, ample white space, and highly legible typography.
                                                    </p>
                                                    <div class="mb-3 d-flex gap-2 flex-wrap text-break">
                                                        <span class="fw-medium">Links:</span>
                                                        <a href="javascript:void(0);" class="link-info text-decoration-underline">https://www.minimaluitemplate.com/features</a> ,
                                                        <a href="javascript:void(0);" class="link-info text-decoration-underline">https://www.minimaluitemplate.com/demo</a>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2 flex-wrap">
                                                        <span class="fw-medium">Related Tags:</span>
                                                        <a href="javascript:void(0);" class="badge bg-primary-transparent rounded-pill fs-11">UI Design</a>
                                                        <a href="javascript:void(0);" class="badge bg-secondary-transparent rounded-pill fs-11">Minimalist</a>
                                                        <a href="javascript:void(0);" class="badge bg-success-transparent rounded-pill fs-11">Mobile</a>
                                                        <a href="javascript:void(0);" class="badge bg-info-transparent rounded-pill fs-11">Clean Design</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-start justify-content-between flex-wrap gap-1 mb-3">
                                                        <div class="d-flex gap-2 align-items-start flex-wrap">
                                                            <span class="avatar avatar-lg avatar-rounded bg-primary-transparent p-2">
                                                                <img src="{{asset('build/assets/images/company-logos/7.png')}}" alt="Pro UI Design System Logo">
                                                            </span>
                                                            <div class="align-self-center">
                                                                <h6 class="fw-semibold mb-0">
                                                                    <a href="javascript:void(0);" class="searched-item-main-link">Pro UI Design System</a>
                                                                </h6>
                                                                <span class="fs-12 text-muted">A complete UI framework for web and mobile projects</span>
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto d-flex gap-1 flex-wrap">
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="btn btn-light btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    View By
                                                                    <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                                </a>
                                                                <ul class="dropdown-menu" role="menu">
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="btn btn-secondary-light btn-sm btn-wave waves-effect waves-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill align-middle d-inline-block fs-15 fw-medium lh-1"></i>
                                                                </a>
                                                                <ul class="dropdown-menu" role="menu">
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Read More</a></li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Report</a></li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <p class="text-muted">
                                                        Pro UI Design System offers a comprehensive set of UI components, design patterns, and templates for building professional web and mobile interfaces with a focus on scalability and flexibility.
                                                    </p>
                                                    <div class="mb-3 d-flex gap-2 flex-wrap text-break">
                                                        <span class="fw-medium">Links:</span>
                                                        <a href="javascript:void(0);" class="link-info text-decoration-underline">https://www.prouidesignsystem.com/features</a> ,
                                                        <a href="javascript:void(0);" class="link-info text-decoration-underline">https://www.prouidesignsystem.com/demo</a>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2 flex-wrap">
                                                        <span class="fw-medium">Related Tags:</span>
                                                        <a href="javascript:void(0);" class="badge bg-primary-transparent rounded-pill fs-11">Design System</a>
                                                        <a href="javascript:void(0);" class="badge bg-secondary-transparent rounded-pill fs-11">Web Design</a>
                                                        <a href="javascript:void(0);" class="badge bg-success-transparent rounded-pill fs-11">Scalable</a>
                                                        <a href="javascript:void(0);" class="badge bg-info-transparent rounded-pill fs-11">UI Components</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <nav aria-label="Page navigation" class="pagination-style-4">
                                        <ul class="pagination text-center justify-content-center gap-1">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0)">
                                                    Prev
                                                </a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="bi bi-three-dots"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">16</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">17</a></li>
                                            <li class="page-item">
                                                <a class="page-link text-primary" href="javascript:void(0)">
                                                    next
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>   
                                <div class="tab-pane border-0 p-0" id="search-images" role="tabpanel">
                                    <div class="card custom-card">
                                        <div class="card-body pb-0">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                                    <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox card search-images-card p-2" data-gallery="gallery1">
                                                        <div class="bg-light rounded">
                                                            <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" class="img-fluid rounded-top">
                                                            <div class="p-3 bg-light rounded-bottom">
                                                                <div class="d-flex align-items-center gap-1 flex-wrap">
                                                                    <div class="avatar avatar-xs">
                                                                        <img src="{{asset('build/assets/images/company-logos/6.png')}}" alt="">
                                                                    </div>
                                                                    <div class="figure-caption fs-14 fw-medium text-default">Beginner</div>
                                                                    <div class="fs-12 text-muted ms-auto">Beginner In.co</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                                    <a href="{{asset('build/assets/images/media/media-41.jpg')}}" class="glightbox card search-images-card p-2" data-gallery="gallery1">
                                                        <div class="bg-light rounded">
                                                            <img src="{{asset('build/assets/images/media/media-41.jpg')}}" alt="image" class="img-fluid rounded-top" >
                                                            <div class="p-3 bg-light rounded-bottom">
                                                                <div class="d-flex align-items-center gap-1 flex-wrap">
                                                                    <div class="avatar avatar-xs">
                                                                        <img src="{{asset('build/assets/images/company-logos/2.png')}}" alt="">
                                                                    </div>
                                                                    <div class="figure-caption fs-14 fw-medium text-default">Responsive</div>
                                                                    <div class="fs-12 text-muted ms-auto">Responsive Design</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                                    <a href="{{asset('build/assets/images/media/media-42.jpg')}}" class="glightbox card search-images-card p-2" data-gallery="gallery1">
                                                        <div class="bg-light rounded">
                                                            <img src="{{asset('build/assets/images/media/media-42.jpg')}}" alt="image" class="img-fluid rounded-top" >
                                                            <div class="p-3 bg-light rounded-bottom">
                                                                <div class="d-flex align-items-center gap-1 flex-wrap">
                                                                    <div class="avatar avatar-xs">
                                                                        <img src="{{asset('build/assets/images/company-logos/4.png')}}" alt="">
                                                                    </div>
                                                                    <div class="figure-caption fs-14 fw-medium text-default">JavaScript</div>
                                                                    <div class="fs-12 text-muted ms-auto">JavaScript Devlops</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                                    <a href="{{asset('build/assets/images/media/media-43.jpg')}}" class="glightbox card search-images-card p-2" data-gallery="gallery1">
                                                        <div class="bg-light rounded">
                                                            <img src="{{asset('build/assets/images/media/media-43.jpg')}}" alt="image" class="img-fluid rounded-top" >
                                                            <div class="p-3 bg-light rounded-bottom">
                                                                <div class="d-flex align-items-center gap-1 flex-wrap">
                                                                    <div class="avatar avatar-xs">
                                                                        <img src="{{asset('build/assets/images/company-logos/5.png')}}" alt="">
                                                                    </div>
                                                                    <div class="figure-caption fs-14 fw-medium text-default">Layoutscss</div>
                                                                    <div class="fs-12 text-muted ms-auto">Layout SCSS</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                                    <a href="{{asset('build/assets/images/media/media-44.jpg')}}" class="glightbox card search-images-card p-2" data-gallery="gallery1">
                                                        <div class="bg-light rounded">
                                                            <img src="{{asset('build/assets/images/media/media-44.jpg')}}" alt="image" class="img-fluid rounded-top">
                                                            <div class="p-3 bg-light rounded-bottom">
                                                                <div class="d-flex align-items-center gap-1 flex-wrap">
                                                                    <div class="avatar avatar-xs">
                                                                        <img src="{{asset('build/assets/images/company-logos/6.png')}}" alt="">
                                                                    </div>
                                                                    <div class="figure-caption fs-14 fw-medium text-default">frontend</div>
                                                                    <div class="fs-12 text-muted ms-auto">Frontend Development.co</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                                    <a href="{{asset('build/assets/images/media/media-45.jpg')}}" class="glightbox card search-images-card p-2" data-gallery="gallery1">
                                                        <div class="bg-light rounded">
                                                            <img src="{{asset('build/assets/images/media/media-45.jpg')}}" alt="image" class="img-fluid rounded-top">
                                                            <div class="p-3 bg-light rounded-bottom">
                                                                <div class="d-flex align-items-center gap-1 flex-wrap">
                                                                    <div class="avatar avatar-xs">
                                                                        <img src="{{asset('build/assets/images/company-logos/7.png')}}" alt="">
                                                                    </div>
                                                                    <div class="figure-caption fs-14 fw-medium text-default">backenddevlops</div>
                                                                    <div class="fs-12 text-muted ms-auto">Backend Solutions</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                                    <a href="{{asset('build/assets/images/media/media-46.jpg')}}" class="glightbox card search-images-card p-2" data-gallery="gallery1">
                                                        <div class="bg-light rounded">
                                                            <img src="{{asset('build/assets/images/media/media-46.jpg')}}" alt="image" class="img-fluid rounded-top">
                                                            <div class="p-3 bg-light rounded-bottom">
                                                                <div class="d-flex align-items-center gap-1 flex-wrap">
                                                                    <div class="avatar avatar-xs">
                                                                        <img src="{{asset('build/assets/images/company-logos/8.png')}}" alt="">
                                                                    </div>
                                                                    <div class="figure-caption fs-14 fw-medium text-default">Frontend Dev</div>
                                                                    <div class="fs-12 text-muted ms-auto">Project innovations.in</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                                    <a href="{{asset('build/assets/images/media/media-60.jpg')}}" class="glightbox card search-images-card p-2" data-gallery="gallery1">
                                                        <div class="bg-light rounded">
                                                            <img src="{{asset('build/assets/images/media/media-60.jpg')}}" alt="image" class="img-fluid rounded-top">
                                                            <div class="p-3 bg-light rounded-bottom">
                                                                <div class="d-flex align-items-center gap-1 flex-wrap">
                                                                    <div class="avatar avatar-xs">
                                                                        <img src="{{asset('build/assets/images/company-logos/9.png')}}" alt="">
                                                                    </div>
                                                                    <div class="figure-caption fs-14 fw-medium text-default">Flawless</div>
                                                                    <div class="fs-12 text-muted ms-auto">Masters In.co</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xl-12 mb-4">
                                                    <button class="btn btn-info-light btn-loader mx-auto">
                                                        <span class="me-2">Loading</span>
                                                        <span class="loading"><i class="ri-loader-4-line fs-16"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="tab-pane border-0 p-0" id="search-books" role="tabpanel">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-4">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center flex-wrap gap-3">
                                                        <div class="mb-3">
                                                            <span class="avatar avatar-xl bg-info bg-opacity-25 border border-opacity-25 p-1 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/media/books/2.jpg')}}" alt="Book Cover">
                                                            </span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="fw-medium mt-1 mb-2"><a href="javascript:void(0);"> Shadows of the Forgotten</a></h6>
                                                            <div class="popular-tags mb-3">
                                                                <a href="javascript:void(0);" class="badge rounded-pill bg-warning text-white">Mystery</a>
                                                                <a href="javascript:void(0);" class="badge rounded-pill bg-info text-white">Thriller</a>
                                                                <a href="javascript:void(0);" class="badge rounded-pill bg-pink text-white">Suspense</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="text-muted mb-1 text-start">A gripping mystery novel set in a small town where a detective uncovers secrets buried in the shadows.</p>
                                                    <div class="fs-11 text-center"><span class="text-muted">Published On</span> - <span class="fw-medium mb-0">July 15, 2021</span></div>
                                                    <div class="d-flex gap-2 justify-content-between mt-3 align-items-end flex-wrap">
                                                        <div>
                                                            <a href="javascript:void(0);"><span class="fw-semibold">Author:</span> <i class="text-pink fw-medium">Johnathan Greene</i></a>
                                                        </div>
                                                        <div class="btn-list">
                                                            <a href="javascript:void(0);" class="btn btn-sm btn-secondary-light"><span><i class="ri-heart-3-line align-middle"></i> Add to Wishlist</span></a>
                                                            <a href="javascript:void(0);" class="btn btn-sm btn-success-light me-0"><span><i class="ri-share-line"></i> Share</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center flex-wrap gap-3">
                                                        <div class="mb-3">
                                                            <span class="avatar avatar-xl bg-info bg-opacity-25 border border-opacity-25 p-1 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/media/books/3.jpg')}}" alt="Admin Dashboard Book Cover">
                                                            </span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="fw-medium mt-1 mb-2"><a href="javascript:void(0);"> Mastering Admin Dashboard Designs</a></h6>
                                                            <div class="popular-tags mb-3">
                                                                <a href="javascript:void(0);" class="badge rounded-pill bg-primary text-white">Admin</a>
                                                                <a href="javascript:void(0);" class="badge rounded-pill bg-success text-white">Dashboard</a>
                                                                <a href="javascript:void(0);" class="badge rounded-pill bg-secondary text-white">Templates</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="text-muted mb-1 text-start">This book covers the essentials of designing effective admin dashboards with a focus on usability, clean code.</p>
                                                    <div class="fs-11 text-center"><span class="text-muted">Published On</span> - <span class="fw-medium mb-0">February 20, 2022</span></div>
                                                    <div class="d-flex gap-2 justify-content-between mt-3 align-items-end flex-wrap">
                                                        <div>
                                                            <a href="javascript:void(0);"><span class="fw-semibold">Author:</span> <i class="text-pink fw-medium">Daniel Roberts</i></a>
                                                        </div>
                                                        <div class="btn-list">
                                                            <a href="javascript:void(0);" class="btn btn-sm btn-secondary-light"><span><i class="ri-heart-3-line align-middle"></i> Add to Wishlist</span></a>
                                                            <a href="javascript:void(0);" class="btn btn-sm btn-success-light me-0"><span><i class="ri-share-line"></i> Share</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center flex-wrap gap-3">
                                                        <div class="mb-3">
                                                            <span class="avatar avatar-xl bg-warning bg-opacity-25 border border-opacity-25 p-1 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/media/books/4.jpg')}}" alt="UI Design Book Cover">
                                                            </span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="fw-medium mt-1 mb-2"><a href="javascript:void(0);"> UI Design Fundamentals</a></h6>
                                                            <div class="popular-tags mb-3">
                                                                <a href="javascript:void(0);" class="badge rounded-pill bg-primary text-white">UI</a>
                                                                <a href="javascript:void(0);" class="badge rounded-pill bg-dark text-white">Design</a>
                                                                <a href="javascript:void(0);" class="badge rounded-pill bg-success text-white">Patterns</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="text-muted mb-1 text-start">Learn the core principles of UI design, from wireframes to prototypes, focusing on creating intuitive, user-friendly interfaces for both web and mobile applications.</p>
                                                    <div class="fs-11 text-center"><span class="text-muted">Published On</span> - <span class="fw-medium mb-0">March 8, 2021</span></div>
                                                    <div class="d-flex gap-2 justify-content-between mt-3 align-items-end flex-wrap">
                                                        <div>
                                                            <a href="javascript:void(0);"><span class="fw-semibold">Author:</span> <i class="text-pink fw-medium">Sophia Clark</i></a>
                                                        </div>
                                                        <div class="btn-list">
                                                            <a href="javascript:void(0);" class="btn btn-sm btn-secondary-light"><span><i class="ri-heart-3-line align-middle"></i> Add to Wishlist</span></a>
                                                            <a href="javascript:void(0);" class="btn btn-sm btn-success-light me-0"><span><i class="ri-share-line"></i> Share</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center flex-wrap gap-3">
                                                        <div class="mb-3">
                                                            <span class="avatar avatar-xl bg-danger bg-opacity-25 border border-opacity-25 p-1 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/media/books/5.jpg')}}" alt="Design System Book Cover">
                                                            </span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="fw-medium mt-1 mb-2"><a href="javascript:void(0);"> Design Systems: The Art of Consistency</a></h6>
                                                            <div class="popular-tags mb-3">
                                                                <a href="javascript:void(0);" class="badge rounded-pill bg-info text-white">Design</a>
                                                                <a href="javascript:void(0);" class="badge rounded-pill bg-secondary text-white">System</a>
                                                                <a href="javascript:void(0);" class="badge rounded-pill bg-success text-white">Consistency</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="text-muted mb-1 text-start">This book dives deep into the development and maintenance of design systems, ensuring visual consistency across platforms while improving design workflow and collaboration.</p>
                                                    <div class="fs-11 text-center"><span class="text-muted">Published On</span> - <span class="fw-medium mb-0">January 14, 2023</span></div>
                                                    <div class="d-flex gap-2 justify-content-between mt-3 align-items-end flex-wrap">
                                                        <div>
                                                            <a href="javascript:void(0);"><span class="fw-semibold">Author:</span> <i class="text-pink fw-medium">Lucas Rivera</i></a>
                                                        </div>
                                                        <div class="btn-list">
                                                            <a href="javascript:void(0);" class="btn btn-sm btn-secondary-light"><span><i class="ri-heart-3-line align-middle"></i> Add to Wishlist</span></a>
                                                            <a href="javascript:void(0);" class="btn btn-sm btn-success-light me-0"><span><i class="ri-share-line"></i> Share</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center flex-wrap gap-3">
                                                        <div class="mb-3">
                                                            <span class="avatar avatar-xl bg-warning bg-opacity-25 border border-opacity-25 p-1 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/media/books/6.jpg')}}" alt="Responsive Admin Template Book Cover">
                                                            </span>
                                                        </div>
                                                        <div class="mb-2 px-3">
                                                            <h6 class="fw-medium mt-1 mb-2"><a href="javascript:void(0);"> Building Responsive Admin Templates</a></h6>
                                                            <div class="popular-tags mb-3">
                                                                <a href="javascript:void(0);" class="badge rounded-pill bg-primary text-white">Responsive</a>
                                                                <a href="javascript:void(0);" class="badge rounded-pill bg-success text-white">Admin</a>
                                                                <a href="javascript:void(0);" class="badge rounded-pill bg-secondary text-white">Templates</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="text-muted mb-1 text-start">This comprehensive guide covers the design and development of fully responsive admin templates that work seamlessly across all devices and screen sizes.</p>
                                                    <div class="fs-11 text-center"><span class="text-muted">Published On</span> - <span class="fw-medium mb-0">August 19, 2022</span></div>
                                                    <div class="d-flex gap-2 justify-content-between mt-3 align-items-end flex-wrap">
                                                        <div>
                                                            <a href="javascript:void(0);"><span class="fw-semibold">Author:</span> <i class="text-pink fw-medium">Megan Brooks</i></a>
                                                        </div>
                                                        <div class="btn-list">
                                                            <a href="javascript:void(0);" class="btn btn-sm btn-secondary-light"><span><i class="ri-heart-3-line align-middle"></i> Add to Wishlist</span></a>
                                                            <a href="javascript:void(0);" class="btn btn-sm btn-success-light me-0"><span><i class="ri-share-line"></i> Share</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center flex-wrap gap-3">
                                                        <div class="mb-3">
                                                            <span class="avatar avatar-xl bg-info bg-opacity-25 border border-opacity-25 p-1 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/media/books/1.jpg')}}" alt="Creative UI Design Book Cover">
                                                            </span>
                                                        </div>
                                                        <div class="mb-2 px-3">
                                                            <h6 class="fw-medium mt-1 mb-2"><a href="javascript:void(0);"> Creative UI Design Patterns</a></h6>
                                                            <div class="popular-tags mb-3">
                                                                <a href="javascript:void(0);" class="badge rounded-pill bg-primary text-white">UI</a>
                                                                <a href="javascript:void(0);" class="badge rounded-pill bg-success text-white">Design</a>
                                                                <a href="javascript:void(0);" class="badge rounded-pill bg-warning text-white">Patterns</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="text-muted mb-1 text-start">Discover creative and effective UI design patterns used in modern web and mobile applications. This book offers practical examples and insights into intuitive user interfaces.</p>
                                                    <div class="fs-11 text-center"><span class="text-muted">Published On</span> - <span class="fw-medium mb-0">September 5, 2023</span></div>
                                                    <div class="d-flex gap-2 justify-content-between mt-3 align-items-end flex-wrap">
                                                        <div>
                                                            <a href="javascript:void(0);"><span class="fw-semibold">Author:</span> <i class="text-pink fw-medium">Olivia Turner</i></a>
                                                        </div>
                                                        <div class="btn-list">
                                                            <a href="javascript:void(0);" class="btn btn-sm btn-secondary-light"><span><i class="ri-heart-3-line align-middle"></i> Add to Wishlist</span></a>
                                                            <a href="javascript:void(0);" class="btn btn-sm btn-success-light me-0"><span><i class="ri-share-line"></i> Share</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="col-xl-12 mb-4">
                                            <button class="btn btn-info-light btn-loader mx-auto">
                                                <span class="me-2">Loading</span>
                                                <span class="loading"><i class="ri-loader-4-line fs-16"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane border-0 p-0" id="search-news" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex gap-2 align-items-start mb-1 flex-wrap flex-xl-nowrap">
                                                        <div>
                                                            <h6 class="mb-0"> Quantum Physicists Break New Ground</h6>
                                                            <span class="text-muted fs-12">
                                                                In a groundbreaking experiment, quantum physicists have detected a previously unknown subatomic particle, challenging. 
                                                            </span>
                                                        </div>
                                                        <div class="dropdown ms-auto">
                                                            <a href="javascript:void(0);" class="btn btn-secondary-light btn-sm btn-wave rounded-circle waves-effect waves-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle d-inline-block fs-15 fw-medium lh-1"></i>
                                                            </a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-2 align-items-end justify-content-between flex-wrap">
                                                        <div class="fs-12 text-muted"><i class="ri-calendar-line text-secondary rounded-circle lh-1"></i> Posted On 12-05-2024, 17:55</div>
                                                        <div class="ms-auto d-flex gap-2 align-items-center justify-content-end text-end flex-wrap">
                                                            <div>
                                                                <div class="fw-medium fs-12">BY MOHITH SINGH</div>
                                                                <div class="text-muted fs-11">Geneva<i class="ri-map-pin-line text-success lh-1 ms-1"></i></div>
                                                            </div>
                                                            <span class="avatar avatar-md p-1 bg-success bg-opacity-25 avatar-rounded flex-shrink-0">
                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex gap-2 align-items-start mb-1 flex-wrap flex-xl-nowrap">
                                                        <div>
                                                            <h6 class="mb-0"> New Trends in Admin Templates</h6>
                                                            <span class="text-muted fs-12">
                                                                Discover the latest trends in admin templates, offering advanced features like dark mode, custom dashboards, and fully responsive layouts for modern web applications.
                                                            </span>
                                                        </div>
                                                        <div class="dropdown ms-auto">
                                                            <a href="javascript:void(0);" class="btn btn-secondary-light btn-sm btn-wave waves-effect waves-light btn-icon rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle d-inline-block fs-15 fw-medium lh-1"></i>
                                                            </a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-2 align-items-end justify-content-between flex-wrap">
                                                        <div class="fs-12 text-muted"><i class="ri-calendar-line text-secondary rounded-circle lh-1"></i> Posted On 12-10-2024, 11:30</div>
                                                        <div class="ms-auto d-flex gap-2 align-items-center justify-content-end text-end flex-wrap">
                                                            <div>
                                                                <div class="fw-medium fs-12">BY SARAH JONES</div>
                                                                <div class="text-muted fs-11">New York<i class="ri-map-pin-line text-success lh-1 ms-1"></i></div>
                                                            </div>
                                                            <span class="avatar avatar-md p-1 bg-primary bg-opacity-25 avatar-rounded flex-shrink-0">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Sarah Jones">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex gap-2 align-items-start mb-1 flex-wrap flex-xl-nowrap">
                                                        <div>
                                                            <h6 class="mb-0"> Latest UI Components for Web Development</h6>
                                                            <span class="text-muted fs-12">
                                                                Explore the latest UI components designed to enhance your web development projects. From customizable buttons to advanced data tables, stay ahead with cutting-edge UI kits.
                                                            </span>
                                                        </div>
                                                        <div class="dropdown ms-auto">
                                                            <a href="javascript:void(0);" class="btn btn-secondary-light btn-sm btn-wave waves-effect waves-light btn-icon rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle d-inline-block fs-15 fw-medium lh-1"></i>
                                                            </a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-2 align-items-end justify-content-between flex-wrap">
                                                        <div class="fs-12 text-muted"><i class="ri-calendar-line text-secondary rounded-circle lh-1"></i> Posted On 12-10-2024, 09:15</div>
                                                        <div class="ms-auto d-flex gap-2 align-items-center justify-content-end text-end flex-wrap">
                                                            <div>
                                                                <div class="fw-medium fs-12">BY JAMES SMITH</div>
                                                                <div class="text-muted fs-11">San Francisco<i class="ri-map-pin-line text-success lh-1 ms-1"></i></div>
                                                            </div>
                                                            <span class="avatar avatar-md p-1 bg-success bg-opacity-25 avatar-rounded flex-shrink-0">
                                                                <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="James Smith">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex gap-2 align-items-start mb-1 flex-wrap flex-xl-nowrap">
                                                        <div>
                                                            <h6 class="mb-0"> Design Innovations for 2024</h6>
                                                            <span class="text-muted fs-12">
                                                                2024 is bringing exciting innovations in design, from minimalistic interfaces to advanced animations. Learn about the latest design tools that will define the future of digital experiences.
                                                            </span>
                                                        </div>
                                                        <div class="dropdown ms-auto">
                                                            <a href="javascript:void(0);" class="btn btn-secondary-light btn-sm btn-wave waves-effect waves-light btn-icon rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle d-inline-block fs-15 fw-medium lh-1"></i>
                                                            </a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-2 align-items-end justify-content-between flex-wrap">
                                                        <div class="fs-12 text-muted"><i class="ri-calendar-line text-secondary rounded-circle lh-1"></i> Posted On 12-10-2024, 14:45</div>
                                                        <div class="ms-auto d-flex gap-2 align-items-center justify-content-end text-end flex-wrap">
                                                            <div>
                                                                <div class="fw-medium fs-12">BY AMANDA WILLIAMS</div>
                                                                <div class="text-muted fs-11">London<i class="ri-map-pin-line text-success lh-1 ms-1"></i></div>
                                                            </div>
                                                            <span class="avatar avatar-md p-1 bg-info bg-opacity-25 avatar-rounded flex-shrink-0">
                                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="Amanda Williams">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex gap-2 align-items-start mb-2">
                                                        <div>
                                                            <h6 class="mb-0"> Performance Optimization for Admin Templates</h6>
                                                            <span class="text-muted fs-12">
                                                                Learn the best practices for optimizing admin templates to ensure faster load times and better performance, even with complex data management systems.
                                                            </span>
                                                        </div>
                                                        <div class="dropdown ms-auto">
                                                            <a href="javascript:void(0);" class="btn btn-secondary-light btn-sm btn-wave waves-effect waves-light btn-icon rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle d-inline-block fs-15 fw-medium lh-1"></i>
                                                            </a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-2 align-items-end justify-content-between flex-wrap">
                                                        <div class="fs-12 text-muted"><i class="ri-calendar-line text-secondary rounded-circle lh-1"></i> Posted On 12-09-2024, 16:20</div>
                                                        <div class="ms-auto d-flex gap-2 align-items-center justify-content-end text-end flex-wrap">
                                                            <div>
                                                                <div class="fw-medium fs-12">BY MICHAEL LEE</div>
                                                                <div class="text-muted fs-11">Toronto<i class="ri-map-pin-line text-success lh-1 ms-1"></i></div>
                                                            </div>
                                                            <span class="avatar avatar-md p-1 bg-warning bg-opacity-25 avatar-rounded flex-shrink-0">
                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="Michael Lee">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex gap-2 align-items-start mb-2">
                                                        <div>
                                                            <h6 class="mb-0"> Emerging UI Trends in 2024</h6>
                                                            <span class="text-muted fs-12">
                                                                2024 is bringing fresh UI trends, including glassmorphism, minimalistic animations, and dark mode. Stay updated on how these trends are shaping modern web applications.
                                                            </span>
                                                        </div>
                                                        <div class="dropdown ms-auto">
                                                            <a href="javascript:void(0);" class="btn btn-secondary-light btn-sm btn-wave waves-effect waves-light btn-icon rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle d-inline-block fs-15 fw-medium lh-1"></i>
                                                            </a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-2 align-items-end justify-content-between flex-wrap">
                                                        <div class="fs-12 text-muted"><i class="ri-calendar-line text-secondary rounded-circle lh-1"></i> Posted On 12-08-2024, 10:05</div>
                                                        <div class="ms-auto d-flex gap-2 align-items-center justify-content-end text-end flex-wrap">
                                                            <div>
                                                                <div class="fw-medium fs-12">BY SOPHIA BROWN</div>
                                                                <div class="text-muted fs-11">Berlin<i class="ri-map-pin-line text-success lh-1 ms-1"></i></div>
                                                            </div>
                                                            <span class="avatar avatar-md p-1 bg-info bg-opacity-25 avatar-rounded flex-shrink-0">
                                                                <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="Sophia Brown">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <nav aria-label="Page navigation" class="pagination-style-4">
                                        <ul class="pagination text-center justify-content-center gap-1">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0)">
                                                    Prev
                                                </a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="bi bi-three-dots"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">16</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">17</a></li>
                                            <li class="page-item">
                                                <a class="page-link text-primary" href="javascript:void(0)">
                                                    next
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-pane border-0 p-0" id="search-videos" role="tabpanel">
                                    <div class="card custom-card">
                                        <div class="card-body pb-1">
                                            <div class="row gy-4">
                                                <div class="col-lg-4 col-md-3 col-sm-6 col-12">
                                                    <div class="p-4 border border-success border-opacity-25 bg-success-transparent rounded-3">
                                                        <div class="ratio ratio-16x9">
                                                            <iframe src="https://www.youtube.com/embed/HWvHA2FY8Ok?si=Bf-6pyMAcBG-_dR0" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                                        </div>    
                                                        <div class="p-2 pb-0">
                                                            <div class="d-flex align-items-center gap-1">
                                                                <div class="figure-caption fs-13 fw-medium text-default text-truncate">Valex - Bootstrap 5 Admin & Dashboard HTML Template</div>
                                                            </div>
                                                            <a href="https://www.spruko.com/demo/valex/" target="_blank" class="fs-12 link-primary text-decoration-underline">https://www.spruko.com/demo/valex/</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-3 col-sm-6 col-12">
                                                    <div class="p-4 border border-success border-opacity-25 bg-success-transparent rounded-3">
                                                        <div class="ratio ratio-16x9">
                                                            <iframe src="https://www.youtube.com/embed/Zx1HjMhcQdE?si=Nhbu6XA2PoyAlYhy" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                                        </div>    
                                                        <div class="p-2 pb-0">
                                                            <div class="d-flex align-items-center gap-1">
                                                                <div class="figure-caption fs-13 fw-medium text-default text-truncate">Azea - Admin & Dashboard Bootstrap 5 HTML5 Template</div>
                                                            </div>
                                                            <a href="https://spruko.com/demo/azea/" target="_blank" class="fs-12 link-primary text-decoration-underline">https://spruko.com/demo/azea/</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-3 col-sm-6 col-12">
                                                    <div class="p-4 border border-success border-opacity-25 bg-success-transparent rounded-3">
                                                        <div class="ratio ratio-16x9">
                                                            <iframe src="https://www.youtube.com/embed/JP_os1DC1MQ?si=qyUJRBl7ZJBhR_P5" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                                        </div>    
                                                        <div class="p-2 pb-0">
                                                            <div class="d-flex align-items-center gap-1">
                                                                <div class="figure-caption fs-13 fw-medium text-default text-truncate">YNEX - HTML Installation & Usage process</div>
                                                            </div>
                                                            <a href="https://spruko.com/demo/ynex/" target="_blank" class="fs-12 link-primary text-decoration-underline">https://spruko.com/demo/ynex/</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-3 col-sm-6 col-12">
                                                    <div class="p-4 border border-success border-opacity-25 bg-success-transparent rounded-3">
                                                        <div class="ratio ratio-16x9">
                                                            <iframe src="https://www.youtube.com/embed/-lDlbQ7DiCI?si=-GRS_5Dco6Qc5ius" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                                        </div>    
                                                        <div class="p-2 pb-0">
                                                            <div class="d-flex align-items-center gap-1">
                                                                <div class="figure-caption fs-13 fw-medium text-default text-truncate">Sash - Admin and Dashboard Multipurpose HTML Advanced Template</div>
                                                            </div>
                                                            <a href="https://spruko.com/demo/sash/" target="_blank" class="fs-12 link-primary text-decoration-underline">https://spruko.com/demo/sash/</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-3 col-sm-6 col-12">
                                                    <div class="p-4 border border-success border-opacity-25 bg-success-transparent rounded-3">
                                                        <div class="ratio ratio-16x9">
                                                            <iframe src="https://www.youtube.com/embed/JP_os1DC1MQ?si=qyUJRBl7ZJBhR_P5" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                                        </div>    
                                                        <div class="p-2 pb-0">
                                                            <div class="d-flex align-items-center gap-1">
                                                                <div class="figure-caption fs-13 fw-medium text-default text-truncate">Ynex - Bootstrap 5 Admin & Dashboard HTML5 Template</div>
                                                            </div>
                                                            <a href="https://spruko.com/demo/ynex/" target="_blank" class="fs-12 link-primary text-decoration-underline">https://spruko.com/demo/ynex/</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-3 col-sm-6 col-12">
                                                    <div class="p-4 border border-success border-opacity-25 bg-success-transparent rounded-3">
                                                        <div class="ratio ratio-16x9">
                                                            <iframe src="https://www.youtube.com/embed/bVRW4Li8inE?si=pOpS9ep2Hn3cGL3y" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                                        </div>    
                                                        <div class="p-2 pb-0">
                                                            <div class="d-flex align-items-center gap-1">
                                                                <div class="figure-caption fs-13 fw-medium text-default text-truncate">Zanex - Bootstrap 5 Admin & Dashboard HTML5 Template</div>
                                                            </div>
                                                            <a href="https://spruko.com/demo/zanex/" target="_blank" class="fs-12 link-primary text-decoration-underline">https://spruko.com/demo/zanex/</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 my-3">
                                                    <button class="btn btn-info-light btn-loader mx-auto">
                                                        <span class="me-2">Loading</span>
                                                        <span class="loading"><i class="ri-loader-4-line fs-16"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Search Results JS -->
        <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>
        @vite('resources/assets/js/search-results.js')
        

@endsection