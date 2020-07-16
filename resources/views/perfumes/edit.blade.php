@extends('layouts.app')

@section('content')

<div class="col-lg-6 col-lg-offset-3">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Perfumer Information')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('perfumes.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
            <input name="_method" type="hidden" value="PATCH">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Name')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Name')}}" id="name" name="name" value="{{$brand->name }}" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Position')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Position')}}" id="position" name="position" value="{{$brand->position }}" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Education')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Education')}}" id="education" name="education" value="{{$brand->education }}" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Company')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Company')}}" id="company" name="company" value="{{$brand->company }}" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Website')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Website')}}" id="website" name="website" value="{{$brand->website }}" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Number')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Number')}}" id="number_database" name="number_database" value="{{$brand->number_database}}" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="img">{{__('Image')}} <small>(120x80)</small></label>
                    <div class="col-sm-10">
                        <input type="file" id="img" name="img" value="{{$brand->img }}" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">{{__('About')}}</label>
                    <div class="col-sm-10">
                        <textarea name="about" rows="5" class="form-control"> {{$brand->about}}</textarea>
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
