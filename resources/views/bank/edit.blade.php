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
            <h3 class="panel-title">{{__('Bank Info Update')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('bank.update', @$bank->id) }}" method="POST" enctype="multipart/form-data">
            <input name="id" type="hidden" value="{{$bank->id}}">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Bank Name')}}</label>
                    <div class="col-sm-10">
                    <input type="text" placeholder="{{__('Bank Name')}}" id="name" name="bank_name" value="{{ @$bank->bank_name}}" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('A/C Name')}}</label>
                    <div class="col-sm-10">
                    <input type="text" placeholder="{{__('A/C Name')}}" id="name" name="ac_name" value="{{ @$bank->ac_name}}" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('A/C Number')}}</label>
                    <div class="col-sm-10">
                    <input type="text" placeholder="{{__('A/C Number')}}" id="name" name="ac_number" value="{{ @$bank->ac_number}}" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Branch')}}</label>
                    <div class="col-sm-10">
                    <input type="text" placeholder="{{__('Branch')}}" id="name" name="branch" value="{{ @$bank->branch}}" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="img">{{__('Image')}}</label>
                    <div class="col-sm-10">
                        <input type="file" id="image" name="Signature" value="{{@$bank->Signature}}" class="form-control {{ $errors->has('iamge') ? ' is-invalid' : '' }}">
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
          
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Status')}}</label>
                    <div class="col-sm-6">
                        <select name="active_status" required class="form-control demo-select2">
                            <option >Select Status</option> 
                            <option value="1" <?php if($bank->active_status == 1) echo "selected";?> >Active</option> 
                            <option value="0" <?php if($bank->active_status == 0) echo "selected";?> >Deactive</option> 
                        </select>
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
