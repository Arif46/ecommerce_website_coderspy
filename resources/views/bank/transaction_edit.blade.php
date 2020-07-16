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
            <h3 class="panel-title">{{__('Bank Transaction Update')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('banktransaction.update', @$BankTransaction->id) }}" method="POST" enctype="multipart/form-data">
            <input name="id" type="hidden" value="{{$BankTransaction->id}}">
        	@csrf
            <div class="panel-body">
                 <div class="form-group">
                    <label class="col-sm-2 control-label">{{__('Date')}}</label>
                    <div class="col-sm-6">
                        <input type="date" name="date" value="{{ @$BankTransaction->date}}" rows="5" class="form-control"></input>
                    </div>
                </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Transation Type')}}</label>
                    <div class="col-sm-6">
                        <select name="transaction_type" required class="form-control demo-select2">
                            <option >Select</option> 
                            <option value="1" <?php if($BankTransaction->transaction_type == 1) echo "selected";?>>Credit</option> 
                            <option value="0" <?php if($BankTransaction->transaction_type == 0) echo "selected";?>>Debit</option> 
                        </select>
                    </div>
                </div>
               <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Bank name')}}</label>
                    <div class="col-sm-6">
                        <select name="bank_id" required class="form-control demo-select2">
                            @foreach($BankAccount as $bank_name)
                                <option value="{{$bank_name->id}}" <?php if($BankTransaction->bank_id == $bank_name->id) echo "selected";?> >{{__($bank_name->bank_name)}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
               <div class="form-group">
                    <label class="col-sm-2 control-label" for="title">{{__('Withdraw/diposite Id')}}</label>
                    <div class="col-sm-6">
                        <input type="text" placeholder="{{__('Withdraw/diposite Id')}}" id="title" name="deposit_type" value="{{ @$BankTransaction->deposit_type}}" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="title">{{__('Amount')}}</label>
                    <div class="col-sm-6">
                        <input type="number" placeholder="{{__('Amount')}}" id="title" name="amount" value="{{ @$BankTransaction->amount}}" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" required>
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
                            <textarea name="description" rows="5" class="form-control">{{$BankTransaction->description }}</textarea>
                        </div>
                    </div>
          
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Status')}}</label>
                    <div class="col-sm-6">
                        <select name="active_status" required class="form-control demo-select2">
                            <option >Select Status</option> 
                            <option value="1" <?php if($BankTransaction->active_status == 1) echo "selected";?> >Active</option> 
                            <option value="0" <?php if($BankTransaction->active_status == 0) echo "selected";?> >Deactive</option> 
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
