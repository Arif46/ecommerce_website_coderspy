@extends('layouts.app')

@section('content')

<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no">{{__('Press Contact List')}}</h3>
        <div class="pull-right clearfix">
            <form class="" id="sort_support" action="" method="GET">
                <div class="box-inline pad-rgt pull-left">
                    <div class="" style="min-width: 300px;">
                        <input type="text" class="form-control" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder="Type ID & Enter">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped res-table mar-no" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>{{ __('ID') }}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Email') }}</th>
                    <th>{{ __('Status') }}</th>
                    <th>{{ __('Options') }}</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($press_contacts as $key => $press_contact)
                        <tr>
                            <td>#{{ $press_contact->id }}</td>
                            <td>{{ $press_contact->name }}</td>
                            <td>{{ $press_contact->email }}</td>
                            <td>{{ $press_contact->message }}</td>
                            <td>
                                @if ($press_contact->active_status == '0')
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
