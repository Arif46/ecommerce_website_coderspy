@extends('layouts.app')
@section('content')

    <div class="col-lg-8 col-lg-offset-1">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Expense Category')}}</h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('expense-category.store') }}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">{{__('Name')}}</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="{{__('Name')}}" id="name" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="serial">{{__('Serial')}}</label>
                        <div class="col-sm-9">
                            <input type="number" placeholder="{{__('Serial')}}" id="serial" name="serial" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="description">{{__('Description')}}</label>
                        <div class="col-sm-9">
                            <textarea type="text" placeholder="{{__('Description')}}" id="description" name="description" class="form-control" placholder="Enter Description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="active_status">{{__('Status')}}</label>
                        <div class="col-sm-9">
                            <select name="active_status" id="active_status"  class="form-control" required>
                                <option value="">---- Select Status ----</option>
                                <option value="1" >Active</option>
                                <option value="0" >In-active</option>
                            </select>
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
