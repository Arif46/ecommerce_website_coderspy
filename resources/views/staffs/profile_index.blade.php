@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('staff_profile.create')}}" class="btn btn-rounded btn-info pull-right">{{__('Add  Staff Info')}}</a>
    </div>
</div>

<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">{{__('Staffs Information')}}</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th width="10%">SL.</th>
                    <th>{{__('Staff Name')}}</th>
                    <th>{{__('Email')}}</th>
                    <th>{{__('Phone')}}</th>
                    <th>{{__('Department')}}</th>
                    <th>{{__('Designation')}}</th>
                    <th width="10%">{{__('Options')}}</th>
                </tr>
            </thead>
            <tbody>
                 @php($i=1)
                @foreach($Users as  $staff)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$staff->full_name}}</td>
                        <td>{{$staff->email}}</td>
                        <td>{{$staff->phone}}</td>
                        <td>{{$staff->dept_name}}</td>
                        <td>{{$staff->des_name}}</td>
                        <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    {{__('Actions')}} <i class="dropdown-caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{url('admin/staff/profile/edit/'.$staff->id)}}">{{__('Edit')}}</a></li>
                                    <li><a onclick="confirm_modal('{{route('staff_profile.destroy', $staff->id)}}');">{{__('Delete')}}</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection
