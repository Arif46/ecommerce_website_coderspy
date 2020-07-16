@extends('website.layouts.master')
@section('title','Samples')
@section('content')

<body  class="body-bg1">
    <!-- Hero Area Start -->
    <div class="hero-area gray-bg">
        <div class="container">
            <div class="row">
                @foreach($defaultPackeg as $data)
                    <div class="col-xl-6 col-sm-12 mt-60">
                        <h2>{!! $data->description !!}</h2><h2><del>$ {{$data->regular_price}}</del></h2>
                        <h3>{{$data->offer_price}} / First month</h3>
                        <p><span>*</span>New subscriptions only</p>
                        <a href="{{route('choose_perfume',1)}}" class="boxed_btn">Choose your Perfumes <i class="fa fa-angle-right"></i></a>
                    </div>
                @endforeach
                <div class="col-xl-6 col-sm-12">
                    <img src="{{url('public/website/img/hero-bg.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!--  -->
    <div class="section_padding  gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-title">
                        <h2>Here’s how it works</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-how-it">
                        <img src="{{url('public/website/img/how-it-works/1.png')}}" alt="">
                        <h4>Take Your Pick</h4>
                        <p>Browse our selection of 500+ fragrances, as well as skincare makeup, and wellness products, then choose the item you want to test-drive for the month.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-how-it">
                        <img src="{{url('public/website/img/how-it-works/2.png')}}" alt="">
                        <h4>Receive Your Monthly Order</h4>
                        <p>Browse our selection of 500+ fragrances, as well as skincare makeup, and wellness products, then choose the item you want to test-drive for the month.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-how-it">
                        <img src="{{url('public/website/img/how-it-works/3.png')}}" alt="">
                        <h4>Customize Your Schedule</h4>
                        <p>Browse our selection of 500+ fragrances, as well as skincare makeup, and wellness products, then choose the item you want to test-drive for the month.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('choose_perfume',2)}}" class="boxed_btn">Choose your products</a>
                </div>
            </div>
        </div>
    </div>
    <!--/  -->
    <!--  -->
    <div class="section_padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <img class="w-100" src="{{url('public/website/img/brand-girl.jpg')}}" alt="">
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="authentic-brands">
                        <div class="section-title">
                            <h2>Only authentic brands</h2>
                        </div>
                        <p class="mb-30">We partner directly with top brands/wholesalers and only sell 100% authentic fragrances</p>
                        <a href="" class="boxed_btn mb-30">Choose your products</a>
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                <div class="single-brands">
                                    <img src="{{url('public/website/img/brands/1.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                <div class="single-brands">
                                    <img src="{{url('public/website/img/brands/2.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                <div class="single-brands">
                                    <img src="{{url('public/website/img/brands/3.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                <div class="single-brands">
                                    <img src="{{url('public/website/img/brands/4.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                <div class="single-brands">
                                    <img src="{{url('public/website/img/brands/5.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                <div class="single-brands">
                                    <img src="{{url('public/website/img/brands/1.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="section_padding  gray-bg">
        <div class="container">

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 authentic-brands">
                    <div class="section-title">
                        <h2>We did the math</h2>
                    </div>
                    <p>Our 8 mL bottles hold roughly 140 sprays each, <br>which should last until your next order, <br> and come in a sleek, refillable case.</p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="single-how-it">
                                <img src="{{url('public/website/img/how-it-works/1.png')}}" alt="">
                                <h4>Retail</h4>
                                <p>$70 per bottle <br>
                                    on average</p>
                            </div>
                            <div class="single-how-it">
                                <h4 class="mb-10">$70</h4>
                                <p>One Time</p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="single-how-it">
                                <img src="{{url('public/website/img/how-it-works/2.png')}}" alt="">
                                <h4>Scentbird</h4>
                                <p>$14.95 per <br>
                                    8 mL bottle <br>
                                    each month</p>
                            </div>
                            <div class="single-how-it">
                                <h4 class="cl-primary mb-10">$14.95</h4>
                                <p>Per Month</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/  -->
    <!--? Testimonial Start -->
    <div class="testimonial-area section_padding position-relative">
        <div class="container fix">
            <div class="row">
                <!-- Section Tittle -->
                <div class="section-title02 mb-25">
                    <h2>Join our 300,000<br>subscribers today!</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-7">
                    <div class="testimonial-active owl-carousel ">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial ">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                <img src="{{url('public/website/img/testi-icon.svg')}}" alt="" class="mb_20">
                                    <p>You get to choose which scents you want each month, it's a generous amount. ( They say it will last&nbsp;30&nbsp;days, but I'm sure I can make it last much longer!) Shipment arrived quickly. There was a small delay probably because of the holiday. I can't wait to get my next scent!!</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="{{url('public/website/img/testimonial.png')}}" alt="" style="width:80px;">
                                    </div>
                                    <div class="founder-text">
                                        <span>Diana</span>
                                        <p>New York, NY</p>
                                    <!-- Rating -->
                                    <div class="testimonial-ratting">
                                        <i class="fab fa-accessible-icon"></i>
                                        <i class="ti-star"></i>
                                        <i class="ti-star"></i>
                                        <i class="ti-star"></i>
                                        <i class="ti-star"></i>
                                        <i class="ti-star"></i>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial ">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                <img src="{{url('public/website/img/testi-icon.svg')}}" alt="" class="mb_20">
                                    <p>You get to choose which scents you want each month, it's a generous amount. ( They say it will last&nbsp;30&nbsp;days, but I'm sure I can make it last much longer!) Shipment arrived quickly. There was a small delay probably because of the holiday. I can't wait to get my next scent!!</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="{{url('public/website/img/testimonial.png')}}" alt="" style="width:80px;">
                                    </div>
                                    <div class="founder-text">
                                        <span>Diana</span>
                                        <p>New York, NY</p>
                                    <!-- Rating -->
                                    <div class="testimonial-ratting">
                                        <i class="fab fa-accessible-icon"></i>
                                        <i class="ti-star"></i>
                                        <i class="ti-star"></i>
                                        <i class="ti-star"></i>
                                        <i class="ti-star"></i>
                                        <i class="ti-star"></i>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shpe -->
        <div class="shape-t">
            <img src="{{url('public/website/img/testi-shape.png')}}" alt="" class="mb_20">
        </div>
    </div>
    <!-- Testimonial End -->

</body>

@endsection

@push('css')

@endpush

@push('script')

@endpush
