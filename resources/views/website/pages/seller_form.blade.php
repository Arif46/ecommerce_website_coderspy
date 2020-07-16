@extends('website.layouts.master')

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

    a {
        color: #72bf40;
    }

    .btn-anim-primary:before,
    .bootstrap-tagsinput .label,
    .logo-bar-icons .nav-search-box .nav-box-number,
    .logo-bar-icons .nav-compare-box .nav-box-number,
    .logo-bar-icons .nav-wishlist-box .nav-box-number,
    .logo-bar-icons .nav-cart-box .nav-box-number,
    .side-menu-list ul li .badge,
    .navbar.bg-base-1,
    .btn-base-1,
    .vd--1,
    .vd--2,
    .checkbox-primary input[type="checkbox"]:checked+label::before,
    .checkbox-primary input[type="radio"]:checked+label::before,
    .radio input[type="radio"]:checked+label::after,
    .radio-primary input[type="radio"]+label::after,
    .radio-primary input[type="radio"]:checked+label::after,
    .form-card--style-2 .form-header,
    .modal[data-modal-color=base-1] .modal-content,
    .pagination>.active .page-link,
    .pagination>.active .page-link:focus,
    .pagination>.active .page-link:hover,
    .pagination>.active>span,
    .pagination>.active>span:focus,
    .pagination>.active>span:hover,
    .pager .page-item .page-link:focus,
    .pager .page-item .page-link:hover,
    .progress-bar,
    .flatpickr-month,
    .hamburger.is-active .hamburger-inner:after,
    .hamburger.is-active .hamburger-inner:before,
    .noUi-horizontal .noUi-handle,
    .noUi-vertical .noUi-handle,
    .input-group-btn-vertical>.btn:hover,
    #map-zoom-in:hover,
    #map-zoom-out:hover,
    .product-box-2 .add-to-cart:hover {
        background-color: #72bf40;
    }
    </style>
    <section class="gry-bg py-4 profile">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-9 mx-auto">
                    <div class="main-content">
                        <!-- Page title -->
                        <div class="page-title">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h2 class="heading heading-6 text-capitalize strong-600 mb-0">
                                        {{__('Shop Informations')}}
                                    </h2>
                                </div>
                                <div class="col-md-6">
                                    <div class="float-md-right">
                                        <ul class="breadcrumb">
                                            <li><a href="{{ route('home') }}">{{__('Home')}}</a></li>
                                            <li><a href="{{ route('dashboard') }}">{{__('Dashboard')}}</a></li>
                                            <li class="active"><a href="{{ route('shops.create') }}">{{__('Create Shop')}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form class="" action="{{ route('shops.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if (!Auth::check())
                                <div class="form-box bg-white mt-4">
                                    <div class="form-box-title px-3 py-2">
                                        {{__('User Info')}}
                                    </div>
                                    <div class="form-box-content p-3">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- <label>{{ __('Name') }}</label> -->
                                                    <div class="input-group input-group--style-1">
                                                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" placeholder="{{ __('Name') }}" name="name">
                                                        <span class="input-group-addon">
                                                            <i class="text-md la la-user"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- <label>{{ __('Email') }}</label> -->
                                                    <div class="input-group input-group--style-1">
                                                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{ __('Email') }}" name="email">
                                                        <span class="input-group-addon">
                                                            <i class="text-md la la-envelope"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- <label>{{ __('Password') }}</label> -->
                                                    <div class="input-group input-group--style-1">
                                                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" name="password">
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
                                                    <!-- <label>{{ __('Confirm Password') }}</label> -->
                                                    <div class="input-group input-group--style-1">
                                                        <input type="password" class="form-control" placeholder="{{ __('Confirm Password') }}" name="password_confirmation">
                                                        <span class="input-group-addon">
                                                            <i class="text-md la la-lock"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="form-box bg-white mt-4">
                                <div class="form-box-title px-3 py-2">
                                    {{__('Basic Info')}}
                                </div>
                                <div class="form-box-content p-3">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>{{__('Shop Name')}} <span class="required-star">*</span></label>
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control mb-3" placeholder="{{__('Shop Name')}}" name="name" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>{{__('Logo')}}</label>
                                        </div>
                                        <div class="col-md-10">
                                            <input type="file" name="logo" id="file-2" class="custom-input-file custom-input-file--4" data-multiple-caption="{count} files selected" accept="image/*" />
                                            <label for="file-2" class="mw-100 mb-3">
                                                <span></span>
                                                <strong>
                                                    <i class="fa fa-upload"></i>
                                                    {{__('Choose image')}}
                                                </strong>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>{{__('Address')}} <span class="required-star">*</span></label>
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control mb-3" placeholder="{{__('Address')}}" name="address" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right mt-4">
                                <button type="submit" class="btn btn-styled btn-base-1">{{__('Save')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
