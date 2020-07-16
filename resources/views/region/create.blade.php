@extends('layouts.app')

@section('content')

<div class="col-lg-6 col-lg-offset-3">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Region Info')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('region_store') }}" method="POST" enctype="multipart/form-data">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Name')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Name')}}" id="name" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="area">{{__('Area')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Area')}}" id="area" name="area" class="form-control {{ $errors->has('area') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('area'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('area') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="note">{{__('Note')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Note')}}" id="note" name="note" class="form-control {{ $errors->has('note') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('note'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('note') }}</strong>
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
