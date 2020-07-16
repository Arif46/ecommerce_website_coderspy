@extends('layouts.app')

@section('content')

<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no">{{__('Distributor List')}}</h3>
        <div class="pull-right clearfix">
            <form class="" id="sort_support" action="" method="GET">
                <div class="box-inline pad-rgt pull-left">
                    <div class="" style="min-width: 300px;">
                        <input type="text" class="form-control" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder="Type Distributor ID & Enter">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped res-table mar-no" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>{{ __('Distributor ID') }}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Email') }}</th>
                    <th>{{ __('Position') }}</th>
                    <th>{{ __('Phone') }}</th>
                    <th>{{ __('Company Name') }}</th>
                    <th>{{ __('Country') }}</th>
                    <th>{{ __('No Of Employee') }}</th>
                    <th>{{ __('Establishment Year') }}</th>
                    <th>{{ __('Status') }}</th>
                    <th>{{ __('Options') }}</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($distributors as $key => $distributor)
                        <tr>
                            <td>#{{ $distributor->id }}</td>
                            <td>{{ $distributor->contact_person }}</td>
                            <td>{{ $distributor->email }}</td>
                            <td>{{ $distributor->position }}</td>
                            <td>{{ $distributor->phone }}</td>
                            <td>{{ $distributor->company_name }}</td>
                            <td>{{ $distributor->country }}</td>
                            <td>{{ $distributor->no_of_employee }}</td>
                            <td>{{ $distributor->establishment_year }}</td>
                            <td>
                                @if ($distributor->active_status == '0')
                                    <span class="badge badge-pill badge-danger">Deavtive</span>
                                @else
                                    <span class="badge badge-pill badge-success">Active</span>
                                @endif
                            </td>
                            <td>
                                <a href="" class="btn-link">{{__('View Details')}}</a>
                            </td>
                        </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <div class="clearfix">
            <div class="pull-right">
                {{ $tickets->appends(request()->input())->links() }}
            </div>
        </div> --}}
    </div>
</div>

@endsection
