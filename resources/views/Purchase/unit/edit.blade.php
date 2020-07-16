@extends('layouts.app')

@section('content')

<div class="col-lg-12">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Raw Unit Update')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ Route('purchase.unit.update',$unit->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="panel-body">

                <div class="form-group start_div">
                    <input name="active_status" type="hidden" value="1">
                  
                    <div class="col-sm-12">
                        <label>{{__('unit Name')}}</label>
                        <input type="text" value="{{$unit->name}}" placeholder="{{__('unit Name')}}" id="" name="unit" class="form-control {{ $errors->has('unit') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $errors->first('unit') }}</strong>
                            </span>
                        @endif
                    </div>

                   
                   <!--  <div class="col-sm-3">
                        <label>{{__('End Amount')}}</label>
                       <input type="number" placeholder="{{__('End Amount')}}" id="end" name="end_amount" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" required>
                       @if ($errors->has('title'))
                           <span class="invalid-feedback" role="alert">
                               <strong style="color: red">{{ $errors->first('title') }}</strong>
                           </span>
                       @endif
                   </div>
                    
                   <div class="col-sm-3">
                        <label>{{__('Tax Rate')}}</label>
                       <input type="number" placeholder="{{__('Tax Rate')}}" id="amount" name="tax_rate" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" required>
                       @if ($errors->has('title'))
                           <span class="invalid-feedback" role="alert">
                               <strong style="color: red">{{ $errors->first('title') }}</strong>
                           </span>
                       @endif
                   </div>
                                   <div class="col-sm-3">
                   
                   
                               <button type="button" style="color:#fff!important;margin-top: 30px!important;" class="btn btn-sm btn-success " id="add_btn">Add more <i class="fa fa-plus"></i></button>
                   
                                   </div> -->
                </div>
               
              <div class="panel-footer text-right">
                <button class="btn btn-purple" type="submit">{{__('Update')}}</button>
            </div>
           
            </div>
           
        </form>
        <!--===================================================-->
        <!--End Horizontal Form-->

    </div>
</div>

   <script>
        let htmlString = `<div class="col-sm-12">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="start_amount[]" id="start" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="end_amount[]" id="end" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="tax_rate[]" id="amount" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <button type="button" style="color:#fff!important;" class="btn btn-sm btn-danger remove_image">Remove <i class="fa fa-trash-o"></i></button>
                            </div>
                        </div>`;
         $('#add_btn').click(function() {
            $('.start_div').append(htmlString);
        });
        $(document).on ("click", ".remove_image", function () {
            $(this).parent().parent().remove();
        });
    </script>

@endsection
