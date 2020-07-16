@extends('website.layouts.master')
@section('title','About Us')
<style>
    .ulta-beauty .ulta-beauty-wrapper {
    background-image: url("{{asset('/')}}{{@$about->ultra_beauty_image}}") !important;


}
</style>
@section('content')
    <!--ulta-beauty Start -->
    <div class="ulta-beauty pt-80 pb-80 ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="ulta-beauty-wrapper">
                        <div class="one-page-Nav">
                            <nav>
                                <ul>
                                    @foreach ($about_menus as $about_menu)
                                        <li><a href="#goto{{@$about_menu->serial}}">{{@$about_menu->name}}</a></li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ulta-beauty End-->
    @php
        $about_menu=App\AboutMenu::where('status',1)->where('serial',1)->first();

    @endphp
    @if ($about_menu != "")
    <!-- Mission and Vision Start -->
    <div class="our-missin-area" id="goto{{@$about_menu->serial}}">
        <div class="container">
             <!-- Section Tittle -->
             <div class="row justify-content-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle text-center mb-70">
                        <h2>{{@$about_menu->name}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-vision  mb-40">
                        <h3>{!! @$about->mission_title !!}</h3>
                        <p>{!! @$about->mission_text !!}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-vision mb-40">
                        <h3>{{@$about->vision_title}}</h3>
                        <p>{!! @$about->vision_text !!}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-vision mb-40">
                        <h3>{{@$about->value_title}}</h3>
                        <p>{!! @$about->value_text !!}</p>
                    </div>
                </div>
            </div>
            <!--Big img -->
            <div class="row justify-content-center border-bottom">
                <div class="col-lg-12">
                    <div class="full-section-img mb-50">
                        <img height="630" width="1110" src="{{asset('/')}}{{@$about->mission_img1}}" alt="" class=" img1">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="mission2 text-center mb-50">
                        <img height="420" width="750" src="{{asset('/')}}{{@$about->mission_img2}}" alt="" class=" img1">
                        {{-- <strong>Mary Dillon,</strong>
                        <p>Chief Executive Officer</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mission and Vision End -->
    @endif

    @php
        $about_menu=App\AboutMenu::where('status',1)->where('serial',2)->first();
    @endphp
    @if ($about_menu != "")
    <!-- Our Story Start -->
    <div class="our-story-area pt-50 pb-50" id="goto{{@$about_menu->serial}}">
        <div class="container">
             <!-- Section Tittle -->
             <div class="row justify-content-center">
                <div class="cl-xl-12">
                    <div class="section-tittle text-center mb-50">
                        <h2 class="mb-20">{{@$about_menu->name}}</h2>
                        <p>{!! @$about->story_text !!}</p>
                    </div>
                </div>
            </div>
            <div class="story-single-main border-bottom">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-story  mb-60">
                        <img height="340" width="540" src="{{asset('/')}}{{@$about->story_img1}}" alt="">
                            <h3>{{@$about->story_title1}}</h3>
                            <p>{!! @$about->story_text1 !!} </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-story  mb-60">
                        <img height="340" width="540" src="{{asset('/')}}{{@$about->story_img2}}" alt="">
                            <h3>{{@$about->story_title2}}</h3>
                            <p>{!! @$about->story_text2 !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-story  mb-60">
                        <img height="340" width="540" src="{{asset('/')}}{{@$about->story_img3}}" alt="">
                            <h3>{{@$about->story_title3}}</h3>
                            <p>{!! @$about->story_text3 !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-story  mb-60">
                        <img height="340" width="540" src="{{asset('/')}}{{@$about->story_img4}}" alt="">
                            <h3>{{@$about->story_title4}}</h3>
                            <p>{!! @$about->story_text4 !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Story End -->
    @endif

    @php
        $about_menu=App\AboutMenu::where('status',1)->where('serial',3)->first();
    @endphp
    @if ($about_menu != "")
    <!-- Our Guests Start border-bottom-->
    <div class="our-story-area pt-50 pb-50" id="goto{{@$about_menu->serial}}">
        <div class="container">
             <!-- Section Tittle -->
             <div class="row justify-content-center">
                <div class="cl-xl-12">
                    <div class="section-tittle text-center mb-50">
                        <h2 class="mb-20">{{@$about_menu->name}}</h2>
                        <p>{!! @$about->guest_text !!}</p>
                    </div>
                </div>
            </div>
            <div class="story-single-main border-bottom">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-story  mb-60 text-center">
                        <img height="180" width="350" src="{{asset('/')}}{{@$about->guest_img1}}" alt="">
                        {{-- <h3 class="mb-0">Linda W.,</h3>
                            <p class="text-center">Guest</p> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-story  mb-60 text-center">
                        <img height="180" width="350" src="{{asset('/')}}{{@$about->guest_img2}}" alt="">
                        {{-- <h3 class="mb-0">Stacy E.,</h3>
                            <p class="text-center">Guest</p> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-story mb-60 text-center">
                        <img height="180" width="350" src="{{asset('/')}}{{@$about->guest_img3}}" alt="">
                            {{-- <h3 class="mb-0">Brenda M.,</h3>
                            <p class="text-center">Guest</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Guests End -->
    @endif

    @php
        $about_menu=App\AboutMenu::where('status',1)->where('serial',4)->first();
    @endphp
    @if ($about_menu != "")
    <!-- Our Associates start-->
    <div class="our-story-area pt-50 pb-50" id="goto{{@$about_menu->serial}}">
        <div class="container">
             <!-- Section Tittle -->
             <div class="row justify-content-center">
                <div class="cl-xl-12">
                    <div class="section-tittle text-center mb-50">
                        <h2 class="mb-20">{{@$about_menu->name}}</h2>
                        <p>{!! @$about->associate_text !!}</p>
                    </div>
                </div>
            </div>
            <div class="story-single-main border-bottom">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="single-story  mb-20 text-center">
                             <img height="600" width="1110" src="{{asset('/')}}{{@$about->associate_img1}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <div class="single-story  mb-20 text-center">
                            <img height="300" width="250" src="{{asset('/')}}{{@$about->associate_img2}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <div class="single-story  mb-20 text-center">
                            <img height="300" width="250" src="{{asset('/')}}{{@$about->associate_img3}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <div class="single-story  mb-20 text-center">
                            <img height="300" width="250" src="{{asset('/')}}{{@$about->associate_img4}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="single-story  mb-60 text-center">
                        <img height="65" width="920" src="{{asset('/')}}{{@$about->associate_img5}}" alt="">
                        {{-- <h3 class="mb-0">Danielle D.,</h3>
                            <p class="text-center">DC Admin Coordinator</p> --}}
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="single-story  mb-60 text-center">
                        <img height="150" width="920" src="{{asset('/')}}{{@$about->associate_img6}}" alt="">
                        {{-- <h3 class="mb-0">Danielle D.,</h3>
                            <p class="text-center">DC Admin Coordinator</p> --}}
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="single-story  mb-60 text-center">
                        <img height="120" width="920" src="{{asset('/')}}{{@$about->associate_img7}}" alt="">
                        {{-- <h3 class="mb-0">Elisabeth B.,</h3>
                            <p class="text-center">Salon Market Trainer</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Associates End -->
    @endif
    @php
        $about_menu=App\AboutMenu::where('status',1)->where('serial',5)->first();
    @endphp
    @if ($about_menu != "")
    <!-- Our Communities start-->
    <div class="our-story-area pb-50 " id="goto{{@$about_menu->serial}}">
        <div class="container">
             <!-- Section Tittle -->
             <div class="row justify-content-center">
                <div class="cl-xl-12">
                    <div class="section-tittle text-center mb-50">
                        <h2 class="mb-20">{{@$about_menu->name}}</h2>
                        <p>{!! @$about->communitie_text !!}</p>
                    </div>
                </div>
            </div>
            <div class="story-single-main border-bottom">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="single-story  mb-20 text-center">
                             <img height="630" width="1110" src="{{asset('/')}}{{@$about->communitie_img1}}" alt="">
                        </div>
                    </div>
                    <!--left and right content 1  -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-story  mb-20 text-center">
                            <img height="105" width="255" src="{{asset('/')}}{{@$about->communitie_img2}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="single-story  mb-50 text-center">
                            <p>{!! @$about->communitie_text2 !!}</p>
                        </div>
                    </div>
                    <!-- tistimonial -->
                    <div class="col-lg-8 col-md-10 col-md-6">
                        <div class="single-story mb-50 text-center">
                            <img height="480" width="730" src="{{asset('/')}}{{@$about->communitie_img3}}" alt="">
                            {{-- <strong>Myra Biblowit, BCRF President & CEO</strong> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-story mb-20 text-center">
                            <img height="340" width="540" src="{{asset('/')}}{{@$about->communitie_img4}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-story mb-20 text-center">
                            <img height="340" width="540" src="{{asset('/')}}{{@$about->communitie_img5}}" alt="">
                        </div>
                    </div>
                    <!--left and right content 2  -->
                    <div class="col-lg-3 col-md-4 col-sm-8">
                        <div class="single-story  mb-20 text-center">
                            <img height="130" width="255" src="{{asset('/')}}{{@$about->communitie_img6}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="single-story  mb-50 text-center">
                            <p>{!! @$about->communitie_text3 !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-8">
                        <div class="single-story  mb-20 text-center">
                            <img height="45" width="255" src="{{asset('/')}}{{@$about->communitie_img7}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="single-story  mb-50 text-center">
                            <p>{!! @$about->communitie_text4 !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Communities End -->
    @endif
    @php
        $about_menu=App\AboutMenu::where('status',1)->where('serial',6)->first();
    @endphp
    @if ($about_menu != "")
    <!-- Our Environment start-->
    <div class="our-story-area  pb-50 " id="goto{{@$about_menu->serial}}">
        <div class="container">
             <!-- Section Tittle -->
             <div class="row justify-content-center">
                <div class="cl-xl-12">
                    <div class="section-tittle text-center mb-50">
                        <h2 class="mb-20">{{@$about_menu->name}}</h2>
                        <p>{{@$about->environment_text}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Environment End -->
    @endif
    @php
        $about_menu=App\AboutMenu::where('status',1)->where('serial',7)->first();
    @endphp
    @if ($about_menu != "")
    <!-- Our Partners start-->
    <div class="our-story-area pb-50 " id="goto{{@$about_menu->serial}}">
        <div class="container">
             <!-- Section Tittle -->
             <div class="row justify-content-center">
                <div class="cl-xl-12">
                    <div class="section-tittle text-center mb-50">
                        <h2 class="mb-20">{{@$about_menu->name}}</h2>
                        <p>{!! @$about->partner_text !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Partners End -->
    @endif
    @php
        $about_menu=App\AboutMenu::where('status',1)->where('serial',8)->first();
    @endphp
    @if ($about_menu != "")
    <!-- charitytable giving start-->
    <div class="our-story-area pb-50 " id="goto{{@$about_menu->serial}}">
        <div class="container">
             <!-- Section Tittle -->
             <div class="row justify-content-center">
                <div class="cl-xl-12">
                    <div class="section-tittle text-center mb-50">
                        <h2 class="mb-20">{{@$about_menu->name}}</h2>
                        {{-- <p><strong>Strong financial performance. </strong> Ulta Beauty is committed to consistently delivering attractive shareholder returns.</p> --}}
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-4 col-sm-4">
                    <div class="single-story  mb-20 text-center">
                        <img src="http://localhost/myfrag/public/website/img/about/investor-stat-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4">
                    <div class="single-story  mb-20 text-center">
                        <img src="http://localhost/myfrag/public/website/img/about/investor-stat-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4">
                    <div class="single-story  mb-20 text-center">
                        <img src="http://localhost/myfrag/public/website/img/about/investor-stat-3.jpg" alt="">
                    </div>
                </div> --}}
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-50">
                        <p>{!! @$about->charity_text !!}</p>
                    </div>
                </div>
                {{-- <div class="col-lg-12">
                    <div class="section-tittle text-center mb-50">
                        <p>In 2020, sales increased 14.1%, or 16.3% adjusted for the 53rd week in 2017, to $6.7 billion. Total company comparable sales rose 8.1%, driven primarily by strong traffic. GAAP earnings per diluted share grew 22.1% to $10.94.</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-50">
                        <p>Our Board of Directors oversees an enterprise-wide approach to risk management, designed to support the achievement of organizational objectives, including strategic objectives, to improve long-term organizational performance and enhance stockholder value. .</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-50">
                        <p>Our Board of Directors consists of eleven directors, 55% of whom are female. Board member independence is an essential element of Ulta Beauty corporate governance. The Board of Directors has determined that each of the current non-employee directors is free of any relationship that would interfere with his or her individual exercise of independent judgement with regard to Ulta Beauty. We currently separate the roles of Chief Executive Officer and Chairperson of the Board. Our Board is led by an independent, non-executive Chairperson. </p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- charitytable giving End -->
    @endif

@endsection

@push('css')

@endpush

@push('script')

@endpush
