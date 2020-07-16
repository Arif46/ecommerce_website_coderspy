@extends('layouts.app')
@section('content')
    <div class="col-lg-8 col-lg-offset-1">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Legal type')}}</h3>
            </div>
            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('legal-file-manager.update',$manage->id) }}" method="POST"  enctype="multipart/form-data">
                @csrf
                <input name="_method" type="hidden" value="PATCH">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">{{__('Name')}}</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="{{__('Name')}}" id="name" name="name" class="form-control" required value="{{$manage->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="type_id">{{__('File Type')}}</label>
                        <div class="col-sm-9">
                            <select name="type_id" id="type_id"  class="form-control" required>
                                <option value="">---- Select file type ----</option>
                                @foreach($legalTypes as $legal)
                                    <option value="{{$legal->id}}" {{$manage->type_id==$legal->id?'selected':''}}>{{$legal->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="title">{{__('Title')}}</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="{{__('Title')}}" id="title" name="title" class="form-control" value="{{$manage->title}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">{{__('File')}}</label>
                        <div class="col-sm-9">
                            <input type="file" id="file" name="file" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="expair_date">{{__('Expire date')}}</label>
                        <div class="col-sm-9">
                            <div id="demo-dp-range">
                                <div class="input-daterange input-group" id="datepicker">
                                    <input type="text" class="form-control" name="expire_date" id="expire_date" placeholder="Expire Date" value="{{$manage->expire_date}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="active_status">{{__('Status')}}</label>
                        <div class="col-sm-9">
                            <select name="status" id="status"  class="form-control" required>
                                <option value="">---- Select Status ----</option>
                                <option value="1" {{$manage->status == 1?'selected':''}}>Active</option>
                                <option value="0" {{$manage->status == 0?'selected':''}}>In-active</option>
                            </select>
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
