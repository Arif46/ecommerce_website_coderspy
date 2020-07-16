@extends('website.layouts.master')
@section('title','My orders')
@section('content')
      <section class="gry-bg py-4 profile">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-3 d-none d-lg-block">
                    @if(Auth::user()->user_type == 'seller')
                        @include('frontend.inc.seller_side_nav')
                    @elseif(Auth::user()->user_type == 'customer')
                        @include('frontend.inc.customer_side_nav')
                    @endif
                </div>

                <div class="col-lg-9">
                    <div class="main-content">
                        <!-- Page title -->
                        <div class="page-title">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-12">
                                    <h2 class="heading heading-6 text-capitalize strong-600 mb-0">
                                        {{__('My Orders')}}
                                    </h2>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="float-md-right">
                                        <ul class="breadcrumb">
                                            <li><a href="{{ route('home') }}">{{__('Home')}}</a></li>
                                            <li><a href="{{ route('dashboard') }}">{{__('Dashboard')}}</a></li>
                                            <li class="active"><a href="{{ url('my-orders') }}">{{__('My Orders')}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="pagination-wrapper py-4">
                            <ul class="pagination justify-content-end">

                            </ul>
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
