@extends('website.layouts.master')
@section('title',$title)
@section('content')
    <!-- Subscription  -->
    <div class="Subscription_area text-center">
        <span><a href="javascript:void()">{{@$title}}</a></span>
    </div>
    <!-- peek bestselling Start-->
    <div class="peek-best-sellign pt-50 pb-50">
       <div class="container">
            <div class="row justify-content-center">
                <div class="section_title text-center mb_30">
                    <h3 >Here's a sneak peek of our bestselling fragrances</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="com-md-4">
                    <div class="perfume_img mt-10">
                        <img src="{{url('public/img/1.svg')}}" alt="">
                        <p>Choose what you’d like to try each month from our bestsellers </p>
                    </div>
                </div>
                <div class="com-md-4">
                    <div class="perfume_img mt-10">
                        <img src="{{url('public/img/2.svg')}}" alt="">
                        <p>Subscribe and get your first order within a week </p>
                    </div>
                </div>
                <div class="com-md-4">
                    <div class="perfume_img mt-10">
                        <img src="{{url('public/img/3.svg')}}" alt="">
                        <p>Fill your queue: perfumes, makeup and skincare available </p>
                    </div>
                </div>
            </div>
       </div>
    </div>
    <!-- peek bestselling End-->
    <!-- choose production Start  -->
    <div class="Trending_area section_padding">
        <div class="container">
            <!-- <div class="tranding_prouct">
                <div class="row">

                </div>
            </div> -->
            <form action="{{route('selectedPerfume',$id)}}" method="post">
                @csrf
            <div class="row">
                @forelse($products as $product)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-choose text-center mb-60">
                        <div class="choose-wrapper">
                            <div class="choose-img">
                                <img src="{{ url('public/'.$product->featured_img) }}" alt="">
                                <div class="check-btn">
                                        <svg class="_1yPcO6 _2dH5s9 _3yl0rB" draggable="false" width="12" height="10" viewBox="0 0 12 10" fill="currentColor"><path d="M10.3334 0L9.54751 0.839504L4.07149 6.69071L2.42849 5.03587L1.619 4.22054L0 5.85121L0.809498 6.66654L3.28561 9.1605L4.11911 10L4.92861 9.13671L11.2141 2.42221L12 1.5827L10.3334 0Z" fill="currentColor"></path></svg>
                                    <input type="text" name="product[]" id="p{{$product->id}}">
                                </div>
                            </div>
                            <div class="choose-caption">
                                <span class="mt-2">{{@$product->name}}</span>
                                <p>{{@$product->brand->name}}</p>
                                <p>{{@$product->price}}</p>
                                <div class="rating2">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <!-- Add btn -->
                            <div id="addButton_<?php echo $product->id;?>"></div>
                            <span class="addSubsButton" id="addButton_<?php echo $product->id;?>" onclick="addProduct(<?php echo $product->id;?>)">ADD</span>
                            <!-- <div class="add-btn">
                                 
                            </div> -->
                            <!-- Remove btn -->
                            <div id="removeButton_<?php echo $product->id;?>"></div>
                        </div>
                    </div>
                </div>
                    @empty
                        <div class="row">
                            <div class="col-md-12">
                                <p>No subscription products found.</p>
                            </div>
                        </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- choose production End  -->
    <!-- Continue start -->
    <div class="continue-product pt-50 pb-50">
        <!-- Continue -->
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <button class="boxed_btn">Continue <i class="fa fa-angle-right"></i></button>
            </div>
        </div>
    </div>
    <!-- Continue End -->

    </form>


@endsection
@push('css')
    <style>
        .perfume_img{
            text-align: center;
            padding: 25px;
            margin-bottom: 10px;
        }
        .single-choose{

        }
    </style>
@endpush
@push('script')
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>
        function addProduct(id){
            $(`#p${id}`).val(id);
            document.getElementById(`addButton_${id}`).remove();
            document.getElementById(`removeButton_${id}`).innerHTML = `<span id="removeButton_${id}" class="removeSubsButton" onclick="removeProduct(${id})"> Remove</span>`;
            document.getElementById(`addButton_${id}`).innerHTML = '';
        }

        function removeProduct(id){
            $(`#p${id}`).val('');
            document.getElementById(`removeButton_${id}`).innerHTML = '';
            document.getElementById(`addButton_${id}`).innerHTML = `<span id="addButton_${id}" class="addSubsButton" onclick="addProduct(${id})"> Add</span>`;
        }
        
    </script>
@endpush
