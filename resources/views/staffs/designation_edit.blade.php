@extends('layouts.app')
@section('content')
    <div class="col-lg-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Designation Name Update')}}</h3>
            </div>
            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('designation.update',$Designation->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input name="id" type="hidden" value="{{$Designation->id}}">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="name">{{__('Designation Name')}}</label>
                        <div class="col-sm-6">
                            <input type="text" placeholder="{{__('Designation Name')}}" id="name" name="des_name" value="{{$Designation->des_name}}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="active_status">{{__('Status')}}</label>
                        <div class="col-sm-6">
                            <select name="status" id="status"  class="form-control" required>
                                <option value="">Select Status</option>
                                <option value="1" {{$Designation->active_status == 1?'selected':''}}>Active</option>
                                <option value="0" {{$Designation->active_status == 0?'selected':''}}>In-active</option>
                            </select>
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <button class="btn btn-purple" type="submit">{{__('Update')}}</button>
                    </div>
            </form>
            <!--===================================================-->
            <!--End Horizontal Form-->

        </div>
    </div>

@endsection
