@extends('layouts.app')

@section('content')

    <div class="col-lg-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Designation Name')}}</h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('designation.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="panel-body">
                     <input name="active_status" type="hidden" value="1">
                  
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="des_name">{{__('Designation Name')}}</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="{{__('File Title')}}" id="des_name" name="des_name" class="form-control {{ $errors->has('des_name') ? 'has-error' : ''}}" required>
                            {!! $errors->first('des_name', '<p class="help-block">:message</p>') !!}<br>
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
