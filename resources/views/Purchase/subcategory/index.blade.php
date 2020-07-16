@extends('layouts.app')

@section('title') {{@$title}} @endsection
@section('content')
 
<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no">{{__('Manage Purchase Subcategory')}}</h3>
        <div class="pull-right clearfix">
            <div class="box-inline pad-rgt pull-left">
                <div class="" style="min-width: 200px;">
                    <a href="{{ route('purchase.subcategory.create')}}" class="btn btn-rounded btn-success pull-right">{{__('+ Subcategory')}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped res-table mar-no " cellspacing="0" width="100%" id="myFrag">
            <thead>
                <tr>
                    <th>{{__('SL.')}}</th>
                    <th>{{__('Category')}}</th>
                    <th>{{__('SubCategory')}}</th>
                    <th>{{__('Status')}}</th>
                    <th>{{__('Published')}}</th>
                    <th  class="notexport">{{__('Action')}}</th>
                </tr>
            </thead>
            <tbody>
                <?php  $i=1;?>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$i++}}</td>
                       <td>
                           @foreach(App\PurchaseCategory::where('id',@$category->category_id)->get() as $sub)
                            {{@$sub->name}}
                           @endforeach
                       </td>
                        <td>{{ @$category->name}}</td>
                       <td>
                           @if(@$category->active_status==1)
                                <button class="btn btn-success btn-sm">Active</button>
                           @else
                                <button class="btn btn-danger btn-sm">Inactive</button>
                           @endif
                       </td>
                       <td>
                           <small>{{date("jS \of F Y", strtotime(@$category->created_at))}}</small>
                       </td>
                        <td class="notexport">
                            <a href="{{route('purchase.subcategory.edit', encrypt(@$category->id))}}" class="btn btn-sm btn-info" title="Edit Subcategory"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                            <a href="#" id="confirm-delete" class="btn btn-sm btn-danger" title="Delete Subcategory"  onclick="confirm_modal('{{route('purchase.subcategory.delete', @$category->id)}}');"> <i class="fa fa-trash-o" aria-hidden="true"></i> </a>
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
