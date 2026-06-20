@extends('layouts.master')

@section('styles')

      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Market Cap</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Market Cap</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xxl-3 col-xl-6 col-lg-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md avatar-rounded">
                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Bitcoin.svg')}}" alt="Bitcoin">
                                                </span>
                                            </div>
                                            <div>
                                                <h6 class="mb-1">Bitcoin</h6>
                                                <span class="text-muted">BTC - Rank 1</span>
                                            </div>
                                        </div>
                                        <div class="ms-auto text-end">
                                            <div>
                                                <span class="fs-20 fw-medium text-primary">$35,876.29</span>
                                                <p class="mb-0 fw-medium">
                                                    Market Cap: $1.054B
                                                    <span class="text-success fw-medium">(+2.33%)</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="bitcoin-chart"></div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md avatar-rounded">
                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="Ethereum">
                                                </span>
                                            </div>
                                            <div>
                                                <h6 class="mb-1">Ethereum</h6>
                                                <span class="text-muted">ETH - Rank 2</span>
                                            </div>
                                        </div>
                                        <div class="ms-auto text-end">
                                            <div>
                                                <span class="fs-20 fw-medium text-primary">$1,845.23</span>
                                                <p class="mb-0 fw-medium">
                                                    Market Cap: $224.57B
                                                    <span class="text-danger fw-medium">(-1.12%)</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="etherium-chart"></div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md avatar-rounded">
                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Dash.svg')}}" alt="Dash">
                                                </span>
                                            </div>
                                            <div>
                                                <h6 class="mb-1">Dash</h6>
                                                <span class="text-muted">DASH - Rank 50</span>
                                            </div>
                                        </div>
                                        <div class="ms-auto text-end">
                                            <div>
                                                <span class="fs-20 fw-medium text-primary">$112.45</span>
                                                <p class="mb-0 fw-medium">
                                                    Market Cap: $1.21B
                                                    <span class="text-danger fw-medium">(-0.02%)</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="dashcoin-chart"></div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md avatar-rounded">
                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Litecoin.svg')}}" alt="Litecoin">
                                                </span>
                                            </div>
                                            <div>
                                                <h6 class="mb-1">Litecoin</h6>
                                                <span class="text-muted">LTC - Rank 15</span>
                                            </div>
                                        </div>
                                        <div class="ms-auto text-end">
                                            <div>
                                                <span class="fs-20 fw-medium text-primary">$65.73</span>
                                                <p class="mb-0 fw-medium">
                                                    Market Cap: $4.67B
                                                    <span class="text-success fw-medium">(+1.15%)</span> <!-- Use text-danger for a decrease -->
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="litecoin-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start::row-2  -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Crypto MarketCap
                                    </div>
                                    <div class="d-flex flex-wrap gap-2">
                                        <div>
                                            <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Market Cap</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Price</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Trading Volume</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Price Change (24h)</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Rank</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">A - Z</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">All-Time High (ATH)</a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <button class="btn btn-secondary btn-sm btn-wave waves-effect waves-light">View All</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th scope="col" class="fw-medium">#</th>
                                                    <th scope="col">Crypto Name</th>
                                                    <th scope="col">Price (USD)</th>
                                                    <th scope="col">Market Cap</th>
                                                    <th scope="col">24h Change</th>
                                                    <th scope="col">1h Change</th>
                                                    <th scope="col">Volume (24h)</th>
                                                    <th scope="col">Last 1 Week</th>
                                                    <th scope="col">Graph</th>
                                                    <th scope="col">Trade</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line fs-16 text-muted"></i></a>
                                                    </td>
                                                    <td>1</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Bitcoin.svg')}}" alt="Bitcoin">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium">
                                                                <a href="javascript:void(0);">Bitcoin <span class="text-muted">(BTC)</span></a>
                                                            </div>                                                        
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$29,948.80</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$582.23B</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger fw-medium"><i class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>0.483%</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-success fw-medium"><i class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>0.239%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="d-block fw-medium">$11.79B USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="fw-medium d-block fs-12 flex-fill">Last 1 Week: <span class="text-pink">-5.12%</span></div>
                                                    </td>
                                                    <td>
                                                        <div id="btc-chart"></div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success-light btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line fs-16 text-muted"></i></a>
                                                    </td>
                                                    <td>2</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="Ethereum">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium">
                                                                <a href="javascript:void(0);">Ethereum <span class="text-muted">(ETH)</span></a>
                                                            </div>                                                         
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$1,895.96</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$226.91B</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger fw-medium"><i class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>0.87%</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-success fw-medium"><i class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>0.45%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="d-block fw-medium">$2.83B USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="fw-medium d-block fs-12 flex-fill">Last 1 Week: <span class="text-success">+5.12%</span></div>
                                                    </td>
                                                    <td>
                                                        <div id="eth-chart"></div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success-light btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line fs-16 text-muted"></i></a>
                                                    </td>
                                                    <td>3</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Dash.svg')}}" alt="Dash">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium">
                                                                <a href="javascript:void(0);">Dash <span class="text-muted">(DASH)</span></a>
                                                            </div>                                                         
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$4.87B</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$203.00</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-success fw-medium"><i class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>1.05%</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-success fw-medium"><i class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>0.56%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="d-block fw-medium">$185.50M USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="fw-medium d-block fs-12 flex-fill">Last 1 Week: <span class="text-success">+3.45%</span></div>
                                                    </td>
                                                    <td>
                                                        <div id="dash-chart"></div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success-light btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line fs-16 text-muted"></i></a>
                                                    </td>
                                                    <td>4</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ripple.svg')}}" alt="Ripple">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium">
                                                                <a href="javascript:void(0);">Ripple <span class="text-muted">(XRP)</span></a>
                                                            </div>                                                         
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$24.63B</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$0.50</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-success fw-medium"><i class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>1.22%</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-success fw-medium"><i class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>0.33%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="d-block fw-medium">$1.15B USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="fw-medium d-block fs-12 flex-fill">Last 1 Week: <span class="text-success">+2.10%</span></div>
                                                    </td>
                                                    <td>
                                                        <div id="ripple-chart"></div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success-light btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line fs-16 text-muted"></i></a>
                                                    </td>
                                                    <td>5</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Golem.svg')}}" alt="Golem">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium">
                                                                <a href="javascript:void(0);">Golem <span class="text-muted">(GNT)</span></a>
                                                            </div>                                                         
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$1.23B</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$0.42</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-success fw-medium"><i class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>0.98%</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-success fw-medium"><i class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>1.15%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="d-block fw-medium">$45.67M USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="fw-medium d-block fs-12 flex-fill">Last 1 Week: <span class="text-success">+3.30%</span></div>
                                                    </td>
                                                    <td>
                                                        <div id="glm-chart"></div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success-light btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line fs-16 text-muted"></i></a>
                                                    </td>
                                                    <td>6</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/EOS.svg')}}" alt="EOS">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium">
                                                                <a href="javascript:void(0);">EOS <span class="text-muted">(EOS)</span></a>
                                                            </div>                                                         
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$3.25B</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$1.05</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger fw-medium"><i class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>1.10%</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger fw-medium"><i class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>2.30%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="d-block fw-medium">$120.45M USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="fw-medium d-block fs-12 flex-fill">Last 1 Week: <span class="text-success">+4.20%</span></div>
                                                    </td>
                                                    <td>
                                                        <div id="eos-chart"></div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success-light btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line fs-16 text-muted"></i></a>
                                                    </td>
                                                    <td>7</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Litecoin.svg')}}" alt="Litecoin">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium">
                                                                <a href="javascript:void(0);">Litecoin <span class="text-muted">(LTC)</span></a>
                                                            </div>                                                         
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$11.45B</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$52.32</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger fw-medium"><i class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>0.75%</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger fw-medium"><i class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>1.50%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="d-block fw-medium">$205.78M USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="fw-medium d-block fs-12 flex-fill">Last 1 Week: <span class="text-pink">-3.40%</span></div>
                                                    </td>
                                                    <td>
                                                        <div id="lite-chart"></div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success-light btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line fs-16 text-muted"></i></a>
                                                    </td>
                                                    <td>8</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/IOTA.svg')}}" alt="IOTA">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium">
                                                                <a href="javascript:void(0);">IOTA <span class="text-muted">(MIOTA)</span></a>
                                                            </div>                                                         
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$3.45B</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$0.90</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-success fw-medium"><i class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>1.20%</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger fw-medium"><i class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>0.50%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="d-block fw-medium">$35.67M USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="fw-medium d-block fs-12 flex-fill">Last 1 Week: <span class="text-pink">-4.20%</span></div>
                                                    </td>
                                                    <td>
                                                        <div id="iota-chart"></div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success-light btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);"><i class="ri-star-line fs-16 text-muted"></i></a>
                                                    </td>
                                                    <td>9</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Monero.svg')}}" alt="Monero">
                                                                </span>
                                                            </div>
                                                            <div class="fw-medium">
                                                                <a href="javascript:void(0);">Monero <span class="text-muted">(XMR)</span></a>
                                                            </div>                                                         
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$3.36B</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">$149.99</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger fw-medium"><i class="ti ti-arrow-narrow-down fs-15 fw-medium"></i>0.45%</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-success fw-medium"><i class="ti ti-arrow-narrow-up fs-15 fw-medium"></i>1.05%</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <span class="d-block fw-medium">$2.47M USD</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="fw-medium d-block fs-12 flex-fill">Last 1 Week: <span class="text-success">+3.10%</span></div>
                                                    </td>
                                                    <td>
                                                        <div id="monero-chart"></div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success-light btn-sm">Trade</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer border-top-0">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination mb-0 float-end">
                                            <li class="page-item disabled">
                                                <a class="page-link">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                            <li class="page-item active" aria-current="page">
                                                <a class="page-link" href="javascript:void(0);">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2  -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Crypto MarketCap JS -->
        @vite('resources/assets/js/crypto-marketcap.js')
        

@endsection