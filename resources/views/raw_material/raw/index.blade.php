@extends('layouts.app')

@section('content')

<div class="row">
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
        <h3 class="panel-title pull-left pad-no">{{__('Manage Raw Materials')}}</h3>
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
                    <th>{{__('Raw Material Name')}}</th>
                    <th>{{__('Raw Model')}}</th>
                    <th>{{__('Supplier Name')}}</th>
                    <th>{{__('Price')}}</th>
                    <th>{{__('Supplier Price')}}</th>
                    <th>{{__('Images')}}</th>
                    <th>{{__('Action')}}</th>
                </tr>
            </thead>
            <tbody>
                <?php  $i=1;?>
                @foreach($raws as $raw)
                 @foreach($raw->RawMaterialsDetails as $supply)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $raw->raw_name}}</td>
                        <td>{{ $raw->model}}</td>
                        <td>
                            @foreach(App\Supplier::where('id',$supply->supplier_id)->get() as $name)
                                {{ $name->supplier_name}}
                            @endforeach
                        </td>
                        <td>{{ $raw->price}}</td>  
                        <td>
                           
                            {{ $supply->supplier_price }}
                          
                        </td>
                        
                        <td>
                            <img loading="lazy"  class="img-md" src="{{ asset('public/'.$raw->image) }}" alt="raw image">
                        </td>
                        <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    {{__('Actions')}} <i class="dropdown-caret"></i>
                                </button>
                                
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="{{route('raw.edit', encrypt(@$raw->id))}}">{{__('Edit') }}</a></li>
                                    <li><a onclick="confirm_modal('{{route('raw.destroy', @$raw->id)}}');">{{__('Delete')}}</a></li>
                                </ul>
                        </td>
                    </tr>
                    @endforeach
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
