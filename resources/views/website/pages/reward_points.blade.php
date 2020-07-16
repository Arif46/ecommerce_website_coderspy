@extends('website.layouts.master')

@section('content')


    <!-- Page Tittle Start -->
    <div class="page_tittle_area text-center">
       <div class="container">
         <div class="page-tittle mb-50 pt-20 pb-20">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Reward points program</h2>
                </div>
            </div>
         </div>
       </div>
    </div>
    <!-- Page Tittle End -->

    <!-- Reward Points Start-->
    <div class="reward-point-area section_padding">
        <div class="container">
            <!-- Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="reward-tittle text-center">
                        <span>WHAT IS IT?</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="reward-caption">
                        <p>BasharaCare Rewards is a program that earns you points each time you make a purchase, which then can be redeemed for the fabulous products available at Basharacare.com .</p>
                    </div>
                </div>
            </div>
            <!-- Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="reward-tittle text-center mb-20">
                        <span>EARN POINTS</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="reward-caption text-center mb_40">
                        <img src="{{url('public/website/img/rewordpoint1.png')}}" alt="">
                        <a href="#">REGISTER</a>
                        <span>100 POINTS (3 dirhams)</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="reward-caption text-center mb_40">
                        <img src="{{url('public/website/img/rewordpoint2.png')}}" alt="">
                        <a href="#">INVITE A FRIEND</a>
                        <span>500 POINTS (15 dirhams)</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="reward-caption text-center mb_40">
                        <img src="{{url('public/website/img/rewordpoint3.png')}}" alt="">
                        <a href="#">JOIN NEWSLETTER</a>
                        <span>200 POINTS (6 dirhams)</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="reward-caption text-center mb_40">
                        <img src="{{url('public/website/img/rewordpoint4.png')}}" alt="">
                        <a href="#">REVIEW PRODUCT</a>
                        <span>100 POINTS (3 dirhams)</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="reward-caption text-center mt_40 mb_40">
                        <img src="{{url('public/website/img/rewordpoint5.png')}}" alt="">
                        <a href="#">SHOP</a>
                        <span>1 AED = 1 POINT</span>
                    </div>
                </div>
            </div>
            <!-- Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="reward-caption">
                        <h4>33 POINTS = 1 AED</h4>
                        <p>Build even more points with BasharaCare towards future rewards by inviting friends, signing for our exclusive newsletter, writing product reviews and of course by purchasing your desired products.</p>
                    </div>
                </div>
            </div>
            <!-- Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="reward-tittle text-center">
                        <span>HOW DOES IT WORK?</span>
                    </div>
                    <div class="reward-caption">
                        <p>As soon as you sign up you will gifted 100 points! You automatically earn 1 point for every 1 AED you spend, and you can check your balance anytime via your Account page. You can redeem your points on checkout next time you're shopping with us. With your points you can treat yourself to anything online!</p>
                        <p>ENJOY SHOPPING WITH BASHARACARE REWARDS!</p>
                        <p>Points you accumulate throughout the year will need to be redeemed by the end of January of the next year</p>
                        <p>*Terms & conditions apply</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reward Points End -->


@endsection

@push('css')

@endpush

@push('script')

@endpush
