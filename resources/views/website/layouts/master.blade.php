<!doctype html>
@if(\App\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
<html dir="rtl" lang="en">
@else
<html lang="en">
@endif
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta name="_token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MyFragranceMe | @yield('title')</title>

    @php
        $seosetting = \App\SeoSetting::first();
    @endphp

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="@yield('meta_description', $seosetting->description)" />
    <meta name="keywords" content="@yield('meta_keywords', $seosetting->keyword)">
    <meta name="author" content="{{ $seosetting->author }}">
    <meta name="sitemap_link" content="{{ $seosetting->sitemap_link }}">

    @yield('meta')

    @if(!isset($detailedProduct))
    <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="{{ config('app.name', 'Laravel') }}">
        <meta itemprop="description" content="{{ $seosetting->description }}">
        <meta itemprop="image" content="{{ asset(App\GeneralSetting::first()->logo) }}">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="product">
        <meta name="twitter:site" content="@publisher_handle">
        <meta name="twitter:title" content="{{ config('app.name', 'Laravel') }}">
        <meta name="twitter:description" content="{{ $seosetting->description }}">
        <meta name="twitter:creator" content="@author_handle">
        <meta name="twitter:image" content="{{ asset(App\GeneralSetting::first()->logo) }}">

        <!-- Open Graph data -->
        <meta property="og:title" content="{{ config('app.name', 'Laravel') }}" />
        <meta property="og:type" content="Ecommerce Site" />
        <meta property="og:url" content="{{ route('home') }}" />
        <meta property="og:image" content="{{ asset(App\GeneralSetting::first()->logo) }}" />
        <meta property="og:description" content="{{ $seosetting->description }}" />
        <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
    @endif
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link type="text/css" href="{{ url('public/frontend/css/active-shop.css') }}" rel="stylesheet" media="screen">
    <link type="text/css" href="{{ url('public/frontend/css/main.css') }}" rel="stylesheet">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{url('public/website/css/bootstrap.min.css ')}}">
    <link rel="stylesheet" href="{{url('public/website/css/slick.css')}}">
    <link rel="stylesheet" href="{{url('public/website/css/owl.carousel.min.css ')}}">
    <link rel="stylesheet" href="{{url('public/website/css/magnific-popup.css ')}}">
    <link rel="stylesheet" href="{{url('public/website/css/font-awesome.min.css ')}}">
    <link rel="stylesheet" href="{{url('public/website/css/themify-icons.css ')}}">
    <link rel="stylesheet" href="{{url('public/website/css/flaticon.css ')}}">
    <link rel="stylesheet" href="{{url('public/website/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{url('public/website/css/animate.min.css ')}}">
    <link rel="stylesheet" href="{{url('public/website/css/price_rangs.css ')}}">
    <!-- Select 2  -->
    <link rel="stylesheet" href="{{url('public/website/css/select2.min.css ')}}">
    <!-- Arial Font -->
    <link rel="stylesheet" href="{{url('public/website/css/arial-mt-bold.css ')}}">
    <!-- Extar font Lvoe icon -->
    <link rel="stylesheet" href="{{url('public/website/css/extra-font.css ')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
     <link type="text/css" href="{{ url('public/frontend/css/notiflix.min.css') }}" rel="stylesheet">
    <!-- color-picker -->
    <link rel="stylesheet" href="{{url('public/website/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{url('public/website/css/slicknav.css ')}}">
    <link rel="stylesheet" href="{{url('public/website/css/style.css ')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    @php
        $seosetting = \App\SeoSetting::first();
    @endphp

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="@yield('meta_description', $seosetting->description)" />
    <meta name="keywords" content="@yield('meta_keywords', $seosetting->keyword)">
    <meta name="author" content="{{ $seosetting->author }}">
    <meta name="sitemap_link" content="{{ $seosetting->sitemap_link }}">

    @yield('meta')

    @if(!isset($detailedProduct))
    <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="{{ config('app.name', 'Laravel') }}">
        <meta itemprop="description" content="{{ $seosetting->description }}">
        <meta itemprop="image" content="{{ asset(\App\GeneralSetting::first()->logo) }}">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="product">
        <meta name="twitter:site" content="@publisher_handle">
        <meta name="twitter:title" content="{{ config('app.name', 'Laravel') }}">
        <meta name="twitter:description" content="{{ $seosetting->description }}">
        <meta name="twitter:creator" content="@author_handle">
        <meta name="twitter:image" content="{{ asset(\App\GeneralSetting::first()->logo) }}">

        <!-- Open Graph data -->
        <meta property="og:title" content="{{ config('app.name', 'Laravel') }}" />
        <meta property="og:type" content="Ecommerce Site" />
        <meta property="og:url" content="{{ route('home') }}" />
        <meta property="og:image" content="{{ asset(\App\GeneralSetting::first()->logo) }}" />
        <meta property="og:description" content="{{ $seosetting->description }}" />
        <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
    @endif

