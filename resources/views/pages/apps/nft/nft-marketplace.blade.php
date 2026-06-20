@extends('layouts.master')

@section('styles')

      
@endsection


@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">
                    
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">NFT Market Place</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">NFT Market Place</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row justify-content-center">
                        <div class="col-xl-11">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                        <div>
                                            <ul class="nav nav-tabs nav-tabs-header mb-0" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-all" aria-selected="true">All</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-art" aria-selected="false" tabindex="-1">Art</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-gaming" aria-selected="false" tabindex="-1">Gaming</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-domain" aria-selected="false" tabindex="-1">Domain</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-music" aria-selected="false" tabindex="-1">Music</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-realestate" aria-selected="false" tabindex="-1">Real Estate</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-sports" aria-selected="false" tabindex="-1">Sports</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-fashion" aria-selected="false" tabindex="-1">Fashion</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-avatars" aria-selected="false" tabindex="-1">Avatars</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#nft-memes" aria-selected="false" tabindex="-1">Memes</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-flex gap-2">
                                            <button type="button" class="btn btn-sm btn-secondary btn-wave">Filters</button>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-wave btn-primary waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">New Collection</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">High - Low</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Low - High</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row justify-content-center">
                        <div class="col-xl-11">
                            <div class="tab-content">
                                <div class="tab-pane show active p-0 border-0" id="nft-all" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="position-relative overflow-hidden rounded">
                                                        <img src="{{asset('build/assets/images/nft-images/2.png')}}" class="card-img mb-3" alt="...">
                                                    </div>
                                                    <div class="d-flex align-items-start gap-2 mb-2 pb-1 flex-wrap">
                                                        <div class="text-truncate">
                                                            <p class="fs-16 mb-0 fw-semibold text-truncate">Digital Collect</p>
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
                                                            <p class="mb-0 fw-medium">CryArt Collection <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                            <p class="fs-11 text-muted mb-0">#cryptoart721</p>
                                                        </div>
                                                        <span class="ms-auto fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>42 Likes</span>
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
                                                            5.250ETH
                                                        </h6>
                                                        <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
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
                                                    <div class="d-flex justify-content-between align-items-center pt-1 flex-wrap gap-1">
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
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="position-relative overflow-hidden rounded">
                                                        <img src="{{asset('build/assets/images/nft-images/4.png')}}" class="card-img mb-3" alt="...">
                                                    </div>
                                                    <div class="d-flex align-items-start gap-2 mb-2 pb-1 flex-wrap">
                                                        <div class="text-truncate">
                                                            <p class="fs-16 mb-0 fw-semibold text-truncate">Epic Fantasy</p>
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
                                                            7.800ETH
                                                        </h6>
                                                        <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="position-relative overflow-hidden rounded">
                                                        <img src="{{asset('build/assets/images/nft-images/5.png')}}" class="card-img mb-3" alt="...">
                                                    </div>
                                                    <div class="d-flex align-items-start gap-2 mb-2 pb-1 flex-wrap">
                                                        <div class="text-truncate">
                                                            <p class="fs-16 mb-0 fw-semibold text-truncate">Retro Gaming</p>
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
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="position-relative overflow-hidden rounded">
                                                        <img src="{{asset('build/assets/images/nft-images/18.png')}}" class="card-img mb-3" alt="...">
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
                                                            4.200ETH
                                                        </h6>
                                                        <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="position-relative overflow-hidden rounded">
                                                        <img src="{{asset('build/assets/images/nft-images/20.png')}}" class="card-img mb-3" alt="...">
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
                                                            <p class="mb-0 fw-medium">Music Collective <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                            <p class="fs-11 text-muted mb-0">#musicnft321</p>
                                                        </div>
                                                        <span class="ms-auto fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>67 Likes</span>
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
                                                            5.000ETH
                                                        </h6>
                                                        <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="position-relative overflow-hidden rounded">
                                                        <img src="{{asset('build/assets/images/nft-images/17.png')}}" class="card-img mb-3" alt="...">
                                                    </div>
                                                    <div class="d-flex align-items-start gap-2 mb-2 pb-1 flex-wrap">
                                                        <div class="text-truncate">
                                                            <p class="fs-16 mb-0 fw-semibold text-truncate">Virtual Real</p>
                                                        </div>
                                                        <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time ms-auto px-2 rounded fs-15 flex-shrink-0">01hrs : 22m : 09s</p>
                                                    </div>
                                                    <div class="p-2 rounded bg-light d-flex mb-2 align-items-center flex-wrap gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded avatar-md p-1 bg-success bg-opacity-50 border">
                                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fw-medium">VRCreators <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                            <p class="fs-11 text-muted mb-0">#VRexperience567</p>
                                                        </div>
                                                        <span class="ms-auto fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>85 Likes</span>
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
                                                            6.800ETH
                                                        </h6>
                                                        <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="position-relative overflow-hidden rounded">
                                                        <img src="{{asset('build/assets/images/nft-images/15.png')}}" class="card-img mb-3" alt="...">
                                                    </div>
                                                    <div class="d-flex align-items-start gap-2 mb-2 pb-1 flex-wrap">
                                                        <div class="text-truncate">
                                                            <p class="fs-16 mb-0 fw-semibold overflow-hidden text-truncate ">Digital Fashion</p>
                                                        </div>
                                                        <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time ms-auto px-2 rounded fs-15 flex-shrink-0">04hrs : 05m : 50s</p>
                                                    </div>
                                                    <div class="p-2 rounded bg-light d-flex mb-2 align-items-center flex-wrap gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded avatar-md p-1 bg-success bg-opacity-50 border">
                                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fw-medium">FashionNFTs <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                            <p class="fs-11 text-muted mb-0">#fashionnft123</p>
                                                        </div>
                                                        <span class="ms-auto fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>53 Likes</span>
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
                                                            7.500ETH
                                                        </h6>
                                                        <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination justify-content-end mb-4">
                                                <li class="page-item disabled">
                                                    <a class="page-link">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0);">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0" id="nft-art" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="position-relative overflow-hidden rounded">
                                                        <img src="{{asset('build/assets/images/nft-images/32.png')}}" class="card-img mb-3" alt="...">
                                                    </div>
                                                    <div class="d-flex align-items-start gap-2 mb-2 pb-1 flex-wrap">
                                                        <div class="text-truncate">
                                                            <p class="fs-16 mb-0 fw-semibold text-truncate">Abstract Art Series</p>
                                                        </div>
                                                        <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time ms-auto px-2 rounded fs-15 flex-shrink-0">03hrs : 15m : 20s</p>
                                                    </div>
                                                    <div class="p-2 rounded bg-light d-flex mb-2 align-items-center flex-wrap gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded avatar-md p-1 bg-success bg-opacity-50 border">
                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fw-medium">ArtCollective <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                            <p class="fs-11 text-muted mb-0">#abstractart2023</p>
                                                        </div>
                                                        <span class="ms-auto fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>112 Likes</span>
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
                                                            4.500ETH
                                                        </h6>
                                                        <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="position-relative overflow-hidden rounded">
                                                        <img src="{{asset('build/assets/images/nft-images/9.png')}}" class="card-img mb-3" alt="...">
                                                    </div>
                                                    <div class="d-flex align-items-start gap-2 mb-2 pb-1 flex-wrap">
                                                        <div class="text-truncate">
                                                            <p class="fs-16 mb-0 fw-semibold text-truncate">Cyberpunk Cityscape</p>
                                                        </div>
                                                        <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time ms-auto px-2 rounded fs-15 flex-shrink-0">04hrs : 05m : 50s</p>
                                                    </div>
                                                    <div class="p-2 rounded bg-light d-flex mb-2 align-items-center flex-wrap gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded avatar-md p-1 bg-success bg-opacity-50 border">
                                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fw-medium">FutureArtistry <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                            <p class="fs-11 text-muted mb-0">#cyberpunk2023</p>
                                                        </div>
                                                        <span class="ms-auto fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>85 Likes</span>
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
                                                            8.250ETH
                                                        </h6>
                                                        <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="position-relative overflow-hidden rounded">
                                                        <img src="{{asset('build/assets/images/nft-images/26.png')}}" class="card-img mb-3" alt="...">
                                                    </div>
                                                    <div class="d-flex align-items-start gap-2 mb-2 pb-1 flex-wrap">
                                                        <div class="text-truncate">
                                                            <p class="fs-16 mb-0 fw-semibold text-truncate">Mystic Forest Encounter</p>
                                                        </div>
                                                        <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time ms-auto px-2 rounded fs-15 flex-shrink-0">02hrs : 50m : 15s</p>
                                                    </div>
                                                    <div class="p-2 rounded bg-light d-flex mb-2 align-items-center flex-wrap gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded avatar-md p-1 bg-success bg-opacity-50 border">
                                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fw-medium">NatureArtistry <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                            <p class="fs-11 text-muted mb-0">#mysticforest2023</p>
                                                        </div>
                                                        <span class="ms-auto fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>63 Likes</span>
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
                                                            7.900ETH
                                                        </h6>
                                                        <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0" id="nft-gaming" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="position-relative overflow-hidden rounded">
                                                        <img src="{{asset('build/assets/images/nft-images/23.png')}}" class="card-img mb-3" alt="...">
                                                    </div>
                                                    <div class="d-flex align-items-start gap-2 mb-2 pb-1 flex-wrap">
                                                        <div  class="text-truncate">
                                                            <p class="fs-16 mb-0 fw-semibold text-truncate">Galactic Dreamscape</p>
                                                        </div>
                                                        <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time ms-auto px-2 rounded fs-15 flex-shrink-0">05hrs : 23m : 45s</p>
                                                    </div>
                                                    <div class="p-2 rounded bg-light d-flex mb-2 align-items-center flex-wrap gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded avatar-md p-1 bg-success bg-opacity-50 border">
                                                                <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fw-medium">CosmicArtist <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                            <p class="fs-11 text-muted mb-0">#galacticdream</p>
                                                        </div>
                                                        <span class="ms-auto fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>85 Likes</span>
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
                                                            10.250ETH
                                                        </h6>
                                                        <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="position-relative overflow-hidden rounded">
                                                        <img src="{{asset('build/assets/images/nft-images/14.png')}}" class="card-img mb-3" alt="...">
                                                    </div>
                                                    <div class="d-flex align-items-start gap-2 mb-2 pb-1 flex-wrap">
                                                        <div class="text-truncate">
                                                            <p class="fs-16 mb-0 fw-semibold text-truncate">Cyberpunk Cityscape</p>
                                                        </div>
                                                        <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time ms-auto px-2 rounded fs-15 flex-shrink-0">04hrs : 10m : 30s</p>
                                                    </div>
                                                    <div class="p-2 rounded bg-light d-flex mb-2 align-items-center flex-wrap gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded avatar-md p-1 bg-success bg-opacity-50 border">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fw-medium">TechArtCreator <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                            <p class="fs-11 text-muted mb-0">#cyberpunk2023</p>
                                                        </div>
                                                        <span class="ms-auto fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>42 Likes</span>
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
                                                            8.500ETH
                                                        </h6>
                                                        <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0" id="nft-domain" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="position-relative overflow-hidden rounded">
                                                        <img src="{{asset('build/assets/images/nft-images/29.png')}}" class="card-img mb-3" alt="...">
                                                    </div>
                                                    <div class="d-flex align-items-start gap-2 mb-2 pb-1 flex-wrap">
                                                        <div class="text-truncate">
                                                            <p class="fs-16 mb-0 fw-semibold text-truncate">Fantasy Forest</p>
                                                        </div>
                                                        <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time ms-auto px-2 rounded fs-15 flex-shrink-0">03hrs : 45m : 10s</p>
                                                    </div>
                                                    <div class="p-2 rounded bg-light d-flex mb-2 align-items-center flex-wrap gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded avatar-md p-1 bg-success bg-opacity-50 border">
                                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fw-medium">NatureLover <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                            <p class="fs-11 text-muted mb-0">#fantasyforest</p>
                                                        </div>
                                                        <span class="ms-auto fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>67 Likes</span>
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
                                                            6.750ETH
                                                        </h6>
                                                        <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0" id="nft-music" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="position-relative overflow-hidden rounded">
                                                        <img src="{{asset('build/assets/images/nft-images/19.png')}}" class="card-img mb-3" alt="...">
                                                    </div>
                                                    <div class="d-flex align-items-start gap-2 mb-2 pb-1 flex-wrap">
                                                        <div class="text-truncate">
                                                            <p class="fs-16 mb-0 fw-semibold text-truncate">Cosmic Dreams</p>
                                                        </div>
                                                        <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time ms-auto px-2 rounded fs-15 flex-shrink-0">04hrs : 10m : 30s</p>
                                                    </div>
                                                    <div class="p-2 rounded bg-light d-flex mb-2 align-items-center flex-wrap gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded avatar-md p-1 bg-success bg-opacity-50 border">
                                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fw-medium">ArtisticSoul <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                            <p class="fs-11 text-muted mb-0">#cosmicdreams</p>
                                                        </div>
                                                        <span class="ms-auto fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>42 Likes</span>
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
                                                            8.500ETH
                                                        </h6>
                                                        <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0" id="nft-realestate" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="position-relative overflow-hidden rounded">
                                                        <img src="{{asset('build/assets/images/nft-images/17.png')}}" class="card-img mb-3" alt="...">
                                                    </div>
                                                    <div class="d-flex align-items-start gap-2 mb-2 pb-1 flex-wrap">
                                                        <div class="text-truncate">
                                                            <p class="fs-16 mb-0 fw-semibold text-truncate">Mystical Forest</p>
                                                        </div>
                                                        <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time ms-auto px-2 rounded fs-15 flex-shrink-0">02hrs : 34m : 12s</p>
                                                    </div>
                                                    <div class="p-2 rounded bg-light d-flex mb-2 align-items-center flex-wrap gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded avatar-md p-1 bg-success bg-opacity-50 border">
                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fw-medium">NatureArt <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                            <p class="fs-11 text-muted mb-0">#mysticalforest</p>
                                                        </div>
                                                        <span class="ms-auto fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>32 Likes</span>
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
                                                            12.800ETH
                                                        </h6>
                                                        <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0" id="nft-sports" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="position-relative overflow-hidden rounded">
                                                        <img src="{{asset('build/assets/images/nft-images/18.png')}}" class="card-img mb-3" alt="...">
                                                    </div>
                                                    <div class="d-flex align-items-start gap-2 mb-2 pb-1 flex-wrap">
                                                        <div class="text-truncate">
                                                            <p class="fs-16 mb-0 fw-semibold text-truncate">Cosmic Dreamscape</p>
                                                        </div>
                                                        <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time ms-auto px-2 rounded fs-15 flex-shrink-0">01hr : 20m : 45s</p>
                                                    </div>
                                                    <div class="p-2 rounded bg-light d-flex mb-2 align-items-center flex-wrap gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded avatar-md p-1 bg-success bg-opacity-50 border">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fw-medium">GalacticArt <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                            <p class="fs-11 text-muted mb-0">#cosmicdreamscape</p>
                                                        </div>
                                                        <span class="ms-auto fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>45 Likes</span>
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
                                                            9.750ETH
                                                        </h6>
                                                        <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0" id="nft-fashion" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="position-relative overflow-hidden rounded">
                                                        <img src="{{asset('build/assets/images/nft-images/5.png')}}" class="card-img mb-3" alt="...">
                                                    </div>
                                                    <div class="d-flex align-items-start gap-2 mb-2 pb-1 flex-wrap">
                                                        <div class="text-truncate">
                                                            <p class="fs-16 mb-0 fw-semibold text-truncate">Mystical Forest</p>
                                                        </div>
                                                        <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time ms-auto px-2 rounded fs-15 flex-shrink-0">02hrs : 15m : 30s</p>
                                                    </div>
                                                    <div class="p-2 rounded bg-light d-flex mb-2 align-items-center flex-wrap gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded avatar-md p-1 bg-success bg-opacity-50 border">
                                                                <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fw-medium">NatureArt <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                            <p class="fs-11 text-muted mb-0">#mysticalforest</p>
                                                        </div>
                                                        <span class="ms-auto fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>30 Likes</span>
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
                                                            7.200ETH
                                                        </h6>
                                                        <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0" id="nft-avatars" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="position-relative overflow-hidden rounded">
                                                        <img src="{{asset('build/assets/images/nft-images/7.png')}}" class="card-img mb-3" alt="...">
                                                    </div>
                                                    <div class="d-flex align-items-start gap-2 mb-2 pb-1 flex-wrap">
                                                        <div class="text-truncate">
                                                            <p class="fs-16 mb-0 fw-semibold text-truncate">Cosmic Dreams</p>
                                                        </div>
                                                        <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time ms-auto px-2 rounded fs-15 flex-shrink-0">04hrs : 05m : 20s</p>
                                                    </div>
                                                    <div class="p-2 rounded bg-light d-flex mb-2 align-items-center flex-wrap gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded avatar-md p-1 bg-success bg-opacity-50 border">
                                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fw-medium">Artiverse <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                            <p class="fs-11 text-muted mb-0">#cosmicdreams</p>
                                                        </div>
                                                        <span class="ms-auto fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>45 Likes</span>
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
                                                            10.500ETH
                                                        </h6>
                                                        <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane p-0 border-0" id="nft-memes" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="position-relative overflow-hidden rounded">
                                                        <img src="{{asset('build/assets/images/nft-images/22.png')}}" class="card-img mb-3" alt="...">
                                                    </div>
                                                    <div class="d-flex align-items-start gap-2 mb-2 pb-1 flex-wrap">
                                                        <div>
                                                            <p class="fs-16 mb-0 fw-semibold text-truncate">Cosmic Dreamscape</p>
                                                        </div>
                                                        <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time ms-auto px-2 rounded fs-15 flex-shrink-0">01hrs : 15m : 30s</p>
                                                    </div>
                                                    <div class="p-2 rounded bg-light d-flex mb-2 align-items-center flex-wrap gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded avatar-md p-1 bg-success bg-opacity-50 border">
                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fw-medium">ArtisticVibes <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
                                                            <p class="fs-11 text-muted mb-0">#cosmicart2024</p>
                                                        </div>
                                                        <span class="ms-auto fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>85 Likes</span>
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
                                                            5.200ETH
                                                        </h6>
                                                        <a href="javascript:void(0);" class="btn btn-primary btn-w-lg mb-md-0 mb-4">Place a Bid</a>
                                                    </div>
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


@endsection