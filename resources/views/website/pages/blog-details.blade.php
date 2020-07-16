@extends('website.layouts.master')
@section('title',@$singleBlog->title)
@php
    $setting= App\GeneralSetting::first();
@endphp
@section('content')
    <div class="blog-details section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-md-12">

                    <div class="blog-title mb-30">
                        <h2> {{ $singleBlog->title }}</h2>
                    </div>
                    <div class="blog-date mb-40">
                        <p> {{\Carbon\Carbon::parse($singleBlog->created_at)->format('l M, d, Y')}} <span>I</span> <span>{{ $singleBlog->created_at->diffForHumans() }}</span></p>
                    </div>
                    <div class="blog-img mb-40">
                        <img src="{{url('public/'.$singleBlog->image)}}" alt="">
                    </div>
                    <div class="blog-meta mb-30">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="author">
                                    @php
                                        $blogComments = \App\BlogComment::where('blog_id',$singleBlog->id)->groupBy('blog_id')->count();
                                    @endphp
                                    <p style="float:left;">Author: <a href="">{{ ucfirst($singleBlog->user->name) }}</a> | <p for="comments">&nbsp;&nbsp; {{$blogComments}} Comments </p>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="share float-right">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-google"></i></a>
                                    <a href=""><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-text mb-60">
                        <p>{!! $singleBlog->description !!}</p>
                    </div>


                    <div class="blog_service_area">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="blog_common_title"><a href="#">Related Post</a></h3>
                                </div>
                            </div>
                            <div class="row">
                                @forelse($related_post as $related)
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_service">
                                        <div class="service_thumb">
                                            <a href="{{ route('single_blog',$related->slug) }}">
                                                <img src="{{url('public/'.$related->image)}}" alt="">
                                            </a>
                                        </div>
                                        <div class="service_meta">
                                            <h4><a href="{{ route('single_blog',$related->slug) }}">
                                                    {{  \Illuminate\Support\Str::limit(strip_tags($related->title),40, '')}}
                                                </a></h4>
                                            <p class="service_bottom">
                                                <img src="img/blog/person.jpg" alt="">
                                                <span><a href="blog-details.html">{{ ucfirst($related->user->name) }}</a></span>
                                                <span class="date">{{\Carbon\Carbon::parse($related->created_at)->format('l M, d, Y')}}</span>
                                                <span class="read_time">{{ $related->created_at->diffForHumans() }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                    @empty
                                    <p style="margin-left: 5%">No related post.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                       @foreach($comments as $comment)
                           <div  class="comment ">
                               <div class="comment-author vcard">
                                   <img src="https://secure.gravatar.com/avatar/5ef9b464b4d01111f1ad96540f59b2da?s=40&amp;d=https%3A%2F%2Fi0.wp.com%2Fwww.scentbird.com%2Fblog%2Fwp-content%2Fuploads%2F2017%2F03%2F74x74.gif%3Ffit%3D40%252C40%26ssl%3D1&amp;r=g" width="40" height="40" alt="Avatar" class="avatar avatar-40wp-user-avatar wp-user-avatar-40 alignnone photo avatar-default grav-hashed grav-hijack" id="grav-5ef9b464b4d01111f1ad96540f59b2da-0">
                                   <h4 class="username"> <a href="http://localhost/myfrag/admin/frontend_settings/home" rel="external nofollow ugc" class="url">{{$comment->name}}</a></h4>
                                   <div class="userdate">
                                       <time datetime="2020-05-30T06:03:56-04:00">
                                           {{\Carbon\Carbon::parse($comment->created_at)->format('l M, d, Y')}} | {{ $comment->created_at->diffForHumans() }}
                                       </time>
                                   </div>
                               </div>
                               <br>
                               <div class="comment-content">
                                   <p class="userwriting">" {{$comment->comments}} "</p>
                                   <p><a style="color: #0ab1fc" href="{{$comment->url}}" target="_blank">{{$comment->url}}</a></p>
                               </div>
                               <div class="usercommentmeta">
                                   <div class="userreply">
                                       <a rel="nofollow" class="comment-reply-link" href="#comment-39378" data-commentid="39378" data-postid="19467" data-belowelement="comment-39378" data-respondelement="respond" aria-label="<div class=&quot;icon-action-undo comment-reply&quot;></div> to dssdf"><div class="icon-action-undo comment-reply"></div></a>
                                   </div>
                               </div>
                           </div>
                       @endforeach
                    <div class="blog-comment">
                        <h2>Leave a comment</h2>
                        <form id="blog_comment_form" action="{{route('blog-comments.store')}}" method="post" class="row">
                            @csrf
                            <input type="hidden" name="blog_id" value="{{$singleBlog->id}}">
                            @if(Auth::check())
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            @endif
                            <div class="col-xl-12">
                                <textarea class="default" name="comments" id="comments" rows="2" placeholder="Your Comment here" required></textarea>
                            </div>
                            <div class="col-xl-7 col-md-12">
                                <input class="default" type="text" placeholder="Name" name="name" id="comment_name" required>
                            </div>
                            <div class="col-xl-7 col-md-12">
                                <input class="default" type="email" placeholder="Email" name="email" id="comment_email" required>
                            </div>
                            <div class="col-xl-7 col-md-12">
                                <input class="default" type="text" placeholder="URL(Optional)" name="url" id="comment_url">
                            </div>
                            <div class="col-xl-7 col-md-12">
                                <input type="checkbox" id="notify_comment" name="is_notify_post_by_mail" value="1">
                                <label for="notify_comment">Notify me of follow-up comments by email.</label>
                            </div>
                            <div class="col-xl-7 col-md-12">
                                <input type="checkbox" id="notify_email" name="is_notify_pcomment_by_mail" value="1">
                                <label for="notify_email">Notify me of new posts by email.</label>
                            </div>
                            <div class="col-xl-7 col-md-12">
                                @if(Auth::check())
                                    <button style="border-radius: 0px;" type="submit" class="btn btn-dark btn-lg">Post Comment</button>
                                    @else
                                    <a href="{{route('customersLogin')}}" style="border-radius: 0px;" type="submit" class="btn btn-dark btn-lg">Post Comment</a>
                                    @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('css')

@endpush

@push('script')

    <script>

    </script>
@endpush
