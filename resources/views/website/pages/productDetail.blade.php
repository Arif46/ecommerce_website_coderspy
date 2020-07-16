@extends('website.layouts.master')
@section('title',$detailedProduct->name)
@section('content')

    <!-- Page Tittle Start -->
    <div class="page_tittle_area text-center">
       <div class="container">
         <div class="page-tittle mb-50">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Product Details</h2>
                </div>
            </div>
         </div>
       </div>
    </div>
    <!-- Page Tittle End -->

    <div class="section_padding">
        <div class="container">
            <div class="row mb-60">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="product-details-img">
                        <div class="row">
                            <div class="col-2">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    @foreach (json_decode($detailedProduct->photos) as $key => $photo)
                                        <a class="nav-link @if($key==0) active @endif " id="v-pills-home-tab" data-toggle="pill" href="{{'#'.$key}}" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                            <img src="{{url('public/')}}/{{$photo}}" alt="">
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="tab-content" id="v-pills-tabContent">
                                    @foreach (json_decode($detailedProduct->photos) as $key => $photo)
                                        <div class="tab-pane fade @if($key==0)show active @endif" id="{{$key}}" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <img class="magniflier" src="{{url('public/')}}/{{$photo}}" alt="">
                                        </div>
                                    @endforeach
                                    <div class="product-toggle-right">
                                        <a href=""><i class="fa fa-trophy"></i></a>
                                        <a href=""><i class="fa fa-thumbs-o-up"></i></a>
                                        <a href=""><i class="fa fa-thumbs-o-down"></i></a>
                                        <a href=""><i class="fa fa-gift"></i></a>
                                        <a href=""><i class="fa fa-bookmark-o"></i></a>
                                        <a href=""><i class="fa fa-address-book-o"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="product-details-content">
                        <h2>{{ __($detailedProduct->name) }}</h2>
                        <h6>Barcode :{{ __($detailedProduct->barcode) }}</h6>
                        <div class="brand">
                            <a href="">{{__($detailedProduct->category->name)}}</a> | <a href="">{{__($detailedProduct->brand->name)}}</a>
                        </div>
                        @php
                            $qty = 0;
                            // if($detailedProduct->variant_product){
                            //     foreach ($detailedProduct->stocks as $key => $stock) {
                            //         $qty += $stock->qty;
                            //     }
                            // }
                            // else{
                                
                            // }
                            $qty = $detailedProduct->current_stock;
                        @endphp

                        @if ($qty > 0)
                            <div class="stock">In Stock</div>
                        @else
                            <div class="stock text-danger">Out Of Stock</div>
                        @endif
                        @if(home_price($detailedProduct->id) != home_discounted_price($detailedProduct->id))
                            <div class="price">
                                {{ home_discounted_base_price($detailedProduct->id) }}
                                @if(home_base_price($detailedProduct->id) != home_discounted_base_price($detailedProduct->id))
                                    <del class="d-block">{{ home_base_price($detailedProduct->id) }}</del>
                                @endif

                            </div>
                        @endif

                        <form id="option-choice-form">
                            @csrf
                            <input type="hidden" name="id" value="{{ $detailedProduct->id }}">
                            @if($detailedProduct->choice_options)
                                @foreach (json_decode($detailedProduct->choice_options) as $key => $choice)
                                    <div class="row no-gutters">
                                        <div class="col-2">
                                            <div class="product-description-label mt-2 ">{{ \App\Attribute::find($choice->attribute_id)->name }}:</div>
                                        </div>
                                        <div class="col-10">
                                            <ul class="list-inline checkbox-alphanumeric checkbox-alphanumeric--style-1 mb-2">
                                                @foreach ($choice->values as $key => $value)
                                                    <li>
                                                        <input type="radio" id="{{ $choice->attribute_id }}-{{ $value }}" name="attribute_id_{{ $choice->attribute_id }}" value="{{ $value }}" @if($key == 0) checked @endif>
                                                        <label for="{{ $choice->attribute_id }}-{{ $value }}">{{ $value }}</label>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            @endif


                        <!-- Quantity + Add to cart -->
                            <div class="row no-gutters">
                                <div class="col-2">
                                    <div class="product-description-label mt-2">{{__('Quantity')}}:</div>
                                </div>
                                <div class="col-10">
                                    <div class="product-quantity d-flex align-items-center">
                                        <div class="input-group input-group--style-2 pr-3" style="width: 160px;">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-number" type="button" data-type="minus" data-field="quantity">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                </span>
                                            <input type="text" name="quantity" class="form-control input-number text-center" placeholder="1" value="1" min="1" max="10">
                                            <span class="input-group-btn">
                                                    <button class="btn btn-number" type="button" data-type="plus" data-field="quantity">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </span>
                                        </div>
                                        <div class="avialable-amount text-success">(<span id="available-quantity">{{ $qty }}</span> {{__('available')}})</div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </form>

                        <div class="btns">
                            @if ($qty > 0)
                                <a  class="add-to-cart" onclick="addToCart()">Add to Cart</a>
                                <a  class="buy-now" onclick="buyNow()">Quick Shop</a>
                            @else
                                <a  class="buy-now">Stock Out</a>
                            @endif
                        </div>
                        <div class="overview">
                            <h3>Overview:</h3>
                            <div class="row">
                                <div class="col-md-4 mt-3"><p><b>Gender :</b></p></div>
                                <div style="margin-left: -125px;" class="col-md-8">
                                    <div class="pretty p-icon p-curve p-jelly">
                                        <input type="radio" name="gender" disabled {{$detailedProduct->gender == 'Male'?'checked':''}}>
                                        <div class="state p-success">
                                            <i class="icon mdi mdi-check"></i>
                                            <label> Male</label>
                                        </div>
                                    </div>
                                    <div class="pretty p-icon p-curve p-jelly">
                                        <input type="radio" name="gender" disabled {{$detailedProduct->gender == 'Female'?'checked':''}}>
                                        <div class="state p-info">
                                            <i class="icon mdi mdi-check"></i>
                                            <label> Female</label>
                                        </div>
                                    </div>
                                    <div class="pretty p-icon p-curve p-jelly">
                                        <input type="radio" name="gender" disabled {{$detailedProduct->gender == 'Unisex'?'checked':''}}>
                                        <div class="state p-warning">
                                            <i class="icon mdi mdi-check"></i>
                                            <label> Unisex</label>
                                        </div>
                                    </div>
                                </div>
                            {{-- @dd($detailedProduct)--}}
                            <!-- end gender section -->
                                <div class="col-md-6 mt-3 mt_fix"><p><b>Product Lenght :</b></p></div>
                                <div style="margin-left: -160px;" class="col-md-6 mtc_fix">
                                    <div class="pretty p-icon p-curve p-jelly">
                                        <input type="radio" name="length" checked>
                                        <div class="state p-success">
                                            <i class="icon mdi mdi-check"></i>
                                            <label>{{$detailedProduct->poduct_length}}cm</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3 mt_fix"><p><b>Product Height :</b></p></div>
                                <div style="margin-left: -160px;" class="col-md-6 mtc_fix">
                                    <div class="pretty p-icon p-curve p-jelly">
                                        <input type="radio" name="height" checked>
                                        <div class="state p-success">
                                            <i class="icon mdi mdi-check"></i>
                                            <label>{{$detailedProduct->product_height}}cm</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3 mt_fix"><p><b>Product Width :</b></p></div>
                                <div style="margin-left: -160px;" class="col-md-6 mtc_fix">
                                    <div class="pretty p-icon p-curve p-jelly">
                                        <input type="radio" name="width" checked>
                                        <div class="state p-success">
                                            <i class="icon mdi mdi-check"></i>
                                            <label>{{$detailedProduct->product_width}}cm</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- end size section -->
                                <div class="col-md-4 mt-3 mt_fix"><p><b>Lunch Year :</b></p></div>
                                @php
                                    $timestamp = strtotime($detailedProduct->launch_date);
                                @endphp
                                <div style="margin-left: -100px;" class="col-md-1 mtc_fix">
                                    <div class="pretty p-icon p-curve p-jelly">
                                        <input type="radio" name="year" checked >
                                        <div class="state p-info">
                                            <i class="icon mdi mdi-check"></i>
                                            <label> {{2020}}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12"></div>
                                <div style="margin-left: 0px" class="col-md-4 mt-3 mt_fix"><p style="margin-left: 0px;"><b>Sample :</b></p></div>
                                <div style="margin-left: -110px;" class="col-md-1 mtc_fix">
                                    <div class="pretty p-icon p-curve p-jelly">
                                        <input type="radio" name="sample" checked >
                                        <div class="state {{$detailedProduct->sample == 1?'p-warning':'p-danger'}}">
                                            <i class="icon mdi mdi-check"></i>
                                            <label> {{$detailedProduct->sample == 1?'Yes':'No'}}</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- end year & sample section -->
                                <div class="col-md-12"></div>
                                <div class="col-md-6 mt-3 mt_fix"><p><b>Subscription available :</b></p></div>
                                <div style="margin-left: -125px;" class="col-md-6 mtc_fix">
                                    <div class="pretty p-icon p-curve p-jelly">
                                        <input type="radio" name="subscription" checked >
                                        <div class="state {{$detailedProduct->subscription == 1?'p-primary':'p-danger'}}">
                                            <i class="icon mdi mdi-check"></i>
                                            <label> {{$detailedProduct->subscription == 1?'Yes':'No'}}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3 mt_fix"><p><b>Pack Type :</b></p></div>
                                <div style="margin-left: -108px;" class="col-md-3 mtc_fix">
                                    <div class="pretty p-icon p-curve p-jelly">
                                        <input type="radio" name="pack_type" checked >
                                        <div class="state p-info">
                                            <i class="icon mdi mdi-check"></i>
                                            <label> {{$detailedProduct->pack_type}}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12"></div>
                                <div class="col-md-8 mt-3"><p><b>Perfumer Name :  <a target="_blank" href="{{url('perfumer/')}}/{{$detailedProduct->perfumer->id}}">{{$detailedProduct->perfumer->name}}</a></b></p></div>
                            </div>

                            <!-- end subscription section -->

                            <div class="note">
                                <h4>Notes</h4>
                                @if($top->count() >0)
                                    <h6 class="text-center">Top Notes</h6>
                                @else
                                @endif
                                <div class="row">
                                    @foreach($top as $t_note)
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="singlenote">
                                                <img src="{{url('/public')}}/{{$t_note->image}}" alt="">
                                                <p>{{$t_note->name}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                @if($mid->count() >0)
                                    <h6 class="text-center">Mid Notes</h6>
                                @else
                                @endif
                                <div class="row">
                                    @foreach($mid as $m_note)
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="singlenote">
                                                <img src="{{url('/public')}}/{{$m_note->image}}" alt="">
                                                <p>{{$m_note->name}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                @if($top->count() >0)
                                    <h6 class="text-center">Base Notes</h6>
                                @else
                                @endif
                                <div class="row">
                                    @foreach($base as $b_note)
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="singlenote">
                                                <img src="{{url('/public')}}/{{$b_note->image}}" alt="">
                                                <p>{{$b_note->name}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                @if($top->count() ==0 && $base->count() ==0 && $mid->count() ==0)
                                    <h6 class="text-left">No notes abailable !!</h6>
                                @else
                                @endif
                            </div>
                            @if($detailedProduct->pdf === 'NULL')
                               @else
                                <div class="policy">
                                    <p> <a href="{{url('/public')}}/{{$detailedProduct->pdf}}">See PDF</a></p>
                                </div>
                            @endif
                            <div class="policy">
                                <p>Click to find out our <a href="">Shipping Policy</a> and <a href="">Return Policy</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="product-social-share">
                        <h4>Social Share</h4>
                        @foreach(App\GeneralSetting::all() as $social)
                        <a href="{{ $social->google_plus }}"><i class="fa fa-envelope"></i></a>
                        <a href="{{ $social->facebook }}"><i class="fa fa-facebook"></i></a>
                        <a href="{{ $social->twitter }}"><i class="fa fa-twitter"></i></a>
                        <a href="{{ $social->linkedin }}"><i class="fa fa-linkedin"></i></a>
                        <a href="{{ $social->pinterest }}"><i class="fa fa-pinterest"></i></a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="product-details-description">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Descriptions</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                                <p> {!! $detailedProduct->description !!}</p>
                                <table class="table table-bordered mb-60">
                                    <tbody>
                                    <tr>
                                        <td>ALCOHOL</td>
                                        <td>{{$detailedProduct->alcohol}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            @if($detailedProduct->video_link)
                                @php
                                    preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $detailedProduct->video_link, $matches);
                                @endphp
                                <iframe height="350" width="100%" src="https://www.youtube.com/embed/{{$matches[1]}}" frameborder="0" allowfullscreen></iframe>
                            @endif



                            <div class="product-reviews">
                                <h4>Customer Reviews</h4>
                                <div class="row">
                                    @forelse($reviews as $review)
                                        <div class="col-xl-4">
                                            <p>Rating <span>
                                                    <i class="fa fa-star @if($review->rating > 0) count_rating @endif
                                                        rating_color"></i>
                                                    <i class="fa fa-star @if($review->rating > 1) count_rating @endif
                                                        rating_color"></i>
                                                    <i class="fa fa-star  @if($review->rating > 2) count_rating @endif
                                                        rating_color"></i>
                                                    <i class="fa fa-star @if($review->rating > 3) count_rating @endif
                                                        rating_color"></i>
                                                    <i class="fa fa-star @if($review->rating > 4) count_rating @endif
                                                        rating_color"></i>
                                                </span></p>
                                        </div>
                                        <div class="col-xl-6">
                                            <p>{{$review->comment}}</p>
                                            <p>By {{$review->name}} Posted on {{\Carbon\Carbon::parse($review->created_at)->format('l M, d, Y')}}</p>
                                        </div>
                                    @empty
                                        <div class="col-xl-12">
                                        </div>
                                    @endforelse

                                </div>

                                <div class="col-xl-6">

                                    <form action="{{route('reviews.store')}}" method="post">
                                        <div class="col-xl-12">
                                            @php
                                                $exist ='';
                                            @endphp
                                            @foreach(App\Review::where('user_id',Auth()->id())
                                                                ->where('product_id',$detailedProduct->id)
                                                                ->get()
                                            as $review)
                                              @php 
                                                $exist = 1;
                                              @endphp
                                            @endforeach 
                                            <p>YOU'RE REVIEWING:</p>
                                            <p>{{ __($detailedProduct->name) }}</p>
                                            <div class="{{ $exist==1?'d-none':''}}">
                                                
                                                <p><span>Your Rating*</span></p>
                                                <fieldset class="starability-basic">
                                                    <input type="radio" id="no-rate" class="input-no-rate" name="rating" value="0" checked aria-label="No rating." />
                                                
                                                    <input type="radio" id="rate1" name="rating" value="1" required/>
                                                    <label for="rate1">1 star.</label>
                                                
                                                    <input type="radio" id="rate2" name="rating" value="2" required/>
                                                    <label for="rate2">2 stars.</label>
                                                
                                                    <input type="radio" id="rate3" name="rating" value="3" required/>
                                                    <label for="rate3">3 stars.</label>
                                                
                                                    <input type="radio" id="rate4" name="rating" value="4" required/>
                                                    <label for="rate4">4 stars.</label>
                                                
                                                    <input type="radio" id="rate5" name="rating" value="5" required/>
                                                    <label for="rate5">5 stars.</label>
                                                
                                                    <span class="starability-focus-ring"></span>
                                                </fieldset> 
                                            </div>
                                            
                                        </div>
                                        @csrf
                                        @if(Auth::check())
                                            <input type="hidden" name="product_id" value="{{$detailedProduct->id}}">
                                            <input type="hidden" name="user_id" placeholder="Nickname*" value="{{Auth::user()->id}}">
                                            <input type="text" name="summary" placeholder="Summary*" required>
                                            <textarea rows="3" name="comment" placeholder="Review*" required></textarea>
                                            <button type="submit">Submit Review</button>
                                        @else
                                            <input type="hidden" name="product_id" value="{{$detailedProduct->id}}">
                                            <input type="text" name="summary" placeholder="Summary*" required>
                                            <textarea rows="3" name="comment" placeholder="Review*" required></textarea>
                                            <button onclick="alertMessage()" id="please_login" type="button">Submit Review</button>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="section_padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-title">
                        <h2>Related Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($related as $product)
                    <div class="col-xl-3 col-lg-3 col-sm-6 mb-30">
                        <div class="single-product-carousel">
                            <div class="single_tranding">
                                <a href="{{ route('product', $product->slug) }}">
                                    <img src="{{ url('public/'.$product->featured_img) }}" alt="">
                                    <div class="des">
                                        <p class="brand">{{$product->brand->name}}</p>
                                        <p class="title">{{$product->name}}</p>
                                        <p class="price">{{home_base_price($product->id)}} </p>
                                    </div>
                                    <div class="des-hover">
                                        <span onclick="showAddToCartModal({{ $product->id }})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span>
                                        <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                        <span onclick="addToWishList({{ $product->id }})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>
        </div>
    </div>


@endsection
@push('css')
    <link rel="stylesheet" href="{{url('public/ratings/product-rating.css')}}">
    <style>
        .pretty{
            margin-top: 22px!important;
        }
        .mt_fix{
            margin-top: -0px!important;
        }
        .mtc_fix{
            margin-top: -17px!important;
        }
        .fa-star{
            color:#ddd;
        }
        .count_rating{
            color:#f5bd23;
        }
    </style>
@endpush
@push('script')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
    <script src="{{ url('public/frontend/js/magnifier.js') }}" async=""></script>
@endpush
