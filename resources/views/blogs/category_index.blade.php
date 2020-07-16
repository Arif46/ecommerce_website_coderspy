@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <a href="{{ route('blogs-category.create')}}" class="btn btn-rounded btn-info pull-right">{{__('Add New Category')}}</a>
        </div>
    </div>

    <br>

    <!-- Basic Data Tables -->
    <!--===================================================-->
    <div class="panel">
        <div class="panel-heading bord-btm clearfix pad-all h-100">
            <h3 class="panel-title pull-left pad-no">{{__('Categories')}}</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped res-table mar-no" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Created By')}}</th>
                    <th>{{__('Active Status')}}</th>
                    <th width="10%">{{__('Options')}}</th>
                </tr>
                </thead>
                <tbody>
                @php($i=0)
                @forelse($blog_categories as $category)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$category->category_name}}</td>
                    <td>{{$category->user->name}}</td>
                    <td>
                        {{$category->active_status == 1?'Active':'Inactive'}}
                    </td>
                    <td>
                    <div class="btn-group dropdown">
                        <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                            {{__('Actions')}} <i class="dropdown-caret"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="{{route('blogs-category.edit', $category->id)}}">{{__('Edit')}}</a></li>
                            <li><a onclick="confirm_modal('{{route('blogs_category_delete', $category->id)}}');">{{__('Delete')}}</a></li>
                        </ul>
                    </div>
                </td>
                </tr>
                @empty

                @endforelse
                </tbody>
            </table>

            <div class="clearfix">
                <div class="pull-right">
                    {{ $blog_categories->appends(request()->input())->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection
