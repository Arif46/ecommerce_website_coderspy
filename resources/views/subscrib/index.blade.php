@extends('layouts.app')

@section('content')
    <!-- Basic Data Tables -->
    <!--===================================================-->
    <div class="panel">
        <div class="panel-heading bord-btm clearfix pad-all h-100">
            <h3 class="panel-title pull-left pad-no">{{__('All Subscribers')}}</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped res-table mar-no" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{__('Email')}}</th>
                    <th>{{__('Options')}}</th>
                </tr>
                </thead>
                <tbody>
                @php($i=0)
                @forelse($subscribers as $subscrib)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$subscrib->email}}</td>
                        <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary" type="button">
                                    {{__('Send Mail')}} <i class="dropdown-caret"></i>
                                </button>

                            </div>
                        </td>
                    </tr>
                @empty

                @endforelse
                </tbody>
            </table>

            <div class="clearfix">
                <div class="pull-right">
                    {{ $subscribers->appends(request()->input())->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection
