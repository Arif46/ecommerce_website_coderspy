@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <a href="{{ route('designation.create')}}" class="btn btn-rounded btn-info pull-right">{{__('Create Designation')}}</a>
        </div>
    </div>
    <br>

    <!-- Basic Data Tables -->
    <!--===================================================-->
    <div class="panel">
        <div class="panel-heading bord-btm clearfix pad-all h-100">
            <h3 class="panel-title pull-left pad-no">{{__('Designation')}}</h3>

        </div>
        <div class="panel-body">
            <table class="table table-striped res-table mar-no" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>SL.</th>
                    <th>{{__('Designation Name')}}</th>
                    <th>{{__('Active Status')}}</th>
                    <th width="10%">{{__('Action')}}</th>
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($Designation as $file)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$file->des_name}}</td>
                        <td>{{$file->active_status ==1?'Active':'In-active'}}</td>
                        <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    {{__('Actions')}} <i class="dropdown-caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{route('designation.edit', $file->id)}}">{{__('Edit')}}</a></li>
                                    <li><a onclick="confirm_modal('{{route('designation.destroy', $file->id)}}');">{{__('Delete')}}</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="clearfix">
                <div class="pull-right">
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script type="text/javascript">

    </script>
@endsection
