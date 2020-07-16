@extends('website.layouts.master')
@section('title','Chane Password')
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
        .alert_message{
            font-size: 14px;
            letter-spacing: 2px;
            font-weight: lighter;
        }
    </style>
    <div class="section_padding">
        <div class="container">
            <div class="row">
                @include('website/pages/samples/sample-sidebar')
                <div class="col-lg-9">
                    <h4>Change Password</h4>
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
                                                    <form class="row" method="POST" action="{{route('changePassword')}}">
                                                        @csrf
                                                        <div class="col-xl-6">
                                                            <div class="single-input {{ $errors->has('current_password') ? ' has-error' : '' }}">
                                                                <label for="current_password">Current Password</label>
                                                                <input class="input-box" type="text" name="current_password" id="current_password" placeholder="Current Password" required>
                                                            </div>
                                                            @if ($errors->has('current_password'))
                                                                <span class="help-block">
                                                            <strong class="text-danger alert_message">{{ $errors->first('current_password') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                        <div class="col-xl-6"></div>
                                                        <div class="col-xl-6">
                                                            <div class="single-input {{ $errors->has('new_password') ? ' has-error' : '' }}">
                                                                <label for="new_password">New Password</label>
                                                                <input class="input-box" type="password" name="new_password" id="new_password" placeholder="New Password" required>
                                                            </div>

                                                            @if ($errors->has('new_password'))
                                                                <span class="help-block">
                                                            <strong class="text-danger alert_message">{{ $errors->first('new_password') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                        <div class="col-xl-6"></div>
                                                        <div class="col-xl-6">
                                                            <div class="single-input">
                                                                <label for="retype_password">Re-type Password</label>
                                                                <input class="input-box" type="password" name="retype_password" id="retype_password" placeholder="Re-type Password" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6"></div>
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

@endpush
