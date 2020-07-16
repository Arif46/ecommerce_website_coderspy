@extends('website.layouts.master')
@section('title','Perfumer Details')
@section('content')
    <main>

        <div class="section_padding text-center gray-bg mb-60">
            <h1></h1>
        </div>

        <div class="container">
            <div class="row mb_30 justify-content-center">

                <div class="col-xl-12 text-center mt-40">
                    <h2>{{$perfumer->name}}</h2>
                    <p>{{$perfumer->position}}</p>
                </div>
                <div class="col-xl-12 perfumer-details mt-40">
                    <div class="row justify-content-center">
                        <div class="col-xl-3">
                            <img class="w-100" src="{{url('public/'.$perfumer->img)}}" alt="image">
                        </div>
                        <div class="col-xl-7">
                            <div class="details">
                                <p>Company: <strong>{{@$perfumer->company}}</strong></p>
                                <p>Education: {{@$perfumer->education}}</p>
                                <p>Web: <a href="{{@$perfumer->website}}">{{@$perfumer->website}}</a></p>
                                <p>Number of perfumes in database: {{ 	@$perfumer->number_database}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 text-center mt-40 mb-30">
                    <h3>{{ $perfumer->name }} 's Perfumes</h3>
                </div>
                <div class="col-xl-8 text-center perfumer-links">
                    <p>Go to brand: <br>
                        @foreach($brands as $key => $brand)
                            @php $brand = \App\Brand::find($key)  @endphp
                        <a href="{{route('brand',[$brand->id,str_slug($brand->name)])}}">{{@$brand->name}}</a> ~
                            @endforeach

                    </p>
                </div>

                @foreach($brands as $key => $brand)
                    @php $brand = \App\Brand::where('id', $key)->with('products','products.reviews')->first()  @endphp
                <div class="col-xl-12 mt-30 mb-30">
                    <div class="row ">
                        <div class="col-12 text-center mb-20">
                            <h4><a href="" class="cl-primary">{{$brand->name}} ({{$brand->products->count()}})</a></h4>
                        </div>
                        @foreach($brand->products as $product)
                        <div class="col-xl-6 col-md-6 mt-3" >
                            <div class="perfumer-perfume-item">
                                <div class="top">
                                    <img src="{{url('public/'.$product->img)}}" alt="">
                                    <h4><a href="{{ route('product', $product->slug) }}" class="cl-primary">{{$product->name}} </a></h4>
                                    <a href="" class="comment cl-primary"><span>{{$product->reviews->count()}} <i class="fa fa-comment"></i></span></a>
                                </div>
                                <div class="bottom">
                                    <span>{{$product->gender}}</span>
                                    <span> {{ home_price($product->id) }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach

            </div>
        </div>




    </main>

@endsection

@push('css')

@endpush

@push('script')

@endpush
