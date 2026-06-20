@extends('layouts.master')

@section('styles')

      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Task Details</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Task Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xxl-9">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex gap-2 mb-4 align-items-center"> 
                                        <h5 class="fw-medium mb-0">
                                            Upgrade Web Performance <span class="badge bg-success align-middle fs-10 fw-medium">Active</span>
                                        </h5>
                                        <button type="button" aria-label="button" class="btn btn-sm btn-primary btn-wave waves-effect waves-light ms-auto"><i class="ri-edit-line"></i> Edit Task</button>
                                    </div>
                                    <div class="fs-15 fw-medium mb-2">Task Description :</div>
                                    <p class="text-muted mb-4">Enhance the website's overall performance by optimizing loading times, improving security, and ensuring a seamless user experience. Focus on implementing advanced performance metrics and security features.</p>
                                    <div class="row mb-3">
                                        <div class="col-xl-6">
                                            <div class="fs-15 fw-medium mb-2">Key Tasks :</div>
                                            <ul class="task-details-key-tasks mb-0">
                                                <li>Analyze current website performance and identify bottlenecks.</li>
                                                <li>Implement caching strategies to speed up page load times.</li>
                                                <li>Upgrade security protocols to safeguard user data.</li>
                                                <li>Optimize images and media for faster loading.</li>
                                                <li>Conduct performance testing and adjust configurations as needed.</li>
                                                <li>Deploy improvements and monitor impact on user experience.</li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <div class="fs-15 fw-medium">Sub Tasks :</div>
                                                <a href="javascript:void(0);" class="btn btn-info-light btn-wave btn-sm waves-effect waves-light">See More</a>
                                            </div>
                                            <ul class="list-group mb-0">
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <i class="ti ti-check fs-15 text-secondary lh-1 p-1 bg-secondary-transparent rounded-circle"></i>
                                                        </div>
                                                        <div class="fw-medium">Research best practices for website optimization.</div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <i class="ti ti-check fs-15 text-secondary lh-1 p-1 bg-secondary-transparent rounded-circle"></i>
                                                        </div>
                                                        <div class="fw-medium">Conduct performance analysis to identify site speed.</div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <i class="ti ti-check fs-15 text-secondary lh-1 p-1 bg-secondary-transparent rounded-circle"></i>
                                                        </div>
                                                        <div class="fw-medium">Prepare a performance improvement plan and timeline.</div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <i class="ti ti-check fs-15 text-secondary lh-1 p-1 bg-secondary-transparent rounded-circle"></i>
                                                        </div>
                                                        <div class="fw-medium">Test website across different devices and browsers.</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>    
                                    <div class="row pt-1 gy-3 gy-xl-0">
                                        <div class="col-xl-6">                            
                                            <div class="fs-15 fw-medium mb-2">Uploads :</div>
                                            <div class="d-flex gap-2 mb-0 flex-wrap">
                                                <a aria-label="anchor" href="javascript:void(0);" class="avatar avatar-xl">
                                                    <img src="{{asset('build/assets/images/media/media-37.jpg')}}" alt="File 1">
                                                </a>
                                                <a aria-label="anchor" href="javascript:void(0);" class="avatar avatar-xl">
                                                    <img src="{{asset('build/assets/images/media/media-38.jpg')}}" alt="File 2">
                                                </a>
                                                <a aria-label="anchor" href="javascript:void(0);" class="avatar avatar-xl">
                                                    <img src="{{asset('build/assets/images/media/media-39.jpg')}}" alt="File 3">
                                                </a>
                                                <a aria-label="anchor" href="javascript:void(0);" class="avatar avatar-xl">
                                                    <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="File 4">
                                                </a>
                                                <a aria-label="anchor" href="javascript:void(0);" class="avatar avatar-xl">
                                                    <img src="{{asset('build/assets/images/media/media-41.jpg')}}" alt="File 5">
                                                </a>
                                                <a aria-label="anchor" href="javascript:void(0);" class="avatar avatar-xl bg-primary text-fixed-white">
                                                    +2
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="d-flex gap-2 mb-3">
                                                <div class="fs-14 fw-medium">Created Date :</div>
                                                <div class="text-muted">10 September,2024</div>
                                            </div>
                                            <div class="d-flex gap-2 mb-3">
                                                <div class="fs-14 fw-medium">Last Updated Date :</div>
                                                <div class="text-muted">18 September,2024</div>
                                            </div>
                                            <div class="d-flex gap-2">
                                                <div class="fs-14 fw-medium">Total Attachments :</div>
                                                <div class="text-muted">6 Attachments</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Comments
                                    </div>
                                    <div class="badge bg-success">3 New</div>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-start gap-3 flex-wrap">
                                                <div>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill w-50">
                                                    <span class="fw-medium d-block">Sophia Reed</span>
                                                    <span class="d-block mb-2 text-muted fs-12 text-truncate">Reviewed the code and identified potential performance issues.</span>
                                                    <div class="">
                                                        <button class="btn btn-sm btn-primary-light btn-wave waves-effect waves-light mb-1">Reply <i class="ri-reply-line ms-1"></i></button>
                                                        <button class="btn btn-sm btn-secondary-light btn-wave waves-effect waves-light mb-1">View Details <i class="ri-eye-line ms-1"></i></button>
                                                    </div>
                                                </div>
                                                <div class="btn-list">
                                                    <button class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light"><i class="ri-thumb-up-line"></i></button>
                                                    <button class="btn btn-icon btn-sm btn-secondary-light btn-wave waves-effect waves-light"><i class="ri-thumb-down-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-start gap-3 flex-wrap">
                                                <div>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill w-50">
                                                    <span class="fw-medium d-block">Alex Johnson</span>
                                                    <span class="d-block mb-2 text-muted fs-12 text-truncate">Completed initial testing of the new feature and found minor.</span>
                                                    <div class="d-flex align-items-center gap-2 mb-3">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="avatar avatar-md">
                                                            <img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="Document">
                                                        </a>
                                                        <span class="fs-11 text-muted">556.76KB</span>
                                                    </div>
                                                    <div class="">
                                                        <button class="btn btn-sm btn-primary-light btn-wave waves-effect waves-light mb-1">Reply <i class="ri-reply-line ms-1"></i></button>
                                                        <button class="btn btn-sm btn-secondary-light btn-wave waves-effect waves-light mb-1">View Details <i class="ri-eye-line ms-1"></i></button>
                                                    </div>
                                                </div>
                                                <div class="btn-list">
                                                    <button class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light"><i class="ri-thumb-up-line"></i></button>
                                                    <button class="btn btn-icon btn-sm btn-secondary-light btn-wave waves-effect waves-light"><i class="ri-thumb-down-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-start gap-3 flex-wrap">
                                                <div>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill w-50">
                                                    <span class="fw-medium d-block">Even Williams</span>
                                                    <span class="d-block mb-2 text-muted fs-12 text-truncate">Attached the updated wireframe designs based on feedback.</span>
                                                    <div class="">
                                                        <button class="btn btn-sm btn-primary-light btn-wave waves-effect waves-light mb-1">Reply <i class="ri-reply-line ms-1"></i></button>
                                                        <button class="btn btn-sm btn-secondary-light btn-wave waves-effect waves-light mb-1">View Details <i class="ri-eye-line ms-1"></i></button>
                                                    </div>
                                                </div>
                                                <div class="btn-list">
                                                    <button class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light"><i class="ri-thumb-up-line"></i></button>
                                                    <button class="btn btn-icon btn-sm btn-secondary-light btn-wave waves-effect waves-light"><i class="ri-thumb-down-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer rounded">
                                    <div class="d-sm-flex align-items-center lh-1">
                                        <div class="me-sm-3 mb-2 mb-sm-0">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill me-sm-2">
                                            <div class="input-group">
                                                <input type="text" class="form-control shadow-none border" placeholder="Write Comment" aria-label="Recipient's username with two button addons">
                                                <button type="button" aria-label="button" class="btn btn-outline-light border btn-wave waves-effect waves-light"><i class="bi bi-paperclip"></i></button>
                                                <button type="button" aria-label="button" class="btn btn-outline-light border btn-wave waves-effect waves-light"><i class="bi bi-camera"></i></button>
                                                <button class="btn btn-primary btn-wave waves-effect waves-light" type="button">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!--Start::row-2 -->
                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between border-bottom-0 pb-0">
                                    <div class="card-title">
                                        Recent Activity
                                    </div>
                                </div>
                                <div class="card-body ps-0">
                                    <ul class="list-unstyled profile-timeline mb-3">
                                        <li>
                                            <div>
                                                <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="Emma">
                                                </span>
                                                <p class="text-muted mb-2">
                                                    <span class="text-default">
                                                        <span class="fw-medium">Emma</span> uploaded a new wireframe design for the homepage layout.
                                                    </span>
                                                    <span class="float-end fs-11 badge bg-light text-muted">16, September 2024 - 09:45</span>
                                                </p>
                                                <p class="text-muted mb-2 fs-12">
                                                    "This wireframe covers the new responsive layout for both mobile and desktop views. Please provide feedback."
                                                </p>
                                                <p class="profile-activity-media mb-0">
                                                    <a aria-label="anchor" href="javascript:void(0);">
                                                        <img src="{{asset('build/assets/images/media/file-manager/4.png')}}" alt="Wireframe Image" class="bg-light mb-0">
                                                    </a>
                                                    <span class="fs-11 text-muted">120.45KB</span>
                                                </p>
                                            </div>
                                        </li>                                    
                                        <li>
                                            <div>
                                                <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="Oliver">
                                                </span>
                                                <p class="text-muted mb-2">
                                                    <span class="text-default">
                                                        <span class="fw-medium">Oliver</span> updated the performance metrics document with
                                                        <span class="fw-medium">you</span>.
                                                    </span>
                                                    <span class="float-end fs-11 badge bg-light text-muted">15, September 2024 - 11:30</span>
                                                </p>
                                                <p class="text-muted mb-2 fs-12">
                                                    "The updated metrics document now includes the latest performance benchmarks and security enhancements."
                                                </p>
                                                <div class="d-flex align-items-center gap-2">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="avatar avatar-sm">
                                                        <img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="Document">
                                                    </a>
                                                    <span class="fs-11 text-muted">340.76KB</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span class="avatar avatar-sm bg-secondary avatar-rounded profile-timeline-avatar">
                                                    S
                                                </span>
                                                <p class="text-muted mb-2">
                                                    <span class="text-default">
                                                        <span class="fw-medium">You</span> shared the performance improvement plan with 5 team members, including
                                                        <span class="fw-medium">Ethan, Olivia, Noah, Isabella</span>.
                                                    </span>
                                                    <span class="float-end fs-11 badge bg-light text-muted">14, September 2024 - 16:05</span>
                                                </p>
                                                <p class="profile-activity-media mb-2">
                                                    <a aria-label="anchor" href="javascript:void(0);">
                                                        <img src="{{asset('build/assets/images/media/media-17.jpg')}}" alt="Plan Image" class="m-0 mt-1">
                                                    </a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="Liam">
                                                </span>
                                                <p class="text-muted mb-2">
                                                    <span class="text-default">
                                                        <span class="fw-medium">Liam</span> commented on the performance enhancement strategy.
                                                    </span>
                                                    <span class="float-end fs-11 badge bg-light text-muted">13, September 2024 - 10:00</span>
                                                </p>
                                                <p class="text-muted mb-0 fs-12">
                                                    "The new strategy looks promising.feedback by tomorrow."
                                                    <span class="avatar-list-stacked ms-2">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="User 1">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="User 2">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="User 3">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="User 4">
                                                        </span>
                                                        4 Team members reacted
                                                    </span>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>                                
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header">
                                    <div class="card-title">
                                        Task Info
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <tbody>
                                                <tr>
                                                    <td><span class="fw-medium">Task ID :</span></td>
                                                    <td>#SPRU667</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-medium">Task Tags :</span></td>
                                                    <td>
                                                        <span class="badge bg-info-transparent">Marketing</span>
                                                        <span class="badge bg-success-transparent">UI</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium">Assigned By :</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <span class="d-block fs-14 fw-medium">Glory</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium">Progress :</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress progress-sm progress-animate flex-fill me-2" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" style="width: 75%"></div>
                                                            </div>
                                                            <div class="text-muted fs-11">75%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-medium">Status :</span></td>
                                                    <td>
                                                        <span class="fw-medium text-muted">Inprogress<i class="bi bi-bar-chart-fill mx-1 text-pink"></i></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-medium">Priority :</span></td>
                                                    <td>
                                                        <span class="badge bg-success"><i class="ti ti-pennant-2 fs-12"></i> Low</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-medium">Start Date :</span></td>
                                                    <td>
                                                        13, June 2024
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-medium">End Date :</span></td>
                                                    <td>
                                                        31, Dec 2024
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-medium">Assignees :</span></td>
                                                    <td>
                                                        <div class="avatar-list-stacked mb-1">
                                                            <span class="avatar avatar-xs avatar-rounded" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-original-title="Simon">
                                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="Sony">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-original-title="Sasha">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Vinnu">
                                                            </span>
                                                            <span class="avatar avatar-xs avatar-rounded" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-original-title="Hishen">
                                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="kaithi">
                                                            </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header">
                                    <div class="card-title">
                                        Attachments list
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-primary-light ms-auto btn-sm mt-1"> View More</a>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center flex-wrap gap-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-sm">
                                                        <img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);"><span class="d-block fw-medium">Review Project</span></a>
                                                    <span class="d-block text-muted fs-12 fw-normal">0.68MB</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-info-light btn-wave"><i class="ri-edit-line"></i></button>
                                                    <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-danger-light btn-wave"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center flex-wrap gap-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-sm">
                                                        <img src="{{asset('build/assets/images/media/file-manager/3.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);"><span class="d-block fw-medium">assets.zip</span></a>
                                                    <span class="d-block text-muted fs-12 fw-normal">0.45MB</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-info-light btn-wave"><i class="ri-edit-line"></i></button>
                                                    <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-danger-light btn-wave"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center flex-wrap gap-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-sm">
                                                        <img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);"><span class="d-block fw-medium">images_205</span></a>
                                                    <span class="d-block text-muted fs-12 fw-normal">1.2MB</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-info-light btn-wave"><i class="ri-edit-line"></i></button>
                                                    <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-danger-light btn-wave"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center flex-wrap gap-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-sm">
                                                        <img src="{{asset('build/assets/images/media/file-manager/3.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);"><span class="d-block fw-medium">documentation.zip</span></a>
                                                    <span class="d-block text-muted fs-12 fw-normal">2MB</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-info-light btn-wave"><i class="ri-edit-line"></i></button>
                                                    <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-danger-light btn-wave"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center flex-wrap gap-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-sm">
                                                        <img src="{{asset('build/assets/images/media/file-manager/4.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);"><span class="d-block fw-medium">Support-policy.doc</span></a>
                                                    <span class="d-block text-muted fs-12 fw-normal">0.45MB</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-info-light btn-wave"><i class="ri-edit-line"></i></button>
                                                    <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-danger-light btn-wave"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center flex-wrap gap-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-sm">
                                                        <img src="{{asset('build/assets/images/media/file-manager/3.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);"><span class="d-block fw-medium">Profile-designs.zip</span></a>
                                                    <span class="d-block text-muted fs-12 fw-normal">3.46MB</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-info-light btn-wave"><i class="ri-edit-line"></i></button>
                                                    <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-danger-light btn-wave"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center flex-wrap gap-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-sm">
                                                        <img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);"><span class="d-block fw-medium">All Files</span></a>
                                                    <span class="d-block text-muted fs-12 fw-normal">1.2MB</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-info-light btn-wave"><i class="ri-edit-line"></i></button>
                                                    <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-danger-light btn-wave"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-2 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')


@endsection