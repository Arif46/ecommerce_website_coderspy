@extends('layouts.app')

@section('content')

<div class="col-lg-6 col-lg-offset-3">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Brand Information')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
            <input name="_method" type="hidden" value="PATCH">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Name')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Name')}}" id="name" name="name" class="form-control" required value="{{ $brand->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Country')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Country')}}" id="country" name="country" value="{{$brand->country }}" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Activity')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Activity')}}" id="brands_activity" name="brands_activity" value="{{$brand->brands_activity }}" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Company')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Company')}}" id="brands_parent_company" name="brands_parent_company" value="{{$brand->brands_parent_company }}" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Website')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Website')}}" id="website" name="website" class="form-control" value="{{$brand->website }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="logo">{{__('Logo')}} <small>(120x80)</small></label>
                    <div class="col-sm-10">
                        <input type="file" id="logo" name="logo" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">{{__('Meta Title')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="meta_title" value="{{ $brand->meta_title }}" placeholder="{{__('Meta Title')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">{{__('Description')}}</label>
                    <div class="col-sm-10">
                        <textarea name="meta_description" rows="8" class="form-control">{{ $brand->meta_description }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Slug')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Slug')}}" id="slug" name="slug" value="{{ $brand->slug }}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">{{__('About')}}</label>
                    <div class="col-sm-10">
                        <textarea name="about" rows="5" class="form-control">{{$brand->about}}</textarea>
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <button class="btn btn-purple" type="submit">{{__('Update')}}</button>
            </div>
        </form>
        <!--===================================================-->
        <!--End Horizontal Form-->

    </div>
</div>

@endsection
