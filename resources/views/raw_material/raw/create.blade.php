@extends('layouts.app')

@section('content')

<div class="row">
   <div class="col-sm-2"></div>
    <div class="col-sm-3">
        <form action="" method="POST" name="importform" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" class="form-control" required>
    </div>
    <div class="col-sm-6">
        <button class="btn btn-success">Import Excel Sheet</button>
     {{--    <a class="float-right btn btn-primary" href="{{route('taxExport')}}">Export Tax</a>
        <a class="float-right btn btn-primary" href="{{route('incometaxPdf')}}">PDF</a> --}}
    </div>
</div>
<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">

    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no">{{__('Edit Raw')}}</h3>
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
        
        <!-- Edit raw -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">


                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Edit Raw</h4>
                        </div>
                    </div>

                    <form action="{{ Route('raw.store')}}" class="form-vertical" id="insert_raw" name="insert_raw" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        @csrf
                        <input name="active_status" type="hidden" value="1"/>
                        <input type="hidden" name="csrf_test_name" value="" />
                        <div class="panel-body">

                            <div class="row" style="margin-bottom: 20px">
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label for="barcode_or_qrcode" class="col-sm-2 col-form-label">Barcode/QR-code <i class="text-danger"></i></label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="raw_id" type="text" id="raw_id" placeholder="Barcode/QR-code"  tabindex="1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                               

                        <div class="row" style="margin-bottom: 20px">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="raw_name" class="col-sm-4 col-form-label">Raw Name <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="raw_name" type="text" id="raw_name" placeholder="raw Name" required tabindex="1" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="serial_no" class="col-sm-4 col-form-label">SN </label>
                                    <div class="col-sm-8">
                                        <input type="text" tabindex="" class="form-control " id="serial_no" name="serial_no" placeholder="111,abc,XYz"  />
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row" style="margin-bottom: 20px">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="raw_model" class="col-sm-4 col-form-label">Model <i class="text-danger"></i></label>
                                    <div class="col-sm-8">
                                        <input type="text" tabindex="" class="form-control" id="raw_model" name="model" placeholder="Model"  />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="category_id" class="col-sm-4 col-form-label">Category</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2" id="category_id" name="category_id" tabindex="3">
                                                                             
                                            <option value="">Select one </option>
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{$category->name }}</option>
                                             @endforeach     
                                                
                                        </select>
                                    </div>
                                </div>
                            </div>


                        </div>                        

                        <div class="row"style="margin-bottom: 20px">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="sell_price" class="col-sm-4 col-form-label">Sale Price <i class="text-danger">*</i> </label>
                                    <div class="col-sm-8">
                                        <input class="form-control text-right" id="sell_price" name="price" type="text" required="" placeholder="0.00" tabindex="5" min="0">
                                    </div>
                                </div> 
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="unit" class="col-sm-4 col-form-label">Unit</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2" id="unit" name="unit" tabindex="-1" aria-hidden="true">
                                           <option value="">Select one </option>
                                            @foreach($units as $unit)
                                            <option value="{{$unit->id }}">{{ $unit->name}}</option>
                                             @endforeach  
                                                
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row"style="margin-bottom: 20px">
                            <div class="col-sm-6"style="margin-bottom: 20px">
                                <div class="form-group row">
                                    <label for="image" class="col-sm-4 col-form-label">Image </label>
                                        <div class="col-sm-8">
                                            <input type="file" name="image" class="form-control" id="image" tabindex="4">
                                        </div>
                                    </div> 
                            </div>
                                                    
                            <div class="col-sm-6"style="margin-bottom: 20px">
                                <div class="form-group row">
                                    <label for="tax" class="col-sm-4 col-form-label">vat <i class="text-danger"></i></label>
                                    <div class="col-sm-7">
                                      <input type="text" name="vat" class="form-control"  >

                                    </div>
                                    <div class="col-sm-1"> <i class="text-success">%</i></div>
                                </div>
                            </div>
                   
                                              
                            <div class="col-sm-6">
                                 <div class="form-group row">
                                    <label for="tax" class="col-sm-4 col-form-label">tax <i class="text-danger"></i></label>
                                    <div class="col-sm-7">
                                      <input type="text" name="tax" class="form-control" >
                                    </div>
                                    <div class="col-sm-1"> <i class="text-success">%</i></div>
                                </div>
                            </div>
               
                        </div> 


                        <div class="table-responsive raw-supplier" id="product_item">

                            <table class="table table-bordered table-hover"  id="raw_table">
                                <thead>
                                    <tr>
                                        <th class="text-center">Supplier <i class="text-danger">*</i></th>
                                        <th class="text-center">Supplier Price <i class="text-danger">*</i></th>


                                        <th class="text-center">Action <i class="text-danger"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">

                                        <td width="300">
                                            <select name="supplier_id[]" class="form-control select2"  required="" >
                                                <option value="">Select one </option>
                                                @foreach($suppliers as $supply)
                                                <option value="{{$supply->id }}"> 
                                                    {{$supply->supplier_name }}</option>
                                                 @endforeach  
                                                    
                                            </select>
                                        </td>
                                        <td class="">
                                            <input type="text" tabindex="6" class="form-control text-right" name="supplier_price[]" placeholder="0.00"  required  min="0">
                                                
                                    
                                        </td>

                                        <td width="100"> 
                                            <a class="btn btn-info btn-sm" name="Edit-invoice-item" id="Edit_btn"  tabindex="9"><i class="fa fa-plus-square" aria-hidden="true"></i></a> 
                                            
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="row"style="margin-bottom: 20px">
                            <div class="col-sm-12">
                                <center><label for="description" class="col-form-label">raw Details</label></center>
                                <textarea class="form-control" name="description" id="description" rows="2" placeholder="raw Details" tabindex="2"></textarea>
                            </div>
                        </div><br>
                        <div class="form-group row">
                            <div class="col-sm-6">

                                <input type="submit" id="Edit-raw" class="btn btn-primary btn-large" name="Edit-raw" value="Save" tabindex="10"/>
                               
                            </div>
                        </div>
                    </div>
                    </form>               
                </div>
                <input type="hidden" id="supplier_list" value='<option value="12">Lorence</option><option value="11">Osker</option><option value="10">Daniel</option><option value="9">Thomas</option><option value="8">Richard</option><option value="7">David</option><option value="6">Robert</option><option value="5">James</option><option value="4">Henry</option><option value="3">Harper</option>' name="">
            </div>
        </div>
    </section>
