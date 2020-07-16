@extends('layouts.app')

@section('content')

    <div class="col-lg-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Event Information')}}</h3>
            </div>
            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="title">{{__('Event Title')}}</label>
                        <div class="col-sm-9">
                            <input type="text" id="title" name="title" class="form-control" required  placeholder="{{__('Event Title')}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="url">{{__('Url')}}</label>
                        <div class="col-sm-9">
                            <input type="url" id="url" name="url" class="form-control"  placeholder="{{__('Event Url')}}" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="img">{{__('Image')}}</label>
                        <div class="col-sm-9">
                            <input style="width: 100%" type="file" id="image" name="img" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="back_img">{{__('Back Image')}}</label>
                        <div class="col-sm-9">
                            <input style="width: 100%" type="file" id="back_img" name="back_img" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="description">{{__('Description')}}</label>
                        <div class="col-sm-9">
                            <textarea type="text" id="description" name="description" class="editor" required  placeholder="{{__('Description')}}"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="start_date">{{__('Event Date')}}</label>
                        <div class="col-sm-10">
                            <div id="demo-dp-range">
                                <div class="input-daterange input-group" id="datepicker">
                                    <input type="text" class="form-control" name="date" placeholder="Event Date">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="active_status">{{__('Status')}}</label>
                        <div class="col-sm-9">
                            <select name="active_status" id="active_status"  class="form-control" required>
                                <option value="">---- Select Status ----</option>
                                <option value="1">Active</option>
                                <option value="0">In-active</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8"></div>
                    <div class="col-md-3">
                        <div class="panel-footer text-right">
                            <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
                        </div>
                    </div>
                    <div class="col-md-1    "></div>
                </div>
            </form>
            <!--===================================================-->
            <!--End Horizontal Form-->

        </div>
    </div>

@endsection
@section('script')
    <script>
        function blog_img(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blog_img').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#image").change(function(){
            blog_img(this);
        });
    </script>
@endsection
