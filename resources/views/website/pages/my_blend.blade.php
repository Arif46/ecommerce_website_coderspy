@extends('website.layouts.master')
@section('title','My Blends')
@section('content')
<body class="body-bg3">
    <section class="py-4 profile">
        <div class="container">
            <div class="perfumers-wrapper">
                <div class="row cols-xs-space cols-sm-space cols-md-space">
                    <div class="col-lg-3 d-none d-lg-block">
                        @if(Auth::user()->user_type == 'seller')
                            @include('frontend.inc.seller_side_nav')
                        @elseif(Auth::user()->user_type == 'customer')
                            @include('frontend.inc.customer_side_nav')
                        @endif
                    </div>
                    <div class="col-lg-9">
                        <div class="main-content">
                            <!-- Page title -->
                            <div class="page-title">
                                <div class="row align-items-center">
                                    <div class="col-md-6 col-12">
                                        <h2 class="heading heading-6 text-capitalize strong-600 mb-0">
                                            {{__('My Blends')}}
                                        </h2>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="float-md-right">
                                            <ul class="breadcrumb">
                                                <li><a href="{{ route('home') }}">{{__('Home')}}</a></li>
                                                <li><a href="{{ route('customerDashboard') }}">{{__('Dashboard')}}</a></li>
                                                <li class="active"><a href="{{ url('customer-wishlists') }}">{{__('Wishlist')}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Wishlist items -->

                            <div class="row shop-default-wrapper shop-cards-wrapper shop-tech-wrapper mt-4">
                                @foreach ($myblends as $key => $wishlist)
                                    @if ($wishlist->product != null)
                                        <div class="col-xl-4 col-6" id="wishlist_{{ $wishlist->id }}">
                                            <div class="card card-product mb-3 product-card-2">
                                                <div class="card-body p-3">
                                                    <div class="card-image">
                                                        <div class="row">
                                                            <div class="col-md-10">
                                                                <a href="{{ route('product', $wishlist->product->slug) }}" class="d-block" >
                                                                    <img src="{{ url('public/')}}/{{$wishlist->product->featured_img }}" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="col-md-2">

                                                                <a href="#" style="color:#000;" class="link link--style-3" data-toggle="tooltip" data-placement="top" title="Remove from myblend" onclick="removeFromWishlist({{ $wishlist->id }})">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h2 class="heading heading-6 strong-600 mt-2 text-truncate-2">
                                                        <a href="{{ route('product', $wishlist->product->slug) }}">{{ $wishlist->product->name }}</a>
                                                    </h2>
                                                    <div class="star-rating star-rating-sm mb-1">
                                                        {{ renderStarRating($wishlist->product->rating) }}
                                                    </div>
                                                    <div class="mt-2">
                                                        <div class="price-box">
                                                            @if(home_base_price($wishlist->product->id) != home_discounted_base_price($wishlist->product->id))
                                                                <del class="old-product-price strong-400">{{ home_base_price($wishlist->product->id) }}</del>
                                                            @endif
                                                            <span class="product-price strong-600">{{ home_discounted_base_price($wishlist->product->id) }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-3">
                                                    <div class="product-buttons">
                                                        <div class="row align-items-center">
                                                            <div class="col-2">
                                                            </div>
                                                            <div class="col-10">
                                                                <button type="button" style="background-color: #8EC63F!important;margin-left: -12%;" class="btn btn-block btn-base-1 btn-circle " onclick="showAddToCartModal({{ $wishlist->product->id }})">
                                                                    <i class="la la-shopping-cart mr-2"></i>{{__('Add to cart')}}
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                            <div class="pagination-wrapper py-4">
                                <ul class="pagination justify-content-end">

                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="addToCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
            <div class="modal-content position-relative">
                <div class="c-preloader">
                    <i class="fa fa-spin fa-spinner"></i>
                </div>
                <button type="button" class="close absolute-close-btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div id="addToCart-modal-body">

                </div>
            </div>
        </div>
    </div>
</body>

@endsection

@push('css')

@endpush

@push('script')
    <script type="text/javascript">
        function removeFromWishlist(id){
            $.post('{{ route('myblend.remove') }}',{_token:'{{ csrf_token() }}', id:id}, function(data){
                $('#wishlist').html(data);
                $('#wishlist_'+id).hide();
                showFrontendAlert('success', 'Item has been renoved from myblend');
            })
        }
    </script>
@endpush
