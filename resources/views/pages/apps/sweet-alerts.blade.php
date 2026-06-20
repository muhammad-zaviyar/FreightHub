@extends('layouts.master')

@section('styles')

        <!-- Sweetalerts CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.css')}}">
      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Sweet Alerts</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Sweet Alerts</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start:: row-1 -->
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Basic Alert
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <button class="btn btn-primary btn-w-md" id="basic-alert">Try Me!</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Title With Text Under
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <button class="btn btn-primary btn-w-md" id="alert-text">Try Me!</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        With Text,Error Icon & Footer
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <button class="btn btn-primary btn-w-md" id="alert-footer">Try Me!</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Alert With Long Window
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <button class="btn btn-primary btn-w-md" id="long-window">Try Me!</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Custom HTML Description
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <button class="btn btn-primary btn-w-md" id="alert-description">Try Me!</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Alert With Multiple Buttons
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <button class="btn btn-primary btn-w-md" id="three-buttons">Try Me!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Custom Positioned Dialog Alert
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <button class="btn btn-primary btn-w-md" id="alert-dialog">Try Me!</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Confirm Alert
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <button class="btn btn-primary btn-w-md" id="alert-confirm">Try Me!</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Alert With Parameters
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <button class="btn btn-primary btn-w-md" id="alert-parameter">Try Me!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Alert With Image
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <button class="btn btn-primary btn-w-md" id="alert-image">Try Me!</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Alert With Image
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <button class="btn btn-primary btn-w-md" id="alert-custom-bg">Try Me!</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Auto Close Alert
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <button class="btn btn-primary btn-w-md" id="alert-auto-close">Try Me!</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Ajax Request Alert
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <button class="btn btn-primary btn-w-md" id="alert-ajax">Try Me!</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        State Icons
                                    </div>
                                </div>
                                <div class="card-body text-center d-flex gap-1 flex-wrap align-items-center justify-content-center">
                                    <button class="btn btn-success btn-w-md" id="alert-custom-success">Try Me!</button>
                                    <button class="btn btn-danger btn-w-md" id="alert-custom-danger">Try Me!</button>
                                    <button class="btn btn-warning btn-w-md" id="alert-custom-warning">Try Me!</button>
                                    <button class="btn btn-info btn-w-md" id="alert-custom-info">Try Me!</button>
                                    <button class="btn btn-primary btn-w-md" id="alert-custom-question">Try Me!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Sweetalerts JS -->
        <script src="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
        @vite('resources/assets/js/sweet-alerts.js')
        

@endsection