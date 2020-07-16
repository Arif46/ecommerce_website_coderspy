@extends('website.layouts.master')
@section('title','Privacy Policy')
@section('content')


        <div class="Subscription_area text-center">
            <span><a href="myblend.html">Privacy Policy  </a></span>
        </div>




        <div class="section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row">
                            {!!   $data['pilicy']->details !!}
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
