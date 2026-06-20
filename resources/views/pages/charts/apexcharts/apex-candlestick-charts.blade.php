@extends('layouts.master')

@section('styles')

      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Apex Candlestick Charts</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apex Charts</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Apex Candlestick Charts</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Basic Candlestick Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="candlestick-basic"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Candlestick Synced With Brush Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="chart-candlestick"></div>
                                    <div id="chart-bar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Candlestick With Cateory X-axis</div>
                                </div>
                                <div class="card-body">
                                    <div id="candlestick-categoryx"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Candlestick With Line Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="candlestick-line"></div>
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

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Used For Candlestick Synced With Brush Chart -->
        <script src="{{asset('build/assets/apexcharts-candlestick-seriesdata.js')}}"></script>

        <!-- Used For Candlestick With Cateory X-axis Chart-->
        <script src="{{asset('build/assets/apexcharts-dayjs.js')}}"></script>

        <!-- Internal Apex Candlestick Charts JS -->
        @vite('resources/assets/js/apexcharts-candlestick.js')


@endsection