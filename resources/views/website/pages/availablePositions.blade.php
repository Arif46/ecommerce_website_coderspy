@extends('website.layouts.master')
@section('title','Blogs')
@php
    $setting= App\GeneralSetting::first();
@endphp
@section('content')
 <style>
     .jobs_requiremnts{
        padding-left: 5px;
     }
     .jobs_requiremnts li{
        padding-left: 25px;
     }
 </style>

    <!-- Page Tittle Start -->
    <div class="page_tittle_area text-center">
       <div class="container">
         <div class="page-tittle mb-50 pt-20 pb-20">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Available Positions</h2>
                </div>
            </div>
         </div>
       </div>
    </div>
    <!-- Page Tittle End -->

    <div class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <img src="{{asset('/')}}{{@$careers->img}}" alt="" class="img img-responsive working_with">
                <h5 class="mt-20">{{@$careers->title}}</h5>
                </div>
                <div class="col-lg-9">
                    <p>{{ @$careers->details}}</p>
                </div>

            </div>
            <div class="row mt-40">
                <div id="accordion">
                    @foreach($career_positions as $career_position)
                        <div class="card">
                            <div class="card-header" id="H{{@$career_position->id}}">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#C{{@$career_position->id}}" aria-expanded="true" aria-controls="C{{@$career_position->id}}">{{@$career_position->title}}
                                </button>
                            </h5>
                            </div>

                            <div id="C{{@$career_position->id}}" class="collapse show" aria-labelledby="H{{@$career_position->id}}" data-parent="#accordion">
                                <div class="card-body">
                                    {!! $career_position->details !!}
                                    <div class="row justify-content-center mt-40">
                                        <div class="col-lg-12 text-center">
                                            <a href="{{url('careers/apply-now/'.@$career_position->id)}}" class="boxed_btn">Apply Now <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>

            </div>
        </div>
    </div>


@endsection

@push('css')

@endpush

@push('script')

@endpush
