@extends('layouts.master')

@section('styles')

      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Live Auction</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Live Auction</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xxl-3 col-xl-4">
                            <div class="card custom-card products-navigation-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Filter
                                    </div>
                                    <a href="javascript:void(0);" class="text-secondary text-decoration-underline">Clear All</a>
                                </div>
                                <div class="card-body p-0">
                                    <div class="p-3 border-bottom">
                                        <div class="fw-medium mb-0">Creator Status</div>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Creator-Verified" checked="">
                                                <label class="form-check-label" for="Creator-Verified">
                                                    Verified Creators
                                                </label>
                                                <span class="badge bg-light text-default float-end">20</span>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Creator-NonVerified">
                                                <label class="form-check-label" for="Creator-NonVerified">
                                                    Non-Verified Creators
                                                </label>
                                                <span class="badge bg-light text-default float-end">40</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <div class="fw-medium mb-0">NFT Categories</div>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Category-Art" checked="">
                                                <label class="form-check-label" for="Category-Art">
                                                    Digital Art
                                                </label>
                                                <span class="badge bg-light text-default float-end">60</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Category-Music">
                                                <label class="form-check-label" for="Category-Music">
                                                    Music
                                                </label>
                                                <span class="badge bg-light text-default float-end">25</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Category-Collectibles">
                                                <label class="form-check-label" for="Category-Collectibles">
                                                    Collectibles
                                                </label>
                                                <span class="badge bg-light text-default float-end">35</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <div class="fw-medium mb-0">Price Brackets</div>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Price-Under-0-5ETH" checked>
                                                <label class="form-check-label" for="Price-Under-0-5ETH">
                                                    Under 0.5 ETH
                                                </label>
                                                <span class="badge bg-light text-default float-end">70</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Price-0-5-2ETH">
                                                <label class="form-check-label" for="Price-0-5-2ETH">
                                                    0.5 - 2 ETH
                                                </label>
                                                <span class="badge bg-light text-default float-end">45</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Price-2-5ETH">
                                                <label class="form-check-label" for="Price-2-5ETH">
                                                    2 - 5 ETH
                                                </label>
                                                <span class="badge bg-light text-default float-end">25</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <div class="fw-medium mb-0">Blockchain Standards</div>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Token-BSC">
                                                <label class="form-check-label" for="Token-BSC">
                                                    Binance Smart Chain
                                                </label>
                                                <span class="badge bg-light text-default float-end">30</span>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Token-Polygon">
                                                <label class="form-check-label" for="Token-Polygon">
                                                    Polygon
                                                </label>
                                                <span class="badge bg-light text-default float-end">20</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <div class="fw-medium mb-0">Auction States</div>
                                        <div class="px-0 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Auction-Live" checked="">
                                                <label class="form-check-label" for="Auction-Live">
                                                    Live Auctions
                                                </label>
                                                <span class="badge bg-light text-default float-end">75</span>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Auction-Closed">
                                                <label class="form-check-label" for="Auction-Closed">
                                                    Closed Auctions
                                                </label>
                                                <span class="badge bg-light text-default float-end">20</span>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="p-3 border-bottom">
                                        <div class="fw-medium mb-0">Ownership Types</div>
                                        <div class="px-0 py-3 pb-1">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Ownership-Listed">
                                                <label class="form-check-label" for="Ownership-Listed">
                                                    Listed for Sale
                                                </label>
                                                <span class="badge bg-light text-default float-end">50</span>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="Ownership-NotListed">
                                                <label class="form-check-label" for="Ownership-NotListed">
                                                    Not Listed for Sale
                                                </label>
                                                <span class="badge bg-light text-default float-end">40</span>
                                            </div>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Top NFT's
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);" class="text-secondary text-decoration-underline">Explore More</a>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="lh-1">
                                                        <span class="avatar avatar-md avatar-rounded me-2">
                                                            <img src="{{asset('build/assets/images/nft-images/1.png')}}" alt="Mystic Forest" class="nft-image">
                                                        </span>
                                                    </div>
                                                    <div class="align-items-center">
                                                        <p class="mb-0 fw-medium">Mystic Forest<i class="bi bi-patch-check-fill text-success ms-2"></i></p>
                                                        <span class="fs-12 text-muted">Ethan Hunt (@ethanhunt)</span>
                                                    </div>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <p class="current-bid mb-0"><span class="text-muted">Bid:</span> <span class="fw-medium">4.5 ETH</span></p>
                                                    <p class="remaining-time mb-0"><span class="text-muted">Time:</span> <span class="fw-medium text-primary">3h 15m</span></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="lh-1">
                                                        <span class="avatar avatar-md avatar-rounded me-2">
                                                            <img src="{{asset('build/assets/images/nft-images/2.png')}}" alt="Digital Dreams" class="nft-image">
                                                        </span>
                                                    </div>
                                                    <div class="align-items-center">
                                                        <p class="mb-0 fw-medium">Digital Dreams<i class="bi bi-patch-check-fill text-success ms-2"></i></p>
                                                        <span class="fs-12 text-muted">Sophia (@sophia)</span>
                                                    </div>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <p class="current-bid mb-0"><span class="text-muted">Bid:</span> <span class="fw-medium">3.8 ETH</span></p>
                                                    <p class="remaining-time mb-0"><span class="text-muted">Time:</span> <span class="fw-medium text-primary">2h 40m</span></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="lh-1">
                                                        <span class="avatar avatar-md avatar-rounded me-2">
                                                            <img src="{{asset('build/assets/images/nft-images/3.png')}}" alt="Pixelated Glory" class="nft-image">
                                                        </span>
                                                    </div>
                                                    <div class="align-items-center">
                                                        <p class="mb-0 fw-medium">Pixelated Glory<i class="bi bi-patch-check-fill text-success ms-2"></i></p>
                                                        <span class="fs-12 text-muted">Oliver King (@oliver)</span>
                                                    </div>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <p class="current-bid mb-0"><span class="text-muted">Bid:</span> <span class="fw-medium">2.7 ETH</span></p>
                                                    <p class="remaining-time mb-0"><span class="text-muted">Time:</span> <span class="fw-medium text-primary">5h 20m</span></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="lh-1">
                                                        <span class="avatar avatar-md avatar-rounded me-2">
                                                            <img src="{{asset('build/assets/images/nft-images/4.png')}}" alt="Galactic Voyage" class="nft-image">
                                                        </span>
                                                    </div>
                                                    <div class="align-items-center">
                                                        <p class="mb-0 fw-medium">Galactic Voyage<i class="bi bi-patch-check-fill text-success ms-2"></i></p>
                                                        <span class="fs-12 text-muted">Ava Johnson (@avajohn)</span>
                                                    </div>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <p class="current-bid mb-0"><span class="text-muted">Bid:</span> <span class="fw-medium">6.2 ETH</span></p>
                                                    <p class="remaining-time mb-0"><span class="text-muted">Time:</span> <span class="fw-medium text-primary">1h 10m</span></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="lh-1">
                                                        <span class="avatar avatar-md avatar-rounded me-2">
                                                            <img src="{{asset('build/assets/images/nft-images/5.png')}}" alt="Cyber Samurai" class="nft-image">
                                                        </span>
                                                    </div>
                                                    <div class="align-items-center">
                                                        <p class="mb-0 fw-medium">Cyber Samurai<i class="bi bi-patch-check-fill text-success ms-2"></i></p>
                                                        <span class="fs-12 text-muted">Noah Brown (@noah)</span>
                                                    </div>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <p class="current-bid mb-0"><span class="text-muted">Bid:</span> <span class="fw-medium">5.1 ETH</span></p>
                                                    <p class="remaining-time mb-0"><span class="text-muted">Time:</span> <span class="fw-medium text-primary">4h 50m</span></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="lh-1">
                                                        <span class="avatar avatar-md avatar-rounded me-2">
                                                            <img src="{{asset('build/assets/images/nft-images/6.png')}}" alt="Ethereal Realm" class="nft-image">
                                                        </span>
                                                    </div>
                                                    <div class="align-items-center">
                                                        <p class="mb-0 fw-medium">Ethereal Realm<i class="bi bi-patch-check-fill text-success ms-2"></i></p>
                                                        <span class="fs-12 text-muted">Liam Smith (@liamsmith)</span>
                                                    </div>
                                                </div>
                                                <div class="text-end ms-auto">
                                                    <p class="current-bid mb-0"><span class="text-muted">Bid:</span> <span class="fw-medium">7.8 ETH</span></p>
                                                    <p class="remaining-time mb-0"><span class="text-muted">Time:</span> <span class="fw-medium text-primary">2h 5m</span></p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>                         
                        </div>
                        <div class="col-xxl-9 col-xl-8">
                            <div class="card custom-card">
                                <div class="card-header bg-white p-3">
                                    <div class="card-title">
                                        Categories
                                    </div>
                                </div>
                                <div class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                    <div class="nft-tag p-1 nft-tag-primary active">
                                        <a href="javascript:void(0);" class="stretched-link"></a>
                                        <span class=""><i class="ri-list-check lh-1 fs-18 align-middle nft-tag-icon"></i></span>
                                        <span class="nft-tag-text">All Categories</span>
                                    </div>
                                    <div class="nft-tag p-1 nft-tag-success">
                                        <a href="javascript:void(0);" class="stretched-link"></a>
                                        <i class="ri-star-line lh-1 fs-18 align-middle nft-tag-icon"></i>
                                        <span class="nft-tag-text">Trending Now</span>
                                    </div>
                                    <div class="nft-tag p-1 nft-tag-secondary">
                                        <a href="javascript:void(0);" class="stretched-link"></a>
                                        <i class="ri-computer-line lh-1 fs-18 align-middle nft-tag-icon"></i>
                                        <span class="nft-tag-text">Digital Collectibles</span>
                                    </div>
                                    <div class="nft-tag p-1 nft-tag-danger">
                                        <a href="javascript:void(0);" class="stretched-link"></a>
                                        <i class="ri-image-line lh-1 fs-18 align-middle nft-tag-icon"></i>
                                        <span class="nft-tag-text">Photography</span>
                                    </div>
                                    <div class="nft-tag p-1 nft-tag-info">
                                        <a href="javascript:void(0);" class="stretched-link"></a>
                                        <i class="ri-paint-brush-line lh-1 fs-18 align-middle nft-tag-icon"></i>
                                        <span class="nft-tag-text">Visual Arts</span>
                                    </div>
                                    <div class="nft-tag p-1 nft-tag-warning">
                                        <a href="javascript:void(0);" class="stretched-link"></a>
                                        <i class="ri-gift-line lh-1 fs-18 align-middle nft-tag-icon"></i>
                                        <span class="nft-tag-text">Miscellaneous</span>
                                    </div>                            
                                </div>
                            </div>                     
                            <div class="card-body">
                                <div class="row">
                                    <h6 class="fw-medium mb-3">Live Auction:</h6>
                                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <a href="javascript:void(0);" class=""></a>
                                                <div class="position-relative overflow-hidden rounded">
                                                    <img src="{{asset('build/assets/images/nft-images/2.png')}}" class="card-img mb-3" alt="...">
                                                </div>
                                                <div class="d-flex align-items-start gap-2 mb-2 pb-1 flex-wrap">
                                                    <div class="text-truncate">
                                                        <p class="fs-16 mb-0 fw-semibold text-truncate">Digital Collectible #721</p>
                                                    </div>
                                                    <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time ms-auto px-2 rounded fs-15 flex-shrink-0">02hrs : 45m : 12s</p>
                                                </div>
                                                <div class="p-2 rounded bg-light d-flex mb-2 align-items-center flex-wrap gap-2">
                                                    <div class="lh-1">
                                                        <span class="avatar avatar-rounded avatar-md p-1 bg-success bg-opacity-50 border">
                                                            <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fw-medium">CryptoArt Collection <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                        <p class="fs-11 text-muted mb-0">#cryptoart721</p>
                                                    </div>
                                                    <span class="ms-auto fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>42 Likes</span>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center pt-1 flex-wrap gap1">
                                                    <h6 class="fw-semibold mb-0 bid-amt align-middle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 40 65">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                    <g transform="translate(227 93)">
                                                                        <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                        <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                        <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path>
                                                                        <path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                        <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        5.250ETH
                                                    </h6>
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <a href="javascript:void(0);" class=""></a>
                                                <div class="position-relative overflow-hidden rounded">
                                                    <img src="{{asset('build/assets/images/nft-images/3.png')}}" class="card-img mb-3" alt="...">
                                                </div>
                                                <div class="d-flex align-items-start gap-2 mb-2 pb-1 flex-wrap">
                                                    <div class="text-truncate">
                                                        <p class="fs-16 mb-0 fw-semibold text-truncate">Abstract Digital Art</p>
                                                    </div>
                                                    <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time ms-auto px-2 rounded fs-15"> 03hrs : 12m : 45s </p>
                                                </div>
                                                <div class="p-2 rounded bg-light d-flex mb-2 align-items-center flex-wrap gap-2">
                                                    <div class="lh-1">
                                                        <span class="avatar avatar-rounded avatar-md p-1 bg-success bg-opacity-50 border">
                                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <p class="mb-0  fw-medium">Manistics NFT <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i> </p>
                                                        <p class="fs-11 text-muted mb-0">#manistics454</p>
                                                    </div>
                                                    <span class="ms-auto fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>24 Likes</span>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center pt-1 flex-wrap gap1">
                                                    <h6 class="fw-semibold mb-0 bid-amt align-middle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 40 65">
                                                            <g fill="none" fill-rule="evenodd">
                                                            <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                <g transform="translate(227 93)"><g>
                                                                <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path><path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                <path fill="#62688F" d="M20.1 24.2V24 1.1.9l19.2 31.8c.1.1.2.2.2.3-.4-.2-.8-.4-1.3-.6-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-1-.4-.5-.2-1.1-.5-1.6-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.1-.6-.3-.9-.4l-2.1-.9c-.4-.2-.7-.3-1.1-.5-.5-.2-1-.5-1.5-.7-.3-.2-.7-.3-1-.5l-1.8-.9z"></path></g></g></g>
                                                            </g>
                                                        </svg>
                                                        15.325ETH
                                                    </h6>
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <a href="javascript:void(0);" class=""></a>
                                                <div class="position-relative overflow-hidden rounded">
                                                    <img src="{{asset('build/assets/images/nft-images/4.png')}}" class="card-img mb-3" alt="...">
                                                </div>
                                                <div class="d-flex align-items-start gap-2 mb-2 pb-1 flex-wrap">
                                                    <div class="text-truncate">
                                                        <p class="fs-16 mb-0 fw-semibold text-truncate">Epic Fantasy Artwork</p>
                                                    </div>
                                                    <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time ms-auto px-2 rounded fs-15 flex-shrink-0">01hrs : 30m : 55s</p>
                                                </div>
                                                <div class="p-2 rounded bg-light d-flex mb-2 align-items-center flex-wrap gap-2">
                                                    <div class="lh-1">
                                                        <span class="avatar avatar-rounded avatar-md p-1 bg-success bg-opacity-50 border">
                                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fw-medium">FantasyArt Studio <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                        <p class="fs-11 text-muted mb-0">#fantasyart123</p>
                                                    </div>
                                                    <span class="ms-auto fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>58 Likes</span>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center pt-1 flex-wrap gap1">
                                                    <h6 class="fw-semibold mb-0 bid-amt align-middle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 40 65">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                    <g transform="translate(227 93)">
                                                                        <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                        <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                        <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path>
                                                                        <path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                        <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        7.800ETH
                                                    </h6>
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <a href="javascript:void(0);" class=""></a>
                                                <div class="position-relative overflow-hidden rounded">
                                                    <img src="{{asset('build/assets/images/nft-images/5.png')}}" class="card-img mb-3" alt="...">
                                                </div>
                                                <div class="d-flex align-items-start gap-2 mb-2 pb-1 flex-wrap">
                                                    <div class="text-truncate">
                                                        <p class="fs-16 mb-0 fw-semibold text-truncate">Retro Gaming NFT</p>
                                                    </div>
                                                    <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time ms-auto px-2 rounded fs-15 flex-shrink-0">04hrs : 10m : 30s</p>
                                                </div>
                                                <div class="p-2 rounded bg-light d-flex mb-2 align-items-center flex-wrap gap-2">
                                                    <div class="lh-1">
                                                        <span class="avatar avatar-rounded avatar-md p-1 bg-success bg-opacity-50 border">
                                                            <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fw-medium">GamingNFT Hub <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                        <p class="fs-11 text-muted mb-0">#gamingnft456</p>
                                                    </div>
                                                    <span class="ms-auto fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>31 Likes</span>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center pt-1 flex-wrap gap-1">
                                                    <h6 class="fw-semibold mb-0 bid-amt align-middle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 40 65">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                    <g transform="translate(227 93)">
                                                                        <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                        <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                        <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path>
                                                                        <path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                        <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        3.500ETH
                                                    </h6>
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <a href="javascript:void(0);" class=""></a>
                                                <div class="position-relative overflow-hidden rounded">
                                                    <img src="{{asset('build/assets/images/nft-images/6.png')}}" class="card-img mb-3" alt="...">
                                                </div>
                                                <div class="d-flex align-items-start gap-2 mb-2 pb-1 flex-wrap">
                                                    <div class="text-truncate">
                                                        <p class="fs-16 mb-0 fw-semibold text-truncate">Abstract Digital Art</p>
                                                    </div>
                                                    <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time ms-auto px-2 rounded fs-15 flex-shrink-0">02hrs : 45m : 12s</p>
                                                </div>
                                                <div class="p-2 rounded bg-light d-flex mb-2 align-items-center flex-wrap gap-2">
                                                    <div class="lh-1">
                                                        <span class="avatar avatar-rounded avatar-md p-1 bg-success bg-opacity-50 border">
                                                            <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fw-medium">ArtisticNFTs <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                        <p class="fs-11 text-muted mb-0">#abstractart789</p>
                                                    </div>
                                                    <span class="ms-auto fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>42 Likes</span>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center pt-1 flex-wrap gap1">
                                                    <h6 class="fw-semibold mb-0 bid-amt align-middle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 40 65">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                    <g transform="translate(227 93)">
                                                                        <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                        <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                        <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path>
                                                                        <path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                        <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        4.200ETH
                                                    </h6>
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <a href="javascript:void(0);" class=""></a>
                                                <div class="position-relative overflow-hidden rounded">
                                                    <img src="{{asset('build/assets/images/nft-images/7.png')}}" class="card-img mb-3" alt="...">
                                                </div>
                                                <div class="d-flex align-items-start gap-2 mb-2 pb-1 flex-wrap">
                                                    <div class="text-truncate">
                                                        <p class="fs-16 mb-0 fw-semibold text-truncate">Crypto Music Album</p>
                                                    </div>
                                                    <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time ms-auto px-2 rounded fs-15 flex-shrink-0">03hrs : 15m : 40s</p>
                                                </div>
                                                <div class="p-2 rounded bg-light d-flex mb-2 align-items-center flex-wrap gap-2">
                                                    <div class="lh-1">
                                                        <span class="avatar avatar-rounded avatar-md p-1 bg-success bg-opacity-50 border">
                                                            <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <p class="mb-0 fw-medium">MusicNFT Collective <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                        <p class="fs-11 text-muted mb-0">#musicnft321</p>
                                                    </div>
                                                    <span class="ms-auto fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>67 Likes</span>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center pt-1 flex-wrap gap1">
                                                    <h6 class="fw-semibold mb-0 bid-amt align-middle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 40 65">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <g fill-rule="nonzero" transform="translate(-227 -93)">
                                                                    <g transform="translate(227 93)">
                                                                        <path fill="#8A92B2" d="M20.1.8v23.3c0 .1-.1.2-.2.2-.7.3-1.3.6-2 .9-.9.4-1.9.8-2.8 1.3L11.8 28l-2.7 1.2-3.3 1.5c-.9.4-1.8.8-2.8 1.3-.7.3-1.5.7-2.2 1-.1 0-.1.1-.2 0H.5c.3-.5.6-.9.9-1.4 1.6-2.7 3.3-5.4 4.9-8.1 1.7-2.9 3.5-5.8 5.2-8.7 1.6-2.7 3.2-5.4 4.8-8 1.2-2 2.4-3.9 3.5-5.9.2 0 .2-.1.3-.1-.1 0 0 0 0 0z"></path>
                                                                        <path fill="#454A75" d="M39.5 33c-1.5 1-3.1 1.9-4.6 2.8-4.9 2.9-9.7 5.7-14.6 8.6-.1 0-.1.1-.2.1s-.1-.1-.1-.1v-.3-19.5-.3c0-.1.1-.1.2-.1.4.2.8.4 1.3.6 1.2.6 2.5 1.1 3.7 1.7 1.1.5 2.1 1 3.2 1.4 1.1.5 2.1 1 3.2 1.5.9.4 1.9.8 2.8 1.3.9.4 1.9.8 2.8 1.3.7.3 1.4.7 2.2 1 0-.1 0 0 .1 0z"></path>
                                                                        <path fill="#8A92B2" d="M20.1 64.1s-.1 0 0 0c-.1 0-.1 0-.2-.1-2-2.8-3.9-5.5-5.9-8.3l-6-8.4c-1.9-2.7-3.9-5.4-5.8-8.2L.7 37c0-.1-.1-.1-.1-.2.1 0 .1.1.2.1 2.7 1.6 5.5 3.2 8.2 4.8 3.1 1.9 6.3 3.7 9.4 5.6.5.3 1.1.6 1.6.9.1 0 .1.1.1.2V64.1z"></path>
                                                                        <path fill="gray" d="M.6 33s.1 0 0 0c.1 0 .1 0 0 0 0 .1 0 .1 0 0z"></path>
                                                                        <path fill="#62688F" d="M.7 33.1c0-.1 0-.1 0 0 1-.5 2-.9 3-1.4l3.9-1.8c1-.5 2-.9 3-1.4 1.4-.7 2.9-1.3 4.3-2 1-.4 2-.9 3-1.3.7-.3 1.4-.6 2.1-1 .1 0 .1-.1.2-.1V44.5c-.1.1-.1 0-.2 0-.3-.2-.6-.3-.8-.5L.9 33.2c-.1-.1-.2-.1-.2-.1zM39.4 36.8c0 .1 0 .1-.1.2-5.8 8.2-11.6 16.3-17.4 24.5-.6.9-1.2 1.7-1.8 2.6V64v-.2-15.3-.3c1.3-.8 2.6-1.6 3.9-2.3l15.3-9c0-.1.1-.1.1-.1z"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        5.000ETH
                                                    </h6>
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <nav aria-label="Page navigation" class="pagination-style-4">
                                        <ul class="pagination text-center justify-content-end gap-1">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0)">
                                                    Prev
                                                </a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="bi bi-three-dots"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">16</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">17</a></li>
                                            <li class="page-item">
                                                <a class="page-link text-primary" href="javascript:void(0)">
                                                    next
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
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

        <!-- Live Auction JS -->
        @vite('resources/assets/js/live-auction.js')
        

@endsection