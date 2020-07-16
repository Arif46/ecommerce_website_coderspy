@extends('layouts.app')

@section('content')

<div class="col-lg-6 col-lg-offset-3">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Notes Category Information')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('notecategory.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="panel-body">
                <div class="form-group">
                    <input name="active_status" type="hidden" value="1">
                    <label class="col-sm-2 control-label" for="title">{{__('Name')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Category Name')}}" id="title" name="name" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="img">{{__('Image')}} <small>(120x80)</small></label>
                    <div class="col-sm-10">
                        <input type="file" id="image" name="image" class="form-control {{ $errors->has('iamge') ? ' is-invalid' : '' }}">
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">{{__('Description')}}</label>
                    <div class="col-sm-10">
                        <textarea name="description" rows="10" class="form-control"></textarea>
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
