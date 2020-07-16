@extends('layouts.app')

@section('content')

<div class="row">
    <div class="header-options">
        <div class="col-sm-12">
            <a href="{{ route('purchase.category')}}" class="btn btn-rounded btn-success pull-right">{{__('View Purchase Category')}}</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Add Purchase Category')}}</h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('purchase.category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="panel-body"> 
                    <div class="form-group start_div">
                        <input name="active_status" type="hidden" value="1"> 
                        <div class="col-xs-offset-2 col-md-6">
                            <label class="">{{__('Category Name')}}</label>
                            <input type="text" placeholder="{{__('Category Name')}}" id="" name="category" class="form-control {{ $errors->has('Start Amount') ? ' is-invalid' : '' }}" required>
                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red">{{ $errors->first('category') }}</strong>
                                </span>
                            @endif
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
        </script>
</div>
@endsection
