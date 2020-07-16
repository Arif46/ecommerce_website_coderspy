@extends('website.layouts.master')
@section('title','My Blend')
@section('content')

<body class="body-bg3">

    <!-- Page Tittle Start -->
    <div class="page_tittle_area text-center">
       <div class="container">
         <div class="page-tittle mb-50 pt-20 pb-20">
            <div class="row">
                <div class="col-lg-12">
                    <h2>My Blend</h2>
                </div>
            </div>
         </div>
       </div>
    </div>
    <!-- Page Tittle End -->

    <!-- Blend Area Start -->
    <div class="blend-area">
        <div class="container">
            <div class="perfumers-wrapper">
                <div class="blend-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <!-- Single -->
                            <div class="single-items single-items1">
                                <div class="content">
                                    <label>Top Note</label>
                                    <select class="js-select2-multi anyNotes" name="anynote" multiple="multiple" id="anyNotes">
                                        @forelse($topnotes as $topnote)
                                        <option value="{{$topnote->id}}#top">{{$topnote->name}}</option>
                                        @empty
                                        <option>Notes not available go for next lavel</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="single-items single-items2">
                                <div class="content2">
                                    <label>Middle Note</label>
                                    <select class="js-select2-multi anyNotes" name="anynote" multiple="multiple" id="anyNotes">
                                        @forelse($midnotes as $midnote)
                                            <option value="{{$midnote->id}}#mid">{{$midnote->name}}</option>
                                        @empty
                                            <option>Notes not available go for next lavel</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="single-items single-items3">
                                <div class="content3">
                                    <label>Base Note</label>
                                    <select class="js-select2-multi anyNotes" name="anynote" multiple="multiple" id="anyNotes">
                                        @forelse($basenotes as $basenote)
                                            <option value="{{$basenote->id}}#base">{{$basenote->name}}</option>
                                        @empty
                                            <option>Notes not available go for next lavel</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center transparent_bg">
                        <div class="col-xl-11">
                            <!-- Single -->
                            <div class="single-items single-items4">
                                <div class="last-one">
                                    <div class="content4">
                                        <label>Any Level</label>
                                        <select class="js-select2-multi anyNotes" name="anynote" multiple="multiple" id="anyNotes">
                                                @forelse($topnotes as $topnote)
                                                    <option value="{{$topnote->id}}#top">{{$topnote->name}}</option>
                                                @empty
                                                @endforelse
                                                @forelse($midnotes as $midnote)
                                                    <option value="{{$midnote->id}}#mid">{{$midnote->name}}</option>
                                                @empty
                                                @endforelse
                                                @forelse($basenotes as $basenote)
                                                    <option value="{{$basenote->id}}#base">{{$basenote->name}}</option>
                                                @empty
                                                @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->
    <!-- Blend Area End -->

    <!-- Show Product -->
    <div class="container container-special">
        <div class="perfumers-wrapper">
            <section class="Product-show section_padding">
                <div class="perfumers-wrapper">
                    <div class="row product_show mb-5">
                        <div class="col-md-12">
                            <center><button style="background: #8DC63F;" class="btn" >Perfume available : <span id="count"></span>  </button>
                            </center>
                        </div>
                    </div>
                    <div class="row mt-5 product_show mb-5 show_content">

                    </div>
                </div>
            </section>
        </div>
    </div>

</body>

@endsection

@push('css')

@endpush
@push('script')
    <script>
       $(document).ready(function () {
           $('.show_content').empty();
           jQuery('.anyNotes').on('change', function () {

               $('.show_content').empty();
               var data = $(this).val();
               var jsonString = JSON.stringify(data);
               console.log(jsonString);
               $.ajax({
                headers:{
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   },
                   type: "POST",
                   url: "{{url('myblend-search')}}",
                   data: {data : jsonString},
                   cache: false,
                   success: function(response){
                       console.log(response);












                       // $.each(response[0], function(key, value) {
                       // });
                       // $('#count').text(response[1]);
                   },error:function(response){
                       $('#count').text(0);
                   }
               });
       })
       })
    </script>
{{--    $.ajax({--}}
{{--    type: 'GET', //THIS NEEDS TO BE GET--}}
{{--    url: '{{url('myblend-product-add/')}}/'+value.id,--}}
{{--    success: function (data) {--}}
{{--    },--}}
{{--    error: function(response) {--}}
{{--    console.log(response);--}}
{{--    }--}}
{{--    });--}}
@endpush
