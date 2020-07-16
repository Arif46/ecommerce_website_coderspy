<style>
    .customerSidebar>li{
        color:#000!important;
        padding-bottom: 15px!important;
    }
    .customerSidebar>li>a:hover{
        color:#000!important;
        padding-bottom: 15px!important;
    }
    .suser_name{
        font-size: 19px;
        font-weight: 700;
    }

</style>
<div class="col-lg-3">
    <div class="row justify-content-center ">
        <div class="col-lg-12">
            <img src="{{url('http://cdn.scentbird.com/assets/frontbird-site/images/male_dd44d2.svg')}}" class="subscription-profile">
            <p class="subscription-title"><span class="suser_name">{{@Auth::user()->first_name .' '. @Auth::user()->last_name}}</span></p>
        </div>
    </div>
    <p>Status: <span class="text-danger">Subscribed</span></p>
    <p>Bill date: <span class="text-danger">5 Jul 2020 </span></p>
    <p>Subscribed: <span class="text-danger">1 Jun 2020 </span></p>
    <p>Subscription frequency: <span class="text-danger">Every month </span></p>
    <p>Subscription plan: <span class="text-danger">1 Product / Monthly Plan </span></p>
    <hr>
    <div class="row justify-content-center ">
        <hr>
        <div class="col-lg-12 text-left customerSidebar ">
            <li><a href="{{route('subscriptionQueue')}}" class="subscription-menu"> My Queue</a></li>
            <li><a href="{{route('subscriptionOrder')}}" class="subscription-menu"> Order history</a></li>
            <li><a href="{{route('subscriptionManage')}}" class="subscription-menu"> Manage subscription</a></li>
            <li><a href="{{route('subscriptionTracking')}}" class="subscription-menu"> Tracking</a></li>
            <li><a href="{{route('subscriptionShipping')}}" class="subscription-menu"> Billing & Shipping</a></li>
            <li><a href="{{route('subscriptionPersonalInfo')}}" class="subscription-menu"> Personal info</a></li>
            <li><a href="{{route('subscriptionPersonalPassword')}}" class="subscription-menu"> Change password</a></li>
        </div>
    </div>
</div>
