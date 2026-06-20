@extends('layouts.master')

@section('styles')

        <!-- dragula css-->
        <link rel="stylesheet" href="{{asset('build/assets/libs/dragula/dragula.min.css')}}">
      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Project Overview</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Project Overview</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xxl-8">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex gap-2 justify-content-between mb-3 flex-wrap">
                                        <h6 class="mb-0 fw-semibold">Website Redesign</h6>
                                        <div class="btn btn-primary btn-sm btn-wave"> <i class="fe fe-edit lh-1 me-1"></i> Edit Project</div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col-xl-12">
                                            <p><span class="text-muted fw-medium">Project Title:</span> Website Redesign</p>
                                            <p><span class="text-muted fw-medium">Synopsis:</span> This project involves redesigning the company website to enhance user experience and improve functionality.</p>
                                            <div class="mb-3">
                                                <span class="text-muted fw-medium">Tags:</span> 
                                                <span class="badge rounded-pill bg-primary me-1">Design</span>
                                                <span class="badge rounded-pill bg-success me-1">Development</span>
                                                <span class="badge rounded-pill bg-info me-1">UX</span>
                                            </div>
                                            <div class="row gy-3 gy-xl-0">
                                                <div class="col-xl-5">
                                                    <p><span class="text-muted fw-medium">Lastupdated Date :</span> 22 Sep, 2024</p>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <span class="text-muted fw-medium">Team:</span> 
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-rounded align-center">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded align-center">
                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded align-center">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded align-center">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="d-flex gap-2 align-items-center mb-2">
                                                        <span class="text-muted fw-medium">Created By:</span> 
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <span class="avatar avatar-sm avatar-rounded align-center">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                            </span>
                                                            <span>Sonia Loe</span>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0"><span class="text-muted fw-medium">Total Tasks :</span> 84 Tasks (25 pending)</p>
                                                </div>
                                                <div class="col-xl-3">
                                                    <p class="mb-2"><span class="text-muted fw-medium">Priority :</span> <span class="badge bg-danger">High</span></p>
                                                    <p class="mb-0"><span class="text-muted fw-medium">Created Date :</span> 05 Sep, 2024</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body border border-dashed">
                                    <div class="row mx-0 rounded align-items-center">
                                        <div class="col-xl-5">
                                            <p class="text-dark mb-1"><span class="text-muted fw-medium">Status:</span> <span class="badge bg-pink me-1 fs-11">Active</span></p>
                                            <p class="mb-0 fs-12"><span class="text-muted fw-medium">Total Tasks :</span> 84 Tasks (25 pending)</p>
                                        </div>
                                        <div class="col-xl-7">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="progress w-100 bg-info bg-opacity-25 progress-lg" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                                        style="width: 75%"></div>
                                                </div>
                                                <div class="fw-medium text-dark text-nowrap fs-12">75% Completed</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body border-bottom border-top border-block-start-dashed border-block-end-dashed">
                                    <div class="d-flex gap-2 justify-content-between mb-3">
                                        <h6 class="mb-0 fw-semibold">Highlights :</h6>
                                    </div>
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-xl-6">
                                            <div class="card custom-card border border-success border-opacity-10 mb-0 shadow-none overflow-hidden">
                                                <div class="d-flex gap-2 p-3 bg-success-transparent align-items-center">
                                                    <h6 class="text-success mb-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="28px" height="28px" viewBox="0 0 26 26"><g fill="currentColor"><path d="M26 14c0 6.627-5.373 12-12 12S2 20.627 2 14S7.373 2 14 2s12 5.373 12 12" opacity="0.2"/><path d="M9.5 9a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0m0 4a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0m0 4a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0"/><path fill-rule="evenodd" d="M10.5 9.5A.5.5 0 0 1 11 9h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5m0 4a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5m0 4a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5" clip-rule="evenodd"/><path fill-rule="evenodd" d="M13 24.5c6.351 0 11.5-5.149 11.5-11.5S19.351 1.5 13 1.5S1.5 6.649 1.5 13S6.649 24.5 13 24.5m0 1c6.904 0 12.5-5.596 12.5-12.5S19.904.5 13 .5S.5 6.096.5 13S6.096 25.5 13 25.5" clip-rule="evenodd"/></g></svg>
                                                        Project Needs 
                                                    </h6>
                                                    <div class="ms-auto">
                                                        <a href="javascript:void(0);" class="text-success"><i class="ri-edit-2-line me-1"></i>Edit</a>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="task-details-key-tasks mb-0">
                                                        <li class="fs-11"> User Experience (UX) Improvement: Enhance usability.</li>
                                                        <li class="fs-11"> Visual Refresh: Modernize design to align with branding.</li>
                                                        <li class="fs-11"> Performance Enhancement: Optimize speed and functionality.</li>
                                                        <li class="fs-11"> Content Update: Revise content for relevance and readability.</li>
                                                        <li class="fs-11"> SEO Optimization: Implement strategies for better search rankings.</li>
                                                        <li class="fs-11"> Accessibility Compliance: Meet accessibility standards.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card custom-card border border-danger border-opacity-10 mb-0 shadow-none overflow-hidden">
                                                <div class="d-flex gap-2 p-3 bg-danger-transparent align-items-center">
                                                    <h6 class="text-danger mb-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="28px" height="28px" viewBox="0 0 26 26"><g fill="currentColor"><path d="M26 14c0 6.627-5.373 12-12 12S2 20.627 2 14S7.373 2 14 2s12 5.373 12 12" opacity="0.2"/><path fill-rule="evenodd" d="M9.175 5.5a.5.5 0 0 1 .5-.5h6.643a.5.5 0 0 1 .5.5v3.875a.5.5 0 0 1-.5.5H9.675a.5.5 0 0 1-.5-.5zm1 .5v2.875h5.643V6z" clip-rule="evenodd"/><path d="M7.5 8v12h11V8h-2V7h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-11a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h2v1z"/><path fill-rule="evenodd" d="M15.284 12.088a.5.5 0 0 1 .128.696l-1.767 2.564a1 1 0 0 1-1.437.222l-1.515-1.175a.5.5 0 1 1 .614-.79l1.514 1.175l1.767-2.564a.5.5 0 0 1 .696-.128" clip-rule="evenodd"/><path fill-rule="evenodd" d="M13 24.5c6.351 0 11.5-5.149 11.5-11.5S19.351 1.5 13 1.5S1.5 6.649 1.5 13S6.649 24.5 13 24.5m0 1c6.904 0 12.5-5.596 12.5-12.5S19.904.5 13 .5S.5 6.096.5 13S6.096 25.5 13 25.5" clip-rule="evenodd"/></g></svg>
                                                        Project Objectives 
                                                    </h6>
                                                    <div class="ms-auto">
                                                        <a href="javascript:void(0);" class="text-danger"><i class="ri-edit-2-line me-1"></i>Edit</a>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="task-details-key-tasks mb-0">
                                                        <li> Enhance User Engagement: Increase interaction and conversion rates.</li>
                                                        <li> Modernize Brand Presence: Reflect updated brand identity.</li>
                                                        <li> Improve Website Performance: Achieve faster load times.</li>
                                                        <li> Increase Organic Traffic: Boost search engine rankings.</li>
                                                        <li> Ensure Accessibility: Make the site accessible to all users.</li>
                                                        <li> Maintain Security: Protect user data and ensure cybersecurity.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex gap-2 justify-content-between mb-3">
                                        <h6 class="mb-0 fw-semibold">Activity :</h6>
                                    </div>
                                    <ul class="nav nav-tabs tab-style-1 d-sm-flex d-block bg-primary-transparent mb-0 rounded-bottom-0" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#recent-acivity"
                                                aria-current="page" href="#recent-acivity">Recent Acivity</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#allfiles"
                                                href="#allfiles">All Shared Files</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane p-0 active rounded-top-0" id="recent-acivity" role="tabpanel">  
                                            <ul class="list-unstyled profile-timeline pt-3 pe-3 pb-3">
                                                <li> 
                                                    <div>
                                                        <span class="avatar avatar-sm shadow-sm bg-success avatar-rounded profile-timeline-avatar">
                                                            R
                                                        </span>
                                                        <div class="mb-2 d-flex align-items-start gap-2 flex-wrap flex-xxl-nowrap">
                                                            <div>
                                                                <span class="fw-medium">User Research Completed</span>
                                                            </div>
                                                            <span class="ms-auto bg-light text-muted badge">02,Sep 2024 - 10:15</span>
                                                        </div>
                                                        <p class="text-muted mb-0">
                                                            Conducted surveys and interviews to gather insights on user needs and preferences.
                                                        </p>
                                                    </div>
                                                </li>
                                                
                                                <li> 
                                                    <div>
                                                        <span class="avatar avatar-sm shadow-sm bg-info avatar-rounded profile-timeline-avatar">
                                                            D
                                                        </span>
                                                        <div class="mb-2 d-flex align-items-start gap-2 flex-wrap flex-xxl-nowrap">
                                                            <div>
                                                                <span class="fw-medium">Design Mockups Reviewed</span>
                                                            </div>
                                                            <span class="ms-auto bg-light text-muted badge">10,Sep 2024 - 14:30</span>
                                                        </div>
                                                        <p class="text-muted mb-0">
                                                            Presented initial design concepts and received feedback from stakeholders. <a class="text-pink" href="javascript:void(0);">View Details Here</a>
                                                        </p>
                                                    </div>
                                                </li>
                                                
                                                <li> 
                                                    <div>
                                                        <span class="avatar avatar-sm shadow-sm bg-warning avatar-rounded profile-timeline-avatar">
                                                            C
                                                        </span>
                                                        <div class="mb-2 d-flex align-items-start gap-2 flex-wrap flex-xxl-nowrap">
                                                            <div>
                                                                <span class="fw-medium">Content Audit Conducted</span>
                                                            </div>
                                                            <span class="ms-auto bg-light text-muted badge">15,Sep 2024 - 09:00</span>
                                                        </div>
                                                        <p class="text-muted mb-0">
                                                            Reviewed existing content for relevance and accuracy, identifying areas for update.
                                                        </p>
                                                    </div>
                                                </li>
                                                
                                                <li> 
                                                    <div>
                                                        <span class="avatar avatar-sm shadow-sm bg-danger avatar-rounded profile-timeline-avatar">
                                                            S
                                                        </span>
                                                        <div class="mb-2 d-flex align-items-start gap-2 flex-wrap flex-xxl-nowrap">
                                                            <div>
                                                                <span class="fw-medium">SEO Analysis Performed</span>
                                                            </div>
                                                            <span class="ms-auto bg-light text-muted badge">20,Sep 2024 - 11:45</span>
                                                        </div>
                                                        <p class="text-muted mb-0">
                                                            Analyzed current SEO performance and identified key areas for improvement.
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane p-0 rounded-top-0" id="allfiles" role="tabpanel">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                                        <span class="avatar avatar-sm bg-light lh-1">
                                                            <img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="">
                                                        </span>
                                                        <div class="flex-fill">
                                                            <a href="javascript:void(0);"><span class="d-block fw-medium">Project Proposal.pdf</span></a>
                                                            <span class="d-block text-muted fs-12 fw-normal">1.2MB</span>
                                                        </div>
                                                        <div class="btn-list">
                                                            <button class="btn btn-sm btn-icon btn-info-light btn-wave waves-effect waves-light"><i class="ri-edit-line"></i></button>
                                                            <button class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                                        <span class="avatar avatar-sm bg-info lh-1">
                                                            <img src="{{asset('build/assets/images/media/file-manager/2.png')}}" alt="">
                                                        </span>
                                                        <div class="flex-fill">
                                                            <a href="javascript:void(0);"><span class="d-block fw-medium">Functional Requirements.docx</span></a>
                                                            <span class="d-block text-muted fs-12 fw-normal">850KB</span>
                                                        </div>
                                                        <div class="btn-list">
                                                            <button class="btn btn-sm btn-icon btn-info-light btn-wave waves-effect waves-light"><i class="ri-edit-line"></i></button>
                                                            <button class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                                        <span class="avatar avatar-sm bg-light lh-1">
                                                            <img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="">
                                                        </span>
                                                        <div class="flex-fill">
                                                            <a href="javascript:void(0);"><span class="d-block fw-medium">System Architecture.pdf</span></a>
                                                            <span class="d-block text-muted fs-12 fw-normal">2.5MB</span>
                                                        </div>
                                                        <div class="btn-list">
                                                            <button class="btn btn-sm btn-icon btn-info-light btn-wave waves-effect waves-light"><i class="ri-edit-line"></i></button>
                                                            <button class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                                        <span class="avatar avatar-sm bg-primary lh-1">
                                                            <img src="{{asset('build/assets/images/media/file-manager/3.png')}}" alt="">
                                                        </span>
                                                        <div class="flex-fill">
                                                            <a href="javascript:void(0);"><span class="d-block fw-medium">Meeting Minutes.zip</span></a>
                                                            <span class="d-block text-muted fs-12 fw-normal">300KB</span>
                                                        </div>
                                                        <div class="btn-list">
                                                            <button class="btn btn-sm btn-icon btn-info-light btn-wave waves-effect waves-light"><i class="ri-edit-line"></i></button>
                                                            <button class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4">
                            <div class="card custom-card justify-content-between">
                                <div class="card-header">
                                    <div class="card-title">Project Messages</div>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-3 bg-light p-3">
                                            <div class="d-flex gap-2 flex-wrap">
                                                <span class="avatar avatar-sm shadow-sm bg-success avatar-rounded flex-shrink-0">
                                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Sarah Johnson">
                                                </span>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-start gap-2 mb-2 flex-wrap">
                                                        <div class="fw-medium">
                                                            <div class="text-truncate mb-1">User Research Findings Presented</div>
                                                            <span class="bg-success-transparent badge">02,Sep 2024 - 10:15 AM</span>
                                                        </div>
                                                        <span class="ms-auto fs-12 text-nowrap">1 hr ago</span>
                                                    </div>
                                                    <p class="text-muted mb-0 fs-12">
                                                        Sarah Johnson shared insights from user surveys.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <li class="mb-3 p-3">
                                            <div class="d-flex gap-2 flex-wrap">
                                                <span class="avatar avatar-sm shadow-sm bg-info avatar-rounded flex-shrink-0">
                                                    <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="David Smith">
                                                </span>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-start gap-2 mb-2 flex-wrap">
                                                        <div class="fw-medium">
                                                            <div class="text-truncate mb-1">Initial Design Concepts Approved</div>
                                                            <span class="bg-info-transparent badge">10,Sep 2024 - 03:30 PM</span>
                                                        </div>
                                                        <span class="ms-auto fs-12 text-nowrap">4 hrs ago</span>
                                                    </div>
                                                    <p class="text-muted mb-0 fs-12">
                                                        David Smith approved the initial design mockups.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <li class="mb-3 bg-light p-3">
                                            <div class="d-flex gap-2 flex-wrap">
                                                <span class="avatar avatar-sm shadow-sm bg-warning avatar-rounded flex-shrink-0">
                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="Emily Davis">
                                                </span>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-start gap-2 mb-2 flex-wrap">
                                                        <div class="fw-medium">
                                                            <div class="text-truncate mb-1">Content Review and Update</div>
                                                            <span class="bg-warning-transparent badge">15,Sep 2024 - 09:00 AM</span>
                                                        </div>
                                                        <span class="ms-auto fs-12 text-nowrap">6 hrs ago</span>
                                                    </div>
                                                    <p class="text-muted mb-0 fs-12">
                                                        Emily Davis completed the content audit and update.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <li class="mb-3 p-3">
                                            <div class="d-flex gap-2 flex-wrap">
                                                <span class="avatar avatar-sm shadow-sm bg-danger avatar-rounded flex-shrink-0">
                                                    <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="Michael Brown">
                                                </span>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-start gap-2 mb-2 flex-wrap">
                                                        <div class="fw-medium">
                                                            <div class="text-truncate mb-1">SEO Strategy Recommendations</div>
                                                            <span class="bg-danger-transparent badge">20,Sep 2024 - 11:45 AM</span>
                                                        </div>
                                                        <span class="ms-auto fs-12 text-nowrap">8 hrs ago</span>
                                                    </div>
                                                    <p class="text-muted mb-0 fs-12">
                                                        Michael Brown provided recommendations for SEO.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <li class="bg-light p-3">
                                            <div class="d-flex gap-2 flex-wrap">
                                                <span class="avatar avatar-sm shadow-sm bg-secondary avatar-rounded flex-shrink-0">
                                                    <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="Jessica Green">
                                                </span>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-start gap-2 mb-2 flex-wrap">
                                                        <div class="fw-medium">
                                                            <div class="text-truncate mb-1">Accessibility Compliance Check</div>
                                                            <span class="bg-success-transparent badge">25,Sep 2024 - 01:00 PM</span>
                                                        </div>
                                                        <span class="ms-auto fs-12 text-nowrap">12 hrs ago</span>
                                                    </div>
                                                    <p class="text-muted mb-0 fs-12">
                                                        Jessica Green initiated accessibility testing.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer">
                                    <div class="d-sm-flex align-items-center lh-1">
                                        <div class="me-sm-2 mb-2 mb-sm-0 rounded-circle bg-primary-transparent d-inline-block">
                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="" class="avatar avatar-md avatar-rounded p-1 bg-primary-transparent">
                                        </div>
                                        <div class="flex-fill">
                                            <div class="input-group flex-nowrap">
                                                <input type="text" class="form-control w-sm-50 border shadow-none" placeholder="Share your thoughts" aria-label="Recipient's username with two button addons">
                                                <button class="btn btn-primary-light btn-wave waves-effect waves-light" type="button"><i class="bi bi-emoji-smile"></i></button>
                                                <button class="btn btn-primary-light btn-wave waves-effect waves-light" type="button"><i class="bi bi-paperclip"></i></button>
                                                <button class="btn btn-primary-light btn-wave waves-effect waves-light" type="button"><i class="bi bi-camera"></i></button>
                                                <button class="btn btn-primary btn-wave waves-effect waves-light text-nowrap" type="button">Post</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Team
                                    </div>
                                    <div class="ms-auto">
                                        <div class="badge bg-info rounded-pill ms-auto">4 People</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <div class="d-flex gap-2 align-items-center">
                                            <span class="avatar avatar-md shadow-sm bg-primary avatar-rounded flex-shrink-0">
                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="John Doe">
                                            </span>
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-start gap-2">
                                                    <div class="fw-medium">
                                                        <div class="text-truncate mb-0">John Doe</div>
                                                        <span class="text-muted fs-12">Project Manager</span>
                                                    </div>
                                                    <button class="btn btn-icon btn-success-light rounded-circle ms-auto"><i class="ri-mail-line lh-1 align-middle"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex gap-2 align-items-center">
                                            <span class="avatar avatar-md shadow-sm bg-primary avatar-rounded flex-shrink-0">
                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="Jane Smith">
                                            </span>
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-start gap-2">
                                                    <div class="fw-medium">
                                                        <div class="text-truncate mb-0">Jane Smith</div>
                                                        <span class="text-muted fs-12">Lead Developer</span>
                                                    </div>
                                                    <button class="btn btn-icon btn-success-light rounded-circle ms-auto"><i class="ri-mail-line lh-1 align-middle"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex gap-2 align-items-center">
                                            <span class="avatar avatar-md shadow-sm bg-primary avatar-rounded flex-shrink-0">
                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="Emily Johnson">
                                            </span>
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-start gap-2">
                                                    <div class="fw-medium">
                                                        <div class="text-truncate mb-0">Emily Johnson</div>
                                                        <span class="text-muted fs-12">UI Designer</span>
                                                    </div>
                                                    <button class="btn btn-icon btn-success-light rounded-circle ms-auto"><i class="ri-mail-line lh-1 align-middle"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex gap-2 align-items-center">
                                            <span class="avatar avatar-md shadow-sm bg-primary avatar-rounded flex-shrink-0">
                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Michael Brown">
                                            </span>
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-start gap-2">
                                                    <div class="fw-medium">
                                                        <div class="text-truncate mb-0">Michael Brown</div>
                                                        <span class="text-muted fs-12">QA Tester</span>
                                                    </div>
                                                    <button class="btn btn-icon btn-success-light rounded-circle ms-auto"><i class="ri-mail-line lh-1 align-middle"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn btn-primary-light btn-sm w-100">Invite New Member</div>
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

        <!-- Dragula JS -->
        <script src="{{asset('build/assets/libs/dragula/dragula.min.js')}}"></script>
    
@endsection