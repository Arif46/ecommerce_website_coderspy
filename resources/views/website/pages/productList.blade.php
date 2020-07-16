@extends('website.layouts.master')

@section('content')

<!-- Latest Products Start -->
 <section class="product-list">
    <div class="container">
        <div class="row product-btn justify-content-between">
            <div class="col-lg-7">
                <div class="properties__button">
                    <!--Nav Button  -->
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                <i class="fa fa-list"></i>
                            </a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                                <i class="fa fa-th-list"></i>
                            </a>
                        </div>
                    </nav>
                    <!--End Nav Button  -->
                </div>
            </div>
            <div class="col-lg-5">
                <div class="right-content d-flex">
                    <!-- Search Box -->
                    <div class="search-box2">
                        <form action="#">
                            <input type="text" placeholder="Search">
                        </form>
                    </div>
                    <!-- Select items -->
                    <div class="select-this">
                        <form action="#">
                            <div class="select-itms">
                                <select name="select" id="select1">
                                    <option value="">Filter & Short</option>
                                    <option value="">Filter 01</option>
                                    <option value="">Filter 02</option>
                                    <option value="">Filter 03</option>
                                    <option value="">Filter 04</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
             <!-- Nav Card -->
            <div class="tab-content" id="nav-tabContent">
                <!-- card one -->
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <!-- Tab View -->
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-md-5   ">
                            <div class="product mb-30">
                                <div class="product__img">
                                    <a href="product-details.html"><img src="{{url('public/website/img/product/pro1.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="product-list-content pt-10 mb-30">
                                <div class="product__content mb-20">

                                    <h4 class="pro-title"><a href="product-details.html">Name of Product</a></h4>
                                    <div class="price">
                                        <span>$95.00</span>
                                        <span class="old-price">$120.00</span>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                    ut
                                    aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate.</p>
                                <div class="product-action-list">
                                    <a class="site-btn" href="#">add to cart</a>
                                    <a class="action-btn" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="action-btn" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-md-5   ">
                            <div class="product mb-30">
                                <div class="product__img">
                                    <a href="product-details.html"><img src="{{url('public/website/img/product/pro3.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="product-list-content pt-10 mb-30">
                                <div class="product__content mb-20">
                                    <h4 class="pro-title"><a href="product-details.html">Name of Product</a></h4>
                                    <div class="price">
                                        <span>$95.00</span>
                                        <span class="old-price">$120.00</span>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                    ut
                                    aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate.</p>
                                <div class="product-action-list">
                                    <a class="site-btn" href="#">add to cart</a>
                                    <a class="action-btn" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="action-btn" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-md-5   ">
                            <div class="product mb-30">
                                <div class="product__img">
                                    <a href="product-details.html"><img src="{{url('public/website/img/product/pro2.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="product-list-content pt-10 mb-30">
                                <div class="product__content mb-20">

                                    <h4 class="pro-title"><a href="product-details.html">Name of Product</a></h4>
                                    <div class="price">
                                        <span>$95.00</span>
                                        <span class="old-price">$120.00</span>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                    ut
                                    aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate.</p>
                                <div class="product-action-list">
                                    <a class="site-btn" href="#">add to cart</a>
                                    <a class="action-btn" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="action-btn" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-md-5   ">
                            <div class="product mb-30">
                                <div class="product__img">
                                    <a href="product-details.html"><img src="{{url('public/website/img/product/pro4.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="product-list-content pt-10 mb-30">
                                <div class="product__content mb-20">
                                    <h4 class="pro-title"><a href="product-details.html">Name of Product</a></h4>
                                    <div class="price">
                                        <span>$95.00</span>
                                        <span class="old-price">$120.00</span>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                    ut
                                    aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate.</p>
                                <div class="product-action-list">
                                    <a class="site-btn" href="#">add to cart</a>
                                    <a class="action-btn" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="action-btn" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-md-5   ">
                            <div class="product mb-30">
                                <div class="product__img">
                                    <a href="product-details.html"><img src="{{url('public/website/img/product/pro5.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="product-list-content pt-10 mb-30">
                                <div class="product__content mb-20">

                                    <h4 class="pro-title"><a href="product-details.html">Name of Product</a></h4>
                                    <div class="price">
                                        <span>$95.00</span>
                                        <span class="old-price">$120.00</span>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                    ut
                                    aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate.</p>
                                <div class="product-action-list">
                                    <a class="site-btn" href="#">add to cart</a>
                                    <a class="action-btn" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="action-btn" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-md-5   ">
                            <div class="product mb-30">
                                <div class="product__img">
                                    <a href="product-details.html"><img src="{{url('public/website/img/product/pro1.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="product-list-content pt-10 mb-30">
                                <div class="product__content mb-20">

                                    <h4 class="pro-title"><a href="product-details.html">Name of Product</a></h4>
                                    <div class="price">
                                        <span>$95.00</span>
                                        <span class="old-price">$120.00</span>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                    ut
                                    aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate.</p>
                                <div class="product-action-list">
                                    <a class="site-btn" href="#">add to cart</a>
                                    <a class="action-btn" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="action-btn" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card two -->
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <!-- List View -->
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="product mb_50">
                                <div class="product__img">
                                    <a href="#"><img src="{{url('public/website/img/product/pro1.jpg')}}" alt=""></a>
                                    <div class="product-action text-center">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-shopping-cart"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></a>
                                    </div>
                                </div>
                                <div class="product__content text-center pt-30">
                                    <h4 class="pro-title"><a href="#">Product Name</a></h4>
                                    <div class="price">
                                        <span>$95.00</span>
                                        <span class="old-price">$120.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product mb_50">
                                <div class="product__img">
                                    <a href="#"><img src="{{url('public/website/img/product/pro6.jpg')}}" alt=""></a>
                                    <div class="product-action text-center">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-shopping-cart"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></a>
                                    </div>
                                </div>
                                <div class="product__content text-center pt-30">
                                    <h4 class="pro-title"><a href="#">Product Name</a></h4>
                                    <div class="price">
                                        <span>$95.00</span>
                                        <span class="old-price">$120.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product mb_50">
                                <div class="product__img">
                                    <a href="#"><img src="{{url('public/website/img/product/pro2.jpg')}}" alt=""></a>
                                    <div class="product-action text-center">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-shopping-cart"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></a>
                                    </div>
                                </div>
                                <div class="product__content text-center pt-30">
                                    <h4 class="pro-title"><a href="#">Product Name</a></h4>
                                    <div class="price">
                                        <span>$95.00</span>
                                        <span class="old-price">$120.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product mb_50">
                                <div class="product__img">
                                    <a href="#"><img src="{{url('public/website/img/product/pro3.jpg')}}" alt=""></a>
                                    <div class="product-action text-center">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-shopping-cart"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></a>
                                    </div>
                                </div>
                                <div class="product__content text-center pt-30">
                                    <h4 class="pro-title"><a href="#">Product Name</a></h4>
                                    <div class="price">
                                        <span>$95.00</span>
                                        <span class="old-price">$120.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product mb_50">
                                <div class="product__img">
                                    <a href="#"><img src="{{url('public/website/img/product/pro4.jpg')}}" alt=""></a>
                                    <div class="product-action text-center">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-shopping-cart"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></a>
                                    </div>
                                </div>
                                <div class="product__content text-center pt-30">
                                    <h4 class="pro-title"><a href="#">Product Name</a></h4>
                                    <div class="price">
                                        <span>$95.00</span>
                                        <span class="old-price">$120.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product mb_50">
                                <div class="product__img">
                                    <a href="#"><img src="{{url('public/website/img/product/pro5.jpg')}}" alt=""></a>
                                    <div class="product-action text-center">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-shopping-cart"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></a>
                                    </div>
                                </div>
                                <div class="product__content text-center pt-30">
                                    <h4 class="pro-title"><a href="#">Product Name</a></h4>
                                    <div class="price">
                                        <span>$95.00</span>
                                        <span class="old-price">$120.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Nav Card -->
        </div>
    </div>
</section>
<!-- Latest Products End -->


@endsection

@push('css')

@endpush

@push('script')

@endpush
