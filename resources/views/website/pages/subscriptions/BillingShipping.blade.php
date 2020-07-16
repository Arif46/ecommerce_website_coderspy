@extends('website.layouts.master')
@section('title','Chane Password')
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
            padding-top: 10px;
            font-weight: bolder;
            background-color: #cc3633;
        }
    </style>
    <div class="section_padding">
        <div class="container">
            <div class="row">
                @include('website/pages/subscriptions/subscription-sidebar')
                <div class="col-lg-9">
                    <h4>Billing & Shipping Information</h4>
                    <hr>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="container mt-3">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active text-dark" data-toggle="tab" href="#home">Billing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" data-toggle="tab" href="#menu1">Shipping</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div id="home" class="container tab-pane active">

                                        <div class="row justify-content-center mt-4">
                                            <div class="col-xl-12">
                                                <div class="special-form blogger-form">
                                                    <form class="row" method="POST" action="{{route('subscriptionCardUpdate')}}" enctype="multipart/form-data">
                                                        @csrf
                                                            <div class="col-xl-12 col-xs-12 col-md-12 col-lg-12">
                                                                <div class="At1_Yj _36rr29 _5G6cRQ">
                                                                    <div class="_1yPcO6 _1Z_Rdz" draggable="false" style="float: left;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" width="24" height="24"><path fill="currentColor" d="M12 18a2 2 0 100-4 2 2 0 000 4zm6-9a2 2 0 012 2v10a2 2 0 01-2 2H6a2 2 0 01-2-2V11a2 2 0 012-2h1V7a5 5 0 1110 0v2h1zm-6-5a3 3 0 00-3 3v2h6V7a3 3 0 00-3-3z"></path></svg>
                                                                    </div>
                                                                    <div><h4>Secure credit card payment</4></div>
                                                                    <p style="font-size: 18px;" class="mb-40">All data is encrypted. Your card number is never stored on Scenbird servers.</p>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-12">
                                                                <div class="single-input">
                                                                    <input class="input-box" type="text" name="card_number" id="card_number" placeholder="Card Number" required value="{{@$data->userCardInfo->card_number}}">
                                                                </div>
                                                            </div>

                                                        <div class="col-xl-6">
                                                                <div class="single-input">
                                                                    <input class="input-box" type="text" name="payment_date" id="payment_date" placeholder="MM/YY" required value="{{@$data->userCardInfo->payment_date}}">
                                                                </div>
                                                            </div>
                                                        <div class="col-xl-6">
                                                                <div class="single-input">
                                                                    <input class="input-box" type="text" name="cvc" id="CVC" placeholder="CVC" required value="{{@$data->userCardInfo->cvc}}">
                                                                </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="single-input">
                                                                <input class="input-box" type="text" name="card_holder" id="card_holder" placeholder="Card Holder" required value="{{@$data->userCardInfo->card_holder}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="single-input">
                                                                <input class="input-box" type="text" name="billing_zip" id="billing_zip" placeholder="Billing Zip" required value="{{@$data->userCardInfo->billing_zip}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="single-input">
                                                                <button class="btn btn-block btn-danger">Save</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div id="menu1" class="container tab-pane fade"><br>

                                        <div class="row justify-content-center mt-4">
                                            <div class="col-xl-12">
                                                <div class="special-form blogger-form">
                                                    <form class="row" method="POST" action="{{route('subscriptionShipUpdate')}}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="col-xl-6">
                                                            <div class="single-input">
                                                                <label for="first_name">First Name</label>
                                                                <input class="input-box" type="text" name="first_name" id="first_name" placeholder="First Name"  value="{{@$data->ShippingInfo->first_name}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="single-input">
                                                                <label for="last_name">Last Name</label>
                                                                <input class="input-box" type="last_name"  name="last_name" id="last_name" placeholder="Last Name"  value="{{@$data->ShippingInfo->last_name}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="single-input">
                                                                <label for="street_address">Street Address</label>
                                                                <input class="input-box" type="text" name="street_address" id="street_address" placeholder="Street Address"  value="{{@$data->ShippingInfo->street_address}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="single-input">
                                                                <label for="apt">Apt(opt)</label>
                                                                <input class="input-box" type="text" name="apt" id="apt" placeholder="Apt"  value="{{@$data->ShippingInfo->apt}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="single-input">
                                                                <label for="city">Country</label>
                                                                <input class="input-box" type="text" name="country" id="country" placeholder="Country" value=" value="{{@$data->ShippingInfo->country}}"">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="single-input">
                                                                <label for="city">City</label>
                                                                <input class="input-box" type="text" name="city" id="city" placeholder="City"  value="{{@$data->ShippingInfo->city}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="single-input">
                                                                <label for="state">State</label>
                                                                <input class="input-box" type="text" name="state" id="state" placeholder="State"  value="{{@$data->ShippingInfo->state}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="single-input">
                                                                <label for="land_mark">Landmark</label>
                                                                <input class="input-box" type="text" name="land_mark" id="land_mark" placeholder="Landmark"  value="{{@$data->ShippingInfo->land_mark}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="single-input">
                                                                <label for="house_no">House No</label>
                                                                <input class="input-box" type="text" name="house_no" id="house_no" placeholder="House No"  value="{{@$data->ShippingInfo->house_no}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="single-input">
                                                                <label for="flat_no">Flat No</label>
                                                                <input class="input-box" type="text" name="flat_no" id="flat_no" placeholder="Flat No"  value="{{@$data->ShippingInfo->flat_no}}">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-6">
                                                            <div class="single-input">
                                                                <label for="phone_number">Phone (optional)</label>
                                                                <input class="input-box" type="text" name="phone_number" id="phone_number" placeholder="Phone" value="{{@$data->ShippingInfo->phone_number}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6"></div>
                                                        <div class="col-xl-6">
                                                            <div class="single-input">
                                                                <button class="btn btn-block btn-danger">Save</button>
                                                            </div>
                                                        </div>
                                                    </form>
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

@endpush

@push('script')

@endpush
