@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('press_list_create')}}" class="btn btn-rounded btn-info pull-right">{{__('Add New Press')}}</a>
    </div>
</div>

<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no">{{__('Press List')}}</h3>
        <div class="pull-right clearfix">
            <form class="" id="sort_brands" action="" method="GET">
                <div class="box-inline pad-rgt pull-left">
                    <div class="" style="min-width: 200px;">
                        <input type="text" class="form-control" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder=" Type name & Enter">
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
                    <th>{{__('Image')}}</th>
                    <th>{{__('URL')}}</th>
                    <th>{{__('Position No')}}</th>
                    <th>{{__('Note')}}</th>
                    <th width="10%">{{__('Options')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($press_lists as $key => $press_list)
                    <tr>
                        <td>{{ ($key+1) + ($press_lists->currentPage() - 1)*$press_lists->perPage() }}</td>
                        <td>{{@$press_list->title}}</td>
                        <td><img loading="lazy"  class="img-md" src="{{ asset(@$press_list->image) }}" alt="Logo"></td>
                        <td>{{@$press_list->url}}</td>
                        <td>{{@$press_list->serial_number}}</td>
                        <td>{{@$press_list->note}}</td>
                        <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    {{__('Actions')}} <i class="dropdown-caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{route('press_list_edit', encrypt(@$press_list->id))}}">{{__('Edit') }}</a></li>
                                    <li><a onclick="confirm_modal('{{route('press_list_destroy', @$press_list->id)}}');">{{__('Delete')}}</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="clearfix">
            <div class="pull-right">
                {{ $press_lists->appends(request()->input())->links() }}
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
