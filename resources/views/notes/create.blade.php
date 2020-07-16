@extends('layouts.app')

@section('content')

<div class="col-lg-6 col-lg-offset-3">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Add New Top Notes')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('topnote.store') }}" method="POST" enctype="multipart/form-data">
        	@csrf
            <div class="panel-body">
                    <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Category')}}</label>
                    <div class="col-sm-10">
                        <select name="category_id" required class="form-control demo-select2-placeholder">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{__($category->name)}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Name')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Name')}}" id="name" name="name" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="img">{{__('Image')}} <small>(200x200)</small></label>
                    <div class="col-sm-10">
                        <input type="file" id="img" name="image" class="form-control" required>
                    </div>
                </div>
                       <div class="form-group">
                    <label class="col-sm-2 control-label" for="img">{{__('Banner Image')}} <small>(1100x550)</small></label>
                    <div class="col-sm-10">
                        <input type="file" id="img" name="banner_image" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">{{__('Description')}}</label>
                    <div class="col-sm-10">
                        <textarea name="description" rows="5" class="form-control"></textarea>
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
