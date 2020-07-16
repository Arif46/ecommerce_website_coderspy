@extends('layouts.app')

@section('content')

    <div class="col-lg-6">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Category Name')}}</h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('blogs-category.update',$data->id) }}" method="POST">
                <input name="_method" type="hidden" value="PATCH">
                <input type="hidden" name="id" value="{{$data->id}}">
                @csrf
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="category_name">{{__('Name')}}</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="{{__('Category Name')}}" id="category_name" name="category_name" class="form-control" value="{{$data->category_name}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="active_status">{{__('Status')}}</label>
                        <div class="col-sm-10">
                            <select name="active_status" id="active_status"  class="form-control" required>
                                <option value="">Select Status</option>
                                <option value="1" {{$data->active_status == 1?'selected':''}}>Active</option>
                                <option value="0" {{$data->active_status == 0?'selected':''}}>In-active</option>
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
