@extends('website.layouts.master')

@section('content')

    <!-- Subscription_area -->
    <div class="Subscription_area text-center">
        <span><a href="for-business.html">For Business </a></span>
    </div>
    <!-- Subscription_area -->

    <!--Googel From Area  -->
    <div class="section_padding">
        <div class="container">
            <div class="row mb-60">
                <div class="col-xl-12">
                    <div class="for-business-content">
                        <p class="mb-40">Al Haramain Perfumes Group of Companies offers a complete continuum of brands and programs to satisfy the diverse and dynamic needs of our customers. <br>From a perfectly distilled bottle of Dehn’al Oudh to a wide selection of perfumes, we are proud to bring these uniquely tailored growth opportunities to you. <br> With more than 45 years of manufacture and retail store experience, we can give you the support you need to achieve excellence in any operation.</p>
                        <h3>Our Channels</h3>
                        <p class="mb-40">The only thing better than enjoying perfume is offering it to others. <br>Explore our wide range of programs for businesses below, and find out how you can offer Al Haramain Perfumes as a Distributor, Retail, or as a Gift.</p>
                        <h4>Retail Location</h4>
                        <p>Create a more complete perfumer experience with an Al Haramain store at your retail location. Discover how you can qualify to own and operate a licensed store.</p>
                        <h4>Become a Distributor</h4>
                        <p>Distributors are the bridge between the end customers and the manufactures of the product. Some confusion arises regarding the definition of Distributors, Wholesalers or Dealers. Distributors sell the product, which the wholesalers then deliver. An authorized dealer meets certain requirements from the manufacturer, to represent their Brand. Requirements vary far and wide. Exactly what steps you’ll require to be a distributor depends on the specific company and distributorship.</p>
                        <h4>Together, it’s success</h4>
                        <p>We strive with challenge and innovative ways to grow and develop our passion. In this process of growing, our patrons have an equal share in exploring <br>and accomplishing diverse market. We have achieved a lot and yet more to conquer, hence we always welcome new Distributors and Suppliers <br>to spread our portfolio of fragrance. If you wish to aboard, please, fill the form below and give us some time for us to get in touch with you.</p>
                    </div>
                </div>                        
                <div class="section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        @if(session('message'))
                                    <div class="row align-items-center">
                                        <div class="col-lg-12 text-center">
                                            <p style="color:green; padding:5px;" class="">  {{session('message')}} </p>
                                        </div>
                                    </div>
                                @endif
                        <div class="special-form customer-feedback-form">
                             <form method="POST" action="{{route('contact_info_submit')}}" enctype="multipart/form-data">
                                @csrf
                                <h6>Thank you for your interest in distributing MyFragmanceMe Perfumes products. Please complete the form below in full for our consideration. Our team will contact you, to discuss your enquiry. We look forward doing business with you.</h6>
                                <p>* indicates required field</p>
                                <div class="col-xl-12">
                                    <div class="single-input">
                                        <label for="email">Email Address*</label>
                                        <input class="input-box" type="email" name="email" id="email" placeholder="Your email">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="single-input">
                                        <label for="contact">Contact Person*</label>
                                        <p class="small">The person to contact regarding this enquiry / submission</p>
                                        <input class="input-box" name="contact_person" type="text" id="contact" placeholder="Your answer">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="single-input">
                                        <label for="contact">Position in Company*</label>
                                        <p class="small">Your position in the company (e.g. Purchasing Manager / Director)</p>
                                        <input class="input-box" type="text" name="position" id="contact" placeholder="Your answer">
                                    </div>
                                </div>

                            <div class="col-xl-12">
                                <div class="single-input">
                                    <label for="contact">Phone Number (Include Country Code)*</label>
                                    <input class="input-box" type="text" name="phone" id="contact" placeholder="Your answer">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-input">
                                    <label for="contact">Company Name*</label>
                                    <p class="small">The name of the registered company that will be distributing Al Haramain Perfumes products</p>
                                    <input class="input-box" type="text" name="company_name" id="contact" placeholder="Your answer">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-input">
                                    <label for="contact">Postal Address*</label>
                                    <input class="input-box" type="text" name="postal_area" id="contact" placeholder="Your answer">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-input">
                                    <label for="contact">Country *</label>
                                    <p class="small">The country in which the company is based. If more than one, please enter the main country</p>
                                    <input class="input-box" type="text" name="country" id="contact" placeholder="Your answer">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-input">
                                    <label for="contact">Company Phone Number (Include Country Code)</label>
                                    <input class="input-box" type="text" name="company_phone" id="contact" placeholder="Your answer">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-input">
                                    <label for="contact">Company E-mail Address</label>
                                    <p class="small">The e-mail address of the company (if available)</p>
                                    <input class="input-box" type="email" name="company_email" id="contact" placeholder="Your answer">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-input">
                                    <label for="contact">Number of Employees (Yearly Average)</label>
                                    <p class="small">How many employees does your company have (on average)</p>
                                    <input class="input-box" type="text" name="no_of_employee" id="contact" placeholder="Your answer">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-input">
                                    <label for="contact">Year(s) of Establishment *</label>
                                    <p class="small">For how many years has your company been operating? (If new company, please enter 0)</p>
                                    <input class="input-box" type="text" name="establishment_year" id="contact" placeholder="Your answer">
                                </div>


                                <div class="single-input">
                                    <label for="contact">Distribution Area(s) *</label>
                                    <input class="input-box" type="text" name="distribution_area" id="contact" placeholder="Your answer">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-input">
                                    <label for="contact">Prior or Current Dealership</label>
                                    <p class="small">Have you distributed other products before? Please provide details</p>
                                    <input class="input-box" type="text" name="current_delarship" id="contact" placeholder="Your answer">
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
                                    <label>Thank you</label>
                                    <p class="small">MyFragmanceMe Perfumes L.L.C </p>
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
{{--                 <div class="row">
                    <div class="col-xl-3 col-md-3 col-sm-6">
                        <div class="special-form">
                            <form method="POST" action="{{route('contact_info_submit')}}" enctype="multipart/form-data">
                          @csrf
                                <div class="single-input">
                                    <label for="name">Name:*</label>
                                    <input class="input-box" type="text" name="name" id="name">
                                </div>
                                <div class="single-input">
                                    <label for="email">Email:*</label>
                                    <input class="input-box" type="email" name="email" id="email">
                                </div>
                                <div class="single-input">
                                    <label for="subject">Subject:*</label>
                                    <input class="input-box" type="text" name="subject" id="subject">
                                </div>
                                <div class="single-input">
                                    <label for="message">Message:*</label>
                                    <textarea class="input-box" name="message" id="message" rows="4"></textarea>
                                </div>
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
                                <img src="img/capcha.png" alt="">
                            </div>
                            <div class="single-input">
                                <label for="capcha">CAPTCHA Code:*</label>
                                <input class="input-box" type="text" name="captcha" id="capcha">
                            </div>
                            <div class="single-input">
                                <button class="boxed_btn" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-9 col-md-9 col-sm-6">
                    <!-- Right Form -->
                    <div class="col-xl-9 col-md-9 col-sm-6">
                        <div class="right-google-forms">
                            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdGTcgfHl97DT2Hm_2fiAsoyA1ZyzSZln3NOnKCljNy7_ynPw/viewform?embedded=true" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                        </div>
                    </iframe>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

@endsection

@push('css')

@endpush

@push('script')

@endpush
