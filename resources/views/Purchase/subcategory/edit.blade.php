@extends('layouts.app')

@section('content')

<div class="row">
    <div class="header-options">
        <div class="col-sm-12">
            <a href="{{ route('purchase.subcategory')}}" class="btn btn-rounded btn-success pull-right">{{__('View Purchase Subcategory')}}</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Edit Purchase SubCategory')}}</h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('purchase.subcategory.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="panel-body">
                    <div class="form-group start_div"> 
                        <input name="sub_id" type="hidden" value="{{ $subcategory->id}}">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="name">{{__('Parent Category')}}</label>
                            <div class="col-sm-6">
                                <select name="category" required class="form-control demo-select2">
                                    <option >Select</option> 
                                @foreach($categories as $category) 
                                <option value="{{ $category->id }}" {{$subcategory->category_id==$category->id? 'selected':''}}>{{ $category->name }}</option>  
                                @endforeach 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="title">{{__('Category Name')}}</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="{{__('Category Name')}}" id="" name="name" class="form-control {{ $errors->has('Start Amount') ? ' is-invalid' : '' }}" required value="{{ $subcategory->name}}">
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="name">{{__('Status')}}</label>
                            <div class="col-sm-6">
                                <select name="active_status" required class="form-control demo-select2">
                                    <option >{{__('Select Status')}}</option>  
                                    <option value="1" {{$category->active_status==1? 'selected':''}}>{{__('Active')}}</option>   
                                    <option value="0" {{$category->active_status==0? 'selected':''}}>{{__('Inactive')}}</option>   
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <button class="btn btn-success" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> {{__('Save')}}</button>
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
        </script>
    </div>
@endsection
