@extends('layouts.app')
@section('content')
    <div class="col-lg-10 col-lg-offset-1">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('My Blend & Subscription')}}</h3>
            </div>
            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('my-blend-subscription.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @forelse($data as $value)
                    <input type="hidden" name="id" value="{{$value->id}}">
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="my_blend">{{__('My Blend')}}</label>
                            <div class="col-sm-7">
                                <input type="file" id="my_blend" name="my_blend" class="form-control">
                            </div>
                            <div class="col-sm-2">
                                <img src="{{url('public/')}}/{{$value->my_blend}}" height="40px" width="50px" alt="my_blend" id="my_blend_img">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="my_blend">{{__('My Blend Url')}}</label>
                            <div class="col-sm-7">
                                <input type="url" id="my_blend_url" name="my_blend_url" class="form-control" value="{{$value->my_blend_url}}" placeholder="{{__('My Blend Url')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-7">
                                <hr>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="subscription">{{__('Subscription')}}</label>
                            <div class="col-sm-7">
                                <input type="file" id="subscription" name="subscription" class="form-control">
                            </div>
                            <div class="col-sm-2">
                                <img src="{{url('public/')}}/{{$value->subscription}}" height="40px" width="50px" alt="subscription" id="subscription_img">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="subscription_url">{{__('Subscription Url')}}</label>
                            <div class="col-sm-7">
                                <input type="url" id="subscription_url" name="subscription_url" class="form-control" value="{{$value->subscription_url}}" placeholder="{{__('Subscription Url')}}">
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
                    @empty
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="my_blend">{{__('My Blend')}}</label>
                            <div class="col-sm-7">
                                <input type="file" id="my_blend" name="my_blend" class="form-control">
                            </div>
                            <div class="col-sm-2">
                                <img src="" alt="my_blend" id="my_blend_img" height="40px" width="50px">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="my_blend">{{__('My Blend Url')}}</label>
                            <div class="col-sm-7">
                                <input type="url" id="my_blend_url" name="my_blend_url" class="form-control" placeholder="{{__('My Blend Url')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-7">
                                <hr>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="subscription">{{__('Subscription')}}</label>
                            <div class="col-sm-7">
                                <input type="file" id="subscription" name="subscription" class="form-control">
                            </div>
                            <div class="col-sm-2">
                                <img src="" alt="subscription" id="subscription_img"  height="40px" width="50px">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="subscription_url">{{__('Subscription Url')}}</label>
                            <div class="col-sm-7">
                                <input type="url" id="subscription_url" name="subscription_url" class="form-control" placeholder="{{__('Subscription Url')}}">
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
                    @endforelse

            </form>
            <!--===================================================-->
            <!--End Horizontal Form-->

        </div>
    </div>

@endsection
@section('script')
    <script>
        function myBlend(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#my_blend_img').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#my_blend").change(function(){
            myBlend(this);
        });
        function subsceip(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#subscription_img').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#subscription").change(function(){
            subsceip(this);
        });
    </script>
@endsection

