@extends('layouts.master')

@section('styles')

      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Buy and Sell</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Buy and Sell</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                        <!-- Start::row-1 -->
                        <div class="row">
                            <div class="col-xxl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Buy Cryptocurrency
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="form-label mb-1">Asset:</div>
                                                    <div class="input-group mb-3 flex-nowrap buy-crypto">
                                                        <input type="text" class="form-control" aria-label="Select Currency" placeholder="Enter Cryptocurrency Amount">
                                                        <select class="form-control" data-trigger id="choices-single-default">
                                                            <option value="">BTC</option>
                                                            <option value="eth">ETH</option>
                                                            <option value="xrp">XRP</option>
                                                            <option value="dash">DASH</option>
                                                            <option value="neo">NEO</option>
                                                            <option value="ltc">LTC</option>
                                                            <option value="bsd">BSD</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="form-label mb-1">Amount:</div>
                                                    <div class="input-group mb-3 flex-nowrap buy-crypto">
                                                        <input type="text" class="form-control" aria-label="Enter Amount" placeholder="Enter Amount">
                                                        <select class="form-control" data-trigger id="choices-single-default1">
                                                            <option value="">USD</option>
                                                            <option value="aed">AED</option>
                                                            <option value="aud">AUD</option>
                                                            <option value="ars">ARS</option>
                                                            <option value="azn">AZN</option>
                                                            <option value="bgn">BGN</option>
                                                            <option value="brl">BRL</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-label mb-2">Summary:</div>
                                            <div class="bg-light pt-2 p-3 rounded border">
                                                <div class="fs-14 py-2">
                                                    <span class="fw-medium text-dark">Current Price:</span>
                                                    <span class="text-muted ms-2 fs-14 d-inline-block">35,000.00</span>
                                                    <span class="text-dark fw-medium float-end">USD</span>
                                                </div>
                                                <div class="fs-14 py-2">
                                                    <span class="fw-medium text-dark">Amount:</span>
                                                    <span class="text-muted ms-2 fs-14 d-inline-block">0.1</span>
                                                    <span class="text-dark fw-medium float-end">BTC</span>
                                                </div>
                                                <div class="fw-medium fs-14 py-2">Total: <span class="fs-14 d-inline-block">3,500.00 USD</span></div>
                                                <div class="fs-12 text-success">Additional Charges: 0.25% (0.00025 BTC)</div>
                                            </div>
                                            <label class="form-label mt-4 mb-2">Select Payment Method:</label>
                                            <div class="row g-2">
                                                <div class="col-xl-12">
                                                    <select class="form-control" data-trigger id="choices-single-default03">
                                                        <option value="">Select Payment Method</option>
                                                        <option value="credit-debit">Credit / Debit Card</option>
                                                        <option value="paypal">PayPal</option>
                                                        <option value="wallet">Wallet</option>
                                                        <option value="bank-transfer">Bank Transfer</option>
                                                        <option value="cryptocurrency">Cryptocurrency</option>
                                                    </select>                                                
                                                </div>
                                            </div>
                                            <div class="d-grid mt-3 pt-1">
                                                <button type="button" class="btn btn-primary btn-wave">BUY NOW</button>
                                            </div>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                            <div class="col-xxl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Sell Crypto
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="crypto-select">Select Cryptocurrency:</label>
                                                </div>
                                                <div class="input-group mb-3 flex-nowrap buy-crypto">
                                                    <input type="text" class="form-control" aria-label="Enter Amount" placeholder="Enter Amount">
                                                    <select class="form-control" data-trigger id="crypto-select">
                                                        <option value="">BTC</option>
                                                        <option value="eth">ETH</option>
                                                        <option value="xrp">XRP</option>
                                                        <option value="dash">DASH</option>
                                                        <option value="neo">NEO</option>
                                                        <option value="ltc">LTC</option>
                                                        <option value="bsd">BSD</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="currency-select">Select Currency:</label>
                                                </div>
                                                <div class="input-group mb-3 flex-nowrap buy-crypto">
                                                    <input type="text" class="form-control" aria-label="Enter Amount" placeholder="Enter Amount">
                                                    <select class="form-control" data-trigger id="currency-select">
                                                        <option value="">USD</option>
                                                        <option value="eur">EUR</option>
                                                        <option value="gbp">GBP</option>
                                                        <option value="jpy">JPY</option>
                                                        <option value="aud">AUD</option>
                                                        <option value="cad">CAD</option>
                                                        <option value="inr">INR</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-label">Sell To:</div>
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <div class="position-relative">
                                                        <div class="p-2 border rounded d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar bg-info-transparent p-2">
                                                                    <i class="ri-bank-fill text-info fs-20"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="fw-medium d-block">Banking</span>
                                                                <span class="text-muted fs-11">0.254 USD/BTC</span>
                                                            </div>
                                                            <input id="shipping-method1" name="shipping-methods" type="radio" class="form-check-input ms-auto" checked="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <div class="position-relative">
                                                        <div class="p-2 border rounded d-flex align-items-center gap-2">
                                                            <div class="lh-1">
                                                                <span class="avatar bg-secondary-transparent p-2">
                                                                    <i class="ri-bank-card-fill text-secondary fs-20"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="fw-medium d-block">Credit/ Debit Card</span>
                                                                <span class="text-muted fs-11">0.266 USD/BTC</span>
                                                            </div>
                                                            <input id="shipping-method2" name="shipping-methods" type="radio" class="form-check-input ms-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-light pt-2 p-3 rounded border">
                                            <div class="fs-14 py-2">
                                                <div class="d-inline-flex">
                                                    <span class="fw-medium text-dark">Price:</span>
                                                    <span class="text-muted ms-2 fs-14">35,000.00</span>
                                                </div>
                                                <span class="text-dark fw-medium float-end">USD</span>
                                            </div>
                                            <div class="fs-14 py-2">
                                                <div class="d-inline-flex">
                                                    <span class="fw-medium text-dark">Amount:</span>
                                                    <span class="text-muted ms-2 fs-14">0.5</span>
                                                </div>
                                                <span class="text-dark fw-medium float-end">BTC</span>
                                            </div>
                                            <div class="d-flex justify-content-between pb-2 pt-2">
                                                <div class="fw-medium fs-14">Receive: </div>
                                                <span class="fs-18 d-inline-block fw-medium">$17,500.00</span>
                                            </div>
                                            <div class="fs-12 text-success">Additional Charges: 0.25% ($43.75)</div>
                                        </div>
                                        <div class="d-grid mt-3">
                                            <button type="button" class="btn btn-success btn-wave">SELL</button>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                            <div class="col-xxl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Quick Secure Transfer
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="crypto-transfer-select">Select Cryptocurrency:</label>
                                                </div>
                                                <div class="input-group mb-3 flex-nowrap quick-transfer buy-crypto">
                                                    <input type="text" class="form-control" aria-label="Enter Amount" placeholder="Enter Amount">
                                                    <select class="form-control" data-trigger id="crypto-transfer-select">
                                                        <option value="">BTC</option>
                                                        <option value="eth">ETH</option>
                                                        <option value="xrp">XRP</option>
                                                        <option value="dash">DASH</option>
                                                        <option value="neo">NEO</option>
                                                        <option value="ltc">LTC</option>
                                                        <option value="bsd">BSD</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="recipient-address">Recipient Address:</label>
                                                </div>
                                                <div class="input-group mb-3 flex-nowrap quick-transfer">
                                                    <input type="text" class="form-control form-control-lg" id="recipient-address" placeholder="Enter Recipient Address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 mt-2">
                                            <span class="form-label">Deposit To:</span>
                                            <div class="position-relative">
                                                <a href="javascript:void(0);" class="stretched-link"></a>
                                                <div class="p-2 border rounded d-flex align-items-center gap-2 mt-1">
                                                    <div class="lh-1">
                                                        <span class="avatar bg-light avatar-md p-2">
                                                            <i class="ri-bank-line text-info fs-20"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="fw-medium d-block">Bank Account</span>
                                                        <span class="text-muted">0.254 USD/USDT</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <span class="d-block fw-semibold">Amount :</span>
                                            <div class="d-flex align-items-center justify-content-between text-muted">
                                                <div>Transfer Limit</div>
                                                <div>10,000 TL remaining</div>
                                            </div>
                                        </div>
                                        <div class="bg-light pt-2 p-3 rounded border">
                                            <div class="fs-14 py-2">
                                                <div class="d-inline-flex">
                                                    <span class="fw-medium text-dark">Estimated Fees:</span>
                                                    <span class="text-muted ms-2 fs-14">0.001 BTC</span>
                                                </div>
                                                <span class="text-dark fw-medium float-end">~$35.00</span>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1 pt-2">
                                                <div class="fw-medium fs-14">Total Amount:</div>
                                                <span class="fs-18 d-inline-block fw-medium">0.5 BTC</span>
                                            </div>
                                        </div>
                                        <div class="d-grid mt-3">
                                            <button type="button" class="btn btn-info btn-wave">Transfer Now</button>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <!--End::row-1 -->

                        <!-- Start:: row-2 -->
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Buy & Sell Statistics
                                        </div>
                                        <div class="btn-group flex-wrap" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-primary btn-sm btn-wave">1D</button>
                                            <button type="button" class="btn btn-primary-light btn-sm btn-wave">1W</button>
                                            <button type="button" class="btn btn-primary-light btn-sm btn-wave">1M</button>
                                            <button type="button" class="btn btn-primary-light btn-sm btn-wave">3M</button>
                                            <button type="button" class="btn btn-primary-light btn-sm btn-wave">6M</button>
                                            <button type="button" class="btn btn-primary-light btn-sm btn-wave">1Y</button>
                                        </div>
                                    </div>
                                    <div class="card-body p-xl-0">
                                        <div class="row align-items-center">
                                            <div class="col-xxl-3 pe-xl-0">
                                                <div class="p-3">
                                                    <div class="card custom-card border shadow-none">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div>
                                                                    <h5 class="fw-medium mb-1">27,536.12<span class="ms-2 d-inline-block text-muted mb-2 fs-12 fw-normal">BTC/USD</span></h5>
                                                                    <span class="text-danger d-block fs-12 mt-1">-0.06% (24h)</span>
                                                                </div>
                                                                <div>
                                                                    <span class="avatar avatar-xl avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Bitcoin.svg')}}" alt="Bitcoin">
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between mt-3 mb-2">
                                                                <div>
                                                                    <span class="d-block text-muted mb-1">Avail. Balance:</span>
                                                                    <h6 class="fw-medium mb-1">$22,803.92 USD</h6>
                                                                </div>
                                                                <div>
                                                                    <span class="d-block text-muted mb-1 text-end">Asset Value:</span>
                                                                    <h6 class="fw-medium mb-1">$456,683.00 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex gap-2 justify-content-between">
                                                                <div class="me-2 fw-medium text-muted">Total Buy: <div class="text-primary">$324.25 USD</div></div>
                                                                <div class="fw-medium text-muted text-end">Total Sell: <div class="text-danger">$4,235.25 USD</div></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card custom-card border shadow-none mb-0">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div>
                                                                    <h5 class="fw-medium mb-1">1,837.45<span class="ms-2 d-inline-block text-muted mb-2 fs-12 fw-normal">ETH/USD</span></h5>
                                                                    <span class="text-success d-block fs-12 mt-1">+1.23% (24h)</span>
                                                                </div>
                                                                <div>
                                                                    <span class="avatar avatar-xl avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="Ethereum">
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between mt-3 mb-2">
                                                                <div>
                                                                    <span class="d-block text-muted mb-1">Avail. Balance:</span>
                                                                    <h6 class="fw-medium mb-1">$10,452.67 USD</h6>
                                                                </div>
                                                                <div>
                                                                    <span class="d-block text-muted mb-1 text-end">Asset Value:</span>
                                                                    <h6 class="fw-medium mb-1">$150,300.00 USD</h6>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex gap-2 justify-content-between">
                                                                <div class="me-2 fw-medium text-muted">Total Buy: <div class="text-primary">$1,234.56 USD</div></div>
                                                                <div class="fw-medium text-muted text-end">Total Sell: <div class="text-danger">$3,456.78 USD</div></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-9 ps-0">
                                                <div id="buy_sell-statistics" class="px-3"></div>
                                                <div class="d-flex flex-wrap align-items-center border-top border-block-start-dashed mt-3 p-4 gap-4 justify-content-between">
                                                    <div>
                                                        <span class="d-block mb-1">Total Buy</span>
                                                        <span class="d-block fw-medium fs-16 text-success">$600.00 USD</span>
                                                    </div>
                                                    <div>
                                                        <span class="d-block mb-1">Total Sell</span>
                                                        <span class="d-block fw-medium fs-16 text-danger">$2,500.00 USD</span>
                                                    </div>
                                                    <div>
                                                        <span class="d-block mb-1">Available Balance</span>
                                                        <span class="d-block fw-medium fs-16 text-primary">$18,250.00 USD</span>
                                                    </div>
                                                    <div>
                                                        <span class="d-block mb-1">Total Crypto Asset Value</span>
                                                        <span class="d-block fw-medium fs-16 text-warning">$100,000.00 USD</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

        <!-- Crypto Buy & Sell JS -->
        @vite('resources/assets/js/crypto-buy-sell.js')
        

@endsection