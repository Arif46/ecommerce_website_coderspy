@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <a href="{{ route('packegs.create')}}" class="btn btn-rounded btn-info pull-right">{{__('Create Packeg')}}</a>
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
                    <th>{{__('Description')}}</th>
                    <th>{{__('Count Product')}}</th>
                    <th>{{__('Regular Price')}}</th>
                    <th>{{__('Offer Price')}}</th>
                    <th width="10%">{{__('Status')}}</th>
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                    @foreach($packegs as $packeg)
                            <tr
                            @if($packeg->type ==1)
                                style="background-color: greenyellow"
                            @endif
                            >
                                <td>{{$i++}}</td>
                                <td width="30%">{{$packeg->name}}
                                    @if($packeg->type ==1)<span style="color: white">Defualt Packeg</span>@endif</td>
                                <td>{{ \Illuminate\Support\Str::limit(strip_tags($packeg->description),20,'...') }}</td>
                                <td>{{$packeg->product_count}}</td>
                                <td>{{$packeg->regular_price}}</td>
                                <td>{{$packeg->offer_price}}</td>
                                <td>{{$packeg->status}}</td>
                                <td>
                                    <div class="btn-group dropdown">
                                        <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                            {{__('Actions')}} <i class="dropdown-caret"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="{{route('packegs.edit', $packeg->id)}}">{{__('Edit')}}</a></li>
                                            <li><a onclick="confirm_modal('{{route('packeg_delete', $packeg->id)}}');">{{__('Delete')}}</a></li>
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
