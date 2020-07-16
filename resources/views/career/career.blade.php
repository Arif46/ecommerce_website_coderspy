@extends('layouts.app')

@section('content')

<div class="col-lg-6 col-lg-offset-3">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Career Page')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('career_page_update') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <input type="hidden" name="id" value="{{@$career->id}}" id="">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="title">{{__('Title')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Title')}}" id="title" name="title" value="{{@$career->title}}"  class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" required>
                        @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: red;">{{ $errors->first('title') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            <img width="100" height="100" src="{{asset('/')}}{{@$career->img}}" alt="">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="img">{{__('Image')}}</label>
                    <div class="col-sm-10">
                        <input type="file" id="img" name="img" class="form-control {{ $errors->has('img') ? 'is-invalid' : ''}}">
                        @if ($errors->has('img'))
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: red;">{{ $errors->first('img') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">{{__('Details')}}</label>
                    <div class="col-sm-10">
                        <textarea name="details" rows="5" class="form-control {{ $errors->has('details') ? 'is-invalid' : ''}}">{{@$career->details}}</textarea>
                        @if ($errors->has('details'))
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: red;">{{ $errors->first('details') }}</strong>
                        </span>
                        @endif
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
