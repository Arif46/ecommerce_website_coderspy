@extends('layouts.app')

@section('content')
<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no">{{__('Manage purchase unit')}}</h3>
        <div class="pull-right clearfix">
            <div class="box-inline pad-rgt pull-left">
                <div class="" style="min-width: 200px;">
                    <a href="{{ route('purchase.unit.create')}}" class="btn btn-rounded btn-success pull-right">{{__(' + Add Unit')}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped res-table mar-no" cellspacing="0" width="100%"  id="myFrag">
            <thead>
                <tr>
                    <th>{{__('SL.')}}</th>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Full Name')}}</th>
                    <th>{{__('Status')}}</th>
                    <th>{{__('Published')}}</th>
                    <th>{{__('Action')}}</th>
                </tr>
            </thead>
            <tbody>
                <?php  $i=1;?>
                @foreach($units as $unit)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $unit->name}}</td>
                        <td>{{ $unit->full_name}}</td>
                      
                       <td>
                           @if($unit->active_status==1)
                                <button class="btn btn-success btn-sm " >Active</button>
                           @else
                                <button class="btn btn-danger btn-sm ">Inactive</button>
                           @endif 
                       </td>
                       <td>
                           <small>{{date("jS \of F Y", strtotime($unit->created_at))}}</small>
                       </td>
                        <td class="notexport">
                            <a href="{{route('purchase.unit.edit', encrypt(@$unit->id))}}" class="btn btn-sm btn-info" title="Edit Subcategory"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete Unit"  onclick="confirm_modal('{{route('purchase.unit.delete', @$unit->id)}}');"> <i class="fa fa-trash-o" aria-hidden="true"></i> </a>
                        </td>
                      
                    </tr>
                @endforeach
            </tbody>
        </table>
      
    </div>
</div>

@endsection
@section('script')
    <script type="text/javascript">
        function sort_brands(el){
            $('#sort_brands').submit();
        }
    </script>
@endsection
