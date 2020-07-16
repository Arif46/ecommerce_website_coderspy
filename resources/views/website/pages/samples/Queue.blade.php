@extends('website.layouts.master')
@section('title','MY SUBSCRIPTION QUEUE')
@section('content')
<style>
    .subscription-profile{
        max-width:100px;
        height:auto;
        padding:5px;
    }
    .subscription-title{
        font-weight:bold;
        text-align: left;
    }
    .subscription-menu{
        color:black;
        padding: 5px;
    }
    .btn{
        border-radius: 0px;
    }
    .body_text{
        color: #000;
    }
    .fix_div{
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        min-width: 269px;
    }

</style>
<div class="section_padding">
    <div class="container">
        <div class="row">
            @include('website/pages/samples/sample-sidebar')
            <div class="col-lg-9">
                <h4>MY SAMPLE LIST</h4>
                <hr>
                <div class="container-fluid">
                    <div class="row">
                            <div class="col-md-1 ml-1 mr-1 mt-1 mt-2" style="border:1px solid #ddd;padding: 10px;">
                                <a href="">
                                    <img style="margin-left: -7px;" src="{{url('public/website/img/1.jpg')}}" alt="" height="60px" width="60px;">
                                    <p>Flower</p>
                                </a>
                            </div>
                            <div class="col-md-1 ml-1 mr-1 mt-1 mt-2" style="border:1px solid #ddd;padding: 10px;">
                                <a href="">
                                    <img style="margin-left: -7px;" src="{{url('public/website/img/1.jpg')}}" alt="" height="60px" width="60px;">
                                    <p>Flower</p>
                                </a>
                            </div>
                            <div class="col-md-1 ml-1 mr-1 mt-1 mt-2" style="border:1px solid #ddd;padding: 10px;">
                                <a href="">
                                    <img style="margin-left: -7px;" src="{{url('public/website/img/1.jpg')}}" alt="" height="60px" width="60px;">
                                    <p>Flower</p>
                                </a>
                            </div>
                            <div class="col-md-1 ml-1 mr-1 mt-1 mt-2" style="border:1px solid #ddd;padding: 10px;">
                                <a href="">
                                    <img style="margin-left: -7px;" src="{{url('public/website/img/1.jpg')}}" alt="" height="60px" width="60px;">
                                    <p>Flower</p>
                                </a>
                            </div>
                    </div>

                </div>



                <h4 class="mt-40">MY SAMPLE QUEUE</h4>
                <hr>
                <div class="container-fluid">
                    <div class="row">
                            <div class="col-md-2 text-center ml-1 mr-1 mt-1 mt-2" style="border:1px solid #ddd;padding: 10px;">
                                <a href="">
                                    <img style="margin-left: -7px;" src="{{url('public/website/img/1.jpg')}}" alt="" height="60px" width="60px;">
                                    <p>June 2020</p>
                                </a>
                            </div>
                            <div class="col-md-2 text-center ml-1 mr-1 mt-1 mt-2" style="border:1px solid #ddd;padding: 10px;">
                                <a href="">
                                    <img style="margin-left: -7px;" src="{{url('public/website/img/1.jpg')}}" alt="" height="60px" width="60px;">
                                    <p>June 2020</p>
                                </a>
                            </div>
                            <div class="col-md-2 text-center ml-1 mr-1 mt-1 mt-2" style="border:1px solid #ddd;padding: 10px;">
                                <a href="">
                                    <img style="margin-left: -7px;" src="{{url('public/website/img/1.jpg')}}" alt="" height="60px" width="60px;">
                                    <p>June 2020</p>
                                </a>
                            </div>
                            <div class="col-md-2 text-center ml-1 mr-1 mt-1 mt-2" style="border:1px solid #ddd;padding: 10px;">
                                <a href="">
                                    <img style="margin-left: -7px;" src="{{url('public/website/img/1.jpg')}}" alt="" height="60px" width="60px;">
                                    <p>June 2020</p>
                                </a>
                            </div>
                            <div class="col-md-2 text-center ml-1 mr-1 mt-1 mt-2" style="border:1px solid #ddd;padding: 10px;">
                                <a href="">
                                    <img style="margin-left: -7px;" src="{{url('public/website/img/1.jpg')}}" alt="" height="60px" width="60px;">
                                    <p>June 2020</p>
                                </a>
                            </div>
                    </div>

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
