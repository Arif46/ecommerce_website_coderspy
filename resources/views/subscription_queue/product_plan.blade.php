@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('product.plan.add')}}" class="btn btn-rounded btn-info pull-right">{{__('Add New Product Plan')}}</a>
    </div>
</div>

<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">{{__('Product Plans')}}</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th width="10%">#</th>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Qty')}}</th>
                    <th width="10%">{{__('Options')}}</th>
                </tr>
            </thead>
            <tbody>
               @foreach($productPlans as $key=>$plan)
               <tr>
                   <td>{{ $key+1}}</td>
                   <td>{{$plan->name}}</td>
                   <td>{{$plan->qty}}</td>
                   <td>
                        <div class="btn-group dropdown">
                            <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                {{__('Actions')}} <i class="dropdown-caret"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="{{route('product.plan.edit', encrypt(@$plan->id))}}">{{__('Edit') }}</a></li>
                                <li><a onclick="confirm_modal('{{route('product.plan.destroy', @$plan->id)}}');">{{__('Delete')}}</a></li>
                            </ul>
                        </div>
                   </td>
               </tr>
               @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection
