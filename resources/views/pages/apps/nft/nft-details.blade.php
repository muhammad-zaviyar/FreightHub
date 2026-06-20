@extends('layouts.master')

@section('styles')

        <!-- Swiper CSS -->  
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">
      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">NFT Details</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">NFT Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="card custom-card overflow-hidden">
                        <div class="card-body">
                            <div class="row mx-0 justify-content-center gy-3 gy-xxl-0">
                                <div class="col-xxl-4 col-xl-8 p-4 bg-light rounded">
                                    <div class="swiper swiper-preview-details bg-light product-details-page">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide" id="img-container">
                                                <img class="img-fluid" src="{{asset('build/assets/images/nft-images/3.png')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide image-container">
                                                <img class="img-fluid" src="{{asset('build/assets/images/nft-images/4.png')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide image-container">
                                                <img class="img-fluid" src="{{asset('build/assets/images/nft-images/5.png')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide image-container">
                                                <img class="img-fluid" src="{{asset('build/assets/images/nft-images/6.png')}}" alt="img">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                    <div class="swiper swiper-view-details mt-2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img class="img-fluid" src="{{asset('build/assets/images/nft-images/3.png')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide image-container">
                                                <img class="img-fluid" src="{{asset('build/assets/images/nft-images/4.png')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide image-container">
                                                <img class="img-fluid" src="{{asset('build/assets/images/nft-images/5.png')}}" alt="img">
                                            </div>
                                            <div class="swiper-slide image-container">
                                                <img class="img-fluid" src="{{asset('build/assets/images/nft-images/6.png')}}" alt="img">
                                            </div>    
                                        </div>
                                    </div>
                                    <div class="d-flex gap-1 mt-4">
                                        <button class="btn btn-primary mb-0 btn-wave flex-fill me-1">Place a bid</button>
                                        <button class="btn btn-success mb-0 btn-wave flex-fill">Buy Now</button>
                                    </div>
                                </div>
                                <div class="col-xxl-8 col-xl-12">
                                    <div class="card custom-card shadow-none border mb-0 overflow-hidden">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-12 mt-xxl-0 mt-3">
                                                    <div class="d-flex gap-2 align-items-center justify-content-between mb-3 flex-wrap">
                                                        <div>
                                                            <h4 class="fw-medium mb-1">Ethereal Landscapes - NFT Digital Art</h4>
                                                            <span class="mb-0 fs-14 fw-medium text-info bg-info-transparent px-1 rounded me-2">Artistic NFT </span>
                                                                <i class="bi bi-patch-check-fill text-success align-middle lh-1 fs-15" data-bs-toggle="tooltip" title="Verified"></i>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <div class="d-flex gap-2 align-items-center flex-wrap">
                                                                <div class="fw-medium">Sales ends in:</div>
                                                                <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time ms-auto px-2 rounded fs-15 flex-shrink-0">02hrs : 45m : 12s</p>
                                                            </div>
                                                        </div>
                                                    </div>                                                
                                                    <div class="mb-3">
                                                        <p class="fs-15 fw-medium mb-1">Description :</p>
                                                        <p class="text-muted mb-0">
                                                            "Ethereal Landscapes” is a captivating NFT artwork crafted by a celebrated digital artist. This distinctive piece transports viewers into a breathtaking realm where soft hues intertwine with abstract elements. The artwork serves as a digital expression of the artist's vision, fusing surrealism with a hint of futuristic design.
                                                        </p>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-xxl-5 gap-3 mb-3 justify-content-between flex-wrap">
                                                        <div>
                                                            <div class="mb-2">Price<i class="ri-price-tag-line text-pink lh-1 mx-1"></i> :</div>
                                                            <h5 class="fw-semibold mb-0 bid-amt align-middle mb-0">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 40 65">
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
                                                                15.325000ETH
                                                            </h5>
                                                        </div>
                                                        <div>
                                                            <div class="fw-normal mb-2">Collection<i class="ri-nft-line text-pink lh-1 fs-14 mx-1"></i> :</div>
                                                            <div class="d-flex align-items-center fw-medium gap-1">
                                                                <span class="avatar avatar-xs avatar-rounded lh-1"><img src="{{asset('build/assets/images/nft-images/2.png')}}" alt=""></span>
                                                                Landscapes NFT 
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <p class="mb-2">Published<i class="ri-article-line text-pink lh-1 fs-14 mx-1"></i> :</p>
                                                            <div><i class="ri-calendar-event-line text-primary me-1"></i>14, Sep 2024 - 05:22AM</div>
                                                        </div>
                                                        <div class="me-3">
                                                            <div class="fw-normal mb-2">Owned By<i class="ri-vip-crown-2-line text-pink lh-1 fs-14 mx-1"></i> :</div>
                                                            <div class="d-flex align-items-center fw-medium gap-1">
                                                                <span class="avatar avatar-xs avatar-rounded lh-1"><img src="{{asset('build/assets/images/faces/9.jpg')}}" alt=""></span>
                                                                Christopher 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 gy-3 gy-xl-0">
                                                        <div class="col-xl-6">
                                                            <h6 class="mb-3">Details: </h6>
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered text-nowrap">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row" class="fw-medium">
                                                                                Artist Name
                                                                            </th>
                                                                            <td>Evelyn Carter</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row" class="fw-medium">
                                                                                Royalty
                                                                            </th>
                                                                            <td>
                                                                                12% royalty paid to the artist on secondary sales
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row" class="fw-medium">
                                                                                Total Bids
                                                                            </th>
                                                                            <td>
                                                                                45
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row" class="fw-medium">
                                                                                Current Owner
                                                                            </th>
                                                                            <td>
                                                                                Adrian Blake
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row" class="fw-medium">
                                                                                NFT Type
                                                                            </th>
                                                                            <td>
                                                                                Ethereal Digital Artwork
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row" class="fw-medium">
                                                                                Dimensions
                                                                            </th>
                                                                            <td>
                                                                                4000 x 3000 pixels
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row" class="fw-medium">
                                                                                File Size
                                                                            </th>
                                                                            <td>
                                                                                25 MB
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>                                                            
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <h6 class="mb-3">Features: </h6>
                                                            <ul class="mb-0 list-unstyled">
                                                                <li class="mb-3">
                                                                    <span class="fw-medium">NFT Title:</span> "Ethereal Horizons"
                                                                </li>
                                                                <li class="mb-3">
                                                                    <span class="fw-medium">Edition:</span> Limited edition of 50
                                                                </li>
                                                                <li class="mb-3">
                                                                    <span class="fw-medium">Tags:</span> #ethereallandscape, #fantasyart, #digitalmasterpiece
                                                                </li>
                                                                <li class="mb-3">
                                                                    <span class="fw-medium">Creation Date:</span> September 12, 2024
                                                                </li>
                                                                <li class="mb-3">
                                                                    <span class="fw-medium">Average Rating:</span> 4.9/5
                                                                </li>
                                                                <li class="mb-3">
                                                                    <span class="fw-medium">Dimensions:</span> 4000x3000 pixels
                                                                </li>
                                                                <li class="mb-1">
                                                                    <span class="fw-medium">Exhibition History:</span> NFT Art Showcase 2024 - Digital Dreams Gallery, London
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="p-2 mt-2 rounded bg-light d-flex align-items-center flex-wrap gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded avatar-md p-1 bg-success bg-opacity-50 border">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0  fw-medium">Manistics NFT <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i> </p>
                                                            <p class="fs-11 text-muted mb-0">#manistics454</p>
                                                        </div>
                                                        <div class="ms-auto d-flex gap-3 align-items-center flex-wrap">
                                                            <span class="fw-medium fs-12"><i class="ri-eye-fill me-1 align-middle d-inline-block text-primary"></i>16 Views</span>
                                                            <span class="fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>24 Likes</span>
                                                            <span class="fw-medium fs-12"><i class="ri-share-fill me-1 align-middle d-inline-block text-success"></i> Share</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!--Start::row-3 -->
                    <div class="row">
                        <div class="col-xxl-4">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Reviews & Ratings
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm text-muted ms-auto">
                                        View All
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="d-flex align-items-center mb-3 flex-wrap gap-2">
                                                <div class="me-2 lh-1">
                                                    <i class="ri-star-fill fs-14 text-warning"></i>
                                                    <i class="ri-star-fill fs-14 text-warning"></i>
                                                    <i class="ri-star-fill fs-14 text-warning"></i>
                                                    <i class="ri-star-fill fs-14 text-warning"></i>
                                                    <i class="ri-star-half-fill fs-14 text-warning"></i>
                                                </div>
                                                <div class="lh-1">
                                                    <p class="mb-0 fw-medium">4.7 out of 5<span class="mb-0 text-muted fs-11 fw-normal"> Based on (1.5k) ratings</span></p>
                                                </div>
                                            </div>
                                            <div class="swiper crypto-swiper swiper-basic">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="border rounded p-3">
                                                            <div class="d-sm-flex d-block align-items-top mb-3">
                                                                <div class="d-flex flex-fill">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="lh-1 me-2">
                                                                        <p class="mb-1 fw-medium fs-14">Alexander <span class="text-success"></span></p>
                                                                        <div class="mb-1">
                                                                            <span class="fs-11 text-muted">
                                                                                12 Aug, 2024 - 09:30AM
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-1 ms-auto text-end">
                                                                    <i class="ri-star-fill fs-15 align-middle text-warning align-middle"></i>
                                                                    <span class="align-middle">4.5</span>
                                                                </div>
                                                            </div>
                                                            <div class="ps-sm-4 ps-0 mb-3">
                                                                <div class="tags mb-1">
                                                                    <span class="badge bg-info">Art</span>
                                                                    <span class="badge bg-success text-fixed-white">Creative</span>
                                                                </div>
                                                                <p class="fw-medium mb-1 ps-2">Ethereal Landscapes &#127757;</p>
                                                                <p class="mb-0 fs-12 text-muted ps-2">Ethereal Landscapes is a mesmerizing NFT that transports you to serene vistas filled with breathtaking colors and tranquil elements.</p>
                                                            </div>                                            
                                                            <div class="product-images ps-sm-4 ps-0">
                                                                <div class="row">
                                                                    <div class="col-xl-6">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="avatar avatar-md">
                                                                                <img src="{{asset('build/assets/images/nft-images/21.png')}}" alt="">
                                                                            </a>
                                                                            <a href="javascript:void(0);" class="avatar avatar-md">
                                                                                <img src="{{asset('build/assets/images/nft-images/22.png')}}" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6 d-flex align-items-end justify-content-sm-end mt-sm-0 mt-2">
                                                                        <button class="btn btn-sm btn-primary me-2">Report abuse</button>
                                                                        <button class="btn btn-sm btn-icon btn-success-light me-2">
                                                                            <i class="ri-thumb-up-line"></i>
                                                                        </button>
                                                                        <button class="btn btn-sm btn-icon btn-danger-light">
                                                                            <i class="ri-thumb-down-line"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="border rounded p-3">
                                                            <div class="d-sm-flex d-block align-items-top mb-3">
                                                                <div class="d-flex flex-fill">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="lh-1 me-2">
                                                                        <p class="mb-1 fw-medium fs-14">Sophia Clark <span class="text-success"></span></p>
                                                                        <div class="mb-1">
                                                                            <span class="fs-11 text-muted">
                                                                                5 Sep, 2024 - 02:15PM
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-1 ms-auto text-end">
                                                                    <i class="ri-star-fill fs-15 align-middle text-warning align-middle"></i>
                                                                    <span class="align-middle">4.0</span>
                                                                </div>
                                                            </div>
                                                            <div class="ps-sm-4 ps-0 mb-3">
                                                                <div class="tags mb-1">
                                                                    <span class="badge bg-info">Inspiration</span>
                                                                    <span class="badge bg-success">Nature</span>
                                                                </div>
                                                                <p class="fw-medium mb-1 ps-2">Celestial Harmony</p>
                                                                <p class="mb-0 fs-12 text-muted ps-2">Celestial Harmony invites you into a world where the sky meets the earth in perfect balance and beauty.</p>
                                                            </div>                                            
                                                            <div class="product-images ps-sm-4 ps-0">
                                                                <div class="row">
                                                                    <div class="col-xl-6">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="avatar avatar-md">
                                                                                <img src="{{asset('build/assets/images/nft-images/23.png')}}" alt="">
                                                                            </a>
                                                                            <a href="javascript:void(0);" class="avatar avatar-md">
                                                                                <img src="{{asset('build/assets/images/nft-images/24.png')}}" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6 d-flex align-items-end justify-content-sm-end mt-sm-0 mt-2">
                                                                        <button class="btn btn-sm btn-primary me-2">Report abuse</button>
                                                                        <button class="btn btn-sm btn-icon btn-success-light me-2">
                                                                            <i class="ri-thumb-up-line"></i>
                                                                        </button>
                                                                        <button class="btn btn-sm btn-icon btn-danger-light">
                                                                            <i class="ri-thumb-down-line"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>                  
                                                    </div>                                                                                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-8 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Bids :
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm ms-auto">
                                        View All
                                    </a>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="d-flex align-items-top">
                                                                <div class="avatar me-2">
                                                                    <img src="{{asset('build/assets/images/nft-images/16.png')}}" alt="">
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-1 fs-14 fw-medium similar-product-name text-truncate">Digital Dreamscapes</p>
                                                                    <span class="fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>24 Likes</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="d-flex gap-1 align-items-center">
                                                            <span class="avatar avatar-xs avatar-rounded lh-1">
                                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt=""></span>By Ananth
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="ri-calendar-event-line text-primary me-1"></i>24, Sep 2024 - 12:45PM
                                                    </td>
                                                    <td>
                                                        <div class="justify-content-center d-flex gap-2">
                                                            <p class="mb-0 fs-19 fw-medium">
                                                                <span class="avatar avatar-xs avatar-rounded"><img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>2.299 ETH
                                                            </p>
                                                            <p class="mb-0 text-muted">
                                                                (<s><span class="avatar avatar-xs avatar-rounded p-1"><img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>3.299 ETH</s>)
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="d-flex align-items-top">
                                                                <div class="avatar me-2">
                                                                    <img src="{{asset('build/assets/images/nft-images/17.png')}}" alt="">
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-1 fs-14 fw-medium similar-product-name text-truncate">Cosmic Reflections</p>
                                                                    <span class="fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>45 Likes</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="d-flex gap-1 align-items-center">
                                                            <span class="avatar avatar-xs avatar-rounded lh-1">
                                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt=""></span>By Maya
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="ri-calendar-event-line text-primary me-1"></i>15, Aug 2024 - 02:30PM
                                                    </td>
                                                    <td>
                                                        <div class="justify-content-center d-flex gap-2">
                                                            <p class="mb-0 fs-19 fw-medium">
                                                                <span class="avatar avatar-xs avatar-rounded"><img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>1.875 ETH
                                                            </p>
                                                            <p class="mb-0 text-muted">
                                                                (<s><span class="avatar avatar-xs avatar-rounded p-1"><img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>2.500 ETH</s>)
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="d-flex align-items-top">
                                                                <div class="avatar me-2">
                                                                    <img src="{{asset('build/assets/images/nft-images/18.png')}}" alt="">
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-1 fs-14 fw-medium similar-product-name text-truncate">Future Visions</p>
                                                                    <span class="fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>30 Likes</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="d-flex gap-1 align-items-center">
                                                            <span class="avatar avatar-xs avatar-rounded lh-1">
                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt=""></span>By Leo
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="ri-calendar-event-line text-primary me-1"></i>10, Sep 2024 - 03:15PM
                                                    </td>
                                                    <td>
                                                        <div class="justify-content-center d-flex gap-2">
                                                            <p class="mb-0 fs-19 fw-medium">
                                                                <span class="avatar avatar-xs avatar-rounded"><img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>3.150 ETH
                                                            </p>
                                                            <p class="mb-0 text-muted">
                                                                (<s><span class="avatar avatar-xs avatar-rounded p-1"><img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>4.000 ETH</s>)
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="d-flex align-items-top">
                                                                <div class="avatar me-2">
                                                                    <img src="{{asset('build/assets/images/nft-images/19.png')}}" alt="">
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-1 fs-14 fw-medium similar-product-name text-truncate">Mystical Forest</p>
                                                                    <span class="fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>60 Likes</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="d-flex gap-1 align-items-center">
                                                            <span class="avatar avatar-xs avatar-rounded lh-1">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt=""></span>By Sarah
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="ri-calendar-event-line text-primary me-1"></i>05, Oct 2024 - 01:00PM
                                                    </td>
                                                    <td>
                                                        <div class="justify-content-center d-flex gap-2">
                                                            <p class="mb-0 fs-19 fw-medium">
                                                                <span class="avatar avatar-xs avatar-rounded"><img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>4.800 ETH
                                                            </p>
                                                            <p class="mb-0 text-muted">
                                                                (<s><span class="avatar avatar-xs avatar-rounded p-1"><img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>5.500 ETH</s>)
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-3 -->

                    <!--Start::row-2 -->
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="d-flex gap-1 align-items-center justify-content-between mb-3">
                                <h6 class="fw-medium mb-0">NFT Collection:</h6>
                                <a href="javascript:void(0);" class="btn btn-primary btn-sm ms-auto">
                                    Explore More
                                </a>
                            </div>
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
                                                    <p class="mb-0 fw-medium">CryptoArt <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
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
                                                <a href="javascript:void(0);" class="btn btn-primary btn-w-lg">Place a Bid</a>
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
                                                <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time ms-auto px-2 rounded fs-15 flex-shrink-0"> 03hrs : 12m : 45s </p>
                                            </div>
                                            <div class="p-2 rounded bg-light d-flex mb-2 align-items-center flex-wrap gap-2">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded avatar-md p-1 bg-success bg-opacity-50 border">
                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
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
                                                <a href="javascript:void(0);" class="btn btn-primary btn-w-lg">Place a Bid</a>
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
                                                    <p class="mb-0 fw-medium">FantasyArt <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
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
                                                <a href="javascript:void(0);" class="btn btn-primary btn-w-lg">Place a Bid</a>
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
                                                    <p class="fs-16 mb-0 fw-semibold text-truncate">Gaming Collectible</p>
                                                </div>
                                                <p class="mb-0 border border-success border-opacity-75 bg-success-transparent fw-medium nft-auction-time ms-auto px-2 rounded fs-15 flex-shrink-0">04hrs : 10m : 30s</p>
                                            </div>
                                            <div class="p-2 rounded bg-light d-flex mb-2 align-items-center flex-wrap gap-2">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-rounded avatar-md p-1 bg-success bg-opacity-50 border">
                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-medium">GamingNFT <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i></p>
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
                                                <a href="javascript:void(0);" class="btn btn-primary btn-w-lg">Place a Bid</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-2 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Swiper JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- Internal NFT-Details JS -->
        @vite('resources/assets/js/nft-details.js')

    
@endsection