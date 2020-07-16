@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('faq_create')}}" class="btn btn-rounded btn-info pull-right">{{__('Add New FAQ')}}</a>
    </div>
</div>

<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no">{{__('FAQ List')}}</h3>
        <div class="pull-right clearfix">
            <form class="" id="sort_brands" action="" method="GET">
                <div class="box-inline pad-rgt pull-left">
                    <div class="" style="min-width: 200px;">
                        <input type="text" class="form-control" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder=" Type Title & Enter">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped res-table mar-no" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th width="5%">#</th>
                    <th width="20%%">{{__('Title')}}</th>
                    <th width="10%">{{__('Category')}}</th>
                    <th width="35%">{{ __('Description') }}</th>
                    <th width="5%">{{ __('Number of View') }}</th>
                    <th width="10%%">{{ __('Image') }}</th>
                    <th width="5%%">{{ __('Status') }}</th>
                    <th width="10%">{{__('Options')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($faqs as $key => $faq)
                    <tr>
                        <td>{{ ($key+1) + ($faqs->currentPage() - 1)*$faqs->perPage() }}</td>
                        <td>{{@$faq->title}}</td>
                        <td>{{@$faq->faq_name}}</td>
                        <td>{{ str_limit(@$faq->description,100)}}</td>
                        <td><span class="badge badge-pill badge-primary">{{@$faq->number_of_view}}</span></td>
                        <td><img loading="lazy"  class="img-md" src="{{ asset('public/'.$faq->image) }}" alt="Logo"></td>
                        <td>
                            @if ($faq->active_status == '0')
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
                                    <li><a href="{{route('faq_edit', encrypt(@$faq->id))}}">{{__('Edit') }}</a></li>
                                    <li><a onclick="confirm_modal('{{route('faq_destroy', @$faq->id)}}');">{{__('Delete')}}</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="clearfix">
            <div class="pull-right">
                {{ $faqs->appends(request()->input())->links() }}
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
