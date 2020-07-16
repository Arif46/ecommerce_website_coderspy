@extends('layouts.app')

@section('content')

<div class="col-lg-6 col-lg-offset-3">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Edit Country Info')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('country_update', @$country->id) }}" method="POST" enctype="multipart/form-data">
            <input name="_method" type="hidden" value="PATCH">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">{{__('Name')}}</label>
                    <div class="col-sm-9">
                    <input type="text" placeholder="{{__('Name')}}" id="name" name="name" value="{{ @$country->name}}" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="code">{{__('Code')}}</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="{{__('Code')}}" id="code" name="code" value="{{ @$country->code}}" class="form-control {{ $errors->has('code') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('code'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('code') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="nicename">{{__('Nicename')}}</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="{{__('Nicename')}}" id="nicename" name="nicename" value="{{ @$country->nicename}}" class="form-control {{ $errors->has('nicename') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('nicename'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('nicename') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="iso3">{{__('ISO3')}}</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="{{__('ISO3')}}" id="iso3" name="iso3" value="{{ @$country->iso3}}" class="form-control {{ $errors->has('iso3') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('iso3'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('iso3') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="numcode">{{__('Numcode')}}</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="{{__('Numcode')}}" id="numcode" name="numcode" value="{{ @$country->numcode}}" class="form-control {{ $errors->has('numcode') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('numcode'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('numcode') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="phonecode">{{__('phonecode')}}</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="{{__('Phonecode')}}" id="phonecode" name="phonecode" value="{{ @$country->phonecode}}" class="form-control {{ $errors->has('phonecode') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('phonecode'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('phonecode') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">{{__('Region')}}</label>
                    <div class="col-sm-9">
                        <select name="region_id" required class="form-control demo-select2">
                            @foreach($regions as $region)
                                <option value="{{@$region->id}}" <?php if($country->region_id == @$region->id) echo "selected";?> >{{__(@$region->name)}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">{{__('Status')}}</label>
                    <div class="col-sm-6">
                        <select name="active_status" required class="form-control demo-select2">
                            <option >Select Status</option> 
                            <option value="1" <?php if($country->active_status == 1) echo "selected";?> >Active</option> 
                            <option value="0" <?php if($country->active_status == 0) echo "selected";?> >Deactive</option> 
                        </select>
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
