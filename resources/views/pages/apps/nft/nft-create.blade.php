@extends('layouts.master')

@section('styles')

        <!-- Filepond CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">
      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">
                    
                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Create NFT</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Create NFT</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xxl-9 col-xl-8">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Create NFT</div>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label for="input-placeholder" class="form-label">NFT Title: </label>
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="input-placeholder" placeholder="eg:Abstract Digital Art">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label for="nft-description" class="form-label">NFT Description: </label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="nft-description" rows="3" placeholder="Enter Description"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label class="form-label mb-0 mt-2">Artwork Upload :</label> 
                                        </div>
                                        <div class="col-md-10">
                                            <div class="create-nft-item bg-light py-3 rounded">
                                                <input type="file" class="single-fileupload" name="filepond" accept="image/png, image/jpeg, image/gif">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2">
                                            <label for="nft-collection" class="form-label">Collection:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-select" id="nft-collection" data-trigger>
                                                <option selected>Select a collection</option>
                                                <option value="1">Collection 1</option>
                                                <option value="2">Collection 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label for="nft-royality" class="form-label">Royalties (%):</label>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control" data-trigger name="nft-royality" id="nft-royality">
                                                <option value="">Choose Royalities</option>
                                                <option value="Choice 1">Flat Royalty</option>
                                                <option value="Choice 2">Graduated Royalty</option>
                                                <option value="Choice 3">Tiered Royalty</option>
                                                <option value="Choice 3">Time-Limited Royalty</option>
                                                <option value="Choice 3">Customized Royalty</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2">
                                            <label for="nft-tags" class="form-label">Tags:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <input class="form-control" id="nft-tags" type="text" value="Digital Art, Blockchain, Crypto Collectibles, Unique Artwork, NFT Marketplace" placeholder="Enter project tags here">

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2"> 
                                            <label for="nft-properties" class="form-label">Properties:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="nft-properties" rows="3" placeholder="Define your NFT properties..."></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="row mb-3">
                                                <div class="col-xl-3 col-md-2">
                                                    <label for="blockchain" class="form-label">Blockchain:</label>
                                                </div>
                                                <div class="col-xl-9 col-md-10">
                                                    <select class="form-control" data-trigger id="blockchain">
                                                        <option selected>Select a blockchain</option>
                                                        <option value="ethereum">Ethereum</option>
                                                        <option value="polygon">Polygon</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="row mb-3">
                                                <div class="col-xl-3 col-md-2">
                                                    <label for="editions" class="form-label">No. of Editions:</label>
                                                </div>
                                                <div class="col-xl-9 col-md-10">
                                                    <input type="number" class="form-control" id="editions" placeholder="e.g., 1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="row mb-3">
                                                <div class="col-xl-3 col-md-2"> 
                                                    <label for="nft-link" class="form-label">External Link: </label>
                                                </div>
                                                <div class="col-xl-9 col-md-10">
                                                    <input type="text" class="form-control" id="nft-link" placeholder="External Link Here">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="row mb-3">
                                                <div class="col-xl-3 col-md-2"> 
                                                    <label for="nft-creator-name" class="form-label">Creator Name: </label>
                                                </div>
                                                <div class="col-xl-9 col-md-10">
                                                    <input type="text" class="form-control" id="nft-creator-name" placeholder="Enter Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="row mb-3">
                                                <div class="col-xl-3 col-md-2"> 
                                                    <label for="nft-creator-name" class="form-label">NFT Price: </label>
                                                </div>
                                                <div class="col-xl-9 col-md-10">
                                                    <input type="text" class="form-control" id="nft-price" placeholder="Enter Price">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="row mb-3">
                                                <div class="col-xl-3 col-md-2"> 
                                                    <label for="nft-creator-name" class="form-label">NFT Size: </label>
                                                </div>
                                                <div class="col-xl-9 col-md-10">
                                                    <input type="text" class="form-control" id="nft-size" placeholder="Enter Size">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-wave waves-effect waves-light">Create NFT</a>
                                    <a href="javascript:void(0);" class="btn btn-danger btn-wave waves-effect waves-light">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Preview NFT
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="position-relative overflow-hidden rounded mx-auto text-center">
                                        <img src="{{asset('build/assets/images/nft-images/3.png')}}" class="w-auto card-img mb-3" alt="...">
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
                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <p class="mb-0  fw-medium">Manistics NFT <i class="bi bi-patch-check-fill text-secondary align-middle lh-1"></i> </p>
                                            <p class="fs-11 text-muted mb-0">#manistics454</p>
                                        </div>
                                        <span class="ms-auto fw-medium fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-danger"></i>24 Likes</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center pt-1 gap-1 flex-wrap">
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
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        My Collections :
                                    </div>
                                    <a href="javascript:void(0);" class="text-primary text-decoration-underline ms-auto">
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
                                                                <div class="avatar avatar-md me-2">
                                                                    <img src="{{asset('build/assets/images/nft-images/16.png')}}" alt="">
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0 fs-14 fw-medium similar-product-name text-truncate">Digital Dreamscapes</p>
                                                                    <span class="fw-medium text-muted fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-success"></i>24 Likes</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="ri-calendar-event-line text-primary me-1"></i>24, Sep 2024 - 12:45PM
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="d-flex align-items-top">
                                                                <div class="avatar avatar-md me-2">
                                                                    <img src="{{asset('build/assets/images/nft-images/17.png')}}" alt="">
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0 fs-14 fw-medium similar-product-name text-truncate">Cosmic Reflections</p>
                                                                    <span class="fw-medium text-muted fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-success"></i>45 Likes</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="ri-calendar-event-line text-primary me-1"></i>15, Aug 2024 - 02:30PM
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="d-flex align-items-top">
                                                                <div class="avatar avatar-md me-2">
                                                                    <img src="{{asset('build/assets/images/nft-images/18.png')}}" alt="">
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0 fs-14 fw-medium similar-product-name text-truncate">Future Visions</p>
                                                                    <span class="fw-medium text-muted fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-success"></i>30 Likes</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="ri-calendar-event-line text-primary me-1"></i>10, Sep 2024 - 03:15PM
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="d-flex align-items-top">
                                                                <div class="avatar avatar-md me-2">
                                                                    <img src="{{asset('build/assets/images/nft-images/19.png')}}" alt="">
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0 fs-14 fw-medium similar-product-name text-truncate">Mystical Forest</p>
                                                                    <span class="fw-medium text-muted fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-success"></i>60 Likes</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="ri-calendar-event-line text-primary me-1"></i>05, Oct 2024 - 01:00PM
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <div class="d-flex align-items-top">
                                                                <div class="avatar avatar-md me-2">
                                                                    <img src="{{asset('build/assets/images/nft-images/17.png')}}" alt="">
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0 fs-14 fw-medium similar-product-name text-truncate">Celestial Horizons</p>
                                                                    <span class="fw-medium text-muted fs-12"><i class="ri-thumb-up-fill me-1 align-middle d-inline-block text-success"></i>30 Likes</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="ri-calendar-event-line text-primary me-1"></i>10, Oct 2024 - 03:15PM
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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

        <!-- Filepond JS -->
        <script src="{{asset('build/assets/libs/filepond/filepond.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js')}}"></script>

        <!-- Create NFT JS -->
        @vite('resources/assets/js/nft-create.js')


@endsection