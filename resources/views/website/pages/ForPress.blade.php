@extends('website.layouts.master')

@section('content')

        <div class="Subscription_area text-center">
            <span><a href="for-press.html">For Press</a></span>
        </div>


        <div class="section_padding mb-180" style="background: url( {{asset('public/')}}{{ @$data->banner_image}} ) no-repeat center/cover; height:690; width:1440x">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                        <div class="press-form">
                            <h3>{{ @$data->title}}</h3>
                            
                            <div class="profile">
                                <div class="thumb">
                                    <img height="60" width="60" src="{{asset('public/')}}/{{ @$data->profile}}" alt="">
                                </div>
                                <div class="info">
                                    <p>{{ @$data->name}}</p>
                                    <p>{{ @$data->designation}}</p>
                                    <p><a href="">{{ @$data->email}}</a></p>
                                </div>
                            </div>
                            <form class="row" method="POST" action="{{route('press_contact_submit')}}" enctype="multipart/form-data">
                                @if(session('message'))
                                    <div class="row align-items-center">
                                        <div class="col-lg-12 text-center">
                                            <p style="color:green; padding:5px;" class="">  {{session('message')}} </p>
                                        </div>
                                    </div>
                                @endif
                                @csrf 
                                <input type="text" name="name" placeholder="Your name" required>
                                <input type="email" name="email" placeholder="Your email address" required>
                                <textarea name="message" rows="4" placeholder="Your message" required></textarea>
                                <div class="single-input mb-20">
                                    <label for="capcha">RECAPTCHA:*</label>
                                    {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}
                                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                </div>
                                <button type="submit" class="boxed_btn">Send</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section_padding">
            <div class="container">
                <div class="row mb-60">
                    <div class="col-xl-12">
                        <img height="436" width="1364" src="{{asset('public/')}}{{ @$data->about_us_image}}" class="w-100" alt="">
                    </div>
                </div>
                <div class="row justify-content-center">

                    @foreach ($press_lists as $press_list)
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <a href="{{ @$press_list->url}}">
                                <img src="{{asset('public')}}/{{ @$press_list->image}}" class="w-100 press-box-shadow" alt="">
                            </a>
                        </div>
                    @endforeach
                    {{-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <a href="">
                            <img src="{{url('public/website/img/press/2.png')}}" class="w-100 press-box-shadow" alt="">
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <a href="">
                            <img src="{{url('public/website/img/press/3.png')}}" class="w-100 press-box-shadow" alt="">
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <a href="">
                            <img src="{{url('public/website/img/press/4.png')}}" class="w-100 press-box-shadow" alt="">
                        </a>
                    </div> --}}
                </div>
                {{-- <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <a href="">
                            <img src="{{url('public/website/img/press/2.png')}}" class="w-100 press-box-shadow" alt="">
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <a href="">
                            <img src="{{url('public/website/img/press/1.png')}}" class="w-100 press-box-shadow" alt="">
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <a href="">
                            <img src="{{url('public/website/img/press/4.png')}}" class="w-100 press-box-shadow" alt="">
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <a href="">
                            <img src="{{url('public/website/img/press/3.png')}}" class="w-100 press-box-shadow" alt="">
                        </a>
                    </div>
                </div> --}}
            </div>
        </div>

@endsection

@push('css')

@endpush

@push('script')

@endpush
