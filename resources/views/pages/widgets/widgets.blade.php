@extends('layouts.master')

@section('styles')

      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">
                    
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Widgets</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Widgets</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Widgets</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start Row-1 -->
                    <div class="row">
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex flex-wrap gap-1 flex-xxl-nowrap">
                                        <div class="flex-fill d-flex gap-2 align-items-center">
                                            <div class="flex-shrink-0 avatar avatar-sm bg-pink-transparent avatar-rounded">
                                                <i class="ri-money-dollar-circle-line fs-5 lh-1"></i>
                                            </div>
                                            <p class="mb-0 fw-medium">Total Sales</p>
                                        </div>
                                        <div class="text-end ms-auto">
                                            <h4 class="mb-0 fw-semibold">$39,457</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex gap-2 align-items-center flex-wrap bg-pink-transparent justify-content-between">
                                    <div id="widget-chart-1"></div>
                                    <div class="text-end pe-3 p-2">
                                        <span class="text-muted fw-medium fs-12">from last month</span>
                                        <span class="text-success fw-semibold fs-12 mb-0 ms-1">+ 0.45%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex flex-wrap gap-1 flex-xxl-nowrap">
                                        <div class="flex-fill d-flex gap-2 align-items-center">
                                            <div class="flex-shrink-0 avatar avatar-sm bg-primary-transparent avatar-rounded">
                                                <i class="ri-money-dollar-circle-line fs-5 lh-1"></i>
                                            </div>
                                            <p class="mb-0 fw-medium">Total Revenue</p>
                                        </div>
                                        <div class="text-end ms-auto">
                                            <h4 class="mb-0 fw-semibold">$39,457</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex gap-2 align-items-center flex-wrap bg-primary-transparent justify-content-between">
                                    <div id="widget-chart-2"></div>
                                    <div class="text-end pe-3 p-2">
                                        <span class="text-muted fw-medium fs-12">from last month</span>
                                        <span class="text-success fw-semibold fs-12 mb-0 ms-1">+ 0.45%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex flex-wrap gap-1 flex-xxl-nowrap">
                                        <div class="flex-fill d-flex gap-2 align-items-center">
                                            <div class="flex-shrink-0 avatar avatar-sm bg-secondary-transparent avatar-rounded">
                                                <i class="ri-money-dollar-circle-line fs-5 lh-1"></i>
                                            </div>
                                            <p class="mb-0 fw-medium">Total Profit</p>
                                        </div>
                                        <div class="text-end ms-auto">
                                            <h4 class="mb-0 fw-semibold">$39,457</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex gap-2 align-items-center flex-wrap bg-secondary-transparent justify-content-between">
                                    <div id="widget-chart-3"></div>
                                    <div class="text-end pe-3 p-2">
                                        <span class="text-muted fw-medium fs-12">from last month</span>
                                        <span class="text-success fw-semibold fs-12 mb-0 ms-1">+ 0.45%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex flex-wrap gap-1 flex-xxl-nowrap">
                                        <div class="flex-fill d-flex gap-2 align-items-center">
                                            <div class="flex-shrink-0 avatar avatar-sm bg-success-transparent avatar-rounded">
                                                <i class="ri-money-dollar-circle-line fs-5 lh-1"></i>
                                            </div>
                                            <p class="mb-0 fw-medium">Total Income</p>
                                        </div>
                                        <div class="text-end ms-auto">
                                            <h4 class="mb-0 fw-semibold">$39,457</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex gap-2 align-items-center flex-wrap bg-success-transparent justify-content-between">
                                    <div id="widget-chart-4"></div>
                                    <div class="text-end pe-3 p-2">
                                        <span class="text-muted fw-medium fs-12">from last month</span>
                                        <span class="text-danger fw-semibold fs-12 mb-0 ms-1">- 0.3%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row-1 -->

                    <!-- Start:: Row-2 -->
                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between flex-wrap">
                                    <div class="card-title">
                                        Audience Statistics
                                    </div>
                                    <div class="d-flex gap-2">
                                        <div class="btn btn-outline-light border btn-full btn-sm">Today</div>
                                        <div class="btn btn-outline-light border btn-full btn-sm">Weakly</div>
                                        <div class="btn btn-light border btn-full btn-sm">Yearly</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="widget-chart-7"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Team Members
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm text-muted">
                                        View All
                                    </a>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled media-requests mb-0">
                                        <li> 
                                            <div class="d-flex align-items-center gap-1">
                                                <div class="me-2">
                                                    <span class="avatar avatar-md p-1 bg-success-transparent avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="Team Member">
                                                    </span>
                                                </div>
                                                <div class="flex-fill text-truncate">
                                                    <div class="fw-semibold mb-0">John Doe</div>
                                                    <span class="text-muted fs-12 w-75 text-truncate">Frontend Developer</span>
                                                </div>
                                                <div class="btn-list text-nowrap">
                                                    <button aria-label="button" type="button" class="btn btn-sm btn-info-light">
                                                        <i class="ri-message-line"></i> Message
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="d-flex align-items-center gap-1">
                                                <div class="me-2">
                                                    <span class="avatar avatar-md p-1 bg-warning-transparent avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="Team Member">
                                                    </span>
                                                </div>
                                                <div class="flex-fill text-truncate">
                                                    <div class="fw-semibold mb-0">Jane Smith</div>
                                                    <span class="text-muted fs-12 w-75 text-truncate">Project Manager</span>
                                                </div>
                                                <div class="btn-list text-nowrap">
                                                    <button aria-label="button" type="button" class="btn btn-sm btn-primary-light">
                                                        <i class="ri-message-line"></i> Message
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="d-flex align-items-center gap-1">
                                                <div class="me-2">
                                                    <span class="avatar avatar-md p-1 bg-danger-transparent avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="Team Member">
                                                    </span>
                                                </div>
                                                <div class="flex-fill text-truncate">
                                                    <div class="fw-semibold mb-0">Alex Johnson</div>
                                                    <span class="text-muted fs-12 w-75 text-truncate">Backend Developer</span>
                                                </div>
                                                <div class="btn-list text-nowrap">
                                                    <button aria-label="button" type="button" class="btn btn-sm btn-secondary-light">
                                                        <i class="ri-message-line"></i> Message
                                                    </button>
                                                </div>
                                            </div>
                                        </li>                                                                
                                    </ul>
                                </div>
                            </div>
                            <div class="custom-card card">
                                <div class="card-body d-flex gap-3 align-items-center">
                                    <div class="avatar avatar-lg flex-shrink-0 bg-primary-transparent avatar-rounded">
                                        <i class="ri-user-fill fs-18"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-semibold mb-1">48,457</h6>
                                        <div class="text-muted mb-0 me-1 d-inline-block">Active Customers</div>
                                    </div>
                                    <i class="ri-bar-chart-2-line text-primary align-self-end mb-1"></i>
                                    <span class="badge bg-danger rounded-pill ms-auto">0.25%<i class="ti ti-arrow-down"></i></span>
                                </div>
                            </div>
                            <div class="custom-card card">
                                <div class="card-body d-flex gap-3 align-items-center">
                                    <div class="avatar avatar-lg flex-shrink-0 bg-secondary-transparent avatar-rounded">
                                        <i class="ri-user-fill fs-18"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-semibold mb-1">68,789</h6>
                                        <div class="text-muted mb-0 me-1 d-inline-block">New Customers</div>
                                    </div>
                                    <i class="ri-bar-chart-2-line text-secondary align-self-end mb-1"></i>
                                    <span class="badge bg-success rounded-pill ms-auto">0.25%<i class="ti ti-arrow-up"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card widget-card-balance">
                                <div class="card-body text-fixed-white">
                                    <div class="d-flex justify-content-between gap-2 mb-3">
                                        <i class="ri-mastercard-fill fs-1 text-fixed-white op-8 "></i>
                                        <div class="text-end">
                                            <div class="op-6 fs-12">CARD NUMBER</div>
                                            <div class="fs-5 fw-medium">0000 1234 1234 25 </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between gap-2">
                                        <div class="">
                                            <div class="op-6 fs-12">Card Holder Name</div>
                                            <div class="fs-18 fw-medium">Ashwin Seth </div>
                                        </div>
                                        <div class="text-end">
                                            <div class="op-6 fs-12">Valid Till</div>
                                            <div class="fs-18 fw-medium">01/01</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body p-4">
                                    <div class="d-flex gap-3 align-items-center mb-2 justify-content-between">
                                        <p class="mb-0 fw-semibold">Project Overview</p>
                                        <div class="d-flex align-items-center lh-1">
                                            <div class="stars-main me-3 text-muted">
                                                <i class="ri-star-fill star"></i>
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" data-bs-toggle="dropdown" class="btn btn-sm btn-icon btn-primary-light rounded-circle" aria-expanded="false" aria-label="Task Options">
                                                    <i class="bi bi-grid lh-1"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-pencil-line me-1"></i>Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-forward-line me-1"></i>Share</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-1"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="d-inline-block me-2">45%</h3><span class="text-muted fs-12 align-middle">Completed Project</span>
                                    <div class="d-flex align-items-center mb-1 justify-content-between">
                                        <div>Project Progress</div>
                                        <div class="fw-semibold">45%</div>
                                    </div>
                                    <div class="progress-stacked progress-sm mb-3 mt-2 gap-1">
                                        <div class="progress-bar rounded" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-secondary rounded" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-success rounded" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex gap-3 align-items-start justify-content-between flex-wrap flex-xxl-nowrap">
                                        <div class="text-center">
                                            <div class="flex-shrink-0 avatar avatar-md bg-primary-transparent avatar-rounded mb-2">
                                                <i class="ri-file-list-3-fill fs-15 lh-1"></i>
                                            </div>
                                            <div class="fw-semibold mb-1">
                                                Completed
                                            </div>
                                            <span class="text-muted fs-14 fw-medium">45%</span>
                                            <div class="fw-semibold mt-1">
                                                25 Tasks
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div class="flex-shrink-0 avatar avatar-md bg-secondary-transparent avatar-rounded mb-2">
                                                <i class="ri-file-list-3-fill fs-15 lh-1"></i>
                                            </div>
                                            <div class="fw-semibold mb-1">
                                                Upcoming
                                            </div>
                                            <span class="text-muted fs-14 fw-medium">25%</span>
                                            <div class="fw-semibold mt-1">
                                                13 Tasks
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div class="flex-shrink-0 avatar avatar-md bg-success-transparent avatar-rounded mb-2">
                                                <i class="ri-file-list-3-fill fs-15 lh-1"></i>
                                            </div>
                                            <div class="fw-semibold mb-1">
                                                New
                                            </div>
                                            <span class="text-muted fs-14 fw-medium">30%</span>
                                            <div class="fw-semibold mt-1">
                                                03 Tasks
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: Row-2 -->

                    <!-- Start:: Row-3 -->
                    <div class="row">
                        <div class="col-xxl-4">
                            <div class="custom-card card">
                                <div class="card-body d-flex gap-2 align-items-start justify-content-between flex-wrap pb-0">
                                    <div class="flex-shrink-0 d-flex flex-column justify-content-between gap-5"> 
                                        <div class="pt-2 ps-2">
                                            <h4 class="mb-1 d-flex align-items-center fw-semibold">$32,198 </h4> 
                                            <p class="fs-14 mb-2">Profit Earned</p> 
                                            <div class="">
                                                <span class="text-success fw-semibold"> 5.3% <i class="ri-arrow-up-line lh-1 align-center fs-14 fw-normal"></i></span>
                                                <span class="fw-medium fs-12 text-muted">From Last Month</span>
                                            </div>
                                        </div>
                                        <div class="btn bottom-0 mt-3 d-grid btn-primary rounded-pill"> View Details</div>
                                    </div>
                                    <div id="widget-profit"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="custom-card card">
                                        <div class="card-body p-0">
                                            <div class="text-end mb-3 p-3">
                                                <div class="avatar avatar-lg bg-secondary bg-opacity-25 avatar-rounded mb-3">
                                                    <div class="avatar avatar-md bg-secondary text-fixed-white avatar-rounded">
                                                        <i class="ri-bar-chart-box-line fs-18"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h4 class="fw-semibold mb-1">$12,432</h4>
                                                    <span class="badge bg-success-transparent rounded-pill me-2">0.25%<i class="ti ti-arrow-up"></i></span><div class="text-muted mb-0 me-1 d-inline-block">Total Revenue</div>
                                                </div>
                                            </div>
                                            <div id="widget-chart-5"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="custom-card card">
                                        <div class="card-body p-0">
                                            <div class="text-end mb-3 p-3">
                                                <div class="avatar avatar-lg bg-success bg-opacity-25 avatar-rounded mb-3">
                                                    <div class="avatar avatar-md bg-success text-fixed-white avatar-rounded">
                                                        <i class="ri-bar-chart-box-line fs-18"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h4 class="fw-semibold mb-1">$23,789</h4>
                                                    <span class="badge bg-danger-transparent rounded-pill me-2">0.25%<i class="ti ti-arrow-down"></i></span><div class="text-muted mb-0 me-1 d-inline-block">Total Sales</div>
                                                </div>
                                            </div>
                                            <div id="widget-chart-6"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header border-bottom border-block-end-dashed">
                                    <div>
                                        <h6 class="mb-0">Transactions</h6>
                                        <span class="fs-11 text-muted">Go through the lastest transactions</span>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="btn btn-icon btn-light"><i class="ri-search-line"></i></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                <div class=" p-2 bg-light bg-opacity-75 rounded-3">
                                        <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap mb-3">
                                            <div>
                                                <span class="avatar avatar-sm bg-success-transparent avatar-rounded">
                                                    <i class="ri-arrow-left-down-line fs-18"></i>
                                                </span>
                                                <span class="align-center fw-medium ms-1">Receive</span>
                                            </div>
                                            <div>
                                                <div class="fw-semibold mb-1 d-inline-block">Litecoin</div>
                                                <span class="text-muted mb-0 ms-1 d-inline-block"> (LTC)</span>
                                            </div>
                                            <h6 class="fw-semibold">$5,248.00</h6>
                                            <span class="badge bg-success rounded-pill">+2.3%<i class="ti ti-arrow-up"></i></span>
                                        </div>
                                        <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap mb-3">
                                            <div>
                                                <span class="avatar avatar-sm bg-primary-transparent avatar-rounded">
                                                    <i class="ri-arrow-right-up-line fs-18"></i>
                                                </span>
                                                <span class="align-center fw-medium ms-1">Send</span>
                                            </div>
                                            <div>
                                                <div class="fw-semibold mb-1 d-inline-block">Bitcoin</div>
                                                <span class="text-muted mb-0 ms-1 d-inline-block"> (BTC)</span>
                                            </div>
                                            <h6 class="fw-semibold">$12,850.00</h6>
                                            <span class="badge bg-danger rounded-pill">-1.5%<i class="ti ti-arrow-down"></i></span>
                                        </div>
                                        <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap">
                                            <div>
                                                <span class="avatar avatar-sm bg-success-transparent avatar-rounded">
                                                    <i class="ri-arrow-left-down-line fs-18"></i>
                                                </span>
                                                <span class="align-center fw-medium ms-1">Receive</span>
                                            </div>
                                            <div>
                                                <div class="fw-semibold mb-1 d-inline-block">Ethereum</div>
                                                <span class="text-muted mb-0 ms-1 d-inline-block"> (ETH)</span>
                                            </div>
                                            <h6 class="fw-semibold">$3,120.50</h6>
                                            <span class="badge bg-success rounded-pill">+0.8%<i class="ti ti-arrow-up"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: Row-3 -->

                    <!-- Start:: Row-4 -->
                    <div class="row">
                        <div class="col-xxl-4">
                            <div class="custom-card card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 justify-content-between mb-3">
                                        <div>
                                            Order Id:<div class="text-primary fw-semibold fs-14"> restorder1452#1 </div>
                                        </div>
                                        <div>
                                            Total Items:<h6 class="mb-0"> 05 </h6>
                                        </div>
                                        <div>
                                            Status:<br>
                                            <div class="badge bg-success"> Preparing</div>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm progress-animate" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped bg-secondary" style="width: 65%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4">
                            <div class="custom-card card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 justify-content-between mb-3">
                                        <div>
                                            Order Id:<div class="text-primary fw-semibold fs-14"> restorder1452#1 </div>
                                        </div>
                                        <div>
                                            Total Items:<h6 class="mb-0"> 05 </h6>
                                        </div>
                                        <div>
                                            Status:<br>
                                            <div class="badge bg-pink"> Preparing</div>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm progress-animate" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped bg-success" style="width: 65%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4">
                            <div class="custom-card card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 justify-content-between mb-3">
                                        <div>
                                            Order Id:<div class="text-primary fw-semibold fs-14"> restorder1452#1 </div>
                                        </div>
                                        <div>
                                            Total Items:<h6 class="mb-0"> 05 </h6>
                                        </div>
                                        <div>
                                            Status:<br>
                                            <div class="badge bg-orange"> Ready</div>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm progress-animate" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped bg-info" style="width: 65%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: Row-4 -->

                    <!-- Start:: Row-5 -->
                    <div class="row">
                        <div class="col-xxl-3">
                            <div class="custom-card card overflow-hidden">
                                <div class="p-5 bg-primary mb-5 widget-profile-bg">
                                    <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="" class="img-fluid rounded-circle widget-profile shadow">
                                </div>
                                <div class="card-body text-center mt-2">
                                    <h5 class="mb-1 fw-semibold">Annie Brunie</h5>
                                    <p class="text-muted fs-14">CEO & MD</p>
                                    <p class="px-3 text-gray-6">Leading with passion, delivering with purpose. I'm here to make a difference, one innovative step.</p>
                                    <div class="btn-list mb-1">
                                        <div class="btn btn-sm rounded-circle btn-primary-light"><i class="ri-facebook-fill fs-17"></i></div>
                                        <div class="btn btn-sm rounded-circle btn-orange-light"><i class="ri-instagram-fill fs-17"></i></div>
                                        <div class="btn btn-sm rounded-circle btn-teal-light"><i class="ri-twitter-x-fill fs-17"></i></div>
                                    </div>
                                </div>
                                <div class="card-body bg-light bg-opacity-75 text-center border-top border-block-start-dashed">
                                    <div class="btn btn-primary rounded-pill btn-w-lg">View Details</div>
                                </div>
                            </div>                      
                        </div>
                        <div class="col-xxl-4">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="custom-card card">
                                        <div class="card-body p-4">
                                            <div class="d-flex gap-2 align-items-start justify-content-between">
                                                <div>
                                                    <div class="text-muted fs-12">Upcoming Events</div>
                                                    <h6 class="fw-semibold my-1">Meeting with clients in zoom</h6>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" class="btn btn-sm btn-icon btn-primary-light rounded-circle" aria-expanded="false" aria-label="Task Options">
                                                        <i class="bi bi-grid lh-1"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-pencil-line me-1"></i>Edit</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-forward-line me-1"></i>Share</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-1"></i>Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="text-primary fw-semibold mb-4 mt-2 fs-14"><i class="ri-time-line lh-1 align-middle me-1"></i>Starts in 20mins</div>
                                            <div class="avatar-list-stacked">
                                                <span class="avatar avatar-md avatar-rounded p-1 bg-primary-transparent">
                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                </span>
                                                <span class="avatar avatar-md avatar-rounded p-1 bg-primary-transparent">
                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                </span>
                                                <span class="avatar avatar-md avatar-rounded p-1 bg-primary-transparent">
                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="custom-card card bg-primary">
                                        <div class="card-body p-4 text-fixed-white">
                                            <div class="d-flex gap-2 align-items-start justify-content-between flex-wrap">
                                                <i class="ti ti-cloud fs-40 text-secondary lh-1"></i>
                                                <div class="text-end">
                                                    <h6 class="text-fixed-white">Temperature</h6>
                                                    <p class="mb-0 text-fixed-white">-50°C</p>
                                                </div>
                                            </div>
                                            <h2 class="mb-0 mt-2 text-fixed-white fw-semibold">32 Mins</h2>
                                            <p class="text-fixed-white op-7 mb-4 fs-12">Left Until Ground</p>
                                            <div class="op-8">
                                                <i class="ti ti-map-pin-filled fs-16 me-2 op-6"></i><span class="text-fixed-white">Location: London</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-card card">
                                <div class="card-body p-4">
                                    <div class="d-flex gap-2 justify-content-between mb-2">
                                        <div>
                                            <div class="text-muted">
                                                Total Revenue
                                            </div>
                                            <div class="fw-semibold align-self-end fs-4 mb-2 d-inline-block">
                                                $2.2K 
                                            </div>
                                            <span class="fw-medium fs-12 text-muted ms-1"> From Last Month </span> <span class="text-muted fw-medium fs-12"><i class="ri-arrow-up-s-fill fs-15 lh-1 align-midddle text-success"></i> 4.5% </span>
                                        </div>
                                        <div class="dropdown"> 
                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-light border btn-icon"> 
                                                <i class="ri-more-2-fill fs-16 text-muted"></i> 
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Week</a> </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Year</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row gy-3 gy-sm-0">
                                        <div class="col-xl-6 col-sm-6">
                                            <div class="p-3 rounded bg-light border border-primary border-opacity-10 bg-opacity-75">
                                                <div class="d-flex gap-2 align-items-center flex-wrap">
                                                    <div class="flex-shrink-0 avatar avatar-lg bg-primary avatar-rounded">
                                                        <i class="ti ti-currency-dollar fs-25 lh-1"></i>
                                                    </div>
                                                    <div>
                                                        <div class="fw-semibold mb-1">
                                                            Income
                                                        </div>
                                                        <span class="text-muted fw-medium">1.2% <i class="ri-arrow-up-s-fill fs-15 lh-1 align-midddle text-success"></i></span>
                                                    </div>
                                                    <div class="fw-semibold ms-auto align-self-end fs-16 mb-2">
                                                        $3.2K
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-sm-6">
                                            <div class="p-3 rounded bg-light border border-success border-opacity-10 bg-opacity-75">
                                                <div class="d-flex gap-2 align-items-center flex-wrap">
                                                    <div class="flex-shrink-0 avatar avatar-lg bg-success avatar-rounded">
                                                        <i class="ti ti-moneybag fs-25 lh-1"></i>
                                                    </div>
                                                    <div>
                                                        <div class="fw-semibold mb-1">
                                                            Expenses
                                                        </div>
                                                        <span class="text-muted fw-medium">0.3% <i class="ri-arrow-down-s-fill fs-15 lh-1 align-midddle text-danger"></i></span>
                                                    </div>
                                                    <div class="fw-semibold ms-auto align-self-end fs-16 mb-2">
                                                        $2.2K
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5">
                            <div class="card custom-card card-style-2">
                                <div class="card-body p-0 d-flex align-items-start">
                                    <div class="p-2 m-3 me-1 rounded-3 bg-primary-transparent flex-shrink-0">
                                        <img src="{{asset('build/assets/images/ecommerce/png/8.png')}}" alt="img" class="img-fluid card-img-top widget-product-img avatar avatar-xl"> 
                                    </div>
                                    <div class="p-3 flex-grow-1 text-truncate">
                                        <div class="d-flex justify-content-between gap-2 align-items-center flex-wrap">
                                            <a href="javascript:void(0);" class="text-muted fs-12">Kitchen Essentials</a>
                                            <div class="min-w-fit-content">
                                                <span class="text-muted fw-medium">Rating: </span>
                                                <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                <span class="text-warning"><i class="bi bi-star"></i></span>
                                                <span class="text-warning"><i class="bi bi-star"></i></span>
                                            </div>
                                        </div>
                                        <h6 class="mt-1 mb-1 fw-semibold fs-16 text-truncate"><a href="{{url('product-details')}}">Steel Electric Kettle inside copper coat</a></h6>
                                        <div class="d-flex gap-2 align-items-center flex-wrap">
                                            <div class="fw-semibold fs-20 text-pink">
                                                $45.00
                                            </div>
                                            <s class="text-muted">
                                                $65.00
                                            </s>
                                            <div class="ms-auto d-flex gap-2">
                                                <a href="{{url('checkout')}}" class="btn btn-icon btn-success rounded-circle">
                                                    <i class="bx bx-credit-card-alt"></i>
                                                </a>
                                                <a href="{{url('cart')}}" class="btn btn-icon btn-primary rounded-circle">
                                                    <i class="bx bxs-cart-add"></i> 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="p-3 d-flex gap-2 justify-content-between border-bottom border-block-end-dashed bg-light bg-opacity-75 align-items-center">
                                    <div>
                                        <h6 class="mb-1">Visitors By Country</h6>
                                        <div class="text-muted mb-0">Across all regions.</div>
                                    </div>
                                    <button class="btn btn-primary-light btn-sm">View All<i class="ti ti-arrow-narrow-right ms-1"></i></button>
                                </div>
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-xl-7">
                                            <div id="widget-visitors"></div>
                                        </div>
                                        <div class="col-xl-5">
                                            <ul class="list-unstyled country-stats-list">
                                                <li>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-md bg-primary bg-opacity-10 p-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/flags/us_flag.jpg')}}" alt="" class="rounded-circle">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <div class="d-flex mb-2 justify-content-between align-items-center">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <span class="fw-semibold d-block">US</span>
                                                                </div>
                                                                <div class="fw-medium"><span class="text-danger me-1"><i class="ti ti-arrow-down align-middle"></i></span><span>$32K</span> (65%)</div>
                                                            </div>
                                                            <div class="progress progress-xs progress-animate" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar" style="width: 65%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li> 
                                                <li>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-md bg-secondary bg-opacity-10 p-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/flags/french_flag.jpg')}}" alt="" class="rounded-circle">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <div class="d-flex mb-2 justify-content-between align-items-center">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <span class="fw-semibold d-block">France</span>
                                                                </div>
                                                                <div class="fw-medium"><span class="text-success me-1"><i class="ti ti-arrow-up align-middle"></i></span><span>$22K</span> (55%)</div>
                                                            </div>
                                                            <div class="progress progress-xs progress-animate" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-secondary" style="width: 65%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-md bg-success bg-opacity-10 p-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/flags/germany_flag.jpg')}}" alt="" class="rounded-circle">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <div class="d-flex mb-2 justify-content-between align-items-center">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <span class="fw-semibold d-block">Germany</span>
                                                                </div>
                                                                <div class="fw-medium"><span class="text-danger me-1"><i class="ti ti-arrow-down align-middle"></i></span><span>$21</span> (45%)</div>
                                                            </div>
                                                            <div class="progress progress-xs progress-animate" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-success" style="width: 65%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: Row-5 -->

                </div>
            </div>
            <!-- End::app-content -->
        
@endsection

@section('scripts')

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Index JS -->
        @vite('resources/assets/js/widgets.js')

    
@endsection