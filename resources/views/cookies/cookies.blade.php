@extends('layouts.app')

@section('content')

    <div class="col-sm-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{ @$cookies->name}}</h3>
            </div>
            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('cookies_update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="panel-body">
                    <div class="form-group">
                        <input type="hidden" name="slug" value="{{ @$cookies->slug }}">
                        <label class="col-sm-2 control-label" for="name">{{__('details')}}</label>
                        <div class="col-sm-10">
                            <textarea class="editor" name="details" required>{{@$cookies->details}}</textarea>
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
