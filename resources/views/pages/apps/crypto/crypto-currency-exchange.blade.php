@extends('layouts.master')

@section('styles')

      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Currency Exchange</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Currency Exchange</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xl-9">
                            <div class="card custom-card currency-exchange-card">
                                <div class="card-body p-5 d-flex align-items-center justify-content-center z-1">
                                    <div class="container">
                                        <h3 class="text-fixed-white text-center">Buy and exchange coins with zero additional fees</h3>
                                        <span class="d-block fs-14 text-fixed-white text-center op-8 mb-4">
                                            Buy and exchange coins with zero additional fees. Get a +50% bonus on purchases of 100 Crypto Coins or more. We accept BTC for easy transactions!
                                        </span>
                                        <div class="p-3 mb-4 rounded currency-exchange-area">
                                            <div class="row gy-3">
                                                <div class="col-xxl-3 col-12">
                                                    <input type="text" class="form-control" placeholder="Enter Amount">
                                                </div>
                                                <div class="col-xxl-2 col-12">
                                                    <div>
                                                        <select class="form-control" data-trigger name="cryptoSelection">
                                                            <option value="bitcoin">Bitcoin</option> 
                                                            <option value="ethereum">Ethereum</option> 
                                                            <option value="litecoin">Litecoin</option>
                                                            <option value="ripple">Ripple</option>
                                                            <option value="cardano">Cardano</option>
                                                            <option value="neo">Neo</option>
                                                            <option value="stellar">Stellar</option>
                                                            <option value="eos">EOS</option>
                                                            <option value="nem">NEM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-2 col-12 text-center">
                                                    <a aria-label="exchange" href="javascript:void(0);" class="btn btn-secondary lh-1 btn-icon btn-sm my-2">
                                                        <i class="ti ti-arrows-exchange fs-19 align-middle"></i>
                                                    </a>
                                                </div>
                                                <div class="col-xxl-3 col-12">
                                                    <input type="text" class="form-control" placeholder="Exchange Amount (in BTC)">
                                                </div>
                                                <div class="col-xxl-2 col-12">
                                                    <select class="form-control" data-trigger name="currencySelection">
                                                        <option value="usd">USD</option> 
                                                        <option value="eur">Euro</option> 
                                                        <option value="gbp">Pound</option>
                                                        <option value="inr">Rupee</option>
                                                        <option value="won">Won</option>
                                                        <option value="dinar">Dinar</option>
                                                        <option value="rial">Rial</option>
                                                    </select>
                                                </div>                                            
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-success btn-wave z-n1">Exchange Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header mb-2">
                                    <div class="card-title mb-0">Today's Cryptocurrency Prices</div>
                                    <p class="mb-0 text-muted fs-11 op-6 fw-normal">Stay informed with the latest prices in the crypto market.</p>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Cryptocurrency</th>
                                                    <th>Price</th>
                                                    <th>Market Cap</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Bitcoin</td>
                                                    <td>$30k</td>
                                                    <td class="text-center"><span class="text-success">$580 B</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Ethereum</td>
                                                    <td>$2k</td>
                                                    <td class="text-center"><span class="text-success">$300 B</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Ripple</td>
                                                    <td>$0.79</td>
                                                    <td class="text-center"><span class="text-success">$38 B</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Litecoin</td>
                                                    <td>$158.42</td>
                                                    <td class="text-center"><span class="text-success">$10 B</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row justify-content-center">
                        <div class="col-xxl-12">
                            <div class="card custom-card overflow-hidden">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">S.NO</th>
                                                <th scope="col">Cryptocurrency</th>
                                                <th scope="col">Symbol</th>
                                                <th scope="col">Change (24H)</th>
                                                <th scope="col">Chart</th>
                                                <th scope="col">Market Cap</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Volume (24H)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    1.
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-rounded avatar-sm">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/square-color/Bitcoin.svg')}}" alt="Bitcoin">
                                                        </span>
                                                        <div>
                                                            <h6 class="fw-medium mb-0">Bitcoin</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>BTC</td>
                                                <td>
                                                    <div class="fs-20 d-flex align-items-center fw-medium">
                                                        24.3% 
                                                        <span class="fs-12 text-success op-7 fw-normal ms-1">+0.59
                                                            <i class="ti ti-arrow-up ms-1 d-inline-flex"></i>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div id="btc-currency-chart" class=""></div>
                                                </td>
                                                <td>
                                                    <span class="fs-15">$12 B</span>
                                                </td>
                                                <td>
                                                    <span class="fs-15 text-primary">0.00434</span>
                                                    <span class="text-success ms-1">$30.29</span>
                                                </td>
                                                <td>
                                                    <span class="fs-15">$580 Billion</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2.
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-rounded avatar-sm">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="Ethereum">
                                                        </span>
                                                        <div>
                                                            <h6 class="fw-medium mb-0">Ethereum</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>ETH</td>
                                                <td>
                                                    <div class="fs-20 d-flex align-items-center fw-medium">
                                                        18.7%
                                                        <span class="fs-12 text-danger op-7 fw-normal ms-1">-0.92
                                                            <i class="ti ti-arrow-down ms-1 d-inline-flex"></i>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div id="eth-currency-chart" class=""></div>
                                                </td>
                                                <td>
                                                    <span class="fs-15">$8 B</span>
                                                </td>
                                                <td>
                                                    <span class="fs-15 text-primary">0.01758</span>
                                                    <span class="text-success ms-1">$2564.89</span>
                                                </td>
                                                <td>
                                                    <span class="fs-15">$300 Billion</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3.
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-rounded avatar-sm">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/square-color/Dash.svg')}}" alt="Dash">
                                                        </span>
                                                        <div>
                                                            <h6 class="fw-medium mb-0">Dash</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>DASH</td>
                                                <td>
                                                    <div class="fs-20 d-flex align-items-center fw-medium">
                                                        12.5%
                                                        <span class="fs-12 text-danger op-7 fw-normal ms-1">-0.30
                                                            <i class="ti ti-arrow-down ms-1 d-inline-flex"></i>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div id="dash-currency-chart" class=""></div>
                                                </td>
                                                <td>
                                                    <span class="fs-15">$8 B</span>
                                                </td>
                                                <td>
                                                    <span class="fs-15 text-primary">0.00487</span>
                                                    <span class="text-success ms-1">$116.78</span>
                                                </td>
                                                <td>
                                                    <span class="fs-15">$1 Billion</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    4.
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-rounded avatar-sm">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/square-color/Litecoin.svg')}}" alt="Litecoin">
                                                        </span>
                                                        <div>
                                                            <h6 class="fw-medium mb-0">Litecoin</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>LTC</td>
                                                <td>
                                                    <div class="fs-20 d-flex align-items-center fw-medium">
                                                        8.2%
                                                        <span class="fs-12 text-success op-7 fw-normal ms-1">+0.15
                                                            <i class="ti ti-arrow-up ms-1 d-inline-flex"></i>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div id="ltc-currency-chart" class=""></div>
                                                </td>
                                                <td>
                                                    <span class="fs-15">$5 B</span>
                                                </td>
                                                <td>
                                                    <span class="fs-15 text-primary">0.00789</span>
                                                    <span class="text-success ms-1">$158.42</span>
                                                </td>
                                                <td>
                                                    <span class="fs-15">$11 Billion</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    5.
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-rounded avatar-sm">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ripple.svg')}}" alt="Ripple">
                                                        </span>
                                                        <div>
                                                            <h6 class="fw-medium mb-0">Ripple</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>XRP</td>
                                                <td>
                                                    <div class="fs-20 d-flex align-items-center fw-medium">
                                                        6.5%
                                                        <span class="fs-12 text-success op-7 fw-normal ms-1">+0.10
                                                            <i class="ti ti-arrow-up ms-1 d-inline-flex"></i>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div id="xrp-currency-chart" class=""></div>
                                                </td>
                                                <td>
                                                    <span class="fs-15">$3 B</span>
                                                </td>
                                                <td>
                                                    <span class="fs-15 text-primary">0.00123</span>
                                                    <span class="text-success ms-1">$0.79</span>
                                                </td>
                                                <td>
                                                    <span class="fs-15">$35 Billion</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    6.
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-rounded avatar-sm">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/square-color/Monero.svg')}}" alt="Monero">
                                                        </span>
                                                        <div>
                                                            <h6 class="fw-medium mb-0">Monero</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>XMR</td>
                                                <td>
                                                    <div class="fs-20 d-flex align-items-center fw-medium">
                                                        3.2%
                                                        <span class="fs-12 text-success op-7 fw-normal ms-1">+0.08
                                                            <i class="ti ti-arrow-up ms-1 d-inline-flex"></i>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div id="monero-currency-chart"></div>
                                                </td>
                                                <td>
                                                    <span class="fs-15">$2 B</span>
                                                </td>
                                                <td>
                                                    <span class="fs-15 text-primary">0.00456</span>
                                                    <span class="text-success ms-1">$182.34</span>
                                                </td>
                                                <td>
                                                    <span class="fs-15">$3.27 Billion</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    7.
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-rounded avatar-sm">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/square-color/EOS.svg')}}" alt="EOS">
                                                        </span>
                                                        <div>
                                                            <h6 class="fw-medium mb-0">EOS</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>EOS</td>
                                                <td>
                                                    <div class="fs-20 d-flex align-items-center fw-medium">
                                                        5.7%
                                                        <span class="fs-12 text-success op-7 fw-normal ms-1">+0.23
                                                            <i class="ti ti-arrow-up ms-1 d-inline-flex"></i>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div id="eos-currency-chart" class=""></div>
                                                </td> 
                                                <td>
                                                    <span class="fs-15">$1 B</span>
                                                </td>
                                                <td>
                                                    <span class="fs-15 text-primary">0.00234</span>
                                                    <span class="text-success ms-1">$4.78</span>
                                                </td>
                                                <td>
                                                    <span class="fs-15">$4.2 Billion</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    8.
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-rounded avatar-sm">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/square-color/Stratis.svg')}}" alt="Stratis">
                                                        </span>
                                                        <div>
                                                            <h6 class="fw-medium mb-0">Stratis</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>STRAX</td>
                                                <td>
                                                    <div class="fs-20 d-flex align-items-center fw-medium">
                                                        2.1%
                                                        <span class="fs-12 text-success op-7 fw-normal ms-1">+0.04
                                                            <i class="ti ti-arrow-up ms-1 d-inline-flex"></i>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div id="strax-currency-chart" class=""></div>
                                                </td>
                                                <td>
                                                    <span class="fs-15">$5 M</span>
                                                </td>
                                                <td>
                                                    <span class="fs-15 text-primary">0.001234</span>
                                                    <span class="text-success ms-1">$2.34</span>
                                                </td>
                                                <td>
                                                    <span class="fs-15">$300 Million</span>
                                                </td>
                                            </tr>                                                                 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Crypto Currency Exchange JS -->
        @vite('resources/assets/js/crypto-currency-exchange.js')
        
        
@endsection