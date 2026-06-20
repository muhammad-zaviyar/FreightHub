@extends('layouts.master')

@section('styles')
    
        <!-- Nouislider CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/nouislider/nouislider.min.css')}}">

@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">
                    
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Search Candidate</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Search Candidate</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xxl-3 col-xl-4">
                            <div class="card custom-card products-navigation-card">
                                <div class="card-header justify-content-between gap-1">
                                    <div class="card-title">
                                        Filter
                                    </div>
                                    <a href="javascript:void(0);" class="text-secondary text-decoration-underline fw-medium"> Clear All</a>
                                </div>
                                <div class="card-body p-0">
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Categories</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-1" checked>
                                                <label class="form-check-label" for="c-1">
                                                    Engineering
                                                </label>
                                                <span class="badge bg-light text-default  float-end">2,350</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-2">
                                                <label class="form-check-label" for="c-2">
                                                    Design
                                                </label>
                                                <span class="badge bg-light text-default  float-end">1,200</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-3" checked>
                                                <label class="form-check-label" for="c-3">
                                                    Sales
                                                </label>
                                                <span class="badge bg-light text-default  float-end">5,800</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-4" checked>
                                                <label class="form-check-label" for="c-4">
                                                    Finance & Accounting
                                                </label>
                                                <span class="badge bg-light text-default  float-end">3,000</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-5">
                                                <label class="form-check-label" for="c-5">
                                                    Customer Support
                                                </label>
                                                <span class="badge bg-light text-default  float-end">2,100</span>
                                            </div>
                                            <div class="collapse" id="category-more">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="c-6">
                                                    <label class="form-check-label" for="c-6">
                                                        Operations Management
                                                    </label>
                                                    <span class="badge bg-light text-default  float-end">1,800</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="c-7">
                                                    <label class="form-check-label" for="c-7">
                                                        Project Management
                                                    </label>
                                                    <span class="badge bg-light text-default  float-end">1,500</span>
                                                </div>
                                            </div>
                                            <a class="ecommerce-more-link d-grid" data-bs-toggle="collapse" href="#category-more" role="button" aria-expanded="false" aria-controls="category-more">MORE</a>
                                        </div>                                    
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Availability</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="available-1" checked>
                                                <label class="form-check-label" for="available-1">
                                                    Immediate Availability
                                                </label>
                                                <span class="badge bg-light text-default  float-end">450</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="available-2">
                                                <label class="form-check-label" for="available-2">
                                                    2 Weeks Notice
                                                </label>
                                                <span class="badge bg-light text-default  float-end">1,320</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="available-3">
                                                <label class="form-check-label" for="available-3">
                                                    1 Month Notice
                                                </label>
                                                <span class="badge bg-light text-default  float-end">890</span>
                                            </div>
                                        </div>
                                    </div>                                                                
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Bond Agreement</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="bond-1" checked>
                                                <label class="form-check-label" for="bond-1">
                                                    6 Months
                                                </label>
                                                <span class="badge bg-light text-default  float-end">980</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="bond-2">
                                                <label class="form-check-label" for="bond-2">
                                                    1 Year
                                                </label>
                                                <span class="badge bg-light text-default  float-end">620</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="bond-3">
                                                <label class="form-check-label" for="bond-3">
                                                    2 Years
                                                </label>
                                                <span class="badge bg-light text-default  float-end">350</span>
                                            </div>
                                        </div>
                                    </div>                                                              
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Known Languages</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="languages-1" checked>
                                                <label class="form-check-label" for="languages-1">
                                                    Spanish
                                                </label>
                                                <span class="badge bg-light text-default  float-end">980</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="languages-2">
                                                <label class="form-check-label" for="languages-2">
                                                    Mandarin
                                                </label>
                                                <span class="badge bg-light text-default  float-end">540</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="languages-3">
                                                <label class="form-check-label" for="languages-3">
                                                    French
                                                </label>
                                                <span class="badge bg-light text-default  float-end">760</span>
                                            </div>
                                        </div>
                                    </div>                                                                
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Job Type</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="j-1" checked>
                                                <label class="form-check-label" for="j-1">
                                                    Remote
                                                </label>
                                                <span class="badge bg-light text-default  float-end">1,320</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="j-2">
                                                <label class="form-check-label" for="j-2">
                                                    Contract
                                                </label>
                                                <span class="badge bg-light text-default  float-end">850</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="j-3">
                                                <label class="form-check-label" for="j-3">
                                                    Temporary
                                                </label>
                                                <span class="badge bg-light text-default  float-end">420</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="j-4">
                                                <label class="form-check-label" for="j-4">
                                                    Volunteer
                                                </label>
                                                <span class="badge bg-light text-default  float-end">190</span>
                                            </div>
                                        </div>
                                    </div>                                                                                                
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Salary Range</h6>
                                        <div class="py-3 pb-0">
                                            <div id="nonlinear"></div>
                                            <div class="d-flex mt-3 justify-content-center">
                                                <div class="fw-medium h6 mb-0">$<span id="lower-value"></span></div>
                                                &nbsp; -- &nbsp; 
                                                <div class="fw-medium h6 mb-0">$<span id="upper-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Qualification</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="q-1" checked>
                                                <label class="form-check-label" for="q-1">
                                                    All Education Levels
                                                </label>
                                                <span class="badge bg-light text-default  float-end">30,000</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="q-2">
                                                <label class="form-check-label" for="q-2">
                                                    Diploma and Above
                                                </label>
                                                <span class="badge bg-light text-default  float-end">8,425</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="q-3" checked>
                                                <label class="form-check-label" for="q-3">
                                                    Bachelor's Degree
                                                </label>
                                                <span class="badge bg-light text-default  float-end">15,932</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="q-4">
                                                <label class="form-check-label" for="q-4">
                                                    Postgraduate +
                                                </label>
                                                <span class="badge bg-light text-default  float-end">4,210</span>
                                            </div>
                                        </div>
                                    </div>                                                                
                                    <div class="p-3">
                                        <h6 class="fw-medium mb-0">Skills</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="s-1" checked>
                                                <label class="form-check-label" for="s-1">
                                                    JavaScript
                                                </label>
                                                <span class="badge bg-light text-default  float-end">28,492</span>
                                            </div>
                                            <div class="collapse" id="sizes-more">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="s-2">
                                                    <label class="form-check-label" for="s-2">
                                                        Node.js
                                                    </label>
                                                    <span class="badge bg-light text-default  float-end">12,654</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="s-3">
                                                    <label class="form-check-label" for="s-3">
                                                        Vue.js
                                                    </label>
                                                    <span class="badge bg-light text-default  float-end">9,831</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="s-4">
                                                    <label class="form-check-label" for="s-4">
                                                        TypeScript
                                                    </label>
                                                    <span class="badge bg-light text-default  float-end">6,217</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="s-5">
                                                    <label class="form-check-label" for="s-5">
                                                        jQuery
                                                    </label>
                                                    <span class="badge bg-light text-default  float-end">4,592</span>
                                                </div>
                                            </div>
                                            <a class="ecommerce-more-link d-grid" data-bs-toggle="collapse" href="#sizes-more" role="button" aria-expanded="false" aria-controls="sizes-more">MORE</a>
                                        </div>
                                    </div>                                                              
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-9 col-xl-8">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <div class="card custom-card">
                                        <div class="card-body p-md-0">
                                            <div class="input-group companies-search-input companies-search-input1 flex-sm-nowrap">
                                                <input type="text" class="form-control form-control-lg w-25" aria-label="Text input for keyword" placeholder="Enter job title or keyword">
                                                <select class="form-select form-select-lg rounded-0" data-trigger>
                                                    <option value="">All Categories</option>
                                                    <option value="SPKChoice 1">Software Developer</option>
                                                    <option value="SPKChoice 2">Web Developer</option>
                                                    <option value="SPKChoice 3">Software Architect</option>
                                                    <option value="SPKChoice 4">IT Hardware</option>
                                                    <option value="SPKChoice 5">Network Engineer</option>
                                                    <option value="SPKChoice 6">Angular Developer</option>
                                                    <option value="SPKChoice 7">React Developer</option>
                                                </select>
                                                <input type="text" class="form-control form-control-lg w-25" aria-label="Text input for location" placeholder="Search by location">
                                                <select class="form-select form-select-lg rounded-0" data-trigger>
                                                    <option value="">Experience Level</option>
                                                    <option value="SPK_Choice 1">Fresher</option>
                                                    <option value="SPK_Choice 2">1 Year Experience</option>
                                                    <option value="SPK_Choice 3">2 Years Experience</option>
                                                    <option value="SPK_Choice 4">3 Years Experience</option>
                                                    <option value="SPK_Choice 5">4 Years Experience</option>
                                                    <option value="SPK_Choice 6">5 Years Experience</option>
                                                </select>
                                                <button type="button" class="btn btn-lg btn-primary"><i class="ri-search-line"></i> Search</button>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="d-flex flex-wrap gap-2 align-items-center">
                                                <h5 class="fw-medium mb-0 flex-grow-1">3,562 <span class="fw-normal fs-16"> candidates are available based on your job search criteria</span> </h5>
                                                <div class="btn-group">
                                                    <button class="btn btn-outline-light border dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Sort By
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Most Recent</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Highest Rated</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Top Companies</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Internships</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Full-Time</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Part-Time</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Freelance</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Temporary</a></li>
                                                    </ul>                                                                                             
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end d-flex gap-1 align-items-center flex-wrap">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" >
                                                    <i class="ri-eye-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Bookmark">
                                                    <i class="ri-bookmark-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-start flex-wrap gap-2 mb-2">
                                                <span class="avatar avatar-lg bg-light shadow-sm border border-primary border-opacity-10 p-1 avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="Profile Picture">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center">
                                                        Michael
                                                        <i class="bi bi-patch-check-fill text-success align-middle lh-1 mx-1" data-bs-toggle="tooltip" title="Verified"></i>
                                                    </h6>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-medium fs-12">
                                                            <i class="ri-briefcase-line text-muted fs-13"></i> Job: 
                                                            <span class="fw-normal">Front-End Developer</span>
                                                        </div>
                                                        <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                            <span class="badge rounded-pill bg-primary fs-11">Remote</span>
                                                            <span class="badge rounded-pill bg-warning fs-11">Senior Level</span>
                                                            <span class="badge rounded-pill bg-info fs-11">Software</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gy-3 gy-xxl-0">
                                                <div class="col-xxl-3 col-xl-4">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-map-pin-line text-danger fs-15"></i> Location: 
                                                        <span class="fw-normal">New York, NY</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-book-open-line text-primary fs-15"></i> Qualification: 
                                                        <span class="fw-normal">Master's in Data Science</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-4">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-wallet-3-line text-info fs-15"></i> Expected Salary: 
                                                        <span class="fw-normal">$90,000 - $120,000</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-time-line text-pink fs-15"></i> Employment Type: 
                                                        <span class="fw-normal">Full Time</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-4">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-global-line text-warning fs-15"></i> Known Languages: 
                                                        <span class="fw-normal">Hindi, English</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-briefcase-3-line text-success fs-15"></i> Experience: 
                                                        <span class="fw-normal">4 yrs</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 align-self-end">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm w-100">
                                                        <i class="ri-download-cloud-line fs-14 me-2 d-inline-block"></i>
                                                        Download Resume
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end d-flex gap-1 align-items-center flex-wrap">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" >
                                                    <i class="ri-eye-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Bookmark">
                                                    <i class="ri-bookmark-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-start flex-wrap gap-2 mb-2">
                                                <span class="avatar avatar-lg bg-light shadow-sm border border-primary border-opacity-10 p-1 avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="Profile Picture">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center">
                                                        Sarah Williams
                                                        <i class="bi bi-patch-check-fill text-success align-middle lh-1 mx-1" data-bs-toggle="tooltip" title="Verified"></i>
                                                    </h6>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-medium fs-12">
                                                            <i class="ri-briefcase-line text-muted fs-13"></i> Job: 
                                                            <span class="fw-normal">UI/UX Designer</span>
                                                        </div>
                                                        <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                            <span class="badge rounded-pill bg-primary fs-11">Remote</span>
                                                            <span class="badge rounded-pill bg-warning fs-11">Mid Level</span>
                                                            <span class="badge rounded-pill bg-info fs-11">Design</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gy-3 gy-xxl-0">
                                                <div class="col-xxl-3 col-xl-4">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-map-pin-line text-danger fs-15"></i> Location: 
                                                        <span class="fw-normal">San Francisco, CA</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-book-open-line text-primary fs-15"></i> Qualification: 
                                                        <span class="fw-normal">Degree in Design</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-4">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-wallet-3-line text-info fs-15"></i> Expected Salary: 
                                                        <span class="fw-normal">$80,000 - $100,000</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-time-line text-pink fs-15"></i> Employment Type: 
                                                        <span class="fw-normal">Contract</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-4">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-global-line text-warning fs-15"></i> Languages: 
                                                        <span class="fw-normal">English, Spanish</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-briefcase-3-line text-success fs-15"></i> Experience: 
                                                        <span class="fw-normal">3 years</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 align-self-end">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm w-100">
                                                        <i class="ri-download-cloud-line fs-14 me-2 d-inline-block"></i>
                                                        Download Resume
                                                    </a>
                                                </div>
                                            </div>
                                        </div>                                                                      
                                    </div>                                
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end d-flex gap-1 align-items-center flex-wrap">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" >
                                                    <i class="ri-eye-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Bookmark">
                                                    <i class="ri-bookmark-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-start flex-wrap gap-2 mb-2">
                                                <span class="avatar avatar-lg bg-light shadow-sm border border-primary border-opacity-10 p-1 avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="Profile Picture">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center">
                                                        John Doe
                                                        <i class="bi bi-patch-check-fill text-success align-middle lh-1 mx-1" data-bs-toggle="tooltip" title="Verified"></i>
                                                    </h6>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-medium fs-12">
                                                            <i class="ri-briefcase-line text-muted fs-13"></i> Job: 
                                                            <span class="fw-normal">Backend Developer</span>
                                                        </div>
                                                        <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                            <span class="badge rounded-pill bg-primary fs-11">On-Site</span>
                                                            <span class="badge rounded-pill bg-warning fs-11">Senior Level</span>
                                                            <span class="badge rounded-pill bg-info fs-11">Programming</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gy-3 gy-xxl-0">
                                                <div class="col-xxl-3 col-xl-4">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-map-pin-line text-danger fs-15"></i> Location: 
                                                        <span class="fw-normal">Austin, TX</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-book-open-line text-primary fs-15"></i> Qualification: 
                                                        <span class="fw-normal">Master's in Computer Science</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-4">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-wallet-3-line text-info fs-15"></i> Expected Salary: 
                                                        <span class="fw-normal">$100,000 - $120,000</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-time-line text-pink fs-15"></i> Employment Type: 
                                                        <span class="fw-normal">Full-Time</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-4">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-global-line text-warning fs-15"></i> Languages: 
                                                        <span class="fw-normal">English, German</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-briefcase-3-line text-success fs-15"></i> Experience: 
                                                        <span class="fw-normal">5 years</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 align-self-end">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm w-100">
                                                        <i class="ri-download-cloud-line fs-14 me-2 d-inline-block"></i>
                                                        Download Resume
                                                    </a>
                                                </div>
                                            </div>
                                        </div>                                                                                                        
                                    </div>                                
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end d-flex gap-1 align-items-center flex-wrap">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" >
                                                    <i class="ri-eye-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Bookmark">
                                                    <i class="ri-bookmark-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-start flex-wrap gap-2 mb-2">
                                                <span class="avatar avatar-lg bg-light shadow-sm border border-primary border-opacity-10 p-1 avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="Profile Picture">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center">
                                                        Emily Johnson
                                                        <i class="bi bi-patch-check-fill text-success align-middle lh-1 mx-1" data-bs-toggle="tooltip" title="Verified"></i>
                                                    </h6>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-medium fs-12">
                                                            <i class="ri-briefcase-line text-muted fs-13"></i> Job: 
                                                            <span class="fw-normal">Marketing Specialist</span>
                                                        </div>
                                                        <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                            <span class="badge rounded-pill bg-primary fs-11">Remote</span>
                                                            <span class="badge rounded-pill bg-warning fs-11">Entry Level</span>
                                                            <span class="badge rounded-pill bg-info fs-11">Marketing</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gy-3 gy-xxl-0">
                                                <div class="col-xxl-3 col-xl-4">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-map-pin-line text-danger fs-15"></i> Location: 
                                                        <span class="fw-normal">Chicago, IL</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-book-open-line text-primary fs-15"></i> Qualification: 
                                                        <span class="fw-normal">Bachelor's in Marketing</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-4">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-wallet-3-line text-info fs-15"></i> Expected Salary: 
                                                        <span class="fw-normal">$60,000 - $70,000</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-time-line text-pink fs-15"></i> Employment Type: 
                                                        <span class="fw-normal">Full-Time</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-4">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-global-line text-warning fs-15"></i> Languages: 
                                                        <span class="fw-normal">English, French</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-briefcase-3-line text-success fs-15"></i> Experience: 
                                                        <span class="fw-normal">1 year</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 align-self-end">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm w-100">
                                                        <i class="ri-download-cloud-line fs-14 me-2 d-inline-block"></i>
                                                        Download Resume
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end d-flex gap-1 align-items-center flex-wrap">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" >
                                                    <i class="ri-eye-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Bookmark">
                                                    <i class="ri-bookmark-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-start flex-wrap gap-2 mb-2">
                                                <span class="avatar avatar-lg bg-light shadow-sm border border-primary border-opacity-10 p-1 avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="Profile Picture">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center">
                                                        Alex Martinez
                                                        <i class="bi bi-patch-check-fill text-success align-middle lh-1 mx-1" data-bs-toggle="tooltip" title="Verified"></i>
                                                    </h6>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-medium fs-12">
                                                            <i class="ri-briefcase-line text-muted fs-13"></i> Job: 
                                                            <span class="fw-normal">Data Scientist</span>
                                                        </div>
                                                        <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                            <span class="badge rounded-pill bg-primary fs-11">Hybrid</span>
                                                            <span class="badge rounded-pill bg-warning fs-11">Mid Level</span>
                                                            <span class="badge rounded-pill bg-info fs-11">Data Analysis</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gy-3 gy-xxl-0">
                                                <div class="col-xxl-3 col-xl-4">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-map-pin-line text-danger fs-15"></i> Location: 
                                                        <span class="fw-normal">Seattle, WA</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-book-open-line text-primary fs-15"></i> Qualification: 
                                                        <span class="fw-normal">Master's in Data Science</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-4">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-wallet-3-line text-info fs-15"></i> Expected Salary: 
                                                        <span class="fw-normal">$110,000 - $130,000</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-time-line text-pink fs-15"></i> Employment Type: 
                                                        <span class="fw-normal">Full-Time</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-4">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-global-line text-warning fs-15"></i> Languages: 
                                                        <span class="fw-normal">English, Portuguese</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-briefcase-3-line text-success fs-15"></i> Experience: 
                                                        <span class="fw-normal">4 years</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 align-self-end">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm w-100">
                                                        <i class="ri-download-cloud-line fs-14 me-2 d-inline-block"></i>
                                                        Download Resume
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end d-flex gap-1 align-items-center flex-wrap">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" >
                                                    <i class="ri-eye-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Bookmark">
                                                    <i class="ri-bookmark-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-start flex-wrap gap-2 mb-2">
                                                <span class="avatar avatar-lg bg-light shadow-sm border border-primary border-opacity-10 p-1 avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="Profile Picture">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center">
                                                        Olivia Brown
                                                        <i class="bi bi-patch-check-fill text-success align-middle lh-1 mx-1" data-bs-toggle="tooltip" title="Verified"></i>
                                                    </h6>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-medium fs-12">
                                                            <i class="ri-briefcase-line text-muted fs-13"></i> Job: 
                                                            <span class="fw-normal">Project Manager</span>
                                                        </div>
                                                        <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                            <span class="badge rounded-pill bg-primary fs-11">On-Site</span>
                                                            <span class="badge rounded-pill bg-warning fs-11">Senior Level</span>
                                                            <span class="badge rounded-pill bg-info fs-11">Management</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gy-3 gy-xxl-0">
                                                <div class="col-xxl-3 col-xl-4">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-map-pin-line text-danger fs-15"></i> Location: 
                                                        <span class="fw-normal">Boston, MA</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-book-open-line text-primary fs-15"></i> Qualification: 
                                                        <span class="fw-normal">MBA in Management</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-4">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-wallet-3-line text-info fs-15"></i> Expected Salary: 
                                                        <span class="fw-normal">$120,000 - $150,000</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-time-line text-pink fs-15"></i> Employment Type: 
                                                        <span class="fw-normal">Full-Time</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-4">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-global-line text-warning fs-15"></i> Languages: 
                                                        <span class="fw-normal">English, Italian</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-briefcase-3-line text-success fs-15"></i> Experience: 
                                                        <span class="fw-normal">6 years</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 align-self-end">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm w-100">
                                                        <i class="ri-download-cloud-line fs-14 me-2 d-inline-block"></i>
                                                        Download Resume
                                                    </a>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end d-flex gap-1 align-items-center flex-wrap">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" >
                                                    <i class="ri-eye-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Bookmark">
                                                    <i class="ri-bookmark-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-start flex-wrap gap-2 mb-2">
                                                <span class="avatar avatar-lg bg-light shadow-sm border border-primary border-opacity-10 p-1 avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="Profile Picture">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center">
                                                        Emily Clark
                                                        <i class="bi bi-patch-check-fill text-success align-middle lh-1 mx-1" data-bs-toggle="tooltip" title="Verified"></i>
                                                    </h6>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-medium fs-12">
                                                            <i class="ri-briefcase-line text-muted fs-13"></i> Job: 
                                                            <span class="fw-normal">Marketing Specialist</span>
                                                        </div>
                                                        <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                            <span class="badge rounded-pill bg-primary fs-11">Hybrid</span>
                                                            <span class="badge rounded-pill bg-warning fs-11">Junior Level</span>
                                                            <span class="badge rounded-pill bg-info fs-11">Marketing</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gy-3 gy-xxl-0">
                                                <div class="col-xxl-3 col-xl-4">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-map-pin-line text-danger fs-15"></i> Location: 
                                                        <span class="fw-normal">Austin, TX</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-book-open-line text-primary fs-15"></i> Qualification: 
                                                        <span class="fw-normal">Bachelor's in Marketing</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-4">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-wallet-3-line text-info fs-15"></i> Expected Salary: 
                                                        <span class="fw-normal">$70,000 - $85,000</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-time-line text-pink fs-15"></i> Employment Type: 
                                                        <span class="fw-normal">Part-Time</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-4">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-global-line text-warning fs-15"></i> Languages: 
                                                        <span class="fw-normal">English, French</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-briefcase-3-line text-success fs-15"></i> Experience: 
                                                        <span class="fw-normal">2 years</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 align-self-end">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm w-100">
                                                        <i class="ri-download-cloud-line fs-14 me-2 d-inline-block"></i>
                                                        Download Resume
                                                    </a>
                                                </div>
                                            </div>
                                        </div>                              
                                    </div>
                                </div>
                            </div>
                            <ul class="pagination mb-4 justify-content-end">
                                <li class="page-item disabled">
                                    <a class="page-link" href="javascript:void(0);">
                                        Prev
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item">
                                    <a class="page-link text-primary" href="javascript:void(0);">
                                        next
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End::row-1 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- noUiSlider JS -->
        <script src="{{asset('build/assets/libs/nouislider/nouislider.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/wnumb/wNumb.min.js')}}"></script>

        <!-- Search Candidate JS -->
        @vite('resources/assets/js/job-search-candidate.js')


@endsection