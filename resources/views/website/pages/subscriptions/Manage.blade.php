@extends('website.layouts.master')
@section('title','Chane Password')
@section('content')
<style>
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
        border: 0px;
        border-radius: 0px;
        width: 220px;
        text-align: center;
        margin-top: 5%;
        height: 50px;
        padding-top: 12px;
        font-weight: bolder;
    }

    .radio_text {
        font-size: 16px;
        font-weight: bolder;
    }

    .radio_text2 {
        font-weight: lighter;
    }

    .designBox {
        padding: 6px;
        background-color: #fff;
        border: 1px solid #ddd;
        margin: -1px;
    }

    .modal-content {
        border: none;
        border-radius: 0px !important;
    }

    .grid_top_text {
        font-size: 10px !important;
        padding-top: 10px !important;
    }

    .grid_base_text {
        font-weight: 700 !important;
        font-size: 16px !important;
        padding-left: 5px !important;
    }

    .grid_style {
        border: 1px solid #dc3545;
        color: #000 !important;
        transition: .3s;
        height: 100px;
        text-align: center;
    }

    .grid_style:hover {
        background-color: #dc3545 !important;
        transition: .3s;
        color: #ffffff !important;
    }

    .selectedProductPlan {
        border: 1px solid #7BB22E;
    }

    .selectedDurationPlan {
        border: 1px solid #7BB22E;
    }
    .customButton{
        background: #7BB22E;
    }
    .activeMonth{
        border: 1px solid green;
    }
