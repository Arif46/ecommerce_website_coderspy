@extends('layouts.app')

@section('content')

    <div class="col-lg-6 col-lg-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Press Settings')}}</h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('press_setting_update') }}" method="POST" enctype="multipart/form-data">
            	@csrf
                <input type="hidden" name="id" value="{{ @$press_s->id }}">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="title">{{__('Title')}}</label>
                        <div class="col-sm-9">
                            <input type="text" id="title" name="title" value="{{ @$press_s->title }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">{{__('Name')}}</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" value="{{ @$press_s->name }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">{{__('Designation')}}</label>
                        <div class="col-sm-9">
                            <input type="text" name="designation" value="{{ @$press_s->designation }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">{{__('Company')}}</label>
                        <div class="col-sm-9">
                            <input type="text" name="company" value="{{ @$press_s->company }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="email">{{__('Email')}}</label>
                        <div class="col-sm-9">
                            <input type="text" id="email" name="email" value="{{ @$press_s->email }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="profile">{{__('Profile Image')}}</label>
                        <div class="col-sm-9">
                            <input type="file" id="profile" name="profile" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="banner_image">{{__('Banner Image')}}</label>
                        <div class="col-sm-9">
                            <input type="file" id="banner_image" name="banner_image" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="about_us_image">{{__('About us Image')}}</label>
                        <div class="col-sm-9">
                            <input type="file" id="about_us_image" name="about_us_image" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="number_of_post">{{__('Number of Post')}}</label>
                        <div class="col-sm-9">
                            <input type="number" id="number_of_post" name="number_of_post" value="{{ @$press_s->number_of_post }}" required class="form-control">
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
