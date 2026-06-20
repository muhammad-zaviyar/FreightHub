@extends('layouts.master')

@section('styles')

      
@endsection

@section('content')


            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Company Search</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Company Search</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start:: row-1 -->
                    <div class="row">
                        <div class="col-xxl-3 col-lg-5">
                            <div class="card custom-card products-navigation-card">
                                <div class="card-header justify-content-between gap-1">
                                    <div class="card-title">
                                        Filter
                                    </div>
                                    <a href="javascript:void(0);" class="text-secondary text-decoration-underline fw-medium"> Clear All</a>
                                </div>
                                <div class="card-body p-0">
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Industry Type</h6>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-1" checked>
                                                <label class="form-check-label" for="c-1">
                                                    Technology
                                                </label>
                                                <span class="badge bg-light text-default float-end">3,214</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-2">
                                                <label class="form-check-label" for="c-2">
                                                    Finance
                                                </label>
                                                <span class="badge bg-light text-default float-end">682</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-3" checked>
                                                <label class="form-check-label" for="c-3">
                                                    Healthcare
                                                </label>
                                                <span class="badge bg-light text-default float-end">25,473</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-4" checked>
                                                <label class="form-check-label" for="c-4">
                                                    Education
                                                </label>
                                                <span class="badge bg-light text-default float-end">4,326</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="c-5">
                                                <label class="form-check-label" for="c-5">
                                                    Retail
                                                </label>
                                                <span class="badge bg-light text-default float-end">9,102</span>
                                            </div>
                                            <div class="collapse" id="category-more">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="cc-6">
                                                    <label class="form-check-label" for="cc-6">
                                                        Manufacturing
                                                    </label>
                                                    <span class="badge bg-light text-default float-end">7,889</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="cc-7">
                                                    <label class="form-check-label" for="cc-7">
                                                        Transportation
                                                    </label>
                                                    <span class="badge bg-light text-default float-end">3,214</span>
                                                </div>
                                            </div>
                                            <a class="ecommerce-more-link d-grid" data-bs-toggle="collapse" href="#category-more" role="button" aria-expanded="false" aria-controls="category-more">MORE</a>
                                        </div>
                                    </div>                                
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Location</h6>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="available-1" checked>
                                                <label class="form-check-label" for="available-1">
                                                    Mumbai
                                                </label>
                                                <span class="badge bg-light text-default float-end">1,024</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="available-2">
                                                <label class="form-check-label" for="available-2">
                                                    Delhi
                                                </label>
                                                <span class="badge bg-light text-default float-end">3,547</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="available-3">
                                                <label class="form-check-label" for="available-3">
                                                    Bangalore
                                                </label>
                                                <span class="badge bg-light text-default float-end">1,856</span>
                                            </div>
                                            <div class="collapse" id="location-more">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="c-6">
                                                    <label class="form-check-label" for="c-6">
                                                        Hyderabad
                                                    </label>
                                                    <span class="badge bg-light text-default float-end">2,394</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="c-7">
                                                    <label class="form-check-label" for="c-7">
                                                        Singapore
                                                    </label>
                                                    <span class="badge bg-light text-default float-end">1,102</span>
                                                </div>
                                            </div>
                                            <a class="ecommerce-more-link d-grid" data-bs-toggle="collapse" href="#location-more" role="button" aria-expanded="false" aria-controls="location-more">MORE</a>
                                        </div>
                                    </div>  
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Recruiter Type</h6>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="recruiter-1" checked>
                                                <label class="form-check-label" for="recruiter-1">
                                                    Internal Recruitment
                                                </label>
                                                <span class="badge bg-light text-default float-end">1,345</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="recruiter-2">
                                                <label class="form-check-label" for="recruiter-2">
                                                    External Recruitment Agency
                                                </label>
                                                <span class="badge bg-light text-default float-end">785</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="recruiter-3">
                                                <label class="form-check-label" for="recruiter-3">
                                                    Headhunters
                                                </label>
                                                <span class="badge bg-light text-default float-end">567</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="r-4">
                                                <label class="form-check-label" for="r-4">
                                                    Online Job Portals
                                                </label>
                                                <span class="badge bg-light text-default float-end">2,125</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="r-5">
                                                <label class="form-check-label" for="r-5">
                                                    Recruitment Consultants
                                                </label>
                                                <span class="badge bg-light text-default float-end">1,678</span>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Job Vacancies</h6>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="vacancy-1" checked>
                                                <label class="form-check-label" for="vacancy-1">
                                                    1 - 5 Vacancies
                                                </label>
                                                <span class="badge bg-light text-default float-end">1,234</span>
                                            </div>
                                            <div class="collapse" id="vacancy-more">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="v-4">
                                                    <label class="form-check-label" for="v-4">
                                                        21 - 50 Vacancies
                                                    </label>
                                                    <span class="badge bg-light text-default float-end">1,312</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="v-5">
                                                    <label class="form-check-label" for="v-5">
                                                        50+ Vacancies
                                                    </label>
                                                    <span class="badge bg-light text-default float-end">732</span>
                                                </div>
                                            </div>
                                            <a class="ecommerce-more-link d-grid" data-bs-toggle="collapse" href="#vacancy-more" role="button" aria-expanded="false" aria-controls="vacancy-more">MORE</a>
                                        </div>
                                    </div>                                
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Employment Type</h6>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="employment-1" checked>
                                                <label class="form-check-label" for="employment-1">
                                                    Full-Time
                                                </label>
                                                <span class="badge bg-light text-default float-end">1,890</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="employment-2">
                                                <label class="form-check-label" for="employment-2">
                                                    Part-Time
                                                </label>
                                                <span class="badge bg-light text-default float-end">1,234</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="employment-3">
                                                <label class="form-check-label" for="employment-3">
                                                    Contract
                                                </label>
                                                <span class="badge bg-light text-default float-end">876</span>
                                            </div>
                                            <div class="collapse" id="employment-more">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="e-4">
                                                    <label class="form-check-label" for="e-4">
                                                        Internship
                                                    </label>
                                                    <span class="badge bg-light text-default float-end">456</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="e-5">
                                                    <label class="form-check-label" for="e-5">
                                                        Freelance
                                                    </label>
                                                    <span class="badge bg-light text-default float-end">342</span>
                                                </div>
                                            </div>
                                            <a class="ecommerce-more-link d-grid" data-bs-toggle="collapse" href="#employment-more" role="button" aria-expanded="false" aria-controls="employment-more">MORE</a>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-9 col-lg-7">
                            <div class="row align-items-center mb-4">
                                <div class="col-lg-12">
                                    <div class="input-group companies-search-input">
                                        <input type="text" class="form-control form-control-lg flex-fill" aria-label="Text input with segmented dropdown button" placeholder="Enter your keyword here">
                                        <input type="text" class="form-control form-control-lg flex-fill" aria-label="Text input with segmented dropdown button" placeholder="Search by location">
                                        <select class="form-select form-select-lg rounded-0" name="choices-single-default" id="choices-single-default" data-trigger>
                                            <option value="SPKChoice 1">Frontend Developer</option>
                                            <option value="SPKChoice 2">Backend Developer</option>
                                            <option value="SPKChoice 3">Full Stack Developer</option>
                                            <option value="SPKChoice 4">Cloud Engineer</option>
                                            <option value="SPKChoice 5">DevOps Specialist</option>
                                            <option value="SPKChoice 6">UI/UX Designer</option>
                                            <option value="SPKChoice 7">Data Scientist</option>
                                            <option value="SPKChoice 8">IT Support</option>
                                        </select>
                                        <button type="button" class="btn btn-primary"><i class="ri-search-line me-1"></i>Search</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <h5 class="fw-medium mb-0 flex-grow-1">Found 3,678  <span class="fw-normal fs-18">companies based on your search.</span> </h5>
                                                <div class="btn-group">
                                                    <button class="btn btn-outline-light border dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Sort By
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Premium</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Newest</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Most Relevant</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Fresher</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Experienced</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Bond Agreement</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Flexible Shift</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Day Shift</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end d-flex gap-2 align-items-center flex-wrap">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light">
                                                    <i class="ri-eye-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light">
                                                    <i class="ri-bookmark-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-start flex-wrap gap-2 mb-2">
                                                <span class="avatar avatar-lg bg-light shadow-sm border border-primary border-opacity-10 p-1 avatar-rounded">
                                                    <img src="{{asset('build/assets/images/company-logos/2.png')}}" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center">
                                                        InnovateTech Solutions
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
                                                <div class="col-xl-5">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-pushpin-line text-danger fs-15"></i> Location: 
                                                        <span class="fw-normal">New York, NY</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-group-2-line text-primary fs-15"></i> Vacancies: 
                                                        <span class="fw-normal">30</span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-wallet-3-line text-info fs-15"></i> Salary: 
                                                        <span class="fw-normal">$90,000 - $120,000</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-time-line text-success fs-15"></i> Type: 
                                                        <span class="fw-normal">Full Time</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-2 align-self-end">
                                                    <a href="javascript:void(0);" class="btn-sm btn btn-wave btn-primary float-end w-100">
                                                        Apply Now <i class="ri-arrow-right-line align-middle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end d-flex gap-2 align-items-center flex-wrap">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light">
                                                    <i class="ri-eye-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light">
                                                    <i class="ri-bookmark-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-start flex-wrap gap-2 mb-2">
                                                <span class="avatar avatar-lg bg-light shadow-sm border border-primary border-opacity-10 p-1 avatar-rounded">
                                                    <img src="{{asset('build/assets/images/company-logos/3.png')}}" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center">
                                                        Quantum Dynamics
                                                        <i class="bi bi-patch-check-fill text-success align-middle lh-1 mx-1" data-bs-toggle="tooltip" title="Verified"></i>
                                                    </h6>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-medium fs-12">
                                                            <i class="ri-briefcase-line text-muted fs-13"></i> Job: 
                                                            <span class="fw-normal">UX/UI Designer</span>
                                                        </div>
                                                        <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                            <span class="badge rounded-pill bg-warning fs-11">Hybrid</span>
                                                            <span class="badge rounded-pill bg-success fs-11">Junior Level</span>
                                                            <span class="badge rounded-pill bg-primary fs-11">Design</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gy-3 gy-xxl-0">
                                                <div class="col-xl-5">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-pushpin-line text-danger fs-15"></i> Location: 
                                                        <span class="fw-normal">San Francisco, CA</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-group-2-line text-primary fs-15"></i> Vacancies: 
                                                        <span class="fw-normal">12</span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-wallet-3-line text-info fs-15"></i> Salary: 
                                                        <span class="fw-normal">$70,000 - $90,000</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-time-line text-success fs-15"></i> Type: 
                                                        <span class="fw-normal">Full Time</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-2 align-self-end">
                                                    <a href="javascript:void(0);" class="btn-sm btn btn-wave btn-primary float-end w-100">
                                                        Apply Now <i class="ri-arrow-right-line align-middle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>                                                                      
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end d-flex gap-2 align-items-center flex-wrap">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light">
                                                    <i class="ri-eye-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light">
                                                    <i class="ri-bookmark-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-start flex-wrap gap-2 mb-2">
                                                <span class="avatar avatar-lg bg-light shadow-sm border border-primary border-opacity-10 p-1 avatar-rounded">
                                                    <img src="{{asset('build/assets/images/company-logos/4.png')}}" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center">
                                                        Stellar Innovations
                                                        <i class="bi bi-patch-check-fill text-success align-middle lh-1 mx-1" data-bs-toggle="tooltip" title="Verified"></i>
                                                    </h6>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-medium fs-12">
                                                            <i class="ri-briefcase-line text-muted fs-13"></i> Job: 
                                                            <span class="fw-normal">Data Scientist</span>
                                                        </div>
                                                        <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                            <span class="badge rounded-pill bg-info fs-11">Remote</span>
                                                            <span class="badge rounded-pill bg-danger fs-11">Lead Level</span>
                                                            <span class="badge rounded-pill bg-secondary fs-11">Analytics</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gy-3 gy-xxl-0">
                                                <div class="col-xl-5">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-pushpin-line text-danger fs-15"></i> Location: 
                                                        <span class="fw-normal">Boston, MA</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-group-2-line text-primary fs-15"></i> Vacancies: 
                                                        <span class="fw-normal">8</span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-wallet-3-line text-info fs-15"></i> Salary: 
                                                        <span class="fw-normal">$110,000 - $140,000</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-time-line text-success fs-15"></i> Type: 
                                                        <span class="fw-normal">Full Time</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-2 align-self-end">
                                                    <a href="javascript:void(0);" class="btn-sm btn btn-wave btn-primary float-end w-100">
                                                        Apply Now <i class="ri-arrow-right-line align-middle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>                                                                                                          
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end d-flex gap-2 align-items-center flex-wrap">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light">
                                                    <i class="ri-eye-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light">
                                                    <i class="ri-bookmark-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-start flex-wrap gap-2 mb-2">
                                                <span class="avatar avatar-lg bg-light shadow-sm border border-primary border-opacity-10 p-1 avatar-rounded">
                                                    <img src="{{asset('build/assets/images/company-logos/5.png')}}" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center">
                                                        Apex Systems
                                                        <i class="bi bi-patch-check-fill text-success align-middle lh-1 mx-1" data-bs-toggle="tooltip" title="Verified"></i>
                                                    </h6>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-medium fs-12">
                                                            <i class="ri-briefcase-line text-muted fs-13"></i> Job: 
                                                            <span class="fw-normal">Backend Developer</span>
                                                        </div>
                                                        <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                            <span class="badge rounded-pill bg-secondary fs-11">On-Site</span>
                                                            <span class="badge rounded-pill bg-info fs-11">Entry Level</span>
                                                            <span class="badge rounded-pill bg-warning fs-11">Engineering</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gy-3 gy-xxl-0">
                                                <div class="col-xl-5">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-pushpin-line text-danger fs-15"></i> Location: 
                                                        <span class="fw-normal">Seattle, WA</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-group-2-line text-primary fs-15"></i> Vacancies: 
                                                        <span class="fw-normal">20</span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-wallet-3-line text-info fs-15"></i> Salary: 
                                                        <span class="fw-normal">$85,000 - $105,000</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-time-line text-success fs-15"></i> Type: 
                                                        <span class="fw-normal">Full Time</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-2 align-self-end">
                                                    <a href="javascript:void(0);" class="btn-sm btn btn-wave btn-primary float-end w-100">
                                                        Apply Now <i class="ri-arrow-right-line align-middle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>                                                                                                                                            
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="float-end d-flex gap-2 align-items-center flex-wrap">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light">
                                                    <i class="ri-eye-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light">
                                                    <i class="ri-bookmark-line fs-13 lh-1 align-middle"></i>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-start flex-wrap gap-2 mb-2">
                                                <span class="avatar avatar-lg bg-light shadow-sm border border-primary border-opacity-10 p-1 avatar-rounded">
                                                    <img src="{{asset('build/assets/images/company-logos/6.png')}}" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center">
                                                        NextGen Solutions
                                                        <i class="bi bi-patch-check-fill text-success align-middle lh-1 mx-1" data-bs-toggle="tooltip" title="Verified"></i>
                                                    </h6>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="fw-medium fs-12">
                                                            <i class="ri-briefcase-line text-muted fs-13"></i> Job: 
                                                            <span class="fw-normal">DevOps Engineer</span>
                                                        </div>
                                                        <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                            <span class="badge rounded-pill bg-info fs-11">Remote</span>
                                                            <span class="badge rounded-pill bg-primary fs-11">Mid Level</span>
                                                            <span class="badge rounded-pill bg-success fs-11">Operations</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gy-3 gy-xxl-0">
                                                <div class="col-xl-5">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-pushpin-line text-danger fs-15"></i> Location: 
                                                        <span class="fw-normal">Austin, TX</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-group-2-line text-primary fs-15"></i> Vacancies: 
                                                        <span class="fw-normal">15</span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5">
                                                    <div class="fw-medium mb-1">
                                                        <i class="ri-wallet-3-line text-info fs-15"></i> Salary: 
                                                        <span class="fw-normal">$95,000 - $125,000</span>
                                                    </div>
                                                    <div class="fw-medium">
                                                        <i class="ri-time-line text-success fs-15"></i> Type: 
                                                        <span class="fw-normal">Full Time</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-2 align-self-end">
                                                    <a href="javascript:void(0);" class="btn-sm btn btn-wave btn-primary float-end w-100">
                                                        Apply Now <i class="ri-arrow-right-line align-middle"></i>
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
                    <!-- End:: row-1 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')


@endsection