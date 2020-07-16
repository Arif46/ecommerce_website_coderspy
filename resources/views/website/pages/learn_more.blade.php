@extends('website.layouts.master')
@section('title',@$HeaderTop->title)
@section('content')


<div class="Subscription_area text-center">
<span><a href="myblend.html">{{@$HeaderTop->title}}</a></span>
</div>

<div class="section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    {!! @$HeaderTop->details !!}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('css')

@endpush

@push('script')

@endpush
