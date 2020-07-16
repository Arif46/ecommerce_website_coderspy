@extends('layouts.app')

@section('content')

    <div class="col-lg-6 col-lg-offset-2">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Legal type ')}}</h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('legal-file-types.store') }}" method="POST">
                @csrf
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">{{__('Name')}}</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="{{__('Name')}}" id="name" name="name" class="form-control {{ $errors->has('name') ? 'has-error' : ''}}" required>
                            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}<br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="active_status">{{__('Status')}}</label>
                        <div class="col-sm-9">
                            <select name="status" id="status"  class="form-control" required>
                                <option value="">---- Select Status ----</option>
                                <option value="1" >Active</option>
                                <option value="0" >In-active</option>
                            </select>
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