</div>
<!-- Edit raw End -->
    </div>

@endsection
@section('script')
    <script type="text/javascript">

        $(document).on('click', '#Edit_btn', function() {
          var a = $(".gh").val();
          a++;
          $('tbody').append(`<tr class="">

                            <td width="300">
                                <select name="supplier_id[]" class="form-control select2"  required="">                
                                    <option value="">Select one </option>
                                    @foreach($suppliers as $supply)
                                        <option value="{{$supply->id }}">{{$supply->supplier_name }}</option>
                                    @endforeach  
                                                    
                                                    
                                                    
                                </select>
                            </td>
                            <td class="">
                                    <input type="text" tabindex="6" class="form-control text-right" name="supplier_price[]" placeholder="0.00"  required  min="0"/>
                            </td>

                            <td width="100"> 
                                           
                                <a class="btn btn-danger btn-sm remove_image"  value="Delete" onclick="deleteRow(this)" tabindex="10"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                             
                             `);
          $('.select2').select2();      
        });
       
       /*$('#Edit_btn').click(function(){
         $('tbody').append(htmlString);
       });*/
        function sort_brands(el){
            $('#sort_brands').submit();
        }
         $(document).on ("click", ".remove_image", function () {
            $(this).parent().parent().remove();
        });
        $('.select2').select2({
            placeholder: 'select option'
        });
        
    </script>
@endsection
