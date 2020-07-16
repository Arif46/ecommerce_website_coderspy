@extends('website.layouts.master')
@section('title','Blogs')
@php
    $setting= App\GeneralSetting::first();
@endphp
@section('content')
 <style>
     .working_with{
         width:100%;
         height: 300px;
     }
 </style>
    <div class="Subscription_area text-center">
        <span><a href="{{url('careers/available-positions')}}">Working with MyFragranceMe</a></span>
    </div> 
    <div class="section_padding">
        <div class="container">
            <a href="{{url('careers/available-positions')}}">
                <div class="row justify-content-center">
                <img src="{{asset('/')}}{{@$careers->img}}" alt="" class="img img-responsive working_with">
                </div>
            </a>
            <div class="row mt-40">
                <h3>{{ @$careers->title}}</h3>
                <p>{{ @$careers->details}}</p>
            </div> 
            <div class="row justify-content-center mt-40">
                <div class="col-lg-12 text-center">
                    <a href="{{url('careers/available-positions')}}" class="boxed_btn">Apply Now <i class="fa fa-angle-right"></i></a>
                </div> 
            </div>
        </div>
    </div>
@endsection

@push('css')

@endpush

@push('script')

@endpush
