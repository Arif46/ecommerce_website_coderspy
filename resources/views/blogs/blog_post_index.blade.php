@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <a href="{{ route('blog-posts.create')}}" class="btn btn-rounded btn-info pull-right">{{__('Add New Post')}}</a>
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
                    <th>{{__('Image')}}</th>
                    <th>{{__('Title')}}</th>
                    <th>{{__('Category Name')}}</th>
                    <th>{{__('Description')}}</th>
                    <th>{{__('Created By')}}</th>
                    <th width="10%">{{__('Options')}}</th>
                </tr>
                </thead>
                <tbody>
                @php($i=0)
                @forelse($blogs as $blog)
                <tr>
                    <td>{{++$i}}</td>
                    <td>
                        <img src="{{asset('public/'.$blog->image)}}" alt="image" height="32px" width="40px">
                    </td>
                    <td>{{  \Illuminate\Support\Str::limit(strip_tags($blog->title),20, '')}}</td>
                    <td>{{$blog->blogCategory->category_name}}</td>
                    <td>{{  \Illuminate\Support\Str::limit(strip_tags($blog->description),40, '...')}}</td>
                    <td>{{$blog->user->name}}</td>
                    <td>
                    <div class="btn-group dropdown">
                        <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                            {{__('Actions')}} <i class="dropdown-caret"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="{{route('blog-posts.edit', $blog->id)}}">{{__('Edit')}}</a></li>
                            <li><a onclick="confirm_modal('{{route('blogs_post_delete', $blog->id)}}');">{{__('Delete')}}</a></li>
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
                    {{ $blogs->appends(request()->input())->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection

