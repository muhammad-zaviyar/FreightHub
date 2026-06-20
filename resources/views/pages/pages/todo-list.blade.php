@extends('layouts.master')

@section('styles')

        <!-- Dragula CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/dragula/dragula.min.css')}}">
      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">To-do List</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">To-do List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                        <!-- Start::row-1 -->
                        <div class="row">
                            <div class="col-xl-9">
                            <div class="card custom-card">
                                    <div class="card-header d-block">
                                        <div class="card-title mb-3">
                                            Tasks List
                                        </div>
                                        <div>
                                            <ul class="nav nav-tabs tab-style-1 d-sm-flex d-block mb-0 align-items-center" role="tablist">
                                                <li class="nav-item m-1">
                                                    <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page"
                                                    href="#all-tasks" aria-selected="true">All Tasks</a>
                                                </li>
                                                <li class="nav-item m-1">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab"
                                                    href="#in-progress-tasks" aria-selected="false">In Progress</a>
                                                </li>
                                                <li class="nav-item m-1">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab"
                                                    href="#on-hold-tasks" aria-selected="false">On-Hold</a>
                                                </li>
                                                <li class="nav-item m-1">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab"
                                                    href="#pending-tasks" aria-selected="false">Pending</a>
                                                </li>
                                                <li class="nav-item m-1">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab"
                                                    href="#completed" aria-selected="false">Completed</a>
                                                </li>
                                                <li class="ms-auto">
                                                    <span class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#addtask"> <i class="fe fe-plus"></i> New Task </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane show active p-0 border-0" id="all-tasks"
                                            role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="table text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                <input class="form-check-input check-all" type="checkbox" value="" aria-label="Select All Tasks">
                                                            </th>
                                                            <th class="todolist-handle-drag">
                                                            </th>
                                                            <th scope="col">Task Title</th>
                                                            <th scope="col">Priority</th>
                                                            <th scope="col">Assigner</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Assigned To</th>
                                                            <th scope="col">Deadline</th>
                                                            <th scope="col" class="todolist-progress">Progress</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="todo-drag">
                                                        <tr class="todo-box">
                                                            <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="..."></td>
                                                            <td>
                                                                <button class="btn btn-icon btn-sm btn-wave btn-light todo-handle">: :</button>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium">Design Mockups</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-warning">Medium</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="Maria">
                                                                    </span>
                                                                    Maria
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-danger">On Hold</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                25-Feb-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 50%"></div>
                                                                    </div>
                                                                    <div class="ms-2">50%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="..."></td>
                                                            <td>
                                                                <button class="btn btn-icon btn-sm btn-wave btn-light todo-handle">: :</button>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium">Marketing Campaign Review</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-danger">Urgent</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="David Kim">
                                                                    </span>
                                                                    David Kim
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-warning">Pending</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                01-Mar-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 15%"></div>
                                                                    </div>
                                                                    <div class="ms-2">15%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="..." checked></td>
                                                            <td>
                                                                <button class="btn btn-icon btn-sm btn-wave btn-light todo-handle">: :</button>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium">Website Redesign</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success">Low</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Lucy Chang">
                                                                    </span>
                                                                    Lucy Chang
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-success">Completed</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                22-Jan-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 100%"></div>
                                                                    </div>
                                                                    <div class="ms-2">100%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="..."></td>
                                                            <td>
                                                                <button class="btn btn-icon btn-sm btn-wave btn-light todo-handle">: :</button>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium">Client Meeting Preparation</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-pink">High</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="Marcus Riley">
                                                                    </span>
                                                                    Marcus Riley
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-warning">Pending</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                05-Feb-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 45%"></div>
                                                                    </div>
                                                                    <div class="ms-2">45%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="..." checked></td>
                                                            <td>
                                                                <button class="btn btn-icon btn-sm btn-wave btn-light todo-handle">: :</button>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium">SEO Optimization</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success">Low</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="Emily Wang">
                                                                    </span>
                                                                    Emily Wang
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-success">Completed</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                10-Mar-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 100%"></div>
                                                                    </div>
                                                                    <div class="ms-2">100%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="..."></td>
                                                            <td>
                                                                <button class="btn btn-icon btn-sm btn-wave btn-light todo-handle">: :</button>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium">Quarterly Budget Review</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-pink">High</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="James">
                                                                    </span>
                                                                    James
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-warning">Pending</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                18-Mar-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%"></div>
                                                                    </div>
                                                                    <div class="ms-2">20%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="..."></td>
                                                            <td>
                                                                <button class="btn btn-icon btn-sm btn-wave btn-light todo-handle">: :</button>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium">Mobile App Launch</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-warning">Medium</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Sophia Kim">
                                                                    </span>
                                                                    Sophia Kim
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-danger">On Hold</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                30-Mar-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 60%"></div>
                                                                    </div>
                                                                    <div class="ms-2">60%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="..."></td>
                                                            <td>
                                                                <button class="btn btn-icon btn-sm btn-wave btn-light todo-handle">: :</button>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium">Team Building Activity</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success">Low</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Lucas Roy">
                                                                    </span>
                                                                    Lucas Roy
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium">Upcoming</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                10-Apr-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 0%"></div>
                                                                    </div>
                                                                    <div class="ms-2">0%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="..."></td>
                                                            <td>
                                                                <button class="btn btn-icon btn-sm btn-wave btn-light todo-handle">: :</button>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium">Market Research</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-pink">High</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="Oliver Smith">
                                                                    </span>
                                                                    Oliver Smith
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-info">In Progress</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                15-Apr-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 75%"></div>
                                                                    </div>
                                                                    <div class="ms-2">75%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td class="task-checkbox"><input class="form-check-input" type="checkbox" value="" aria-label="..."></td>
                                                            <td>
                                                                <button class="btn btn-icon btn-sm btn-wave btn-light todo-handle">: :</button>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium">Website Redesign</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-warning">medium</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="Ava Lee">
                                                                    </span>
                                                                    Ava Lee
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-warning">Pending</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                20-Apr-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 5%"></div>
                                                                    </div>
                                                                    <div class="ms-2">5%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane p-0 border-0" id="in-progress-tasks"
                                            role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="table text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Task Title</th>
                                                            <th scope="col">Priority</th>
                                                            <th scope="col">Assigner</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Assigned To</th>
                                                            <th scope="col">Deadline</th>
                                                            <th scope="col" class="todolist-progress">Progress</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Team Building Activity</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success">Low</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Lucas Roy">
                                                                    </span>
                                                                    Lucas Roy
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-info">In Progress</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                10-Apr-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 0%"></div>
                                                                    </div>
                                                                    <div class="ms-2">0%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Market Research</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-pink">High</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="Oliver Smith">
                                                                    </span>
                                                                    Oliver Smith
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-info">In Progress</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                15-Apr-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 75%"></div>
                                                                    </div>
                                                                    <div class="ms-2">75%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Website Redesign</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-warning">medium</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="Ava Lee">
                                                                    </span>
                                                                    Ava Lee
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-info">In Progress</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                20-Apr-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 5%"></div>
                                                                    </div>
                                                                    <div class="ms-2">5%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Website Redesign</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success">Low</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Lucy Chang">
                                                                    </span>
                                                                    Lucy Chang
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-info">In Progress</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                22-Jan-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 100%"></div>
                                                                    </div>
                                                                    <div class="ms-2">100%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Client Meeting Preparation</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-pink">High</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="Marcus Riley">
                                                                    </span>
                                                                    Marcus Riley
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-info">In Progress</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                05-Feb-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 45%"></div>
                                                                    </div>
                                                                    <div class="ms-2">45%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Design Mockups</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-warning">Medium</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="Maria">
                                                                    </span>
                                                                    Maria
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-info">In Progress</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                25-Feb-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 50%"></div>
                                                                    </div>
                                                                    <div class="ms-2">50%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Marketing Campaign Review</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-danger">Urgent</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="David Kim">
                                                                    </span>
                                                                    David Kim
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-info">In Progress</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                01-Mar-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 15%"></div>
                                                                    </div>
                                                                    <div class="ms-2">15%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">SEO Optimization</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success">Low</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="Emily Wang">
                                                                    </span>
                                                                    Emily Wang
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-info">In Progress</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                10-Mar-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 100%"></div>
                                                                    </div>
                                                                    <div class="ms-2">100%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Quarterly Budget Review</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-pink">High</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="James">
                                                                    </span>
                                                                    James
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-info">In Progress</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                18-Mar-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%"></div>
                                                                    </div>
                                                                    <div class="ms-2">20%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane p-0 border-0" id="on-hold-tasks"
                                            role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="table text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Task Title</th>
                                                            <th scope="col">Priority</th>
                                                            <th scope="col">Assigner</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Assigned To</th>
                                                            <th scope="col">Deadline</th>
                                                            <th scope="col" class="todolist-progress">Progress</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Team Building Activity</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success">Low</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Lucas Roy">
                                                                    </span>
                                                                    Lucas Roy
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-danger">On Hold</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                10-Apr-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 0%"></div>
                                                                    </div>
                                                                    <div class="ms-2">0%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Market Research</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-pink">High</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="Oliver Smith">
                                                                    </span>
                                                                    Oliver Smith
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-danger">On Hold</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                15-Apr-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 75%"></div>
                                                                    </div>
                                                                    <div class="ms-2">75%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Website Redesign</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-warning">medium</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="Ava Lee">
                                                                    </span>
                                                                    Ava Lee
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-danger">On Hold</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                20-Apr-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 5%"></div>
                                                                    </div>
                                                                    <div class="ms-2">5%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Website Redesign</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success">Low</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Lucy Chang">
                                                                    </span>
                                                                    Lucy Chang
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-danger">On Hold</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                22-Jan-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 100%"></div>
                                                                    </div>
                                                                    <div class="ms-2">100%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Client Meeting Preparation</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-pink">High</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="Marcus Riley">
                                                                    </span>
                                                                    Marcus Riley
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-danger">On Hold</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                05-Feb-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 45%"></div>
                                                                    </div>
                                                                    <div class="ms-2">45%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Design Mockups</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-warning">Medium</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="Maria">
                                                                    </span>
                                                                    Maria
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-danger">On Hold</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                25-Feb-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 50%"></div>
                                                                    </div>
                                                                    <div class="ms-2">50%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Marketing Campaign Review</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-danger">Urgent</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="David Kim">
                                                                    </span>
                                                                    David Kim
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-danger">On Hold</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                01-Mar-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 15%"></div>
                                                                    </div>
                                                                    <div class="ms-2">15%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">SEO Optimization</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success">Low</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="Emily Wang">
                                                                    </span>
                                                                    Emily Wang
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-danger">On Hold</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                10-Mar-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 100%"></div>
                                                                    </div>
                                                                    <div class="ms-2">100%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Quarterly Budget Review</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-pink">High</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="James">
                                                                    </span>
                                                                    James
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-danger">On Hold</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                18-Mar-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%"></div>
                                                                    </div>
                                                                    <div class="ms-2">20%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane p-0 border-0" id="pending-tasks"
                                            role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="table text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Task Title</th>
                                                            <th scope="col">Priority</th>
                                                            <th scope="col">Assigner</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Assigned To</th>
                                                            <th scope="col">Deadline</th>
                                                            <th scope="col" class="todolist-progress">Progress</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Team Building Activity</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success">Low</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Lucas Roy">
                                                                    </span>
                                                                    Lucas Roy
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-warning">Pending</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                10-Apr-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 0%"></div>
                                                                    </div>
                                                                    <div class="ms-2">0%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Market Research</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-pink">High</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="Oliver Smith">
                                                                    </span>
                                                                    Oliver Smith
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-warning">Pending</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                15-Apr-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 75%"></div>
                                                                    </div>
                                                                    <div class="ms-2">75%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Website Redesign</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-warning">medium</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="Ava Lee">
                                                                    </span>
                                                                    Ava Lee
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-warning">Pending</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                20-Apr-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 5%"></div>
                                                                    </div>
                                                                    <div class="ms-2">5%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Website Redesign</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success">Low</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Lucy Chang">
                                                                    </span>
                                                                    Lucy Chang
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-warning">Pending</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                22-Jan-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 100%"></div>
                                                                    </div>
                                                                    <div class="ms-2">100%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Client Meeting Preparation</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-pink">High</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="Marcus Riley">
                                                                    </span>
                                                                    Marcus Riley
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-warning">Pending</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                05-Feb-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 45%"></div>
                                                                    </div>
                                                                    <div class="ms-2">45%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Design Mockups</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-warning">Medium</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="Maria">
                                                                    </span>
                                                                    Maria
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-warning">Pending</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                25-Feb-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 50%"></div>
                                                                    </div>
                                                                    <div class="ms-2">50%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Marketing Campaign Review</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-danger">Urgent</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="David Kim">
                                                                    </span>
                                                                    David Kim
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-warning">Pending</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                01-Mar-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 15%"></div>
                                                                    </div>
                                                                    <div class="ms-2">15%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">SEO Optimization</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success">Low</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="Emily Wang">
                                                                    </span>
                                                                    Emily Wang
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-warning">Pending</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                10-Mar-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 100%"></div>
                                                                    </div>
                                                                    <div class="ms-2">100%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Quarterly Budget Review</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-pink">High</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="James">
                                                                    </span>
                                                                    James
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-warning">Pending</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                18-Mar-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%"></div>
                                                                    </div>
                                                                    <div class="ms-2">20%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane p-0 border-0" id="completed"
                                            role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="table text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Task Title</th>
                                                            <th scope="col">Priority</th>
                                                            <th scope="col">Assigner</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Assigned To</th>
                                                            <th scope="col">Deadline</th>
                                                            <th scope="col" class="todolist-progress">Progress</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Team Building Activity</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success">Low</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Lucas Roy">
                                                                    </span>
                                                                    Lucas Roy
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-success">Completed</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                10-Apr-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 0%"></div>
                                                                    </div>
                                                                    <div class="ms-2">0%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Market Research</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-pink">High</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="Oliver Smith">
                                                                    </span>
                                                                    Oliver Smith
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-success">Completed</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                15-Apr-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 75%"></div>
                                                                    </div>
                                                                    <div class="ms-2">75%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Website Redesign</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-warning">medium</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="Ava Lee">
                                                                    </span>
                                                                    Ava Lee
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-success">Completed</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                20-Apr-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 5%"></div>
                                                                    </div>
                                                                    <div class="ms-2">5%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Website Redesign</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success">Low</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Lucy Chang">
                                                                    </span>
                                                                    Lucy Chang
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-success">Completed</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                22-Jan-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 100%"></div>
                                                                    </div>
                                                                    <div class="ms-2">100%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Client Meeting Preparation</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-pink">High</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="Marcus Riley">
                                                                    </span>
                                                                    Marcus Riley
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-success">Completed</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                05-Feb-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 45%"></div>
                                                                    </div>
                                                                    <div class="ms-2">45%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Design Mockups</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-warning">Medium</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="Maria">
                                                                    </span>
                                                                    Maria
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-success">Completed</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                25-Feb-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 50%"></div>
                                                                    </div>
                                                                    <div class="ms-2">50%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Marketing Campaign Review</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-danger">Urgent</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="David Kim">
                                                                    </span>
                                                                    David Kim
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-success">Completed</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                01-Mar-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 15%"></div>
                                                                    </div>
                                                                    <div class="ms-2">15%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">SEO Optimization</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success">Low</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="Emily Wang">
                                                                    </span>
                                                                    Emily Wang
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-success">Completed</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                10-Mar-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 100%"></div>
                                                                    </div>
                                                                    <div class="ms-2">100%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="todo-box">
                                                            <td>
                                                                <span class="fw-medium">Quarterly Budget Review</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-pink">High</span>
                                                            </td>
                                                            <td>
                                                                <div class="text-center d-flex gap-2 flex-wrap align-items-center fw-medium">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="James">
                                                                    </span>
                                                                    James
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-medium text-success">Completed</span>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-list-stacked">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                18-Mar-2024
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%"></div>
                                                                    </div>
                                                                    <div class="ms-2">20%</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex gap-2">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="todo-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer border-top-0"> 
                                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2"> 
                                                <div> Showing 10 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i> </div>
                                                <div> 
                                                    <nav aria-label="Page navigation" class="pagination-style-4"> 
                                                        <ul class="pagination mb-0"> 
                                                            <li class="page-item disabled"> <a class="page-link" href="javascript:void(0);"> Prev </a> </li>
                                                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li> 
                                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li> 
                                                            <li class="page-item"> <a class="page-link text-primary" href="javascript:void(0);"> next </a> </li> 
                                                        </ul> 
                                                    </nav> 
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>
                            </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header gap-3 align-items-center pb-3 border-bottom border-block-end-dashed d-block text-center">
                                        <div class="p-3 bg-primary-transparent rounded">
                                            <img src="{{asset('build/assets/images/media/media-84.png')}}" alt="" class="img-fluid todolist-img mb-3">
                                            <div class="card-title mb-3 text-default">
                                                Create New To-Do List
                                                <span class="text-muted d-block fs-12 fw-normal"> Create new list</span>
                                            </div>
                                            <button class="btn btn-secondary">
                                                <i class="ri-add-line me-1"></i> New To-Do List
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="p-3 task-navigation">
                                            <ul class="list-unstyled task-main-nav mb-0">
                                                <li class="px-0 pt-0">
                                                    <span class="fs-11 text-muted op-7 fw-medium">Task Categories</span>
                                                </li>
                                                <li class="active">
                                                    <a href="javascript:void(0);">
                                                        <div class="d-flex align-items-center">
                                                            <span class="me-2 lh-1">
                                                                <i class="ri-checkbox-multiple-line align-middle fs-14"></i>
                                                            </span>
                                                            <span class="flex-fill text-nowrap">
                                                                All Tasks
                                                            </span>
                                                            <span class="badge bg-info-transparent rounded-pill">84</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="d-flex align-items-center">
                                                            <span class="me-2 lh-1">
                                                                <i class="ri-checkbox-circle-line align-middle fs-14 text-success"></i>
                                                            </span>
                                                            <span class="flex-fill text-nowrap">
                                                                Completed
                                                            </span>
                                                            <span class="badge bg-success-transparent rounded-pill">04</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="d-flex align-items-center">
                                                            <span class="me-2 lh-1">
                                                                <i class="ri-calendar-line align-middle fs-14 text-warning"></i>
                                                            </span>
                                                            <span class="flex-fill text-nowrap">
                                                                Due Today
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="d-flex align-items-center">
                                                            <span class="me-2 lh-1">
                                                                <i class="ri-time-line text-info align-middle fs-14"></i>
                                                            </span>
                                                            <span class="flex-fill text-nowrap">
                                                                Pending Approval
                                                            </span>
                                                            <span class="badge bg-info-transparent rounded-pill">02</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="d-flex align-items-center">
                                                            <span class="me-2 lh-1">
                                                                <i class="ri-star-line text-warning align-middle fs-14"></i>
                                                            </span>
                                                            <span class="flex-fill text-nowrap">
                                                                Starred Tasks
                                                            </span>
                                                            <span class="badge bg-warning-transparent rounded-pill">05</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="d-flex align-items-center">
                                                            <span class="me-2 lh-1">
                                                                <i class="ri-user-line text-primary align-middle fs-14"></i>
                                                            </span>
                                                            <span class="flex-fill text-nowrap">
                                                                Personal Tasks
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="d-flex align-items-center">
                                                            <span class="me-2 lh-1">
                                                                <i class="ri-briefcase-line text-primary align-middle fs-14"></i>
                                                            </span>
                                                            <span class="flex-fill text-nowrap">
                                                                Work Tasks
                                                            </span>
                                                            <span class="badge bg-primary-transparent rounded-pill">06</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="d-flex align-items-center">
                                                            <span class="me-2 lh-1">
                                                                <i class="ri-delete-bin-5-line text-danger align-middle fs-14"></i>
                                                            </span>
                                                            <span class="flex-fill text-nowrap">
                                                                Deleted Tasks
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled task-main-nav mb-0">
                                                <li class="px-0 pt-2 d-flex justify-content-between gap-2 align-items-center">
                                                    <span class="fs-11 text-muted op-7 fw-medium">Workspace Overview</span>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                                        <div><input class="form-check-input" type="checkbox" value="" aria-label="..."></div>
                                                        <div>
                                                            <a href="javascript:void(0);">
                                                                <span class="fw-medium"> Client Meeting Preparation...</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                                        <div><input class="form-check-input" type="checkbox" value="" aria-label="..."></div>
                                                        <div>
                                                            <a href="javascript:void(0);">
                                                                <span class="fw-medium">Feature Implementation Updates...</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                                        <div><input class="form-check-input" type="checkbox" value="" aria-label="..."></div>
                                                        <div>
                                                            <a href="javascript:void(0);">
                                                                <span class="fw-medium">Quality Assurance Testing...</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                                        <div><input class="form-check-input" type="checkbox" value="" aria-label="..."></div>
                                                        <div>
                                                            <a href="javascript:void(0);">
                                                                <span class="fw-medium">Finalizing Project Deliverables...</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End::row-1 -->

                </div>
            </div>
            <!-- End::app-content -->

            <!-- Start::add tasks -->
            <div class="modal fade" id="addtask" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title" id="mail-ComposeLabel">Create Task</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row gy-2">
                                <div class="col-xl-12">
                                    <label for="task-name" class="form-label">Task Name</label>
                                    <input type="text" class="form-control" id="task-name" placeholder="Task Name">
                                </div>
                                <div class="col-xl-12">
                                    <label class="form-label">Assigned To</label>
                                    <select class="form-control" name="choices-multiple-remove-button" id="choices-multiple-remove-button" multiple>
                                        <option value="Choice 1" selected>Angelina May</option>
                                        <option value="Choice 2">Sarah Ruth</option>
                                        <option value="Choice 3">Hercules Jhon</option>
                                        <option value="Choice 4">Mayor Kim</option>
                                    </select>
                                </div>
                                <div class="col-xl-6">
                                    <label class="form-label">Assigned Date</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                            <input type="text" class="form-control" id="addignedDate" placeholder="Choose date and time">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <label class="form-label">Target Date</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                            <input type="text" class="form-control" id="targetDate" placeholder="Choose date and time">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <label class="form-label">Status</label>
                                    <select class="form-control" data-trigger name="choices-single-default1" id="choices-single-default1">
                                        <option value="">Select</option>
                                        <option value="one">In Progress</option>
                                        <option value="two">Not Started</option>
                                        <option value="three">Completed</option>
                                        <option value="four">Pending</option>
                                    </select>
                                </div>
                                <div class="col-xl-6">
                                    <label class="form-label">Priority</label>
                                    <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                        <option value="">Select</option>
                                        <option value="Critical">Critical</option>
                                        <option value="High">High</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Low">Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn m-0 me-2 btn-light"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn m-0 btn-primary">Create</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::add tasks -->

@endsection

@section('scripts')
    
        <!-- Dragula JS -->
        <script src="{{asset('build/assets/libs/dragula/dragula.min.js')}}"></script>

        <!-- Internal To-Do-List JS -->
        @vite('resources/assets/js/todolist.js')
        

@endsection