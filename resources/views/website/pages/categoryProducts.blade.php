@extends('website.layouts.master')
@section('title',@$categoryName->name)
@section('content')

    <body  class="body-bg1">
    <main>
        <div class="Subscription_area text-center mb-50">
            @if ($count == 0)
                <span>@lang('No Product Found')</span>
            @else
                <span><a href="">{{@$categoryName->name}}</a></span>
            @endif
        </div>
        <!-- Latest Products Start -->
        <section class="product-list brand-product white-bg section_padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-3 col-md-4 ">
                        <div class="product-filter">
                            <h3>Filter</h3>
                            <div class="accordion" id="accordionExample">
                                <div class="card card2">
                                    <div class="card-header card-header2" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Categories
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul class="list-group1">
                                                @foreach($categories as $category)
                                                    <li style="padding: 5px; margin-bottom: 3px; border-bottom:1px solid #ddd;">

                                                        <a style="
                                                        @if($categoryName->id == $category->id)
                                                            color: #a2c96c;
                                                        @else
                                                            color: #000;
                                                        @endif" href="{{route('brandProducts',[$category->id,$category->slug])}}"><i class="fa fa-angle-right"></i> {{$category->name}} <span>{{$category->products_count}}</span></a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card2">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Gender
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                <a href="javascript:void(0)" id="male_product">
                                                    <input type="hidden" value="1">
                                                    <i class="fa fa-angle-right"></i> Male <span>{{$male->count()}}</span>
                                                </a>
                                            </p>
                                            <p><a href="javascript:void(0)" id="female_product"><input type="hidden" value="2">
                                                    <i class="fa fa-angle-right"></i> Female <span>{{$female->count()}}</span></a></p>
                                            <p>
                                                <a href="javascript:void(0)" id="unisex_product">
                                                    <input type="hidden" value="3">
                                                    <i class="fa fa-angle-right"></i> Unisex <span>{{$unisex->count()}}</span>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card2">
                                    <div class="card-header card-header2" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Quantity
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Total : <span>{{$countProduct}}</span></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Price Slider -->
                                <div class="card card2">
                                    <!-- Range Slider Start -->
                                    <aside class="price_rangs_aside">
                                        <div class="small-section-tittle2 mb-15">
                                            <h4>Price range</h4>
                                        </div>
                                        <div class="widgets_inner">
                                            <div class="range_item">
                                                <!-- <div id="slider-range"></div> -->
                                                <p>
                                                    <input type="text" id="amount" readonly
                                                           style="border:0; color:#a2c96c; font-weight:bold;">
                                                </p>

                                                <div id="slider-range"></div>

                                            </div>
                                        </div>
                                    </aside>
                                    <!-- Range Slider End -->
                                </div>
                            </div>
                        </div>
{{--                        <div class="product-filter">--}}
{{--                            <h3>COMPARE PRODUCTS</h3>--}}
{{--                            <div class="accordion" id="accordionExample">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-header card-header2" id="headingOne">--}}
{{--                                        <h2 class="mb-0">--}}
{{--                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">--}}
{{--                                                Products--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}
{{--                                    </div>--}}
{{--                                    <div id="collapseOne2" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <p>You have no items to compare.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-filter">--}}
{{--                            <h3>COMPARE PRODUCTS</h3>--}}
{{--                            <div class="accordion" id="accordionExample">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-header card-header2" id="headingOne">--}}
{{--                                        <h2 class="mb-0">--}}
{{--                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">--}}
{{--                                                Products--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}
{{--                                    </div>--}}
{{--                                    <div id="collapseOne2" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <p>You have no items to compare.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-filter">--}}
{{--                            <h3>MY WISH LIST</h3>--}}
{{--                            <div class="accordion" id="accordionExample">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-header card-header2" id="headingOne">--}}
{{--                                        <h2 class="mb-0">--}}
{{--                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne3">--}}
{{--                                                Products--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}
{{--                                    </div>--}}

{{--                                    <div id="collapseOne3" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <p>You have no items in your wish list.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
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
                            <div class="col-lg-9">
                                <div class="right-content d-flex align-items-center">
                                    <div class="search-box3">
                                        <form action="#">
                                            <input type="text" placeholder="Search" id="searchkey">
                                        </form>
                                    </div>
                                    <div class="short-by">
                                        <span class="mr-20">@lang('Sort by')</span>
                                    </div>
                                    <!-- Select items -->
                                    <div class="select-this">
                                        <form action="#">
                                            <div class="select-itms">
                                                <select name="sort"  id="sort">
                                                    <option value="topRev">@lang('Top Review')</option>
                                                    <option value="topRev">@lang('Most Review')</option>
                                                    <option value="priceHigh">@lang('Price High To Low')</option>
                                                    <option value="priceLow">@lang('Price Low To High')</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Goto Select btn  -->
                                    <div class="goto-select-btn">
                                        <a href="#"><i class="fa fa-long-arrow-up"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Nav Card -->
                        <div class="tab-content" id="nav-tabContent">
                            <!-- card one -->
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <!-- List View -->
                                <div class="row productView">
                                    @foreach($products as $product)
                                        <div class="col-xl-3 col-lg-3 col-sm-12 mb-30">
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
                                                            <span onclick="showAddToCartModal({{ @$product->id }})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span>
                                                            @if(Auth::check())
                                                                <span data-toggle="tooltip"  onclick="addToCompareList({{ @$product->id }})" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                                            @else
                                                                <span onclick="addToCompare({{ @$product->id }})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                                            @endif
                                                            <span onclick="addToWishList({{ @$product->id }})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-heart"></i></span>
                                                        </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <hr>
                                <div class="searcResult">
                                </div>
                            </div>
                            <!-- Card two -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                            @foreach($products as $product)
                                <!-- Tab View -->
                                    <div class="row justify-content-between tabProduct">
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
                                                    <p class="title"><a href="{{ route('product', $product->slug) }}" style="color:#000!important;">{{$product->name}}</a></p>
                                                    <p class="brand">{{$product->perfumer->name}}</p>
                                                    <p class="price">{{home_base_price($product->id)}}</p>
                                                </div>
                                                <div class="des-hover des-hover-brand-page">
                                                    <span onclick="showAddToCartModal({{ @$product->id }})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span>
                                                    @if(Auth::check())
                                                        <span data-toggle="tooltip"  onclick="addToCompareList({{ @$product->id }})" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                                    @else
                                                        <span onclick="addToCompare({{ @$product->id }})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                                    @endif
                                                    <span onclick="addToWishList({{ @$product->id }})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-heart"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="searcResult">

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
    </body>


@endsection
@push('css')
@endpush
@push('script')
    <script>
        $('#searchkey').on('input', function() {
            var keyword = $('#searchkey').val();
            var brandid = '{{$category->id}}';

            if(keyword.length >0){
                $(".productView").css("display", "none");

                $.ajax({
                    url: '{{url('/ajaxLiveSearchBrand')}}',
                    type: 'get',
                    data: {'keyword': keyword , brandid: brandid},
                    success: function (data) {
                        $('.searcResult').html(data);
                    },error:function (response) {
                        $('.productView').empty();
                    }
                });
            }

            else{
                // alert(keyword)
                $('.searcResult').empty();

                $(".productView").css("display", "block");
                $(".tabProduct").empty();
            }

        });

        $("#sort").on('change', function() {
            var sort = this.value;

            var brandid = '{{$category->id}}';

            $.ajax({
                url: '{{url('/sortProductBrand')}}',
                type: 'get',
                data: {'value': sort , brandid: brandid},
                success: function (data) {
                    $(".productView").css("display", "none");
                    $('#searcResult').html(data);
                },error:function (response) {
                    $('.productView').empty();
                }
            });
        });

        $("#lowPrice").change(function(){
            alert("The text has been changed.");
        });


    </script>


    <script>
        $(document).ready(function () {
            //male product
            $('#male_product').on('click',function (e) {
                e.preventDefault();
                let maleId =$('#male_product').children().val();
                $('.productView').empty();
                $.ajax({
                    type: 'GET',
                    url: '{{url('category-maleProducts')}}'+'/'+'{{@$category->id}}',
                    success: function (data) {
                        // $('.show_content').show();
                        $.each(data, function (indexOne, valueOne) {
                            $('.productView').append(` <div class="col-xl-4 col-lg-4 col-sm-12 mb-30">
                                        <div class="single-product-carousel">
                                            <div class="single_tranding">
                                                <a href="{{url('product')}}/${valueOne.slug}">
                                                    <img src="{{url('public/')}}/${valueOne.featured_img}" alt="" class="product_img${valueOne.id}">
                                                    <div class="des">
                                                        <p class="title product_title${valueOne.id}">${valueOne.name}</p>
                                                        <p class="brand product_brand${valueOne.id}">${valueOne.category.name}</p>
                                                        <p class="price product_price${valueOne.id}">${valueOne.unit_price}</p>
                                                    </div>
                                                </a>
                                        <div class="des-hover">
                                             <span onclick="showAddToCartModal(${valueOne.id})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span>
                                                            @if(Auth::check())
                            <span data-toggle="tooltip"  onclick="addToCompareList(${valueOne.id})" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                                            @else
                            <span onclick="addToCompare(${valueOne.id})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                                            @endif
                            <span onclick="addToWishList(${valueOne.id})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-heart"></i></span>
                                         </div>
                                            </div>
                                        </div>
                                    </div>`);
                        });
                    },
                    error: function() {
                        console.log(data);
                    }
                });
            });
            //female product
            $('#female_product').on('click',function (e) {
                e.preventDefault();
                let femaleId =$('#female_product').children().val();
                $('.productView').empty();
                $.ajax({
                    type: 'GET',
                    url: '{{url('category-femaleProducts')}}'+'/'+'{{@$category->id}}',
                    success: function (data) {
                        // $('.show_content').show();
                        $.each(data, function (indexOne, valueOne) {
                            $('.productView').append(` <div class="col-xl-4 col-lg-4 col-sm-12 mb-30">
                                        <div class="single-product-carousel">
                                            <div class="single_tranding">
                                                <a href="{{url('product')}}/${valueOne.slug}">
                                                    <img src="{{url('public/')}}/${valueOne.featured_img}" alt="" class="product_img${valueOne.id}">
                                                    <div class="des">
                                                       <p class="title product_title${valueOne.id}">${valueOne.name}</p>
                                                        <p class="brand product_brand${valueOne.id}">${valueOne.category.name}</p>
                                                        <p class="price product_price${valueOne.id}">${valueOne.unit_price}</p>
                                                     </div>
                                                </a>
                                                    <div class="des-hover">
                                                     <span onclick="showAddToCartModal(${valueOne.id})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span>
                                                            @if(Auth::check())
                            <span data-toggle="tooltip"  onclick="addToCompareList(${valueOne.id})" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                                            @else
                            <span onclick="addToCompare(${valueOne.id})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                                            @endif
                            <span onclick="addToWishList(${valueOne.id})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-heart"></i></span>

                                                    </div>

                                            </div>
                                        </div>
                                    </div>`);
                        });
                    },
                    error: function() {
                        console.log(data);
                    }
                });
            });
            //unisex product
            $('#unisex_product').on('click',function (e) {
                e.preventDefault();
                let unisex =$('#unisex_product').children().val();
                $('.productView').empty();
                $.ajax({
                    type: 'GET',
                    url: '{{url('category-unisexProducts')}}'+'/'+'{{@$category->id}}',
                    success: function (data) {
                        // $('.show_content').show();
                        $.each(data, function (indexOne, valueOne) {
                            $('.productView').append(` <div class="col-xl-4 col-lg-4 col-sm-12 mb-30">
                                        <div class="single-product-carousel">
                                            <div class="single_tranding">
                                                <a href="{{url('product')}}/${valueOne.slug}">
                                                    <img src="{{url('public/')}}/${valueOne.featured_img}" alt="" class="product_img${valueOne.id}">
                                                    <div class="des">
                                                       <p class="title product_title${valueOne.id}">${valueOne.name}</p>
                                                        <p class="brand product_brand${valueOne.id}">${valueOne.category.name}</p>
                                                        <p class="price product_price${valueOne.id}">${valueOne.unit_price}</p>
                                                     </div>
                                                </a>
                                                    <div class="des-hover">
                                                     <span onclick="showAddToCartModal(${valueOne.id})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span>
                                                            @if(Auth::check())
                            <span data-toggle="tooltip"  onclick="addToCompareList(${valueOne.id})" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                                            @else
                            <span onclick="addToCompare(${valueOne.id})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                                            @endif
                            <span onclick="addToWishList(${valueOne.id})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-heart"></i></span>

                                                       </div>
                                            </div>
                                        </div>
                                    </div>`);
                        });
                    },
                    error: function() {
                        console.log(data);
                    }
                });
            });
        })
    </script>

    <script>
        $( function() {
            $( "#slider-range" ).slider({
                range: true,
                min: 0,
                max: 2000,
                values: [ 100, 600 ],
                slide: function( event, ui ) {
                    $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                    var minValue=ui.values[ 0 ];
                    var maxValue= ui.values[ 1 ];
                    var bId = <?=$categoryName->id;?>;
                    // alert(bId);
                    $('.productView').empty();
                    $.ajax({
                        type: 'GET',
                        url: '{{url('catRengeSearch')}}'+'/'+minValue+'/'+maxValue+'/'+ bId,
                        success: function (data) {
                            $('.productView').empty();
                            $.each(data, function (indexOne, valueOne) {
                                $('.productView').append(` <div class="col-xl-4 col-lg-4 col-sm-12 mb-30">
                                        <div class="single-product-carousel">
                                            <div class="single_tranding">
                                                <a href="{{url('product')}}/${valueOne.slug}">
                                                    <img src="{{url('public/')}}/${valueOne.featured_img}" alt="" class="product_img${valueOne.id}">
                                                    <div class="des">
                                                        <p class="title product_title${valueOne.id}">${valueOne.name}</p>
                                                        <p class="brand product_brand${valueOne.id}">${valueOne.category.name}</p>
                                                        <p class="price product_price${valueOne.id}">${valueOne.unit_price}</p>
                                                    </div>
                                                </a>
                                        <div class="des-hover">
                                             <span onclick="showAddToCartModal(${valueOne.id})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span>
                                                            @if(Auth::check())
                                <span data-toggle="tooltip"  onclick="addToCompareList(${valueOne.id})" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                                            @else
                                <span onclick="addToCompare(${valueOne.id})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                                            @endif
                                <span onclick="addToWishList(${valueOne.id})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-heart"></i></span>
                                         </div>
                                            </div>
                                        </div>
                                    </div>`);
                            });

                        },
                        error: function() {
                            console.log(data);
                        }
                    });
                }
            });
            $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
                " - $" + $( "#slider-range" ).slider( "values", 1 ) );
        } );
    </script>
@endpush
