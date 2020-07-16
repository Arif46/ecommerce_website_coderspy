@extends('website.layouts.master')
@section('title','Distributor Information Form')
@section('content')

{{--
    <div class="Subscription_area text-center">
        <span><a href="myblend.html">Supplier </a></span>
    </div>  --}}


    <!-- Subscription_area Start -->
    <div class="Subscription_area text-center">
        <span><a href="supplier.html">Distributor Information Form</a></span>
    </div>
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
                            <form class="row" method="POST" action="{{route('supplier_submit')}}" enctype="multipart/form-data">
                                @csrf
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
                                    <label for="contact">Average Annual Sales (In USD) *</label>
                                    <p class="small">The average annual sales of your company (in the US Dollar equivalent). If it's a new company, please input your projected sales</p>
                                    <input class="input-box" type="text" name="avg_annual_sale" id="contact" placeholder="Your answer">
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
                            </div>
                            <div class="col-xl-12">
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
                            <div class="col-xl-12">
                                <div class="single-input">
                                    <label>Thank you</label>
                                    <p class="small">MyFragmanceMe Perfumes L.L.C </p>
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
