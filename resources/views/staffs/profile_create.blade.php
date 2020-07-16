@extends('layouts.app')




@section('content')

<div class="col-lg-12">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Staff Information')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('staff_profile.store') }}" method="POST" enctype="multipart/form-data">
        	@csrf
            <div class="panel-body">
              {{--   <div class="col-md-6"> --}}
                <h4 style="text-align: center;"><u>Personal Information</u></h4>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Full Name')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Full Name')}}" id="name" name="full_name" class="form-control" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Father Name')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Father Name')}}" id="father_name" name="father_name" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Mother Name')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Mother Name')}}" id="mother_name" name="mother_name" class="form-control" required>
                    </div>
                </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Nationality')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Nationality')}}" id="nationality" name="nationality" class="form-control" required>
                    </div>
                </div>

                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="birthdate">{{__('Birthdate')}}</label>
                    <div class="col-sm-8">
                        <input type="date" name="birth_date" placeholder="Birth Date" id="birth_date" value="" class="form-control datepicker mb-3">
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="phone">{{__('Phone')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Phone')}}" id="phone" name="phone" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="home_number">{{__('Home Number')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Home Number')}}" id="home_number" name="home_number" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="email">{{__('Email')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Email')}}" id="email" name="email" class="form-control" required>
                    </div>
                </div>
                   <div class="form-group">
                    <label class="col-sm-2 control-label" for="mailing_address">{{__('Mailing Address')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Mailing Address')}}" id="mailing_address" name="mailing_address" class="form-control" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('ID Number')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('ID Number')}}" id="id_number" name="id_number" class="form-control" required>
                    </div>
                </div>
                
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Type of ID')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Type of ID')}}" id="id_type" name="id_type" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('ID Expire Date')}}</label>
                    <div class="col-sm-8">
                        <input type="date" placeholder="{{__('ID Expire Date')}}" id="id_expire_date" name="id_expire_date" class="form-control" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Driving License Number')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('ID Expire Date')}}" id="driving_license_number" name="driving_license_number" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Driving License Issuing Datete')}}</label>
                    <div class="col-sm-8">
                        <input type="date" placeholder="{{__('Driving License Issuing state')}}" id="driving_license_issue_date" name="driving_license_issue_date" class="form-control" required>
                    </div>
                </div>
             
              
                        <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Present Address')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Present Address')}}" id="present_address" name="present_address" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Country')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Country')}}" id="country" name="country" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('City')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('City')}}" id="city" name="city" class="form-control" required>
                    </div>
                </div>

              <div class="form-group">
                 <label class="col-sm-2 control-label" for="image">{{__('Picture')}}</label>
                <div class="col-sm-8">
                  <input type="file" placeholder="{{__('Picture')}}" id="image" name="image" class="form-control">
                </div>
            </div>         
         {{--  </div>

                  <div class="col-md-6"> --}}
               
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Blood Group')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Blood')}}" id="blood_group" name="blood_group" class="form-control" required>
                    </div>
                </div>
                         <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Religion')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Religion')}}" id="religion" name="religion" class="form-control" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Gender')}}</label>
                    <div class="col-sm-8">
                        <select name="gender" required class="form-control demo-select2-placeholder">
                                 <option>Select</option>
                                <option value="0">{{__('Male')}}</option>
                                <option value="1">{{__('Female')}}</option>
                                <option value="2">{{__('Unisex')}}</option>
                           
                        </select>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Marital Status')}}</label>
                    <div class="col-sm-8">
                        <select name="marital_status" required class="form-control demo-select2-placeholder">
                                 <option>Select</option>
                                <option value="0">{{__('Married')}}</option>
                                <option value="1">{{__('Unmarried')}}</option>
                                <option value="2">{{__('Divorced')}}</option>
                           
                        </select>
                    </div>
                </div>
                   <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Permanent Address')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Permanent Address')}}" id="permanent_address" name="permanent_address" class="form-control" required>
                    </div>
                </div>

                 <h4 style="text-align: center;"><u>Educational Information</u></h4>

                   <div class="form-group">
                        <label class="col-sm-2 control-label" for="name"></label>
                        <div class="col-sm-10">
                            <div class="form-group start_div">
                                <input name="active_status" type="hidden" value="1">
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>{{__('Degree')}}</label>
                                    <br>
                                    <input type="text" placeholder="Degree" id="degree" name="degree[]" class="form-control {{ $errors->has('degree') ? ' is-invalid' : '' }}" required>
                                    @if ($errors->has('degree'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color: red">{{ $errors->first('degree') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-sm-3">
                                    <label>{{__('Major')}}</label>
                                    <br>
                                    <input type="text" placeholder="Major" id="major" name="major[]" class="form-control {{ $errors->has('major') ? ' is-invalid' : '' }}" required>
                                    @if ($errors->has('major'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color: red">{{ $errors->first('major') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                <div class="col-sm-3">
                                    <label>{{__('Graduation Date')}}</label>
                                    <br>
                                    <input type="date" placeholder="Graduation Date" id="graduation_date" name="graduation_date[]" class="form-control {{ $errors->has('graduation_date') ? ' is-invalid' : '' }}" required>
                                    @if ($errors->has('graduation_date'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color: red">{{ $errors->first('graduation_date') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                
                                <div class="col-sm-3">
                                    <label>{{__('Action')}}</label>
                                    <br>
                                    <button type="button" style="color:#fff!important;" class="btn btn-sm btn-success " id="add_btn"> <i class="fa fa-plus"></i></button>
                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color: red">{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        
                            </div>
                            
                        </div>
                        </div>
                    </div>

                


                 

                 {{-- <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Degree')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Degree')}}" id="Gender" name="gender" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Major')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Major')}}" id="Gender" name="gender" class="form-control" required>
                    </div>
                </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Graduation Date')}}</label>
                    <div class="col-sm-8">
                        <input type="date" placeholder="{{__('Graduation Date')}}" id="Gender" name="gender" class="form-control" required>
                    </div>
                </div> --}}

                <h4 style="text-align: center;"><u>Reference</u></h4>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Name')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Name')}}" id="refer_name" name="refer_name" class="form-control" required>
                    </div>
                </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Relationship')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Relationship')}}" id="relationship" name="relationship" class="form-control" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Address')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Address')}}" id="refer_address" name="refer_address" class="form-control" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Mobile')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Mobile')}}" id="refer_mobile" name="refer_mobile" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Email')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Email')}}" id="refer_email" name="refer_email" class="form-control" required>
                    </div>
                </div>



                   <h4 style="text-align: center;"><u>Emergency Contact</u></h4>
                     <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Name')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Name')}}" id="emer_cont_name" name="emer_cont_name" class="form-control" required>
                    </div>
                </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Relationship')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Relationship')}}" id="emer_cont_relationship" name="emer_cont_relationship" class="form-control" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Address')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Address')}}" id="emer_cont_address" name="emer_cont_address" class="form-control" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Phone')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Phone')}}" id="emer_cont_phone" name="emer_cont_phone" class="form-control" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Home Number')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Home Number')}}" id="emer_cont_house_no" name="emer_cont_house_no" class="form-control" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Email')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Email')}}" id="emer_cont_email" name="emer_cont_email" class="form-control" required>
                    </div>
                </div>
                  <h4 style="text-align: center;"><u>Employment Information</u></h4>
                    <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Employeer')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Employeer')}}" id="employeer" name="employeer" class="form-control" required>
                    </div>
                </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Employee Code')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Employee Code')}}" id="employee_code" name="employee_code" class="form-control" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Visa Status')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Visa Status')}}" id="visa_status" name="visa_status" class="form-control" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('joining Date')}}</label>
                    <div class="col-sm-8">
                        <input type="date" placeholder="{{__('joining Date')}}" id="joining_date" name="joining_date" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Department')}}</label>
                    <div class="col-sm-8">
                        <select name="department_id" required class="form-control demo-select2-placeholder">
                             <option>Select</option>
                            @foreach($department as $dept)
                                <option value="{{$dept->id}}">{{$dept->dept_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Designation')}}</label>
                    <div class="col-sm-8">
                        <select name="designation_id" required class="form-control demo-select2-placeholder">
                            <option>Select</option>
                            @foreach($designation as $des)
                                <option value="{{$des->id}}">{{$des->des_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                      <div class="form-group">
                    <label class="col-sm-2 control-label" for="mobile">{{__('Basic Salary')}}</label>
                    <div class="col-sm-8">
                        <input type="number" placeholder="{{__('Basic salary')}}" id="basic_salary" name="basic_salary" class="form-control" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Others Income')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Others Income')}}" id="other_income" name="other_income" class="form-control" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Commission Grade')}}</label>
                    <div class="col-sm-8">
                        <input type="text" placeholder="{{__('Commission Grade')}}" id="commission_grade" name="commission_grade" class="form-control" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Signature')}}</label>
                    <div class="col-sm-8">
                        <br/>
                        <div id="sig" ></div>
                        <br/>
                        <button id="clear" class="btn btn-danger btn-sm">Clear Signature</button>
                        <textarea id="signature64" name="signed" style="display: none"></textarea>
                    </div>
                </div>

 {{-- n
            </div> --}}

             </div>

            

          
            <div class="panel-footer text-right">
                <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
            </div>
        </form>
        <!--===================================================-->
        <!--End Horizontal Form-->

    </div>
</div>


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
  
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
    <style>
        .kbw-signature { width: 100%; height: 100px;}
        #sig canvas{
            width: 100% !important;
            height: auto;
        }
    </style>

<script type="text/javascript">
    var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
    $('#clear').click(function(e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature64").val('');
    });
</script>

<script>
        let htmlString = `
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Degree" name="degree[]" id="degree" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Major" name="major[]" id="major" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <input type="date" class="form-control" placeholder="Graduation Date" name="graduation_date[]" id="graduation_date" required>
                    </div>
                </div>
                
                <div class="col-sm-3">
                    <button type="button" style="color:#fff!important;" class="btn btn-sm btn-danger remove_image"> <i class="fa fa-trash-o"></i></button>
                </div>
            </div>

                        `;
         $('#add_btn').click(function() {
            $('.start_div').append(htmlString);
        });
        $(document).on ("click", ".remove_image", function () {
            $(this).parent().parent().remove();
        });
    </script>

@endsection
