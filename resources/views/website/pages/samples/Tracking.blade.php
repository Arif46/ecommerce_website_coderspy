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
                            <div class="col-lg-4 col-lg-offset-4">
                                <div class="form-group">
                                    <label for="current_password">Current Password</label>
                                    <input type="text" name="current_password" class="from-control" placeholder="Current password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-lg-offset-4">
                                <div class="form-group">
                                    <label for="current_password">New Password</label>
                                    <input type="text" name="current_password" class="from-control" placeholder="Current password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-lg-offset-4">
                                <div class="form-group">
                                    <label for="current_password">Re-type Password</label>
                                    <input type="text" name="current_password" class="from-control" placeholder="Current password" width="100%">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-lg-offset-4">
                                <div class="form-group">
                                    <button class="btn btn-xs btn-danger">Save</button>
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
