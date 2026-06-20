@extends('layouts.master')

@section('styles')

      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Team</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Team</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start:: row-1 -->
                    <div class="row bg-primary-transparent py-3 px-1 mb-3">
                        <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card team-member text-center">
                                <div class="team-shape1"></div>
                                <div class="team-shape2"></div>
                                <div class="card-body py-4">
                                    <div class="mb-3 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="rounded-circle p-2 bg-primary bg-opacity-25 shadow-sm">
                                            <img src="{{asset('build/assets/images/faces/7.jpg')}}" class="card-img rounded-circle" alt="...">
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-2 fw-medium">Selena Rivera</h6>
                                        <p class="mb-0 text-primary fw-semibold">MARKETING DIRECTOR</p>
                                        <hr class="bg-success border-success border-2 border-top">
                                        <p class="text-muted fs-12 pt-1 px-2">Selena is an expert in digital marketing strategies and brand building, helping our company reach a global audience through innovative campaigns and partnerships.</p>
                                        <div class="d-flex justify-content-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-primary btn-wave btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-secondary btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-success btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-info btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                            <div class="card custom-card team-member text-center">
                                <div class="team-shape1"></div>
                                <div class="team-shape2"></div>
                                <div class="card-body py-4">
                                    <div class="mb-3 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="rounded-circle p-2 bg-primary bg-opacity-25 shadow">
                                            <img src="{{asset('build/assets/images/faces/12.jpg')}}" class="card-img rounded-circle" alt="Rowan Elara">
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-2 fw-medium">Rowan Elara</h6>
                                        <p class="mb-0 text-primary fw-semibold">CHIEF DESIGN OFFICER</p>
                                        <hr class="bg-success border-success border-2 border-top">
                                        <p class="text-muted fs-12 pt-1 px-2">Rowan leads our design department, ensuring that user-centered design principles are at the core of every product, driving creativity and innovation.</p>
                                        <div class="d-flex justify-content-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-primary btn-wave btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-secondary btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-success btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-info btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6 col-12 mt-sm-5">
                            <div class="card custom-card team-member text-center">
                                <div class="team-shape1"></div>
                                <div class="team-shape2"></div>
                                <div class="card-body py-4">
                                    <div class="mb-3 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="rounded-circle p-2 bg-secondary bg-opacity-25 shadow-sm">
                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" class="card-img rounded-circle" alt="...">
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-2 fw-medium">Ariana Wolfe</h6>
                                        <p class="mb-0 text-primary fw-semibold">CHIEF OPERATIONS OFFICER</p>
                                        <hr class="bg-success border-success border-2 border-top">
                                        <p class="text-muted fs-12 pt-1 px-2">Ariana has over a decade of experience in operational excellence and business strategies, ensuring smooth and efficient workflows across all departments.</p>
                                        <div class="d-flex justify-content-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-primary btn-wave btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-secondary btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-success btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-info btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card team-member text-center">
                                <div class="team-shape1"></div>
                                <div class="team-shape2"></div>
                                <div class="card-body py-4">
                                    <div class="mb-3 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="rounded-circle p-2 bg-primary bg-opacity-25 shadow-sm">
                                            <img src="{{asset('build/assets/images/faces/6.jpg')}}" class="card-img rounded-circle" alt="...">
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-2 fw-medium">Oliver Grayson</h6>
                                        <p class="mb-0 text-primary fw-semibold">HEAD OF ENGINEERING</p>
                                        <hr class="bg-success border-success border-2 border-top">
                                        <p class="text-muted fs-12 pt-1 px-2">With over 15 years of experience in software development, Oliver leads our engineering team with a focus on innovation and performance-driven solutions.</p>
                                        <div class="d-flex justify-content-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-primary btn-wave btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-secondary btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-success btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-info btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>                                                
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card team-member text-center">
                                <div class="team-shape1"></div>
                                <div class="team-shape2"></div>
                                <div class="card-body py-4">
                                    <div class="mb-3 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="rounded-circle p-2 bg-success bg-opacity-25 shadow-sm">
                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" class="card-img rounded-circle" alt="Xavier Holt">
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-2 fw-medium">Xavier Holt</h6>
                                        <p class="mb-0 text-primary fw-semibold">CHIEF FINANCIAL OFFICER</p>
                                        <hr class="bg-success border-success border-2 border-top">
                                        <p class="text-muted fs-12 pt-1 px-2">Xavier brings over 20 years of financial expertise to the company, ensuring our financial stability and growth through strategic planning.</p>
                                        <div class="d-flex justify-content-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-primary btn-wave btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-secondary btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-success btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-info btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                            <div class="card custom-card team-member text-center">
                                <div class="team-shape1"></div>
                                <div class="team-shape2"></div>
                                <div class="card-body py-4">
                                    <div class="mb-3 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="rounded-circle p-2 bg-warning bg-opacity-25 shadow-sm">
                                            <img src="{{asset('build/assets/images/faces/9.jpg')}}" class="card-img rounded-circle" alt="Isabella Grey">
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-2 fw-medium">Isabella Grey</h6>
                                        <p class="mb-0 text-primary fw-semibold">HEAD OF HUMAN RESOURCES</p>
                                        <hr class="bg-success border-success border-2 border-top">
                                        <p class="text-muted fs-12 pt-1 px-2">Isabella leads our HR team, fostering a positive company culture, recruiting top talent, and ensuring employee well-being and professional growth.</p>
                                        <div class="d-flex justify-content-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-primary btn-wave btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-secondary btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-success btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-info btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>                                                                    
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6 col-12 mt-sm-5">
                            <div class="card custom-card team-member text-center">
                                <div class="team-shape1"></div>
                                <div class="team-shape2"></div>
                                <div class="card-body py-4">
                                    <div class="mb-3 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="rounded-circle p-2 bg-info bg-opacity-25 shadow-sm">
                                            <img src="{{asset('build/assets/images/faces/10.jpg')}}" class="card-img rounded-circle" alt="Mateo Cruz">
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-2 fw-medium">Mateo Cruz</h6>
                                        <p class="mb-0 text-primary fw-semibold">HEAD OF PRODUCT DEVELOPMENT</p>
                                        <hr class="bg-success border-success border-2 border-top">
                                        <p class="text-muted fs-12 pt-1 px-2">Mateo oversees the entire product development lifecycle, ensuring that our solutions meet market needs through innovative design and rigorous testing.</p>
                                        <div class="d-flex justify-content-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-primary btn-wave btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-secondary btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-success btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-info btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>                                                
                            <div class="card custom-card team-member text-center">
                                <div class="team-shape1"></div>
                                <div class="team-shape2"></div>
                                <div class="card-body py-4">
                                    <div class="mb-3 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="rounded-circle p-2 bg-danger bg-opacity-25 shadow-sm">
                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" class="card-img rounded-circle" alt="Alina Vargas">
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-2 fw-medium">Alina Vargas</h6>
                                        <p class="mb-0 text-primary fw-semibold">CHIEF TECHNOLOGY OFFICER</p>
                                        <hr class="bg-success border-success border-2 border-top">
                                        <p class="text-muted fs-12 pt-1 px-2">Alina leads our technology vision, driving innovation and managing the tech infrastructure to ensure our platforms remain cutting-edge and secure.</p>
                                        <div class="d-flex justify-content-center">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-primary btn-wave btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-secondary btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-success btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle btn-info btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>                                                                                           
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                </div>
            </div>
            <!-- End::app-content -->

            <!-- Start:: add-members modals -->

            <!-- Start:: team ui modal -->
            <div class="modal fade" id="create-teamui-mem" tabindex="-1" aria-labelledby="create-teamuiLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title" id="create-teamuiLabel">Add Member</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xl-12">
                                    <label for="team-name3" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="team-name3" placeholder="Enter Name">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-sm btn-primary">Add</button>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- End:: team ui modal -->

            <!-- Start:: team react modal -->
            <div class="modal fade" id="create-teamreact-mem" tabindex="-1" aria-labelledby="create-teamreactLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title" id="create-teamreactLabel">Add Member</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xl-12">
                                    <label for="team-name1" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="team-name1" placeholder="Enter Name">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-sm btn-primary">Add</button>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- End:: team react modal -->

            <!-- Start:: team testing modal -->
            <div class="modal fade" id="create-teamtesting-mem" tabindex="-1" aria-labelledby="create-teamtestingLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title" id="create-teamtestingLabel">Add Member</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xl-12">
                                    <label for="team-name2" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="team-name2" placeholder="Enter Name">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-sm btn-primary">Add</button>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- End:: team testing modal -->

            <!-- End:: add-members modals -->
            
@endsection

@section('scripts')


@endsection