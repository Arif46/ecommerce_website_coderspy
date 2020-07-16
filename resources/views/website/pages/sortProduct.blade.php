@extends('website.layouts.master')


@section('content')
    <main>
        <div class="Subscription_area text-center">
            @if ($count == 0)
                <span>@lang('No Product Found')</span>
            @else
                <span>@lang('Search result')</span>
            @endif
        </div>
        <!-- Latest Products Start -->
        <section class="product-list brand-product">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-3 col-md-4 ">
                        <div class="product-filter">
                            <h3>Filter</h3>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Category
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            @foreach($categories as $category)
                                                <p><a href="{{route('categoryProduct', [$category->id, $category->slug])}}"><i class="fa fa-angle-right"></i> {{$category->name}} <span>{{$category->products_count}}</span></a></p>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Price
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p><a href=""><i class="fa fa-angle-right"></i> BUKHOOR <span>42</span></a></p>
                                            <p><a href=""><i class="fa fa-angle-right"></i> Mamul <span>4</span></a></p>
                                            <p><a href=""><i class="fa fa-angle-right"></i> Oud Ma’al Attar <span>3</span></a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Quantity
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p><a href=""><span>5ML</span></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-filter">
                            <h3>COMPARE PRODUCTS</h3>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                                Products
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne2" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>You have no items to compare.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-filter">
                            <h3>MY WISH LIST</h3>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne3">
                                                Products
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne3" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>You have no items in your wish list.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="row product-btn2 justify-content-between">
                            <div class="col-lg-3">
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

                        </div>
                        <!-- Nav Card -->
                        <div class="tab-content" id="nav-tabContent">
                            <!-- card one -->
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <!-- List View -->
                                <div class="row">
                                    @foreach($products as $product)
                                        <div class="col-xl-4 col-lg-4 col-sm-12 mb-30">
                                            <div class="single-product-carousel">
                                                <div class="single_tranding">
                                                    <a href="{{ route('product', $product->slug) }}">
                                                        <img src="{{ url('public/'.$product->featured_img) }}" alt="">
                                                        <div class="des">

                                                            <p class="title">{{$product->name}}</p>
                                                            <p class="brand">{{$product->perfumer->name}}</p>
                                                            <p class="price">{{home_base_price($product->id)}}</p>
                                                        </div>
                                                    </a>
                                                    <div class="des-hover">
                                                        <span onclick="showAddToCartModal({{ $product->id }})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span>
                                                        <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                                        <span onclick="addToWishList({{ $product->id }})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart"></i></span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Card two -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <!-- Tab View -->
                                <div class="row justify-content-between">
                                    <div class="col-lg-3 col-md-5   ">
                                        <div class="product mb-30">
                                            <div class="product__img">
                                                <a href="#"> <img src="{{ url('public/'.$product->featured_img) }}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-7">
                                        <div class="single-brnad pt-10 mb-30">
                                            <div class="des des-brand-page">
                                                <p class="title">{{$product->name}}</p>
                                                <p class="brand">{{$product->perfumer->name}}</p>
                                                <p class="price">{{home_base_price($product->id)}}</p>
                                            </div>
                                            <div class="des-hover des-hover-brand-page">
                                                <span onclick="showAddToCartModal({{ $product->id }})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span>
                                                <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                                <span onclick="addToWishList({{ $product->id }})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-between">
                                    <div class="col-lg-3 col-md-5   ">
                                        <div class="product mb-30">
                                            <div class="product__img">
                                                <a href="#"> <img src="{{ url('public/'.$product->featured_img) }}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-7">
                                        <div class="single-brnad pt-10 mb-30">
                                            <div class="des des-brand-page">
                                                <p class="title">{{$product->name}}</p>
                                                <p class="brand">{{$product->perfumer->name}}</p>
                                                <p class="price">{{home_base_price($product->id)}}</p>
                                            </div>
                                            <div class="des-hover des-hover-brand-page">
                                                <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span>
                                                <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-shopping-cart"></i></span>
                                                <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-between">
                                    <div class="col-lg-3 col-md-5   ">
                                        <div class="product mb-30">
                                            <div class="product__img">
                                                <a href="#"> <img src="{{ url('public/'.$product->featured_img) }}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-7">
                                        <div class="single-brnad pt-10 mb-30">
                                            <div class="des des-brand-page">
                                                <p class="title">{{$product->name}}</p>
                                                <p class="brand">{{$product->perfumer->name}}</p>
                                                <p class="price">{{home_base_price($product->id)}}</p>
                                            </div>
                                            <div class="des-hover des-hover-brand-page">
                                                <span onclick="showAddToCartModal({{ $product->id }})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span>
                                                <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                                <span onclick="addToWishList({{ $product->id }})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Nav Card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Latest Products End -->
    </main>

@endsection

@push('css')

@endpush

@push('script')


@endpush
