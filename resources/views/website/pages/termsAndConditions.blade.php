@extends('website.layouts.master')
@section('title','Terms & Conditions')
@section('content')


    <!-- Page Tittle Start -->
    <div class="page_tittle_area text-center">
       <div class="container">
         <div class="page-tittle mb-50 pt-20 pb-20">
            <div class="row">
                <div class="col-lg-12">
                    <h2>erms And Conditions</h2>
                </div>
            </div>
         </div>
       </div>
    </div>
    <!-- Page Tittle End -->

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
