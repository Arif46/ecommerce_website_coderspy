@extends('website.layouts.master')
@section('title','Your feedback')
@section('content')


    <!-- Page Tittle Start -->
    <div class="page_tittle_area text-center">
       <div class="container">
         <div class="page-tittle mb-50 pt-20 pb-20">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Request Fragrance</h2>
                </div>
            </div>
         </div>
       </div>
    </div>
    <!-- Page Tittle End -->

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
                            <form method="POST" action="{{route('request_freagrance_submit')}}" enctype="multipart/form-data">
                            @csrf
                            <p>* Indicates required field</p>
                            <div class="single-input">
                                <label for="name">Name:*</label>
                                <input class="input-box" type="text" name="name" id="name">
                            </div>
                            <div class="single-input">
                                <label>Gender:*</label>
                                <div class="row">
                                    <div class="col-xl-2">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="male" name="gender" value="0" required>
                                            <label class="custom-control-label" for="male">Male</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="custom-control custom-radio mb-3">
                                            <input type="radio" class="custom-control-input" id="female" name="gender" value="1" required>
                                            <label class="custom-control-label" for="female">Female</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-input">
                                <label for="nationality">Nationality:*</label>
                                <input class="input-box" type="text" name="nationality" id="nationality">
                            </div>
                            <div class="single-input">
                                <label for="mobile">Mobile Number:*</label>
                                <input class="input-box" type="text" name="phone" id="mobile">
                            </div>
                            <div class="single-input">
                                <label for="email">Email:*</label>
                                <input class="input-box" type="email" name="email" id="email">
                            </div>

                            <div class="single-input">
                                <label>Age:*</label>
                                <div class="row">
                                    <div class="col-xl-2">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="below20" value="1" name="age" required>
                                            <label class="custom-control-label" for="below20">Below 20</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="custom-control custom-radio mb-3">
                                            <input type="radio" class="custom-control-input" id="t21to25" value="2" name="age" required>
                                            <label class="custom-control-label" for="t21to25">21 to 25</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="custom-control custom-radio mb-3">
                                            <input type="radio" class="custom-control-input" id="t25to30" value="3" name="age" required>
                                            <label class="custom-control-label" for="t25to30">25 to 30</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="custom-control custom-radio mb-3">
                                            <input type="radio" class="custom-control-input" id="t30to35" value="4" name="age" required>
                                            <label class="custom-control-label" for="t30to35">30 to 35</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="custom-control custom-radio mb-3">
                                            <input type="radio" class="custom-control-input" id="above35" value="5" name="age" required>
                                            <label class="custom-control-label" for="above35">Above 35</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-input">
                                <label>Where do you normally hear about Al Haramain products?</label>
                                <div class="row mt-10">
                                    <div class="col-xl-12 mb-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="whileshopping" name="about_source" value="1" required>
                                            <label class="custom-control-label" for="whileshopping">While shopping</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="wordofmouth" name="about_source" value="2" required>
                                            <label class="custom-control-label" for="wordofmouth">Word of mouth</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="billboards" name="about_source" value="3" required>
                                            <label class="custom-control-label" for="billboards">Billboards</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="internet" name="about_source" value="4" required>
                                            <label class="custom-control-label" for="internet">Internet</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="newspaper" name="about_source" value="5" required>
                                            <label class="custom-control-label" for="newspaper">Newspaper</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="tvads" name="about_source" value="6" required>
                                            <label class="custom-control-label" for="tvads">TV Ads</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-input">
                                <label>How long have you been using our product?</label>
                                <div class="row mt-10">
                                    <div class="col-xl-12 mb-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="rad1" name="product_using_time" value="1" required>
                                            <label class="custom-control-label" for="rad1">Less than a month</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="rad2" name="product_using_time" value="2" required>
                                            <label class="custom-control-label" for="rad2">1-12 months</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="rad3" name="product_using_time" value="3" required>
                                            <label class="custom-control-label" for="rad3">1 – 3 years</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="rad4" name="product_using_time" value="4" required>
                                            <label class="custom-control-label" for="rad4">Over 3 years</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="rad5" name="product_using_time" value="5" required>
                                            <label class="custom-control-label" for="rad5">Never Used</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-input">
                                <label>Which line of Al Haramain products are you most interested in?</label>
                                <div class="row mt-10">
                                    <div class="col-xl-12 mb-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="rad6" name="interested_product" value="1" required>
                                            <label class="custom-control-label" for="rad6">Exclusive</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="rad7" name="interested_product" value="2" required>
                                            <label class="custom-control-label" for="rad7">Dehnal Oud</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="rad8" name="interested_product" value="3" required>
                                            <label class="custom-control-label" for="rad8">Perfume Oil</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="rad9" name="interested_product" value="4" required>
                                            <label class="custom-control-label" for="rad9">Spray</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="rad10" name="interested_product" value="5" required>
                                            <label class="custom-control-label" for="rad10">Others</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-input">
                                <label>(If Others, please mention the name.)</label>
                                <input class="input-box" type="text" name="other_source">
                            </div>
                            <div class="single-input">
                                <label>What do you think about our new releases? (Please mention the product)*</label>
                                <input class="input-box" type="text" name="about_new_release">
                            </div>
                            <div class="single-input">
                                <label>Which other types of products would you be interested that are not currently offered?</label>
                                <input class="input-box" type="text" name="suggest_product">
                            </div>
                            <div class="single-input">
                                <label>What is your overall Experience with our product?</label>
                                <div class="row mt-10">
                                    <div class="col-xl-12 mb-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="rad11" name="overall_experience" value="1" required>
                                            <label class="custom-control-label" for="rad11">Very Satisfied</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="rad12" name="overall_experience" value="2" required>
                                            <label class="custom-control-label" for="rad12">Satisfied</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="rad13" name="overall_experience" value="3" required>
                                            <label class="custom-control-label" for="rad13">Neutral</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="rad14" name="overall_experience" value="4" required>
                                            <label class="custom-control-label" for="rad14">Unsatisfied</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="rad15" name="overall_experience" value="5" required>
                                            <label class="custom-control-label" for="rad15">Very Unsatisfied</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-input">
                                <label>What impressed you the most about our product?</label>
                                <div class="row mt-10">
                                    <div class="col-xl-12 mb-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="rad16" name="impressed_product" value="1" required>
                                            <label class="custom-control-label" for="rad16">Very Satisfied</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="rad17" name="impressed_product" value="2" required>
                                            <label class="custom-control-label" for="rad17">Satisfied</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="rad18" name="impressed_product" value="3" required>
                                            <label class="custom-control-label" for="rad18">Neutral</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="rad19" name="impressed_product" value="4" required>
                                            <label class="custom-control-label" for="rad19">Unsatisfied</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="20" name="impressed_product" value="5" required>
                                            <label class="custom-control-label" for="20">Very Unsatisfied</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-input">
                                <label for="message">Message:*</label>
                                <textarea class="input-box" name="message" id="message" rows="4"></textarea>
                            </div>
                            <div class="single-input">
                                <label for="capcha">RECAPTCHA:*</label>
                                {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                            </div>
                            {{-- <div class="single-input mt-40 mb-40">
                                <label>Your Feedback:*</label>
                                <div class="rating-numbers">
                                    <a href="" class="rating-number">1</a>
                                    <a href="" class="rating-number">2</a>
                                    <a href="" class="rating-number">3</a>
                                    <a href="" class="rating-number">4</a>
                                    <a href="" class="rating-number">5</a>
                                    <a href="" class="rating-number">6</a>
                                    <a href="" class="rating-number">7</a>
                                    <a href="" class="rating-number">8</a>
                                    <a href="" class="rating-number">9</a>
                                    <a href="" class="rating-number">10</a>
                                </div>
                            </div> --}}

                            <div class="single-input">
                                <button class="boxed_btn" type="submit">Submit</button>
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