<!-- Favicon -->
    @php
        $faviconLogo = \App\GeneralSetting::select('favicon')->first();
    @endphp
    @if($faviconLogo->favicon != null)
        @if(File::exists(public_path($faviconLogo->favicon)))
            <link name="favicon" type="image/x-icon" href="{{url('public/')}}/{{$faviconLogo->favicon}}" rel="shortcut icon" />
        @else
            <link name="favicon" type="image/x-icon" href="{{url('public/img/favicon.png')}}" rel="shortcut icon" />
        @endif
    @else
        <link name="favicon" type="image/x-icon" href="{{url('public/img/favicon.png')}}" rel="shortcut icon" />
    @endif
    @stack('css')
</head>


@php
    $back_img= App\BackgroundSetting::first();
@endphp
<style>
    .body-bg2{
    background-image: url({{asset('/'.@$back_img->image)}}) ;
    }
    .body-bg3{
    background-image: url({{asset('/'.@$back_img->image)}}) ;
    }

 #wh-widget-send-button{
    border: 1px solid red;
    }
</style>



<body>

<!--Header Area-->
@include('website.layouts.header')

<main>

    @yield('content')

    @include('frontend.partials.modal')
    @include('website.layouts.footer')

    <div class="modal fade" id="addToCart">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
            <div class="modal-content position-relative">
                <div class="c-preloader">
                    <i class="fa fa-spin fa-spinner"></i>
                </div>
                <button type="button" class="close absolute-close-btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div id="addToCart-modal-body">

                </div>
            </div>
        </div>
    </div>
</main>

@foreach (session('flash_notification', collect())->toArray() as $message)
    <script>
        showFrontendAlert('{{ $message['level'] }}', '{{ $message['message'] }}');
    </script>
@endforeach


<!--All JS here -->
<script src="{{url('public/website/js/vendor/modernizr-3.5.0.min.js ')}}"></script>
<script src="{{url('public/website/js/vendor/jquery-1.12.4.min.js ')}}"></script>
<!-- <script src="{{url('public/website/js/jquery-migrate.js ')}}"></script> -->
<script src="{{url('public/website/js/popper.min.js ')}}"></script>

<script src="{{url('public/website/js/slick.min.js')}}"></script>
<script src="{{url('public/website/js/bootstrap.min.js ')}}"></script>
<script src="{{url('public/website/js/owl.carousel.min.js ')}}"></script>
<script src="{{url('public/website/js/isotope.pkgd.min.js ')}}"></script>
<script src="{{url('public/website/js/waypoints.min.js ')}}"></script>
<script src="{{url('public/website/js/jquery.counterup.min.js ')}}"></script>
<script src="{{url('public/website/js/imagesloaded.pkgd.min.js ')}}"></script>
<script src="{{url('public/website/js/wow.min.js ')}}"></script>
<script src="{{url('public/website/js/jquery.nice-select.min.js')}}"></script>
<script src="{{url('public/website/js/jquery.slicknav.js ')}}"></script>
<script src="{{url('public/website/js/jquery.magnific-popup.min.js ')}}"></script>
<script src="{{url('public/website/js/parallax.js ')}}"></script>
<script src="{{url('public/website/js/plugins.js ')}}"></script>


<!-- color -->
<script src="{{url('public/website/js/jquery-ui.min.js ')}}"></script>

<!-- Range -->
<script src="{{url('public/website/js/price-range.js')}}"></script>

<!-- one page Nav -->
<script src="{{url('public/website/js/one-page-nav-min.js')}}"></script>

<!-- main js  -->
<script src="{{url('public/website/js/main.js ')}}"></script>
<script src="{{url('public/website/js/mainCustom.js')}}"></script>
<script src="{{ url('public/frontend/js/notiflix.min.js') }}"></script>

<!-- select 2 -->
<script src="{{ url('public/frontend/js/select2.min.js') }}"></script>


<!-- Admin page Video-->
<script src="{{ url('public/website/js/jquery.vide.js') }}"></script>




