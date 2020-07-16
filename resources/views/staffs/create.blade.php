@extends('layouts.app')

@section('content')

<div class="col-lg-12">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Staff Information')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('staffs.store') }}" method="POST" enctype="multipart/form-data">
        	@csrf
            <div class="panel-body">
                <div class="col-md-6">
                     <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">{{__('Role')}}</label>
                    <div class="col-sm-9">
                        <select name="role_id" required class="form-control demo-select2-placeholder">
                             <option>Select</option>
                            @foreach($roles as $dept)
                                <option value="{{$dept->id}}">{{$dept->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">{{__('Full Name')}}</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="{{__('First Name')}}" id="name" name="full_name" class="form-control" required>
                    </div>
                </div>
                  
                 
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="email">{{__('Email')}}</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="{{__('Email')}}" id="email" name="email" class="form-control" required>
                    </div>
                </div>                    
             </div>

              <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="mobile">{{__('Phone')}}</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="{{__('Phone')}}" id="mobile" name="mobile" class="form-control" required>
                    </div>
                </div>
                   
                 <div class="form-group">
                    <label class="col-sm-3 control-label" for="password">{{__('Password')}}</label>
                    <div class="col-sm-9">
                        <input type="password" placeholder="{{__('Password')}}" id="password" name="password" class="form-control" required>
                    </div>
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
