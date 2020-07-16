@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <a href="{{ route('legal-file-types.create')}}" class="btn btn-rounded btn-info pull-right">{{__('Create Legal Type')}}</a>
        </div>
    </div>
    <br>

    <!-- Basic Data Tables -->
    <!--===================================================-->
    <div class="panel">
        <div class="panel-heading bord-btm clearfix pad-all h-100">
            <h3 class="panel-title pull-left pad-no">{{__('Packegs')}}</h3>

        </div>
        <div class="panel-body">
            <table class="table table-striped res-table mar-no" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Created By')}}</th>
                    <th>{{__('Updated By')}}</th>
                    <th>{{__('Active Status')}}</th>
                    <th width="10%">{{__('Action')}}</th>
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($legals as $legal)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$legal->name}}</td>
                        <td>{{ getName($legal->created_by)}}</td>
                        <td>{{getName($legal->updated_by)}}</td>
                        <td>{{$legal->status ==1?'Active':'In-active'}}</td>
                        <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    {{__('Actions')}} <i class="dropdown-caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{route('legal-file-types.edit', $legal->id)}}">{{__('Edit')}}</a></li>
                                    <li><a onclick="confirm_modal('{{route('legal_file_delete', $legal->id)}}');">{{__('Delete')}}</a></li>
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
