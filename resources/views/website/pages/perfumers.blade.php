@extends('website.layouts.master')
@section('title','All Perfumers')
@section('content')


<body class="body-bg2">

    <!-- Page Tittle Start -->
    <div class="page_tittle_area text-center">
        <div class="container">
            <div class="page-tittle mb-50 pt-20 pb-20">
            <div class="row">
                <div class="col-lg-12">
                    <h2>All Perfumers</h2>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Page Tittle End -->

    <!-- perfumers area Start -->
    <div class="perfumers-area">
        <div class="container">
           <div class="perfumers-wrapper">
                <div class="row justify-content-center mb-40">
                        <div class="col-lg-8">
                            <p class="type-product text-center pt-25">Type a few letters to narrow the list:</p>
                            <input class="input-box form-control" type="text" name="search" id="perfumeField" placeholder="Search Perfumes">
                                @csrf
                        </div>
                    </div>

                <div class="row mb_30 hide_content">
                    @foreach($grouped as $key=>$grp )
                    <!-- <div class="col-xl-12 mb_10 mt-5">
                        <h3>{{$key}}</h3>
                    </div> -->
                    @foreach($grp as $per)
                    <div class="col-xl-3 col-md-3 col-sm-3 col-sm-3">
                        <div class="single-perfumer">
                            <div class="perfume-heart">
                                <img src="{{url('public/'.$per->img)}}" alt="">
                            </div>
                            <a href="{{route('perfumerDetail',[$per->id, str_slug($per->name)])}}">{{$per->name}}</a>
                        </div>
                    </div>
                    @endforeach
                    @endforeach
                </div>
           </div>
        </div>
    </div>
    <!-- perfumers area End -->
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
                        url: '{{route('perfume_search')}}',
                        data: {
                            'livesearch': livesearch
                        },
                        success: function (data) {
                            $('.hide_content').hide();
                            $('.perfume_show').empty();
                            $('.show_content').show();
                            $.each(data, function (indexOne, valueOne) {
                                $('.perfume_name'+valueOne.id).text(valueOne.name);
                                $('.perfume_img'+valueOne.id).attr('src', 'public/'+valueOne.img);
                                $('.show_content').append(`<div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="single-perfumer">
                                <img src="" class="perfume_img${valueOne.id}" alt="">
                                <a href="{{url('perfumer')}}/${valueOne.id}" class="perfume_name${valueOne.id}"></a>
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
