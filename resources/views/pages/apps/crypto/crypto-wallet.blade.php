@extends('layouts.master')

@section('styles')

      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Crypto Wallet</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Crypto Wallet</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xxl-6 col-lg-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Bitcoin (BTC) Wallet
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded">
                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Bitcoin.svg')}}" alt="Bitcoin">
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-block text-muted fs-12 fw-normal">Available BTC</span>
                                                <span class="fw-medium fs-18">0.075 BTC</span>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <span class="fw-medium fs-18">$2,230.25</span>
                                            <span class="d-block text-muted fs-12 fw-normal">Value in USD</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-3 flex-wrap">
                                        <div>
                                            <span class="d-block text-muted fs-12 fw-normal">Total Transactions:</span>
                                            <span class="fw-medium fs-15">45</span>
                                        </div>
                                        <div>
                                            <span class="d-block text-muted fs-12 fw-normal">Last Transaction:</span>
                                            <span class="fw-medium fs-15">0.005 BTC</span>
                                            <span class="text-muted fs-12">on 2024-09-24</span>
                                        </div>
                                        <div class="text-break">
                                            <span class="d-block text-muted fs-12 fw-normal">Wallet Address:</span>
                                            <span class="fw-medium fs-15">1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex gap-2 flex-wrap">
                                        <button class="btn btn-primary btn-w-lg btn-sm btn-wave flex-fill">
                                            <i class="ti ti-coins me-1 fs-14"></i>Transfer
                                        </button>
                                        <button class="btn btn-success btn-w-lg btn-sm btn-wave flex-fill">
                                            <i class="ri-wallet-3-line me-1 fs-14"></i>Withdraw
                                        </button>
                                        <button class="btn btn-info btn-w-lg btn-sm btn-wave flex-fill">
                                            <i class="ri-history-line me-1 fs-14"></i>Transaction History
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-lg-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Ethereum (ETH) Wallet
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded">
                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="Ethereum">
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-block text-muted fs-12 fw-normal">Available ETH</span>
                                                <span class="fw-medium fs-18">1.25 ETH</span>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <span class="fw-medium fs-18">$2,000.50</span>
                                            <span class="d-block text-muted fs-12 fw-normal">Value in USD</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-3 flex-wrap">
                                        <div>
                                            <span class="d-block text-muted fs-12 fw-normal">Total Transactions:</span>
                                            <span class="fw-medium fs-15">30</span>
                                        </div>
                                        <div>
                                            <span class="d-block text-muted fs-12 fw-normal">Last Transaction:</span>
                                            <span class="fw-medium fs-15">0.1 ETH</span>
                                            <span class="text-muted fs-12">on 2024-09-24</span>
                                        </div>
                                        <div class="text-break">
                                            <span class="d-block text-muted fs-12 fw-normal">Wallet Address:</span>
                                            <span class="fw-medium fs-15">0x3fB1eAd4D7F6f94D8DFe9BFEfEa94B9C1a</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex gap-2 flex-wrap">
                                        <button class="btn btn-primary btn-w-lg btn-sm btn-wave flex-fill">
                                            <i class="ti ti-coins me-1 fs-14"></i>Transfer
                                        </button>
                                        <button class="btn btn-success btn-w-lg btn-sm btn-wave flex-fill">
                                            <i class="ri-wallet-3-line me-1 fs-14"></i>Withdraw
                                        </button>
                                        <button class="btn btn-info btn-w-lg btn-sm btn-wave flex-fill">
                                            <i class="ri-history-line me-1 fs-14"></i>Transaction History
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-lg-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Ethereum (ETH) Wallet
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded">
                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Litecoin.svg')}}" alt="Litecoin">
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-block text-muted fs-12 fw-normal">Available LTC</span>
                                                <span class="fw-medium fs-18">5.6 LTC</span>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <span class="fw-medium fs-18">$650.75</span>
                                            <span class="d-block text-muted fs-12 fw-normal">Value in USD</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-3 flex-wrap">
                                        <div>
                                            <span class="d-block text-muted fs-12 fw-normal">Total Transactions:</span>
                                            <span class="fw-medium fs-15">50</span>
                                        </div>
                                        <div>
                                            <span class="d-block text-muted fs-12 fw-normal">Last Transaction:</span>
                                            <span class="fw-medium fs-15">0.2 LTC</span>
                                            <span class="text-muted fs-12">on 2024-09-24</span>
                                        </div>
                                        <div class="text-break">
                                            <span class="d-block text-muted fs-12 fw-normal">Wallet Address:</span>
                                            <span class="fw-medium fs-15">LcHKTh9wRrX9PrsX3fLpVTpcTrB6LVoKss</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex gap-2 flex-wrap">
                                        <button class="btn btn-primary btn-w-lg btn-sm btn-wave flex-fill">
                                            <i class="ti ti-coins me-1 fs-14"></i>Transfer
                                        </button>
                                        <button class="btn btn-success btn-w-lg btn-sm btn-wave flex-fill">
                                            <i class="ri-wallet-3-line me-1 fs-14"></i>Withdraw
                                        </button>
                                        <button class="btn btn-info btn-w-lg btn-sm btn-wave flex-fill">
                                            <i class="ri-history-line me-1 fs-14"></i>Transaction History
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-lg-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Ethereum (ETH) Wallet
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded">
                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ripple.svg')}}" alt="Ripple">
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-block text-muted fs-12 fw-normal">Available XRP</span>
                                                <span class="fw-medium fs-18">500 XRP</span>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <span class="fw-medium fs-18">$235.00</span>
                                            <span class="d-block text-muted fs-12 fw-normal">Value in USD</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-3 flex-wrap">
                                        <div>
                                            <span class="d-block text-muted fs-12 fw-normal">Total Transactions:</span>
                                            <span class="fw-medium fs-15">120</span>
                                        </div>
                                        <div>
                                            <span class="d-block text-muted fs-12 fw-normal">Last Transaction:</span>
                                            <span class="fw-medium fs-15">50 XRP</span>
                                            <span class="text-muted fs-12">on 2024-09-23</span>
                                        </div>
                                        <div class="text-break">
                                            <span class="d-block text-muted fs-12 fw-normal">Wallet Address:</span>
                                            <span class="fw-medium fs-15">rN7n7otQDd6FczFgLdSqtcsAUxDkw6fzRH</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex gap-2 flex-wrap">
                                        <button class="btn btn-primary btn-w-lg btn-sm btn-wave flex-fill">
                                            <i class="ti ti-coins me-1 fs-14"></i>Transfer
                                        </button>
                                        <button class="btn btn-success btn-w-lg btn-sm btn-wave flex-fill">
                                            <i class="ri-wallet-3-line me-1 fs-14"></i>Withdraw
                                        </button>
                                        <button class="btn btn-info btn-w-lg btn-sm btn-wave flex-fill">
                                            <i class="ri-history-line me-1 fs-14"></i>Transaction History
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Dash (DASH) Wallet
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded">
                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Dash.svg')}}" alt="Dash">
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-block text-muted fs-12 fw-normal">Available DASH</span>
                                                <span class="fw-medium fs-18">8.5 DASH</span>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <span class="fw-medium fs-18">$925.30</span>
                                            <span class="d-block text-muted fs-12 fw-normal">Value in USD</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-3 flex-wrap">
                                        <div>
                                            <span class="d-block text-muted fs-12 fw-normal">Total Transactions:</span>
                                            <span class="fw-medium fs-15">40</span>
                                        </div>
                                        <div>
                                            <span class="d-block text-muted fs-12 fw-normal">Last Transaction:</span>
                                            <span class="fw-medium fs-15">0.3 DASH</span>
                                            <span class="text-muted fs-12">on 2024-09-22</span>
                                        </div>
                                        <div class="text-break">
                                            <span class="d-block text-muted fs-12 fw-normal">Wallet Address:</span>
                                            <span class="fw-medium fs-15">Xn3HgXoVX8REeAxF6JrYte4fz8AwF5p5Ku</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex gap-2 flex-wrap">
                                        <button class="btn btn-primary btn-w-lg btn-sm btn-wave flex-fill">
                                            <i class="ti ti-coins me-1 fs-14"></i>Transfer
                                        </button>
                                        <button class="btn btn-success btn-w-lg btn-sm btn-wave flex-fill">
                                            <i class="ri-wallet-3-line me-1 fs-14"></i>Withdraw
                                        </button>
                                        <button class="btn btn-info btn-w-lg btn-sm btn-wave flex-fill">
                                            <i class="ri-history-line me-1 fs-14"></i>Transaction History
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Monero (XMR) Wallet
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded">
                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Monero.svg')}}" alt="Monero">
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-block text-muted fs-12 fw-normal">Available XMR</span>
                                                <span class="fw-medium fs-18">10 XMR</span>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <span class="fw-medium fs-18">$1,450.00</span>
                                            <span class="d-block text-muted fs-12 fw-normal">Value in USD</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-3 flex-wrap">
                                        <div>
                                            <span class="d-block text-muted fs-12 fw-normal">Total Transactions:</span>
                                            <span class="fw-medium fs-15">70</span>
                                        </div>
                                        <div>
                                            <span class="d-block text-muted fs-12 fw-normal">Last Transaction:</span>
                                            <span class="fw-medium fs-15">1 XMR</span>
                                            <span class="text-muted fs-12">on 2024-09-21</span>
                                        </div>
                                        <div class="text-break">
                                            <span class="d-block text-muted fs-12 fw-normal">Wallet Address:</span>
                                            <span class="fw-medium fs-15">49NsXk3Mb9Hw5D2bDxJnEp8f6eVQEDrfLZ</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex gap-2 flex-wrap">
                                        <button class="btn btn-primary btn-w-lg btn-sm btn-wave flex-fill">
                                            <i class="ti ti-coins me-1 fs-14"></i>Transfer
                                        </button>
                                        <button class="btn btn-success btn-w-lg btn-sm btn-wave flex-fill">
                                            <i class="ri-wallet-3-line me-1 fs-14"></i>Withdraw
                                        </button>
                                        <button class="btn btn-info btn-w-lg btn-sm btn-wave flex-fill">
                                            <i class="ri-history-line me-1 fs-14"></i>Transaction History
                                        </button>
                                    </div>
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


@endsection