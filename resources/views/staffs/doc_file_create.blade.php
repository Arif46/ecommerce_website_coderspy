@extends('layouts.app')

@section('content')

    <div class="col-lg-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('File Name')}}</h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('doc.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="panel-body">
                     <input name="status" type="hidden" value="1">
                  
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="file_title">{{__('File Title')}}</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="{{__('File Title')}}" id="file_title" name="file_title" class="form-control {{ $errors->has('file_title') ? 'has-error' : ''}}" required>
                            {!! $errors->first('file_title', '<p class="help-block">:message</p>') !!}<br>
                        </div>
                    </div>
                       <div class="form-group">
                    <label class="col-sm-2 control-label" for="img">{{__('Upload')}}</label>
                    <div class="col-sm-9">
                        <input type="file" id="file" name="file" class="form-control {{ $errors->has('file') ? ' is-invalid' : '' }}">
                        @if ($errors->has('file_title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('file') }}</strong>
                            </span>
                        @endif
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
