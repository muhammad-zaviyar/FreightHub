@extends('layouts.master')

@section('styles')

      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Jobs List</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Jobs List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        All Jobs List
                                    </div>
                                    <div class="d-flex flex-wrap gap-2">
                                        <div>
                                            <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Posted Date</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Status</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Department</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Job Type</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Newest</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Oldest</a></li>
                                            </ul>
                                        </div>
                                        <a href="{{url('job-post')}}" class="btn btn-success btn-wave btn-sm">
                                            <i class="ri-add-line me-1 align-middle"></i>Post a Job
                                        </a> 
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th scope="row" class="ps-4"><input class="form-check-input check-all" type="checkbox" id="checkboxNoLabeljob1" value="" aria-label="..."></th>
                                                    <th scope="col">Position</th>
                                                    <th scope="col">Department</th>
                                                    <th scope="col">Company Name</th>
                                                    <th scope="col">Applications</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Posted</th>
                                                    <th scope="col">Slots</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Closing Date</th>
                                                    <th scope="col">Options</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="joblist-list">
                                                    <td class="ps-4 joblist-checkbox"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob22" value="" aria-label="..." checked></td>
                                                    <td>
                                                        <p class="fw-medium mb-0 d-flex align-items-center"><a href="{{url('job-details')}}">Senior Frontend Developer</a></p>
                                                        <span class="fs-12 text-muted"><i class="ri-pushpin-line"></i> Los Angeles, CA</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm p-1 me-1 bg-info-transparent avatar-rounded">
                                                                <img src="{{asset('build/assets/images/company-logos/8.png')}}" alt="Tech Innovations Inc.">
                                                            </span>
                                                            <a href="javascript:void(0);" class="fw-medium mb-0">Tech Innovations Inc.</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Engineering
                                                    </td>
                                                    <td><span class="ms-3">30</span></td>
                                                    <td><span class="badge bg-success">Open</span></td>
                                                    <td>2024-09-10</td>
                                                    <td>8</td>
                                                    <td>Full Time</td>
                                                    <td><i class="ri-close-circle-fill text-pink mx-1"></i>Nov 25 2024</td>
                                                    <td>
                                                        <a href="{{url('job-details')}}" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light">
                                                            <i class="ri-edit-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="joblist-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="joblist-list">
                                                    <td class="ps-4 joblist-checkbox"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob23" value="" aria-label="..."></td>
                                                    <td>
                                                        <p class="fw-medium mb-0 d-flex align-items-center"><a href="{{url('job-details')}}">Backend Developer</a></p>
                                                        <span class="fs-12 text-muted"><i class="ri-pushpin-line"></i> San Francisco, CA</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm p-1 me-1 bg-secondary-transparent avatar-rounded">
                                                                <img src="{{asset('build/assets/images/company-logos/9.png')}}" alt="NextGen Solutions">
                                                            </span>
                                                            <a href="javascript:void(0);" class="fw-medium mb-0">NextGen Solutions</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        IT
                                                    </td>
                                                    <td><span class="ms-3">45</span></td>
                                                    <td><span class="badge bg-danger">Closed</span></td>
                                                    <td>2024-08-20</td>
                                                    <td>6</td>
                                                    <td>Part Time</td>
                                                    <td><i class="ri-close-circle-fill text-pink mx-1"></i>Oct 30 2024</td>
                                                    <td>
                                                        <a href="{{url('job-details')}}" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light">
                                                            <i class="ri-edit-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="joblist-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="joblist-list">
                                                    <td class="ps-4 joblist-checkbox"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob24" value="" aria-label="..."></td>
                                                    <td>
                                                        <p class="fw-medium mb-0 d-flex align-items-center"><a href="{{url('job-details')}}">Full Stack Developer</a></p>
                                                        <span class="fs-12 text-muted"><i class="ri-pushpin-line"></i> Austin, TX</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm p-1 me-1 bg-success-transparent avatar-rounded">
                                                                <img src="{{asset('build/assets/images/company-logos/10.png')}}" alt="Innovate Solutions">
                                                            </span>
                                                            <a href="javascript:void(0);" class="fw-medium mb-0">Innovate Solutions</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Software
                                                    </td>
                                                    <td><span class="ms-3">50</span></td>
                                                    <td><span class="badge bg-success">Open</span></td>
                                                    <td>2024-09-05</td>
                                                    <td>10</td>
                                                    <td>Contract</td>
                                                    <td><i class="ri-close-circle-fill text-pink mx-1"></i>Dec 20 2024</td>
                                                    <td>
                                                        <a href="{{url('job-details')}}" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light">
                                                            <i class="ri-edit-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="joblist-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="joblist-list">
                                                    <td class="ps-4 joblist-checkbox"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob25" value="" aria-label="..." checked></td>
                                                    <td>
                                                        <p class="fw-medium mb-0 d-flex align-items-center"><a href="{{url('job-details')}}">UI/UX Designer</a></p>
                                                        <span class="fs-12 text-muted"><i class="ri-pushpin-line"></i> New York, NY</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm p-1 me-1 bg-primary-transparent avatar-rounded">
                                                                <img src="{{asset('build/assets/images/company-logos/6.png')}}" alt="Creative Minds">
                                                            </span>
                                                            <a href="javascript:void(0);" class="fw-medium mb-0">Creative Minds</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Design
                                                    </td>
                                                    <td><span class="ms-3">25</span></td>
                                                    <td><span class="badge bg-danger">Closed</span></td>
                                                    <td>2024-07-15</td>
                                                    <td>4</td>
                                                    <td>Freelance</td>
                                                    <td><i class="ri-close-circle-fill text-pink mx-1"></i>Nov 05 2024</td>
                                                    <td>
                                                        <a href="{{url('job-details')}}" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light">
                                                            <i class="ri-edit-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="joblist-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="joblist-list">
                                                    <td class="ps-4 joblist-checkbox"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob26" value="" aria-label="..."></td>
                                                    <td>
                                                        <p class="fw-medium mb-0 d-flex align-items-center"><a href="{{url('job-details')}}">DevOps Engineer</a></p>
                                                        <span class="fs-12 text-muted"><i class="ri-pushpin-line"></i> Seattle, WA</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm p-1 me-1 bg-warning-transparent avatar-rounded">
                                                                <img src="{{asset('build/assets/images/company-logos/1.png')}}" alt="Tech Savvy">
                                                            </span>
                                                            <a href="javascript:void(0);" class="fw-medium mb-0">Tech Savvy</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Operations
                                                    </td>
                                                    <td><span class="ms-3">60</span></td>
                                                    <td><span class="badge bg-success">Open</span></td>
                                                    <td>2024-09-12</td>
                                                    <td>7</td>
                                                    <td>Full Time</td>
                                                    <td><i class="ri-close-circle-fill text-pink mx-1"></i>Dec 01 2024</td>
                                                    <td>
                                                        <a href="{{url('job-details')}}" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light">
                                                            <i class="ri-edit-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="joblist-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="joblist-list">
                                                    <td class="ps-4 joblist-checkbox"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob27" value="" aria-label="..." checked></td>
                                                    <td>
                                                        <p class="fw-medium mb-0 d-flex align-items-center"><a href="{{url('job-details')}}">Data Scientist</a></p>
                                                        <span class="fs-12 text-muted"><i class="ri-pushpin-line"></i> Boston, MA</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm p-1 me-1 bg-pink-transparent avatar-rounded">
                                                                <img src="{{asset('build/assets/images/company-logos/3.png')}}" alt="DataPro Analytics">
                                                            </span>
                                                            <a href="javascript:void(0);" class="fw-medium mb-0">DataPro Analytics</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Analytics
                                                    </td>
                                                    <td><span class="ms-3">33</span></td>
                                                    <td><span class="badge bg-success">Open</span></td>
                                                    <td>2024-09-10</td>
                                                    <td>8</td>
                                                    <td>Full Time</td>
                                                    <td><i class="ri-close-circle-fill text-pink mx-1"></i>Nov 30 2024</td>
                                                    <td>
                                                        <a href="{{url('job-details')}}" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light">
                                                            <i class="ri-edit-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="joblist-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="joblist-list">
                                                    <td class="ps-4 joblist-checkbox"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob28" value="" aria-label="..."></td>
                                                    <td>
                                                        <p class="fw-medium mb-0 d-flex align-items-center"><a href="{{url('job-details')}}">Mobile App Developer</a></p>
                                                        <span class="fs-12 text-muted"><i class="ri-pushpin-line"></i> Denver, CO</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm p-1 me-1 bg-primary-transparent avatar-rounded">
                                                                <img src="{{asset('build/assets/images/company-logos/4.png')}}" alt="AppFusion Technologies">
                                                            </span>
                                                            <a href="javascript:void(0);" class="fw-medium mb-0">AppFusion Technologies</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Mobile Development
                                                    </td>
                                                    <td><span class="ms-3">28</span></td>
                                                    <td><span class="badge bg-warning">Pending</span></td>
                                                    <td>2024-09-15</td>
                                                    <td>3</td>
                                                    <td>Part Time</td>
                                                    <td><i class="ri-close-circle-fill text-pink mx-1"></i>Dec 15 2024</td>
                                                    <td>
                                                        <a href="{{url('job-details')}}" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light">
                                                            <i class="ri-edit-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="joblist-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer border-top-0">
                                    <div class="d-flex align-items-center flex-wrap overflow-auto">
                                        <div class="mb-2 mb-sm-0">
                                            Showing <b>1</b> to <b>7</b> of <b>25</b> entries <i class="bi bi-arrow-right ms-2 fw-medium"></i>
                                        </div>
                                        <div class="ms-auto">
                                            <ul class="pagination mb-0 overflow-auto">
                                                <li class="page-item disabled">
                                                    <a class="page-link">Previous</a>
                                                </li>
                                                <li class="page-item active" aria-current="page"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0);">2</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0);">Next</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Job list JS -->
        @vite('resources/assets/js/job-list.js')
        
    
@endsection