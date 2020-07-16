@extends('website.layouts.master')
@section('title','Search by Color')
@push('css')

    <link href="{{ url('public/website/picker/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{ url('public/website/picker/style.css')}}" rel="stylesheet">
    @endpush
@section('content')


<body  class="body-bg2">
    <div id="app1">

        <!-- Page Tittle Start -->
        <div class="page_tittle_area text-center">
            <div class="container">
                <div class="page-tittle mb-50 pt-20 pb-20">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>Perfume Search by Color</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Tittle End -->

        <div class="container">
            <div class="perfumers-wrapper">
                <div class="section_padding mt-40" style="background: white !important;">
                    <div class="container">
                        <div class="row justify-content-center mt-40">
                            <div class="col-xl-12">
                                <div class="color-picker-box" id="clickColor">
                                    <!-- picker Start -->
                                    <div class="pickshell">
                                        <div class="picker" data-hsv="180,60,78">
                                        <a href="#change" class="icon change"  ></a>
                                        <input type="text" class="change" name="change"  id="inputColor" value="" placeholder="Please put a Hexa color Code"/>
                                        <div class="board"><div class="choice"></div></div>
                                        <div class="rainbow"></div>
                                        </div>
                                    </div>
                                    <!-- picker End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section_padding" style="background: white !important;">
                    <div class="container container-special">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <div class="row pb-10" id="searcResult">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>



@endsection

@push('css')

@endpush

@push('script')
<!-- pusg script  -->
    <script type="text/javascript" src="{{url('public/website/picker/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/website/picker/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/website/picker/js/main.js')}}"></script>

    <script>
        $(document).ready(function(){
            var color = $('#inputColor').val();

            $.ajax({
                url: '/projects/myfrag/productByColors/',
                type: 'get',
                data: {'colors': color},
                success: function (data) {
                    console.log(data)
                    $('#searcResult').html(data);
                }
            });

        });
        $("#clickColor").on('click', function postinput(){
            var color2 = $('#inputColor').val();
            $.ajax({
                url: '/projects/myfrag/productByColors/',
                type: 'get',
                data: {'colors': color2},
                success: function (data) {
                    console.log(data)
                    $('#searcResult').html(data);
                }
            });
        });
    </script>

@endpush
