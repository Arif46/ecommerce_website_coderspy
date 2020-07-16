@extends('layouts.app')

@section('content')

<div class="col-lg-10 col-lg-offset-1">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Position Info')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('career_position_store') }}" method="POST" enctype="multipart/form-data">
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
                <div class="panel-body">
                    <div class="form-group">
                        
                        <label class="col-sm-2 control-label" for="name">{{__('Details:')}}</label>
                        <div class="col-sm-10">
                            <textarea class="editor" name="details" required></textarea>
                        </div>
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
