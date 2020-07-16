@extends('website.layouts.master')
@section('title','MY SUBSCRIPTION QUEUE')
@section('content')
<style>
    .drag-area {
        width: 200px;
        height: 80px;
        background: #fff;
        display: inline-block;
        vertical-align: top;
        position: relative;
        margin-left: 30px;
        border: 1px solid #ddd;
        box-shadow: 3px 3px 6px 3px rgba(0, 0, 0, 0.06)
    }

    .area {
        /* position: absolute; */
        margin: 0 auto;
        color: #ccc;
        font-size: 20px;
        height: 78px;
        float: left;
        border: 1px solid #ddd;
    }

    .box {
        width: 50px;
        height: 50px;
        background: #673AB7;
        color: #fff;
        text-align: center;
        z-index: 2;
        border: 2px solid #fff;
        float: left;

    }

    .result {
        display: inline-block;
        margin-left: 30px;
    }
</style>
<div class="section_padding">
    <div class="container">
        <div class="row">
            @include('website/pages/subscriptions/subscription-sidebar')
            <div class="col-lg-9">
                <h4>MY SUBSCRIPTION QUEUE</h4>
                <hr>
                <div class="container-fluid">
                    <div class="row mb-5 connectedSortable" id="padding-item-drop">

                        @foreach($tempQueues as $key=>$queue)
                        <div class="col-md-2 text-center mt-2 drag-area" id="draggable_{{$queue->product->id}}">
                            <div class="area"></div>
                            <div class="box">{{$queue->name}}</div>
                        </div>
                        @endforeach
                    </div>

                    <h4>Drug Here</h4>
                    <hr>

                    <div class="pro-show">
                        <div class="row complete-item connectedSortable" id="complete-item-drop">
                            @foreach($queues as $key=>$queue)
                            <div class="drag-area col-md-3 mt-2">
                                <div class="row">
                                    @if($plan->product_plan_id == 1)
                                    <div class="col-md-12 area">{{$plan->product_plan_id}}</div>
                                    @endif
                                    @if($plan->product_plan_id == 2)
                                    @for($i=1; $i<=2; $i++)
                                        <div class="col-md-6 area">{{$plan->product_plan_id}}</div>
                                    @endfor
                                    @endif
                                    @if($plan->product_plan_id == 3)
                                    @for($i=1; $i<=3; $i++)
                                        <div class="col-md-4 area">{{$plan->product_plan_id}}</div>
                                    @endfor
                                    @endif
                                </div>
                                <!-- <div class="area" style="border: 1px solid red;">
                                    {{$plan->product_plan_id}}
                                </div>  
                                <div class="area" style="border: 1px solid green;">
                                    {{$plan->product_plan_id}}
                                </div>   -->
                            </div>
                    @endforeach
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
    .ggg {
        border: 0px !important;
    }

    .ddd {
        border: 0px;
        /*display: none;*/
    }

    .custom_grid {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 24.666667%;
        max-width: 13.666667%;
    }

    .subscription-profile {
        max-width: 100px;
        height: auto;
        padding: 5px;
    }

    .subscription-title {
        font-weight: bold;
        text-align: left;
    }

    .subscription-menu {
        color: black;
        padding: 5px;
    }

    .btn {
        border-radius: 0px;
    }

    .body_text {
        color: #000;
    }

    .fix_div {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        min-width: 269px;
    }

    .drag_link {}

    .list-group-item.list-group-item {
        padding: 0 !important;
    }
</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

@endpush

@push('script')
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $(".box").draggable({
        scope: 'demoBox',
        revertDuration: 100,
        start: function(event, ui) {
            //Reset
            $(".box").draggable("option", "revert", true);
            $('.result').html('-');
        }
    });

    $(".drag-area").droppable({
        scope: 'demoBox',
        drop: function(event, ui) {
            var area = $(this).find(".area").html();
            var box = $(ui.draggable).html()
            $(".box").draggable("option", "revert", false);
            //Realign item
            $(ui.draggable).detach().css({
                top: 0,
                left: 0
            }).appendTo(this);
        }
    })
</script>
@endpush