@extends('website.layouts.master')
@section('title','Registration form')
@section('content')
<style>

.btn-purple {
  color: #FFF;
  background-color: #5856d6;
  border-color: #5856d6;
}

.btn-purple:active,
.btn-purple:focus,
.btn-purple:hover {
  background-color: #3331c8;
  border-color: #3331c8;
  color: #FFF;
}

.btn-purple.btn-outline {
  background-color: transparent;
  border-color: #5856d6;
  color: #5856d6;
}

.btn-purple.btn-outline:active,
.btn-purple.btn-outline:focus,
.btn-purple.btn-outline:hover {
  background-color: #5856d6;
  border-color: #5856d6;
  color: #5856d6;
}

.btn-color-470604 {
  color: #ffffff !important;
  background: linear-gradient(to left, #e9168c 2%, #f75254 99%);
  background: -o-linear-gradient(left, #e9168c 2%, #f75254 99%);
  background: -ms-linear-gradient(left, #e9168c 2%, #f75254 99%);
  background: -moz-linear-gradient(left, #e9168c 2%, #f75254 99%);
  background: -webkit-linear-gradient(left, #e9168c 2%, #f75254 99%);
  border-image: linear-gradient(to left, #e9168c 2%, #f75254 99%);
  border-image: -o-linear-gradient(left, #e9168c 2%, #f75254 99%);
  border-image: -ms-linear-gradient(left, #e9168c 2%, #f75254 99%);
  border-image: -moz-linear-gradient(left, #e9168c 2%, #f75254 99%);
  border-image: -webkit-linear-gradient(left, #e9168c 2%, #f75254 99%);
}

.btn-color-470604:active,
.btn-color-470604:focus,
.btn-color-470604:hover {
  background: linear-gradient(to left, #e9168c 2%, #f75254 99%);
  background: -o-linear-gradient(left, #e9168c 2%, #f75254 99%);
  background: -ms-linear-gradient(left, #e9168c 2%, #f75254 99%);
  background: -moz-linear-gradient(left, #e9168c 2%, #f75254 99%);
  background: -webkit-linear-gradient(left, #e9168c 2%, #f75254 99%);
  border-image: linear-gradient(to left, #e9168c 2%, #f75254 99%);
  border-image: -o-linear-gradient(left, #e9168c 2%, #f75254 99%);
  border-image: -ms-linear-gradient(left, #e9168c 2%, #f75254 99%);
  border-image: -moz-linear-gradient(left, #e9168c 2%, #f75254 99%);
  border-image: -webkit-linear-gradient(left, #e9168c 2%, #f75254 99%);
}

.btn-gradient-2 {
  color: #ffffff !important;
  background: linear-gradient(left, #089997 2%, #1e101d 99%);
  background: -o-linear-gradient(left, #089997 2%, #1e101d 99%);
  background: -ms-linear-gradient(left, #089997 2%, #1e101d 99%);
  background: -moz-linear-gradient(left, #089997 2%, #1e101d 99%);
  background: -webkit-linear-gradient(left, #089997 2%, #1e101d 99%);
  border-image: linear-gradient(left, #089997 2%, #1e101d 99%);
  border-image: -o-linear-gradient(left, #089997 2%, #1e101d 99%);
  border-image: -ms-linear-gradient(left, #089997 2%, #1e101d 99%);
  border-image: -moz-linear-gradient(left, #089997 2%, #1e101d 99%);
  border-image: -webkit-linear-gradient(left, #089997 2%, #1e101d 99%);
}

.btn-gradient-2:active,
.btn-gradient-2:focus,
.btn-gradient-2:hover {
  background: linear-gradient(left, #089997 2%, #1e101d 99%);
  background: -o-linear-gradient(left, #089997 2%, #1e101d 99%);
  background: -ms-linear-gradient(left, #089997 2%, #1e101d 99%);
  background: -moz-linear-gradient(left, #089997 2%, #1e101d 99%);
  background: -webkit-linear-gradient(left, #089997 2%, #1e101d 99%);
  border-image: linear-gradient(left, #089997 2%, #1e101d 99%);
  border-image: -o-linear-gradient(left, #089997 2%, #1e101d 99%);
  border-image: -ms-linear-gradient(left, #089997 2%, #1e101d 99%);
  border-image: -moz-linear-gradient(left, #089997 2%, #1e101d 99%);
  border-image: -webkit-linear-gradient(left, #089997 2%, #1e101d 99%);
}

.btn-facebook {
  color: #fff;
  background-color: #3b5998;
  border-color: #3b5998;
}
.btn-linkedin {
  color: #fff;
  background-color: #0077b5;
  border-color: #0077b5;
}
.btn-instagram {
  color: #fff;
  background-color: #b55427;
  border-color: #b55427;
}

.btn-facebook:active,
.btn-facebook:focus,
.btn-facebook:hover {
  background-color: #2d4373;
  border-color: #2d4373;
  color: #fff;
}

.btn-facebook.btn-outline {
  background-color: transparent;
  border-color: #3b5998;
  color: #3b5998;
}

.btn-facebook.btn-outline:active,
.btn-facebook.btn-outline:focus,
.btn-facebook.btn-outline:hover {
  background-color: #3b5998;
  border-color: #3b5998;
  color: #3b5998;
}

.btn-google {
  color: #fff;
  background-color: #dd4b39;
  border-color: #dd4b39;
}

.btn-google:active,
.btn-google:focus,
.btn-google:hover {
  background-color: #c23321;
  border-color: #c23321;
  color: #fff;
}

.btn-google.btn-outline {
  background-color: transparent;
  border-color: #dd4b39;
  color: #dd4b39;
}

.btn-google.btn-outline:active,
.btn-google.btn-outline:focus,
.btn-google.btn-outline:hover {
  background-color: #dd4b39;
  border-color: #dd4b39;
  color: #dd4b39;
}


.btn-twitter {
    color: #fff;
    background-color: #00aced;
    border-color: #00aced;
}

.btn-twitter:active,
.btn-twitter:focus,
.btn-twitter:hover {
    background-color: #0493bf;
    border-color: #0493bf;
    color: #fff;
}

.btn-twitter.btn-outline {
    background-color: transparent;
    border-color: #00aced;
    color: #00aced;
}

.btn-twitter.btn-outline:active,
.btn-twitter.btn-outline:focus,
.btn-twitter.btn-outline:hover {
    background-color: #00aced;
    border-color: #00aced;
    color: #00aced;
}

.btn-icon-left .icon,
.btn-icon-left .fa {
  margin-right: 0.625rem;
}

.btn-icon-right .icon,
.btn-icon-right .fa {
  margin-left: 0.625rem;
}

.btn-icon--2 {
  position: relative;
  padding-left: 40px !important;
}

.btn-icon--2 .icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  left: 0;
  top: 0;
  width: 40px;
  height: 100%;
  background: rgba(0, 0, 0, 0.2);
}

.link-xs {
    font-size: 0.75rem;
}
a{
        color: #72bf40;
}

.btn-anim-primary:before, .bootstrap-tagsinput .label, .logo-bar-icons .nav-search-box .nav-box-number, .logo-bar-icons .nav-compare-box .nav-box-number, .logo-bar-icons .nav-wishlist-box .nav-box-number, .logo-bar-icons .nav-cart-box .nav-box-number, .side-menu-list ul li .badge, .navbar.bg-base-1, .btn-base-1, .vd--1, .vd--2, .checkbox-primary input[type="checkbox"]:checked + label::before, .checkbox-primary input[type="radio"]:checked + label::before, .radio input[type="radio"]:checked + label::after, .radio-primary input[type="radio"] + label::after, .radio-primary input[type="radio"]:checked + label::after, .form-card--style-2 .form-header, .modal[data-modal-color=base-1] .modal-content, .pagination > .active .page-link, .pagination > .active .page-link:focus, .pagination > .active .page-link:hover, .pagination > .active > span, .pagination > .active > span:focus, .pagination > .active > span:hover, .pager .page-item .page-link:focus, .pager .page-item .page-link:hover, .progress-bar, .flatpickr-month, .hamburger.is-active .hamburger-inner:after, .hamburger.is-active .hamburger-inner:before, .noUi-horizontal .noUi-handle, .noUi-vertical .noUi-handle, .input-group-btn-vertical > .btn:hover, #map-zoom-in:hover, #map-zoom-out:hover, .product-box-2 .add-to-cart:hover {
    background-color: #72bf40;
}
</style>


    <section class="gry-bg py-4">
        <div class="profile">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="card">
                            <div class="text-center px-35 pt-5">
                                <h3 class="heading heading-4 strong-500">
                                    {{__('Create an account.')}}
                                </h3>
                            </div>
                            <div class="px-5 py-3 py-lg-5">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg">
                                        <form class="form-default" role="form" action="{{ route('register') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <!-- <label>{{ __('name') }}</label> -->
                                                        <div class="input-group input-group--style-1">
                                                            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" placeholder="{{ __('Name') }}" name="name">
                                                            <span class="input-group-addon">
                                                                <i class="text-md la la-user"></i>
                                                            </span>
                                                            @if ($errors->has('name'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('name') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        @if (\App\Addon::where('unique_identifier', 'otp_system')->first() != null && \App\Addon::where('unique_identifier', 'otp_system')->first()->activated)
                                                            <small>Country code should be added before phone number</small>
                                                        @endif
                                                        <div class="input-group input-group--style-1">
                                                            @if (\App\Addon::where('unique_identifier', 'otp_system')->first() != null && \App\Addon::where('unique_identifier', 'otp_system')->first()->activated)
                                                                <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{ __('Email or Phone') }}" name="email">
                                                            @else
                                                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{ __('Email') }}" name="email">
                                                            @endif
                                                            <span class="input-group-addon">
                                                                <i class="text-md la la-envelope"></i>
                                                            </span>
                                                            @if ($errors->has('email'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <!-- <label>{{ __('password') }}</label> -->
                                                        <div class="input-group input-group--style-1">
                                                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" name="password">
                                                            <span class="input-group-addon">
                                                                <i class="text-md la la-lock"></i>
                                                            </span>
                                                            @if ($errors->has('password'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('password') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <!-- <label>{{ __('confirm_password') }}</label> -->
                                                        <div class="input-group input-group--style-1">
                                                            <input type="password" class="form-control" placeholder="{{ __('Confirm Password') }}" name="password_confirmation">
                                                            <span class="input-group-addon">
                                                                <i class="text-md la la-lock"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}">
                                                            @if ($errors->has('g-recaptcha-response'))
                                                                <span class="invalid-feedback" style="display:block">
                                                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="checkbox pad-btm text-left">
                                                        <input class="magic-checkbox" type="checkbox" name="checkbox_example_1" id="checkboxExample_1a" required>
                                                        <label for="checkboxExample_1a" class="text-sm">{{__('By signing up you agree to our terms and conditions.')}}</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <div class="col-12 text-right  mt-3">
                                                    <button type="submit" class="btn btn-styled btn-base-1 w-100 btn-md">{{ __('Create Account') }}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-1 text-center align-self-stretch">
                                        <div class="border-right h-100 mx-auto" style="width:1px;"></div>
                                    </div>
                                    <div class="col-12 col-lg">
                                        @if(\App\BusinessSetting::where('type', 'google_login')->first()->value == 1)
                                            <a href="{{ route('social.login', ['provider' => 'google']) }}" class="btn btn-styled btn-block btn-google btn-icon--2 btn-icon-left px-4 my-4">
                                                <i class="icon fa fa-google"></i> {{__('Login with Google')}}
                                            </a>
                                        @endif
                                        @if (\App\BusinessSetting::where('type', 'facebook_login')->first()->value == 1)
                                            <a href="{{ route('social.login', ['provider' => 'facebook']) }}" class="btn btn-styled btn-block btn-facebook btn-icon--2 btn-icon-left px-4 my-4">
                                                <i class="icon fa fa-facebook"></i> {{__('Login with Facebook')}}
                                            </a>
                                        @endif
                                        @if (\App\BusinessSetting::where('type', 'twitter_login')->first()->value == 1)
                                        <a href="{{ route('social.login', ['provider' => 'twitter']) }}" class="btn btn-styled btn-block btn-twitter btn-icon--2 btn-icon-left px-4 my-4">
                                            <i class="icon fa fa-twitter"></i> {{__('Login with Twitter')}}
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="text-center px-35 pb-3">
                                <p class="text-md">
                                    {{__('Already have an account?')}}<a href="{{ route('customersLogin') }}" class="strong-600">{{__('Log In')}}</a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

@push('css')

@endpush

@push('script')

@endpush
