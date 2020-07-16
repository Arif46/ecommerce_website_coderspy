@extends('layouts.app')

@section('content')

<div class="col-lg-6 col-lg-offset-3">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Press Information')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('press_list_store') }}" method="POST" enctype="multipart/form-data">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="title">{{__('Title')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Title')}}" id="title" name="title" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="url">{{__('URL')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('URL')}}" id="url" name="url" class="form-control {{ $errors->has('url') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Position No')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Position No')}}" id="serial_number" name="serial_number" class="form-control {{ $errors->has('serial_number') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('serial_number'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('serial_number') }}</strong>
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
                    <label class="col-sm-2 control-label">{{__('Note')}}</label>
                    <div class="col-sm-10">
                        <textarea name="note" rows="5" class="form-control"></textarea>
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
