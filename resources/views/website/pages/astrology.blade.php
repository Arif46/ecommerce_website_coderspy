@extends('website.layouts.master')
@section('title','Astrology')
@section('content')
<<<<<<< HEAD
<body class="body-bg3">
=======


<body class="body-bg3">

>>>>>>> 0985d043d726e467d7e3aaeb67a5ea1a2c2de9ef
    <!-- Page Tittle Start -->
    <div class="page_tittle_area text-center">
       <div class="container">
         <div class="page-tittle mb-50 pt-20 pb-20">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Astrology</h2>
                </div>
            </div>
         </div>
       </div>
    </div>
    <!-- Page Tittle End -->

<<<<<<< HEAD
    <div class="Trending_area">
=======
    <div class="Trending_area ">
>>>>>>> 0985d043d726e467d7e3aaeb67a5ea1a2c2de9ef
        <div class="container">
            <div class="row justify-content-center">
                <div class="section_title text-center mb_30">

                </div>
            </div>
            <div class="tranding_prouct">
                   <div class="container container-special">
                <div class="row">
                    @forelse($astrology as $phylosophy)
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single_tranding mb-30">
                                <a href="{{ route('product', $phylosophy->slug) }}">
                                    <img src="{{ url('public/'.$phylosophy->featured_img) }}" alt="">
                                    <div class="des">
                                        <p class="title">{{$phylosophy->name}}</p>
                                        <p class="brand">{{$phylosophy->perfumer->name}}</p>
                                        <p class="price">{{home_base_price($phylosophy->id)}}</p>
                                    </div>
                                </a>
                                <div class="des-hover">

                                    <span onclick="showAddToCartModal({{ $phylosophy->id }})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span>
                                    <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                    <span onclick="addToWishList({{ $phylosophy->id }})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart"></i></span>
                                </div>

                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

</body>

@endsection

@push('css')

@endpush

@push('script')

@endpush
