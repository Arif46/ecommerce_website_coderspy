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
            height: 40px;
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
    </style>
    <div class="section_padding">
        <div class="container">
            <div class="row">
                @include('website/pages/samples/sample-sidebar')
                <div class="col-lg-9">
                        <div class="row boxDesign">
                          <div class="col-xl-8">
                              <div class="col-md-12">
                                  <p><span class="head-text">New! A sleek color case with every perfume delivery for just $10.00</span></p>
                                  <br>
                                  <p><span class="body-text">Once the queue is locked on the 3rd of the month, you will not be able to add/remove the case.</span></p>
                              </div>
                              <div class="col-xl-6">
                                  <div class="single-input">
                                      <button class="btn btn-xs btn-danger">Get a case monthly</button>
                                  </div>
                              </div>
                          </div>
                            <div class="col-xl-4">
                                <img src="{{url('http://cdn.scentbird.com/assets/frontbird-site/images/except-mobile_e1ef72.jpg')}}">
                            </div>
                        </div>
                    <h4 class="mt-4">Order History</h4>
                    <hr>

                    <div class="container-fluid">

                        <div class="row">
                            <div class="container mt-3">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active text-dark" data-toggle="tab" href="#home">Subscription</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" data-toggle="tab" href="#menu1">Order</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div id="home" class="container-fluid tab-pane active">

                                        <div class="row mt-4 boxDesign">

                                            <div class="col-xl-6 mb-3">June</div>
                                            <div class="col-xl-6 mb-3 text-right text-success">Delivered</div>
                                            <div class="col-xl-2">
                                                <img src="{{url('https://cdn.scentbird.com/product/desc/normal/img-824.jpg?h=96')}}" height="70px" width="60px;">
                                            </div>
                                            <div class="col-xl-4 text-left">
                                              <p><span class="product-name">Derek Lam 10 Crosby Silent St.</span></p>
                                            </div>
                                            <div class="col-xl-4">

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
                                            <div class="col-xl-2 text-left">
                                                <p><a href="" class="product-name text-danger">Write Review <i class="fa fa-chevron-right"></i> </a></p>
                                            </div>
                                            </div>
                                    </div>
                                    <div id="menu1" class="container tab-pane fade"><br>

                                        <div class="row justify-content-center mt-2">
                                            <div class="col-xl-12">
                                                <div class="special-form blogger-form">
                                                    <div class="row mt-4 boxDesign">

                                                        <div class="col-xl-6 mb-3">June</div>
                                                        <div class="col-xl-6 mb-3 text-right text-success">Delivered</div>
                                                        <div class="col-xl-2">
                                                            <img src="{{url('https://cdn.scentbird.com/product/desc/normal/img-824.jpg?h=96')}}" height="70px" width="60px;">
                                                        </div>
                                                        <div class="col-xl-4 text-left">
                                                            <p><span class="product-name">Derek Lam 10 Crosby Silent St.</span></p>
                                                        </div>
                                                        <div class="col-xl-4">
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

                                                    <div class="row boxDesign mt-3">
                                                        <div class="col-xl-12 ">
                                                            <p><span class="head-text">Past purchases</span></p>
                                                            <br>
                                                            <p><span class="base-text">Once your first delivery has shipped, the items you’ve purchased will show up here.</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
