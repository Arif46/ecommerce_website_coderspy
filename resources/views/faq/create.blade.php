@extends('layouts.app')

@section('content')

<div class="col-lg-6 col-lg-offset-3">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('FAQ Information')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('faq_store') }}" method="POST" enctype="multipart/form-data">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="title">{{__('Title')}}</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="{{__('Title')}}" id="title" name="title" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">{{__('FAQ Category')}}</label>
                    <div class="col-sm-9">
                        <select name="category_id" required class="form-control demo-select2-placeholder" required>
                            @foreach($faq_categorys as $faq_category)
                                <option value="{{$faq_category->id}}">{{__($faq_category->name)}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="image">{{__('Image')}}</label>
                    <div class="col-sm-9">
                        <input type="file" id="image" name="image" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">{{__('Description')}}</label>
                    <div class="col-sm-9">
                        <textarea name="description" rows="8" class="form-control"></textarea>
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











