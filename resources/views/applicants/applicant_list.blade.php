@extends('layouts.app')

@section('content')

<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no">{{__('Applicants List')}}</h3>
        <div class="pull-right clearfix">
            <form class="" id="sort_support" action="" method="GET">
                <div class="box-inline pad-rgt pull-left">
                    <div class="" style="min-width: 300px;">
                        <input type="text" class="form-control" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder="Type Applicant ID & Enter">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped res-table mar-no" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>{{ __('Applicant ID') }}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Email') }}</th>
                    <th>{{ __('Position') }}</th>
                    <th>{{ __('Area of Interest') }}</th>
                    
                    <th>{{ __('Cover Letter') }}</th>
                    <th>{{ __('Resume') }}</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($applicants as $key => $applicant)
                        <tr>
                            <td>#{{ $applicant->id }}</td>
                            <td>{{ $applicant->name }}</td>
                            <td>{{ $applicant->email }}</td>
                            <td>{{ $applicant->title }}</td>
                            <td>{{ $applicant->area_of_interest }}</td>
                            <td>{{ $applicant->cover_letter }}</td>
                            <td>
                               <a href="{{asset('/')}}{{ $applicant->resume }}" target="_blank" class="btn btn-primary"  >{{__('Resume')}}</a>
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
