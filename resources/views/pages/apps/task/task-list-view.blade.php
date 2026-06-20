@extends('layouts.master')

@section('styles')

      
@endsection


@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">List View</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">List View</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row mx-0 bg-white g-3 pb-3 px-2 mb-3 rounded-2 mt-2">
                        <div class="col-xxl-3">
                            <div class="card custom-card mb-0 overflow-hidden rounded-pill shadow-none bg-primary-transparent">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded bg-primary">
                                                    <i class="ti ti-news fs-15"></i>
                                                </span>
                                            </div>
                                            <div>
                                                New Tasks
                                            </div>
                                        </div>
                                        <h5 class="fw-medium mb-0 ms-auto">62,335</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card mb-0 overflow-hidden rounded-pill shadow-none bg-secondary-transparent">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded bg-secondary">
                                                    <i class="ti ti-circle-check fs-15"></i>
                                                </span>
                                            </div>
                                            <div>
                                                Completed Tasks
                                            </div>
                                        </div>
                                        <h5 class="fw-medium mb-0 ms-auto">15.6k</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card mb-0 overflow-hidden rounded-pill shadow-none bg-success-transparent">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded bg-success">
                                                    <i class="ti ti-pennant-2 fs-15"></i>
                                                </span>
                                            </div>
                                            <div>
                                                Pending Tasks
                                            </div>
                                        </div>
                                        <h5 class="fw-medium mb-0 ms-auto">3,487</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card mb-0 overflow-hidden rounded-pill shadow-none bg-info-transparent">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="lh-1">
                                                <span class="avatar avatar-sm avatar-rounded bg-info">
                                                    <i class="ti ti-brightness fs-15"></i>
                                                </span>
                                            </div>
                                            <div>
                                                Inprogress Tasks
                                            </div>
                                        </div>
                                        <h5 class="fw-medium mb-0 ms-auto">5,456</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12">
                            <div class="card custom-card bg-primary bg-opacity-005 border border-primary border-opacity-10">
                                <div class="card-header justify-content-between border-bottom-0">
                                    <div class="card-title">
                                        Tasks List
                                        <button class="btn btn-sm btn-primary btn-wave waves-light rounded-pill ms-2" data-bs-toggle="modal" data-bs-target="#create-task"><i class="ri-add-line fw-medium align-middle me-1"></i> Create Task</button>
                                    </div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <!-- Start::add task modal -->
                                        <div class="modal fade" id="create-task" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title">Add Task</h6>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row gy-2">
                                                            <div class="col-xl-6">
                                                                <label for="task-name" class="form-label">Task Name</label>
                                                                <input type="text" class="form-control" id="task-name" placeholder="Task Name">
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <label for="task-id" class="form-label">Task ID</label>
                                                                <input type="text" class="form-control" id="task-id" placeholder="Task ID">
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <label class="form-label">Assigned Date</label>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                                        <input type="text" class="form-control" id="assignedDate" placeholder="Choose date and time">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <label class="form-label">Due Date</label>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                                        <input type="text" class="form-control" id="dueDate" placeholder="Choose date and time">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <label class="form-label">Status</label>
                                                                <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                                                    <option value="New">New</option>
                                                                    <option value="Completed">Completed</option>
                                                                    <option value="Inprogress">Inprogress</option>
                                                                    <option value="Pending">Pending</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <label class="form-label">Priority</label>
                                                                <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default1">
                                                                    <option value="High">High</option>
                                                                    <option value="Medium">Medium</option>
                                                                    <option value="Low">Low</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <label class="form-label">Assigned To</label>
                                                                <select class="form-control" name="choices-multiple-remove-button1" id="choices-multiple-remove-button1" multiple>
                                                                    <option value="Choice 1">Angelina May</option>
                                                                    <option value="Choice 2">Sarah Ruth</option>
                                                                    <option value="Choice 3">Hercules Jhon</option>
                                                                    <option value="Choice 4">Mayor Kim</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="button" class="btn btn-primary">Add Task</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End::add task modal -->
                                        <div class="dropdown ms-2">
                                            <button class="btn btn-icon btn-secondary btn-sm btn-wave waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">New Tasks</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Pending Tasks</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Completed Tasks</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Inprogress Tasks</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="d-flex gap-2 px-3 align-items-center mb-3">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input check-all" type="checkbox" name="all-tasks" id="all-tasks">
                                            <label class="form-check-label fs-14 fw-medium" for="all-tasks">
                                                Select All Tasks
                                            </label>
                                        </div>
                                        <button class="btn btn-danger-light ms-1 btn-sm ms-auto">
                                            Delete All
                                        </button>
                                    </div>
                                    <div class="d-flex p-3 border rounded-4 align-items-center bg-white flex-wrap justify-content-between gap-4 gap-xl-2 task-list mb-3">
                                        <div class="form-check mb-0 task-checkbox">
                                            <input class="form-check-input me-2" type="checkbox" name="001" id="001">
                                            <label class="form-check-label" for="001">
                                                Design Prototype <span class="badge bg-warning ms-2 rounded-pill">On Hold</span>
                                            </label>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Due Date: <span class="text-muted mx-2">25-09-2024</span></div>
                                        </div>
                                        <div class="d-flex gap-1 flex-wrap">
                                            <div class="flex-shrink-0"><span class="text-primary fw-medium">70%</span> Completed</div>
                                            <div class="progress-stacked progress-xs flex-grow-1 w-100 flex-shrink-0 my-auto gap-1">
                                                <div class="progress-bar bg-success rounded" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Priority Level: <span  class="badge bg-success ms-2 rounded-pill">Low</span></div>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Assigned Date: <span class="text-muted mx-2">12-09-2024</span></div>
                                        </div>
                                        <div class="avatar-list-stacked">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                            </span>
                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                +2
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-success-light btn-icon btn-sm">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn">
                                                <i class="ri-delete-bin-5-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex p-3 border rounded-4 align-items-center bg-white flex-wrap justify-content-between gap-4 gap-xl-2 task-list mb-3">
                                        <div class="form-check mb-0 task-checkbox">
                                            <input class="form-check-input me-2" type="checkbox" name="002" id="002">
                                            <label class="form-check-label" for="002">
                                                Revise User Interface <span class="badge bg-info ms-2 rounded-pill">In Progress</span>
                                            </label>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Due Date: <span class="text-muted mx-2">30-09-2024</span></div>
                                        </div>
                                        <div class="d-flex gap-1 flex-wrap">
                                            <div class="flex-shrink-0"><span class="text-primary fw-medium">45%</span> Completed</div>
                                            <div class="progress-stacked progress-xs flex-grow-1 w-100 flex-shrink-0 my-auto gap-1">
                                                <div class="progress-bar bg-success rounded" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Priority Level: <span class="badge bg-warning ms-2 rounded-pill">Medium</span></div>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Assigned Date: <span class="text-muted mx-2">15-09-2024</span></div>
                                        </div>
                                        <div class="avatar-list-stacked">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                            </span>
                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                +2
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-success-light btn-icon btn-sm">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn">
                                                <i class="ri-delete-bin-5-line"></i>
                                            </button>
                                        </div>
                                    </div> 
                                    <div class="d-flex p-3 border rounded-4 align-items-center bg-white flex-wrap justify-content-between gap-4 gap-xl-2 task-list mb-3"> 
                                        <div class="form-check mb-0 task-checkbox">
                                            <input class="form-check-input me-2" type="checkbox" name="task001" id="task001">
                                            <label class="form-check-label" for="task001">
                                                Prototype Development <span class="badge bg-warning ms-2 rounded-pill">On Hold</span>
                                            </label>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Due Date: <span class="text-muted mx-2">25-09-2024</span></div>
                                        </div>
                                        <div class="d-flex gap-1 flex-wrap">
                                            <div class="flex-shrink-0"><span class="text-primary fw-medium">70%</span> Completed</div>
                                            <div class="progress-stacked progress-xs flex-grow-1 w-100 flex-shrink-0 my-auto gap-1">
                                                <div class="progress-bar bg-success rounded" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Priority Level: <span class="badge bg-success ms-2 rounded-pill">Low</span></div>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Assigned Date: <span class="text-muted mx-2">12-09-2024</span></div>
                                        </div>
                                        <div class="avatar-list-stacked">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="User Avatar 1">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="User Avatar 2">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="User Avatar 3">
                                            </span>
                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                +2
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-success-light btn-icon btn-sm">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn">
                                                <i class="ri-delete-bin-5-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex p-3 border rounded-4 align-items-center bg-white flex-wrap justify-content-between gap-4 gap-xl-2 task-list mb-3">
                                        <div class="form-check mb-0 task-checkbox">
                                            <input class="form-check-input me-2" type="checkbox" name="task002" id="task002">
                                            <label class="form-check-label" for="task002">
                                                Design UserInterface <span class="badge bg-success ms-2 rounded-pill">Completed</span>
                                            </label>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Due Date: <span class="text-muted mx-2">15-10-2024</span></div>
                                        </div>
                                        <div class="d-flex gap-1 flex-wrap">
                                            <div class="flex-shrink-0"><span class="text-secondary fw-medium">100%</span> Completed</div>
                                            <div class="progress-stacked progress-xs flex-grow-1 w-100 flex-shrink-0 my-auto gap-1">
                                                <div class="progress-bar bg-success rounded" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Priority Level: <span class="badge bg-danger ms-2 rounded-pill">High</span></div>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Assigned Date: <span class="text-muted mx-2">01-09-2024</span></div>
                                        </div>
                                        <div class="avatar-list-stacked">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="User Avatar 1">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="User Avatar 2">
                                            </span>
                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                +1
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-success-light btn-icon btn-sm">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn">
                                                <i class="ri-delete-bin-5-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex p-3 border rounded-4 align-items-center bg-white flex-wrap justify-content-between gap-4 gap-xl-2 task-list mb-3">
                                        <div class="form-check mb-0 task-checkbox">
                                            <input class="form-check-input me-2" type="checkbox" name="task003" id="task003">
                                            <label class="form-check-label" for="task003">
                                                CodebaseView Process <span class="badge bg-success ms-2 rounded-pill">Active</span>
                                            </label>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Due Date: <span class="text-muted mx-2">30-09-2024</span></div>
                                        </div>
                                        <div class="d-flex gap-1 flex-wrap">
                                            <div class="flex-shrink-0"><span class="text-info fw-medium">40%</span> Completed</div>
                                            <div class="progress-stacked progress-xs flex-grow-1 w-100 flex-shrink-0 my-auto gap-1">
                                                <div class="progress-bar bg-success rounded" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Priority Level: <span class="badge bg-warning ms-2 rounded-pill">Medium</span></div>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Assigned Date: <span class="text-muted mx-2">20-08-2024</span></div>
                                        </div>
                                        <div class="avatar-list-stacked">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="User Avatar 1">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="User Avatar 2">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="User Avatar 3">
                                            </span>
                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                +3
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-success-light btn-icon btn-sm">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn">
                                                <i class="ri-delete-bin-5-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex p-3 border rounded-4 align-items-center bg-white flex-wrap justify-content-between gap-4 gap-xl-2 task-list mb-3">
                                        <div class="form-check mb-0 task-checkbox">
                                            <input class="form-check-input me-2" type="checkbox" name="task004" id="task004">
                                            <label class="form-check-label" for="task004">
                                                Conduct User Testing <span class="badge bg-danger ms-2 rounded-pill">Delayed</span>
                                            </label>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Due Date: <span class="text-muted mx-2">05-11-2024</span></div>
                                        </div>
                                        <div class="d-flex gap-1 flex-wrap">
                                            <div class="flex-shrink-0"><span class="text-warning fw-medium">30%</span> Completed</div>
                                            <div class="progress-stacked progress-xs flex-grow-1 w-100 flex-shrink-0 my-auto gap-1">
                                                <div class="progress-bar bg-success rounded" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Priority Level: <span class="badge bg-info ms-2 rounded-pill">Medium</span></div>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Assigned Date: <span class="text-muted mx-2">20-09-2024</span></div>
                                        </div>
                                        <div class="avatar-list-stacked">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="User Avatar 1">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="User Avatar 2">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="User Avatar 3">
                                            </span>
                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                +1
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-success-light btn-icon btn-sm">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn">
                                                <i class="ri-delete-bin-5-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex p-3 border rounded-4 align-items-center bg-white flex-wrap justify-content-between gap-4 gap-xl-2 task-list mb-3">
                                        <div class="form-check mb-0 task-checkbox">
                                            <input class="form-check-input me-2" type="checkbox" name="task005" id="task005">
                                            <label class="form-check-label" for="task005">
                                                API Implementation <span class="badge bg-primary ms-2 rounded-pill">In Review</span>
                                            </label>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Due Date: <span class="text-muted mx-2">10-10-2024</span></div>
                                        </div>
                                        <div class="d-flex gap-1 flex-wrap">
                                            <div class="flex-shrink-0"><span class="text-success fw-medium">50%</span> Completed</div>
                                            <div class="progress-stacked progress-xs flex-grow-1 w-100 flex-shrink-0 my-auto gap-1">
                                                <div class="progress-bar bg-success rounded" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Priority Level: <span class="badge bg-secondary ms-2 rounded-pill">Low</span></div>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Assigned Date: <span class="text-muted mx-2">05-08-2024</span></div>
                                        </div>
                                        <div class="avatar-list-stacked">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="User Avatar 1">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="User Avatar 2">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="User Avatar 3">
                                            </span>
                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                +2
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-success-light btn-icon btn-sm">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn">
                                                <i class="ri-delete-bin-5-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex p-3 border rounded-4 align-items-center bg-white flex-wrap justify-content-between gap-4 gap-xl-2 task-list mb-3">
                                        <div class="form-check mb-0 task-checkbox">
                                            <input class="form-check-input me-2" type="checkbox" name="task006" id="task006">
                                            <label class="form-check-label" for="task006">
                                                Finalize Project Report <span class="badge bg-success ms-2 rounded-pill">Completed</span>
                                            </label>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Due Date: <span class="text-muted mx-2">15-10-2024</span></div>
                                        </div>
                                        <div class="d-flex gap-1 flex-wrap">
                                            <div class="flex-shrink-0"><span class="text-success fw-medium">100%</span> Completed</div>
                                            <div class="progress-stacked progress-xs flex-grow-1 w-100 flex-shrink-0 my-auto gap-1">
                                                <div class="progress-bar bg-success rounded" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Priority Level: <span class="badge bg-danger ms-2 rounded-pill">High</span></div>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Assigned Date: <span class="text-muted mx-2">01-09-2024</span></div>
                                        </div>
                                        <div class="avatar-list-stacked">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="User Avatar 1">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="User Avatar 2">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="User Avatar 3">
                                            </span>
                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                +1
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-success-light btn-icon btn-sm">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn">
                                                <i class="ri-delete-bin-5-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex p-3 border rounded-4 align-items-center bg-white flex-wrap justify-content-between gap-2 task-list">
                                        <div class="form-check mb-0 task-checkbox">
                                            <input class="form-check-input me-2" type="checkbox" name="task007" id="task007">
                                            <label class="form-check-label" for="task007">
                                                Design User Interface <span class="badge bg-info ms-2 rounded-pill">In Progress</span>
                                            </label>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Due Date: <span class="text-muted mx-2">30-09-2024</span></div>
                                        </div>
                                        <div class="d-flex gap-1 flex-wrap">
                                            <div class="flex-shrink-0"><span class="text-primary fw-medium">45%</span> Completed</div>
                                            <div class="progress-stacked progress-xs flex-grow-1 w-100 flex-shrink-0 my-auto gap-1">
                                                <div class="progress-bar bg-success rounded" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Priority Level: <span class="badge bg-warning ms-2 rounded-pill">Medium</span></div>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Assigned Date: <span class="text-muted mx-2">15-08-2024</span></div>
                                        </div>
                                        <div class="avatar-list-stacked">
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="User Avatar 1">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="User Avatar 2">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="User Avatar 3">
                                            </span>
                                            <a class="avatar avatar-sm bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                +2
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-success-light btn-icon btn-sm">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn">
                                                <i class="ri-delete-bin-5-line"></i>
                                            </button>
                                        </div>
                                    </div>                                                                                                                                                      
                                </div>
                                <div class="card-footer border-top-0">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination mb-0 float-end">
                                            <li class="page-item disabled">
                                                <a class="page-link">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                            <li class="page-item active" aria-current="page">
                                                <a class="page-link" href="javascript:void(0);">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
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

        <!-- Internal Invoice List JS -->
        @vite('resources/assets/js/task-list.js')
        

@endsection