@extends('layouts.app')

@section('content')

    <div class="col-lg-10 col-lg-offset-1">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Packeg Information')}}</h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('packegs.update',$packeg->id) }}" method="POST">
                @csrf
                <input name="_method" type="hidden" value="PATCH">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">{{__('Name')}}</label>
                        <div class="col-sm-9">
                             <input type="hidden" name="id" value="{{$packeg->id}}">
                             <input type="text" placeholder="{{__('Name')}}" id="name" name="name" class="form-control" required value="{{$packeg->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="product_count">{{__('Product Count')}}</label>
                        <div class="col-sm-9">
                            <input type="number" placeholder="{{__('Product Count')}}" id="product_count" name="product_count" class="form-control" required value="{{$packeg->product_count}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="regular_price">{{__('Regular Price')}}</label>
                        <div class="col-sm-9">
                            <input type="number" placeholder="{{__('Regular Price')}}" id="regular_price" name="regular_price" class="form-control" required value="{{$packeg->regular_price}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="offer_price">{{__('Offer Price')}}</label>
                        <div class="col-sm-9">
                            <input type="number" placeholder="{{__('Offer Price')}}" id="offer_price" name="offer_price" class="form-control" value="{{$packeg->offer_price}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="status">{{__('Description')}}</label>
                        <div class="col-sm-9">
                            <textarea name="description" class="editor">{{$packeg->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="active_status">{{__('Status')}}</label>
                        <div class="col-sm-9">
                            <select name="status" id="status"  class="form-control" required>
                                <option value="">---- Select Status ----</option>
                                <option value="1" {{$packeg->status == 1?'selected':''}}>Active</option>
                                <option value="0" {{$packeg->status == 0?'selected':''}}>In-active</option>
                            </select>
                        </div>
                    </div>
                    @if($defualt->count() ==1)
                    <input type="hidden" name="type" id="type" style="margin-top: 12px;" value="{{$packeg->type}}">
                    @endif
                @if($defualt->count() <1)
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="type">{{__('Default Packeg')}}</label>
                            <div class="col-sm-9">
                                <input type="checkbox" name="type" id="type" style="margin-top: 12px;" value="1" required {{$packeg->type == 1 ?'checked':''}}>
                            </div>
                        </div>
                    @endif
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
