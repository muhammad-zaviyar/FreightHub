@extends('layouts.master')

@section('styles')

      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">
                    
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Projects List</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Projects List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex gap-xxl-5 gap-3 flex-wrap align-items-center">
                                        <div class="d-flex flex-grow-1" role="search">
                                            <input class="form-control me-2" type="search" placeholder="Search Project" aria-label="Search">
                                            <button class="btn btn-secondary" type="submit">Search</button>
                                        </div>
                                        <ul class="nav nav-tabs p-0 tab-style-6">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="listview" data-bs-toggle="tab"
                                                    data-bs-target="#listview-pane" type="button" role="tab"
                                                    aria-controls="listview-pane" aria-selected="true"><i class="ti ti-list"></i> List View</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="gridview" data-bs-toggle="tab"
                                                    data-bs-target="#gridview-pane" type="button" role="tab"
                                                    aria-controls="gridview-pane" aria-selected="false"><i class="ti ti-layout-grid"></i> Grid View</button>
                                            </li>
                                        </ul>
                                        <div class="d-flex mt-3 mt-sm-0 choices-tab">
                                            <label class="me-2 my-auto">Sort By:</label>
                                            <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                                <option value="Newest">Newest</option>
                                                <option value="Date Added">Date Added</option>
                                                <option value="Type">Type</option>
                                                <option value="A - Z">A - Z</option>
                                            </select>
                                        </div>
                                        <a href="{{url('projects-create')}}" class="btn btn-success"><i class="ri-add-line me-1 fw-semibold align-middle lh-1"></i>Create New Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->

                    <div class="tab-content">
                        <div class="tab-pane fade show active p-0 border-bottom-0 overflow-hidden border-0" id="listview-pane" role="tabpanel" aria-labelledby="listview" tabindex="0">
                            <div class="card custom-card">
                                <div class="card-body d-flex gap-5 align-items-center justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="me-2">
                                            <span class="avatar avatar-lg avatar-rounded p-1 bg-info-transparent">
                                                <img src="{{asset('build/assets/images/company-logos/1.png')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="javascript:void(0);" class="fw-medium fs-14 d-block text-truncate project-list-title">Project Alpha Pages Redesigning </a>
                                            <span class="badge bg-success-transparent">Redesigning</span>
                                        </div>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                        </span>
                                        <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                            +2
                                        </a>
                                        <span class="ps-3">5 People</span>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="fs-12"><span class="fw-semibold">Start Date:</span> 01 Sep, 2024</div>
                                        <div class="fs-12"><span class="fw-semibold">End Date:</span> 30 Sep, 2024</div>
                                    </div>
                                    <div class="d-flex gap-1 flex-wrap">
                                        <div class="progress-stacked progress-xs flex-grow-1 w-100 flex-shrink-0 my-auto gap-1">
                                            <div class="progress-bar bg-success rounded" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="flex-shrink-0"><span class="text-primary fw-medium">70%</span> Completed</div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="fs-12"><span class="fw-semibold">Priority Level:</span></div>
                                        <div class="badge bg-warning">Medium</div>
                                    </div>
                                    <div class="d-flex gap-2 flex-wrap">
                                        <button class="btn btn-sm btn-icon btn-primary-light rounded-circle"><i class="ri-eye-line lh-1 align-middle"></i></button>
                                        <button class="btn btn-sm btn-icon btn-success-light rounded-circle"><i class="ri-pencil-line lh-1 align-middle"></i></button>
                                        <button class="btn btn-sm btn-icon btn-danger-light rounded-circle"><i class="ri-delete-bin-line lh-1 align-middle"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body d-flex gap-5 align-items-center justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="me-2">
                                            <span class="avatar avatar-lg avatar-rounded p-1 bg-info-transparent">
                                                <img src="{{asset('build/assets/images/company-logos/2.png')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="javascript:void(0);" class="fw-medium fs-14 d-block text-truncate project-list-title">New Website Launch: Enhanced User Experience</a>
                                            <span class="badge bg-info-transparent">Development</span>
                                        </div>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                        </span>
                                        <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                            +1
                                        </a>
                                        <span class="ps-3">4 People</span>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="fs-12"><span class="fw-semibold">Start Date:</span> 05 Sep, 2024</div>
                                        <div class="fs-12"><span class="fw-semibold">End Date:</span> 25 Sep, 2024</div>
                                    </div>
                                    <div class="d-flex gap-1 flex-wrap">
                                        <div class="progress-stacked progress-xs flex-grow-1 w-100 flex-shrink-0 my-auto gap-1">
                                            <div class="progress-bar bg-success rounded" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="flex-shrink-0"><span class="text-primary fw-medium">60%</span> Completed</div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="fs-12"><span class="fw-semibold">Priority Level:</span></div>
                                        <div class="badge bg-success">Low</div>
                                    </div>
                                    <div class="d-flex gap-2 flex-wrap">
                                        <button class="btn btn-sm btn-icon btn-primary-light rounded-circle"><i class="ri-eye-line lh-1 align-middle"></i></button>
                                        <button class="btn btn-sm btn-icon btn-success-light rounded-circle"><i class="ri-pencil-line lh-1 align-middle"></i></button>
                                        <button class="btn btn-sm btn-icon btn-danger-light rounded-circle"><i class="ri-delete-bin-line lh-1 align-middle"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body d-flex gap-5 align-items-center justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="me-2">
                                            <span class="avatar avatar-lg avatar-rounded p-1 bg-info-transparent">
                                                <img src="{{asset('build/assets/images/company-logos/3.png')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="javascript:void(0);" class="fw-medium fs-14 d-block text-truncate project-list-title">Mobile App New Feature Updating</a>
                                            <span class="badge bg-danger-transparent">Updating</span>
                                        </div>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                        </span>
                                        <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                            +3
                                        </a>
                                        <span class="ps-3">6 People</span>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="fs-12"><span class="fw-semibold">Start Date:</span> 10 Sep, 2024</div>
                                        <div class="fs-12"><span class="fw-semibold">End Date:</span> 20 Oct, 2024</div>
                                    </div>
                                    <div class="d-flex gap-1 flex-wrap">
                                        <div class="progress-stacked progress-xs flex-grow-1 w-100 flex-shrink-0 my-auto gap-1">
                                            <div class="progress-bar bg-success rounded" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="flex-shrink-0"><span class="text-primary fw-medium">50%</span> Completed</div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="fs-12"><span class="fw-semibold">Priority Level:</span></div>
                                        <div class="badge bg-danger">High</div>
                                    </div>
                                    <div class="d-flex gap-2 flex-wrap">
                                        <button class="btn btn-sm btn-icon btn-primary-light rounded-circle"><i class="ri-eye-line align-middle"></i></button>
                                        <button class="btn btn-sm btn-icon btn-success-light rounded-circle"><i class="ri-pencil-line align-middle"></i></button>
                                        <button class="btn btn-sm btn-icon btn-danger-light rounded-circle"><i class="ri-delete-bin-line align-middle"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body d-flex gap-5 align-items-center justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="me-2">
                                            <span class="avatar avatar-lg avatar-rounded p-1 bg-info-transparent">
                                                <img src="{{asset('build/assets/images/company-logos/4.png')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="javascript:void(0);" class="fw-medium fs-14 d-block text-truncate project-list-title">E-Commerce Platform Overhaul</a>
                                            <span class="badge bg-success-transparent">Overhaul</span>
                                        </div>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                        </span>
                                        <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                            +2
                                        </a>
                                        <span class="ps-3">5 People</span>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="fs-12"><span class="fw-semibold">Start Date:</span> 15 Sep, 2024</div>
                                        <div class="fs-12"><span class="fw-semibold">End Date:</span> 30 Oct, 2024</div>
                                    </div>
                                    <div class="d-flex gap-1 flex-wrap">
                                        <div class="progress-stacked progress-xs flex-grow-1 w-100 flex-shrink-0 my-auto gap-1">
                                            <div class="progress-bar bg-success rounded" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="flex-shrink-0"><span class="text-primary fw-medium">80%</span> Completed</div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="fs-12"><span class="fw-semibold">Priority Level:</span></div>
                                        <div class="badge bg-info">Normal</div>
                                    </div>
                                    <div class="d-flex gap-2 flex-wrap">
                                        <button class="btn btn-sm btn-icon btn-primary-light rounded-circle"><i class="ri-eye-line align-middle"></i></button>
                                        <button class="btn btn-sm btn-icon btn-success-light rounded-circle"><i class="ri-pencil-line align-middle"></i></button>
                                        <button class="btn btn-sm btn-icon btn-danger-light rounded-circle"><i class="ri-delete-bin-line align-middle"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body d-flex gap-5 align-items-center justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="me-2">
                                            <span class="avatar avatar-lg avatar-rounded p-1 bg-info-transparent">
                                                <img src="{{asset('build/assets/images/company-logos/5.png')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="javascript:void(0);" class="fw-medium fs-14 d-block text-truncate project-list-title">AI Integration for CR Management</a>
                                            <span class="badge bg-info-transparent">Integration</span>
                                        </div>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                        </span>
                                        <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                            +1
                                        </a>
                                        <span class="ps-3">4 People</span>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="fs-12"><span class="fw-semibold">Start Date:</span> 20 Sep, 2024</div>
                                        <div class="fs-12"><span class="fw-semibold">End Date:</span> 15 Oct, 2024</div>
                                    </div>
                                    <div class="d-flex gap-1 flex-wrap">
                                        <div class="progress-stacked progress-xs flex-grow-1 w-100 flex-shrink-0 my-auto gap-1">
                                            <div class="progress-bar bg-success rounded" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="flex-shrink-0"><span class="text-primary fw-medium">65%</span> Completed</div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="fs-12"><span class="fw-semibold">Priority Level:</span></div>
                                        <div class="badge bg-danger">High</div>
                                    </div>
                                    <div class="d-flex gap-2 flex-wrap">
                                        <button class="btn btn-sm btn-icon btn-primary-light rounded-circle"><i class="ri-eye-line align-middle"></i></button>
                                        <button class="btn btn-sm btn-icon btn-success-light rounded-circle"><i class="ri-pencil-line align-middle"></i></button>
                                        <button class="btn btn-sm btn-icon btn-danger-light rounded-circle"><i class="ri-delete-bin-line align-middle"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body d-flex gap-5 align-items-center justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="me-2">
                                            <span class="avatar avatar-lg avatar-rounded p-1 bg-info-transparent">
                                                <img src="{{asset('build/assets/images/company-logos/6.png')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="javascript:void(0);" class="fw-medium fs-14 d-block text-truncate project-list-title">Customer Portal Enhancement</a>
                                            <span class="badge bg-success-transparent">Enhancing</span>
                                        </div>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                        </span>
                                        <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                            +2
                                        </a>
                                        <span class="ps-3">6 People</span>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="fs-12"><span class="fw-semibold">Start Date:</span> 01 Oct, 2024</div>
                                        <div class="fs-12"><span class="fw-semibold">End Date:</span> 30 Nov, 2024</div>
                                    </div>
                                    <div class="d-flex gap-1 flex-wrap">
                                        <div class="progress-stacked progress-xs flex-grow-1 w-100 flex-shrink-0 my-auto gap-1">
                                            <div class="progress-bar bg-success rounded" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="flex-shrink-0"><span class="text-primary fw-medium">70%</span> Completed</div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="fs-12"><span class="fw-semibold">Priority Level:</span></div>
                                        <div class="badge bg-success">Low</div>
                                    </div>
                                    <div class="d-flex gap-2 flex-wrap">
                                        <button class="btn btn-sm btn-icon btn-primary-light rounded-circle"><i class="ri-eye-line align-middle"></i></button>
                                        <button class="btn btn-sm btn-icon btn-success-light rounded-circle"><i class="ri-pencil-line align-middle"></i></button>
                                        <button class="btn btn-sm btn-icon btn-danger-light rounded-circle"><i class="ri-delete-bin-line align-middle"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body d-flex gap-5 align-items-center justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="me-2">
                                            <span class="avatar avatar-lg avatar-rounded p-1 bg-info-transparent">
                                                <img src="{{asset('build/assets/images/company-logos/7.png')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="javascript:void(0);" class="fw-medium fs-14 d-block text-truncate project-list-title">Website Redesign and Revitalization</a>
                                            <span class="badge bg-warning-transparent">Redesign</span>
                                        </div>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                        </span>
                                        <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                            +1
                                        </a>
                                        <span class="ps-3">4 People</span>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="fs-12"><span class="fw-semibold">Start Date:</span> 10 Oct, 2024</div>
                                        <div class="fs-12"><span class="fw-semibold">End Date:</span> 15 Nov, 2024</div>
                                    </div>
                                    <div class="d-flex gap-1 flex-wrap">
                                        <div class="progress-stacked progress-xs flex-grow-1 w-100 flex-shrink-0 my-auto gap-1">
                                            <div class="progress-bar bg-success rounded" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="flex-shrink-0"><span class="text-primary fw-medium">60%</span> Completed</div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="fs-12"><span class="fw-semibold">Priority Level:</span></div>
                                        <div class="badge bg-warning">Medium</div>
                                    </div>
                                    <div class="d-flex gap-2 flex-wrap">
                                        <button class="btn btn-sm btn-icon btn-primary-light rounded-circle"><i class="ri-eye-line align-middle"></i></button>
                                        <button class="btn btn-sm btn-icon btn-success-light rounded-circle"><i class="ri-pencil-line align-middle"></i></button>
                                        <button class="btn btn-sm btn-icon btn-danger-light rounded-circle"><i class="ri-delete-bin-line align-middle"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade p-0 border-bottom-0 border-0 overflow-hidden" id="gridview-pane" role="tabpanel" aria-labelledby="gridview">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start mb-3 gap-1 flex-wrap">
                                                <div class="me-2">
                                                    <span class="avatar avatar-lg avatar-rounded p-1 bg-info-transparent">
                                                        <img src="{{asset('build/assets/images/company-logos/1.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fw-medium fs-14 d-block text-truncate project-list-title">Project Alpha Pages Redesigning</a>
                                                    <span class="badge bg-success-transparent">Redesigning</span>
                                                </div>
                                                <div class="btn-list ms-auto">
                                                    <button class="btn btn-sm btn-icon btn-primary-light rounded-circle"><i class="ri-eye-line align-middle"></i></button>
                                                    <button class="btn btn-sm btn-icon btn-success-light rounded-circle"><i class="ri-pencil-line align-middle"></i></button>
                                                    <button class="btn btn-sm btn-icon btn-danger-light rounded-circle"><i class="ri-delete-bin-line align-middle"></i></button>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-3 justify-content-between gap-2">
                                                <div class="flex-shrink-0">
                                                    <div class="fs-12"><span class="fw-semibold">Start Date:</span> 01 Sep, 2024</div>
                                                    <div class="fs-12"><span class="fw-semibold">End Date:</span> 30 Sep, 2024</div>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <div class="fs-12"><span class="fw-semibold">Priority Level:</span></div>
                                                    <div class="badge bg-warning">Medium</div>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-1 flex-wrap">
                                                <div>
                                                    <span class="mb-2"><span class="text-primary fw-medium">70%</span> Completed</span>
                                                    <div class="progress-stacked progress-xs my-auto gap-1">
                                                        <div class="progress-bar bg-success rounded" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="avatar-list-stacked ms-auto">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                                    </span>
                                                    <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                        +2
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start mb-3 gap-1 flex-wrap">
                                                <div class="me-2">
                                                    <span class="avatar avatar-lg avatar-rounded p-1 bg-info-transparent">
                                                        <img src="{{asset('build/assets/images/company-logos/2.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fw-medium fs-14 d-block text-truncate project-list-title">New Website Launch: Enhanced User Experience</a>
                                                    <span class="badge bg-info-transparent">Development</span>
                                                </div>
                                                <div class="btn-list ms-auto">
                                                    <button class="btn btn-sm btn-icon btn-primary-light rounded-circle"><i class="ri-eye-line align-middle"></i></button>
                                                    <button class="btn btn-sm btn-icon btn-success-light rounded-circle"><i class="ri-pencil-line align-middle"></i></button>
                                                    <button class="btn btn-sm btn-icon btn-danger-light rounded-circle"><i class="ri-delete-bin-line align-middle"></i></button>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-3 justify-content-between gap-2">
                                                <div class="flex-shrink-0">
                                                    <div class="fs-12"><span class="fw-semibold">Start Date:</span> 05 Sep, 2024</div>
                                                    <div class="fs-12"><span class="fw-semibold">End Date:</span> 25 Sep, 2024</div>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <div class="fs-12"><span class="fw-semibold">Priority Level:</span></div>
                                                    <div class="badge bg-success">Low</div>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-1 flex-wrap">
                                                <div>
                                                    <span class="mb-2"><span class="text-primary fw-medium">60%</span> Completed</span>
                                                    <div class="progress-stacked progress-xs my-auto gap-1">
                                                        <div class="progress-bar bg-success rounded" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="avatar-list-stacked ms-auto">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                                    </span>
                                                    <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                        +1
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start mb-3 gap-1 flex-wrap">
                                                <div class="me-2">
                                                    <span class="avatar avatar-lg avatar-rounded p-1 bg-info-transparent">
                                                        <img src="{{asset('build/assets/images/company-logos/3.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fw-medium fs-14 d-block text-truncate project-list-title">Mobile App New Feature Updating</a>
                                                    <span class="badge bg-danger-transparent">Updating</span>
                                                </div>
                                                <div class="btn-list ms-auto">
                                                    <button class="btn btn-sm btn-icon btn-primary-light rounded-circle"><i class="ri-eye-line align-middle"></i></button>
                                                    <button class="btn btn-sm btn-icon btn-success-light rounded-circle"><i class="ri-pencil-line align-middle"></i></button>
                                                    <button class="btn btn-sm btn-icon btn-danger-light rounded-circle"><i class="ri-delete-bin-line align-middle"></i></button>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-3 justify-content-between gap-2">
                                                <div class="flex-shrink-0">
                                                    <div class="fs-12"><span class="fw-semibold">Start Date:</span> 10 Sep, 2024</div>
                                                    <div class="fs-12"><span class="fw-semibold">End Date:</span> 20 Oct, 2024</div>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <div class="fs-12"><span class="fw-semibold">Priority Level:</span></div>
                                                    <div class="badge bg-danger">High</div>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-1 flex-wrap">
                                                <div>
                                                    <span class="mb-2"><span class="text-primary fw-medium">50%</span> Completed</span>
                                                    <div class="progress-stacked progress-xs my-auto gap-1">
                                                        <div class="progress-bar bg-success rounded" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="avatar-list-stacked ms-auto">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                    </span>
                                                    <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                        +3
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start mb-3 gap-1 flex-wrap">
                                                <div class="me-2">
                                                    <span class="avatar avatar-lg avatar-rounded p-1 bg-info-transparent">
                                                        <img src="{{asset('build/assets/images/company-logos/4.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fw-medium fs-14 d-block text-truncate project-list-title">E-Commerce Platform Overhaul</a>
                                                    <span class="badge bg-success-transparent">Overhaul</span>
                                                </div>
                                                <div class="btn-list ms-auto">
                                                    <button class="btn btn-sm btn-icon btn-primary-light rounded-circle"><i class="ri-eye-line align-middle"></i></button>
                                                    <button class="btn btn-sm btn-icon btn-success-light rounded-circle"><i class="ri-pencil-line align-middle"></i></button>
                                                    <button class="btn btn-sm btn-icon btn-danger-light rounded-circle"><i class="ri-delete-bin-line align-middle"></i></button>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-3 justify-content-between gap-2">
                                                <div class="flex-shrink-0">
                                                    <div class="fs-12"><span class="fw-semibold">Start Date:</span> 15 Sep, 2024</div>
                                                    <div class="fs-12"><span class="fw-semibold">End Date:</span> 30 Oct, 2024</div>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <div class="fs-12"><span class="fw-semibold">Priority Level:</span></div>
                                                    <div class="badge bg-info">Normal</div>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-1 flex-wrap">
                                                <div>
                                                    <span class="mb-2"><span class="text-primary fw-medium">80%</span> Completed</span>
                                                    <div class="progress-stacked progress-xs my-auto gap-1">
                                                        <div class="progress-bar bg-success rounded" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="avatar-list-stacked ms-auto">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                    </span>
                                                    <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                        +2
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start mb-3 gap-1 flex-wrap">
                                                <div class="me-2">
                                                    <span class="avatar avatar-lg avatar-rounded p-1 bg-info-transparent">
                                                        <img src="{{asset('build/assets/images/company-logos/5.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fw-medium fs-14 d-block text-truncate project-list-title">AI Integration for CR Management</a>
                                                    <span class="badge bg-info-transparent">Integration</span>
                                                </div>
                                                <div class="btn-list ms-auto">
                                                    <button class="btn btn-sm btn-icon btn-primary-light rounded-circle"><i class="ri-eye-line align-middle"></i></button>
                                                    <button class="btn btn-sm btn-icon btn-success-light rounded-circle"><i class="ri-pencil-line align-middle"></i></button>
                                                    <button class="btn btn-sm btn-icon btn-danger-light rounded-circle"><i class="ri-delete-bin-line align-middle"></i></button>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-3 justify-content-between gap-2">
                                                <div class="flex-shrink-0">
                                                    <div class="fs-12"><span class="fw-semibold">Start Date:</span> 20 Sep, 2024</div>
                                                    <div class="fs-12"><span class="fw-semibold">End Date:</span> 15 Oct, 2024</div>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <div class="fs-12"><span class="fw-semibold">Priority Level:</span></div>
                                                    <div class="badge bg-danger">High</div>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-1 flex-wrap">
                                                <div>
                                                    <span class="mb-2"><span class="text-primary fw-medium">65%</span> Completed</span>
                                                    <div class="progress-stacked progress-xs my-auto gap-1">
                                                        <div class="progress-bar bg-success rounded" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="avatar-list-stacked ms-auto">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                    </span>
                                                    <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                        +1
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start mb-3 gap-1 flex-wrap">
                                                <div class="me-2">
                                                    <span class="avatar avatar-lg avatar-rounded p-1 bg-info-transparent">
                                                        <img src="{{asset('build/assets/images/company-logos/6.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fw-medium fs-14 d-block text-truncate project-list-title">Customer Portal Enhancement</a>
                                                    <span class="badge bg-success-transparent">Enhancing</span>
                                                </div>
                                                <div class="btn-list ms-auto">
                                                    <button class="btn btn-sm btn-icon btn-primary-light rounded-circle"><i class="ri-eye-line align-middle"></i></button>
                                                    <button class="btn btn-sm btn-icon btn-success-light rounded-circle"><i class="ri-pencil-line align-middle"></i></button>
                                                    <button class="btn btn-sm btn-icon btn-danger-light rounded-circle"><i class="ri-delete-bin-line align-middle"></i></button>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-3 justify-content-between gap-2">
                                                <div class="flex-shrink-0">
                                                    <div class="fs-12"><span class="fw-semibold">Start Date:</span> 01 Oct, 2024</div>
                                                    <div class="fs-12"><span class="fw-semibold">End Date:</span> 30 Nov, 2024</div>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <div class="fs-12"><span class="fw-semibold">Priority Level:</span></div>
                                                    <div class="badge bg-success">Low</div>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-1 flex-wrap">
                                                <div>
                                                    <span class="mb-2"><span class="text-primary fw-medium">70%</span> Completed</span>
                                                    <div class="progress-stacked progress-xs my-auto gap-1">
                                                        <div class="progress-bar bg-success rounded" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="avatar-list-stacked ms-auto">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                                    </span>
                                                    <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                        +2
                                                    </a>
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
            <!-- End::app-content -->
        
@endsection

@section('scripts')


@endsection