</style>
<div class="section_padding">
    <div class="container">
        <div class="row">
            @include('website/pages/subscriptions/subscription-sidebar')
            <div class="col-lg-9">
                <h4>Manage Subscription</h4>
                <hr>

                <div class="container-fluid">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-left">Status</th>
                                    <td></td>
                                    <th class="text-right">Subscribed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-left">Next billing date </td>
                                    <td></td>
                                    <td class="text-right">07/05/2020</td>
                                </tr>
                                <tr>
                                    <td class="text-left">Subscriber since </td>
                                    <td></td>
                                    <td class="text-right">06/01/2020</td>
                                </tr>
                                <tr>
                                    <td class="text-left">Subscription frequency </td>
                                    <td></td>
                                    <td class="text-right">Every month</td>
                                </tr>
                                <tr>
                                    <td class="text-left">Subscription frequency</td>
                                    <td></td>
                                    <td class="text-right">1 Product / Monthly Plan</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="col-md-4"></div>
                        <div class="col-md-4 mb-3">
                            <a href class="btn btn-xs btn-danger" data-toggle="modal" data-target="#upgrade_a_months">Upgrade you plan</a>
                        </div>
                        <div class="col-md-4"></div>

                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <a href class="btn btn-xs btn-danger" data-toggle="modal" data-target="#skip_a_month">Skip Month</a>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-2"> <a href class="btn btn-xs btn-danger" data-toggle="modal" data-target="#change_frequency">Change Frequency</a>

                        </div>
                        <div class="col-md-2"></div>

                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <a style="background-color: #ddd;color:#fff;" href class="btn btn-xs btn-default" data-toggle="modal" data-target="#cancel_modal">Cancel</a>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- calcel modal modal start -->
    <div class="modal fade" id="cancel_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
            <div class="modal-content position-relative">
                <div class="modal-header">
                    <h5 class="modal-title text-center strong-600 heading-5">
                        <h3 class="text-center">{{__('Before you go..')}}</h3>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body px-3 pt-3">
                    <p class="text-center"><b style="font-size:16px;font-weight: bolder;">Mohammed Ashfaqur Rahman</b> <br>
                        We are so sorry to see you go...</p>

                    <form class="" action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <p style="padding-top: 15px;">Getting too many perfumes?</p>
                            </div>
                            <div class="col-md-6">
                                <a href class="btn btn-xs btn-danger" data-toggle="modal" data-target="#change_frequency">Change Frequency</a>
                            </div>
                            <div class="col-md-12">
                                <hr>
                            </div>
                            <div class="col-md-6">
                                <p style="padding-top: 15px;">Need a break? ?</p>
                            </div>
                            <div class="col-md-6 mb-5">
                                <a href class="btn btn-xs btn-danger" data-toggle="modal" data-target="#skip_a_month">Skip Month</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!--  calcel modal modal end -->

    <!--  skip a month modal start -->
    <div class="modal fade" id="upgrade_a_months" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
            <div class="modal-content position-relative">
                <div class="modal-header">
                    <h5 class="modal-title text-center strong-600 heading-5">
                        <h3 class="text-center">{{__('Upgrade your subscription')}}</h3>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body px-3 pt-3">

                    <p class="text-center"><b style="font-size:16px;font-weight: bolder;">Step 1</b> <br>
                        Choose how many products per month you want</p>

                    <!-- <form class="" action="" method="post" enctype="multipart/form-data">
                            @csrf -->
                    <div class="row">
                        <div class="col-xl-1"></div>
                        <div class="col-xl-10">
                            <div class="row">
                                <div style="margin-left: 15px;" class="col-xl-1"></div>
                                @foreach($productPlans as $plan)
                                <div class="col-xl-3">
                                    <div class="grid_style <?php echo $selectPackage->product_plan_id == $plan->id ? "selectedProductPlan" : '' ?>" id="product_plan_{{$plan->id}}" onclick='productPlanClass(this.id)'>
                                        <p class="grid_top_text">{{$plan->name}}</p>
                                        <div class="col-xl-12">
                                            <!-- <p class="grid_base_text">per/MONTH</p> -->
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <p class="text-center mt-3"><b style="font-size:16px;font-weight: bolder;">Step 2</b> <br>
                                Choose how many products per month you want</p>
                            <div class="row">
                                @foreach($durationPlans as $plan)
                                <div class="col-xl-3">
                                    <div class="grid_style <?php echo $selectPackage->duration_plan_id == $plan->id ? "selectedDurationPlan" : '' ?>"  id="duration_plan_{{$plan->id}}" onclick='durationPlanClass(this.id)'>
                                        <p class="grid_top_text">{{$plan->name}}</p>
                                        <div class="col-xl-12">
                                            <p class="grid_base_text">Total : {{$plan->price}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-xl-1"></div>
                    </div>
                    <div class="text-right mt-2 text-right">
                        <button class="btn btn-sm btn-success customButton" onclick="saveSubscription(event)">Upgrade Plan</button>
                        <button type="button" style="background-color: #fff;" class="btn btn-xs">&nbsp</button>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
    <!--  skip a month end -->

    <!--  change frequency modal start -->
    <div class="modal fade" id="change_frequency" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
            <div class="modal-content position-relative">
                <div class="modal-header">
                    <h5 class="modal-title strong-600 heading-5">{{__('Need to change how often you get your scents?')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body px-3 pt-3">

                    <p>Adjust your subscription frequency to once every 1 or 3 months</p>

                    <form class="" action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div id="frequency">
                            <div class="row designBox">
                                <div class="col-md-1">
                                    <div style="float:left;" class="custom-control custom-radio">
                                        <input type="radio" name="gender" class="custom-control-input" value="1" id="frequency_month_1" name="groupOfDefaultRadios" <?php echo $selectPackage->frequency_month == 1 ? 'checked': ''; ?>>
                                        <label class="custom-control-label">&nbsp;</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <label class="radio_text" for="frequency_month_1">Ship my perfume once every month</label><br>
                                    <span class="radio_text2">Next shipment , {{date('F')}} {{date('Y')}}</span><br>
                                    <span class="radio_text2">Next bill , {{date('F')}} {{date('Y')}}</span>
                                </div>
                            </div>
                            <div class="row designBox mt-2">
                                <div class="col-md-1">
                                    <div style="float:left;" class="custom-control custom-radio">
                                        <input type="radio" name="gender" class="custom-control-input" value="3" id="frequency_month_3" name="groupOfDefaultRadios" <?php echo $selectPackage->frequency_month == 3 ? 'checked': ''; ?>>
                                        <label class="custom-control-label" for="">&nbsp;</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <label class="radio_text" for="frequency_month_3">Ship my perfume once every 3 month</label><br>
                                    <span class="radio_text2">Next shipment ,
                                    <?php
                                        $monthNum = date('m')+3;
                                        echo $month = date('F', mktime(0, 0, 0, $monthNum, 10));
                                        $year= date('Y', mktime(0, 0, 0, $monthNum, 10));
                                    ?> <?php echo $year;?></span><br>
                                    <span class="radio_text2">Next bill , <?php echo $month;?> <?php echo $year;?></span>
                                </div>
                            </div>
                        </div>
                        <div class="text-left mt-2">
                            <button onclick="updateFrequency(event)" class="btn btn-xs btn-danger">Confirm <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.99474 5.89233C6.97001 5.65635 6.86672 5.43321 6.69904 5.25354L2.21682 0.430247C1.9326 0.103171 1.47777 -0.0551087 1.03015 0.0172881C0.582528 0.0896848 0.213218 0.381259 0.0666046 0.778016C-0.0800085 1.17477 0.0193644 1.61369 0.325871 1.92317L4.11554 6L0.325871 10.0768C0.0193645 10.3863 -0.0800084 10.8252 0.0666047 11.222C0.213218 11.6187 0.582528 11.9103 1.03015 11.9827C1.47777 12.0551 1.9326 11.8968 2.21682 11.5698L6.69904 6.74646C6.919 6.51046 7.02571 6.20223 6.99474 5.89233Z" fill="currentColor"></path>
                                </svg></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--  change frequency modal end -->
    <!--  skip a month modal start -->
    <div class="modal fade" id="skip_a_month" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
            <div class="modal-content position-relative">
                <div class="modal-header">
                    <h5 class="modal-title text-center strong-600 heading-5">
                        <h3 class="text-center">{{__('Skip a month')}}</h3>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body px-3 pt-3">

                    <p>Your next fragrance is scheduled to ship on Jun 15 - Jun 19.
                        How long do you want to pause?</p>

                    <form class="" action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-1"></div>
                            <div class="col-xl-10">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="grid_style <?php echo $selectPackage->total_skip_month == 1 ? "activeMonth" : '' ?>" id="skip_month_1" onclick='skipMonthClass(this.id)'>
                                            <p class="grid_top_text">1</p>
                                            <div class="col-xl-12">
                                                <p class="grid_base_text">MONTH</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="grid_style <?php echo $selectPackage->total_skip_month == 2 ? "activeMonth" : '' ?>" id="skip_month_2" onclick='skipMonthClass(this.id)'>
                                            <p class="grid_top_text">2</p>
                                            <div class="col-xl-12">
                                                <p class="grid_base_text">MONTHS</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="grid_style <?php echo $selectPackage->total_skip_month == 3 ? "activeMonth" : '' ?>" id="skip_month_3" onclick='skipMonthClass(this.id)'>
                                            <p class="grid_top_text">3</p>
                                            <div class="col-xl-12">
                                                <p class="grid_base_text">MONTHS</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1"></div>
                        </div>
                        <div class="text-center mt-2">
                            <button type="button" class="btn btn-xs btn-primary customButton" onclick="updateSkipMonth(event)">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--  skip a month end -->
    @endsection
    @push('css')
    @endpush
    @push('script')
    <script>
        function saveSubscription(e) {
            e.preventDefault();
            let productPlanId = $(".selectedProductPlan").attr("id").split('_')[2];
            let durationPlanId = $(".selectedDurationPlan").attr("id").split('_')[2];
            
            // save
            $.ajax({
                url: "{{url('save_subscription_plan')}}",
                type: "POST",
                data: {
                    _token: '{{ @csrf_token() }}',
                    productPlanId: productPlanId,
                    durationPlanId: durationPlanId
                },
                success: function(data) {
                    alert(data);
                },
                error: function(data) {
                    console.log(data);
                }
            });


        }


        function productPlanClass(id) {
            let selectedProductId =  $(".selectedProductPlan").attr("id");
            $('#' + selectedProductId).removeClass('selectedProductPlan');
            $('#' + id).addClass('selectedProductPlan');
        }
        
        function durationPlanClass(id) {
            let selectedDurationId =  $(".selectedDurationPlan").attr("id");
            $('#' + selectedDurationId).removeClass('selectedDurationPlan');
            $('#' + id).addClass('selectedDurationPlan');
        }

        function skipMonthClass(id) {
            let selectedSkipMonthId =  $(".activeMonth").attr("id");
            $('#' + selectedSkipMonthId).removeClass('activeMonth');
            $('#' + id).addClass('activeMonth');
        }

        function updateSkipMonth(e) {
            e.preventDefault();
            let skipMonthId = $(".activeMonth").attr("id").split('_')[2];
            
            // save
            $.ajax({
                url: "{{url('update_skip_month')}}",
                type: "POST",
                data: {
                    _token: '{{ @csrf_token() }}',
                    skipMonthId: skipMonthId,
                    id: "{{$selectPackage->id}}",
                    month: "{{$selectPackage->month}}",
                },
                success: function(data) {
                    alert(data);
                },
                error: function(data) {
                    console.log(data);
                }
            });


        }

        function updateFrequency(e){
            e.preventDefault();
            var selected = $("#frequency input[type='radio']:checked").val();
            $.ajax({
                url: "{{url('update_frequency_month')}}",
                type: "POST",
                data: {
                    _token: '{{ @csrf_token() }}',
                    month: selected,
                    id: "{{$selectPackage->id}}",
                },
                success: function(data) {
                    alert(data);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        }

    </script>

    @endpush