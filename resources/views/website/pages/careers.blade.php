@extends('website.layouts.master')
@section('title','Blogs')
@php
    $setting= App\GeneralSetting::first();
@endphp
@section('content')

    <!-- Page Tittle Start -->
    <div class="page_tittle_area text-center">
       <div class="container">
         <div class="page-tittle mb-50 pt-20 pb-20">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Apply Now</h2>
                </div>
            </div>
         </div>
       </div>
    </div>
    <!-- Page Tittle End -->

    <div class="section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    @if(session('message'))
                                <div class="row align-items-center">
                                    <div class="col-lg-12 text-center">
                                        <p style="color:green; padding:5px;" class="">  {{session('message')}} </p>
                                    </div>
                                </div>
                            @endif
                    <div class="special-form blogger-form">
                        <p class="text-justify">Thank you for your interest in joining Al Haramain Perfumes.
                            Please fill in the form below completely, and attach your CV.
                            Make sure your CV has your latest colour photo. Applications without a CV will not be considered.</p>
                        <form class="row" method="POST" action="{{route('applicant_form_submit')}}" enctype="multipart/form-data">
                            @csrf
                        <input type="hidden" name="position_id" value="{{@$career_position->id}}">
                            <div class="col-xl-6">
                                <div class="single-input">
                                    <label for="name">Name</label>
                                    <input class="input-box form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" id="name" placeholder="Your Full Name" required>
                                    <span class="focus-border"></span>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="single-input">
                                    <label for="email">Email</label>
                                    <input class="input-box form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email"  name="email" id="email" placeholder="Your Email Address" required>
                                    <span class="focus-border"></span>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-input">
                                    <label for="area_of_interest">Area of Interest</label>
                                    <input class="input-box form-control{{ $errors->has('area_of_interest') ? ' is-invalid' : '' }}" type="text" name="area_of_interest" id="area_of_interest" placeholder="Position you are interested" required>
                                    <span class="focus-border"></span>
                                    @if ($errors->has('area_of_interest'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('area_of_interest') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="single-input">
                                    <label for="cover_letter">Cover Letter</label>
                                    <textarea class="input-box form-control{{ $errors->has('cover_letter') ? ' is-invalid' : '' }}" name="cover_letter" id="cover_letter" rows="6" placeholder="Write your message" required></textarea>
                                    <span class="focus-border"></span>
                                    @if ($errors->has('cover_letter'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('cover_letter') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-input">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <label for="resume">Resume:</label>
                                            <input class="input-file form-control{{ $errors->has('resume') ? ' is-invalid' : '' }}" type="file" name="resume" id="resume" required>
                                            <span class="focus-border"></span>
                                            @if ($errors->has('resume'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('resume') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-input">
                                    <label for="capcha">RECAPTCHA:*</label>
                                    {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}
                                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-input">
                                    <button type="submit" class="boxed_btn">Submit</button>
                                </div>
                            </div>
                        </form>
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
