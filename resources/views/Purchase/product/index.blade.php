@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('purchase.product.create')}}" class="btn btn-rounded btn-info pull-right">{{__('Add Purchase Product')}}</a>
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
        <h3 class="panel-title pull-left pad-no">{{__('Manage Purchase Product')}}</h3>
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
                    <th>{{__('Product Name')}}</th>
                    <th>{{__('Product Code')}}</th>
                    <th>{{__('Stock')}}</th>
                    <th>{{__('Category')}}</th>
                    <th>{{__('Sub Category')}}</th>
                    <th>{{__('Unit')}}</th>
                    <th>{{__('Action')}}</th>
                </tr>
            </thead>
            <tbody>
                <?php  $i=1 ?>
                @foreach($products as $product)
                    <tr>
                        <td>{{++$loop->index}}</td>
                        <td>{{ $product->name}}</td>
                        <td>{{ $product->code}}</td>
                        <td>{{ $product->stock}}</td>
                       <td>
                           @foreach(App\PurchaseCategory::where('id',$product->category_id)->get() as $cate)
                            {{ $cate->name}}
                           @endforeach
                       </td>

                       <td>
                          @foreach($subcategories as $subcategory)
                              @php $i = 1 @endphp
                               @if($subcategory->purchase_product_id==$product->id)
                                   @foreach(App\PurchaseSubCategory::where('id',$subcategory->subcategory_id)->get() as $subcate)
                                    {{ $subcate->name}},
                                                                                        
                                   @endforeach
                                @endif
                           @endforeach
                       </td>

                       <td>
                           @foreach(App\PurchaseUnit::where('id',$product->unit_id)->get() as $unit)
                            {{ $unit->name}}
                           @endforeach
                       </td>
                        <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    {{__('Actions')}} <i class="dropdown-caret"></i>
                                </button>
                                
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="{{route('purchase.product.edit', encrypt(@$product->id))}}">{{__('Edit') }}</a></li>
                                    <li><a onclick="confirm_modal('{{route('purchase.product.delete', @$product->id)}}');">{{__('Delete')}}</a></li>
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
