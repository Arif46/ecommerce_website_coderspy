<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link name="favicon" type="image/x-icon" href="{{asset('public/img/favicon.png')}}" rel="shortcut icon" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('public/css/bootstrap.min.css')}}" rel="stylesheet">

    <!--Font Awesome [ OPTIONAL ]-->
    <link href="{{ asset('public/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!--active-shop Stylesheet [ REQUIRED ]-->
    <!-- <link href="{{ asset('public/css/active-shop.min.css')}}" rel="stylesheet"> -->

    <!--active-shop Premium Icon [ DEMONSTRATION ]-->
    <!-- <link href="{{ asset('public/css/demo/active-shop-demo-icons.min.css')}}" rel="stylesheet"> -->

    <!--Demo [ DEMONSTRATION ]-->
    <!-- <link href="{{ asset('public/css/demo/active-shop-demo.min.css') }}" rel="stylesheet"> -->

    <!--Theme [ DEMONSTRATION ]-->
    <!-- <link href="{{ asset('public/css/themes/type-c/theme-navy.min.css') }}" rel="stylesheet"> -->

    <!-- <link href="{{ asset('public/css/custom.css') }}" rel="stylesheet"> -->


    <link href="{{ asset('public/website/css/style.css')}}" rel="stylesheet">




</head>
<body>
    @php
        $generalsetting = \App\GeneralSetting::first();
    @endphp


    @yield('content')



    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src=" {{asset('public/js/jquery.min.js') }}"></script>





    <!-- Admin page Video-->
    <script src="{{url('public/website/js/vendor/jquery-1.12.4.min.js ')}} "></script>
    <script src="{{ url('public/website/js/jquery.vide.js') }}"></script>



    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>


    <!--active-shop [ RECOMMENDED ]-->
    <!-- <script src="{{ asset('public/js/active-shop.min.js') }}"></script> -->

    <!--Alerts [ SAMPLE ]-->
    <script src="{{asset('public/js/demo/ui-alerts.js') }}"></script>

    @yield('script')

</body>
</html>
