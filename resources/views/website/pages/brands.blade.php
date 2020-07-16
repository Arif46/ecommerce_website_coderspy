@extends('website.layouts.master')
@section('title','Brands')
@section('content')
<style>
.single-brands {

    margin: 1px;
    padding: 10px;
    color: black;
    margin-bottom: 25px;
    box-shadow: 0 0 6px 1px rgba(174,195,206,.3);
}
.single-brands img{
    width:50px;
     height:50px
}
.single-brands a p{
    color: #0a0a0a;
    margin: 0 8px 0 34px;
    font-size: 16px;
}
.single-brands a span{
    display: inline-block;
    min-width: 2.1em;
    padding: .4em;
    border-radius: 50%;
    font-size: .6rem;
    text-align: center;
    background: #008b92;
    color: #fefefe;
}

</style>

<body class="body-bg3">

    <!-- Page Tittle Start -->
    <div class="page_tittle_area text-center">
       <div class="container">
         <div class="page-tittle mb-50 pt-20 pb-20">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Brands</h2>
                </div>
            </div>
         </div>
       </div>
    </div>
    <!-- Page Tittle End -->

    <!--Brands area-->
    <section class="gray-bg-2">
        <div class="container">
            <div class="perfumers-wrapper">
                <div class="row justify-content-center mb-40">
                    <div class="col-lg-8">
                        <p class="type-product text-center pt-25">Type a few letters to narrow the list:</p>
                        <input class="input-box form-control" type="text" name="search" id="perfumeField" placeholder="Search Perfumes">
                        @csrf
                    </div>
                </div>
                <div class="row hide_content">
                    <div class="col-xl-12">
                        <h3 class="mb-30">All Brands</h3>
                        <div class="row ">
                            @foreach($brands as $b)
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="single-brands">
                                    <a href="{{route('brandProducts',[$b->id,$b->slug])}}" class="d-flex align-items-center justify-content-between">
                                        <img src="{{url('public/'.$b->logo)}}" alt="">
                                        <p>{{@$b->name}}</p>
                                        <span>{{__($b->products_count)}}</span>
                                    </a>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="row mb_30 show_content">

                </div>
            </div>
        </div>
    </section><!--/Brands area-->

</body>


@endsection

@push('css')

@endpush

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('.show_content').hide();
            $("#perfumeField").on('keyup', function () {
                $('.show_content').empty();
                let livesearch = $(this).val();
                if (livesearch != '') {
                    $.ajax({
                        type: 'get',
                        url: '{{route('brand_search')}}',
                        data: {
                            'livesearch': livesearch
                        },
                        success: function (data) {
                            $('.hide_content').hide();
                            $('.perfume_show').empty();
                            $('.show_content').show();
                            $.each(data, function (indexOne, valueOne) {
                                console.log(valueOne.products_count);
                                $('.perfume_name'+valueOne.id).text(valueOne.name);
                                $('.products_count'+valueOne.id).text(valueOne.products_count);
                                $('.perfume_img'+valueOne.id).attr('src', 'public/'+valueOne.logo);
                                $('.show_content').append(`<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="single-brands">
                                    <a href="" class="d-flex align-items-center justify-content-between">
                                        <img src="" class="perfume_img${valueOne.id} alt="">
                                        <p class="perfume_name${valueOne.id}"></p>
                                        <span class="product_count${valueOne.id}"></span>
                                    </a>
                                </div>
                            </div>`);
                            });
                        }
                    });
                }
                else if (livesearch.length == 0) {
                    $('.hide_content').show();
                    $('.show_content').hide();
                }else{
                    console.log('error');
                }
            });
        });
    </script>
@endpush
