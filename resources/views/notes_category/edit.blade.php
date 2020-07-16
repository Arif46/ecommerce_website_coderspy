@extends('layouts.app')

@section('content')

<div class="col-lg-6 col-lg-offset-3">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Note Category Info')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('notecategory.update', @$NotesCategory->id) }}" method="POST" enctype="multipart/form-data">
            <input name="id" type="hidden" value="{{$NotesCategory->id}}">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Name')}}</label>
                    <div class="col-sm-10">
                    <input type="text" placeholder="{{__('Name')}}" id="name" name="name" value="{{ @$NotesCategory->name}}" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="img">{{__('Image')}} <small>(120x80)</small></label>
                    <div class="col-sm-10">
                        <input type="file" id="image" name="image" value="{{ @$NotesCategory->image}}" class="form-control {{ $errors->has('iamge') ? ' is-invalid' : '' }}">
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">{{__('Description')}}</label>
                    <div class="col-sm-10">
                        <textarea name="description" rows="5" class="form-control">{{ @$NotesCategory->description}}</textarea>
                    </div>
                </div>
           

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Status')}}</label>
                    <div class="col-sm-6">
                        <select name="active_status" required class="form-control demo-select2">
                            <option >Select Status</option> 
                            <option value="1" <?php if($NotesCategory->active_status == 1) echo "selected";?> >Active</option> 
                            <option value="0" <?php if($NotesCategory->active_status == 0) echo "selected";?> >Deactive</option> 
                        </select>
                    </div>
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
