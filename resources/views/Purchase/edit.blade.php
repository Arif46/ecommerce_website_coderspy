@extends('layouts.app')

@section('content')

<div class="col-lg-12">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Tax Info Update')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('tax.update', @$IncomeTax->id) }}" method="POST" enctype="multipart/form-data">
            <input name="id" type="hidden" value="{{$IncomeTax->id}}">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Start Amount')}}</label>
                    <div class="col-sm-6">
                    <input type="text" placeholder="{{__('Bank Name')}}" id="name" name="start_amount" value="{{ @$IncomeTax->start_amount}}" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('End Amount')}}</label>
                    <div class="col-sm-6">
                    <input type="text" placeholder="{{__('A/C Name')}}" id="name" name="end_amount" value="{{ @$IncomeTax->end_amount}}" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Tax Rate')}}</label>
                    <div class="col-sm-6">
                    <input type="text" placeholder="{{__('A/C Number')}}" id="name" name="tax_rate" value="{{ @$IncomeTax->tax_rate}}" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Status')}}</label>
                    <div class="col-sm-6">
                        <select name="active_status" required class="form-control demo-select2">
                            <option >Select Status</option> 
                            <option value="1" <?php if($IncomeTax->active_status == 1) echo "selected";?> >Active</option> 
                            <option value="0" <?php if($IncomeTax->active_status == 0) echo "selected";?> >Deactive</option> 
                        </select>
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <button class="btn btn-purple" type="submit">{{__('Update')}}</button>
            </div>
        </form>
        <!--===================================================-->
        <!--End Horizontal Form-->

    </div>
</div>

@endsection
