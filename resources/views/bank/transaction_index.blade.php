@extends('layouts.app')

@section('title')
    {{@$title}}
@endsection
@section('content')
 
<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no">{{__('Bank')}}</h3>
        <div class="pull-right clearfix">
            <div class="box-inline pad-rgt pull-left">
                <div class="" style="min-width: 200px;">
                    <a href="{{ route('banktransaction.create')}}" class="btn btn-rounded btn-success pull-right">{{__('+Transaction')}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped res-table mar-no " cellspacing="0" width="100%" id="myFrag">
            <thead>
                <tr>
                    <th>SL.</th>
                    <th width="12%">{{__('Date')}}</th>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Transation Type')}}</th>
                    <!-- <th>{{__('Withdraw/diposite')}}</th> -->
                    <th>{{__('Amount')}}</th>
                    <!-- <th>{{__('Description')}}</th> -->
                    <th>{{ __('Status') }}</th>
                    <th>{{__('Published')}}</th>
                    <th width="10%">{{__('Action')}}</th>
                </tr>
            </thead>
            <tbody>
                <?php  $i=1; ?>
                @foreach($BankTransaction as $key => $banks)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $banks->date}}</td>
                        <td>{{@$banks->bankAccount->bank_name}}</td>
                        <td>

                             @if ($banks->transaction_type == '1')
                                <span class="badge badge-pill badge-primary" style="padding: 10px;">Credit</span>
                            @else
                                <span class="badge badge-pill badge-primary" style="padding: 10px;">Debit</span>
                            @endif
                        </td>
                        <!-- <td>{{@$banks->deposit_type}}</td> -->
                        <td>{{@$banks->amount}}</td>
                        <!-- <td>{{substr(@$banks->description,0,200)}} ...</td> -->
                        <td>
                            @if(@$banks->active_status==1)
                                 <button class="btn btn-success btn-sm">Active</button>
                            @else
                                 <button class="btn btn-danger btn-sm">Inactive</button>
                            @endif
                        </td>
                        <td>
                            <small>{{date("jS \of F Y", strtotime(@$banks->created_at))}}</small>
                        </td>
                        <td class="notexport">
                            <a href="{{route('banktransaction.edit', encrypt(@$banks->id))}}" class="btn btn-sm btn-info" title="Edit Subcategory"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                            <a href="#" id="confirm-delete" class="btn btn-sm btn-danger" title="Delete Subcategory"  onclick="confirm_modal('{{route('banktransaction.destroy', @$banks->id)}}');"> <i class="fa fa-trash-o" aria-hidden="true"></i> </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table> 
    </div>
</div>

@endsection
@section('script')

@endsection
