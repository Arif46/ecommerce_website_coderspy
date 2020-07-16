@extends('website.layouts.master')
@section('title','MY SUBSCRIPTION QUEUE')
@section('content')

<div class="section_padding">
    <div class="container">
        <div class="row">
            @include('website/pages/subscriptions/subscription-sidebar')
            <div class="col-lg-9">
                <h4>MY SUBSCRIPTION QUEUE</h4>
                <hr>
                <div class="container-fluid">
                    <div class="row mb-5 connectedSortable" id="padding-item-drop">
                        @forelse($panddingItem as $pending)
                            <div class="col-md-2 text-center mt-2">
                                <div style="height: 92px;border:1px solid #ddd;padding-top:5px;" class="list-group-item" item-id="{{ $pending->id }}">
                                    <a href="" class="drag_link">
                                        <img src="{{url('public/website/img/1.jpg')}}" alt="" width="60px;">
                                        <p>{{ $pending->id }}</p>
                                    </a>
                                </div>
                            </div>
                            @empty
                            @endforelse
                    </div>
                    <h4>Drug Here</h4>
                    <hr>
                    <div class="row complete-item connectedSortable" id="complete-item-drop">
                       <div class="col-md-12">
                           <span class="list-group-item ddd ggg"></span>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
    <style>
        .ggg{
            border:0px!important;
        }
        .ddd{
            border:0px;
            /*display: none;*/
        }
        .custom_grid {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 24.666667%;
            max-width: 13.666667%;
        }
        .subscription-profile{
            max-width:100px;
            height:auto;
            padding:5px;
        }
        .subscription-title{
            font-weight:bold;
            text-align: left;
        }
        .subscription-menu{
            color:black;
            padding: 5px;
        }
        .btn{
            border-radius: 0px;
        }
        .body_text{
            color: #000;
        }
        .fix_div{
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            min-width: 269px;
        }
        .drag_link{

        }

    </style>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

@endpush

@push('script')
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $( function() {
            $( "#padding-item-drop, #complete-item-drop" ).sortable({
                connectWith: ".connectedSortable",
                opacity: 0.5,
            }).disableSelection();
            $( ".connectedSortable" ).on( "sortupdate", function( event, ui ) {
                var panddingArr = [];
                var completeArr = [];


                $("#padding-item-drop").each(function( index ) {
                    panddingArr[index] = $(this).attr('item-id');
                });

                $("#complete-item-drop").each(function( index ) {
                    completeArr[index] = $(this).attr('item-id');
                });
            });
        });
    </script>
@endpush
