@extends('layouts.master')

@section('styles')

        <!-- Filepond CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">
        
        <!-- Dragula CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/dragula/dragula.min.css')}}">
      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content kanban-bgimage">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Kanban Board</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Kanban Board</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->
                    
                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xxl-10">
                            <div class="card custom-card">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                        <div class="d-flex align-items-center flex-wrap gap-2 flex-xxl-nowrap" role="search">
                                            <span class="fw-medium fs-15 text-nowrap flex-nowrap me-2">WorkSpace :</span>
                                            <input class="form-control me-1" type="search" placeholder="Search Tasks" aria-label="Search">
                                            <button class="btn btn-success-light btn-w-lg" type="submit">Search</button>
                                        </div>
                                        <div class="ms-auto d-flex gap-4 align-items-center flex-wrap">
                                            <div class="d-flex gap-2 kanban-board flex-wrap">
                                                <div class="flex-fill">
                                                    <select class="form-control kanban-sortby" data-trigger name="choices-single-default" id="choices-single-default">
                                                        <option value="">Sort By</option>
                                                        <option value="Newest">Newest</option>
                                                        <option value="Date Added">Date Added</option>
                                                        <option value="Type">Type</option>
                                                        <option value="A - Z">A - Z</option>
                                                    </select>
                                                </div> 
                                                <button class="btn btn-primary"><i class="ri-filter-3-line me-1 fw-medium align-middle"></i>Filter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="SPK-kanban-board">
                                <div class="kanban-tasks-type todo">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center p-3 border-bottom border-primary border-block-end-dashed border-opacity-25 rounded-top bg-white">
                                            <div class="d-flex gap-1 align-items-center">
                                                <div class="d-block fw-medium fs-15 text-primary">Todo Tasks </div>
                                                <div class="text-muted fs-11">(50)</div>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-task" class="px-1 bg-primary text-fixed-white lh-1 rounded"><i class="ri-add-line lh-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kanban-tasks rounded-bottom" id="todo-tasks">
                                        <div id="todo-tasks-draggable" data-view-btn="todo-tasks">
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="task-badges">
                                                        <span class="badge bg-primary-transparent">ID: #SPRU115</span>
                                                        <span class="badge bg-secondary-transparent">Authentication</span>
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton04" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton04">
                                                            <li><a class="dropdown-item" href="#">View</a></li>
                                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                        <h6 class="fw-medium mb-1 fs-15">Create Wireframes.</h6>
                                                    </a>
                                                    <p class="kanban-task-description">Outline the project goals, objectives, and requirements.</p>
                                                    <div class="mb-1">
                                                        <span class="fw-medium">Priority: </span><span class="badge bg-success">Low</span>
                                                    </div>
                                                    <div>
                                                        <span class="fw-medium">Status: </span><span class="fs-11 text-muted">30% Completed<i class="bi bi-bar-chart-fill mx-1 text-pink"></i></span>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-top border-block-start-dashed">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                            </span>
                                                            <div>
                                                                <div class="fw-medium">Jessica</div>
                                                                <div class="text-muted fs-10">Team Lead</div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="me-2 text-success">
                                                                <span class="me-1"><i class="ri-user-line align-center fw-normal lh-1"></i></span><span class="fw-medium fs-12">03</span>
                                                            </a>
                                                            <a href="javascript:void(0);" class="me-2 text-secondary">
                                                                <span class="me-1"><i class="ri-attachment-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">08</span>
                                                            </a>
                                                            <a href="javascript:void(0);" class="text-info">
                                                                <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">04</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="task-badges">
                                                        <span class="badge bg-primary-transparent">ID: #SPRU117</span>
                                                        <span class="badge bg-success-transparent">Marketing</span>
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton05" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton05">
                                                            <li><a class="dropdown-item" href="#">View</a></li>
                                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="fw-medium mb-1 fs-15">Optimize Query Performance</h6>
                                                    <p class="kanban-task-description">Improve the efficiency and speed of DB queries.</p>
                                                    <div class="mb-1">
                                                        <span class="fw-medium">Priority: </span><span class="badge bg-danger">High</span>
                                                    </div>
                                                    <div>
                                                        <span class="fw-medium">Status: </span><span class="fs-11 text-muted">10% Completed<i class="bi bi-bar-chart-fill mx-1 text-pink"></i></span>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-top border-block-start-dashed">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                            </span>
                                                            <div>
                                                                <div class="fw-medium">Smith Ki</div>
                                                                <div class="text-muted fs-10">Project Manager</div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="me-2 text-success">
                                                                <span class="me-1"><i class="ri-user-line align-center fw-normal lh-1"></i></span><span class="fw-medium fs-12">03</span>
                                                            </a>
                                                            <a href="javascript:void(0);" class="me-2 text-secondary">
                                                                <span class="me-1"><i class="ri-attachment-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">23</span>
                                                            </a>
                                                            <a href="javascript:void(0);" class="text-info">
                                                                <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">12</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex view-more-button mt-3 gap-2 align-items-center">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-wave flex-fill">View More</a>
                                    </div>
                                </div>
                                <div class="kanban-tasks-type in-progress">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center p-3 border-bottom border-secondary border-block-end-dashed border-opacity-25 rounded-top bg-white">
                                            <div class="d-flex gap-1 align-items-center">
                                                <div class="d-block fw-medium fs-15 text-secondary">In Progress Tasks </div>
                                                <div class="text-muted fs-11">(24)</div>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-task" class="px-1 bg-secondary text-fixed-white lh-1 rounded"><i class="ri-add-line lh-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kanban-tasks rounded-bottom" id="inprogress-tasks">
                                        <div id="inprogress-tasks-draggable" data-view-btn="inprogress-tasks">
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="task-badges">
                                                        <span class="badge bg-primary-transparent">ID: #SPRU124</span>
                                                        <span class="badge bg-danger-transparent">UI Design</span>
                                                        <span class="badge bg-success-transparent">Development</span>
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton06" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton06">
                                                            <li><a class="dropdown-item" href="#">View</a></li>
                                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="fw-medium mb-1 fs-15">Update User Access Permissions</h6>
                                                    <p class="kanban-task-description">Revise and manage user access levels to ensure</p>
                                                    <div class="mb-1">
                                                        <span class="fw-medium">Priority: </span><span class="badge bg-warning">Medium</span>
                                                    </div>
                                                    <div>
                                                        <span class="fw-medium">Status: </span><span class="fs-11 text-muted">40% Completed<i class="bi bi-bar-chart-fill mx-1 text-pink"></i></span>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-top border-block-start-dashed">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                            </span>
                                                            <div>
                                                                <div class="fw-medium">Daniel D</div>
                                                                <div class="text-muted fs-10">Team Head</div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="me-2 text-success">
                                                                <span class="me-1"><i class="ri-user-line align-center fw-normal lh-1"></i></span><span class="fw-medium fs-12">03</span>
                                                            </a>
                                                            <a href="javascript:void(0);" class="me-2 text-secondary">
                                                                <span class="me-1"><i class="ri-attachment-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">10</span>
                                                            </a>
                                                            <a href="javascript:void(0);" class="text-info">
                                                                <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">18</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="task-badges">
                                                        <span class="badge bg-primary-transparent">ID: #SPRU247</span>
                                                        <span class="badge bg-success-transparent">Design</span>
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton07" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton07">
                                                            <li><a class="dropdown-item" href="#">View</a></li>
                                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="fw-medium mb-1 fs-15">Ensure Dashboard Security</h6>
                                                    <p class="kanban-task-description"> Protect the dashboard from unauthorized access to safeguard.</p>
                                                    <div class="mb-1">
                                                        <span class="fw-medium">Priority: </span><span class="badge bg-success">Low</span>
                                                    </div>
                                                    <div>
                                                        <span class="fw-medium">Status: </span><span class="fs-11 text-muted">15% Completed<i class="bi bi-bar-chart-fill mx-1 text-pink"></i></span>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-top border-block-start-dashed">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                                            </span>
                                                            <div>
                                                                <div class="fw-medium">Sonia Nerwal</div>
                                                                <div class="text-muted fs-10">Team Lead</div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="me-2 text-success">
                                                                <span class="me-1"><i class="ri-user-line align-center fw-normal lh-1"></i></span><span class="fw-medium fs-12">03</span>
                                                            </a>
                                                            <a href="javascript:void(0);" class="me-2 text-secondary">
                                                                <span class="me-1"><i class="ri-attachment-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">05</span>
                                                            </a>
                                                            <a href="javascript:void(0);" class="text-info">
                                                                <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">02</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex view-more-button mt-3 gap-2 align-items-center">
                                        <a href="javascript:void(0);" class="btn btn-secondary btn-wave flex-fill">View More</a>
                                    </div>
                                </div>
                                <div class="kanban-tasks-type inreview">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center p-3 border-bottom border-success border-block-end-dashed border-opacity-25 rounded-top bg-white">
                                            <div class="d-flex gap-1 align-items-center">
                                                <div class="d-block fw-medium fs-15 text-success">In Review Tasks </div>
                                                <div class="text-muted fs-11">(67)</div>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-task" class="px-1 bg-success text-fixed-white lh-1 rounded"><i class="ri-add-line lh-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kanban-tasks rounded-bottom" id="inreview-tasks">
                                        <div id="inreview-tasks-draggable" data-view-btn="inreview-tasks">
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="task-badges">
                                                        <span class="badge bg-primary-transparent">ID: #SPRU345</span>
                                                        <span class="badge bg-success-transparent">Review</span>
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton08" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton08">
                                                            <li><a class="dropdown-item" href="#">View</a></li>
                                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="fw-medium mb-1 fs-15">Analyze Dashboard Performance</h6>
                                                    <p class="kanban-task-description">Evaluate the efficiency and effectiveness of the dashboard.</p>
                                                    <div class="mb-1">
                                                        <span class="fw-medium">Priority: </span><span class="badge bg-warning">Medium</span>
                                                    </div>
                                                    <div>
                                                        <span class="fw-medium">Status: </span><span class="fs-11 text-muted">22% Completed<i class="bi bi-bar-chart-fill mx-1 text-pink"></i></span>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-top border-block-start-dashed">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex gap-1 align-items-center">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                            </span>
                                                            <div>
                                                                <div class="fw-medium">Monish</div>
                                                                <div class="text-muted fs-10">Project Lead</div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="me-2 text-success">
                                                                <span class="me-1"><i class="ri-user-line align-center fw-normal lh-1"></i></span><span class="fw-medium fs-12">03</span>
                                                            </a>
                                                            <a href="javascript:void(0);" class="me-2 text-secondary">
                                                                <span class="me-1"><i class="ri-attachment-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">09</span>
                                                            </a>
                                                            <a href="javascript:void(0);" class="text-info">
                                                                <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">35</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex view-more-button mt-3 gap-2 align-items-center">
                                        <a href="javascript:void(0);" class="btn btn-success btn-wave flex-fill">View More</a>
                                    </div>
                                </div>
                                <div class="kanban-tasks-type completed">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center p-3 border-bottom border-danger border-block-end-dashed border-opacity-25 rounded-top bg-white">
                                            <div class="d-flex gap-1 align-items-center">
                                                <div class="d-block fw-medium fs-15 text-danger">Completed Tasks</div>
                                                <div class="text-muted fs-11">(57)</div>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-task" class="px-1 bg-danger text-fixed-white lh-1 rounded"><i class="ri-add-line lh-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kanban-tasks rounded-bottom" id="completed-tasks">
                                        <div id="completed-tasks-draggable" data-view-btn="completed-tasks">
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="task-badges">
                                                        <span class="badge bg-primary-transparent">ID: #SPRU553</span>
                                                        <span class="badge bg-success-transparent">Review</span>
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton09" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton09">
                                                            <li><a class="dropdown-item" href="#">View</a></li>
                                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="fw-medium mb-1 fs-15">Test Dashboard Usability</h6>
                                                    <p class="kanban-task-description">Assess the ease of use, accessibility, and overall user experience.</p>
                                                    <div class="mb-1">
                                                        <span class="fw-medium">Priority: </span><span class="badge bg-danger">High</span>
                                                    </div>
                                                    <div>
                                                        <span class="fw-medium">Status: </span><span class="fs-11 text-muted">100% Completed<i class="bi bi-bar-chart-fill mx-1 text-pink"></i></span>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-top border-block-start-dashed">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex gap-1 align-items-center">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                                            </span>
                                                            <div>
                                                                <div class="fw-medium">Arora</div>
                                                                <div class="text-muted fs-10">Team Manager</div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="me-2 text-success">
                                                                <span class="me-1"><i class="ri-user-line align-center fw-normal lh-1"></i></span><span class="fw-medium fs-12">03</span>
                                                            </a>
                                                            <a href="javascript:void(0);" class="me-2 text-secondary">
                                                                <span class="me-1"><i class="ri-attachment-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">09</span>
                                                            </a>
                                                            <a href="javascript:void(0);" class="text-info">
                                                                <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">35</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="task-badges">
                                                        <span class="badge bg-primary-transparent">ID: #SPRU665</span>
                                                        <span class="badge bg-success-transparent">Development</span>
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton10">
                                                            <li><a class="dropdown-item" href="#">View</a></li>
                                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="fw-medium mb-1 fs-15">Update Security Certifications</h6>
                                                    <p class="kanban-task-description">Ensure that all security certifications are current and meet.</p>
                                                    <div class="mb-1">
                                                        <span class="fw-medium">Priority: </span><span class="badge bg-success">Low</span>
                                                    </div>
                                                    <div>
                                                        <span class="fw-medium">Status: </span><span class="fs-11 text-muted">100% Completed<i class="bi bi-bar-chart-fill mx-1 text-pink"></i></span>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-top border-block-start-dashed">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex gap-1 align-items-center">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                            </span>
                                                            <div>
                                                                <div class="fw-medium">kerindh</div>
                                                                <div class="text-muted fs-10">Project Lead</div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="me-2 text-success">
                                                                <span class="me-1"><i class="ri-user-line align-center fw-normal lh-1"></i></span><span class="fw-medium fs-12">03</span>
                                                            </a>
                                                            <a href="javascript:void(0);" class="me-2 text-secondary">
                                                                <span class="me-1"><i class="ri-attachment-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">22</span>
                                                            </a>
                                                            <a href="javascript:void(0);" class="text-info">
                                                                <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">12</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="task-badges">
                                                        <span class="badge bg-primary-transparent">ID: #SPRU205</span>
                                                        <span class="badge bg-success-transparent">Discussion</span>
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton11" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton11">
                                                            <li><a class="dropdown-item" href="#">View</a></li>
                                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="fw-medium mb-1 fs-15">Test Integration Stability</h6>
                                                    <p class="kanban-task-description">Ensure that integrated components or systems work together.</p>
                                                    <div class="mb-1">
                                                        <span class="fw-medium">Priority: </span><span class="badge bg-danger">High</span>
                                                    </div>
                                                    <div>
                                                        <span class="fw-medium">Status: </span><span class="fs-11 text-muted">100% Completed<i class="bi bi-bar-chart-fill mx-1 text-pink"></i></span>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-top border-block-start-dashed">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex gap-1 align-items-center">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                                            </span>
                                                            <div>
                                                                <div class="fw-medium">Iswar</div>
                                                                <div class="text-muted fs-10">Project Manager</div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="me-2 text-success">
                                                                <span class="me-1"><i class="ri-user-line align-center fw-normal lh-1"></i></span><span class="fw-medium fs-12">03</span>
                                                            </a>
                                                            <a href="javascript:void(0);" class="me-2 text-secondary">
                                                                <span class="me-1"><i class="ri-attachment-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">11</span>
                                                            </a>
                                                            <a href="javascript:void(0);" class="text-info">
                                                                <span class="me-1"><i class="ri-message-2-line align-middle fw-normal"></i></span><span class="fw-medium fs-12">12</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex view-more-button mt-3 gap-2 align-items-center">
                                        <a href="javascript:void(0);" class="btn btn-danger btn-wave flex-fill">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2">
                            <div class="card custom-card">
                                <div class="card-body"> 
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2">
                                            <div class="fs-14 fw-medium pb-2">Menu</div>
                                        </li>
                                        <li class="active bg-primary-transparent px-2 py-1 mb-1 rounded-1">
                                            <a href="javascript:void(0)">
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <div class="me-2">
                                                        <i class="ri-dashboard-fill fs-16 text-primary"></i>
                                                    </div>
                                                    <span class="flex-fill text-nowrap text-primary">
                                                        Board Tasks
                                                    </span>
                                                    <span class="badge bg-primary ms-auto">78</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="px-2 py-1 mb-2   ">
                                            <a href="javascript:void(0)" class="hover-color-primary">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <i class="ri-history-fill fs-16"></i>
                                                    </div>
                                                    <span class="flex-fill text-nowrap">
                                                        Pending Tasks
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="px-2 py-1 mb-2   ">
                                            <a href="javascript:void(0)" class="hover-color-primary">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <i class="ri-error-warning-line fs-15 lh-1"></i>
                                                    </div>
                                                    <span class="flex-fill text-nowrap">
                                                        Overdue
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="px-2 py-1 mb-2">
                                            <a href="javascript:void(0)" class="hover-color-primary">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <i class="ri-checkbox-circle-line fs-15 lh-1"></i>
                                                    </div>
                                                    <span class="flex-fill text-nowrap">
                                                        Upcoming Tasks
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="px-2 py-1 mb-2">
                                            <a href="javascript:void(0)" class="hover-color-primary">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <i class="ri-timeline-view fs-15 lh-1"></i>
                                                    </div>
                                                    <span class="flex-fill text-nowrap">
                                                        Timeline
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="px-2 py-1 mb-2">
                                            <a href="javascript:void(0)" class="hover-color-primary">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <i class="ri-equalizer-2-line fs-15 lh-1"></i>
                                                    </div>
                                                    <span class="flex-fill text-nowrap">
                                                        Activity
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="px-2 py-1">
                                            <a href="javascript:void(0)" class="hover-color-primary">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <i class="ri-hourglass-line fs-15 lh-1"></i>
                                                    </div>
                                                    <span class="flex-fill text-nowrap">
                                                        Priority Tasks
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body border-top border-block-start-dashed">
                                    <div class="fs-14 fw-medium pb-2">On Board Members</div>
                                    <div class="p-3 bg-light rounded-3 mb-3">
                                        <div>
                                            <span class="avatar avatar-sm avatar-rounded align-center">
                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded align-center">
                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm online avatar-rounded align-center">
                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded align-center">
                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded align-center">
                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm online avatar-rounded align-center">
                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm avatar-rounded align-center">
                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm online avatar-rounded align-center">
                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 text-nowrap flex-wrap">
                                        <button class="btn btn-primary flex-fill"><i class="ri-add-line me-1 fw-medium align-middle"></i>Member</button>
                                        <button class="btn btn-primary flex-fill" data-bs-toggle="modal" data-bs-target="#add-board"><i class="ri-add-line me-1 fw-semibold align-middle"></i>Board</button>
                                    </div>
                                </div>
                                <div class="card-body border-top border-block-start-dashed">
                                    <div class="fs-14 fw-medium pb-2">Labels</div>
                                    <div class="p-3 border border-dashed rounded-3 mb-3">
                                        <span class="badge bg-success-transparent">Development</span>
                                        <span class="badge bg-secondary-transparent">Marketing</span>
                                        <span class="badge bg-primary-transparent">UX Design</span>
                                        <span class="badge bg-info-transparent">UX Design</span>
                                        <span class="badge bg-purple-transparent">Design</span>
                                        <span class="badge bg-warning-transparent">UI</span>
                                        <span class="badge bg-danger-transparent">Development</span>
                                        <span class="badge bg-primary-transparent">UX Design</span>
                                        <span class="badge bg-pink-transparent">React</span>
                                        <span class="badge bg-info-transparent">front End</span>
                                    </div>
                                    <button class="btn btn-success-light w-100"><i class="ri-add-line me-1 fw-medium align-middle"></i>Add Label</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start::add board modal -->
                    <div class="modal fade" id="add-board" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">Add Board</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <label for="board-title" class="form-label">Task Board Title</label>
                                            <input type="text" class="form-control" id="board-title" placeholder="Board Title">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Add Board</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::add board modal -->

                    <!-- Start::add task modal -->
                    <div class="modal fade" id="add-task" tabindex="-1" aria-hidden="true">
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
                                        <div class="col-xl-12">
                                            <label for="text-area" class="form-label">Task Description</label>
                                            <textarea class="form-control" id="text-area" rows="2" placeholder="Write Description"></textarea>
                                        </div>
                                        <div class="col-xl-12">
                                            <label for="text-area" class="form-label">Task Images</label>
                                            <input type="file" class="multiple-filepond" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
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
                                            <label class="form-label">Tags</label>
                                            <select class="form-control" name="choices-multiple-remove-button2" id="choices-multiple-remove-button2" multiple>
                                                <option value="">Select Tag</option>
                                                <option value="UI/UX">UI/UX</option>
                                                <option value="Marketing">Marketing</option>
                                                <option value="Finance">Finance</option>
                                                <option value="Designing">Designing</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Authentication">Authentication</option>
                                                <option value="Product">Product</option>
                                                <option value="Development">Development</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn m-0 me-2 btn-secondary-light"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn m-0 btn-primary">Add Task</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::add task modal -->

                </div>
            </div>
            <!-- End::app-content -->

            <!-- Start::mail information offcanvas -->
            <div class="offcanvas offcanvas-end mail-info-offcanvas" tabindex="-1" id="offcanvasRight"> 
                <div class="offcanvas-body p-0">
                    <div class="mails-information">
                            <div class="mail-info-header d-flex flex-wrap gap-2 align-items-center">
                                <span class="avatar avatar-md me-2 avatar-rounded mail-msg-avatar me-1">
                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                </span>
                                <div class="flex-fill">
                                    <h6 class="mb-0 fw-medium">Raiden stevie</h6>
                                    <span class="text-muted fs-11">raidenstevie777@gmail.com</span>
                                </div>
                                <div class="mail-action-icons">
                                    <button class="btn btn-icon btn-outline-light border" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Starred">
                                        <i class="ri-star-line"></i>
                                    </button>
                                    <button class="btn btn-icon btn-outline-light border ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Archive">
                                        <i class="ri-inbox-archive-line"></i>
                                    </button>
                                    <button class="btn btn-icon btn-outline-light border ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Report spam">
                                        <i class="ri-spam-2-line"></i>
                                    </button>
                                    <button class="btn btn-icon btn-outline-light border ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                                        <i class="ri-delete-bin-line"></i>
                                    </button>
                                    <button class="btn btn-icon btn-outline-light border ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reply">
                                        <i class="ri-reply-line"></i>
                                    </button>
                                    <button type="button" class="btn-close btn btn-sm btn-icon border" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="responsive-mail-action-icons">
                                    <div class="dropdown">
                                        <button class="btn btn-icon btn-light btn-wave waves-light waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-star-line me-1 align-middle d-inline-block"></i>Starred</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-inbox-archive-line me-1 align-middle d-inline-block"></i>Archive</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-spam-2-line me-1 align-middle d-inline-block"></i>Report Spam</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-reply-line me-1 align-middle d-inline-block"></i>Reply</a></li>
                                        </ul>
                                    </div>
                                    <button class="btn btn-icon btn-light ms-1 close-button" data-bs-dismiss="offcanvas" aria-label="Close">
                                        <i class="ri-close-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="mail-info-body p-3" id="mail-info-body">
                                <div class="d-sm-flex d-block align-items-center justify-content-between mb-3">
                                    <div>
                                        <p class="fs-20 fw-medium mb-0">Strategic Insights Webinar: Navigating Future Trends.</p>
                                    </div>
                                    <div class="float-end">
                                        <span class="fs-12 text-muted">Oct-22-2024,03:05PM</span>
                                    </div>
                                </div>
                                <div class="main-mail-content mb-3">
                                    <p class="fs-14 fw-medium mb-3">Greetings Mr Jack &#128400;,</p>
                                    <p class="mb-2 text-muted">We're excited to invite you to our upcoming webinar, "Navigating Future Trends," where industry experts will share strategic insights to help you stay ahead in an ever-evolving landscape. Join us on [Date] at [Time] for an engaging session that promises to provide actionable knowledge and valuable perspectives.</p>
                                    <span class="d-block text-muted fw-meidum">Key Highlights :</span>
                                    <ul class="text-muted my-3">
                                        <li class="mb-2">Expert analysis of emerging trends</li>
                                        <li class="mb-2">Practical strategies for staying competitive</li>
                                        <li class="mb-2">Q&A session for personalized insights</li>
                                    </ul>
                                    <p class="mb-2 text-muted">Earth has a diameter of roughly 8,000 miles (13,000 kilometers) and is mostly round because gravity generally pulls matter into a ball. But the spin of our home planet causes it to be squashed at its poles and swollen at the equator, making the true shape of the Earth an "oblate spheroid.".</p>
                                    <p class="mb-0 mt-4">
                                        <span class="d-block">Best Regards,</span>
                                        <span class="d-block">Raiden stevie</span>
                                    </p>
                                </div>
                                <div class="mail-attachments mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mb-2"> 
                                            <span class="fs-14 fw-medium"><i class="ri-attachment-2 me-1 align-middle"></i>Attachments (5.8KB):</span>
                                        </div>
                                        <div class="btn-list">
                                            <button class="btn btn-sm btn-primary-light">Download All</button>
                                        </div>
                                    </div>    
                                    <div class="mt-2 d-flex flex-wrap gap-3">
                                        <div class="d-flex align-items-center flex-wrap gap-3 border p-2 rounded-2">
                                            <div class="me-1 lh-1">
                                                <span class="avatar avatar-md bg-primary">
                                                    <i class="ri-file-pdf-2-line fs-18"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);">
                                                    <p class="mb-1 fs-12 fw-medium">
                                                        Instructions_file.pdf
                                                    </p>
                                                </a>
                                                <div class="fs-12 text-muted text-wrap">2.1KB</div>  
                                            </div>
                                            <div class="ms-auto btn btn-sm btn-secondary-light rounded-circle btn-icon">
                                                <i class="ri-download-line"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap gap-3 border p-2 rounded-2">
                                            <div class="me-1 lh-1">
                                                <span class="avatar avatar-md bg-primary">
                                                    <i class="ri-file-pdf-line fs-18"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);">
                                                    <p class="mb-1 fs-12 fw-medium">
                                                        Complete_Folder.doc
                                                    </p>
                                                </a>
                                                <div class="fs-12 text-muted text-wrap">1.5KB</div>  
                                            </div>
                                            <div class="ms-auto btn btn-sm btn-secondary-light rounded-circle btn-icon">
                                                <i class="ri-download-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mail-images mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mb-2"> 
                                            <span class="fs-14 fw-medium"><i class="ri-image-line me-1 align-middle"></i>Images:</span>
                                        </div>
                                        <div class="btn-list">
                                            <button class="btn btn-sm btn-primary-light">Download All</button>
                                        </div>
                                    </div>    
                                    <div class="mt-2 d-flex flex-wrap gap-3">
                                        <a href="javascript:void(0)">
                                            <span class="avatar avatar-lg shadow-sm">
                                                <img src="{{asset('build/assets/images/media/media-74.jpg')}}" alt="">
                                            </span>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <span class="avatar avatar-lg shadow-sm">
                                                <img src="{{asset('build/assets/images/media/media-75.jpg')}}" alt="">
                                            </span>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <span class="avatar avatar-lg shadow-sm">
                                                <img src="{{asset('build/assets/images/media/media-77.jpg')}}" alt="">
                                            </span>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <span class="avatar avatar-lg bg-primary-transparent">
                                                5+
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="mb-3"> 
                                    <span class="fs-14 fw-medium"><i class="ri-reply-all-line me-1 align-middle d-inline-block"></i>Reply:</span>
                                </div>
                                <div class="mail-reply">
                                    <div id="mail-reply-editor"></div>
                                </div>
                            </div>
                            <div class="mail-info-footer d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                <div>
                                    <button class="btn btn-icon btn-primary-light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print">
                                        <i class="ri-printer-line"></i>
                                    </button>
                                    <button class="btn btn-icon btn-secondary-light ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Mark as read">
                                        <i class="ri-mail-open-line"></i>
                                    </button>
                                    <button class="btn btn-icon btn-success-light ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reload">
                                        <i class="ri-refresh-line"></i>
                                    </button>
                                </div>
                                <div>
                                    <button class="btn btn-secondary">
                                        <i class="ri-share-forward-line me-1 d-inline-block align-middle"></i>Forward
                                    </button>
                                    <button class="btn btn-danger ms-1">
                                        <i class="ri-reply-all-line me-1 d-inline-block align-middle"></i>Reply
                                    </button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <!-- End::mail information offcanvas -->
        
@endsection

@section('scripts')

        <!-- Filepond JS -->
        <script src="{{asset('build/assets/libs/filepond/filepond.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js')}}"></script>

        <!-- Dragula JS -->
        <script src="{{asset('build/assets/libs/dragula/dragula.min.js')}}"></script>

        <!-- Internal Task  JS -->
        @vite('resources/assets/js/task-kanban-board.js')
        

@endsection