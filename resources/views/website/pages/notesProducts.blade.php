@extends('website.layouts.master')
@section('title',@$notes->name)
@section('content')

    <!-- Page Tittle Start -->
    <div class="page_tittle_area text-center">
       <div class="container">
         <div class="page-tittle mb-50 pt-20 pb-20">
            <div class="row">
                <div class="col-lg-12">
                    <h2>{{@$notes->name}} </h2>
                </div>
            </div>
         </div>
       </div>
    </div>
    <!-- Page Tittle End -->

    <!-- Notes Details Product Area -->
    <div class="notes-details-product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-wrapper">
                        <div class="product-img text-center">
                            <img src="{{asset('public/website/img/single-nots-img.jpg')}}" alt="">
                            <div class="inner-img-caption">
                                <h4>{{@$notes->name}} </h4>
                                <p>Citrus bergamia; Other names: Bergamot Orange</p>
                                <span>Group: {{@$notes_categories->name}}</span>
                            </div>
                            <!-- Single smoll Img -->
                            <div class="inner-img-smoll d-flex justify-content-between">
                            <div class="single-smoll-img">
                                    <img src="{{asset('public/website/img/nots-img1.jpg')}}" alt="">
                            </div>
                            <div class="single-smoll-img">
                                    <img src="{{asset('public/website/img/nots-img2.jpg')}}" alt="">
                            </div>
                            <div class="single-smoll-img">
                                    <img src="{{asset('public/website/img/nots-img3.jpg')}}" alt="">
                            </div>
                            </div>
                        </div>
                        <div class="product-details mb_30">

                            <p><strong>Odor profile:</strong> {{@$notes->description}}</p>
                         </div>
                    </div>
                </div>
            </div>

              <!-- single box -->
            <div class="row">
                    @forelse($products as $row)
                        <div class="col-xl-6 col-md-6">
                            <div class="perfumer-perfume-item mb_40 mt_30">
                                <div class="top">
                                    <img src="{{url('public/'.$row->thumbnail_img)}}" alt="" class="img img-responsive" style="width: 100px;">
                                    <h4><a href="{{url('product',$row->slug)}}" class="cl-primary">{{@$row->name}} </a></h4>
                                    @php
                                        $reviews = DB::table('reviews')->where('product_id',16)->groupBy('product_id')->count();

                                    @endphp
                                    <a href="{{url('product',$row->slug)}}" class="comment cl-primary"><span>{{$reviews}} <i class="fa fa-comment"></i></span></a>
                                </div>
                                <div class="bottom">
                                    <span>{{@$row->gender}}</span>
                                    <span>{{home_discounted_base_price($row->product_id)}}</span>
                                </div>
                            </div>
                        </div>
                    @empty
                @endforelse
            </div>
        </div>
    </div>
    <!-- Notes Details Product End -->

@endsection

@push('css')

@endpush

@push('script')

@endpush
