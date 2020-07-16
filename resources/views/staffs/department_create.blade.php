@extends('layouts.app')

@section('content')

    <div class="col-lg-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Department Name')}}</h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('department.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="panel-body">
                     <input name="active_status" type="hidden" value="1">
                  
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="dep_name">{{__('Department Name')}}</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="{{__('Department Name')}}" id="dept_name" name="dept_name" class="form-control {{ $errors->has('dept_name') ? 'has-error' : ''}}" required>
                            {!! $errors->first('dept_name', '<p class="help-block">:message</p>') !!}<br>
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
