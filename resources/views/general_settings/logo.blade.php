@extends('layouts.app')
@section('content')
    <div class="col-lg-8 col-lg-offset-2">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Logo Settings')}}</h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('generalsettings.logo.store') }}" method="POST" enctype="multipart/form-data">
            	@csrf
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="logo">{{__('Frontend logo')}} <small>(max height 40px)</small></label>
                        <div class="col-sm-8">
                            <input type="file" id="logo" name="logo" class="form-control">
                        </div>
                        <div style="background-color: #8dc63f" class="col-sm-1">
                            <img src="{{url('public/')}}/{{$generalsetting->logo}}" height="32p" width="40px;">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="admin_logo">{{__('Admin logo')}} <small>(60x60)</small></label>
                        <div class="col-sm-8">
                            <input type="file" id="admin_logo" name="admin_logo" class="form-control">
                        </div>
                    <div style="background-color: #fff" class="col-sm-1">
                        <img src="{{url('public/')}}/{{$generalsetting->admin_logo}}" height="32px" width="40px;">
                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="favicon">{{__('Favicon')}} <small>(32x32)</small></label>
                        <div class="col-sm-8">
                            <input type="file" id="favicon" name="favicon" class="form-control">
                        </div>
                        <div style="background-color: #fff" class="col-sm-1">
                            <img src="{{url('public/')}}/{{$generalsetting->favicon}}" alt="front logo" height="32px" width="40px;">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="admin_login_background">{{__('Admin login background image')}} <small>(1920x1080)</small></label>
                        <div class="col-sm-8">
                            <input type="file" id="admin_login_background" name="admin_login_background" class="form-control">
                        </div>
                        <div style="background-color: #8dc63f" class="col-sm-1">
                            <img src="{{url('public/')}}/{{$generalsetting->admin_login_background}}" height="32px" width="40px;">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="admin_login_sidebar">{{__('Admin login sidebar image')}} <small>(600x500)</small></label>
                        <div class="col-sm-8">
                            <input type="file" id="admin_login_sidebar" name="admin_login_sidebar" class="form-control">
                        </div>
                        <div style="background-color: #fff" class="col-sm-1">
                            <img src="{{url('public/')}}/{{$generalsetting->admin_login_sidebar}}" height="32px" width="40px;">
                        </div>
                    </div>
                </div>
                <div class="panel-footer text-right">
                    <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
                </div>
            </form>
            <!--===================================================-->
            <!--End Horizontal Form-->

        </div>
    </div>

@endsection
@push('script')
@endpush
