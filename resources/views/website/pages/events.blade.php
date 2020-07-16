@extends('website.layouts.master')
@section('title','Blogs')
@php
    $setting= App\GeneralSetting::first();
@endphp
@section('content')
<style>
    .eventTitle{
        padding-top:100px;
        text-align: center;
        justify-content:center;
    }
    .backgroundEvents{
        margin-bottom:25px;
    }
    .single_service{
        /* margin-bottom:25px; */

    }
    .events_section{
        margin-top: -60px;
        text-align: center;
    }
    .backgroundEvents{
         background-repeat: no-repeat;
         background-size: auto;
        height:700px;
    }
    .blog_service_area .single_service .service_thumb img {
        max-height:300px !important;
    }
    .see_more{

    }
    .backgroundEvents p{
        color: white;
    }
</style>

    <!--::::::::::::::product::::::::::::::: -->
    <div class="blog_service_area">
            <div class="row events_section" >
                <div class="col-lg-12">
                    <div class="backgroundEvents" style="  background: url({{url('public/uploads/events/banner.jpg')}});">
                        <h3 class="blog_common_title eventTitle align-middle justify-content-center">
                            <a href="#" style="color:white">Events</a>
                        </h3>
                        <div class="copy-container">
                            <p class="typography-intro hero-copy-paragraph color-page">June 22, 2020 at 10:00 a.m.&nbsp;PDT</p>
                           
                        </div>
                        <a href="/v/apple-events/home/f/built/assets/event.ics" aria-label="Add the June 2020 keynote to your calendar" class="icon-wrapper hero-link-cal typography-intro"><span class="icon-copy">Add to your&nbsp;calendar</span><span class="icon icon-after icon-downloadcircle"></span></a>
                    </div>
                </div>
            </div>
        <div class="container">
            <div class="row mt-10 mb-40">
                <div class="col-lg-12 text-cenetr d-flex justify-content-center">
                    <h3 class="blog_common_title ">View recent events </h3>
                </div>
            </div>
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-lg-6 col-md-6">
                        @if (@$event->url != "")
                            <!-- Video  -->
                            <div class="video-area" style="margin-bottom: 20px;">
                                <div class="video-wrapper">
                                    <div class="right-content">
                                        <div class="video-img">
                                            <img src="{{asset('public/')}}/{{@$event->img}}" alt="" style="height:300px; width:540px;">
                                            <!--video icon -->
                                            <div class="video-icon video-icon2">
                                                <a class="popup-video btn-icon" href="{{@$event->url}}" data-animation="bounceIn" data-delay=".4s"><i class="fa fa-play"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Video -->
                        @else
                            <div class="single_service">
                                <div class="service_thumb">
                                    <a href="{{ route('eventSinglePage',$event->id) }}">
                                        <img src="{{asset('public/')}}/{{$event->img}}" alt="" style="height:300px; width:540px;">
                                    </a>
                                </div>
                                <div class="service_meta">
                                    <h4><a href="{{ route('single_blog',$event->id) }}"> {{  \Illuminate\Support\Str::limit(strip_tags($event->title),50, '')}}
                                        </a></h4>
                                    <p class="service_bottom" title="{{ $event->title }}">
                                        <span class="date"> {{\Carbon\Carbon::parse($event->created_at)->format('l M, d, Y')}}</span>
                                        <span class="read_time">{{ $event->created_at->diffForHumans() }}</span>
                                    </p>
                                    <p class="info"> {{  \Illuminate\Support\Str::limit(strip_tags($event->description),70, '...')}} </p>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12  justify-content-center">
                <div class="see_more text-center">
                    <a href="{{url('/events-more')}}" class="btnw">View all events <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>


    {{-- <!-- video area -->

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- Video  -->
                <div class="video-area">
                    <div class="video-wrapper">
                        <div class="right-content">
                            <div class="video-img">
                                <img src="{{asset('public/')}}/{{@$event->img}}" alt="" style="height:350px;">
                                <!--video icon -->
                                <div class="video-icon video-icon2">
                                    <a class="popup-video btn-icon" href="{{@$event->url}}" data-animation="bounceIn" data-delay=".4s"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Video -->
            </div>
        </div>
    </div> --}}




@endsection

@push('css')

@endpush

@push('script')

@endpush
