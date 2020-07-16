@extends('website.layouts.master')
@section('title','Blogger Program')
@section('content')


    <!-- Page Tittle Start -->
    <div class="page_tittle_area text-center">
       <div class="container">
         <div class="page-tittle mb-50 pt-20 pb-20">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Are you a blogger? get a free sample to review</h2>
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
                        <form class="row" method="POST" action="{{route('blogger_info_submit')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-xl-6">
                                <div class="single-input">
                                    <label for="name">Your Name</label>
                                    <input class="input-box" type="text" name="name" id="name" placeholder="Your full name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="single-input">
                                    <label for="email">Your Email</label>
                                    <input class="input-box" type="email"  name="email" id="email" placeholder="Your Email Address">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-input">
                                    <label for="country">Your Country</label>
                                    <input class="input-box" type="text" name="country" id="country" placeholder="Your Country">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="single-input">
                                    <label for="blogger">Are you a blogger</label>
                                    <input class="input-box" type="text" name="blog_link" id="blogger" placeholder="Link to your blog">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="single-input">
                                    <label for="blogger">-</label>
                                    <input class="input-box" type="text" name="no_of_readers" id="readers" placeholder="Number of readers">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="single-input">
                                    <label for="blogger">Are you a vlogger</label>
                                    <input class="input-box" type="text" name="vlog_link" id="vlogger" placeholder="Link to your vlog">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="single-input">
                                    <label for="subscribes">-</label>
                                    <input class="input-box" type="text" name="no_of_subscribes" id="subscribes" placeholder="Number of subscribes">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="single-input">
                                    <label>Are you active in social networks</label>
                                    <input class="input-box" name="facebook" type="text" placeholder="Facebook page">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="single-input">
                                    <label for="subscribes">-</label>
                                    <input class="input-box" name="twitter" type="text" placeholder="Twitter account">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="single-input">
                                    <input class="input-box" name="instagram" type="text" placeholder="Instagram account">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="single-input">
                                    <input class="input-box" name="linkedin" type="text" placeholder="Linkedin account">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="single-input">
                                    <input class="input-box" name="pinterest" type="text" placeholder="Pinterest page">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="single-input">
                                    <input class="input-box" name="snapchat" type="text" placeholder="Snapchat account">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="single-input">
                                    <input class="input-box" name="tiktok" type="text" placeholder="Tiktok account">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="single-input">
                                    <input class="input-box" name="youtube" type="text" placeholder="Youtube page">
                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="single-input">
                                    <label for="message">Write your message</label>
                                    <textarea class="input-box" name="message" id="message" rows="6" placeholder="Write a message"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-input">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <label for="portfolio">Portfolio:</label>
                                            <input class="input-file" type="file" name="portfolio" id="portfolio">
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="file">File(PDF, Docx):</label>
                                            <input class="input-file" type="file" name="file" id="file">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-input">
                                <label for="capcha">RECAPTCHA:*</label>
                                {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
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
