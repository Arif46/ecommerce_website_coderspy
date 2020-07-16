@extends('website.layouts.master')
@section('title','Compare List')
@section('content')


<body  class="body-bg2">


    <!-- Page Tittle Start -->
    <div class="page_tittle_area text-center">
        <div class="container">
            <div class="page-tittle pt-20 pb-20">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Compare Spray Product</h2>
                    <span>Quick Wiew</span>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Page Tittle End -->

    <!-- Single product brand  -->
    <div class="section_padding quick-view">
        <div class="container container-special">
             <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cat-product-carousel2 owl-carousel">
                            @if(Session::has('compare'))
                                    @forelse(Session::get('compare') as $key => $item)
                                        <div class="single-product-carousel">
                                            <div class="single_tranding">
                                                <a href="{{ route('product', \App\Product::find($item)->slug) }}">
                                                    <img src="{{url('public/')}}/{{(\App\Product::find($item)->featured_img ) }}" alt="asa">
                                                </a>
                                                <div class="add">
                                                    <div class="des des2">
                                                        <p class="price">{{ single_price(\App\Product::find($item)->unit_price) }}</p>
                                                    </div>
                                                    <div class="des-hover des-hover2">
                                                        <span onclick="showAddToCartModal({{ $item }})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span>

                                                        <span onclick="addToWishList({{ $item }})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart"></i></span>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="product-single-looks mb_40">
                                                <ul>
                                                    <li class="p-head"><a href="{{ route('product', \App\Product::find($item)->slug) }}" class="text-dark">{{ \App\Product::find($item)->name }}</a> </li>
                                                    <li>Brand: <span>{{ \App\Product::find($item)->brand->name }}</span></li>
                                                    <li>Stock: <span>{{ \App\Product::find($item)->current_stock }}  </span></li>
                                                    <li>Gender: <span>{{ \App\Product::find($item)->gender }}</span></li>
                                                    <li>Quantity: <span>{{ \App\Product::find($item)->capacity }}</span></li>
                                                    <li>Price: <span> {{ single_price(\App\Product::find($item)->unit_price) }}</span></li>
                                                    <li>Perfumer: <span>{{ \App\Product::find($item)->perfumer->name }}</span></li>
                                                    <li>Pack Type: <span>{{ \App\Product::find($item)->pack_type }}</span></li>
                                                    @php
                                                        $productId = \App\Product::select('id')->find($item);
                                                        $topNote = \App\ProductTopNote::where('product_id',$productId->id)->get();

                                                        foreach ($topNote as $t_note){
                                                            $topNotes = \App\TopNote::select('name')->find($t_note);
                                                        }
                                                    @endphp
                                                    @if(!empty($topNotes))
                                                        <li>Top Note: <span>
                                                            @foreach($topNotes as $top_n)
                                                                    {{$top_n->name}}
                                                                @endforeach
                                                        </span></li>
                                                    @endif

                                                    @php
                                                        $productId = \App\Product::select('id')->find($item);
                                                        $midNote = \App\ProductMiddleNote::where('product_id',$productId->id)->get();

                                                        foreach ($midNote as $m_note){
                                                            $midNotes = \App\MiddleNote::select('name')->find($m_note);
                                                        }
                                                    @endphp
                                                    @if(!empty($midNotes))
                                                        <li>Mid Note: <span>
                                                            @foreach($midNotes as $mid_n)
                                                                    {{$mid_n->name}}
                                                                @endforeach
                                                        </span></li>
                                                    @endif

                                                    @php
                                                        $productId = \App\Product::select('id')->find($item);
                                                        $baseNote = \App\ProductBaseNote::where('product_id',$productId->id)->get();

                                                        foreach ($baseNote as $t_note){
                                                            $baseNotes = \App\BaseNote::select('name')->find($t_note);
                                                        }
                                                    @endphp
                                                    @if(!empty($baseNotes))
                                                        <li>Base Note: <span>
                                                            @foreach($baseNotes as $base_n)
                                                                    {{$base_n->name}}
                                                                @endforeach
                                                        </span></li>
                                                    @endif
                                                    <li> Rating:
                                                        <div class="star-rating star-rating-sm mb-1">
                                                        {{ renderStarRating(\App\Product::find($item)->rating) }}
                                                    </div>
                                                    <li>
                                                    <li><u>Description:</u></li>
                                                    <li><span>{{substr( \App\Product::find($item)->description,0,200)}} <a href="javacsript:void()" data-jumpslide="{{ \App\Product::find($item)->id}}" data-goto-page="newpage"  data-toggle="modal" data-target="#more{{ \App\Product::find($item)->id}}" style="color:#8EC63F;">...more</a></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    @empty
                                    @endforelse

                             @else
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                        <div class="col-md-4">

                            <p style="font-size: 25px;font-weight: 600;}">{{__('Your comparison list is empty')}}</p>
                        </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
    <!-- /Single product brand  -->
    <!-- barcode Modal Start -->
    @if(Session::has('compare'))
        @forelse(Session::get('compare') as $proId)
            @php
                $product = \App\Product::where('id',$proId)->first();
            @endphp
<div class="modal fade cs_modal medium_modal_width" id="more{{$product->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 20px;background:rgba(247,250,252,0.7);">


                <div class="modal-body">
                    <div class="input_wrap" style="border-radius:5px;text-align: justify;margin: 20px;">
                        <b><h5 style="text-align: center;"><u>Product Description</u></h5></b>

                       <p id="product_description">{{$product->description}}</p>
                    </div>
                </div>
        </div>
    </div>
</div>
        @empty
        @endforelse
@endif
<!-- barcode Modal End -->
</body>

@endsection

@push('css')

@endpush

@push('script')
@endpush
