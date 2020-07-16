@extends('website.layouts.master')
@section('title','Notes')
@section('content')

<body class="body-bg3">

    <!-- Page Tittle Start -->
    <div class="page_tittle_area text-center">
       <div class="container">
         <div class="page-tittle mb-50 pt-20 pb-20">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Notes</h2>
                </div>
            </div>
         </div>
       </div>
    </div>
    <!-- Page Tittle End -->

    <div class="subcribe_area">
        <div class="container">
            <div class="perfumers-wrapper">
                <!-- Search input Fiels -->
                <div class="row justify-content-center mb-40">
                    <div class="col-lg-8">
                        <p class="text-center type-product pt-25">Type a few letters to narrow the list:</p>
                        <input class="input-box form-control searchnote" type="text" name="search" id="searchnote" autofocus>
                    </div>
                </div>

                <!-- Img top Caption -->
                <div class="row justify-content-center mt-40 hide_content">
                    <div class="col-lg-12">
                        @if(!empty($notes_categories))
                            @foreach($notes_categories as $row)
                            @php
                                $name = $row->name;
                                $slug = str_replace(' ','',$row->name);
                            @endphp
                            <a href="#{{@$slug}}" class="singl-tag">{{@$name}}</a> ~
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>


        </div>
    </div>


    <div class="container show_content">
        <div class="perfumers-wrapper">
            <div class="row mt-40 justify-content-left notes_show_top">
                <!--  -->

            </div>
            <div class="row mt-40 justify-content-left notes_show_middle">
                <!--  -->

            </div>
            <div class="row mt-40 justify-content-left notes_show_base">
                <!--  -->

            </div>
        </div>
    </div>


    @if(!empty($notes_categories))
    @foreach($notes_categories as $row)
        @php
            $name = $row->name;
            $slug = str_replace(' ','',$row->name);
            $top_notes = \App\TopNote::where('category_id',$row->id)->get();
            $middle_notes = \App\MiddleNote::where('category_id',$row->id)->get();
            $base_notes = \App\BaseNote::where('category_id',$row->id)->get();
        @endphp

    <!-- Banner imng -->
    <div class="container hide_content">
        <div class="perfumers-wrapper">
            <div class="row justify-content-center mt-40">
                <div class="col-lg-12">
                <div class="nots-banner-img">
                        <img class="notes-cover-photo" src="{{url('public/'.@$row->image)}}" alt="" width="100%">
                        <h3 class="text-center noteTitles" id="{{@$slug}}">{{@$name}}</h3>
                </div>
                    <p class="text-justify">
                        {{@$row->description}}
                    </p>
                </div>
            </div>
        </div>
    </div>


        <!-- Single Product -->
        <div class="container hide_content">
            <div class="perfumers-wrapper">
                <div class="row justify-content-center mt-40">
                    <!--  -->
                    @if(@$top_notes->count()>0)
                    @foreach($top_notes as $key => $notes)
                    <div class="col-lg-2 col-md-2 col-sm-4">
                        <a href="{{url('notes-details/top',$row->id.'-'.$notes->id)}}" class="notesUrl" title="{{@$notes->name}}">
                            <img class="mb_10" src="{{url('public/'.$notes->image)}}" alt="" style="width: 60px; height:auto">
                            <p class="notes_name"> {{@$notes->name}}</p>
                        </a>
                    </div>
                    @endforeach
                    @endif
                    @if(@$middle_notes->count()>0)
                    @foreach($middle_notes as $key => $notes)
                    <div class="col-lg-2 col-md-2 col-sm-4">
                    <a href="{{url('notes-details/middle',$row->id.'-'.$notes->id)}}" class="notesUrl" title="{{@$notes->name}}">
                    <img class="mb_10" src="{{url('public/'.$notes->image)}}" alt="" style="width: 60px; height:auto">
                    <p class="notes_name"> {{@$notes->name}}</p>
                    </a>
                    </div>
                    @endforeach
                    @endif
                    @if(@$base_notes->count()>0)
                    @foreach($base_notes as $key => $notes)
                    <div class="col-lg-2 col-md-2 col-sm-4">
                    <a href="{{url('notes-details/base',$row->id.'-'.$notes->id)}}" class="notesUrl" title="{{@$notes->name}}">
                    <img class="mb_10" src="{{url('public/'.$notes->image)}}" alt="" style="width: 60px; height:auto">
                    <p class="notes_name"> {{@$notes->name}}</p>
                    </a>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>


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
        $(".searchnote").on('keyup', function () {
            $('.notes_show_top').empty();
            $('.notes_show_middle').empty();
            $('.notes_show_base').empty();
            let livesearch = $(this).val();
                if (livesearch != '') {
                    $.ajax({
                        type: 'get',
                        url: '{{route('notes_search')}}',
                        data: {
                            'livesearch': livesearch
                        },
                        success: function (data) {
                            $('.hide_content').hide();
                            // $('.notes_show').empty();
                            $('.show_content').show();
                            $(data).each(function (index, value) {
                                var prodductOne = [];
                                 productOne = value['productsOne'];

                                $.each(productOne, function (indexOne, valueOne) {
                                    $('.s_notes_name'+valueOne.id).text(valueOne.name);
                                    $('.hello'+valueOne.id).attr('src', 'public/'+valueOne.image);
                                        $('.notes_show_top').append(`<div class="col-lg-2 col-md-2 col-sm-4">
                                            <a href="{{url('notes-details/top/')}}/${valueOne.category_id}-${valueOne.id}" class="notesUrl">
                                                <img class="mb_10 hello${valueOne.id}" src="" alt="" style="width: 60px; height:auto">
                                                <p class="notes_name s_notes_name${valueOne.id}"></p>
                                            </a>
                                        </div>`);
                                });
                                var productTwo = [];
                                productTwo = value['productsTwo'];
                                $.each(productTwo, function (indexTwo, valueTwo) {
                                    $('.s_notes_name'+valueTwo.id).text(valueTwo.name);
                                    $('.hello'+valueTwo.id).attr('src', 'public/'+valueTwo.image);
                                        $('.notes_show_middle').append(`<div class="col-lg-2 col-md-2 col-sm-4">
                                            <a href="{{url('notes-details/middle/')}}/${valueTwo.category_id}-${valueTwo.id}" class="notesUrl">
                                                <img class="mb_10 hello${valueTwo.id}" src="" alt="" style="width: 60px; height:auto">
                                                <p class="notes_name s_notes_name${valueTwo.id}"></p>
                                            </a>
                                        </div>`);
                                });
                                var productThree = [];
                                productThree = value['productsThree'];
                                $.each(productThree, function (indexThree, valueThree) {
                                    $('.s_notes_name'+valueThree.id).text(valueThree.name);
                                    $('.hello'+valueThree.id).attr('src', 'public/'+valueThree.image);
                                        $('.notes_show_base').append(`<div class="col-lg-2 col-md-2 col-sm-4">
                                            <a href="{{url('notes-details/base/')}}/${valueThree.category_id}-${valueThree.id}" class="notesUrl">
                                                <img class="mb_10 hello${valueThree.id}" src="" alt="" style="width: 60px; height:auto">
                                                <p class="notes_name s_notes_name${valueThree.id}"></p>
                                            </a>
                                        </div>`);
                                });
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
