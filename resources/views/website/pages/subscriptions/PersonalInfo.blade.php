@extends('website.layouts.master')
@section('title','Personal Information')
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
            border:0px;
            border-radius: 0px;
            text-align: center;
            margin-top: 4%;
            height: 50px;
            padding-top: 10px;
            font-weight: bolder;
            background-color: #cc3633;
        }
    </style>
    <div class="section_padding">
        <div class="container">
            <div class="row">
                @include('website/pages/subscriptions/subscription-sidebar')
                <div class="col-lg-9">
                    <h4>Personal Information</h4>
                    <hr>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="container mt-3">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div id="home" class="container tab-pane active">

                                        <div class="row justify-content-center mt-4">
                                            <div class="col-xl-12">
                                                <div class="special-form blogger-form">
                                                    <form class="row" method="POST" action="{{route('userInfoUpdate')}}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="col-xl-6">
                                                            <div class="single-input">
                                                                <label for="first_name">First Name <span class="text-danger">*</span></label>
                                                                <input class="input-box" type="text" name="first_name" id="first_name" placeholder="First Name" required value="{{Auth::user()->first_name}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6"></div>
                                                        <div class="col-xl-6">
                                                            <div class="single-input">
                                                                <label for="last_name">Last Name <span class="text-danger">*</span></label>
                                                                <input class="input-box" type="text" name="last_name" id="last_name" placeholder="Last Name" required value="{{Auth::user()->last_name}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6"></div>
                                                        <div class="col-xl-6">
                                                            <div class="single-input">
                                                                <label for="email_address">Email Address <span class="text-danger">*</span></label>
                                                                <input class="input-box" type="email" name="email_address" id="email_address" placeholder="Email Address" required value="{{Auth::user()->email}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6"></div>
                                                        <div class="col-xl-6">
                                                            <div class="single-input">
                                                                <label for="birthday">Birthday (Optional)</label>
                                                                <input class="input-box datepicker" type="text" name="birth_date" id="birthday" placeholder="Birthday" value="{{Auth::user()->birth_date}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6"></div>
                                                        <div class="col-xl-6">
                                                            <div class="single-input">
                                                                <label for="marriage_anniversary">Marriage Anniversary (Optional)</label>
                                                                <input class="input-box datepicker" type="text" name="marriage_day" id="marriage_anniversary" placeholder="Marriage Anniversary" value="{{Auth::user()->marriage_day}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6"></div>
                                                        <div class="col-xl-12 mb-1">
                                                            <div class="single-input">
                                                                <!-- Group of default radios - option 1 -->
                                                                <!-- Group of default radios - option 1 -->
                                                                <div style="float:left;" class="custom-control custom-radio">
                                                                    <input type="radio" name="gender" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" value="1" {{Auth::user()->gender == 1?'checked':''}}>
                                                                    <label class="custom-control-label" for="defaultGroupExample1">Male &nbsp;</label>
                                                                </div>

                                                                <!-- Group of default radios - option 2 -->
                                                                <div style="float:left;" class="custom-control custom-radio">
                                                                    <input type="radio" name="gender" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadios" value="2" {{Auth::user()->gender == 2?'checked':''}}>
                                                                    <label class="custom-control-label" for="defaultGroupExample2">Female</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="single-input">
                                                                <button class="btn btn-block btn-danger">Save</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <script>
        $('#birthday').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#marriage_anniversary').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
@endpush
