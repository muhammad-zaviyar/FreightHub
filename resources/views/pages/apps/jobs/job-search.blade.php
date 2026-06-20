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
                        <h1 class="page-title fw-semibold fs-18 mb-0">Job Search</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Job Search</li>
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
                                        <h6 class="fw-medium mb-0">Job Type</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="j-1" checked>
                                                <label class="form-check-label" for="j-1">
                                                    Full Time
                                                </label>
                                                <span class="badge bg-light text-default fw-medium fs-12 float-end">487</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="j-2">
                                                <label class="form-check-label" for="j-2">
                                                    Part Time
                                                </label>
                                                <span class="badge bg-light text-default fw-medium fs-12 float-end">1,245</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="j-3" checked>
                                                <label class="form-check-label" for="j-3">
                                                    Internship
                                                </label>
                                                <span class="badge bg-light text-default fw-medium fs-12 float-end">987</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="j-4" checked>
                                                <label class="form-check-label" for="j-4">
                                                    Freelancer
                                                </label>
                                                <span class="badge bg-light text-default fw-medium fs-12 float-end">08</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Salary Range</h6>
                                        <div class="py-3 pb-0">
                                            <div id="nonlinear"></div>
                                            <div class="d-flex mt-4">
                                                <div class="fw-medium h6 mb-0">$<span id="lower-value"></span></div>
                                                &nbsp; -- &nbsp; 
                                                <div class="fw-medium h6 mb-0">$<span id="upper-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Experience</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="e-1" checked>
                                                <label class="form-check-label" for="e-1">
                                                    Entry Level
                                                </label>
                                                <span class="badge bg-light text-default fw-medium fs-12 float-end">25,000</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="e-2">
                                                <label class="form-check-label" for="e-2">
                                                    Junior
                                                </label>
                                                <span class="badge bg-light text-default fw-medium fs-12 float-end">18,000</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="e-3" checked>
                                                <label class="form-check-label" for="e-3">
                                                    Mid Level
                                                </label>
                                                <span class="badge bg-light text-default fw-medium fs-12 float-end">17,500</span>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="e-4" checked>
                                                <label class="form-check-label" for="e-4">
                                                    Expert
                                                </label>
                                                <span class="badge bg-light text-default fw-medium fs-12 float-end">8,200</span>
                                            </div>
                                        </div>
                                    </div>                                
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Job Categories</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="c-1" checked>
                                                <label class="form-check-label" for="c-1">
                                                    Technology
                                                </label>
                                                <span class="badge bg-light text-default fw-medium fs-12 float-end">4,214</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="c-5">
                                                <label class="form-check-label" for="c-5">
                                                    Engineering
                                                </label>
                                                <span class="badge bg-light text-default fw-medium fs-12 float-end">8,213</span>
                                            </div>
                                            <div class="collapse" id="category-more">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="c-6">
                                                    <label class="form-check-label" for="c-6">
                                                        Sales
                                                    </label>
                                                    <span class="badge bg-light text-default fw-medium fs-12 float-end">5,342</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="c-2">
                                                    <label class="form-check-label" for="c-2">
                                                        Healthcare
                                                    </label>
                                                    <span class="badge bg-light text-default fw-medium fs-12 float-end">1,278</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="c-3" checked>
                                                    <label class="form-check-label" for="c-3">
                                                        Education
                                                    </label>
                                                    <span class="badge bg-light text-default fw-medium fs-12 float-end">6,549</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="c-4" checked>
                                                    <label class="form-check-label" for="c-4">
                                                        Finance
                                                    </label>
                                                    <span class="badge bg-light text-default fw-medium fs-12 float-end">3,876</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="c-7">
                                                    <label class="form-check-label" for="c-7">
                                                        Hospitality
                                                    </label>
                                                    <span class="badge bg-light text-default fw-medium fs-12 float-end">1,754</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="c-8">
                                                    <label class="form-check-label" for="c-8">
                                                        Legal
                                                    </label>
                                                    <span class="badge bg-light text-default fw-medium fs-12 float-end">3,091</span>
                                                </div>
                                            </div>
                                            <a class="ecommerce-more-link mt-3 d-grid" data-bs-toggle="collapse" href="#category-more" role="button" aria-expanded="false" aria-controls="category-more">MORE</a>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-medium mb-0">Qualification</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="q-4">
                                                <label class="form-check-label" for="q-4">
                                                    Bachelor's Degree
                                                </label>
                                                <span class="badge bg-light text-default fw-medium fs-12 float-end">4,981</span>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="q-5" checked>
                                                <label class="form-check-label" for="q-5">
                                                    Postgraduate &amp; above
                                                </label>
                                                <span class="badge bg-light text-default fw-medium fs-12 float-end">2,341</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <h6 class="fw-medium mb-0">Skills</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="s-1" checked>
                                                <label class="form-check-label" for="s-1">
                                                    Python
                                                </label>
                                                <span class="badge bg-light text-default fw-medium fs-12 float-end">18,943</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="s-2" checked>
                                                <label class="form-check-label" for="s-2">
                                                    JavaScript
                                                </label>
                                                <span class="badge bg-light text-default fw-medium fs-12 float-end">22,354</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="s-3">
                                                <label class="form-check-label" for="s-3">
                                                    Java
                                                </label>
                                                <span class="badge bg-light text-default fw-medium fs-12 float-end">12,789</span>
                                            </div>
                                            <div class="collapse" id="skills-more">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="s-4" checked>
                                                    <label class="form-check-label" for="s-4">
                                                        SQL
                                                    </label>
                                                    <span class="badge bg-light text-default fw-medium fs-12 float-end">9,214</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="s-5">
                                                    <label class="form-check-label" for="s-5">
                                                        C#
                                                    </label>
                                                    <span class="badge bg-light text-default fw-medium fs-12 float-end">6,032</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="s-6">
                                                    <label class="form-check-label" for="s-6">
                                                        Ruby
                                                    </label>
                                                    <span class="badge bg-light text-default fw-medium fs-12 float-end">4,761</span>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="s-7">
                                                    <label class="form-check-label" for="s-7">
                                                        Swift
                                                    </label>
                                                    <span class="badge bg-light text-default fw-medium fs-12 float-end">2,118</span>
                                                </div>
                                            </div>
                                            <a class="ecommerce-more-link mt-3 d-grid" data-bs-toggle="collapse" href="#skills-more" role="button" aria-expanded="false" aria-controls="skills-more">MORE</a>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-9 col-xl-8">
                            <div class="card custom-card p-3">
                                <div class="input-group companies-search-input mb-3">
                                    <input type="text" class="form-control form-control-lg flex-fill" aria-label="Job title or keyword" placeholder="Job title or keyword">
                                    <input type="text" class="form-control form-control-lg flex-fill" aria-label="Location" placeholder="Location">
                                    <button type="button" class="btn btn-primary"><i class="ri-search-line me-1"></i> Search</button>
                                </div>
                                <div class="row align-items-center p-2 bg-success-transparent rounded mx-0">
                                    <div class="col-sm-7">
                                        <div class="d-flex">
                                            <h6 class="fw-medium mb-0"><span class="fw-normal">Showing</span> 548 Jobs</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-sm-end mt-3 mt-sm-0">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-success border dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Featured</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Newest</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Most Relevant</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Best Rated</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card custom-card featured-jobs">
                                        <div class="card-body">
                                            <div class="d-flex mb-3 flex-wrap gap-2 flex-xxl-nowrap">
                                                <div>
                                                    <span class="avatar avatar-md border bg-primary-transparent avatar-rounded p-1">
                                                        <img src="{{asset('build/assets/images/company-logos/10.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="ms-1 flex-grow-1 w-75 text-truncate">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center text-truncate w-75">
                                                        <a href="javascript:void(0);" class="text-truncate">Marketing Manager</a>
                                                    </h6>
                                                    <div class="fs-12 fw-normal text-muted mb-0 text-truncate">Global Brands Inc. <i class="bi bi-patch-check-fill text-success align-middle lh-1" data-bs-toggle="tooltip" title="Verified"></i></div>
                                                </div>
                                                <div class="ms-auto d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Bookmark" data-bs-original-title="Add to Bookmark"><span><i class="ri-bookmark-line fs-13 lh-1 align-middle"></i></span></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="View Details" data-bs-original-title="View Details"><span><i class="ri-eye-line fs-13 lh-1 align-middle"></i></span></a>
                                                </div>
                                            </div>
                                            <div class="text-muted fs-13"><i class="ri-pushpin-fill text-danger me-1"></i><span class="fw-medium text-default me-1">Location:</span> New York, NY</div>
                                            <div class="mt-2 mb-3"> 
                                                <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <span class="badge rounded-pill bg-info fs-11">Contract</span>
                                                    <span class="badge rounded-pill bg-secondary fs-11">On-Site</span>
                                                    <span class="badge rounded-pill bg-success fs-11">Managerial</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 justify-content-between flex-wrap align-items-center">
                                                <h6 class="fw-medium mb-0 p-2 bg-light rounded fs-13">$90k - $120k</h6>
                                                <a href="javascript:void(0);" class="fw-medium btn btn-sm btn-primary btn-w-md d-grid text-nowrap ms-auto">
                                                    Apply Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card featured-jobs">
                                        <div class="card-body">
                                            <div class="d-flex mb-3 flex-wrap gap-2 flex-xxl-nowrap">
                                                <div>
                                                    <span class="avatar avatar-md border bg-primary-transparent avatar-rounded p-1">
                                                        <img src="{{asset('build/assets/images/company-logos/9.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="ms-1 flex-grow-1 w-75 text-truncate">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center text-truncate w-75">
                                                        <a href="javascript:void(0);" class="text-truncate">Backend Developer</a>
                                                    </h6>
                                                    <div class="fs-12 fw-normal text-muted mb-0 text-truncate">Tech Innovations Ltd. <i class="bi bi-patch-check-fill text-success align-middle lh-1" data-bs-toggle="tooltip" title="Verified"></i></div>
                                                </div>
                                                <div class="ms-auto d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Bookmark" data-bs-original-title="Add to Bookmark"><span><i class="ri-bookmark-line fs-13 lh-1 align-middle"></i></span></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="View Details" data-bs-original-title="View Details"><span><i class="ri-eye-line fs-13 lh-1 align-middle"></i></span></a>
                                                </div>
                                            </div>
                                            <div class="text-muted fs-13"><i class="ri-pushpin-fill text-danger me-1"></i><span class="fw-medium text-default me-1">Location:</span> Seattle, WA</div>
                                            <div class="mt-2 mb-3"> 
                                                <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <span class="badge rounded-pill bg-info fs-11">Full-Time</span>
                                                    <span class="badge rounded-pill bg-secondary fs-11">Remote</span>
                                                    <span class="badge rounded-pill bg-success fs-11">Mid-Level</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 justify-content-between flex-wrap align-items-center">
                                                <h6 class="fw-medium mb-0 p-2 bg-light rounded fs-13">$80k - $110k</h6>
                                                <a href="javascript:void(0);" class="fw-medium btn btn-sm btn-primary btn-w-md d-grid text-nowrap ms-auto">
                                                    Apply Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card featured-jobs">
                                        <div class="card-body">
                                            <div class="d-flex mb-3 flex-wrap gap-2 flex-xxl-nowrap">
                                                <div>
                                                    <span class="avatar avatar-md border bg-primary-transparent avatar-rounded p-1">
                                                        <img src="{{asset('build/assets/images/company-logos/8.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="ms-1 flex-grow-1 w-75 text-truncate">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center text-truncate w-75">
                                                        <a href="javascript:void(0);" class="text-truncate">UI/UX Designer</a>
                                                    </h6>
                                                    <div class="fs-12 fw-normal text-muted mb-0 text-truncate">Design Lab Co. <i class="bi bi-patch-check-fill text-success align-middle lh-1" data-bs-toggle="tooltip" title="Verified"></i></div>
                                                </div>
                                                <div class="ms-auto d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Bookmark" data-bs-original-title="Add to Bookmark"><span><i class="ri-bookmark-line fs-13 lh-1 align-middle"></i></span></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="View Details" data-bs-original-title="View Details"><span><i class="ri-eye-line fs-13 lh-1 align-middle"></i></span></a>
                                                </div>
                                            </div>
                                            <div class="text-muted fs-13"><i class="ri-pushpin-fill text-danger me-1"></i><span class="fw-medium text-default me-1">Location:</span> Austin, TX</div>
                                            <div class="mt-2 mb-3"> 
                                                <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <span class="badge rounded-pill bg-info fs-11">Part-Time</span>
                                                    <span class="badge rounded-pill bg-secondary fs-11">Hybrid</span>
                                                    <span class="badge rounded-pill bg-success fs-11">Junior Level</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 justify-content-between flex-wrap align-items-center">
                                                <h6 class="fw-medium mb-0 p-2 bg-light rounded fs-13">$45k - $60k</h6>
                                                <a href="javascript:void(0);" class="fw-medium btn btn-sm btn-primary btn-w-md d-grid text-nowrap ms-auto">
                                                    Apply Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card featured-jobs">
                                        <div class="card-body">
                                            <div class="d-flex mb-3 flex-wrap gap-2 flex-xxl-nowrap">
                                                <div>
                                                    <span class="avatar avatar-md border bg-primary-transparent avatar-rounded p-1">
                                                        <img src="{{asset('build/assets/images/company-logos/7.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="ms-1 flex-grow-1 w-75 text-truncate">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center text-truncate w-75">
                                                        <a href="javascript:void(0);" class="text-truncate">Senior Graphic Designer</a>
                                                    </h6>
                                                    <div class="fs-12 fw-normal text-muted mb-0 text-truncate">Creative Minds Inc. <i class="bi bi-patch-check-fill text-success align-middle lh-1" data-bs-toggle="tooltip" title="Verified"></i></div>
                                                </div>
                                                <div class="ms-auto d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Bookmark" data-bs-original-title="Add to Bookmark"><span><i class="ri-bookmark-line fs-13 lh-1 align-middle"></i></span></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="View Details" data-bs-original-title="View Details"><span><i class="ri-eye-line fs-13 lh-1 align-middle"></i></span></a>
                                                </div>
                                            </div>
                                            <div class="text-muted fs-13"><i class="ri-pushpin-fill text-danger me-1"></i><span class="fw-medium text-default me-1">Location:</span> San Francisco, CA</div>
                                            <div class="mt-2 mb-3"> 
                                                <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <span class="badge rounded-pill bg-info fs-11">Full-Time</span>
                                                    <span class="badge rounded-pill bg-secondary fs-11">On-Site</span>
                                                    <span class="badge rounded-pill bg-success fs-11">Senior Level</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 justify-content-between flex-wrap align-items-center">
                                                <h6 class="fw-medium mb-0 p-2 bg-light rounded fs-13">$70k - $100k</h6>
                                                <a href="javascript:void(0);" class="fw-medium btn btn-sm btn-primary btn-w-md d-grid text-nowrap ms-auto">
                                                    Apply Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card featured-jobs">
                                        <div class="card-body">
                                            <div class="d-flex mb-3 flex-wrap gap-2 flex-xxl-nowrap">
                                                <div>
                                                    <span class="avatar avatar-md border bg-primary-transparent avatar-rounded p-1">
                                                        <img src="{{asset('build/assets/images/company-logos/8.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="ms-1 flex-grow-1 w-75 text-truncate">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center text-truncate w-75">
                                                        <a href="javascript:void(0);" class="text-truncate">UI/UX Designer</a>
                                                    </h6>
                                                    <div class="fs-12 fw-normal text-muted mb-0 text-truncate">Design Lab Co. <i class="bi bi-patch-check-fill text-success align-middle lh-1" data-bs-toggle="tooltip" title="Verified"></i></div>
                                                </div>
                                                <div class="ms-auto d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Bookmark" data-bs-original-title="Add to Bookmark"><span><i class="ri-bookmark-line fs-13 lh-1 align-middle"></i></span></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="View Details" data-bs-original-title="View Details"><span><i class="ri-eye-line fs-13 lh-1 align-middle"></i></span></a>
                                                </div>
                                            </div>
                                            <div class="text-muted fs-13"><i class="ri-pushpin-fill text-danger me-1"></i><span class="fw-medium text-default me-1">Location:</span> Austin, TX</div>
                                            <div class="mt-2 mb-3"> 
                                                <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <span class="badge rounded-pill bg-info fs-11">Part-Time</span>
                                                    <span class="badge rounded-pill bg-secondary fs-11">Hybrid</span>
                                                    <span class="badge rounded-pill bg-success fs-11">Junior Level</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 justify-content-between flex-wrap align-items-center">
                                                <h6 class="fw-medium mb-0 p-2 bg-light rounded fs-13">$45k - $60k</h6>
                                                <a href="javascript:void(0);" class="fw-medium btn btn-sm btn-primary btn-w-md d-grid text-nowrap ms-auto">
                                                    Apply Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card featured-jobs">
                                        <div class="card-body">
                                            <div class="d-flex mb-3 flex-wrap gap-2 flex-xxl-nowrap">
                                                <div>
                                                    <span class="avatar avatar-md border bg-primary-transparent avatar-rounded p-1">
                                                        <img src="{{asset('build/assets/images/company-logos/4.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="ms-1 flex-grow-1 w-75 text-truncate">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center text-truncate w-75">
                                                        <a href="javascript:void(0);" class="text-truncate"> Web UI Designer</a>
                                                    </h6>
                                                    <div class="fs-12 fw-normal text-muted mb-0 text-truncate">Info. Techz Company <i class="bi bi-patch-check-fill text-success align-middle lh-1" data-bs-toggle="tooltip" title="Verified"></i></div>
                                                </div>
                                                <div class="ms-auto d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Bookmark" data-bs-original-title="Add to Bookmark"><span><i class="ri-bookmark-line fs-13 lh-1 align-middle"></i></span></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="View Details" data-bs-original-title="View Details"><span><i class="ri-eye-line fs-13 lh-1 align-middle"></i></span></a>
                                                </div>
                                            </div>
                                            <div class="text-muted fs-13"><i class="ri-pushpin-fill text-danger me-1"></i><span class="fw-medium text-default me-1">Location:</span> Los Angeles, CA.</div>
                                            <div class="mt-2 mb-3"> 
                                                <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <span class="badge rounded-pill bg-info fs-11">Freelancer</span>
                                                    <span class="badge rounded-pill bg-secondary fs-11">Remote</span>
                                                    <span class="badge rounded-pill bg-success fs-11">Intermediate</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 justify-content-between flex-wrap align-items-center">
                                                <h6 class="fw-medium mb-0 p-2 bg-light rounded fs-13">$50k - $80k</h6>
                                                <a href="javascript:void(0);" class="fw-medium btn btn-sm btn-primary btn-w-md d-grid text-nowrap ms-auto">
                                                    Apply Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card featured-jobs mb-3">
                                        <div class="card-body">
                                            <div class="d-flex mb-3 flex-wrap gap-2 flex-xxl-nowrap">
                                                <div>
                                                    <span class="avatar avatar-md border bg-primary-transparent avatar-rounded p-1">
                                                        <img src="{{asset('build/assets/images/company-logos/1.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="ms-1 flex-grow-1 w-75 text-truncate">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center text-truncate w-75">
                                                        <a href="javascript:void(0);" class="text-truncate">Software Engineer</a>
                                                    </h6>
                                                    <div class="fs-12 fw-normal text-muted mb-0 text-truncate">Innovate Tech Solutions <i class="bi bi-patch-check-fill text-success align-middle lh-1" data-bs-toggle="tooltip" title="Verified"></i></div>
                                                </div>
                                                <div class="ms-auto d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to wishlist" data-bs-original-title="Add to Bookmark"><span><i class="ri-bookmark-line fs-13 lh-1 align-middle"></i></span></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="View Details" data-bs-original-title="View Details"><span><i class="ri-eye-line fs-13 lh-1 align-middle"></i></span></a>
                                                </div>
                                            </div>
                                            <div class="text-muted fs-13"><i class="ri-pushpin-fill text-danger me-1"></i><span class="fw-medium text-default me-1">Location:</span> San Francisco, CA</div>
                                            <div class="mt-2 mb-3"> 
                                                <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <span class="badge rounded-pill bg-info fs-11">Full-Time</span>
                                                    <span class="badge rounded-pill bg-secondary fs-11">On-Site</span>
                                                    <span class="badge rounded-pill bg-success fs-11">Senior Level</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 justify-content-between flex-wrap align-items-center">
                                                <h6 class="fw-medium mb-0 p-2 bg-light rounded fs-13">$120k - $150k</h6>
                                                <a href="javascript:void(0);" class="fw-medium btn btn-sm btn-primary btn-w-md d-grid text-nowrap ms-auto">
                                                    Apply Now
                                                </a>
                                            </div>
                                        </div>                                         
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card featured-jobs">
                                        <div class="card-body">
                                            <div class="d-flex mb-3 flex-wrap gap-2 flex-xxl-nowrap">
                                                <div>
                                                    <span class="avatar avatar-md border bg-primary-transparent avatar-rounded p-1">
                                                        <img src="{{asset('build/assets/images/company-logos/10.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="ms-1 flex-grow-1 w-75 text-truncate">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center text-truncate w-75">
                                                        <a href="javascript:void(0);" class="text-truncate">Marketing Manager</a>
                                                    </h6>
                                                    <div class="fs-12 fw-normal text-muted mb-0 text-truncate">Global Brands Inc. <i class="bi bi-patch-check-fill text-success align-middle lh-1" data-bs-toggle="tooltip" title="Verified"></i></div>
                                                </div>
                                                <div class="ms-auto d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Bookmark" data-bs-original-title="Add to Bookmark"><span><i class="ri-bookmark-line fs-13 lh-1 align-middle"></i></span></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="View Details" data-bs-original-title="View Details"><span><i class="ri-eye-line fs-13 lh-1 align-middle"></i></span></a>
                                                </div>
                                            </div>
                                            <div class="text-muted fs-13"><i class="ri-pushpin-fill text-danger me-1"></i><span class="fw-medium text-default me-1">Location:</span> New York, NY</div>
                                            <div class="mt-2 mb-3"> 
                                                <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <span class="badge rounded-pill bg-info fs-11">Contract</span>
                                                    <span class="badge rounded-pill bg-secondary fs-11">On-Site</span>
                                                    <span class="badge rounded-pill bg-success fs-11">Managerial</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 justify-content-between flex-wrap align-items-center">
                                                <h6 class="fw-medium mb-0 p-2 bg-light rounded fs-13">$90k - $120k</h6>
                                                <a href="javascript:void(0);" class="fw-medium btn btn-sm btn-primary btn-w-md d-grid text-nowrap ms-auto">
                                                    Apply Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card featured-jobs">
                                        <div class="card-body">
                                            <div class="d-flex mb-3 flex-wrap gap-2 flex-xxl-nowrap">
                                                <div>
                                                    <span class="avatar avatar-md border bg-primary-transparent avatar-rounded p-1">
                                                        <img src="{{asset('build/assets/images/company-logos/7.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="ms-1 flex-grow-1 w-75 text-truncate">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center text-truncate w-75">
                                                        <a href="javascript:void(0);" class="text-truncate">Senior Graphic Designer</a>
                                                    </h6>
                                                    <div class="fs-12 fw-normal text-muted mb-0 text-truncate">Creative Minds Inc. <i class="bi bi-patch-check-fill text-success align-middle lh-1" data-bs-toggle="tooltip" title="Verified"></i></div>
                                                </div>
                                                <div class="ms-auto d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Bookmark" data-bs-original-title="Add to Bookmark"><span><i class="ri-bookmark-line fs-13 lh-1 align-middle"></i></span></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="View Details" data-bs-original-title="View Details"><span><i class="ri-eye-line fs-13 lh-1 align-middle"></i></span></a>
                                                </div>
                                            </div>
                                            <div class="text-muted fs-13"><i class="ri-pushpin-fill text-danger me-1"></i><span class="fw-medium text-default me-1">Location:</span> San Francisco, CA</div>
                                            <div class="mt-2 mb-3"> 
                                                <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <span class="badge rounded-pill bg-info fs-11">Full-Time</span>
                                                    <span class="badge rounded-pill bg-secondary fs-11">On-Site</span>
                                                    <span class="badge rounded-pill bg-success fs-11">Senior Level</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 justify-content-between flex-wrap align-items-center">
                                                <h6 class="fw-medium mb-0 p-2 bg-light rounded fs-13">$70k - $100k</h6>
                                                <a href="javascript:void(0);" class="fw-medium btn btn-sm btn-primary btn-w-md d-grid text-nowrap ms-auto">
                                                    Apply Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card featured-jobs mb-3">
                                        <div class="card-body">
                                            <div class="d-flex mb-3 flex-wrap gap-2 flex-xxl-nowrap">
                                                <div>
                                                    <span class="avatar avatar-md border bg-primary-transparent avatar-rounded p-1">
                                                        <img src="{{asset('build/assets/images/company-logos/2.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="ms-1 flex-grow-1 w-75 text-truncate">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center text-truncate w-75">
                                                        <a href="javascript:void(0);" class="text-truncate">Marketing Specialist</a>
                                                    </h6>
                                                    <div class="fs-12 fw-normal text-muted mb-0 text-truncate">Creative Solutions Co. <i class="bi bi-patch-check-fill text-success align-middle lh-1" data-bs-toggle="tooltip" title="Verified"></i></div>
                                                </div>
                                                <div class="ms-auto d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to wishlist" data-bs-original-title="Add to Bookmark"><span><i class="ri-bookmark-line fs-13 lh-1 align-middle"></i></span></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="View Details" data-bs-original-title="View Details"><span><i class="ri-eye-line fs-13 lh-1 align-middle"></i></span></a>
                                                </div>
                                            </div>
                                            <div class="text-muted fs-13"><i class="ri-pushpin-fill text-danger me-1"></i><span class="fw-medium text-default me-1">Location:</span> San Francisco, CA</div>
                                            <div class="mt-2 mb-3"> 
                                                <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <span class="badge rounded-pill bg-info fs-11">Full-Time</span>
                                                    <span class="badge rounded-pill bg-secondary fs-11">On-Site</span>
                                                    <span class="badge rounded-pill bg-success fs-11">Senior Level</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 justify-content-between flex-wrap align-items-center">
                                                <h6 class="fw-medium mb-0 p-2 bg-light rounded fs-13">$90k - $120k</h6>
                                                <a href="javascript:void(0);" class="fw-medium btn btn-sm btn-primary btn-w-md d-grid text-nowrap ms-auto">
                                                    Apply Now
                                                </a>
                                            </div>
                                        </div>                                         
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card featured-jobs mb-3">
                                        <div class="card-body">
                                            <div class="d-flex mb-3 flex-wrap gap-2 flex-xxl-nowrap">
                                                <div>
                                                    <span class="avatar avatar-md border bg-primary-transparent avatar-rounded p-1">
                                                        <img src="{{asset('build/assets/images/company-logos/3.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="ms-1 flex-grow-1 w-75 text-truncate">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center text-truncate w-75">
                                                        <a href="javascript:void(0);" class="text-truncate">Sales Executive</a>
                                                    </h6>
                                                    <div class="fs-12 fw-normal text-muted mb-0 text-truncate">Sales Corp Ltd <i class="bi bi-patch-check-fill text-success align-middle lh-1" data-bs-toggle="tooltip" title="Verified"></i></div>
                                                </div>
                                                <div class="ms-auto d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to wishlist" data-bs-original-title="Add to Bookmark"><span><i class="ri-bookmark-line fs-13 lh-1 align-middle"></i></span></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="View Details" data-bs-original-title="View Details"><span><i class="ri-eye-line fs-13 lh-1 align-middle"></i></span></a>
                                                </div>
                                            </div>
                                            <div class="text-muted fs-13"><i class="ri-pushpin-fill text-danger me-1"></i><span class="fw-medium text-default me-1">Location:</span> Boston, MA</div>
                                            <div class="mt-2 mb-3"> 
                                                <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <span class="badge rounded-pill bg-info fs-11">Part-Time</span>
                                                    <span class="badge rounded-pill bg-secondary fs-11">On-Site</span>
                                                    <span class="badge rounded-pill bg-success fs-11">Entry Level</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 justify-content-between flex-wrap align-items-center">
                                                <h6 class="fw-medium mb-0 p-2 bg-light rounded fs-13">$60k - $80k</h6>
                                                <a href="javascript:void(0);" class="fw-medium btn btn-sm btn-primary btn-w-md d-grid text-nowrap ms-auto">
                                                    Apply Now
                                                </a>
                                            </div>
                                        </div>                                         
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card featured-jobs mb-3">
                                        <div class="card-body">
                                            <div class="d-flex mb-3 flex-wrap gap-2 flex-xxl-nowrap">
                                                <div>
                                                    <span class="avatar avatar-md border bg-primary-transparent avatar-rounded p-1">
                                                        <img src="{{asset('build/assets/images/company-logos/5.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="ms-1 flex-grow-1 w-75 text-truncate">
                                                    <h6 class="fw-medium mb-1 d-flex align-items-center text-truncate w-75">
                                                        <a href="javascript:void(0);" class="text-truncate">Product Manager</a>
                                                    </h6>
                                                    <div class="fs-12 fw-normal text-muted mb-0 text-truncate">Innovative Tech LLC <i class="bi bi-patch-check-fill text-success align-middle lh-1" data-bs-toggle="tooltip" title="Verified"></i></div>
                                                </div>
                                                <div class="ms-auto d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to wishlist" data-bs-original-title="Add to Bookmark"><span><i class="ri-bookmark-line fs-13 lh-1 align-middle"></i></span></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="View Details" data-bs-original-title="View Details"><span><i class="ri-eye-line fs-13 lh-1 align-middle"></i></span></a>
                                                </div>
                                            </div>
                                            <div class="text-muted fs-13"><i class="ri-pushpin-fill text-danger me-1"></i><span class="fw-medium text-default me-1">Location:</span> Seattle, WA</div>
                                            <div class="mt-2 mb-3"> 
                                                <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap">
                                                    <span class="badge rounded-pill bg-info fs-11">Remote</span>
                                                    <span class="badge rounded-pill bg-secondary fs-11">Full-Time</span>
                                                    <span class="badge rounded-pill bg-success fs-11">Manager</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 justify-content-between flex-wrap align-items-center">
                                                <h6 class="fw-medium mb-0 p-2 bg-light rounded fs-13">$100k - $140k</h6>
                                                <a href="javascript:void(0);" class="fw-medium btn btn-sm btn-primary btn-w-md d-grid text-nowrap ms-auto">
                                                    Apply Now
                                                </a>
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
                    <!-- End::row-1 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- noUiSlider JS -->
        <script src="{{asset('build/assets/libs/nouislider/nouislider.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/wnumb/wNumb.min.js')}}"></script>
        @vite('resources/assets/js/job-search.js')


@endsection