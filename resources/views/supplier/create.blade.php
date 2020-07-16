@extends('layouts.app')

@section('content')
<div class="row">
    <div class="header-options">
        <div class="col-sm-12">
            <a href="{{ route('purchase.category')}}" class="btn btn-rounded btn-success pull-right">{{__('View')}}</a>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Add Supplier')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('supplier.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="panel-body">

                <div class="form-group start_div">
                    <input name="active_status" type="hidden" value="1">


                 <div class="form-group">

                    <label class="col-sm-2 control-label" for="title">{{__('Supplier Name')}}</label>
                    <div class="col-sm-8">
                         <input type="text" placeholder="{{__('Supplier Name')}}" id="supplier_name" name="supplier_name" class="form-control {{ $errors->has('Supplier Name') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('Supplier Name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                 <div class="form-group">

                    <label class="col-sm-2 control-label" for="title">{{__('Contact Name')}}</label>
                    <div class="col-sm-8">
                          <input type="text" placeholder="{{__('Contact Name')}}" id="contact_name" name="contact_name" class="form-control {{ $errors->has('Contact Name') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('Contact Name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                 <div class="form-group">

                    <label class="col-sm-2 control-label" for="title">{{__('Designation')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Designation')}}" id="designation" name="designation" class="form-control {{ $errors->has('Designation') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('Designation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                 <div class="form-group">

                    <label class="col-sm-2 control-label" for="title">{{__('Address')}}</label>
                    <div class="col-sm-8">
                       <input type="text" placeholder="{{__('Address')}}" id="address" name="address" class="form-control {{ $errors->has('Address') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('Address') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                  <div class="form-group">

                    <label class="col-sm-2 control-label" for="title">{{__('City')}}</label>
                    <div class="col-sm-8">
                       <input type="text" placeholder="{{__('City')}}" id="city" name="city" class="form-control {{ $errors->has('City') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('City') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                  <div class="form-group">

                    <label class="col-sm-2 control-label" for="title">{{__('Country')}}</label>
                    <div class="col-sm-8">
                         <input type="text" placeholder="{{__('Country')}}" id="country" name="country" class="form-control {{ $errors->has('Country') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('Country') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                 <div class="form-group">

                    <label class="col-sm-2 control-label" for="title">{{__('Mobile Number')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Mobile Number')}}" id="mobile_number" name="mobile_number" class="form-control {{ $errors->has('Mobile Number') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('Mobile Number') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                 <div class="form-group">

                    <label class="col-sm-2 control-label" for="title">{{__('Telephone Number')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Telephone Number')}}" id="telephone_number" name="telephone_number" class="form-control {{ $errors->has('Telephone Number') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('Telephone Number') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                   <div class="form-group">

                    <label class="col-sm-2 control-label" for="title">{{__('Fax Number')}}</label>
                    <div class="col-sm-8">
                       <input type="text" placeholder="{{__('Fax Number')}}" id="fax_number" name="fax_number" class="form-control {{ $errors->has('Fax Number') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('Fax Number') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                  <div class="form-group">

                    <label class="col-sm-2 control-label" for="title">{{__('Email')}}</label>
                    <div class="col-sm-8">
                      <input type="email" placeholder="{{__('Email')}}" id="email" name="email" class="form-control {{ $errors->has('Email') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('Email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                    <div class="form-group">

                    <label class="col-sm-2 control-label" for="title">{{__('Trade License')}}</label>
                    <div class="col-sm-8">
                      <input type="text" placeholder="{{__('Trade License')}}" id="trade_license" name="trade_license" class="form-control {{ $errors->has('Trade License') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('Trade License') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                  <div class="form-group">

                    <label class="col-sm-2 control-label" for="title">{{__('VAT Registration Number')}}</label>
                    <div class="col-sm-8">
                     <input type="text" placeholder="{{__('VAT Registration Number')}}" id="vat_reg_no" name="vat_reg_no" class="form-control {{ $errors->has('VAT Registration Number') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('VAT Registration Number') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                   <div class="form-group">

                    <label class="col-sm-2 control-label" for="title">{{__('VAT Rate')}}</label>
                    <div class="col-sm-8">
                     <input type="text" placeholder="{{__('VAT Rate')}}" id="vat_rate" name="vat_rate" class="form-control {{ $errors->has('VAT Rate') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('VAT Rate') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                </div>

              <div class="panel-footer text-right">
                <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
            </div>

            </div>

        </form>
        <!--===================================================-->
        <!--End Horizontal Form-->

    </div>
</div>



@endsection
