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
                    <a href="{{ route('bank.create')}}" class="btn btn-rounded btn-success pull-right">{{__('+Bank')}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped res-table mar-no " cellspacing="0" width="100%" id="myFrag">
            <thead>
                <tr>
                    <th>SL.</th>
                    <th>{{__('Bank Name')}}</th>
                    <th>{{__('A/C Name')}}</th>
                    <th>{{__('A/C Number')}}</th>
                    <!-- <th>{{__('Branch')}}</th>
                    <th>{{__('Signature Image')}}</th> -->
                    <th>{{ __('Status') }}</th>
                    <th>{{__('Published')}}</th>
                    <th width="10%">{{__('Action')}}</th>
                </tr>
            </thead>
            <tbody>
                <?php  $i=1;?>
                @foreach($BankAccount as $key => $banks)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{@$banks->bank_name}}</td>
                        <td>{{@$banks->ac_name}}</td>
                        <td>{{@$banks->ac_number}}</td>
                       <!--  <td>{{@$banks->branch}}</td>
                        <td>
                            <img loading="lazy"  class="img img-responsive" src="{{ asset('public/'.$banks->Signature) }}" alt="Signature" style="width:50px; height:auto">
                        </td> -->
                        
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
                           <a href="{{route('bank.edit', encrypt(@$banks->id))}}" class="btn btn-sm btn-info" title="Edit Subcategory"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                           <a href="#" id="confirm-delete" class="btn btn-sm btn-danger" title="Delete Subcategory"  onclick="confirm_modal('{{route('bank.destroy', @$banks->id)}}');"> <i class="fa fa-trash-o" aria-hidden="true"></i> </a>
                       </td>
                        <!-- <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    {{__('Actions')}} <i class="dropdown-caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{route('bank.edit', encrypt(@$banks->id))}}">{{__('Edit') }}</a></li>
                                    <li><a onclick="confirm_modal('{{route('bank.destroy', @$banks->id)}}');">{{__('Delete')}}</a></li>
                                </ul>
                            </div>
                        </td>   -->
                    </tr>
                @endforeach
            </tbody>
        </table> 
    </div>
</div>

@endsection
@section('script')

@endsection
