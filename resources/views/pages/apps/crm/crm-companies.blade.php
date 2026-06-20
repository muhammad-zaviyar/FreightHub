@extends('layouts.master')

@section('styles')

      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">CRM Companies</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">CRM Companies</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        CRM Companies <span class="badge bg-primary text-default rounded ms-2 fs-12 align-middle text-fixed-white">48</span>
                                    </div>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button class="btn btn-primary btn-sm btn-wave" data-bs-toggle="modal" data-bs-target="#create-company"><i class="ri-add-line me-1 fw-medium align-middle"></i>Add New Company</button>
                                        <button class="btn btn-success btn-sm btn-wave">Download CSV</button> 
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn btn-light btn-sm btn-wave" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Most Active</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Last Contacted</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">By Company Size</a></li>
                                            </ul>                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th scope="col">
                                                        <input class="form-check-input check-all" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                                    </th>
                                                    <th scope="col">Client Company</th>
                                                    <th scope="col">Contact Email</th>
                                                    <th scope="col">Contact Number</th>
                                                    <th scope="col">Employee Count</th>
                                                    <th scope="col">Business Sector</th>
                                                    <th scope="col">Primary Contact</th>
                                                    <th scope="col">No. of Deals</th>
                                                    <th scope="col">Operations</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="crm-contact companies-list">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/3.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                                role="button" aria-controls="offcanvasExample">Beta Innovations</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-info d-inline-block"></i>beta.innovations@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-pink d-inline-block"></i>2345-678-901</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                                            <span class="badge bg-info">50-200</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Marketing
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Sarah</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        200
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                            role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/4.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                                role="button" aria-controls="offcanvasExample">Gamma Tech</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-info d-inline-block"></i>gamma.tech@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-pink d-inline-block"></i>3456-789-012</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                                            <span class="badge bg-secondary">200-500</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Information Technology
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">John</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        150
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                            role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                
                                                <tr class="crm-contact companies-list">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel3" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/5.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                                role="button" aria-controls="offcanvasExample">Delta Dynamics</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-info d-inline-block"></i>delta.dynamics@example.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-pink d-inline-block"></i>4567-890-123</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                                            <span class="badge bg-pink">10-50</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Consulting
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Emily</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        75
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                            role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>                                                                                        
                                                <tr class="crm-contact companies-list">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel12" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/3.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                                role="button" aria-controls="offcanvasExample">Beta Innovations</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-info d-inline-block"></i>contact@betainnovations.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-pink d-inline-block"></i>9876-543-210</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                                            <span class="badge bg-primary">Startup</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Biotechnology
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Sophia</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        420
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                            role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel10" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/4.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Gamma Solutions</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-info d-inline-block"></i>info@gammasolutions.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-pink d-inline-block"></i>555-123-4567</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                                            <span class="badge bg-success">Enterprise</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Consulting Services
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Oliver</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        390
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel4" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/5.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Delta Tech Solutions</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-info d-inline-block"></i>contact@deltatech.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-pink d-inline-block"></i>678-987-6543</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                                            <span class="badge bg-primary">Startup</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Technology Solutions
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Sophie</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        280
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel5" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/6.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Epsilon Innovations</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-info d-inline-block"></i>info@epsiloninnovations.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-pink d-inline-block"></i>111-222-3333</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                                            <span class="badge bg-primary">Startup</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Innovation Services
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Emma</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        320
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel7" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/8.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Theta Systems</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-info d-inline-block"></i>info@thetasystems.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-pink d-inline-block"></i>456-789-0123</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                                            <span class="badge bg-success">Enterprise</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Software Solutions
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Liam</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        410
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel8" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/9.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Iota Innovations</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-info d-inline-block"></i>contact@iotainnovations.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-pink d-inline-block"></i>333-444-5555</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                                            <span class="badge bg-primary">Startup</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Digital Marketing
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Ava</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        290
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel02" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/4.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                                role="button" aria-controls="offcanvasExample">Alpha Solutions</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-info d-inline-block"></i>info@alphasolutions.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-pink d-inline-block"></i>1234-567-890</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                                            <span class="badge bg-success">Enterprise</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Technology Services
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">John</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        570
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                            role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact companies-list">
                                                    <td class="companies-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel13" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-light avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/company-logos/5.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                                role="button" aria-controls="offcanvasExample">Gamma Industries</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block mb-1"><i class="ri-mail-line me-2 align-middle fs-14 text-info d-inline-block"></i>contact@gammatech.com</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-pink d-inline-block"></i>8765-432-109</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center flex-wrap gap-1">
                                                            <span class="badge bg-primary">Startup</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Engineering
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Emily</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        320
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                            role="button" aria-controls="offcanvasExample" class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
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
                                            Showing 9 Entries <i class="bi bi-arrow-right ms-2 fw-medium"></i>
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

                    <!-- Start:: Company Details Offcanvas -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
                    aria-labelledby="offcanvasExample">
                        <div class="offcanvas-body p-0">
                            <div class="d-sm-flex align-items-top p-3 border-bottom border-block-end-dashed">
                                <span class="avatar avatar-xxl avatar-rounded me-3 p-2 bg-primary-transparent">
                                    <img src="{{asset('build/assets/images/company-logos/2.png')}}" alt="">
                                </span>
                                <div class="flex-fill main-profile-info">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="fw-medium mb-1">Alpha Solutions
                                            <span class="badge bg-success-transparent fs-10"><i class="ri-circle-fill fs-8 text-success me-1 "></i> Active Client</span>
                                        </h6>
                                        <button type="button" class="btn-close crm-contact-close-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <p class="mb-2 text-muted fs-12">Head of Business Development</p>
                                    <div class="d-flex gap-2 fs-15 mt-1">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-info"><i class="ri-phone-line"></i> Call</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="ri-mail-line"></i> Email</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-success"><i class="ri-message-line"></i> Message</a>
                                        <div class="dropdown ms-auto">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-icon btn-sm btn-secondary-light"><i class="ri-more-fill"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Company Size</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Deals</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Status</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                            <div class="d-flex mt-3 gap-3 p-1 py-0 border-bottom border-block-end-dashed">
                                <div class="p-2 text-center flex-fill">
                                    <i class="ri-shake-hands-line p-2 fs-5 rounded-circle lh-1 text-fixed-white shadow-sm bg-primary"></i>
                                    <p class="fw-semibold fs-20 text-shadow mb-0 mt-2">150</p>
                                    <p class="mb-0 text-muted">Active Deals</p>
                                </div>
                                <div class="p-2 text-center flex-fill">
                                    <i class="ri-money-dollar-circle-line p-2 fs-5 rounded-circle lh-1 text-fixed-white shadow-sm bg-primary"></i>
                                    <p class="fw-semibold fs-20 text-shadow mb-0 mt-2">$25k</p>
                                    <p class="mb-0 text-muted">Total Revenue</p>
                                </div>
                                <div class="p-2 text-center flex-fill">
                                    <i class="ri-thumb-up-line p-2 fs-5 rounded-circle lh-1 text-fixed-white shadow-sm bg-primary"></i>
                                    <p class="fw-semibold fs-20 text-shadow mb-0 mt-2">80%</p>
                                    <p class="mb-0 text-muted">Deal Success Rate</p>
                                </div>
                            </div>                          
                            <div class="p-3 border-bottom border-block-end-dashed">
                                <div class="mb-0">
                                    <p class="fs-15 mb-2 fw-medium">Professional Bio :</p>
                                    <p class="text-muted mb-0">
                                        I am <b class="text-default">Michael Johnson,</b> the lead account manager at Innovate Solutions, where I oversee client relationships and drive business growth as the Senior Account Manager.
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
                                            contact@crmcompany.com <span class="bg-light p-1 text-muted lh-1 rounded-circle ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Copy"><i class="ri-file-copy-line"></i></span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="me-2">
                                            <span class="avatar avatar-sm avatar-rounded bg-secondary-transparent">
                                                <i class="ri-phone-line align-middle fs-14"></i>
                                            </span>
                                        </div>
                                        <div>
                                            +(555) 123-4567
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-0">
                                        <div class="me-2">
                                            <span class="avatar avatar-sm avatar-rounded bg-success-transparent">
                                                <i class="ri-map-pin-line align-middle fs-14"></i>
                                            </span>
                                        </div>
                                        <div>
                                            4321 Maple Avenue, Suite 200, Metropolis, NY, 10001, USA
                                        </div>
                                    </div>                                
                                </div>
                            </div>                        
                            <div class="p-3 border-bottom border-block-end-dashed d-flex align-items-center flex-wrap gap-4">
                                <p class="fs-14 mb-0 fw-medium">Priority:</p>
                                <div class="badge bg-warning"><i class="ri-circle-fill lh-1 align-middle fs-9 me-1"></i> Medium Priority</div>
                            </div>
                            <div class="p-3 border-bottom border-block-end-dashed d-flex align-items-center gap-3">
                                <div class="fs-14 fw-medium">Company Size:</div>
                                <div>
                                    <span class="badge bg-primary">Enterprise</span> - 500+ Employees
                                </div>
                            </div>                        
                            <div class="p-3 border-bottom border-block-end-dashed d-flex align-items-center flex-wrap gap-4">
                                <p class="fs-14 mb-0 fw-medium">Created Date:</p>
                                <div>01-Sep-2024</div>
                            </div>
                            <div class="p-3 border-bottom border-block-end-dashed d-flex align-items-center flex-wrap gap-4">
                                <p class="fs-14 mb-0 fw-medium">Lead Source:</p>
                                <div><i class="ri-linkedin-line bg-info-transparent p-1 lh-1 align-middle fs-15 me-1 rounded"></i> LinkedIn</div>
                            </div>                        
                            <div class="p-3 border-bottom border-block-end-dashed d-flex align-items-center flex-wrap gap-4">
                                <p class="fs-14 mb-0 fw-medium">Social Networks :</p>
                                <div class="btn-list mb-0">
                                    <button class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light mb-0">
                                        <i class="ri-linkedin-line fw-medium"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light mb-0">
                                        <i class="ri-facebook-line fw-medium"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light mb-0">
                                        <i class="ri-twitter-x-line fw-medium"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-info-light btn-wave waves-effect waves-light mb-0">
                                        <i class="ri-whatsapp-line fw-medium"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light mb-0">
                                        <i class="ri-youtube-line fw-medium"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="p-3 border-bottom border-block-end-dashed d-flex align-items-center flex-wrap gap-4">
                                <p class="fs-14 mb-0 fw-medium">Tags :</p>
                                <div>
                                    <span class="badge bg-primary">CRM User</span>
                                    <span class="badge bg-primary">Potential Client</span>
                                </div>
                            </div>                        
                            <div class="p-3 d-flex align-items-center gap-3">
                                <div class="fs-14 fw-medium">
                                    Key Contact :
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-rounded avatar-sm">
                                            <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                        </span>
                                    </div>
                                    <div class="fw-medium">James Hartley</div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                    <!-- End:: Company Details Offcanvas -->

                    <!-- Start:: Add Company -->
                    <div class="modal fade" id="create-company" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">Add Company</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row gy-3">
                                        <div class="col-xl-12">
                                            <div class="mb-0 text-center">
                                                <span class="avatar avatar-xxl avatar-rounded p-2 bg-light">
                                                    <img src="{{asset('build/assets/images/company-logos/3.png')}}" alt="" id="profile-img">
                                                    <span class="badge rounded-pill bg-primary avatar-badge">
                                                        <input type="file" name="photo" class="position-absolute w-100 h-100 op-0" id="profile-change">
                                                        <i class="fe fe-camera"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="company-name" class="form-label">Company Name</label>
                                            <input type="text" class="form-control" id="company-name" placeholder="Contact Name">
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="total-deals" class="form-label">Total CRM Deals</label>
                                            <input type="number" class="form-control" id="total-deals" placeholder="Enter Total CRM Deals">
                                        </div>                                    
                                        <div class="col-xl-12">
                                            <label for="company-mail" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="company-mail" placeholder="Enter Email">
                                        </div>
                                        <div class="col-xl-12">
                                            <label for="company-phone" class="form-label">Phone No</label>
                                            <input type="tel" class="form-control" id="company-phone" placeholder="Enter Phone Number">
                                        </div>
                                        <div class="col-xl-12">
                                            <label for="key-contact" class="form-label">Key Contact Person</label>
                                            <input type="text" class="form-control" id="key-contact" placeholder="Enter Contact Person's Name">
                                        </div>                                    
                                        <div class="col-xl-12">
                                            <label class="form-label">Industry</label>
                                            <select class="form-control" data-trigger id="choices-single-default1" name="choices-multiple-remove-button2">
                                                <option value="">Select Industry</option>
                                                <option value="Information Technology">Information Technology</option>
                                                <option value="Customer Relationship Management">Customer Relationship Management</option>
                                                <option value="Sales">Sales</option>
                                                <option value="Marketing">Marketing</option>
                                                <option value="Financial Services">Financial Services</option>
                                                <option value="Retail">Retail</option>
                                                <option value="Healthcare">Healthcare</option>
                                                <option value="Real Estate">Real Estate</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-12">
                                            <label class="form-label">Company Size</label>
                                            <select class="form-control" data-trigger id="choices-single-default2" name="choices-multiple-remove-button3">
                                                <option value="">Select Company Size</option>
                                                <option value="Corporate">Corporate</option>
                                                <option value="Small Business">Small Business</option>
                                                <option value="Micro Business">Micro Business</option>
                                                <option value="Startup">Startup</option>
                                                <option value="Large Enterprise">Large Enterprise</option>
                                                <option value="Medium Size">Medium Size</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Create Contact</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: Add Company -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- CRM Contacts JS -->
        @vite('resources/assets/js/crm-companies.js')
        
 
@endsection