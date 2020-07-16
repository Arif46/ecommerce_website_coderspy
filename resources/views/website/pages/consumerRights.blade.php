@extends('website.layouts.master')
@section('title','Blogs')
@php
    $setting= App\GeneralSetting::first();
@endphp
@section('content')
 <style>
     .consumer-rights{
         margin-bottom: 25px;
     }
 </style>
    <div class="Subscription_area text-center">
        <span><a href="brands.html">Consumer Rights</a></span>
    </div>
        <div class="section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 text-center">
                    <h3 class="consumer-rights">{{@$consumer_right->details}}</h3>
                            <img src="{{asset('')}}{{@$consumer_right->img}}" alt="">
                    </div>
                </div>
            </div>
        </div>
@endsection

@push('css')

@endpush

@push('script')

@endpush
