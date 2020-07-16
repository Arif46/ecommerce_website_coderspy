@extends('layouts.app')
@section('content')
    <div class="col-lg-8 col-lg-offset-2">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Background Image')}}</h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('background_image_update') }}" method="POST" enctype="multipart/form-data">
            	@csrf
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="image">{{__('Background Image')}} </label>
                        <div class="col-sm-7">
                            <input type="file" id="image" name="image" class="form-control">
                        </div>
                        <div class="col-sm-2">
                            <img src="{{url('/')}}/{{$Back_Img->image}}" height="50px" width="80px;">
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
@push('script')
@endpush
