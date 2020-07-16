@extends('layouts.app')

@section('content')

    <div class="col-lg-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('About Us Menu')}}</h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->
            <table class="table table-striped res-table mar-no" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>SL</th>
                    <th width="50%">{{__('Name')}}</th>
                    <th width="10%">{{__('Position No')}}</th>
                    <th width="20%">{{__('Status')}}</th>
                    <th width="10%">{{__('Options')}}</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
                @foreach($about_us_menus as $key => $about_us_menu)
                    
                    <tr>
                        <form class="form-horizontal" action="{{ url('admin/about-menu/'.$about_us_menu->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <td>{{ ($i++)}}</td>
                        <td > <input type="text" name="name" value="{{@$about_us_menu->name}}"  class="form-control" required> </td>
                        <td> <input type="number" name="serial" value="{{@$about_us_menu->serial}}" class="form-control {{ $errors->has('serial') ? ' is-invalid' : '' }}" required> 
                            <span class="focus-border"></span>
                            @if ($errors->has('serial'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red">{{ $errors->first('serial') }}</strong>
                                </span>
                            @endif
                        </td>
                        
                        <td>
                            @if ($about_us_menu->status == '0')
                                <span class="badge badge-pill badge-danger">Inactive</span>
                            @else
                                <span class="badge badge-pill badge-success">Active</span>
                            @endif
                        
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    {{__('Actions')}} <i class="dropdown-caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">

                                    <li><a href="{{ url('admin/menu-active/'.@$about_us_menu->id)}}">{{__('Active') }}</a></li>
                                    <li><a href="{{ url('admin/menu-deactive/'.@$about_us_menu->id)}}">{{__('Inactive')}}</a></li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            
                        <button type="submit" class="btn btn-primary" href="">{{__('Update') }}</button>
                        </td>
                    </tr>
                    </form>
                @endforeach
            </tbody>
        </table>

            {{-- <form class="form-horizontal" action="{{ route('press_setting_update') }}" method="POST" enctype="multipart/form-data">
            	@csrf
                <input type="hidden" name="id" value="">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="title">{{__('Title')}}</label>
                        <div class="col-sm-9">
                            <input type="text" id="title" name="title" value="" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">{{__('Name')}}</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" value="" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">{{__('Designation')}}</label>
                        <div class="col-sm-9">
                            <input type="text" name="designation" value="" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">{{__('Company')}}</label>
                        <div class="col-sm-9">
                            <input type="text" name="company" value="" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="email">{{__('Email')}}</label>
                        <div class="col-sm-9">
                            <input type="text" id="email" name="email" value="" class="form-control" required>
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
                            <input type="number" id="number_of_post" name="number_of_post" value="" required class="form-control">
                        </div>
                    </div>
                </div>
                <div class="panel-footer text-right">
                    <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
                </div>
            </form>
            <!--===================================================-->
            <!--End Horizontal Form--> --}}

        </div>
    </div>

@endsection
