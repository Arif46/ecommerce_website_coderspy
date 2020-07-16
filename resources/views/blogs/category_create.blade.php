@extends('layouts.app')

@section('content')

    <div class="col-lg-6">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Category Name')}}</h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('blogs-category.store') }}" method="POST">
                @csrf
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="category_name">{{__('Name')}}</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="{{__('Category Name')}}" id="category_name" name="category_name" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="active_status">{{__('Status')}}</label>
                        <div class="col-sm-10">
                            <select name="active_status" id="active_status"  class="form-control" required>
                                <option value="">---- Select Status ----</option>
                                <option value="1">Active</option>
                                <option value="0">In-active</option>
                            </select>
                        </div>
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