<script>
    function showFrontendAlert(type, message){
        if(type == 'danger'){
            type = 'error';
        }
        swal({
            position: 'top-end',
            type: type,
            title: message,
            showConfirmButton: false,
            timer: 1500
        });
    }


    $("#lang_lists li a").click(function() {
        var code = this.id;
        window.location.href = "{{url('/')}}/change-lang/" + code;
    });

</script>

@foreach (session('flash_notification', collect())->toArray() as $message)
    <script>
        showFrontendAlert('{{ $message['level'] }}', '{{ $message['message'] }}');
    </script>
@endforeach

<script src="{{ url('public/frontend/js/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ url('public/frontend/js/jodit.min.js') }}"></script>
<script src="{{ url('public/frontend/js/xzoom.min.js') }}"></script>

<!-- App JS -->
<script src="{{ url('public/frontend/js/active-shop.js') }}"></script>
<script src="{{ url('public/frontend/js/main.js') }}"></script>
<script src="{{ url('public/frontend/js/fb-script.js') }}"></script>
<script src="{{ url('public/frontend/js/lazysizes.min.js') }}" async=""></script>
<script src="{{ url('public/frontend/js/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ url('public/frontend/js/jodit.min.js') }}"></script>
<script src="{{ url('public/frontend/js/xzoom.min.js') }}"></script>

<!-- App JS -->
<script src="{{ url('public/frontend/js/active-shop.js') }}"></script>
<script src="{{ url('public/frontend/js/main.js') }}"></script>
<script src="{{ url('public/frontend/js/fb-script.js') }}"></script>
<script src="{{ url('public/frontend/js/lazysizes.min.js') }}" async=""></script>
<script>
    function showFrontendAlert(type, message){
        if(type == 'danger'){
            type = 'error';
            Notiflix.Notify.Warning(message);
        }else if(type == 'error'){
            Notiflix.Notify.Failure(message);
        }else if(type == 'success'){
            Notiflix.Notify.Success(message);
        } else if(type == 'warning'){
            Notiflix.Notify.Warning(message);
        }
    }
</script>

