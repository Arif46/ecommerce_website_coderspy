@extends('layouts.app')
@section('content')
    <div class="col-lg-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('File Name Update')}}</h3>
            </div>
            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('doc.update',$OfficeDocFile->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input name="id" type="hidden" value="{{$OfficeDocFile->id}}">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="name">{{__('File Title')}}</label>
                        <div class="col-sm-6">
                            <input type="text" placeholder="{{__('Name')}}" id="name" name="file_title" value="{{$OfficeDocFile->file_title}}" class="form-control" required>
                        </div>
                    </div>
                      <div class="form-group">
                    <label class="col-sm-2 control-label" for="img">{{__('Upload')}}</label>
                    <div class="col-sm-6">
                        <input type="file" id="file" name="file" class="form-control {{ $errors->has('file') ? ' is-invalid' : '' }}">
                        @if ($errors->has('file_title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('file') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="active_status">{{__('Status')}}</label>
                        <div class="col-sm-6">
                            <select name="status" id="status"  class="form-control" required>
                                <option value="">---- Select Status ----</option>
                                <option value="1" {{$OfficeDocFile->status == 1?'selected':''}}>Active</option>
                                <option value="0" {{$OfficeDocFile->status == 0?'selected':''}}>In-active</option>
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
