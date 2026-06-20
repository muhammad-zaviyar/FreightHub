@extends('layouts.master')

@section('styles')

      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">CRM Lead</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">CRM Lead</li>
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
                                        Leads<span class="badge bg-primary rounded ms-2 fs-12 align-middle">35</span>
                                    </div>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#create-contact"><i class="ri-add-line me-1 fw-medium align-middle"></i>Add New Lead</button>
                                        <button class="btn btn-success btn-sm">Download CSV</button>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn btn-light btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Most Recent</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Date Created</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Name A - Z</a></li>
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
                                                    <th scope="col">Contact Name</th>
                                                    <th scope="col">Company</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Tags</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Lead Score</th>
                                                    <th scope="col">Owner</th>
                                                    <th scope="col">Created Date</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="crm-contact leads-list">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel10" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-md p-1 bg-primary-transparent">
                                                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Lead Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Isabella White</span>
                                                                <span class="badge bg-success-transparent">New Lead</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-light avatar-rounded p-1">
                                                                    <img src="{{asset('build/assets/images/company-logos/1.png')}}" alt="Company Logo">
                                                                </span>
                                                            </div>
                                                            <div>Dynamic Solutions</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <i class="ri-mail-line me-2 align-middle fs-14 text-info d-inline-block lh-1"></i>isabella.white@dynamicsolutions.com
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-pink"></i>6789-01234-567</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Qualified</span>
                                                        <span class="badge bg-primary-transparent">New Lead</span>
                                                    </td>
                                                    <td class="fw-medium">
                                                        249
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Assigned Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Liam Anderson</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        2024-09-15
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>                                            
                                                <tr class="crm-contact leads-list">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel9" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-md p-1 bg-secondary-transparent">
                                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Lead Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Oliver Martinez</span>
                                                                <span class="badge bg-success-transparent">Contacted</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-light avatar-rounded p-1">
                                                                    <img src="{{asset('build/assets/images/company-logos/9.png')}}" alt="Company Logo">
                                                                </span>
                                                            </div>
                                                            <div>Green Innovations</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <i class="ri-mail-line me-2 align-middle fs-14 text-info d-inline-block lh-1"></i>oliver.martinez@greeninnovations.com
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-pink"></i>4567-89012-345</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning-transparent">Follow Up</span>
                                                        <span class="badge bg-danger-transparent">Hot Lead</span>
                                                    </td>
                                                    <td class="fw-medium">
                                                        321
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="Assigned Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Emily Davis</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        2024-09-10
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact leads-list">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel8" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-md p-1 bg-success-transparent">
                                                                    <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="Lead Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Liam Taylor</span>
                                                                <span class="badge bg-success-transparent">In Progress</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-light avatar-rounded p-1">
                                                                    <img src="{{asset('build/assets/images/company-logos/8.png')}}" alt="Company Logo">
                                                                </span>
                                                            </div>
                                                            <div>Tech Solutions</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <i class="ri-mail-line me-2 align-middle fs-14 text-info d-inline-block lh-1"></i>liam.taylor@techsolutions.com
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-pink"></i>1234-56789-012</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning-transparent">Pending Follow Up</span>
                                                        <span class="badge bg-success-transparent">Qualified</span>
                                                    </td>
                                                    <td class="fw-medium">
                                                        451
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="Assigned Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Emma Johnson</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        2024-07-25
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact leads-list">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel7" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-md p-1 bg-info-transparent">
                                                                    <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="Lead Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Sophia Wilson</span>
                                                                <span class="badge bg-success-transparent">New Lead</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-light avatar-rounded p-1">
                                                                    <img src="{{asset('build/assets/images/company-logos/7.png')}}" alt="Company Logo">
                                                                </span>
                                                            </div>
                                                            <div>Innovatech</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <i class="ri-mail-line me-2 align-middle fs-14 text-info d-inline-block lh-1"></i>sophia.wilson@innovatech.com
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-pink"></i>7890-12345-678</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">Hot Lead</span>
                                                        <span class="badge bg-warning-transparent">Follow Up</span>
                                                    </td>
                                                    <td class="fw-medium">
                                                        712
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="Assigned Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Michael Brown</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        2024-08-12
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact leads-list">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel6" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-md p-1 bg-warning-transparent">
                                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Lead Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Ethan Brown</span>
                                                                <span class="badge bg-success-transparent">Contacted</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-light avatar-rounded p-1">
                                                                    <img src="{{asset('build/assets/images/company-logos/6.png')}}" alt="Company Logo">
                                                                </span>
                                                            </div>
                                                            <div>Gamma Solutions</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <i class="ri-mail-line me-2 align-middle fs-14 text-info d-inline-block lh-1"></i>ethan.brown@gammasolutions.com
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-pink"></i>6789-01234-567</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning-transparent">Pending Review</span>
                                                        <span class="badge bg-success-transparent">Hot Lead</span>
                                                    </td>
                                                    <td class="fw-medium">
                                                        532
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="Assigned Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Olivia Green</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        2024-09-20
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact leads-list">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel5" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-md p-1 bg-pink-transparent">
                                                                    <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="Lead Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Ava Martinez</span>
                                                                <span class="badge bg-success-transparent">New Inquiry</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-light avatar-rounded p-1">
                                                                    <img src="{{asset('build/assets/images/company-logos/5.png')}}" alt="Company Logo">
                                                                </span>
                                                            </div>
                                                            <div>Delta Corp</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <i class="ri-mail-line me-2 align-middle fs-14 text-info d-inline-block lh-1"></i>ava.martinez@deltacorp.com
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-pink"></i>4567-89012-345</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">Qualified</span>
                                                        <span class="badge bg-success-transparent">Follow Up</span>
                                                    </td>
                                                    <td class="fw-medium">
                                                        903
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Assigned Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Liam Johnson</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        2024-09-05
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact leads-list">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel4" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-md p-1 bg-success-transparent">
                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="Lead Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Daniel Kim</span>
                                                                <span class="badge bg-success-transparent">Contacted</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-light avatar-rounded p-1">
                                                                    <img src="{{asset('build/assets/images/company-logos/4.png')}}" alt="Company Logo">
                                                                </span>
                                                            </div>
                                                            <div>Gamma Enterprises</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <i class="ri-mail-line me-2 align-middle fs-14 text-info d-inline-block lh-1"></i>daniel.kim@gammaenterprises.com
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-pink"></i>2345-67890-123</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">Potential</span>
                                                        <span class="badge bg-success-transparent">Follow Up</span>
                                                    </td>
                                                    <td class="fw-medium">
                                                        478
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="Assigned Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Olivia Brown</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        2024-07-18
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact leads-list">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-md p-1 bg-primary-transparent">
                                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="Lead Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Lucas Martinez</span>
                                                                <span class="badge bg-success-transparent">Follow Up</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-light avatar-rounded p-1">
                                                                    <img src="{{asset('build/assets/images/company-logos/2.png')}}" alt="Company Logo">
                                                                </span>
                                                            </div>
                                                            <div>Alpha Innovations</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <i class="ri-mail-line me-2 align-middle fs-14 text-info d-inline-block lh-1"></i>lucas.m@alphainnovations.com
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-pink"></i>1234-56789-101</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">Prospect</span>
                                                        <span class="badge bg-success-transparent">Important</span>
                                                    </td>
                                                    <td class="fw-medium">
                                                        685
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="Assigned Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Emily Johnson</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        2024-09-10
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
                                                            <button class="btn btn-sm btn-success-light btn-icon"><i class="ri-pencil-line"></i></button>
                                                            <button class="btn btn-sm btn-danger-light btn-icon contact-delete"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="crm-contact leads-list">
                                                    <td class="leads-checkbox">
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel3" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-md p-1 bg-secondary-transparent">
                                                                    <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="Lead Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Sophia Chen</span>
                                                                <span class="badge bg-success-transparent">Interested</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-sm bg-light avatar-rounded p-1">
                                                                    <img src="{{asset('build/assets/images/company-logos/3.png')}}" alt="Company Logo">
                                                                </span>
                                                            </div>
                                                            <div>Beta Solutions</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <i class="ri-mail-line me-2 align-middle fs-14 text-info d-inline-block lh-1"></i>sophia.chen@betasolutions.com
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span class="d-block"><i class="ri-phone-line me-2 align-middle fs-14 text-pink"></i>9876-54321-012</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning-transparent">Review Needed</span>
                                                        <span class="badge bg-success-transparent">VIP</span>
                                                    </td>
                                                    <td class="fw-medium">
                                                        722
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-sm">
                                                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="Assigned Avatar">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-medium">Mark Davis</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium">
                                                        2024-08-25
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a class="btn btn-sm btn-primary-light btn-icon"><i class="ri-eye-line"></i></a>
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

                    <!-- Start:: Create Contact -->
                    <div class="modal fade" id="create-contact" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">Create Lead</h6>
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
                                            <label for="contact-name" class="form-label">Contact Name</label>
                                            <input type="text" class="form-control" id="contact-name" placeholder="Contact Name">
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
                                            <label class="form-label">Lead Status</label>
                                            <select class="form-control" name="choices-multiple-remove-button3" id="choices-multiple-remove-button3">
                                                <option value="">Select Status</option>
                                                <option value="Choice 1">New</option>
                                                <option value="Choice 2">Follow-up</option>
                                                <option value="Choice 3">Closed</option>
                                                <option value="Choice 4">Contacted</option>
                                                <option value="Choice 5">Disqualified</option>
                                                <option value="Choice 6">Qualified</option>
                                            </select>
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
                                            <label class="form-label">Tags</label>
                                            <select class="form-control" name="choices-multiple-remove-button2" id="choices-multiple-remove-button2" multiple>
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
        @vite('resources/assets/js/crm-leads.js')

        
@endsection