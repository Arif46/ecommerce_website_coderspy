@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('product.plan.add')}}" class="btn btn-rounded btn-info pull-right">{{__('Add New Product')}}</a>
    </div>
</div>

<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">{{__('Add Product Plan')}}</h3>
    </div>
    <form class="form-horizontal" action="{{ route('product.plan.update', @$plan->id) }}" method="POST" enctype="multipart/form-data">
        <input name="_method" type="hidden" value="PATCH">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">{{__('Name')}}</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="{{__('Name')}}" id="name" name="name" class="form-control" value="{{ @$plan->name}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">{{__('Qty')}}</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="qty" value="{{ @$plan->qty}}" placeholder="{{__('Saving percent')}}">
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <button class="btn btn-purple" type="submit">{{__('Update')}}</button>
            </div>
        </form>
</div>

@endsection
