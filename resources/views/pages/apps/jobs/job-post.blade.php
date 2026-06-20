@extends('layouts.master')

@section('styles')

      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Job Post</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Job Post</li>
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
                                        Post New Job
                                    </div>                       
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-0 mt-2">Job Title :</label> 
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="job-title" placeholder="Job Title" value="Web Developer">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-0 mt-2">Company Name :</label> 
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="job-title1" placeholder="Company Name" value="Techz Info Company">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-0 mt-2">Job Description :</label> 
                                        </div>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="job-description" rows="4">We are seeking a talented Web Developer to join our team and help build dynamic, user-friendly websites. The ideal candidate will have experience with HTML, CSS, and JavaScript, and a strong understanding of responsive design principles.</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-0 mt-2">Qualification :</label> 
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control" name="Qualification" id="qualification" multiple>
                                                <option value="Choice 1" selected>Graduate</option>
                                                <option value="Choice 2">Diploma</option>
                                                <option value="Choice 3" selected>MBA</option>
                                                <option value="Choice 4">MCA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-0 mt-2">Work Experience:</label> 
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control" data-trigger name="experience">
                                                <option value="0-1">0 - 1 Year</option>
                                                <option value="1-3">1 - 3 Years</option>
                                                <option value="3-5">3 - 5 Years</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-0 mt-2">Skills :</label> 
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control" name="skills" id="skills" multiple>
                                                <option value="SPKjs" selected>JavaScript</option>
                                                <option value="SPKhtml" selected>HTML</option>
                                                <option value="SPKcss" selected>CSS</option>
                                                <option value="SPKreact">React</option>
                                                <option value="SPKgit">Git</option>
                                                <option value="SPKvue">Vue.js</option>
                                                <option value="SPKnode">Node.js</option>
                                                <option value="SPKphp">PHP</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-0 mt-2">Job Type :</label> 
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control" data-trigger name="jobtype">
                                                <option value="SPKfreelance">Freelance</option>
                                                <option value="SPKcontract">Contract</option>
                                                <option value="SPKpart-time">Part-time</option>
                                                <option value="SPKfull-time">Full-time</option>
                                                <option value="SPKinternship">Internship</option>
                                                <option value="SPKtemporary">Temporary</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-0 mt-2">Salary :</label> 
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control" data-trigger name="Salary">
                                                <option value="SPK80000-100000">$80,000 - $100,000</option>
                                                <option value="SPK60000-80000">$60,000 - $80,000</option>
                                                <option value="SPK100000-120000">$100,000 - $120,000</option>
                                                <option value="SPK40000-60000">$40,000 - $60,000</option>
                                                <option value="SPK120000-140000">$120,000 - $140,000</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-0 mt-2">Job Location :</label> 
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="job-title2" placeholder="Job Location">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-0 mt-2">Job Deadline :</label> 
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="job-deadline" placeholder="Job Deadline">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-0 mt-2">Job Category :</label> 
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control" data-trigger name="Category-select">
                                                <option value="frontend">Front-End Development</option>
                                                <option value="backend">Back-End Development</option>
                                                <option value="fullstack">Full-Stack Development</option>
                                                <option value="uiux">UI/UX Design</option>
                                                <option value="webdesign">Web Design</option>
                                                <option value="devops">DevOps</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-0 mt-2">Priority :</label> 
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control" data-trigger name="Priority">
                                                <option value="low">Low Priority</option>
                                                <option value="medium">Medium Priority</option>
                                                <option value="high">High Priority</option>
                                                <option value="urgent">Urgent</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-0 mt-2">Vacancies :</label> 
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control" data-trigger name="Vacancies">
                                                <option value="SPK1">1 Vacancy</option>
                                                <option value="SPK3">3 Vacancies</option>
                                                <option value="SPK5">5 Vacancies</option>
                                                <option value="SPK2">2 Vacancies</option>
                                                <option value="SPK4">4 Vacancies</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-0 mt-2">Known Languages :</label> 
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control" name="language" id="language" multiple>
                                                <option value="SPKenglish" selected>English</option>
                                                <option value="SPKspanish">Spanish</option>
                                                <option value="SPKfrench">French</option>
                                                <option value="SPKgerman" selected>German</option>
                                                <option value="SPKchinese">Chinese</option>
                                                <option value="SPKjapanese">Japanese</option>
                                                <option value="SPKarabic">Arabic</option>
                                                <option value="SPKportuguese">Portuguese</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-wave waves-effect waves-light">
                                        <i class="bi bi-plus-circle"></i> Post Job
                                    </a>
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

        <!-- Job Post JS -->
        @vite('resources/assets/js/jobs-post.js')
        
    
@endsection