@extends('layouts.app')

@section('content')

<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no">{{__('Feedback List')}}</h3>
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
                    <th>{{ __('Gender') }}</th>
                    <th>{{ __('Nationality') }}</th>
                    <th>{{ __('Phone') }}</th>
                    <th>{{ __('Email') }}</th>
                    <th>{{ __('Age') }}</th>
                    <th>{{ __('About Source') }}</th>
                    <th>{{ __('Product Using Time') }}</th>
                    <th>{{ __('Interested Product') }}</th>
                    <th>{{ __('Other Source') }}</th>
                    <th>{{ __('About New Release') }}</th>
                    <th>{{ __('Suggest Product') }}</th>
                    <th>{{ __('Experience') }}</th>
                    <th>{{ __('Impressed Product') }}</th>
                    <th>{{ __('Message') }}</th>
                    <th>{{ __('Captcha') }}</th>
                    <th>{{ __('Feedback') }}</th>
                    <th>{{ __('Status') }}</th>
                    <th>{{ __('Options') }}</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($feedbacks as $key => $feedback)
                        <tr>
                            <td>#{{ $feedback->id }}</td>
                            <td>{{ $feedback->name }}</td>
                            <td>@if ($feedback->gender == 0) Male @else Female @endif</td>
                            <td>{{ $feedback->nationality }}</td>
                            <td>{{ $feedback->phone }}</td>
                            <td>{{ $feedback->email }}</td>
                            <td>@if ($feedback->age == 1) Below 20 @elseif($feedback->age == 2) 21 to 25 @elseif($feedback->age == 3 )25 to 30 @elseif($feedback->age == 4) 30 to 35 @else Above 35 @endif</td>
                            <td>@if ($feedback->about_source == 1) While shopping @elseif($feedback->about_source == 2) Word of mouth @elseif($feedback->about_source == 3 ) Billboards @elseif($feedback->about_source == 4) Internet  @elseif($feedback->about_source == 5) Newspaper @else TV Ads @endif</td>
                            <td>@if ($feedback->product_using_time == 1) Less than a month @elseif($feedback->product_using_time == 2) 1-12 months @elseif($feedback->product_using_time == 3 ) 1 – 3 years @elseif($feedback->product_using_time == 4) Over 3 years @else Never Used @endif</td>
                            <td>@if ($feedback->interested_product == 1) Exclusive @elseif($feedback->interested_product == 2) Dehnal Oud @elseif($feedback->interested_product == 3 ) Perfume Oil @elseif($feedback->interested_product == 4) Spray @else Others @endif</td>
                            <td>{{ $feedback->other_source }}</td>
                            <td>{{ $feedback->about_new_release }}</td>
                            <td>{{ $feedback->suggest_product }}</td>
                            <td>@if ($feedback->overall_experience == 1) Very Satisfied @elseif($feedback->overall_experience == 2) Satisfied @elseif($feedback->overall_experience == 3 ) Neutral @elseif($feedback->overall_experience == 4) Unsatisfied @else Very Unsatisfied @endif</td>
                            <td>@if ($feedback->impressed_product == 1) Very Satisfied @elseif($feedback->impressed_product == 2) Satisfied @elseif($feedback->impressed_product == 3 ) Neutral @elseif($feedback->impressed_product == 4) Unsatisfied @else Very Unsatisfied @endif</td>
                            <td>{{ $feedback->message }}</td>
                            <td>{{ $feedback->captcha }}</td>
                            <td>
                                @if ($feedback->active_status == '0')
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
