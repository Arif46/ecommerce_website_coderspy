@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('basenote.create')}}" class="btn btn-rounded btn-info pull-right">{{__('Add New Base Notes')}}</a>
    </div>
</div>

<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no">{{__('Base Notes')}}</h3>
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
                    <th>SL.</th>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Category')}}</th>
                    <th>{{__('Description')}}</th>
                    <th>{{__('Image')}}</th> 
                    <th>{{__('Banner Image')}}</th>
                    <th width="10%">{{__('Options')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($notes as $key => $note)
                    <tr>
                        <td>{{ ($key+1) + ($notes->currentPage() - 1)*$notes->perPage() }}</td>
                        <td>{{@$note->name}}</td>
                        <td>{{@$note->category->name}}</td>
                        <td style="width: 40%">{{substr(@$note->description,0,200)}} ...</td>
                        <td><img loading="lazy"  class="img-sm" src="{{ asset('public/'.$note->image) }}" alt="Logo"></td>
                        <td><img loading="lazy"  class="img img-responsive" src="{{ asset('public/'.$note->banner_image) }}" alt="Logo" style="width:100px; height:auto"></td>

                        <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    {{__('Actions')}} <i class="dropdown-caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{route('basenote.edit', encrypt($note->id))}}">{{__('Edit')}}</a></li>
                                    <li><a onclick="confirm_modal('{{route('basenote.destroy', $note->id)}}');">{{__('Delete')}}</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="clearfix">
            <div class="pull-right">
                {{ $notes->appends(request()->input())->links() }}
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
