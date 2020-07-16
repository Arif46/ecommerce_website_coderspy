@extends('layouts.app')

@section('content')

<div class="col-lg-12">
    <div class="row">
        <div class="header-options">
            <div class="col-sm-12">
                <a href="{{ route('banktransaction.index')}}" class="btn btn-rounded btn-success pull-right">{{__('View Transaction')}}</a>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Add New Bank Transation')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('banktransaction.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="panel-body">
                  <div class="form-group">
                      <input name="active_status" type="hidden" value="1">
                    <label class="col-sm-2 control-label">{{__('Date')}}</label>
                    <div class="col-sm-6">
                        <input type="date" name="date" rows="5" class="form-control"></input>
                    </div>
                </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Transation Type')}}</label>
                    <div class="col-sm-6">
                        <select name="transaction_type" required class="form-control demo-select2">
                            <option >Select</option> 
                            <option value="1">Credit</option> 
                            <option value="0">Debit</option> 
                        </select>
                    </div>
                </div>
                     <div class="form-group">
                      
                    <label class="col-sm-2 control-label" for="name">{{__('Bank name')}}</label>
                    <div class="col-sm-6">
                        <select name="bank_id" required class="form-control demo-select2-placeholder">
                             <option >Select</option>
                            @foreach($BankAccount as $bank_name)
                                <option value="{{$bank_name->id}}">{{__($bank_name->bank_name)}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="title">{{__('Withdraw/diposite Id')}}</label>
                    <div class="col-sm-6">
                        <input type="text" placeholder="{{__('Withdraw/diposite Id')}}" id="title" name="deposit_type" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                 <div class="form-group">
                    <input name="active_status" type="hidden" value="1">
                    <label class="col-sm-2 control-label" for="title">{{__('Amount')}}</label>
                    <div class="col-sm-6">
                        <input type="number" placeholder="{{__('Amount')}}" id="title" name="amount" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">{{__('Description')}}</label>
                    <div class="col-sm-6">
                        <textarea name="description" rows="5" class="form-control"></textarea>
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
