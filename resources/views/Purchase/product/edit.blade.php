@extends('layouts.app')

@section('content')

<div class="col-lg-12">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Edit Purchase Product')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('purchase.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="panel-body">
                
                <div class="form-group start_div">
                    <input name="active_status" type="hidden" value="1">
                  <div class="row">
                        <div class="col-sm-6">
                            <label class="col-form-label">{{__('Product Name')}} <i class="fa fa-asterisk" style="font-size:8px; color:red;"></i></label>
                            <input type="text" placeholder="{{__('Product Name')}}" value= {{ $product->name }} id="" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required >
                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red">{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <label class="col-form-label">{{__('Product Code')}} <i class="fa fa-asterisk" style="font-size:8px; color:red;"></i></label>
                            <input type="text" placeholder="{{__('Product Code')}}" id="" name="code" class="form-control {{ $errors->has('code') ? ' is-invalid' : '' }}"value= {{ $product->code }} required>
                            @if ($errors->has('code'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red">{{ $errors->first('code') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6" style ="margin-top:20px;">
                            <label class="col-form-label">{{__('Stock')}} <i class="fa fa-asterisk" style="font-size:8px; color:red;"></i></label>
                            <input type="text" placeholder="{{__('Product Code')}}" id="" name="stock" class="form-control {{ $errors->has('stock') ? ' is-invalid' : '' }}" required value= {{ $product->stock }}>
                            @if ($errors->has('stock'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red">{{ $errors->first('stock') }}</strong>
                                </span>
                            @endif
                        </div>
                         <div class="col-sm-6" style ="margin-top:20px;">
                            <label class="col-form-label">{{__('Category')}} <i class="fa fa-asterisk" style="font-size:8px; color:red;"></i></label>
                            <select name="category" id="" class="form-control select2">
                                <option value="">--Select one--</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ ($category->id == $product->category_id)? 'selected':''}}>{{ $category->name }}</option>
                                @endforeach
                               
                            </select>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6" style ="margin-top:20px;">
                            <label class="col-form-label">{{__('Sub Category')}}</label>
                            <select name="subcategory[]" id="" class="form-control select2" multiple="multiple">

                                <option value="">--Select one--</option>
                                @foreach($subcategories as $subcategory)
                                    <option value="{{ $subcategory->id }}"
                                       
                                            <?php foreach (App\PurchaseSubCategoryProductDetails::where('subcategory_id',$subcategory->id)->where('purchase_product_id',$product->id)->get() as $key => $value):?>
                                                selected
                                            <?php endforeach ?>
                                       
                                        >{{ $subcategory->name }}</option>
                                @endforeach
                               
                            </select>
                            
                        </div>
                        <div class="col-sm-6" style ="margin-top:20px;">
                            <label class="col-form-label">{{__('Unit')}} <i class="fa fa-asterisk" style="font-size:8px; color:red;"></i></label>
                            <select name="unit" id="" class="form-control select2">
                                <option value="">--Select one--</option>
                                @foreach($units as $unit)
                                    <option value="{{ $unit->id }}" {{( $unit->id == $product->unit_id)? 'selected':''}}>{{ $unit->name }}</option>
                                @endforeach
                               
                            </select>
                            
                        </div>
                    </div>

                   
                  
                </div>
               
              <div class="panel-footer text-right">
                <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
              </div>
           
            </div>
           
        </form>
        <!--===================================================-->
        <!--End Horizontal Form-->

    </div>
</div>

   <script>
        let htmlString = `<div class="col-sm-12">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="start_amount[]" id="start" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="end_amount[]" id="end" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="tax_rate[]" id="amount" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <button type="button" style="color:#fff!important;" class="btn btn-sm btn-danger remove_image">Remove <i class="fa fa-trash-o"></i></button>
                            </div>
                        </div>`;
         $('#add_btn').click(function() {
            $('.start_div').append(htmlString);
        });
        $(document).on ("click", ".remove_image", function () {
            $(this).parent().parent().remove();
        });
        $('.select2').select2();
    </script>

@endsection
