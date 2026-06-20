@extends('layouts.master')

@section('styles')

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">
      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Job Details</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Job Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xxl-9">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex gap-3 flex-wrap">
                                        <div class="adds-card rounded-3 overflow-hidden flex-shrink-0">
                                            <img src="{{asset('build/assets/images/media/media-88.jpg')}}" alt="" class="img-fluid">
                                        </div>
                                        <div class="flex-fill">
                                            <div class="d-flex flex-wrap align-items-top justify-content-between gap-2">
                                                <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);" class="fw-semibold">UX/UI Developer</a></h5>
                                                <div class="text-end ms-auto">
                                                    <a href="javascript:void(0);" class="btn mb-0 btn-primary btn-w-lg btn-sm"> Apply Now</a>
                                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Save" class="btn btn-sm mb-0 btn-icon btn-success btn-wave me-0">
                                                        <i class="ri-bookmark-line"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Share" class="btn btn-sm mb-0 btn-icon btn-info btn-wave me-0">
                                                        <i class="ri-share-line"></i>
                                                    </a>
                                                </div>
                                            </div>   
                                            <div class="d-flex mt-3 align-items-start gap-2 flex-wrap">
                                                <div class="avatar avatar-xl bg-secondary-transparent avatar-rounded border border-secondary border-opacity-10 flex-shrink-0">
                                                    <img src="{{asset('build/assets/images/company-logos/3.png')}}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="mb-2">Info. Techz Company <i class="bi bi-patch-check-fill text-success align-middle lh-1"></i></h6>
                                                    <span class="badge rounded-pill bg-light text-default fs-11 border">Expert</span>
                                                    <span class="badge rounded-pill bg-light text-default fs-11 border">Freelancer</span>
                                                    <span class="badge rounded-pill bg-light text-default fs-11 border">$15K-$20K</span>
                                                    <div class="popular-tags mt-3 d-flex gap-1 flex-wrap">
                                                        <span class="badge rounded-pill bg-info fs-11"><i class="ti ti-clock-hour-8 me-1 d-inline-block"></i>Full Time</span>
                                                        <span class="badge rounded-pill bg-secondary fs-11"><i class="ti ti-briefcase me-1 d-inline-block"></i>8 Openings</span>
                                                        <span class="badge rounded-pill bg-success fs-11"><i class="ti ti-building-skyscraper me-1 d-inline-block"></i>Onsite</span>
                                                    </div>
                                                </div>
                                                <div class="ms-auto align-self-end text-end">
                                                    <span class="ms-3 fw-medium"><i class="ri-pushpin-fill text-danger fs-15"></i> Location: <a href="javascript:void(0);" class="fw-normal">Los Angeles, CA. </a></span>
                                                    <span class="ms-3 fw-medium"><i class="ri-global-fill text-info fs-15 me-1 d-inline-block"></i>Website: <a href="javascript:void(0);" class="text-decoration-underline text-info fw-normal">www.infotechzcompy.com </a></span>
                                                    <p class="mb-0 mt-3"><i class="bi bi-info-circle text-warning fw-semibold" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="20 days left"></i> <span class="fw-medium">20 days</span> remaining to apply for this job.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="job-details">
                                        <div class="fs-15 fw-medium mb-2">Job Description:</div>
                                        <p class="text-muted mb-4">
                                            We are seeking a skilled UI Developer to join our dynamic team. The ideal candidate will play a crucial role in designing and implementing user interfaces for our web applications. This role requires a deep understanding of user-centered design principles and the ability to translate complex business requirements into intuitive and visually appealing web interfaces.
                                        </p>
                                        <p class="text-muted mb-4">
                                            As a UI Developer, you will work closely with our design and development teams to create responsive and interactive user interfaces. You will be responsible for ensuring that the web applications meet high standards of usability and performance. Your work will involve not only implementing designs but also iterating on them based on user feedback and usability testing.
                                        </p>
                                        <p class="text-muted mb-4">
                                            The successful candidate will have experience with modern frontend technologies, including HTML, CSS, JavaScript, and popular frameworks like React or Angular. You should also be familiar with version control systems and best practices for web development. Strong problem-solving skills and a keen eye for detail are essential for this role.
                                        </p>
                                        <p class="text-muted mb-4">
                                            If you are passionate about creating exceptional user experiences and thrive in a collaborative environment, we would love to hear from you. Join us and contribute to building innovative web applications that make a difference.
                                        </p>
                                        <div class="row mb-4">
                                            <div class="col-xl-6">
                                                <div class="fs-15 fw-medium mb-2">Key Responsibilities:</div>
                                                <ul class="job-details-responsibilities mb-0 list-unstyled">
                                                    <li class="mb-3"> <i class="ri-speed-fill fs-13 text-muted me-2"></i>Develop and implement UI components using modern frontend technologies.</li>
                                                    <li class="mb-3"> <i class="ri-speed-fill fs-13 text-muted me-2"></i>Collaborate with designers to translate wireframes and mockups into functional web interfaces.</li>
                                                    <li class="mb-3"> <i class="ri-speed-fill fs-13 text-muted me-2"></i>Optimize web pages for maximum speed and scalability.</li>
                                                    <li class="mb-3"> <i class="ri-speed-fill fs-13 text-muted me-2"></i>Conduct user research and usability testing to refine and enhance user interfaces.</li>
                                                    <li> <i class="ri-speed-fill fs-13 text-muted me-2"></i>Ensure cross-browser compatibility and mobile responsiveness.</li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="fs-15 fw-medium mb-2">Qualifications:</div>
                                                <ul class="list-group mb-0 list-group-flush">
                                                    <li class="list-group-item border-0 pb-1"><i class="ri-graduation-cap-fill fs-15 text-primary me-2"></i>Bachelor's degree in Computer Science or a related field.</li>
                                                    <li class="list-group-item border-0 pb-1"><i class="ri-code-fill fs-15 text-danger me-2"></i>Proficiency in HTML, CSS, JavaScript, and modern frameworks (e.g., React, Angular).</li>
                                                    <li class="list-group-item border-0 pb-1"><i class="ri-git-branch-fill fs-15 text-success me-2"></i>Experience with version control systems (e.g., Git).</li>
                                                    <li class="list-group-item border-0"><i class="ri-lightbulb-fill fs-15 text-secondary me-2"></i>Strong problem-solving skills and attention to detail.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-fill w-50">
                                                <span class="fw-medium d-block mb-1">Application Deadline:</span>
                                                <span class="d-block mb-0 text-muted fs-12">20 days remaining to apply.</span>
                                            </div>
                                            <div class="btn-list ms-auto">
                                                <button class="btn btn-sm btn-primary-light btn-wave waves-effect waves-light">Apply Now <i class="ri-file-download-line ms-1"></i></button>
                                                <button class="btn btn-sm btn-secondary-light btn-wave waves-effect waves-light">More Details <i class="ri-eye-line ms-1"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="card custom-card career-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                                <h5 class="fw-semibold mb-3 text-fixed-white">Find Your Next Career Opportunities</h5>
                                                <span class="text-muted mb-0 fs-14 text-fixed-white op-5">Find exciting job opportunities that match your skills and interests. Join us to make a difference!</span>
                                        </div>                            
                                        <div class="col-lg-6 text-end">
                                            <a href="javascript:void(0);" class="btn btn-success btn-lg" role="button">
                                                <i class="ri-search-line me-2 align-middle d-inline-block"></i>Browse Jobs
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="mb-1">
                                <h6 class="fw-medium mb-3">Similar Jobs</h6>
                                <div id="similar-jobs">
                                    <div class="card custom-card featured-jobs mb-3">
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
                                                    <div class="fs-12 fw-normal text-muted mb-0 text-truncate">Info. Techz Company <i class="bi bi-patch-check-fill text-success align-middle lh-1"></i></div>
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
                                    <div class="card custom-card featured-jobs mb-3">
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
                                                    <div class="fs-12 fw-normal text-muted mb-0 text-truncate">Creative Minds Inc. <i class="bi bi-patch-check-fill text-success align-middle lh-1"></i></div>
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
                                    <div class="card custom-card featured-jobs mb-3">
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
                                                    <div class="fs-12 fw-normal text-muted mb-0 text-truncate">Design Lab Co. <i class="bi bi-patch-check-fill text-success align-middle lh-1"></i></div>
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
                                    <div class="card custom-card featured-jobs mb-3">
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
                                                    <div class="fs-12 fw-normal text-muted mb-0 text-truncate">Tech Innovations Ltd. <i class="bi bi-patch-check-fill text-success align-middle lh-1"></i></div>
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
                                    <div class="card custom-card featured-jobs mb-3">
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
                                                    <div class="fs-12 fw-normal text-muted mb-0 text-truncate">Global Brands Inc. <i class="bi bi-patch-check-fill text-success align-middle lh-1"></i></div>
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
                                    <div class="btn btn-primary mb-3 d-grid">Load More Jobs</div>
                                </div>
                            </div>   
                            <div class="card custom-card mt-3">
                                <div class="card-body">
                                    <h6 class="fw-medium mb-3">Get Notified About New Job Opportunities</h6>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" placeholder="Enter your email address" aria-label="job-email" aria-describedby="job-subscribe">
                                        <button class="btn btn-primary" type="button" id="job-subscribe">Sign Up</button>
                                    </div>
                                    <label class="form-check-label fs-13">
                                        By signing up, you agree to our <a href="javascript:void(0);" class="text-success"><u>Terms of Service</u></a>.
                                    </label>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Swiper JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- job-details JS -->
        @vite('resources/assets/js/job-details.js')
        
    
@endsection