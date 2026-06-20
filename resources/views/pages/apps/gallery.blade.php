@extends('layouts.master')

@section('styles')

        <!-- GLightbox CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">
      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Gallery</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="d-md-flex d-block align-items-center justify-content-between my-4">
                                <div>
                                    <p class="fw-semibold fs-18 mb-0">Glightbox Grid View</p>
                                </div>
                            </div>
                            <!-- Start::row-1 -->
                            <div class="row g-2 mb-3">
                                <div class="col-lg-3 col-sm-6">
                                    <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox card custom-card mb-2" data-gallery="gallery1">
                                        <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" >
                                    </a>
                                    <a href="{{asset('build/assets/images/media/media-36.jpg')}}" class="glightbox card custom-card mb-2" data-gallery="gallery1">
                                        <img src="{{asset('build/assets/images/media/media-36.jpg')}}" alt="image" >
                                    </a>
                                    <a href="{{asset('build/assets/images/media/media-47.jpg')}}" class="glightbox card custom-card mb-2" data-gallery="gallery1">
                                        <img src="{{asset('build/assets/images/media/media-47.jpg')}}" alt="image" >
                                    </a>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <a href="{{asset('build/assets/images/media/media-30.jpg')}}" class="glightbox card custom-card mb-2" data-gallery="gallery1">
                                        <img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt="image" >
                                    </a>
                                    <a href="{{asset('build/assets/images/media/media-65.png')}}" class="glightbox card custom-card mb-2" data-gallery="gallery1">
                                        <img src="{{asset('build/assets/images/media/media-65.png')}}" alt="image" >
                                    </a>
                                    <a href="{{asset('build/assets/images/media/media-24.jpg')}}" class="glightbox card custom-card mb-2" data-gallery="gallery1">
                                        <img src="{{asset('build/assets/images/media/media-24.jpg')}}" alt="image" >
                                    </a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <div class="row gx-2 gy-0">
                                        <div class="col-lg-6">
                                            <a href="{{asset('build/assets/images/media/media-47.jpg')}}" class="glightbox card custom-card mb-2" data-gallery="gallery1">
                                                <img src="{{asset('build/assets/images/media/media-47.jpg')}}" alt="image" >
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="{{asset('build/assets/images/media/media-47.jpg')}}" class="glightbox card custom-card mb-2" data-gallery="gallery1">
                                                <img src="{{asset('build/assets/images/media/media-47.jpg')}}" alt="image" >
                                            </a>
                                        </div>
                                        <div class="col-lg-12">
                                            <a href="{{asset('build/assets/images/media/media-47.jpg')}}" class="glightbox card custom-card mb-2" data-gallery="gallery1">
                                                <img src="{{asset('build/assets/images/media/media-47.jpg')}}" alt="image" >
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="{{asset('build/assets/images/media/media-34.jpg')}}" class="glightbox card custom-card mb-2" data-gallery="gallery1">
                                                <img src="{{asset('build/assets/images/media/media-34.jpg')}}" alt="image" >
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="{{asset('build/assets/images/media/media-34.jpg')}}" class="glightbox card custom-card mb-2" data-gallery="gallery1">
                                                <img src="{{asset('build/assets/images/media/media-34.jpg')}}" alt="image" >
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="{{asset('build/assets/images/media/media-34.jpg')}}" class="glightbox card custom-card mb-2" data-gallery="gallery1">
                                                <img src="{{asset('build/assets/images/media/media-34.jpg')}}" alt="image" >
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End::row-1 -->

                            <div class="d-md-flex d-block align-items-center justify-content-between my-4">
                                <div>
                                    <p class="fw-semibold fs-18 mb-0">Glightbox Tabs View</p>
                                </div>
                            </div>

                            <!-- Start::row-2 -->
                            <div class="row">
                                <div class="text-center mb-5">
                                    <div class="tab-style-5 p-1 rounded-4 d-inline-block bg-white shadow-sm">
                                        <ul class="nav nav-pills justify-content-center" role="tablist">
                                            <li class="nav-item flex-fill" role="presentation">
                                                <button class="nav-link gallery-nav-link rounded-4 w-100 fs-15 px-5 me-2 active" data-bs-toggle="pill" data-bs-target="#All" aria-selected="true" role="tab">All</button>
                                            </li>
                                            <li class="nav-item flex-fill" role="presentation">
                                                <button class="nav-link gallery-nav-link rounded-4 w-100 fs-15 px-5" data-bs-toggle="pill" data-bs-target="#Popular" aria-selected="false" role="tab">Popular</button>
                                            </li>
                                            <li class="nav-item flex-fill" role="presentation">
                                                <button class="nav-link gallery-nav-link rounded-4 w-100 fs-15 px-5" data-bs-toggle="pill" data-bs-target="#Recent" aria-selected="false" role="tab">Latest</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane gallery-tab-pane p-0 border-0 fade show active" id="All" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6 col-6">
                                                        <div class="card custom-card overflow-hidden gallery-cards animate-fade">
                                                            <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox stretched-link" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" class="img-fluid gallery-tab-img">
                                                                <div class="gallery-desc p-3 text-fixed-white fw-medium">
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-6">
                                                        <div class="card custom-card overflow-hidden gallery-cards animate-fade">
                                                            <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox stretched-link" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" class="img-fluid gallery-tab-img">
                                                                <div class="gallery-desc p-3 text-fixed-white fw-medium">
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-6">
                                                        <div class="card custom-card overflow-hidden gallery-cards animate-fade">
                                                            <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox stretched-link" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" class="img-fluid gallery-tab-img">
                                                                <div class="gallery-desc p-3 text-fixed-white fw-medium">
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-6">
                                                        <div class="card custom-card overflow-hidden gallery-cards animate-fade">
                                                            <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox stretched-link" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" class="img-fluid gallery-tab-img">
                                                                <div class="gallery-desc p-3 text-fixed-white fw-medium">
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6 col-6">
                                                        <div class="card custom-card overflow-hidden gallery-cards animate-fade">
                                                            <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox stretched-link" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" class="img-fluid gallery-tab-img">
                                                                <div class="gallery-desc p-3 text-fixed-white fw-medium">
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-6">
                                                        <div class="card custom-card overflow-hidden gallery-cards animate-fade">
                                                            <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox stretched-link" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" class="img-fluid gallery-tab-img">
                                                                <div class="gallery-desc p-3 text-fixed-white fw-medium">
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-6">
                                                        <div class="card custom-card overflow-hidden gallery-cards animate-fade">
                                                            <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox stretched-link" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" class="img-fluid gallery-tab-img">
                                                                <div class="gallery-desc p-3 text-fixed-white fw-medium">
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-6">
                                                        <div class="card custom-card overflow-hidden gallery-cards animate-fade">
                                                            <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox stretched-link" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" class="img-fluid gallery-tab-img">
                                                                <div class="gallery-desc p-3 text-fixed-white fw-medium">
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane gallery-tab-pane fade p-0 border-0" id="Popular" role="tabpanel">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-7">
                                                <div class="row">
                                                    <div class="col-lg-6 col-6">
                                                        <div class="card custom-card overflow-hidden gallery-cards animate-fade">
                                                            <a href="{{asset('build/assets/images/media/media-30.jpg')}}" class="glightbox stretched-link" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt="image" class="img-fluid gallery-tab-img">
                                                                <div class="gallery-desc p-3 text-fixed-white fw-medium">
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="card custom-card overflow-hidden gallery-cards animate-fade">
                                                            <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox stretched-link" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" class="img-fluid gallery-tab-img">
                                                                <div class="gallery-desc p-3 text-fixed-white fw-medium">
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-6">
                                                        <div class="card custom-card overflow-hidden gallery-cards animate-fade">
                                                            <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox stretched-link" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" class="img-fluid gallery-tab-img">
                                                                <div class="gallery-desc p-3 text-fixed-white fw-medium">
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="card custom-card overflow-hidden gallery-cards animate-fade">
                                                            <a href="{{asset('build/assets/images/media/media-30.jpg')}}" class="glightbox stretched-link" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt="image" class="img-fluid gallery-tab-img">
                                                                <div class="gallery-desc p-3 text-fixed-white fw-medium">
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-auto">
                                                <div class="card custom-card overflow-hidden gallery-cards animate-fade">
                                                    <a href="{{asset('build/assets/images/media/media-64.jpg')}}" class="glightbox stretched-link" data-gallery="gallery1">
                                                        <img src="{{asset('build/assets/images/media/media-64.jpg')}}" alt="image" class="img-fluid gallery-tab-img">
                                                        <div class="gallery-desc p-3 text-fixed-white fw-medium">
                                                            Lorem Ipsum is simply dummy text of the printing
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane gallery-tab-pane fade p-0 border-0" id="Recent" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-5 col-auto">
                                                <div class="card custom-card overflow-hidden gallery-cards animate-fade">
                                                    <a href="{{asset('build/assets/images/media/media-64.jpg')}}" class="glightbox stretched-link" data-gallery="gallery1">
                                                        <img src="{{asset('build/assets/images/media/media-64.jpg')}}" alt="image" class="img-fluid gallery-tab-img">
                                                        <div class="gallery-desc p-3 text-fixed-white fw-medium">
                                                            Lorem Ipsum is simply dummy text of the printing
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="row">
                                                    <div class="col-lg-6 col-6">
                                                        <div class="card custom-card overflow-hidden gallery-cards animate-fade">
                                                            <a href="{{asset('build/assets/images/media/media-30.jpg')}}" class="glightbox stretched-link" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt="image" class="img-fluid gallery-tab-img">
                                                                <div class="gallery-desc p-3 text-fixed-white fw-medium">
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="card custom-card overflow-hidden gallery-cards animate-fade">
                                                            <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox stretched-link" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" class="img-fluid gallery-tab-img">
                                                                <div class="gallery-desc p-3 text-fixed-white fw-medium">
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-6">
                                                        <div class="card custom-card overflow-hidden gallery-cards animate-fade">
                                                            <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox stretched-link" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" class="img-fluid gallery-tab-img">
                                                                <div class="gallery-desc p-3 text-fixed-white fw-medium">
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="card custom-card overflow-hidden gallery-cards animate-fade">
                                                            <a href="{{asset('build/assets/images/media/media-30.jpg')}}" class="glightbox stretched-link" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt="image" class="img-fluid gallery-tab-img">
                                                                <div class="gallery-desc p-3 text-fixed-white fw-medium">
                                                                    Lorem Ipsum is simply dummy text of the printing
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-2 -->

                        </div>
                    </div>


                </div>
            </div>
            <!-- End::app-content -->
      
@endsection

@section('scripts')

        <!-- Gallery JS -->
        <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>
        @vite('resources/assets/js/gallery.js')
        
    
@endsection