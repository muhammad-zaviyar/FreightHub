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
                        <h1 class="page-title fw-semibold fs-18 mb-0">Candidate Details</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Candidate Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xxl-8">
                            <div class="card custom-card job-candidate-details">
                                <div class="card-body border-bottom">
                                    <div class="d-flex gap-2 flex-xl-nowrap flex-wrap">
                                        <div class="lh-1 flex-shrink-0">
                                            <span class="avatar avatar-xxl avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" class="rounded-circle img-fluid" alt="">
                                            </span>
                                        </div>
                                        <div class="d-flex gap-2 flex-xl-nowrap flex-wrap mb-3 flex-grow-1">
                                            <div class="flex-fill">
                                                <h6 class="mb-1 fw-semibold"><a href="javascript:void(0);"> Annika <i class="bi bi-patch-check-fill text-success align-middle lh-1 mx-1" data-bs-toggle="tooltip" title="Verified candidate"></i></a></h6>
                                                <p class="mb-0 text-muted">Web Designer</p>
                                                <div class="d-flex flex-wrap gap-2 align-items-center fs-12 text-muted">
                                                    <p class="mb-0">Ratings : </p>
                                                    <div class="min-w-fit-content ms-2">
                                                        <span class="text-warning"><i class="ri-star-fill"></i></span>
                                                        <span class="text-warning"><i class="ri-star-fill"></i></span>
                                                        <span class="text-warning"><i class="ri-star-fill"></i></span>
                                                        <span class="text-warning"><i class="ri-star-fill"></i></span>
                                                        <span class="text-warning"><i class="ri-star-half-fill"></i></span>
                                                    </div>
                                                    <a href="javascript:void(0);" class="ms-1 min-w-fit-content text-muted">
                                                        <span>(245)</span>
                                                        <span>Ratings</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="btn-list ms-auto">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-wave waves-effect"><i class="ri-download-cloud-line me-1"></i> Download CV</a>
                                                <a href="javascript:void(0);" class="btn btn-success-light btn-icon btn-wave waves-effect waves-light align-middle">
                                                    <i class="ri-bookmark-line lh-1 my-auto align-middle"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-danger-light btn-wave waves-effect waves-light align-middle me-0">
                                                    <i class="ri-share-line my-auto align-middle"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="d-flex fs-14 mt-3 mb-2 gap-4 flex-wrap">
                                        <div class="fw-medium">
                                            <i class="ri-briefcase-line text-success fs-15"></i> Current: 
                                            <span class="fw-normal">InnovaTech Solutions</span>
                                        </div>
                                        <div class="fw-medium">
                                            <i class="ri-map-pin-line text-danger fs-15"></i> Location: 
                                            <span class="fw-normal">Silicon Valley, CA</span>
                                        </div>
                                        <div class="fw-medium">
                                            <i class="ri-briefcase-3-line text-secondary fs-15"></i> Experience: 
                                            <span class="fw-normal">3 Years</span>
                                        </div>
                                        <div class="fw-medium">
                                            <i class="ri-money-rupee-circle-line text-info fs-15"></i> Annual Pay: 
                                            <span class="fw-normal">$55,000 - $80,000</span>
                                        </div>
                                    </div>
                                    <div class="d-flex fs-14 gap-3 align-items-center flex-wrap">
                                        <div class="fw-medium">
                                            Availability: 
                                        </div>
                                        <div class="popular-tags d-flex gap-1 flex-wrap">
                                            <span class="badge rounded-pill fs-11 bg-info"><i class="ri-remote-control-line me-1"></i>Full Time</span>
                                            <span class="badge rounded-pill fs-11 bg-success"><i class="ri-time-line me-1"></i>Immediate Joinee</span>
                                            <span class="badge rounded-pill fs-11 bg-secondary"><i class="ri-calendar-line me-1"></i>Flexible Schedule</span>
                                        </div>
                                        <button class="btn btn-info label-btn btn-sm ms-auto">
                                            <i class="ri-phone-line label-btn-icon me-2"></i>
                                            Contact Now
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="fw-medium mb-2 fs-14">
                                        Skills: 
                                    </div>
                                    <div class="popular-tags d-flex gap-2 flex-wrap">
                                        <span class="badge rounded-pill bg-primary-transparent fs-11">JavaScript</span>
                                        <span class="badge rounded-pill bg-secondary-transparent fs-11">React</span>
                                        <span class="badge rounded-pill bg-success-transparent fs-11">HTML5</span>
                                        <span class="badge rounded-pill bg-info-transparent fs-11">CSS3</span>
                                        <span class="badge rounded-pill bg-pink-transparent fs-11">Responsive Design</span>
                                        <span class="badge rounded-pill bg-warning-transparent fs-11">Node.js</span>
                                        <span class="badge rounded-pill bg-primary-transparent fs-11">Git</span>
                                        <span class="badge rounded-pill bg-success-transparent fs-11">Webpack</span>
                                        <span class="badge rounded-pill bg-danger-transparent fs-11">API Integration</span>
                                        <span class="badge rounded-pill bg-info-transparent fs-11">Cross-Browser Compatibility</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <ul class="nav nav-tabs tab-style-1 d-sm-flex d-block bg-transparent mb-0 rounded-bottom-0" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile" href="#profile">Profile Info</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#personalinfo" aria-current="page" href="#personalinfo">Personal Info</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane p-0 active rounded-top-0" id="profile" role="tabpanel">
                                                <div class="card-body p-0 candidate-edu-timeline">
                                                    <div class="p-3 border-bottom">
                                                        <h5 class="fw-medium fs-17 d-flex align-items-center gap-2"><span class="avatar avatar-rounded bg-primary avatar-sm"><i class="ri-briefcase-4-line fs-13"></i></span> Career Objective :</h5>
                                                        <div class="ms-4 ps-3">
                                                            <p class="op-9">Innovative and detail-oriented Web Developer with a strong background in designing and implementing scalable web applications. Adept at using modern technologies and best practices to deliver responsive, high-performance websites and applications.</p>
                                                            <p class="mb-0 op-9">Seeking an exciting opportunity at a forward-thinking company where we can leverage my expertise in web development to build dynamic and user-centric web solutions. Committed to continuous learning and adapting to new technologies to drive success and achieve exceptional results.</p>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 border-bottom">
                                                        <div class="row">
                                                            <div class="col-xl-7">
                                                                <h5 class="fw-medium fs-17 d-flex align-items-center gap-2">
                                                                    <span class="avatar avatar-rounded bg-primary avatar-sm"><i class="ri-graduation-cap-line fs-13"></i></span>
                                                                    Academic Background :
                                                                </h5>
                                                                <div class="ms-4 ps-3">
                                                                    <div class="academic-item mb-3">
                                                                        <p class="fw-medium fs-14 mb-0">Bachelor of Science in Computer Science</p>
                                                                        <p class="text-muted mb-2">2020 Mar - 2024 Apr</p>
                                                                    </div>
                                                                    <div class="academic-item">
                                                                        <p class="fw-medium fs-14 mb-0">Intermediate (MPC)</p>
                                                                        <p class="text-muted mb-0">2017 Mar - 2020 Apr</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-5">
                                                                <h5 class="fw-medium fs-17 d-flex align-items-center gap-2"><span class="avatar avatar-rounded bg-primary avatar-sm"><i class="ri-graduation-cap-line fs-13"></i></span> Certifications :</h5>
                                                                <div class="ms-4 ps-3">
                                                                    <p class=""><span class="fs-14 fw-medium">Web Development (3 Mo)</span> - EMC Solutions Pvt Ltd</p>
                                                                    <p class="mb-0"><span class="fs-14 fw-medium">Python Development (6 Mo)</span> - Dabre Services Pvt Ltd</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3">
                                                        <h5 class="fw-medium fs-17 d-flex align-items-center gap-2 mb-3"><span class="avatar avatar-rounded bg-primary avatar-sm"><i class="ri-briefcase-4-line fs-13"></i></span> Experience :</h5>
                                                        <div class="ms-4 ps-3">
                                                            <h6 class="fw-medium fs-15 mb-1">Web Developer (2020 Mar - Present)</h6>
                                                            <p class="fw-medium mb-1">TechWave Solutions</p>
                                                            <p class="text-muted mb-3">Kondapur, Delhi</p>
                                                            <p class="fw-medium">Responsibilities:</p>
                                                            <ul class="list-unstyled mb-0">
                                                                <li><i class="ri-checkbox-circle-line text-success fs-14 me-2"></i> Develop and maintain web applications using modern web technologies, including HTML, CSS, and JavaScript frameworks.</li>
                                                                <li><i class="ri-checkbox-circle-line text-success fs-14 me-2"></i> Integrate APIs and third-party services to enhance application functionality.</li>
                                                                <li><i class="ri-checkbox-circle-line text-success fs-14 me-2"></i> Perform code reviews and maintain code quality standards to ensure high performance and reliability of web applications.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane p-0 rounded-top-0" id="personalinfo" role="tabpanel">  
                                                <div class="personal-details p-3">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p class="mb-2 p-1"><span class="fw-medium fs-14">Full Name:</span> Sarah Williams</p>
                                                            <p class="mb-2 p-1"><span class="fw-medium fs-14">Date of Birth:</span> April 15, 1990</p>
                                                            <p class="mb-2 p-1"><span class="fw-medium fs-14">Gender:</span> Female</p>
                                                            <p class="mb-2 p-1"><span class="fw-medium fs-14">Nationality:</span> American</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="mb-2 p-1"><span class="fw-medium fs-14">Contact Number:</span> +1 123-456-7890</p>
                                                            <p class="mb-2 p-1"><span class="fw-medium fs-14">Email:</span> sarah.williams@email.com</p>
                                                            <p class="mb-2 p-1"><span class="fw-medium fs-14">LinkedIn:</span> <a href="https://www.linkedin.com/in/sarahwilliams" target="_blank">linkedin.com/in/sarahwilliams</a></p>
                                                            <p class="mb-0 p-1"><span class="fw-medium fs-14">Website:</span> <a href="https://www.sarahwilliamsdesigns.com" target="_blank">sarahwilliamsdesigns.com</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body">
                                    <h6 class="fw-medium mb-3">Get Notified About New Job Opportunities</h6>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" placeholder="Enter Your Email Address" aria-label="job-email" aria-describedby="job-Signup">
                                        <button class="btn btn-primary" type="button" id="job-Signup">Sign Up</button>
                                    </div>
                                    <label class="form-check-label">
                                        By signing up, you accept our <a href="javascript:void(0);" class="text-success"><u>Terms of Service</u></a> and <a href="javascript:void(0);" class="text-success"><u>privacy policy</u></a>.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4">
                            <div class="" id="related-profiles">
                                <h6 class="fw-medium mb-3">Related Profiles</h6>
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light">
                                                <i class="ri-eye-line fs-13 lh-1 align-middle"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light">
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap mb-2 mt-3">
                                            <span class="badge rounded-pill bg-primary fs-11">Remote</span>
                                            <span class="badge rounded-pill bg-warning fs-11">Mid Level</span>
                                            <span class="badge rounded-pill bg-info fs-11">Design</span>
                                        </div>
                                        <div class="d-flex gap-3 mb-4">
                                            <div class="fw-medium">
                                                <i class="ri-map-pin-line text-danger fs-15"></i> 
                                                <span class="fw-normal">San Francisco, CA</span>
                                            </div>
                                            <div class="fw-medium">
                                                <i class="ri-wallet-3-line text-info fs-15"></i> 
                                                <span class="fw-normal">$80,000 - $100,000</span>
                                            </div>
                                            <div class="fw-medium">
                                                <i class="ri-time-line text-pink fs-15"></i> Type: 
                                                <span class="fw-normal">Contract</span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-primary-light btn-sm w-100">
                                            <i class="ri-download-cloud-line fs-14 me-2 d-inline-block"></i>
                                            Download Resume
                                        </a>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light">
                                                <i class="ri-eye-line fs-13 lh-1 align-middle"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light">
                                                <i class="ri-bookmark-line fs-13 lh-1 align-middle"></i>
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-start flex-wrap gap-2 mb-2">
                                            <span class="avatar avatar-lg bg-light shadow-sm border border-primary border-opacity-10 p-1 avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="Profile Picture">
                                            </span>
                                            <div class="ms-2">
                                                <h6 class="fw-medium mb-1 d-flex align-items-center">
                                                    Alex Johnson
                                                    <i class="bi bi-patch-check-fill text-success align-middle lh-1 mx-1" data-bs-toggle="tooltip" title="Verified"></i>
                                                </h6>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="fw-medium fs-12">
                                                        <i class="ri-briefcase-line text-muted fs-13"></i> Position: 
                                                        <span class="fw-normal">Web Developer</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap mb-2 mt-3">
                                            <span class="badge rounded-pill bg-primary fs-11">On-Site</span>
                                            <span class="badge rounded-pill bg-success fs-11">Senior Level</span>
                                            <span class="badge rounded-pill bg-info fs-11">Web Development</span>
                                        </div>
                                        <div class="d-flex gap-3 mb-4">
                                            <div class="fw-medium">
                                                <i class="ri-map-pin-line text-danger fs-15"></i> 
                                                <span class="fw-normal">Austin, TX</span>
                                            </div>
                                            <div class="fw-medium">
                                                <i class="ri-wallet-3-line text-info fs-15"></i> 
                                                <span class="fw-normal">$90,000 - $120,000</span>
                                            </div>
                                            <div class="fw-medium">
                                                <i class="ri-time-line text-pink fs-15"></i> Type: 
                                                <span class="fw-normal">Full-Time</span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-primary-light btn-sm w-100">
                                            <i class="ri-download-cloud-line fs-14 me-2 d-inline-block"></i>
                                            Download Resume
                                        </a>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light">
                                                <i class="ri-eye-line fs-13 lh-1 align-middle"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light">
                                                <i class="ri-bookmark-line fs-13 lh-1 align-middle"></i>
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-start flex-wrap gap-2 mb-2">
                                            <span class="avatar avatar-lg bg-light shadow-sm border border-primary border-opacity-10 p-1 avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="Profile Picture">
                                            </span>
                                            <div class="ms-2">
                                                <h6 class="fw-medium mb-1 d-flex align-items-center">
                                                    Emma Davis
                                                    <i class="bi bi-patch-check-fill text-success align-middle lh-1 mx-1" data-bs-toggle="tooltip" title="Verified"></i>
                                                </h6>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="fw-medium fs-12">
                                                        <i class="ri-briefcase-line text-muted fs-13"></i> Position: 
                                                        <span class="fw-normal">Front-End Developer</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap mb-2 mt-3">
                                            <span class="badge rounded-pill bg-secondary fs-11">Hybrid</span>
                                            <span class="badge rounded-pill bg-success fs-11">Senior Level</span>
                                            <span class="badge rounded-pill bg-primary fs-11">Front-End</span>
                                        </div>
                                        <div class="d-flex gap-3 mb-4">
                                            <div class="fw-medium">
                                                <i class="ri-map-pin-line text-danger fs-15"></i> 
                                                <span class="fw-normal">Seattle, WA</span>
                                            </div>
                                            <div class="fw-medium">
                                                <i class="ri-wallet-3-line text-info fs-15"></i> 
                                                <span class="fw-normal">$95,000 - $115,000</span>
                                            </div>
                                            <div class="fw-medium">
                                                <i class="ri-time-line text-purple fs-15"></i> Type: 
                                                <span class="fw-normal">Full-Time</span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-primary-light btn-sm w-100">
                                            <i class="ri-download-cloud-line fs-14 me-2 d-inline-block"></i>
                                            Download Resume
                                        </a>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light">
                                                <i class="ri-eye-line fs-13 lh-1 align-middle"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light">
                                                <i class="ri-bookmark-line fs-13 lh-1 align-middle"></i>
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-start flex-wrap gap-2 mb-2">
                                            <span class="avatar avatar-lg bg-light shadow-sm border border-primary border-opacity-10 p-1 avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="Profile Picture">
                                            </span>
                                            <div class="ms-2">
                                                <h6 class="fw-medium mb-1 d-flex align-items-center">
                                                    David Thompson
                                                    <i class="bi bi-patch-check-fill text-success align-middle lh-1 mx-1" data-bs-toggle="tooltip" title="Verified"></i>
                                                </h6>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="fw-medium fs-12">
                                                        <i class="ri-briefcase-line text-muted fs-13"></i> Position: 
                                                        <span class="fw-normal">Back-End Developer</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap mb-2 mt-3">
                                            <span class="badge rounded-pill bg-info fs-11">Remote</span>
                                            <span class="badge rounded-pill bg-danger fs-11">Lead</span>
                                            <span class="badge rounded-pill bg-warning fs-11">Back-End</span>
                                        </div>
                                        <div class="d-flex gap-3 mb-4">
                                            <div class="fw-medium">
                                                <i class="ri-map-pin-line text-danger fs-15"></i> 
                                                <span class="fw-normal">Boston, MA</span>
                                            </div>
                                            <div class="fw-medium">
                                                <i class="ri-wallet-3-line text-info fs-15"></i> 
                                                <span class="fw-normal">$110,000 - $140,000</span>
                                            </div>
                                            <div class="fw-medium">
                                                <i class="ri-time-line text-orange fs-15"></i> Type: 
                                                <span class="fw-normal">Full-Time</span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-primary-light btn-sm w-100">
                                            <i class="ri-download-cloud-line fs-14 me-2 d-inline-block"></i>
                                            Download Resume
                                        </a>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light">
                                                <i class="ri-eye-line fs-13 lh-1 align-middle"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light">
                                                <i class="ri-bookmark-line fs-13 lh-1 align-middle"></i>
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-start flex-wrap gap-2 mb-2">
                                            <span class="avatar avatar-lg bg-light shadow-sm border border-primary border-opacity-10 p-1 avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="Profile Picture">
                                            </span>
                                            <div class="ms-2">
                                                <h6 class="fw-medium mb-1 d-flex align-items-center">
                                                    Ava Johnson
                                                    <i class="bi bi-patch-check-fill text-success align-middle lh-1 mx-1" data-bs-toggle="tooltip" title="Verified"></i>
                                                </h6>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="fw-medium fs-12">
                                                        <i class="ri-briefcase-line text-muted fs-13"></i> Position: 
                                                        <span class="fw-normal">Full-Stack Developer</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap mb-2 mt-3">
                                            <span class="badge rounded-pill bg-primary fs-11">Remote</span>
                                            <span class="badge rounded-pill bg-danger fs-11">Senior Level</span>
                                            <span class="badge rounded-pill bg-success fs-11">Full-Stack</span>
                                        </div>
                                        <div class="d-flex gap-3 mb-4">
                                            <div class="fw-medium">
                                                <i class="ri-map-pin-line text-danger fs-15"></i> 
                                                <span class="fw-normal">Austin, TX</span>
                                            </div>
                                            <div class="fw-medium">
                                                <i class="ri-wallet-3-line text-info fs-15"></i> 
                                                <span class="fw-normal">$120,000 - $140,000</span>
                                            </div>
                                            <div class="fw-medium">
                                                <i class="ri-time-line text-blue fs-15"></i> Type: 
                                                <span class="fw-normal">Contract</span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-primary-light btn-sm w-100">
                                            <i class="ri-download-cloud-line fs-14 me-2 d-inline-block"></i>
                                            Download Resume
                                        </a>
                                    </div>
                                </div>
                                <div class="card custom-card mb-xxl-0">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-success-light">
                                                <i class="ri-eye-line fs-13 lh-1 align-middle"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-danger-light">
                                                <i class="ri-bookmark-line fs-13 lh-1 align-middle"></i>
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-start flex-wrap gap-2 mb-2">
                                            <span class="avatar avatar-lg bg-light shadow-sm border border-primary border-opacity-10 p-1 avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="Profile Picture">
                                            </span>
                                            <div class="ms-2">
                                                <h6 class="fw-medium mb-1 d-flex align-items-center">
                                                    Noah Martinez
                                                    <i class="bi bi-patch-check-fill text-success align-middle lh-1 mx-1" data-bs-toggle="tooltip" title="Verified"></i>
                                                </h6>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="fw-medium fs-12">
                                                        <i class="ri-briefcase-line text-muted fs-13"></i> Position: 
                                                        <span class="fw-normal">Software Engineer</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popular-tags d-flex gap-1 flex-wrap flex-xxl-nowrap mb-2 mt-3">
                                            <span class="badge rounded-pill bg-warning fs-11">Hybrid</span>
                                            <span class="badge rounded-pill bg-primary fs-11">Junior Level</span>
                                            <span class="badge rounded-pill bg-secondary fs-11">Engineering</span>
                                        </div>
                                        <div class="d-flex gap-3 mb-4">
                                            <div class="fw-medium">
                                                <i class="ri-map-pin-line text-danger fs-15"></i> 
                                                <span class="fw-normal">San Diego, CA</span>
                                            </div>
                                            <div class="fw-medium">
                                                <i class="ri-wallet-3-line text-info fs-15"></i> 
                                                <span class="fw-normal">$85,000 - $105,000</span>
                                            </div>
                                            <div class="fw-medium">
                                                <i class="ri-time-line text-teal fs-15"></i> Type: 
                                                <span class="fw-normal">Full-Time</span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-primary-light btn-sm w-100">
                                            <i class="ri-download-cloud-line fs-14 me-2 d-inline-block"></i>
                                            Download Resume
                                        </a>
                                    </div>
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

        <!-- Candidate Details JS -->
        @vite('resources/assets/js/job-candidate-details.js')
        

@endsection