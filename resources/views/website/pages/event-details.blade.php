@extends('website.layouts.master')
@section('title',@$event->title)
@php
    $setting= App\GeneralSetting::first();
@endphp
@section('content')
    <div class="blog-details section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-md-12">

                    <div class="blog-title mb-30">
                        <h2> {{ $event->title }}</h2>
                    </div>
                    <div class="blog-date mb-40">
                        <p> {{\Carbon\Carbon::parse($event->created_at)->format('l M, d, Y')}} <span>I</span> <span>{{ $event->created_at->diffForHumans() }}</span></p>
                    </div>
                    <div class="blog-img mb-40">
                        <img src="{{url('public/'.$event->img)}}" alt="">
                    </div>
                    <div class="blog-meta mb-30">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="share float-right">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-google"></i></a>
                                    <a href=""><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-text mb-60">
                        <p>{!! @$event->description !!}</p>
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
