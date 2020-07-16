@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('region_create')}}" class="btn btn-rounded btn-info pull-right">{{__('Add New Region')}}</a>
    </div>
</div>

<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no">{{__('Region List')}}</h3>
        <div class="pull-right clearfix">
            <form class="" id="sort_regionss" action="" method="GET">
                <div class="box-inline pad-rgt pull-left">
                    <div class="" style="min-width: 200px;">
                        <input type="text" class="form-control" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder=" Type Name & Enter">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped res-table mar-no" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Area')}}</th>
                    <th>{{__('Note')}}</th>
                    <th>{{ __('Status') }}</th>
                    <th width="10%">{{__('Options')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($regions as $key => $region)
                    <tr>
                        <td>{{ ($key+1) + (@$regions->currentPage() - 1)*@$regions->perPage() }}</td>
                        <td>{{@$region->name}}</td>
                        <td>{{@$region->area}}</td>
                        <td>{{@$region->note}}</td>
                        <td>
                            @if ($region->active_status == '0')
                                <span class="badge badge-pill badge-danger">Deavtive</span>
                            @else
                                <span class="badge badge-pill badge-success">Active</span>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    {{__('Actions')}} <i class="dropdown-caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{route('region_edit', encrypt(@$region->id))}}">{{__('Edit') }}</a></li>
                                    <li><a onclick="confirm_modal('{{route('region_destroy', @$region->id)}}');">{{__('Delete')}}</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="clearfix">
            <div class="pull-right">
                {{ $regions->appends(request()->input())->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
    <script type="text/javascript">
        function sort_brands(el){
            $('#sort_regionss').submit();
        }
    </script>
@endsection
