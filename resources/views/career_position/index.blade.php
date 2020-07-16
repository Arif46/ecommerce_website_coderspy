@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('career_position_create')}}" class="btn btn-rounded btn-info pull-right">{{__('Add New Position')}}</a>
    </div>
</div>

<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no">{{__('Position List')}}</h3>
        <div class="pull-right clearfix">
            <form class="" id="sort_brands" action="" method="GET">
                <div class="box-inline pad-rgt pull-left">
                    <div class="" style="min-width: 200px;">
                        <input type="text" class="form-control" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder=" Type title & Enter">
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
                    <th>{{__('Title')}}</th>
                    <th>{{__('Details')}}</th>
                    <th>{{__('Status')}}</th>
                    <th width="10%">{{__('Options')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($career_positions as $key => $career_position)
                    <tr>
                        <td>{{ ($key+1) + ($career_positions->currentPage() - 1)*$career_positions->perPage() }}</td>
                        <td>{{@$career_position->title}}</td>
                        <td>{{ str_limit(@$career_position->details,150)}}</td>
                        <td>
                            @if ($career_position->active_status == '0')
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
                                    <li><a href="{{route('career_position_edit', encrypt(@$career_position->id))}}">{{__('Edit') }}</a></li>
                                    <li><a onclick="confirm_modal('{{route('career_position_destroy', @$career_position->id)}}');">{{__('Delete')}}</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="clearfix">
            <div class="pull-right">
                {{ $career_positions->appends(request()->input())->links() }}
            </div>
        </div>
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
