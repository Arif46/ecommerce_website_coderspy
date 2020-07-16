@extends('website.layouts.master')
@section('title','Blogs')
@php
    $setting= App\GeneralSetting::first();
@endphp
@section('content')

<body  class="body-bg1">

  <header>
        <div class="Blog_header_area mb-50 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="main_header">
                            <div class="logo">
                                <a href="#">
                                    <img src="{{url('public/website/img/logo/logo.png')}}" alt="" style="width: 100px;">
                                </a>
                            </div>
                            <div class="social_links">
                                <ul>
                                    @if (@$setting->facebook != null)
                                        <li>
                                            <a href="https://www.facebook.com">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if (@$setting->twitter != null)
                                        <li>
                                            <a href="https://www.twitter.com">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if (@$setting->instagram != null)
                                        <li>
                                            <a href="https://www.instagram.com">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if (@$setting->pinterest != null)
                                        <li>
                                            <a href="https://www.pinterest.com">
                                                <i class="fa fa-pinterest"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if (@$setting->linkedin != null)
                                        <li>
                                            <a href="https://www.linkedin.com">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if (@$setting->snapchart != null)
                                        <li>
                                            <a href="https://www.snapchart.com">
                                                <i class="fa fa-snapchat"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if (@$setting->youtube != null)
                                        <li>
                                            <a href="https://www.youtube.com">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                    @endif
                                    <form id="blog_search_form" class="blog_search_form" role="search" action="" method="get">
                                    <input class="form-control" id="myInput" type="text" placeholder="Search">
                                    </form>
                                </ul>
                            </div>
                        </div>
                        <div class="header_bottom">
                            <ul>
                                <li><a href="{{url('/blogs')}}">Blog</a></li>
                                <li><a href="{{url('/about')}}">About</a></li>
                                <li><a href="#">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="blog_banner section_padding3 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blog_banner_active owl-carousel">
                        @foreach($blogsImg as $b_img)
                                <div style="background-image: url({{url('public/'.$b_img->image)}})" class="single_banner blog_banner_bg_1">
                                    <div class="banner_content">
                                        <h4><a href="{{ route('single_blog',$b_img->slug) }}">{{ $b_img->title }}</a></h4>
                                    </div>
                                </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/:::::::::::::: blog_banner::::::::::::::: -->

    <!--::::::::::::::product::::::::::::::: -->
    <div class="blog_service_area section_padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="blog_common_title"><a href="#">New on MyFragranceMe</a></h3>
                </div>
            </div>
            <div class="row">
              @forelse($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="single_service">
                            <div class="service_thumb">
                                <a href="{{ route('single_blog',$blog->slug) }}">
                                    <img src="{{url('public/'.$blog->image)}}" alt="">
                                </a>
                            </div>
                            <div class="service_meta">
                                <h4><a href="{{ route('single_blog',$blog->slug) }}">
                                        {{  \Illuminate\Support\Str::limit(strip_tags($blog->title),50, '')}}
                                    </a></h4>
                                <p class="info"> {{  \Illuminate\Support\Str::limit(strip_tags($blog->description),70, '...')}} </p>
                                <p class="service_bottom" title="{{ $blog->user->name }}">
                                    <img src="{{url('public/website')}}/img/blog/person.jpg" alt="">
                                    <span><a href="#">{{ $blog->user->name }}</a></span>
                                    <span class="date"> {{\Carbon\Carbon::parse($blog->created_at)->format('l M, d, Y')}}</span>
                                    <span class="read_time">{{ $blog->created_at->diffForHumans() }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
              @empty
              @endforelse
            </div>
        </div>
    </div>
    <!--/::::::::::::::product::::::::::::::: -->

    <!--::::::::::::::product::::::::::::::: -->
    <div class="blog_service_area section_padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="blog_common_title"><a href="#">New on MyFragranceMe</a></h3>
                </div>
            </div>
            <div class="row">
                @forelse($middle_blogs as $m_blog)
                    <div class="col-lg-6 col-md-6">
                        <div class="single_service">
                            <div class="service_thumb large_thumb">
                                <a href="{{ route('single_blog',$m_blog->slug) }}">
                                    <img src="{{url('public/'.$m_blog->image)}}" alt="">
                                </a>
                            </div>
                            <div class="service_meta">
                                <h3><a href="{{ route('single_blog',$m_blog->slug) }}">
                                        {{  \Illuminate\Support\Str::limit(strip_tags($m_blog->title),60, '')}}
                                    </a></h3>
                                <p class="info">{{  \Illuminate\Support\Str::limit(strip_tags($m_blog->description),140, '...')}} </p>
                                <p class="service_bottom" title="{{ $m_blog->user->name }}">
                                    <img src="{{url('public/website')}}/img/blog/person.jpg" alt="">
                                    <span><a href="#">{{ $m_blog->user->name }}</a></span>
                                    <span class="date">{{\Carbon\Carbon::parse($m_blog->created_at)->format('l M, d, Y')}}</span>
                                    <span class="read_time">{{ $m_blog->created_at->diffForHumans() }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
    <!--/::::::::::::::product::::::::::::::: -->




    <div class="service_lists_view section_padding gray-bg">
        <div id="test" class="container">
          @forelse($bottom_blogs as $b_blog)
                <div  class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="list_img">
                            <a href="{{ route('single_blog',$b_blog->slug) }}">
                                <img src="{{url('public/'.$b_blog->image)}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single_post">
                            <div class="author">
                                <img src="{{url('public/website')}}/img/blog/big_person.jpg" alt="">
                                <p><a href="#">{{ucfirst($b_blog->user->name)}}</a></p>
                            </div>
                            <h2><a href="{{ route('single_blog',$b_blog->slug) }}">{{  \Illuminate\Support\Str::limit(strip_tags($b_blog->title),60, '')}}</a></h2>
                            <div class="meta">
                                <span class="date">{{\Carbon\Carbon::parse($b_blog->created_at)->format('l M, d, Y')}}</span>
                                <span class="category"><a href="#">{{ $b_blog->blogCategory->category_name }}</a> </span>
                                @php
                                    $blogComments = \App\BlogComment::where('blog_id',$b_blog->id)->groupBy('blog_id')->count();
                                @endphp
                                <span class="comments"><a href="#">{{$blogComments}} Comments</a></span>
                                <span class="min-read"><span class="span-reading-time rt-reading-time"><span class="rt-label rt-prefix"></span> <span class="rt-time"> {{ $b_blog->created_at->diffForHumans() }}</span> <span class="rt-label rt-postfix"></span></span></span>
                            </div>
                            <p>{{  \Illuminate\Support\Str::limit(strip_tags($b_blog->description),140, '...')}}</p>
                        </div>
                    </div>
                </div>
              @empty
            @endforelse
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="loadmore_btn text-center mt-30">
                        <a class="btnw" href="#">More Posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#test .row").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>

@endsection

@push('css')

@endpush

@push('script')

@endpush
