@extends('layouts.app')
@section('content')

    <div class="col-lg-8 col-lg-offset-1">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Expense Sub Category')}}</h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('expense-subcategory.store') }}" method="POST"  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$exSubCat->id}}">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="ex_category_id">{{__('Category')}}</label>
                        <div class="col-sm-9">
                            <select name="ex_category_id" id="ex_category_id"  class="form-control" required>
                                <option value="">---- Select Parent Category ----</option>
                                @foreach($exCategories as $legal)
                                    <option value="{{$legal->id}}" {{$exSubCat->ex_category_id ==$legal->id?'selected':''}}>{{$legal->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">{{__('Name')}}</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="{{__('Name')}}" id="name" name="name" class="form-control" required value="{{$exSubCat->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="serial">{{__('Serial')}}</label>
                        <div class="col-sm-9">
                            <input type="number" placeholder="{{__('Serial')}}" id="serial" name="serial" class="form-control" required value="{{$exSubCat->serial}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="description">{{__('Description')}}</label>
                        <div class="col-sm-9">
                            <textarea type="text" placeholder="{{__('Description')}}" id="description" name="description" class="form-control" placholder="Enter Description">{{$exSubCat->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="active_status">{{__('Status')}}</label>
                        <div class="col-sm-9">
                            <select name="active_status" id="active_status"  class="form-control" required>
                                <option value="">---- Select Status ----</option>
                                <option value="1" {{$exSubCat->active_status == 1?'selected':''}}>Active</option>
                                <option value="0" {{$exSubCat->active_status == 0?'selected':''}}>In-active</option>
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