@stack('script')
<script>

    $(document).ready(function() {
        $('.category-nav-element').each(function(i, el) {
            $(el).on('mouseover', function(){
                if(!$(el).find('.sub-cat-menu').hasClass('loaded')){
                    $.post('{{ route('category.elements') }}', {_token: '{{ csrf_token()}}', id:$(el).data('id')}, function(data){
                        $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                    });
                }
            });
        });
        if ($('#lang-change').length > 0) {
            $('#lang-change .dropdown-item a').each(function() {
                $(this).on('click', function(e){
                    // console.log(e);
                    e.preventDefault();
                    var $this = $(this);
                    var locale = $this.data('flag');
                    $.post('{{ route('language.change') }}',{_token:'{{ csrf_token() }}', locale:locale}, function(data){
                        location.reload();
                    });

                });
            });
        }

        if ($('#currency-change').length > 0) {
            $('#currency-change .dropdown-item a').each(function() {
                $(this).on('click', function(e){
                    e.preventDefault();
                    var $this = $(this);
                    var currency_code = $this.data('currency');
                    $.post('{{ route('currency.change') }}',{_token:'{{ csrf_token() }}', currency_code:currency_code}, function(data){
                        location.reload();
                    });

                });
            });
        }
    });

    $('#search').on('keyup', function(){
        search();
    });

    $('#search').on('focus', function(){
        search();
    });

    function search(){
        var search = $('#search').val();
        if(search.length > 0){
            $('body').addClass("typed-search-box-shown");

            $('.typed-search-box').removeClass('d-none');
            $('.search-preloader').removeClass('d-none');
            $.post('{{ route('search.ajax') }}', { _token: '{{ @csrf_token() }}', search:search}, function(data){
                if(data == '0'){
                    // $('.typed-search-box').addClass('d-none');
                    $('#search-content').html(null);
                    $('.typed-search-box .search-nothing').removeClass('d-none').html('Sorry, nothing found for <strong>"'+search+'"</strong>');
                    $('.search-preloader').addClass('d-none');

                }
                else{
                    $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                    $('#search-content').html(data);
                    $('.search-preloader').addClass('d-none');
                }
            });
        }
        else {
            $('.typed-search-box').addClass('d-none');
            $('body').removeClass("typed-search-box-shown");
        }
    }

    function updateNavCart(){
        $.post('{{ route('cart.nav_cart') }}', {_token:'{{ csrf_token() }}'}, function(data){
            $('#cart_items').html(data);
        });
    }

    function removeFromCart(key){
        $.post('{{ route('cart.removeFromCart') }}', {_token:'{{ csrf_token() }}', key:key}, function(data){
            updateNavCart();
            $('#cart-summary').html(data);
            showFrontendAlert('success', 'Item has been removed from cart');
            $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())-1);
        });
    }

    function addToCompare(id){
        $.post('{{ route('compare.addToCompare') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
            $('#compare').html(data);
            showFrontendAlert('success', 'Item has been added to compare list');
            $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html())+1);
        });
    }

    function addToWishList(id){
        @if (Auth::check())
        $.post('{{ route('wishlists.store') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
            if(data != 0){
                $('#wishlist').html(data);
                showFrontendAlert('success', 'Item has been added to wishlist');
            }
            else{
                showFrontendAlert('warning', 'Please login first');
            }
        });
        @else
        showFrontendAlert('warning', 'Please login first');
        @endif
    }



    function showAddToCartModal(id){
        if(!$('#modal-size').hasClass('modal-lg')){
            $('#modal-size').addClass('modal-lg');
        }
        $('#addToCart-modal-body').html(null);
        $('#addToCart').modal();
        $('.c-preloader').show();
        $.post('{{ route('cart.showCartModal') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
            $('.c-preloader').hide();
            $('#addToCart-modal-body').html(data);
            $('.xzoom, .xzoom-gallery').xzoom({
                Xoffset: 20,
                bg: true,
                tint: '#000',
                defaultScale: -1
            });
            getVariantPrice();
        });
    }

    $('#option-choice-form input').on('change', function(){
        getVariantPrice();
    });

    function getVariantPrice(){
        if($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()){
            $.ajax({
                type:"POST",
                url: '{{ route('products.variant_price') }}',
                data: $('#option-choice-form').serializeArray(),
                success: function(data){
                    $('#option-choice-form #chosen_price_div').removeClass('d-none');
                    $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                    $('#available-quantity').html(data.quantity);
                    $('.input-number').prop('max', data.quantity);
                    //console.log(data.quantity);
                    if(parseInt(data.quantity) < 1){
                        $('.buy-now').hide();
                        $('.add-to-cart').hide();
                    }
                    else{
                        $('.buy-now').show();
                        $('.add-to-cart').show();
                    }
                }
            });
        }
    }

    function checkAddToCartValidity(){
        var names = {};
        $('#option-choice-form input:radio').each(function() { // find unique names
            names[$(this).attr('name')] = true;
        });
        var count = 0;
        $.each(names, function() { // then count them
            count++;
        });

        if($('#option-choice-form input:radio:checked').length == count){
            return true;
        }

        return false;
    }

    function addToCart(){

            $('#addToCart').modal();
            $('.c-preloader').show();
            $.ajax({
                type:"POST",
                url: '{{ route('cart.addToCart') }}',
                data: $('#option-choice-form').serializeArray(),
                success: function(data){
                    $('#addToCart-modal-body').html(null);
                    $('.c-preloader').hide();
                    $('#modal-size').removeClass('modal-lg');
                    $('#addToCart-modal-body').html(data);
                    updateNavCart();
                    $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())+1);
                }
            });
    }

    function buyNow(){
        if(checkAddToCartValidity()) {
            $('#addToCart').modal();
            $('.c-preloader').show();
            $.ajax({
                type:"POST",
                url: '{{ route('cart.addToCart') }}',
                data: $('#option-choice-form').serializeArray(),
                success: function(data){
                    updateNavCart();
                    $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())+1);
                    window.location.replace("{{ route('cart') }}");
                }
            });
        }
        else{
            showFrontendAlert('warning', 'Please choose all the options');
        }
    }

    function show_purchase_history_details(order_id)
    {
        $('#order-details-modal-body').html(null);

        if(!$('#modal-size').hasClass('modal-lg')){
            $('#modal-size').addClass('modal-lg');
        }

        $.post('{{ route('purchase_history.details') }}', { _token : '{{ @csrf_token() }}', order_id : order_id}, function(data){
            $('#order-details-modal-body').html(data);
            $('#order_details').modal();
            $('.c-preloader').hide();
        });
    }

    function show_order_details(order_id)
    {
        $('#order-details-modal-body').html(null);

        if(!$('#modal-size').hasClass('modal-lg')){
            $('#modal-size').addClass('modal-lg');
        }

        $.post('{{ route('orders.details') }}', { _token : '{{ @csrf_token() }}', order_id : order_id}, function(data){
            $('#order-details-modal-body').html(data);
            $('#order_details').modal();
            $('.c-preloader').hide();
        });
    }

    function cartQuantityInitialize(){
        $('.btn-number').click(function(e) {
            e.preventDefault();

            fieldName = $(this).attr('data-field');
            type = $(this).attr('data-type');
            var input = $("input[name='" + fieldName + "']");
            var currentVal = parseInt(input.val());

            if (!isNaN(currentVal)) {
                if (type == 'minus') {

                    if (currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('min')) {
                        $(this).attr('disabled', true);
                    }

                } else if (type == 'plus') {

                    if (currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('max')) {
                        $(this).attr('disabled', true);
                    }

                }
            } else {
                input.val(0);
            }
        });

        $('.input-number').focusin(function() {
            $(this).data('oldValue', $(this).val());
        });

        $('.input-number').change(function() {

            minValue = parseInt($(this).attr('min'));
            maxValue = parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());

            name = $(this).attr('name');
            if (valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the minimum value was reached');
                $(this).val($(this).data('oldValue'));
            }
            if (valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the maximum value was reached');
                $(this).val($(this).data('oldValue'));
            }


        });
        $(".input-number").keydown(function(e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    }

    function imageInputInitialize(){
        $('.custom-input-file').each(function() {
            var $input = $(this),
                $label = $input.next('label'),
                labelVal = $label.html();

            $input.on('change', function(e) {
                var fileName = '';

                if (this.files && this.files.length > 1)
                    fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
                else if (e.target.value)
                    fileName = e.target.value.split('\\').pop();

                if (fileName)
                    $label.find('span').html(fileName);
                else
                    $label.html(labelVal);
            });

            // Firefox bug fix
            $input
                .on('focus', function() {
                    $input.addClass('has-focus');
                })
                .on('blur', function() {
                    $input.removeClass('has-focus');
                });
        });
    }

</script>

<script>
    $('#question_form').on('submit',function(e){
        e.preventDefault();
        var data = $(this).serialize();
        $.ajax({
            url : "{{route('ask-question.store')}}",
            method: 'post',
            data: data,
            dataTpye: 'json',
            success:function(data){
                Notiflix.Notify.Info('Your question placed successfully');
                $('#question_title').val("");
                $('#message').val("");

            },error:function (response) {
                Notiflix.Notify.Failure('Opps something went wroong');
            }
        })
    });
    $('#subscription_form').on('submit',function(e){
        e.preventDefault();
        var data = $(this).serialize();
        $.ajax({
            url : "{{route('subscribers.store')}}",
            method: 'post',
            data: data,
            dataTpye: 'json',
            success:function(data){
                Notiflix.Notify.Info('Thanks for subscribed');
                $('#subscribed_id').val("");

            },error:function (response) {
                Notiflix.Notify.Failure('Opps something went wroong');
            }
        })
    });

    function addToCompareList(id){
        @if(Auth::check())
        $.ajax({
            type: 'GET', //THIS NEEDS TO BE GET
            url: '{{url('addToCompareList/')}}/'+id,
            success: function (data) {
                Notiflix.Notify.Success('Item has been added to compare');
            },
            error: function(response) {
                Notiflix.Notify.Danger('Item did not added to compare');
            }
        });
        @else
        Notiflix.Notify.Failure('Please login first');
        @endif
    }

</script>
<script>
    function alertMessage() {
        Notiflix.Notify.Failure('Opps you must login first');
    }
</script>
@if(Session::has('success'))
    <script>
        Notiflix.Notify.Success('{{Session::get('success')}}');
    </script>
@endif
@if(Session::has('error'))
    <script>
        Notiflix.Notify.Failure('{{Session::get('error')}}');
    </script>
@endif

<!-- START Bootstrap-Cookie-Alert -->
<div class="alert text-center cookiealert" role="alert" style="color:#ffff;">
   <p class="acceptcookies"> We use cookies on our website. Cookies are used to improve the functionality and use of our internet site, as well as for analytic and advertising purposes. To learn more about cookies, how we use them and how to change your cookie settings find out more  <a href="{{url('cookies/')}}" target="_blank"  style="font-weight:600;"> here</a>. By continuing to use this site without changing your settings you consent to our use of cookies.</p>
</div>
<!-- END Bootstrap-Cookie-Alert -->

<!-- JAVASCRIPT -->

<!-- Only for the demo -->
<script>
    for (var i = 1; i <= 150; i++)
        document.querySelector("#fillme").innerHTML += "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ";
</script>

<!-- Include cookiealert script -->
<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
</body>

</html>
