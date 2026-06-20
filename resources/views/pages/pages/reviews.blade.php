@extends('layouts.master')

@section('styles')

        <!-- Swiper CSS-->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">
      
@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Reviews</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Reviews</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row justify-content-center">
                        <div class="col-xl-9">
                            <h6 class="mb-3">Reviews Style 1 :</h6>
                            <div class="swiper testimonialSwiper1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-fixed-white review-01">
                                            <div class="card-body text-center p-5 pb-4">
                                                <div class="fw-semibold fs-17 mb-2">Excellent Experience!</div>
                                                <p class="">
                                                    I am extremely satisfied with the product and the outstanding service I received. The quality exceeded my expectations, and the customer support was incredible.
                                                </p>
                                                <div>
                                                    <span class="avatar avatar-xl rounded-circle mb-2">
                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="" class="img-fluid rounded-circle">
                                                    </span>
                                                    <p class="mb-1 fw-bold fs-14">Hadley Kylin</p>
                                                    <p class="mb-0 fs-11 text-muted">Product Designer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-fixed-white review-01">
                                            <div class="card-body text-center p-5 pb-4">
                                                <div class="fw-semibold fs-17 mb-2">Amazing Product Quality!</div>
                                                <p class="">
                                                    The product arrived on time and the quality is top-notch. I am impressed by the attention to detail and the exceptional durability. Highly recommend.
                                                </p>
                                                <div>
                                                    <span class="avatar avatar-xl rounded-circle mb-2">
                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="" class="img-fluid rounded-circle">
                                                    </span>
                                                    <p class="mb-1 fw-bold fs-14">Jaxon Blake</p>
                                                    <p class="mb-0 fs-11 text-muted">Tech Enthusiast</p>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-fixed-white review-01">
                                            <div class="card-body text-center p-5 pb-4">
                                                <div class="fw-semibold fs-17 mb-2">Unmatched Value for Money!</div>
                                                <p class="">
                                                    I am incredibly happy with my purchase. The product offers fantastic features for the price. It performs as advertised, and I couldn't be more satisfied.
                                                </p>
                                                <div>
                                                    <span class="avatar avatar-xl rounded-circle mb-2">
                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="" class="img-fluid rounded-circle">
                                                    </span>
                                                    <p class="mb-1 fw-bold fs-14">Liam Harper</p>
                                                    <p class="mb-0 fs-11 text-muted">Marketing Specialist</p>
                                                </div>
                                            </div>
                                        </div>                                                                       
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-fixed-white review-01">
                                            <div class="card-body text-center p-5 pb-4">
                                                <div class="fw-semibold fs-17 mb-2">Exceeded My Expectations!</div>
                                                <p class="">
                                                    The product quality and functionality are beyond what I expected. It's rare to find something that works so well and looks so good. I'll definitely be purchasing again!
                                                </p>
                                                <div>
                                                    <span class="avatar avatar-xl rounded-circle mb-2">
                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="" class="img-fluid rounded-circle">
                                                    </span>
                                                    <p class="mb-1 fw-bold fs-14">Sophia Carter</p>
                                                    <p class="mb-0 fs-11 text-muted">Business Owner</p>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <h6 class="mb-3">Reviews Style 2 :</h6>
                            <div class="swiper testimonialSwiper2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card custom-card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex gap-3 align-items-start flex-wrap flex-sm-nowrap">
                                                    <div class="border shadow-sm flex-shrink-0 p-2 bg-info rounded-circle bg-opacity-50">
                                                        <img src="{{asset('build/assets/images/faces/19.jpg')}}" alt="img" class="rounded-circle shadow-sm img-fluid w-auto">
                                                    </div>
                                                    <div class="text-wrap">
                                                        <i class="bx bxs-quote-alt-left fs-30 mb-2 text-primary"></i><br>
                                                        <div class="ps-3 fw-medium">
                                                            <i>
                                                                "The team went above and beyond to ensure that all my questions were answered. Their dedication to customer satisfaction is truly commendable. I'm extremely happy with my purchase!"
                                                            </i>
                                                        </div>
                                                        <div class="ps-3 mt-3">
                                                            <p class="mb-0 fw-semibold fs-14">Flora Mary</p>
                                                            <div class="fw-normal text-muted fs-12 mb-2">Customer Support Specialist</div>
                                                            <span>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-half-fill text-warning"></i> 
                                                                <span class="ms-2">4.5</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex gap-3 align-items-start flex-wrap flex-sm-nowrap">
                                                    <div class="border shadow-sm flex-shrink-0 p-2 bg-warning rounded-circle bg-opacity-50">
                                                        <img src="{{asset('build/assets/images/faces/18.jpg')}}" alt="img" class="rounded-circle shadow-sm img-fluid w-auto">
                                                    </div>
                                                    <div class="text-wrap">
                                                        <i class="bx bxs-quote-alt-left fs-30 mb-2 text-primary"></i><br>
                                                        <div class="ps-3 fw-medium">
                                                            <i>
                                                                "This product exceeded my expectations! The quality is excellent, and the customer service team was helpful and responsive. I would highly recommend this to anyone."
                                                            </i>
                                                        </div>
                                                        <div class="ps-3 mt-3">
                                                            <p class="mb-0 fw-semibold fs-14">James Carter</p>
                                                            <div class="fw-normal text-muted fs-12 mb-2">Operations Manager</div>
                                                            <span>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i> 
                                                                <span class="ms-2">5.0</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="swiper-slide">
                                        <div class="card custom-card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex gap-3 align-items-start flex-wrap flex-sm-nowrap">
                                                    <div class="border shadow-sm flex-shrink-0 p-2 bg-info rounded-circle bg-opacity-50">
                                                        <img src="{{asset('build/assets/images/faces/17.jpg')}}" alt="img" class="rounded-circle shadow-sm img-fluid w-auto">
                                                    </div>
                                                    <div class="text-wrap">
                                                        <i class="bx bxs-quote-alt-left fs-30 mb-2 text-primary"></i><br>
                                                        <div class="ps-3 fw-medium">
                                                            <i>
                                                                "The team went above and beyond to ensure that all my questions were answered. Their dedication to customer satisfaction is truly commendable. I'm extremely happy with my purchase!"
                                                            </i>
                                                        </div>
                                                        <div class="ps-3 mt-3">
                                                            <p class="mb-0 fw-semibold fs-14">Flora Mary</p>
                                                            <div class="fw-normal text-muted fs-12 mb-2">Customer Support Specialist</div>
                                                            <span>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-fill text-warning"></i>
                                                                <i class="ri-star-half-fill text-warning"></i> 
                                                                <span class="ms-2">4.5</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <h6 class="mb-3">Reviews Style 3 :</h6>
                            <div class="review-style-2">
                                <div class="swiper pagination-dynamic testimonialSwiper3">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide pt-5">
                                            <div class="card custom-card text-fixed-white">
                                                <div class="card-body text-center p-5 py-4">
                                                    <i class="ri-double-quotes-l review-03-quote1"></i>
                                                    <i class="ri-double-quotes-r review-03-quote2"></i>
                                                    <span class="avatar avatar-xxl rounded-circle mb-2 review-03-img">
                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="" class="img-fluid rounded-circle">
                                                    </span>
                                                    <div class="bg-light p-3 pt-5 rounded-3">
                                                        <p class="mb-1 fw-bold fs-14">Hadley Kylin</p>
                                                        <p class="mb-1 fs-11 text-muted">Product Designer</p>
                                                        <div class="mb-3">
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-half-fill text-warning"></i> 
                                                        </div>
                                                        <p>
                                                            I am extremely satisfied with the product and the outstanding service I received. 
                                                            The quality exceeded my expectations, and the customer support was incredible.
                                                            I am extremely satisfied.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide pt-5">
                                            <div class="card custom-card text-fixed-white">
                                                <div class="card-body text-center p-5 py-4">
                                                    <i class="ri-double-quotes-l review-03-quote1"></i>
                                                    <i class="ri-double-quotes-r review-03-quote2"></i>
                                                    <span class="avatar avatar-xxl rounded-circle mb-2 review-03-img">
                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="" class="img-fluid rounded-circle">
                                                    </span>
                                                    <div class="bg-light p-3 pt-5 rounded-3">
                                                        <p class="mb-1 fw-bold fs-14">Liam Anderson</p>
                                                        <p class="mb-1 fs-11 text-muted">Web Developer</p>
                                                        <div class="mb-3">
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i> 
                                                        </div>
                                                        <p>
                                                            This product has greatly improved my productivity. The user experience is seamless, and the support team went the extra mile to help with any issues I faced. Absolutely recommended!
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide pt-5">
                                            <div class="card custom-card text-fixed-white">
                                                <div class="card-body text-center p-5 py-4">
                                                    <i class="ri-double-quotes-l review-03-quote1"></i>
                                                    <i class="ri-double-quotes-r review-03-quote2"></i>
                                                    <span class="avatar avatar-xxl rounded-circle mb-2 review-03-img">
                                                        <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="" class="img-fluid rounded-circle">
                                                    </span>
                                                    <div class="bg-light p-3 pt-5 rounded-3">
                                                        <p class="mb-1 fw-bold fs-14">Olivia Bennett</p>
                                                        <p class="mb-1 fs-11 text-muted">Graphic Designer</p>
                                                        <div class="mb-3">
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-half-fill text-warning"></i> 
                                                        </div>
                                                        <p>
                                                            The design and functionality of this product are outstanding. It has made my workflow much smoother. I love the support I received from the team. Would definitely recommend to other creatives.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                    
                                        <div class="swiper-slide pt-5">
                                            <div class="card custom-card text-fixed-white">
                                                <div class="card-body text-center p-5 py-4">
                                                    <i class="ri-double-quotes-l review-03-quote1"></i>
                                                    <i class="ri-double-quotes-r review-03-quote2"></i>
                                                    <span class="avatar avatar-xxl rounded-circle mb-2 review-03-img">
                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="" class="img-fluid rounded-circle">
                                                    </span>
                                                    <div class="bg-light p-3 pt-5 rounded-3">
                                                        <p class="mb-1 fw-bold fs-14">Emily Johnson</p>
                                                        <p class="mb-1 fs-11 text-muted">Project Manager</p>
                                                        <div class="mb-3">
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-half-fill text-warning"></i> 
                                                        </div>
                                                        <p>
                                                            This product has transformed the way I work! It's not only efficient but also easy to use. The customer support team has been outstanding throughout the process.
                                                        </p>
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

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Swiper JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- Reviews JS -->
        @vite('resources/assets/js/reviews.js')
        

@endsection