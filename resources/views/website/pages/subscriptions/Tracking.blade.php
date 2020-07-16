@extends('website.layouts.master')
@section('title','Order History')
@section('content')
    <style>
        .subscription-profile{
            max-width:100px;
            height:auto;
            padding:5px;
        }
        .subscription-title{
            font-weight:bold;
            text-align: left;
        }
        .subscription-menu{
            color:black;
            padding: 5px;
        }

        .btn{
            border:0px;
            border-radius: 0px;
            text-align: center;
            margin-top: 4%;
            height: 50px;
            padding-top: 8px;
            font-weight: bolder;
            background-color: #cc3633;
        }
        .add_all_btn{
            border:0px;
            border-radius: 0px;
            text-align: center;
            margin-top: 2%;
            height: 50px;
            width: 180px;
            padding-top: 8px;
            font-weight: bolder;
            background-color: #cc3633;
        }
        .head-text{
            font-size: 22px;
        }
        .base-text{
            padding-top: -15px;
        }
        .product-name{
            font-size:14px;
            font-weight:600;
            padding-top: 5px;
        }
        .boxDesign{
            padding: 18px 15px 23px 0px;
            box-shadow: 0 2px 10px rgba(20,26,51,.08);
        }
        #tr_month{
            font-size: 23px;
            font-weight: 600;
        }
        .tr_status{
            font-size: 16px;
        }
        .tr_delivery{
            font-size: 14px;
            font-weight: 600;
        }
        .tr_number{
            font-size: 24px;
            font-weight: 700;
        }
        .tr_num{
            font-size: 22px;
            font-weight: 700;
            text-decoration: underline;
        }
        .tr_brief{
            font-size: 25px!important;
            font-weight: 500!important;
        }
        .tr_brief_middle{
            color: #000!important;
            text-align: center!important;
            font-size: 27px!important;
            font-weight: 700!important;
        }
        .tr_brief_bottom{
            text-align: center!important;
            font-size: 15px!important;
            letter-spacing: 2px;
        }
        .grid_image{
            background-image: url("https://cdn.scentbird.com/collections/desktop/img-47-1.jpg?w=400");
            min-height: 250px;
            width: 100%;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .fix_div{
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
        }
    </style>
    <div class="section_padding">
        <div class="container">
            <div class="row">
                @include('website/pages/subscriptions/subscription-sidebar')
                <div class="col-lg-9">
                    <div class="row boxDesign">
                        <div class="col-xl-3">
                            <img src="{{url('https://cdn.scentbird.com/assets/frontbird-site/images/birdBiker_d205f8.svg')}}">
                        </div>
                        <div class="col-xl-2">
                            <p id="tr_month">June</p>
                            <p class="tr_status">Order Placed</p>
                        </div>
                        <div class="col-xl-2">
                            <img src="{{url('https://cdn.scentbird.com/product/desc/normal/img-824.jpg?w=50')}}">
                        </div>
                        <div class="col-xl-2">
                            <p class="tr_delivery">Delivery Status</p>
                            <p class="text-success tr_status">Delivered</p>
                        </div>
                        <div class="col-xl-2">
                            <p class="tr_number">Tracking Number</p>
                            <p class="text-danger tr_num">6478474984283456</p>
                        </div>
                    </div>
                    <hr>
{{--                    <div class="container-fluid">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <p class="text-center tr_brief">--}}
{{--                                    You’re in the driver’s seat: choose the product you want to receive next month, now--}}
{{--                                </p>--}}
{{--                            </div>--}}

{{--                            <div class="col-md-3"></div>--}}
{{--                            <div class="col-md-6 justify-content-center">--}}
{{--                                <div class="single-input">--}}
{{--                                    <button class="btn btn-block btn-danger">Get Recomentdations</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-3"></div>--}}
{{--                        </div>--}}
{{--                        <div class="row text-center mt-5">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <p class="tr_brief_middle">GREAT IDEAS FOR FUTURE DELIVERIES</p>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-12 mt-3">--}}
{{--                                <h4>Fragrance playlists</h4>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-12 mt-3 mb-5">--}}
{{--                                <p class="tr_brief_bottom">Make the most of your Scentbird experience, and try our customized fragrance playlists. We've created capsule collections around our most popular perfume and cologne categories to make it easier for you to discover all new scents in no time.</p>--}}
{{--                            </div>--}}

{{--                                <div class="col-md-4 mt-2 fix_div">--}}
{{--                                    <div class="col-md-12 grid_image">--}}
{{--                                        Some Content..--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4 mt-2 fix_div">--}}
{{--                                    <div class="col-md-12 grid_image">--}}
{{--                                        Some Content..--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4 mt-2 fix_div">--}}
{{--                                    <div class="col-md-12 grid_image">--}}
{{--                                        Some Content..--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4 mt-2">--}}
{{--                                    <div class="col-md-12 grid_image">--}}
{{--                                        Some Content..--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4 mt-2">--}}
{{--                                    <div class="col-md-12 grid_image">--}}
{{--                                        Some Content..--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4 mt-2">--}}
{{--                                    <div class="col-md-12 grid_image">--}}
{{--                                        Some Content..--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            <div class="col-md-12 justify-content-center">--}}
{{--                                <p class="text-center tr_brief_middle mt-5">Recommended for you</p>--}}
{{--                                    <div class="single-input">--}}
{{--                                        <button class="btn btn-xs btn-danger add_all_btn">&nbsp;&nbsp; Add All &nbsp;&nbsp;</button>--}}
{{--                                    </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="{{url('public/ratings/product-rating.css')}}">
@endpush
@push('script')

@endpush
