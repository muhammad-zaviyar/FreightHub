@extends('layouts.master')

@section('styles')

        <!-- Quill CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.snow.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.bubble.css')}}">

        <!-- Filepond CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">
      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Create Blog</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Create Blog</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start -->
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">New Blog</div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <label class="form-label mb-md-0 mt-2"> Blog Title :</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="Blog Title">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <label class="form-label mb-md-0 mt-2"> Email :</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for="blog-category" class="form-label">Blog Category :</label>
                                </div>
                                <div class="col-md-10">
                                    <select class="form-control" data-trigger name="blog-category" id="blog-category">
                                        <option value="">Select Category</option>
                                        <option value="Choice 1">Tripping</option>
                                        <option value="Choice 2">Celebration</option>
                                        <option value="Choice 3">Environment</option>
                                        <option value="Choice 3">Summer</option>
                                        <option value="Choice 3">Education</option>
                                        <option value="Choice 3">Driving</option>
                                    </select>
                    
                                </div>
                            </div>
                    
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <label class="form-label mb-md-0 mt-2"> Blog Author :</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <label class="form-label mb-md-0 mt-2"> Publish Time :</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="publish-time" placeholder="Choose time">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for="blog-tags" class="form-label">Blog Tags :</label>
                                </div>
                                <div class="col-md-10">
                                    <select class="form-control" name="blog-tags" id="blog-tags" multiple>
                                        <option value="Top Blog" selected>Startups</option>
                                        <option value="Blogger">Investing</option>
                                        <option value="Adventure">Freelancing</option>
                                        <option value="Landscape" selected>User experience</option>
                                    </select>
                                </div>
                            </div>
                    
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for="publish-date" class="form-label">Publish Date :</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="publish-date" placeholder="Choose date">
                                </div>
                            </div>
                    
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for="product-status-add" class="form-label">Published Status :</label>
                                </div>
                                <div class="col-md-10">
                                    <select class="form-control" data-trigger name="product-status-add" id="product-status-add">
                                        <option value="">Select</option>
                                        <option value="Published">Published</option>
                                        <option value="Scheduled">Hold</option>
                                    </select>
                                </div>
                            </div>
                    
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for="blog-author-email" class="form-label">Blog Images :</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="file" id="blog-author-email" class="blog-images" name="filepond" multiple data-allow-reorder="true"
                                        data-max-file-size="3MB" data-max-files="6">
                                </div>
                            </div>
                    
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <label class="form-label">Blog Content :</label>
                                </div>
                                <div class="col-md-10">
                                    <div id="blog-content">
                    
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <label class="form-label">Blog Type :</label>
                                </div>
                                <div class="col-md-10">
                                    <div class="d-flex align-items-center">
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" name="blog-type" id="blog-free1" checked>
                                            <label class="form-check-label" for="blog-free1">
                                                Free
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="blog-type" id="blog-paid1">
                                            <label class="form-check-label" for="blog-paid1">
                                                Paid
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="btn-list text-end">
                                <button type="button" class="btn btn-success">Save As Draft</button>
                                <button type="button" class="btn btn-primary me-0">Post Blog</button>
                            </div>
                        </div>
                    </div>
                    <!--End -->

                </div>
            </div>
            <!-- End::app-content -->
            
@endsection

@section('scripts')

        <!-- Quill Editor JS -->
        <script src="{{asset('build/assets/libs/quill/quill.js')}}"></script>

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

        <!-- Internal Create Blog JS -->
        @vite('resources/assets/js/blog-create.js')
        

@endsection