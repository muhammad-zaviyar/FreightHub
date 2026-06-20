@extends('layouts.master')

@section('styles')

      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Timeline</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Timeline</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->
                    
                    <!-- Start:: row-1 -->
                    <div class="row justify-content-center">
                        <div class="col-xxl-11">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header">
                                    <div class="card-title">
                                        Timeline 01
                                    </div>
                                </div>
                                <div class="card-body pt-5">
                                    <div class="timeline container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="timeline-container">
                                                    <div class="timeline-continue pt-0">
                                                        <div class="timeline-right">
                                                            <div class="timeline-content">
                                                                <div class="d-flex gap-2 justify-content-between p-2 bg-light mb-3 flex-wrap rounded align-items-start bg-secondary-transparent">
                                                                    <div class="timeline-end">
                                                                        <span class="p-1 fs-11 bg-secondary text-fixed-white text-center rounded-1 lh-1 fw-medium">
                                                                            15 August 2024
                                                                        </span>
                                                                    </div>
                                                                    <p class="timeline-date text-muted mb-0">
                                                                        09:45, Thursday
                                                                    </p>
                                                                </div>
                                                                <div class="timeline-box">
                                                                    <p class="text-muted mb-2">
                                                                        <span class="text-default"><b>Aman Gupta</b> Commented on <a href="javascript:void(0);" class="text-success fw-medium text-decoration-underline">Sonia Mehta</a>'s Post</span>.
                                                                    </p>
                                                                    <p class="text-muted mb-0">
                                                                        Aman appreciated Sonia's recent article on entrepreneurship and innovation in India. He added insights about how Indian startups are shaping the global market, highlighting the growing impact of young Indian entrepreneurs.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="timeline-right">
                                                            <div class="timeline-content">
                                                                <div class="d-flex gap-2 justify-content-between p-2 bg-light mb-3 flex-wrap rounded align-items-start bg-info-transparent">
                                                                    <div class="timeline-end">
                                                                        <span class="p-1 fs-11 bg-info text-fixed-white text-center rounded-1 lh-1 fw-medium">
                                                                            10 November 2024
                                                                        </span>
                                                                    </div>
                                                                    <p class="timeline-date text-muted mb-0">
                                                                        14:20, Sunday
                                                                    </p>
                                                                </div>
                                                                <div class="timeline-box">
                                                                    <p class="mb-2">
                                                                        <b>Raj Malhotra</b> Tagged <b>Ananya Singh</b> in a Photo.
                                                                    </p>
                                                                    <p class="mb-2">
                                                                        "Celebrating a special day with Ananya, capturing the beautiful moments together. Raj shared these memories with friends and family, adding Ananya to the cherished collection of moments."
                                                                    </p>
                                                                    <p class="profile-activity-media mb-0">
                                                                        <a href="javascript:void(0);">
                                                                            <img src="{{asset('build/assets/images/media/media-2.jpg')}}" alt="media 1" class="mb-0 img-fluid rounded-3">
                                                                        </a>    
                                                                        <a href="javascript:void(0);">
                                                                            <img src="{{asset('build/assets/images/media/media-8.jpg')}}" alt="media 2" class="mb-0 img-fluid rounded-3">
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>                                                    
                                                        <div class="timeline-right">
                                                            <div class="timeline-content">
                                                                <div class="d-flex gap-2 justify-content-between p-2 bg-light mb-3 flex-wrap rounded align-items-start bg-danger-transparent">
                                                                    <div class="timeline-end">
                                                                        <span class="p-1 fs-11 bg-danger text-fixed-white text-center rounded-1 lh-1 fw-medium">
                                                                            12 September 2024
                                                                        </span>
                                                                    </div>
                                                                    <p class="timeline-date text-muted mb-0">
                                                                        18:30, Friday
                                                                    </p>
                                                                </div>
                                                                <div class="timeline-box">
                                                                    <p class="text-muted mb-2">
                                                                        <span class="text-default"><b>Riya Sharma</b> Shared a Post by <a href="javascript:void(0);" class="text-success fw-medium text-decoration-underline">Rajesh Iyer</a></span>.
                                                                    </p>
                                                                    <p class="text-muted mb-0">
                                                                        Riya shared Rajesh's recent update about his tech company's latest innovations. She emphasized the importance of supporting local businesses and congratulated Rajesh on his achievements in the field of AI and automation in India.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="timeline-right">
                                                            <div class="timeline-content">
                                                                <div class="d-flex gap-2 justify-content-between p-2 bg-light mb-3 flex-wrap rounded align-items-start bg-success-transparent">
                                                                    <div class="timeline-end">
                                                                        <span class="p-1 fs-11 bg-success text-fixed-white text-center rounded-1 lh-1 fw-medium">
                                                                            26 October 2024
                                                                        </span>
                                                                    </div>
                                                                    <p class="timeline-date text-muted mb-0">
                                                                        11:15, Saturday
                                                                    </p>
                                                                </div>
                                                                <div class="timeline-box">
                                                                    <p class="text-muted mb-2">
                                                                        <span class="text-default"><b>Anil Kapoor</b> Liked a Post by <a href="javascript:void(0);" class="text-success fw-medium text-decoration-underline">Priya Verma</a></span>.
                                                                    </p>
                                                                    <p class="text-muted mb-0">
                                                                        Anil showed his appreciation for Priya's post about sustainable farming practices in rural India. Priya's efforts to raise awareness about environmental conservation have been well-received, and Anil's engagement further promoted her message.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="timeline-right">
                                                            <div class="timeline-content">
                                                                <div class="d-flex gap-2 justify-content-between p-2 bg-light mb-3 flex-wrap rounded align-items-start bg-warning-transparent">
                                                                    <div class="timeline-end">
                                                                        <span class="p-1 fs-11 bg-warning text-fixed-white text-center rounded-1 lh-1 fw-medium">
                                                                            5 December 2024
                                                                        </span>
                                                                    </div>
                                                                    <p class="timeline-date text-muted mb-0">
                                                                        17:45, Thursday
                                                                    </p>
                                                                </div>
                                                                <div class="timeline-box">
                                                                    <p class="mb-2">
                                                                        <b>Pooja Verma</b> Shared Photos from her recent trip to <b>Manali</b>.
                                                                    </p>
                                                                    <p class="mb-2">
                                                                        "Pooja captured the stunning beauty of the snow-capped mountains in Manali and shared these breathtaking pictures with her friends, reminiscing about the unforgettable adventure."
                                                                    </p>
                                                                    <p class="profile-activity-media mb-0">
                                                                        <a href="javascript:void(0);">
                                                                            <img src="{{asset('build/assets/images/media/media-13.jpg')}}" alt="media 3" class="mb-0 img-fluid rounded-3">
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <img src="{{asset('build/assets/images/media/media-14.jpg')}}" alt="media 4" class="mb-0 img-fluid rounded-3">
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <img src="{{asset('build/assets/images/media/media-9.jpg')}}" alt="media 5" class="mb-0 img-fluid rounded-3">
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row justify-content-center timeline-2">
                        <div class="col-xxl-11">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Timeline 02
                                    </div>
                                </div>
                                <ul class="notification container px-3">
                                    <li>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="notification-body">
                                                    <div class="d-flex align-items-start gap-3 flex-wrap">
                                                        <div class="avatar avatar-xl bg-primary bg-opacity-25 avatar-rounded">
                                                            <span class="avatar avatar-lg online avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill w-50">
                                                            <h5 class="mb-1 fs-15 fw-bold">Initial Planning</h5>
                                                            <p class="mb-0 text-muted">
                                                                Created the <a href="javascript:void(0);" class="text-info fw-medium">product roadmap</a> with clear milestones for each stage.
                                                                <span class="fw-medium">Team Roles Assigned:</span> Allocated responsibilities to team.
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-primary-transparent">Tuesday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="notification-time d-flex align-items-center gap-2 d-inline-flex p-1 bg-primary rounded-pill text-fixed-white op-8 px-2">
                                                    <span class="date">12 April, 2024</span>
                                                    <span class="time">10:00 AM</span>
                                                </div>                                            
                                                <div class="notification-icon">
                                                    <a href="javascript:void(0);"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xl-6 text-end">
                                                <div class="notification-time d-flex align-items-center gap-2 d-inline-flex p-1 bg-secondary rounded-pill text-fixed-white op-8 px-2 content-end">
                                                    <span class="date">25 April, 2024</span>
                                                    <span class="time">02:30 PM</span>
                                                </div>
                                                <div class="notification-icon">
                                                    <a href="javascript:void(0);" class="secondary"></a>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="notification-body notification-body-end secondary">
                                                    <div class="d-flex align-items-start gap-3 flex-wrap">
                                                        <div class="avatar avatar-xl bg-secondary bg-opacity-25 avatar-rounded">
                                                            <span class="avatar avatar-lg online avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill w-50">
                                                            <h5 class="mb-1 fs-15 fw-bold">Marketing Strategy</h5>
                                                            <p class="mb-0 fs-13 text-muted">
                                                                <span class="fw-bold text-secondary">Campaigns Designed:</span> Created the <a href="javascript:void(0);" class="text-secondary1 fw-medium">marketing materials</a> for online and offline promotions.
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-secondary-transparent">Friday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="notification-body success">
                                                    <div class="d-flex align-items-start gap-3 flex-wrap">
                                                        <div class="avatar avatar-xl bg-success bg-opacity-25 avatar-rounded">
                                                            <span class="avatar avatar-lg online avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill w-50">
                                                            <h5 class="mb-1 fs-15 fw-bold">Product Development</h5>
                                                            <p class="mb-0 text-muted">
                                                                <span class="fw-bold text-success">Final Prototypes:</span> Completed <a href="javascript:void(0);" class="text-primary fw-medium">product prototypes</a> and tested key functionalities.
                                                                Incorporated <a href="javascript:void(0);" class="text-success fw-medium">feedback</a> from internal testing.
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-success-transparent">Monday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="notification-time d-flex align-items-center gap-2 d-inline-flex p-1 bg-success rounded-pill text-fixed-white op-8 px-2">
                                                    <span class="date">10 May, 2024</span>
                                                    <span class="time">01:45 PM</span>
                                                </div>                                            
                                                <div class="notification-icon">
                                                    <a href="javascript:void(0);" class="success"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xl-6 text-end">
                                                <div class="notification-time d-flex align-items-center gap-2 d-inline-flex p-1 bg-info rounded-pill text-fixed-white op-8 px-2 content-end">
                                                    <span class="date">22nd Mar, 2024</span>
                                                    <span class="time">10:55 PM</span>
                                                </div>
                                                <div class="notification-icon">
                                                    <a href="javascript:void(0);" class="info"></a>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="notification-body notification-body-end info">
                                                    <div class="d-flex align-items-start gap-3 flex-wrap">
                                                        <div class="avatar avatar-xl bg-info bg-opacity-25 avatar-rounded">
                                                            <span class="avatar avatar-lg online avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill w-50">
                                                            <h5 class="mb-1 fs-15 fw-bold">Preparation and Organization</h5>
                                                            <p class="mb-0 fs-13 text-muted">
                                                                <span class="fw-semibold text-info">Venue Secured:</span> Finalized contracts with vendors.
                                                                <span class="fw-semibold text-success">Marketing:</span> Created event marketing materials and promotional strategies.
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-info-transparent">Wednesday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="notification-body danger">
                                                    <div class="d-flex align-items-start gap-3 flex-wrap">
                                                        <div class="avatar avatar-xl bg-danger bg-opacity-25 avatar-rounded">
                                                            <span class="avatar avatar-lg online avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill w-50">
                                                            <h5 class="mb-1 fs-15 fw-bold text-dark">Pre-Launch Testing</h5>
                                                            <p class="mb-0 text-muted">
                                                                <span class="fw-bold text-success">Beta Version Released:</span> Released the <a href="javascript:void(0);" class="text-success fw-medium">beta version</a> to select users for feedback.
                                                                <span class="fw-bold">Bug Fixes:</span> Collected <a href="javascript:void(0);" class="text-success fw-medium">user feedback</a> and implemented fixes before launch.
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-danger-transparent">Wednesday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="notification-time d-flex align-items-center gap-2 d-inline-flex p-1 bg-danger rounded-pill text-fixed-white op-8 px-2">
                                                    <span class="date">22 May, 2024</span>
                                                    <span class="time">03:20 PM</span>
                                                </div>                                            
                                                <div class="notification-icon">
                                                    <a href="javascript:void(0);" class="danger"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xl-6 text-end">
                                                <div class="notification-time d-flex align-items-center gap-2 d-inline-flex p-1 bg-warning rounded-pill text-fixed-white op-8 px-2 content-end">
                                                    <span class="date">10 June, 2024</span>
                                                    <span class="time">11:00 AM</span>
                                                </div>
                                                <div class="notification-icon">
                                                    <a href="javascript:void(0);" class="warning"></a>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="notification-body notification-body-end warning">
                                                    <div class="d-flex align-items-start gap-3 flex-wrap">
                                                        <div class="avatar avatar-xl bg-warning bg-opacity-25 avatar-rounded">
                                                            <span class="avatar avatar-lg online avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill w-50">
                                                            <h5 class="mb-1 fs-15 fw-bold text-dark">Launch Day</h5>
                                                            <p class="mb-0 fs-13 text-muted">
                                                                <span class="fw-bold text-warning">Product Launched:</span> Officially <a href="javascript:void(0);" class="text-info fw-medium">launched the product</a> in the market with a successful virtual event.
                                                                <span class="fw-bold">Media Coverage:</span> Engaged with <a href="javascript:void(0);" class="text-success fw-medium">media outlets</a> for product reviews and interviews.
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-warning-transparent">Monday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="text-center mb-4">
                                    <button class="btn btn-success-light btn-loader mx-auto">
                                        <span class="me-2">Loading</span>
                                        <span class="loading"><i class="ri-loader-4-line fs-16"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->
                    
                    <!-- Start:: row-3 -->
                    <div class="row justify-content-center timeline-3">
                        <div class="col-xxl-11">
                            <div class="card custom-card bg-transparent shadow-none mt-3">
                                <div class="card-header border-bottom-0">
                                    <div class="card-title">Timeline 03</div>
                                </div>
                                <div class="card-body">
                                    <div class="timeline-steps">
                                        <div class="timeline-step">
                                            <div class="timeline-content" data-toggle="popover" data-placement="top" title="" data-content="Brainstorming session to define the product concept." data-original-title="2024">
                                                <div class="inner-circle"></div>
                                                <div class="card custom-card mb-0 border">
                                                    <div class="card-body">
                                                        <div class="p-2 bg-info rounded d-flex gap-2 text-start align-items-center mb-2">
                                                            <span class="avatar avatar-md avatar-rounded shadow align-middle border bg-white border-opacity-75">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                            </span>
                                                            <div class="text-fixed-white">
                                                                <p class="fw-medium fs-12 op-9 mb-0"> Aman Sharma</p>
                                                                <p class="fw-medium fs-11 op-6 mb-0"> January 12, 2024</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-1 fw-semibold">Concept Discussion</p>
                                                        <p class="text-muted fw-normal mb-0">Brainstormed ideas for the new <a href="javascript:void(0);" class="text-primary fs-11 fw-medium">Read More</a></p>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-step">
                                            <div class="timeline-content" data-toggle="popover" data-placement="top" title="" data-content="Developed initial product prototype for testing." data-original-title="2024">
                                                <div class="inner-circle"></div>
                                                <div class="card custom-card mb-0 border">
                                                    <div class="card-body">
                                                        <div class="p-2 bg-success rounded d-flex gap-2 text-start align-items-center mb-2">
                                                            <span class="avatar avatar-md avatar-rounded shadow align-middle border bg-white border-opacity-75">
                                                                <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                            </span>
                                                            <div class="text-fixed-white">
                                                                <p class="fw-medium fs-12 op-9 mb-0"> Neha Singh</p>
                                                                <p class="fw-medium fs-11 op-6 mb-0"> March 15, 2024</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-1 fw-semibold">Prototype Development</p>
                                                        <p class="text-muted fw-normal mb-0">Created the first version of product <a href="javascript:void(0);" class="text-primary fs-11 fw-medium">Read More</a></p>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-step">
                                            <div class="timeline-content" data-toggle="popover" data-placement="top" title="" data-content="Team collaboration and alignment of project goals." data-original-title="2024">
                                                <div class="inner-circle"></div>
                                                <div class="card custom-card mb-0 border">
                                                    <div class="card-body">
                                                        <div class="p-2 bg-primary rounded d-flex gap-2 text-start align-items-center mb-2">
                                                            <span class="avatar avatar-md avatar-rounded shadow align-middle border bg-white border-opacity-75">
                                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                            </span>
                                                            <div class="text-fixed-white">
                                                                <p class="fw-medium fs-12 op-9 mb-0">Vikram Desai</p>
                                                                <p class="fw-medium fs-11 op-6 mb-0">April 10, 2024</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-1 fw-semibold">Team Collaboration</p>
                                                        <p class="text-muted fw-normal mb-0">Conducted team meetings <a href="javascript:void(0);" class="text-primary fs-11 fw-medium">Read More</a></p>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-step">
                                            <div class="timeline-content" data-toggle="popover" data-placement="top" title="" data-content="Developed marketing strategy for product launch." data-original-title="2024">
                                                <div class="inner-circle"></div>
                                                <div class="card custom-card mb-0 border">
                                                    <div class="card-body">
                                                        <div class="p-2 bg-secondary rounded d-flex gap-2 text-start align-items-center mb-2">
                                                            <span class="avatar avatar-md avatar-rounded shadow align-middle border bg-white border-opacity-75">
                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                            </span>
                                                            <div class="text-fixed-white">
                                                                <p class="fw-medium fs-12 op-9 mb-0">Priya Nair</p>
                                                                <p class="fw-medium fs-11 op-6 mb-0">May 5, 2024</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-1 fw-semibold">Marketing Strategy</p>
                                                        <p class="text-muted fw-normal mb-0">Outlined the marketing plan, including <a href="javascript:void(0);" class="text-primary fs-11 fw-medium">Read More</a></p>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                                                   
                                        <div class="timeline-step">
                                            <div class="timeline-content" data-toggle="popover" data-placement="top" title="" data-content="Successfully launched the final product." data-original-title="2024">
                                                <div class="inner-circle"></div>
                                                <div class="card custom-card mb-0 border">
                                                    <div class="card-body">
                                                        <div class="p-2 bg-danger rounded d-flex gap-2 text-start align-items-center mb-2">
                                                            <span class="avatar avatar-md avatar-rounded shadow align-middle border bg-white border-opacity-75">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                            </span>
                                                            <div class="text-fixed-white">
                                                                <p class="fw-medium fs-12 op-9 mb-0"> Shruti Patel</p>
                                                                <p class="fw-medium fs-11 op-6 mb-0"> October 6, 2024</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-1 fw-semibold">Final Product Launch</p>
                                                        <p class="text-muted fw-normal mb-0">Launched the final version <a href="javascript:void(0);" class="text-primary fs-11 fw-medium">Read More</a></p>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')


@endsection