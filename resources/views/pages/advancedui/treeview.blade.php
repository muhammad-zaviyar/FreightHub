@extends('layouts.master')

@section('styles')

        <!-- Treeview Css --> 
        <link rel="stylesheet" href="{{asset('build/assets/libs/js-treeview/treeview.min.css')}}"> 
      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Treeview</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Ui</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Treeview</li>
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
                                    <div class="card-title">Basic Treeview</div>
                                </div>
                                <div class="card-body">
                                    <div id="tree" class=" fs-15"></div>
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

        <!-- Treview JS -->
        <script src="{{asset('build/assets/libs/js-treeview/treeview.min.js')}}"></script>
    
        <!-- Internal Tour JS -->
        @vite('resources/assets/js/treeview.js')
        

@endsection