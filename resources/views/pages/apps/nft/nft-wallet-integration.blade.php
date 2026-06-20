@extends('layouts.master')

@section('styles')

      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Wallet Integration</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Wallet Integration</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row justify-content-center">
                        <div class="col-xxl-12">                       
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Connect Your Wallet
                                    </div>
                                    <div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-3">
                                            <div class="card custom-card nft-wallet active">
                                                <div class="card-body py-1 px-2">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded p-1 bg-primary-transparent">
                                                                <img src="{{asset('build/assets/images/nft-images/38.png')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="fw-medium mb-0">MetaMask</h6>  
                                                        </div>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary ms-auto">Connect</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3">
                                            <div class="card custom-card nft-wallet">
                                                <div class="card-body py-1 px-2">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded p-1 bg-primary-transparent">
                                                                <img src="{{asset('build/assets/images/nft-images/39.png')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="fw-medium mb-0">Enjin Wallet</h6>
                                                        </div>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary-light ms-auto">Connect</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3">
                                            <div class="card custom-card nft-wallet">
                                                <div class="card-body py-1 px-2">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded p-1 bg-primary-transparent">
                                                                <img src="{{asset('build/assets/images/nft-images/31.png')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="fw-medium mb-0">Trust Wallet</h6>  
                                                        </div>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary-light ms-auto">Connect</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3">
                                            <div class="card custom-card nft-wallet">
                                                <div class="card-body py-1 px-2">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded p-1 bg-primary-transparent">
                                                                <img src="{{asset('build/assets/images/nft-images/40.png')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="fw-medium mb-0">Coinbase Wallet</h6>  
                                                        </div>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary-light ms-auto">Connect</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3">
                                            <div class="card custom-card nft-wallet mb-xxl-0">
                                                <div class="card-body py-1 px-2">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded p-1 bg-primary-transparent">
                                                                <img src="{{asset('build/assets/images/nft-images/27.png')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="fw-medium mb-0">Lido</h6>  
                                                        </div>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary-light ms-auto">Connect</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3">
                                            <div class="card custom-card nft-wallet mb-xxl-0">
                                                <div class="card-body py-1 px-2">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded p-1 bg-primary-transparent">
                                                                <img src="{{asset('build/assets/images/nft-images/25.png')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="fw-medium mb-0">Huobi Wallet</h6>  
                                                        </div>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary-light ms-auto">Connect</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3">
                                            <div class="card custom-card nft-wallet mb-xxl-0">
                                                <div class="card-body py-1 px-2">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded p-1 bg-primary-transparent">
                                                                <img src="{{asset('build/assets/images/nft-images/35.png')}}" alt="Phantom Wallet">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="fw-medium mb-0">Phantom Wallet</h6>
                                                        </div>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary-light ms-auto">Connect</a>
                                                    </div>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="col-xxl-3">
                                            <div class="card custom-card nft-wallet mb-xxl-0">
                                                <div class="card-body py-1 px-2">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded p-1 bg-primary-transparent">
                                                                <img src="{{asset('build/assets/images/nft-images/37.png')}}" alt="Ledger Live">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <h6 class="fw-medium mb-0">Ledger Live</h6>
                                                        </div>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary-light ms-auto">Connect</a>
                                                    </div>
                                                </div>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <div class="mt-3 mb-4 fs-15 fw-semibold">Choose Your Blockchain Network :</div>
                                    <ul class="list-group list-group-flush nft-list d-flex align-items-center gap-4 flex-row flex-wrap">
                                        <li class="list-group-item rounded border-bottom-0 active">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <span class="avatar avatar-rounded avatar-sm bg-light p-1">
                                                        <img src="{{asset('build/assets/images/nft-images/34.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="fs-14 fw-medium">Ethereum</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item rounded border-bottom-0 bg-light">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <span class="avatar avatar-rounded avatar-sm bg-light p-1">
                                                        <img src="{{asset('build/assets/images/nft-images/33.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="fs-14 fw-medium">Polygon</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item rounded border-bottom-0 bg-light">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <span class="avatar avatar-rounded avatar-sm bg-light p-1">
                                                        <img src="{{asset('build/assets/images/nft-images/32.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="fs-14 fw-medium">Solana</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item rounded border-bottom-0 bg-light">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <span class="avatar avatar-rounded avatar-sm bg-light p-1">
                                                        <img src="{{asset('build/assets/images/nft-images/28.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="fs-14 fw-medium">Tezos</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item rounded border-bottom-0 bg-light">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <span class="avatar avatar-rounded avatar-sm bg-light p-1">
                                                        <img src="{{asset('build/assets/images/nft-images/30.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="fs-14 fw-medium">Avalanche</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item rounded border-bottom-0 bg-light">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <span class="avatar avatar-rounded avatar-sm bg-light p-1">
                                                        <img src="{{asset('build/assets/images/nft-images/29.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="fs-14 fw-medium">Cardano</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item rounded border-bottom-0 bg-light">
                                            <a href="javascript:void(0);" class="stretched-link"></a>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <span class="avatar avatar-rounded avatar-sm bg-light p-1">
                                                        <img src="{{asset('build/assets/images/nft-images/36.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="fs-14 fw-medium">Binance Smart Chain</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body border-top">
                                    <div class="mb-4 fs-15 fw-semibold">Wallet Features :</div>
                                    <div class="row gy-3 gy-xl-0">
                                        <div class="col-xl-8">
                                            <ul class="nav nav-tabs tab-style-8 scaleX nft-tab gap-2 mb-3" id="myTab4" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link bg-light px-4 active" id="transactions" data-bs-toggle="tab" data-bs-target="#transactions-pane" type="button" role="tab" aria-controls="transactions-pane" aria-selected="true">Wallet Transactions</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link bg-light px-4" id="YourNFT" data-bs-toggle="tab" data-bs-target="#YourNFTpane" type="button" role="tab" aria-controls="YourNFTpane" aria-selected="false" tabindex="-1">NFT Gallery</button>
                                                </li>
                                            </ul>
                                            <div class="card-body tab-content p-0">
                                                <div class="tab-pane show active overflow-hidden p-0 border-0" id="transactions-pane" role="tabpanel" aria-labelledby="transactions" tabindex="0">   
                                                    <ul class="list-group list-group-flush border rounded">
                                                        <li class="list-group-item">
                                                            <div class="d-flex gap-3 align-items-center flex-wrap">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-sm avatar-rounded bg-primary-transparent">
                                                                        <i class="bi bi-arrow-left-right fs-15 "></i>
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <div class="mb-1 d-flex justify-content-between gap-1"><span class="fw-medium">NFT Sale Proceeds</span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <div class="fs-13">From: <span class="text-primary fw-medium">@buyer456</span></div>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <div class="fs-13">Amount: <span class="text-success fw-medium">0.75 ETH</span></div>
                                                                </div>
                                                                <div class="fs-12 text-muted ms-auto">30 mins ago</div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex gap-3 align-items-center flex-wrap">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-sm avatar-rounded bg-primary-transparent">
                                                                        <i class="bi bi-arrow-left-right fs-15 "></i>
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <div class="mb-1 d-flex justify-content-between gap-1"><span class="fw-medium">NFT Purchase</span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <div class="fs-13">To: <span class="text-primary fw-medium">@artist123</span></div>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <div class="fs-13">Amount: <span class="text-danger fw-medium">$500</span></div>
                                                                </div>
                                                                <div class="fs-12 text-muted ms-auto">15 mins ago</div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex gap-3 align-items-center flex-wrap">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-sm avatar-rounded bg-primary-transparent">
                                                                        <i class="bi bi-arrow-left-right fs-15 "></i>
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <div class="mb-1 d-flex justify-content-between gap-1"><span class="fw-medium">NFT Auction Bid</span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <div class="fs-13">From: <span class="text-primary fw-medium">@bidder789</span></div>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <div class="fs-13">Amount: <span class="fw-medium">0.5 ETH</span></div>
                                                                </div>
                                                                <div class="fs-12 text-muted ms-auto">10 mins ago</div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex gap-3 align-items-center flex-wrap">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-sm avatar-rounded bg-primary-transparent">
                                                                        <i class="bi bi-arrow-left-right fs-15 "></i>
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <div class="mb-1 d-flex justify-content-between gap-1"><span class="fw-medium">ETH Withdrawal</span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <div class="fs-13">To: <span class="text-primary fw-medium">0xA1B2C3D4...</span></div>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <div class="fs-13">Amount: <span class="text-danger fw-medium">2.0 ETH</span></div>
                                                                </div>
                                                                <div class="fs-12 text-muted ms-auto">1 hour ago</div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane overflow-hidden p-0 border-0" id="YourNFTpane" role="tabpanel" aria-labelledby="YourNFT" tabindex="1">
                                                    <div class="row g-2">
                                                        <div class="col-xxl-3 col-6">
                                                            <img src="{{asset('build/assets/images/nft-images/2.png')}}" class="card-img" alt="...">
                                                        </div>
                                                        <div class="col-xxl-3 col-6">
                                                            <img src="{{asset('build/assets/images/nft-images/1.png')}}" class="card-img" alt="...">
                                                        </div>
                                                        <div class="col-xxl-3 col-6">
                                                            <img src="{{asset('build/assets/images/nft-images/3.png')}}" class="card-img" alt="...">
                                                        </div>
                                                        <div class="col-xxl-3 col-6">
                                                            <img src="{{asset('build/assets/images/nft-images/4.png')}}" class="card-img" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="card custom-card overflow-hidden bg-primary nft-wallet-card">
                                                <div class="card-body d-flex gap-2 align-items-center">
                                                    <div class="fw-medium mb-0 text-fixed-white op-8">
                                                        NFT Wallet Balance
                                                    </div>
                                                    <h5 class="fw-bold text-fixed-white ms-auto mb-0">$42,150</h5>
                                                </div>
                                            </div>
                                            <div class="card custom-card mb-0 border shadow-none bg-light">
                                                <div class="card-body">
                                                    <div class="mb-4 fs-15 fw-semibold"><i class="ri-lightbulb-flash-fill text-secondary me-1 lh-1"></i>Security Tips: </div>
                                                    <ul class="list-unstyled ps-3 mb-0">
                                                        <li class="mb-3"><i class="ri-shield-check-fill me-2 text-success lh-1 fs-15"></i><strong>Use Strong Passwords:</strong> Create a unique and complex password for your wallet.</li>
                                                        <li><i class="ri-shield-check-fill me-2 text-success lh-1 fs-15"></i><strong>Enable Two-Factor Authentication:</strong> Use 2FA for added security when accessing your wallet.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-between gap-2">
                                    <button class="btn btn-primary btn-wave">Import More Wallets</button>
                                    <button class="btn btn-success btn-wave">Add New Wallet</button>
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