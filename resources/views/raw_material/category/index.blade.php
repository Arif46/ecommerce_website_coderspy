@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('raw.category.create')}}" class="btn btn-rounded btn-info pull-right">{{__('Add raw category')}}</a>
    </div>

   <div class="col-sm-2"></div>
    <div class="col-sm-3">
        <form action="{{ route('taxImport') }}" method="POST" name="importform" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" class="form-control" required>
    </div>
    <div class="col-sm-6">
        <button class="btn btn-success">Import Excel Sheet</button>
     {{--    <a class="float-right btn btn-primary" href="{{route('taxExport')}}">Export Tax</a>
        <a class="float-right btn btn-primary" href="{{route('incometaxPdf')}}">PDF</a> --}}
    </div>
    </form>
</div>
<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no">{{__('Manage Raw Category')}}</h3>
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
                    <th>{{__('Raw Category Name')}}</th>
                    <th>{{__('Action')}}</th>
                </tr>
            </thead>
            <tbody>
                <?php  $i=1;?>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $category->name}}</td>
                      
                       <!--  <td>
                           @if ($category->active_status == '0')
                               <span class="badge badge-pill badge-danger" style="padding: 10px;">Deavtive</span>
                           @else
                               <span class="badge badge-pill badge-success" style="padding: 10px;">Active</span>
                           @endif
                       </td> -->
                        <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    {{__('Actions')}} <i class="dropdown-caret"></i>
                                </button>
                                
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="{{route('raw.category.edit', encrypt(@$category->id))}}">{{__('Edit') }}</a></li>
                                    <li><a onclick="confirm_modal('{{route('raw.category.delete', @$category->id)}}');">{{__('Delete')}}</a></li>
                                </ul>
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
