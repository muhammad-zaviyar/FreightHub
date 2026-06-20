@extends('layouts.master')

@section('styles')

      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">CRM Contacts</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">CRM Contacts</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header d-flex align-items-center justify-content-between flex-wrap gap-3">
                                    <div class="card-title">
                                        Contacts<span class="badge bg-primary rounded ms-2 fs-12 align-middle">58</span>
                                    </div>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#create-contact"><i class="ri-add-line me-1 fw-medium align-middle"></i>Add New Contact</button>
                                        <button class="btn btn-primary btn-sm">Download as Excel</button>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn btn-light btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Recently Modified</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Alphabetical Order</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Oldest First</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">
                                                        <input class="form-check-input check-all" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                                    </th>
                                                    <th scope="col">Full Name</th>
                                                    <th scope="col">Email Address</th>
                                                    <th scope="col">Contact Number</th>
                                                    <th scope="col">Organization</th>
                                                    <th scope="col">Deal Title</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Last Contacted</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="crm-contact contacts-list">
                                                    <td class="contacts-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                                                    <span class="d-block fw-medium">Jane Smith</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="d-block mb-1">
                                                            <i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>jane.smith@example.com
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block">
                                                                <i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>(321) 654-0987
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-secondary-transparent avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/3.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Global Solutions</div>
                                                        </div>
                                                    </td>
                                                    <td>Marketing Campaign</td>
                                                    <td>
                                                        <span class="badge bg-warning">Medium Priority</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted">
                                                            Sep, 18 2024 - 09:45 AM
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                            <button class="btn btn-sm btn-success-light btn-icon">
                                                                <i class="ri-pencil-line"></i>
                                                            </button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact contacts-list">
                                                    <td class="contacts-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel3" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                                                    <span class="d-block fw-medium">John Doe</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="d-block mb-1">
                                                            <i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>john.doe@example.com
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block">
                                                                <i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>(987) 654-3210
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-success-transparent avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/2.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Tech Innovators</div>
                                                        </div>
                                                    </td>
                                                    <td>Product Launch</td>
                                                    <td>
                                                        <span class="badge bg-info">High Priority</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted">
                                                            Oct, 12 2024 - 02:30 PM
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                            <button class="btn btn-sm btn-success-light btn-icon">
                                                                <i class="ri-pencil-line"></i>
                                                            </button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact contacts-list">
                                                    <td class="contacts-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel4" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                                                    <span class="d-block fw-medium">Emily Johnson</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="d-block mb-1">
                                                            <i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>emily.johnson@example.com
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block">
                                                                <i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>(555) 123-4567
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-primary-transparent avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/4.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Creative Ventures</div>
                                                        </div>
                                                    </td>
                                                    <td>Client Retention Program</td>
                                                    <td>
                                                        <span class="badge bg-success">Low Priority</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted">
                                                            Aug, 25 2024 - 11:15 AM
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                            <button class="btn btn-sm btn-success-light btn-icon">
                                                                <i class="ri-pencil-line"></i>
                                                            </button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact contacts-list">
                                                    <td class="contacts-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel5" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                                                    <span class="d-block fw-medium">Michael Brown</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="d-block mb-1">
                                                            <i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>michael.brown@example.com
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block">
                                                                <i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>(444) 987-6543
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-pink-transparent avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/5.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>NextTech Innovations</div>
                                                        </div>
                                                    </td>
                                                    <td>New Website Development</td>
                                                    <td>
                                                        <span class="badge bg-info">High Priority</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted">
                                                            Oct, 05 2024 - 03:20 PM
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                            <button class="btn btn-sm btn-success-light btn-icon">
                                                                <i class="ri-pencil-line"></i>
                                                            </button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact contacts-list">
                                                    <td class="contacts-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel6" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                                                    <span class="d-block fw-medium">Sarah Wilson</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="d-block mb-1">
                                                            <i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>sarah.wilson@example.com
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block">
                                                                <i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>(222) 333-4444
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-secondary-transparent avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/1.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Future Enterprises</div>
                                                        </div>
                                                    </td>
                                                    <td>Social Media Strategy</td>
                                                    <td>
                                                        <span class="badge bg-warning">Medium Priority</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted">
                                                            Sep, 30 2024 - 10:00 AM
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                            <button class="btn btn-sm btn-success-light btn-icon">
                                                                <i class="ri-pencil-line"></i>
                                                            </button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact contacts-list">
                                                    <td class="contacts-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel7" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                                                    <span class="d-block fw-medium">David Lee</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="d-block mb-1">
                                                            <i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>david.lee@example.com
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block">
                                                                <i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>(555) 555-1212
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-info-transparent avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/6.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Green Tech Solutions</div>
                                                        </div>
                                                    </td>
                                                    <td>Annual Revenue Review</td>
                                                    <td>
                                                        <span class="badge bg-danger">Critical Priority</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted">
                                                            Nov, 01 2024 - 01:45 PM
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                            <button class="btn btn-sm btn-success-light btn-icon">
                                                                <i class="ri-pencil-line"></i>
                                                            </button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact contacts-list">
                                                    <td class="contacts-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel8" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                                                    <span class="d-block fw-medium">Linda Taylor</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="d-block mb-1">
                                                            <i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>linda.taylor@example.com
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block">
                                                                <i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>(333) 222-1111
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-secondary-transparent avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/7.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Health Solutions Inc.</div>
                                                        </div>
                                                    </td>
                                                    <td>Annual Revenue Review</td>
                                                    <td>
                                                        <span class="badge bg-warning">Medium Priority</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted">
                                                            Dec, 15 2024 - 09:00 AM
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                            <button class="btn btn-sm btn-success-light btn-icon">
                                                                <i class="ri-pencil-line"></i>
                                                            </button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact contacts-list">
                                                    <td class="contacts-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel9" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                                                    <span class="d-block fw-medium">James Miller</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="d-block mb-1">
                                                            <i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>james.miller@example.com
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block">
                                                                <i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>(888) 555-0199
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-info-transparent avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/8.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Innovative Designs</div>
                                                        </div>
                                                    </td>
                                                    <td>Brand Revitalization Project</td>
                                                    <td>
                                                        <span class="badge bg-info">High Priority</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted">
                                                            Jan, 10 2025 - 02:30 PM
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                            <button class="btn btn-sm btn-success-light btn-icon">
                                                                <i class="ri-pencil-line"></i>
                                                            </button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact contacts-list">
                                                    <td class="contacts-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel10" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                                                    <span class="d-block fw-medium">Emily Johnson</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="d-block mb-1">
                                                            <i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>emily.johnson@example.com
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block">
                                                                <i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>(777) 123-4567
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-info-transparent avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/9.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>Creative Agency</div>
                                                        </div>
                                                    </td>
                                                    <td>Customer Feedback Initiative</td>
                                                    <td>
                                                        <span class="badge bg-danger">Critical Priority</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted">
                                                            Feb, 20 2025 - 11:15 AM
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                            <button class="btn btn-sm btn-success-light btn-icon">
                                                                <i class="ri-pencil-line"></i>
                                                            </button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr> 
                                                <tr class="crm-contact contacts-list">
                                                    <td class="contacts-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel11" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                                                    <span class="d-block fw-medium">Michael Brown</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="d-block mb-1">
                                                            <i class="ri-mail-line me-2 align-middle fs-14 text-muted"></i>michael.brown@example.com
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block">
                                                                <i class="ri-phone-line me-2 align-middle fs-14 text-muted"></i>(444) 888-0000
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-success-transparent avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/10.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>NextGen Technologies</div>
                                                        </div>
                                                    </td>
                                                    <td>Partnership Collaboration</td>
                                                    <td>
                                                        <span class="badge bg-warning">Medium Priority</span>
                                                    </td>
                                                    <td>
                                                        <span class="d-block text-muted fs-11" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Last Contacted">
                                                            Mar, 05 2025 - 03:45 PM
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                            <button class="btn btn-sm btn-success-light btn-icon">
                                                                <i class="ri-pencil-line"></i>
                                                            </button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer border-top-0">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            Showing 10 Entries <i class="bi bi-arrow-right ms-2 fw-medium"></i>
                                        </div>
                                        <div class="ms-auto">
                                            <nav aria-label="Page navigation" class="pagination-style-4">
                                                <ul class="pagination mb-0">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="javascript:void(0);">
                                                            Prev
                                                        </a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link text-primary" href="javascript:void(0);">
                                                            next
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start:: Contact Details Offcanvas -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
                    aria-labelledby="offcanvasExample">
                        <div class="offcanvas-body p-0">
                            <div class="d-sm-flex align-items-top p-3 border-bottom border-block-end-dashed">
                                <span class="avatar avatar-xxl avatar-rounded me-3">
                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                </span>
                                <div class="flex-fill main-profile-info">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="fw-medium mb-1">Sophia Williams
                                            <span class="badge bg-info-transparent fs-10"><i class="ri-circle-fill fs-8 text-info me-1"></i> Follow Up Required</span>
                                        </h6>
                                        <button type="button" class="btn-close crm-contact-close-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <p class="mb-2 text-muted fs-12">Marketing Director</p>
                                    <div class="d-flex gap-2 fs-15 mt-1">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-secondary-light"><i class="ri-phone-line"></i> Call</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary-light"><i class="ri-mail-line"></i> Mail</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-success-light"><i class="ri-message-line"></i> Message</a>
                                        <div class="dropdown ms-auto">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-icon btn-sm btn-info-light"><i class="ri-more-fill"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Edit Profile</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">View Reports</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Change Status</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                            <div class="d-flex mt-3 gap-3 p-1 py-0 border-bottom border-block-end-dashed">
                                <div class="p-2 text-center flex-fill">
                                    <i class="ri-shake-hands-line p-2 fs-5 rounded-circle lh-1 text-fixed-white shadow-sm bg-success"></i>
                                    <p class="fw-semibold fs-20 text-shadow mb-0 mt-2">320</p>
                                    <p class="mb-0 text-muted">Partnerships</p>
                                </div>
                                <div class="p-2 text-center flex-fill">
                                    <i class="ri-money-dollar-circle-line p-2 fs-5 rounded-circle lh-1 text-fixed-white shadow-sm bg-success"></i>
                                    <p class="fw-semibold fs-20 text-shadow mb-0 mt-2">$15k</p>
                                    <p class="mb-0 text-muted">Investments</p>
                                </div>
                                <div class="p-2 text-center flex-fill">
                                    <i class="ri-thumb-up-line p-2 fs-5 rounded-circle lh-1 text-fixed-white shadow-sm bg-success"></i>
                                    <p class="fw-semibold fs-20 text-shadow mb-0 mt-2">$20k</p>
                                    <p class="mb-0 text-muted">Goals Achieved</p>
                                </div>
                            </div>                          
                            <div class="p-3 border-bottom border-block-end-dashed">
                                <div class="mb-0">
                                    <p class="fs-15 mb-2 fw-medium">Professional Bio :</p>
                                    <p class="text-muted mb-0">
                                        I am <b class="text-default">Sophia Williams,</b> the proud founder and CEO of Innovative Solutions, specializing in marketing strategies and business development.
                                    </p>
                                </div>   
                            </div>  
                            <div class="p-3 border-bottom border-block-end-dashed">
                                <p class="fs-14 mb-2 fw-medium">Contact Information :</p>
                                <div class="">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="me-2">
                                            <span class="avatar avatar-sm avatar-rounded bg-primary-transparent">
                                                <i class="ri-mail-line align-middle fs-14"></i>
                                            </span>
                                        </div>
                                        <div>
                                            sophiawilliams@example.com <span class="text-muted lh-1 rounded-circle ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Copy"><i class="ri-file-copy-fill"></i></span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="me-2">
                                            <span class="avatar avatar-sm avatar-rounded bg-secondary-transparent">
                                                <i class="ri-phone-line align-middle fs-14"></i>
                                            </span>
                                        </div>
                                        <div>
                                            +(444) 777-8901
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-0">
                                        <div class="me-2">
                                            <span class="avatar avatar-sm avatar-rounded bg-success-transparent">
                                                <i class="ri-map-pin-line align-middle fs-14"></i>
                                            </span>
                                        </div>
                                        <div>
                                            5678 Oak Avenue, Suite 200, Metropolis, IL, 62901, USA
                                        </div>
                                    </div>                                
                                </div>
                            </div>                        
                            <div class="p-3 border-bottom border-block-end-dashed d-flex align-items-center flex-wrap gap-4">
                                <p class="fs-14 mb-0 fw-medium">Priority:</p>
                                <div class="badge bg-info"><i class="ri-circle-fill lh-1 align-middle fs-9 me-1"></i> High Priority</div>
                            </div>
                            <div class="p-3 border-bottom border-block-end-dashed d-flex align-items-center flex-wrap gap-4">
                                <p class="fs-14 mb-0 fw-medium">Created Date:</p>
                                <div>10-Sep-2024</div>
                            </div>
                            <div class="p-3 border-bottom border-block-end-dashed d-flex align-items-center flex-wrap gap-4">
                                <p class="fs-14 mb-0 fw-medium">Social Networks :</p>
                                <div class="btn-list mb-0">
                                    <button class="btn btn-sm btn-icon btn-primary btn-wave waves-effect waves-light mb-0">
                                        <i class="ri-facebook-line fw-medium"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-info btn-wave waves-effect waves-light mb-0">
                                        <i class="ri-linkedin-line fw-medium"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-secondary btn-wave waves-effect waves-light mb-0">
                                        <i class="ri-twitter-x-line fw-medium"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-success btn-wave waves-effect waves-light mb-0">
                                        <i class="ri-instagram-line fw-medium"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-danger btn-wave waves-effect waves-light mb-0">
                                        <i class="ri-youtube-line fw-medium"></i>
                                    </button>
                                </div>
                            </div>                        
                            <div class="p-3 border-bottom border-block-end-dashed d-flex align-items-center flex-wrap gap-4">
                                <p class="fs-14 mb-0 me-4 fw-medium">Tags :</p>
                                <div>
                                    <span class="badge bg-success-transparent">VIP Client</span>
                                    <span class="badge bg-warning-transparent">Pending Follow-Up</span>
                                </div>
                            </div>
                            <div class="p-3">
                                <p class="fs-14 mb-2 fw-medium">Relationship Manager :
                                    <a class="bg-success-transparent fs-12 p-1 pe-2 rounded mb-0 float-end" href="javascript:void(0);"><i class="ri-add-line me-1 align-middle"></i>Add Manager</a>
                                </p>
                                <div class="avatar-list-stacked">
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                    </span>
                                    <span class="avatar avatar-sm avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                    </span>
                                </div>
                            </div>                        
                        </div>
                    </div>
                    <!-- End:: Contact Details Offcanvas -->

                    <!-- Start:: Create Contact -->
                    <div class="modal fade" id="create-contact" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">Create Contact</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row gy-3">
                                        <div class="col-xl-12">
                                            <div class="mb-0 text-center">
                                                <span class="avatar avatar-xxl avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="" id="profile-img">
                                                    <span class="badge rounded-pill bg-primary avatar-badge">
                                                        <input type="file" name="photo" class="position-absolute w-100 h-100 op-0" id="profile-change">
                                                        <i class="fe fe-camera"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <label for="deal-title" class="form-label">Deal Title</label>
                                            <input type="text" class="form-control" id="deal-title" placeholder="Deal Title">
                                        </div>
                                        <div class="col-xl-12">
                                            <label for="contact-mail" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="contact-mail" placeholder="Enter Email">
                                        </div>
                                        <div class="col-xl-12">
                                            <label for="contact-phone" class="form-label">Phone No</label>
                                            <input type="tel" class="form-control" id="contact-phone" placeholder="Enter Phone Number">
                                        </div>
                                        <div class="col-xl-12">
                                            <label for="company-name" class="form-label">Company Name</label>
                                            <input type="text" class="form-control" id="company-name" placeholder="Company Name">
                                        </div>
                                        <div class="col-xl-12">
                                            <label class="form-label">Lead Source</label>
                                            <select class="form-control" name="choices-multiple-remove-button1" id="choices-multiple-remove-button1">
                                                <option value="Choice 1">Social Media</option>
                                                <option value="Choice 2">Direct mail</option>
                                                <option value="Choice 3">Blog Articles</option>
                                                <option value="Choice 4">Affiliates</option>
                                                <option value="Choice 5">Organic search</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-12">
                                            <label class="form-label">Last Contacted</label>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                    <input type="text" class="form-control" id="targetDate" placeholder="Choose date and time">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <label class="form-label">Tags</label>
                                            <select class="form-control" name="choices-multiple-remove-button2" id="choices-multiple-remove-button2" multiple>
                                                <option value="">Select Tag</option>
                                                <option value="Choice 1">New Lead</option>
                                                <option value="Choice 2">Prospect</option>
                                                <option value="Choice 3">Customer</option>
                                                <option value="Choice 4">Hot Lead</option>
                                                <option value="Choice 5">Partner</option>
                                                <option value="Choice 6">LostCustomer</option>
                                                <option value="Choice 7">Influencer</option>
                                                <option value="Choice 8">Subscriber</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn m-0 btn-secondary me-2"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn m-0 btn-primary">Create Contact</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: Create Contact -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- CRM Contacts JS -->
        @vite('resources/assets/js/crm-contacts.js')
        

@endsection