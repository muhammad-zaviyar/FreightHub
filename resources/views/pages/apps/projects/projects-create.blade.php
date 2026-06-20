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
                        <h1 class="page-title fw-semibold fs-18 mb-0">Create Project</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Create Project</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Create Project
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-2 mb-md-0 mt-2">Project Name :</label> 
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" placeholder="Enter Project Name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-2 mb-md-0 mt-2">Project Manager :</label> 
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" placeholder="Project Manager Name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-2 mb-md-0 mt-2">Project Description :</label> 
                                        </div>
                                        <div class="col-md-10">
                                            <div id="project-descriptioin-editor">
                                                <p>Contrary to popular belief, Lorem Ipsum is not SPK simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, "consectetur," from a Lorem Ipsum passage. By examining the citations of this word in classical literature, he discovered the undeniable source. Lorem Ipsum originates from sections 1.10.32 and 1.10.33 of this ancient text.</p>
                                                <p><br></p>

                                                <ol>
                                                    <li>Develop a secure and compliant framework to meet all relevant regulations.</li>
                                                    <li>Train the team on the updated system within two weeks of implementation.</li>
                                                    <li>Create a scalable infrastructure to support future expansion.</li>
                                                    <li>Cut down the time needed for inventory audits by 50%.</li>
                                                    <li>Reduce excess inventory costs by 10%.</li>
                                                </ol>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-2 mb-md-0 mt-2">Start Date :</label> 
                                        </div>
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                    <input type="text" class="form-control" id="startDate" placeholder="Choose date and time">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-2 mb-md-0 mt-2">End Date :</label> 
                                        </div>
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                    <input type="text" class="form-control" id="endDate" placeholder="Choose date and time">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-2 mb-md-0 mt-2">Team Members :</label> 
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control" name="assigned-team-members" id="assigned-team-members" multiple>
                                                <option value="Choice 1" selected>Emily Carter</option>
                                                <option value="Choice 2">Liam O'Connor</option>
                                                <option value="Choice 3">Sophia Lee</option>
                                                <option value="Choice 4">Jacob Martinez</option>
                                                <option value="Choice 5" selected>Olivia Brown</option>
                                                <option value="Choice 6">Ethan Davis</option>
                                                <option value="Choice 7">Ava Johnson</option>
                                                <option value="Choice 8">Michael Smith</option>
                                                <option value="Choice 9">Isabella Garcia</option>
                                                <option value="Choice 10">Noah Wilson</option>
                                                <option value="Choice 11" selected>Mia Taylor</option>
                                            </select>                                        
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-2 mb-md-0 mt-2">Status : </label> 
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control" data-trigger name="choices-single-default1" id="choices-single-default1">
                                                <option value="Inprogress" selected>Inprogress</option>
                                                <option value="On-hold">On-hold</option>
                                                <option value="Completed">Completed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-2 mb-md-0 mt-2">Priority :</label> 
                                        </div>
                                        <div class="col-md-10 d-flex gap-xxl-5 gap-3 flex-wrap flex-xxl-nowrap">
                                            <div class="form-check">
                                                <input type="radio" id="priority-high" name="priority" value="High" class="form-check-input" required>
                                                <label for="priority-high" class="form-check-label">High</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="priority-medium" name="priority" value="Medium" class="form-check-input">
                                                <label for="priority-medium" class="form-check-label">Medium</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="priority-low" name="priority" value="Low" class="form-check-input">
                                                <label for="priority-low" class="form-check-label">Low</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-2 mb-md-0 mt-2">Attachments :</label> 
                                        </div>
                                        <div class="col-md-10">
                                            <input type="file" class="multiple-filepond" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-2 mb-md-0 mt-2">Tags :</label> 
                                        </div>
                                        <div class="col-md-10">
                                            <input class="form-control" id="choices-text-unique-values" type="text" value="Project Management, Quality Assurance, User Experience, Implementation, Strategy" placeholder="Enter project tags here">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-success btn-wave ms-auto float-end">Create Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

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

        <!-- Create Project JS -->
        @vite('resources/assets/js/create-project.js')
        

@endsection