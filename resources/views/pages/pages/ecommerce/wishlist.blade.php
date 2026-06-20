@extends('layouts.master')

@section('styles')

        <!-- sweetalert CSS"-->
        <link rel="stylesheet" href="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.css')}}">
      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Wishlist</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Wishlist
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">
                                                        <input class="form-check-input check-all" type="checkbox" id="all-products" value="" aria-label="...">
                                                    </th>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Items</th>
                                                    <th scope="col">Stock</th>
                                                    <th scope="col">Rating</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="wishlist-list">
                                                    <td class="wishlist-checkbox"><input class="form-check-input" type="checkbox" id="product3" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-md avatar-square bg-light"><img src="{{asset('build/assets/images/ecommerce/png/1.png')}}" class="w-100 h-100" alt="..."></span>
                                                            <div class="ms-2">
                                                                <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);"> Women's Slim Bag</a></p>
                                                                <p class="fs-12 text-muted mb-0">Travel Collection</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>Accessories</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <div class="fw-semibold fs-17 text-pink">
                                                                $199
                                                            </div>
                                                            <s class="text-muted fs-12">
                                                                $299.00
                                                            </s>
                                                        </div>
                                                    </td>
                                                    <td>150</td>
                                                    <td><span class="badge bg-success">In Stock</span></td>
                                                    <td>
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star"></i></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="{{url('cart')}}" class="btn btn-icon btn-sm btn-primary-light"><i class="ri-shopping-cart-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light"><i class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light wishlist-btn"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="wishlist-list">
                                                    <td class="wishlist-checkbox"><input class="form-check-input" type="checkbox" id="product4" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-md avatar-square bg-light"><img src="{{asset('build/assets/images/ecommerce/png/5.png')}}" class="w-100 h-100" alt="..."></span>
                                                            <div class="ms-2">
                                                                <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);"> Ceramic Flowerpot</a></p>
                                                                <p class="fs-12 text-muted mb-0">Floral Decor</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>Decorative</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <div class="fw-semibold fs-17 text-pink">
                                                                $1,599
                                                            </div>
                                                            <s class="text-muted fs-12">
                                                                $2,199.00
                                                            </s>
                                                        </div>
                                                    </td>
                                                    <td>42</td>
                                                    <td><span class="badge bg-danger-transparent">Limited Stock</span></td>
                                                    <td>
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="{{url('cart')}}" class="btn btn-icon btn-sm btn-primary-light"><i class="ri-shopping-cart-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light"><i class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light wishlist-btn"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="wishlist-list">
                                                    <td class="wishlist-checkbox"><input class="form-check-input" type="checkbox" id="product5" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-md avatar-square bg-light"><img src="{{asset('build/assets/images/ecommerce/png/7.png')}}" class="w-100 h-100" alt="..."></span>
                                                            <div class="ms-2">
                                                                <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);"> Vintage Wall Clock</a></p>
                                                                <p class="fs-12 text-muted mb-0">Home Decor Collection</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>Home Decor</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <div class="fw-semibold fs-17 text-pink">
                                                                $249
                                                            </div>
                                                            <s class="text-muted fs-12">
                                                                $349.00
                                                            </s>
                                                        </div>
                                                    </td>
                                                    <td>200</td>
                                                    <td><span class="badge bg-success">In Stock</span></td>
                                                    <td>
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star"></i></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="{{url('cart')}}" class="btn btn-icon btn-sm btn-primary-light"><i class="ri-shopping-cart-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light"><i class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light wishlist-btn"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="wishlist-list">
                                                    <td class="wishlist-checkbox"><input class="form-check-input" type="checkbox" id="product6" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-md avatar-square bg-light"><img src="{{asset('build/assets/images/ecommerce/png/8.png')}}" class="w-100 h-100" alt="..."></span>
                                                            <div class="ms-2">
                                                                <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);"> Steel Electric Kettle</a></p>
                                                                <p class="fs-12 text-muted mb-0">Kitchen Essentials</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>Kitchen Appliances</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <div class="fw-semibold fs-17 text-pink">
                                                                $79
                                                            </div>
                                                            <s class="text-muted fs-12">
                                                                $129.00
                                                            </s>
                                                        </div>
                                                    </td>
                                                    <td>320</td>
                                                    <td><span class="badge bg-success">In Stock</span></td>
                                                    <td>
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="{{url('cart')}}" class="btn btn-icon btn-sm btn-primary-light"><i class="ri-shopping-cart-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light"><i class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light wishlist-btn"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>  
                                                <tr class="wishlist-list">
                                                    <td class="wishlist-checkbox"><input class="form-check-input" type="checkbox" id="product7" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-md avatar-square bg-light"><img src="{{asset('build/assets/images/ecommerce/png/2.png')}}" class="w-100 h-100" alt="..."></span>
                                                            <div class="ms-2">
                                                                <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);">Beautiful Candle Set</a></p>
                                                                <p class="fs-12 text-muted mb-0">Home Essentials</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>Home Fragrance</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <div class="fw-semibold fs-17 text-pink">
                                                                $129
                                                            </div>
                                                            <s class="text-muted fs-12">
                                                                $199.00
                                                            </s>
                                                        </div>
                                                    </td>
                                                    <td>180</td>
                                                    <td><span class="badge bg-success">In Stock</span></td>
                                                    <td>
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star"></i></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="{{url('cart')}}" class="btn btn-icon btn-sm btn-primary-light"><i class="ri-shopping-cart-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light"><i class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light wishlist-btn"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="wishlist-list">
                                                    <td class="wishlist-checkbox"><input class="form-check-input" type="checkbox" id="product8" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-md avatar-square bg-light"><img src="{{asset('build/assets/images/ecommerce/png/4.png')}}" class="w-100 h-100" alt="..."></span>
                                                            <div class="ms-2">
                                                                <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);">Lightweight Sneakers</a></p>
                                                                <p class="fs-12 text-muted mb-0">Urban Sports Gear</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>Sneakers</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <div class="fw-semibold fs-17 text-pink">
                                                                $249
                                                            </div>
                                                            <s class="text-muted fs-12">
                                                                $349.00
                                                            </s>
                                                        </div>
                                                    </td>
                                                    <td>75</td>
                                                    <td><span class="badge bg-danger-transparent">Limited Stock</span></td>
                                                    <td>
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star"></i></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="{{url('cart')}}" class="btn btn-icon btn-sm btn-primary-light"><i class="ri-shopping-cart-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light"><i class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light wishlist-btn"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="wishlist-list">
                                                    <td class="wishlist-checkbox"><input class="form-check-input" type="checkbox" id="product9" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-md avatar-square bg-light"><img src="{{asset('build/assets/images/ecommerce/png/6.png')}}" class="w-100 h-100" alt="..."></span>
                                                            <div class="ms-2">
                                                                <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);">Luxury Wrist Watch</a></p>
                                                                <p class="fs-12 text-muted mb-0">Precision Timepieces</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>Accessories</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <div class="fw-semibold fs-17 text-pink">
                                                                $199
                                                            </div>
                                                            <s class="text-muted fs-12">
                                                                $299.00
                                                            </s>
                                                        </div>
                                                    </td>
                                                    <td>120</td>
                                                    <td><span class="badge bg-success">In Stock</span></td>
                                                    <td>
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star"></i></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="{{url('cart')}}" class="btn btn-icon btn-sm btn-primary-light"><i class="ri-shopping-cart-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light"><i class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light wishlist-btn"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="wishlist-list">
                                                    <td class="wishlist-checkbox"><input class="form-check-input" type="checkbox" id="product10" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-md avatar-square bg-light"><img src="{{asset('build/assets/images/ecommerce/png/3.png')}}" class="w-100 h-100" alt="..."></span>
                                                            <div class="ms-2">
                                                                <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);">Designer Summer Top</a></p>
                                                                <p class="fs-12 text-muted mb-0">Fashion Forward</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>Fashion</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <div class="fw-semibold fs-17 text-pink">
                                                                $59
                                                            </div>
                                                            <s class="text-muted fs-12">
                                                                $99.00
                                                            </s>
                                                        </div>
                                                    </td>
                                                    <td>250</td>
                                                    <td><span class="badge bg-success">In Stock</span></td>
                                                    <td>
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="{{url('cart')}}" class="btn btn-icon btn-sm btn-primary-light"><i class="ri-shopping-cart-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light"><i class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light wishlist-btn"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex align-items-center flex-wrap overflow-auto">
                                        <div class="mb-2 mb-sm-0">
                                            Showing <b>1</b> to <b>8</b> of <b>10</b> entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                                        </div>
                                        <div class="ms-auto">
                                            <ul class="pagination mb-0 overflow-auto">
                                                <li class="page-item disabled">
                                                    <a class="page-link">Previous</a>
                                                </li>
                                                <li class="page-item active" aria-current="page"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)">2</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)">Next</a>
                                                </li>
                                            </ul>
                                        </div>
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

        <!-- Sweetalerts JS -->
        <script src="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

        <!-- Wishlist JS -->
        @vite('resources/assets/js/wishlist.js')
        

@endsection