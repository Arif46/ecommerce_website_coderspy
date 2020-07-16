@extends('website.layouts.master')
@section('title','Shipping page')
@section('content')

    <!-- Page Tittle Start -->
    <div class="page_tittle_area text-center">
       <div class="container">
         <div class="page-tittle mb-50 pt-20 pb-20">
            <div class="row">
                <div class="col-lg-12">
                    <h2>{{@$title}}</h2>
                </div>
            </div>
         </div>
       </div>
    </div>
    <!-- Page Tittle End -->

    <form action="{{route('subscriptionWithRegistration')}}" method="POST">
        @csrf
        @php
            $price = 0;
            $shippingCharge =0;
            $totalPrice =0;
        @endphp
    <div class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="singleProductView">
                @forelse($productsData as $product)
                     @forelse($product as $data)
                                <input type="hidden" name="product_id[]" value="{{$data->id}}">
                                <input type="hidden" name="product_price[]" value="{{$data->unit_price}}">
                            <div class="row">
                                <div class="col-md-6">
                                    <img class="mb-1" src="{{url('public/')}}/{{$data->featured_img}}" height="180px" alt="">
                                </div>
                                <div class="col-md-6">
                                    <a class="text-dark" href="{{route('product',$data->slug)}}">{{$data->name}}</a>
                                    <p> ${{$data->unit_price}}</p>
                                </div>
                            </div>
                         @php
                           $price += $data->unit_price;
                         @endphp
                     @empty
                    @endforelse
                    @empty
                    @endforelse
                        <p class="title">Your first product. You can change it after you subscribe.</p>
                <div class="row">
                    <div class="col-md-12">
                        <b>Shipping Charge : </b> ${{$shippingCharge}}<br>
                        <b>Monthly Subscription : </b> ${{$price}}
                        <input type="hidden" name="type" value="{{$id}}">
                        <input type="hidden" name="shipping_charge" value="{{$shippingCharge}}">
                        <input type="hidden" name="subscription_amount" value="{{$price}}">
                    </div>
                </div>
                </div>
                </div>
                <div class="col-lg-8">
                    <h3>The last step!</h3>
                    <h4>Month-to-month subscription</h4>
                    <p>Billed monthly. Renews automatically, cancel any time. Ships mid-month from our facility.</p>
                    <h3 class="shipment-details mt-40">Enter your shipment details</h3>

                    <div class="row">

                        <div class="special-form customer-feedback-form">
                            <div class="row mt-10">
                                <div class="col-lg-6">
                                    <div class="single-input">
                                        <label for="first_name">Email:*</label>
                                        <input class="input-box" type="email" name="email_address" id="email_address" placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-input">
                                        <label for="first_name">Password:*</label>
                                        <input class="input-box" type="password" name="password" id="password" placeholder="Password" required>
                                    </div>
                                </div>
                            </div>
                                <div class="row mt-10">
                                    <div class="col-lg-6">
                                        <div class="single-input">
                                            <label for="first_name">First Name:*</label>
                                            <input class="input-box" type="text" name="first_name" id="first_name" placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-input">
                                            <label for="last_name">Last Name:*</label>
                                            <input class="input-box" type="text" name="last_name" id="last_name" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                </div>


                                <div class="row mt-10">
                                    <div class="col-lg-6">
                                        <div class="single-input">
                                            <label for="street_address">Street address:*</label>
                                            <input class="input-box" type="text" name="street_address" id="street_address" placeholder="Street Address" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-input">
                                            <label for="pat_number">Apt:*</label>
                                            <input class="input-box" type="text" name="apt_number" id="pat_number" placeholder="APT" required>
                                        </div>
                                    </div>
                                </div>


                                <div class="row mt-10">
                                    <div class="col-lg-6">
                                        <div class="single-input">
                                            <label for="city">City:*</label>
                                            <input class="input-box" type="text" name="city" id="city" placeholder="City" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-input">
                                            <label for="state">State:*</label>
                                            <input class="input-box" type="text" name="state" id="state" placeholder="State" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-10">
                                    <div class="col-lg-6">
                                        <div class="single-input">
                                            <label for="zip_code">Zip Code:*</label>
                                            <input class="input-box" type="number" name="zip_code" id="zip_code" placeholder="Zip Code" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-input">
                                            <label for="country">Country:*</label>
                                            <input class="input-box" type="text" name="country" id="country" placeholder="Country" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-12">
                                        <h4>Choose payment method</h4>
                                    </div>
                                    <div class="col-lg-6 text-center">
                                        <div class="single-input mt-2" role="button">
                                                <img class="amazonpay-button-inner-image" style="cursor:pointer; height:60px;" alt="AmazonPay" id="OffAmazonPaymentsWidgets0" tabindex="0" src="https://d2ldlvi1yef00y.cloudfront.net/us/live/en_us/amazonpay/gold/medium/button_T6.png">

                                        </div>
                                    </div>
                                    <div class="col-lg-6 text-center">
                                        <div class="single-input mt-2">
                                            <a href="">
                                            <div class="_2IGeHi" data-testid="paymentOption-payPal" role="button" tabindex="0">
                                                <div class="-_WdGG At1_Yj _36rr29 _3VCFZz"><img class="_3jxJqC" src="//cdn.scentbird.com/assets/frontbird-site/images/payPal_a4068c.svg" alt="">
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-12">
                                        <div class="At1_Yj _36rr29 _5G6cRQ">
                                            <div class="_1yPcO6 _1Z_Rdz" draggable="false" style="float: left;">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" width="24" height="24"><path fill="currentColor" d="M12 18a2 2 0 100-4 2 2 0 000 4zm6-9a2 2 0 012 2v10a2 2 0 01-2 2H6a2 2 0 01-2-2V11a2 2 0 012-2h1V7a5 5 0 1110 0v2h1zm-6-5a3 3 0 00-3 3v2h6V7a3 3 0 00-3-3z"></path></svg>
                                            </div>
                                            <div><h4>Secure credit card payment</4></div>
                                            <p style="font-size: 18px;" class="mb-40">All data is encrypted. Your card number is never stored on Scenbird servers.</p>
                                        </div>
                                     </div>
                                </div>

                                <div class="row mt-10">
                                    <div class="col-lg-12">
                                        <div class="single-input">
                                            <label for="card_number">Card Number:*</label>
                                            <input class="input-box" type="text" name="card_number" id="card_number" placeholder="Card Number" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-10">
                                    <div class="col-lg-6">
                                        <div class="single-input">
                                            <label for="payment_date">MM/YY:*</label>
                                            <input class="input-box" type="text" name="payment_date" id="payment_date" placeholder="MM/YY" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-input">
                                            <label for="CVC">CVC:*</label>
                                            <input class="input-box" type="text" name="cvc" id="CVC" placeholder="CVC" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-10">
                                    <div class="col-lg-6">
                                        <div class="single-input">
                                            <label for="Card Holder">Card Holder:*</label>
                                            <input class="input-box" type="text" name="card_holder" id="Card Holder" placeholder="Card Holder" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-input">
                                            <label for="billing_zip">Billing Zip:*</label>
                                            <input class="input-box" type="number" name="billing_zip" id="billing_zip" placeholder="Billing Zip" required>
                                        </div>
                                    </div>
                                </div>
                            <div class="row mt-20">
                                <div class="col-md-12">
                                    <h3 style="padding-left: 2%">Subscription info</h3>
                                </div>
                                <p style="padding: 3%;">
                                    <b>  Due to COVID-19 and the extra precautions we’ve taken to ensure the safety of our team, your order will ship within 7 to 10 business days.
                                        By clicking "Buy Now" you agree you are purchasing a continuous subscription, and that you will receive deliveries and be billed to your designated payment method monthly. Plans automatically renew. You may cancel your automatic subscription renewal any time by emailing us at support@scentbird.com. Shipping to US only.

                                        Usually, if you’ve made a purchase in the first week of the month, your first product should arrive at your doorstep during the same month. If you’ve made a purchase later in the month, however, your first product might arrive the following month.

                                        Recurring orders leave our warehouse mid-month, and usually arrive at your doorstep within 10 business days. Because we ship in batches, delivery time can vary each month, and your product may arrive outside of that window. But don’t worry – you’ll always receive a tracking email so you can follow your product’s progress from us to you
                                    </b>
                                   </p>
                                </div>
                        </div>
                    </div>


            <div class="row justify-content-center">
                <div class="col-md-12 ">
                        <button type="submit" class="boxed_btn">Continue <i class="fa fa-angle-right"></i></button>

    </form>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <style>
        .singleProductView{
            background:white;
            height:100%;
            border: 1px solid #ddd;
            padding: 15px;
        }
        .singleProductView img{
            width:100%;
            height: 100px;
        }
        .shipment-details{

        }
        .qKFxtR, .qKFxtR img {
            width: 100%;
            opacity: .01;
        }
        .qKFxtR {
            position: absolute;
            height: 100%;
        }
        ._2IGeHi {
            background: #2b70b6;
        }
        ._36It56 {
            border: 1px solid #dadada;
        }
    </style>
@endpush

@push('script')

@endpush
