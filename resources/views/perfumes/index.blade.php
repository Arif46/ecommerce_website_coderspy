@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('perfumes.create')}}" class="btn btn-rounded btn-info pull-right">{{__('Add New Perfumer')}}</a>
    </div>
    <div class="col-sm-2"></div>
    <div class="col-sm-3">
        <form action="{{ route('perfumersImport') }}" method="POST" name="importform" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" class="form-control" required>
    </div>
    <div class="col-sm-6">
        <button class="btn btn-success">Import Excel Sheet</button>
        <a class="float-right btn btn-primary" href="{{route('perfumesExport')}}">Export Perfume</a>
    </div>
    </form>
</div>
<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no">{{__('Perfume')}}</h3>
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
                    <th>{{__('Name')}}</th>
                    <th>{{__('Image')}}</th>
                    <th>{{__('Education')}}</th>
                    <th>{{__('Number')}}</th>
                    <th>{{__('Website')}}</th>
                    <th width="10%">{{__('Options')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($brands as $key => $brand)
                    <tr>
                        <td>{{ ($key+1) + ($brands->currentPage() - 1)*$brands->perPage() }}</td>
                        <td>{{$brand->name}}</td>
                        <td><img loading="lazy"  class="img-md" src="{{ asset('public/'.$brand->img) }}" alt="Logo"></td>
                        <td>{{$brand->education}}</td>
                        <td>{{$brand->number_database}}</td>
                        <td>{{$brand->website}}</td>
                        <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    {{__('Actions')}} <i class="dropdown-caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{route('perfumes.edit', encrypt($brand->id))}}">{{__('Edit')}}</a></li>
                                    <li><a onclick="confirm_modal('{{route('perfumes.destroy', $brand->id)}}');">{{__('Delete')}}</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="clearfix">
            <div class="pull-right">
                {{ $brands->appends(request()->input())->links() }}
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
