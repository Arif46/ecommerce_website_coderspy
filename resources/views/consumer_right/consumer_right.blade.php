@extends('layouts.app')

@section('content')

<div class="col-lg-6 col-lg-offset-3">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Consumer Right')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('consumer_right_update') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <input type="hidden" name="id" value="{{@$consumer_right->id}}" id="">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="Region">{{__('Region')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Region')}}" id="region" name="region" value="{{@$consumer_right->region}}"  class="form-control {{ $errors->has('region') ? 'is-invalid' : ''}}" required>
                        @if ($errors->has('region'))
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: red;">{{ $errors->first('region') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            <img width="100" height="100" src="{{asset('/')}}{{@$consumer_right->img}}" alt="">
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
                        <textarea name="details" rows="5" class="form-control {{ $errors->has('details') ? 'is-invalid' : ''}}">{{@$consumer_right->details}}</textarea>
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
