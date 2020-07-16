@extends('layouts.app')
@section('content')

<div class="col-lg-12">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Expense')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('expense.store') }}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="expense_date">{{__('Date')}}</label>
                    <div class="col-sm-9">
                        <div id="demo-dp-range">
                            <div class="input-daterange input-group" id="datepicker" style="width: 100%;">
                                <input type="text" class="form-control" name="expense_date" id="expense_date" placeholder="Date">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group" id="category">
                    <label class="col-sm-3 control-label">{{__('Category')}}</label>
                    <div class="col-sm-9">
                        <select class="form-control demo-select2-placeholder" name="category_id" id="category_id" required>
                            @foreach($exCategories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group" id="subcategory">
                    <label class="col-sm-3 control-label">{{__('Subcategory')}}</label>
                    <div class="col-sm-9">
                        <select class="form-control demo-select2-placeholder" name="sub_category_id" id="sub_category_id" >

                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="amount">{{__('Amount')}}</label>
                    <div class="col-sm-9">
                        <input type="number" placeholder="{{__('Amount')}}" id="amount" name="amount" class="form-control" step="any" required>
                    </div>
                </div>

                <div class="panel-footer text-right">
                    <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
                </div>
        </form>
        <!--===================================================-->
        <!--End Horizontal Form-->
    </div>
</div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#category_id').on('change', function() {
                var stateID = $(this).val();
                if(stateID) {
                    $.ajax({
                        url: '{{url("admin/get-expense-subcategory")}}/'+stateID,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {
                            $('#sub_category_id').empty();
                            $.each(data, function(key, value) {
                                console.log(value.id);
                                $('#sub_category_id').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                            });
                        }
                    });
                }else{
                    $('#sub_category_id').empty();
                }
            });
        });
    </script>
@endsection
