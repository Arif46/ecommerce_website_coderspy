@extends('layouts.app')

@section('content')

<div class="col-lg-12">
    <div class="row">
        <div class="header-options">
            <div class="col-sm-12">
                <a href="{{ route('bank.index')}}" class="btn btn-rounded btn-success pull-right">{{__('View Bank')}}</a>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Add New Bank')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('bank.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="panel-body">
                <div class="form-group">
                    <input name="active_status" type="hidden" value="1">
                    <label class="col-sm-2 control-label" for="title">{{__('Bank Name')}}</label>
                    <div class="col-sm-6">
                        <input type="text" placeholder="{{__('Bank Name')}}" id="title" name="bank_name" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                 <div class="form-group">
              
                    <label class="col-sm-2 control-label" for="title">{{__('A/C Name')}}</label>
                    <div class="col-sm-6">
                        <input type="text" placeholder="{{__('A/C Name')}}" id="title" name="ac_name" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                 <div class="form-group">
                
                    <label class="col-sm-2 control-label" for="title">{{__('A/C Number')}}</label>
                    <div class="col-sm-6">
                        <input type="text" placeholder="{{__('A/C Number')}}" id="title" name=" ac_number" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                 <div class="form-group">
            
                    <label class="col-sm-2 control-label" for="title">{{__('Branch')}}</label>
                    <div class="col-sm-6">
                        <input type="text" placeholder="{{__('Branch Name')}}" id="title" name="branch" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="img">{{__('Signature Picture')}}</label>
                    <div class="col-sm-6">
                        <input type="file" id="image" name="Signature" class="form-control {{ $errors->has('Signature') ? ' is-invalid' : '' }}">
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <button class="btn btn-success" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> {{__('Save')}}</button>
            </div>
        </form>
        <!--===================================================-->
        <!--End Horizontal Form-->

    </div>
</div>

@endsection
