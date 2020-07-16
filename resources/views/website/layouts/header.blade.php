<header>
    <div class="header_area">
        <!-- header_top  -->
        @php
            $HeaderTop = App\HeaderTop::where('active_status', 1)->first();
            $categories = App\Category::get();
        @endphp
        <div class="header-top-links text-center">
        <p>{{@$HeaderTop->title}} <a href="{{route('learn_more')}}">@lang('Learn More.')</a></p>
        </div>
        <div class="header_top mian-wrapper">
            <div class="left-box">
                <div class="header_left">
                    <!-- logo -->
                    <div class="logo">
                        <a href="{{route('home')}}">
                            @php
                                $siteLogo = \App\GeneralSetting::select('logo')->first();
                            @endphp
                            @if($siteLogo->logo != null)
                                @if(File::exists(public_path($siteLogo->logo)))
                                    <img src="{{url('public/')}}/{{$siteLogo->logo}}" alt="">
                                @else
                                    <img src="{{url('public/website/img/logo.png')}}" alt="">
                                @endif
                            @else
                                <img src="{{url('public/website/img/logo.png')}}" alt="">
                            @endif
                        </a>
                    </div>
                </div>
            </div>

            <div class="right-box d-flex flex-wrap">
                <div class="header_middle">
                    <form action="{{route('searchProduct')}}" method="get">

                        <div class="select_cat">
                            <div class="category-btn  d-none d-md-block">
                                <span>All<i class="ti-angle-down arrow-icon"></i></span>
                                <!-- Main-menu -->
                                <div class="menu-wrapper">
                                    <div class="main-menu ">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="#">All</a>
                                                <li><a href="{{route('myblend')}}">My Blend</a>
                                                <li><a href="{{url('/notes')}}">Notes</a>
                                                <li><a href="{{url('/brands')}}">Brands</a>
                                                <li><a href="{{url('subscription')}}">Subscription</a>
                                                <li><a href="{{url('/perfumers')}}">Perfumers</a>
                                                <li><a href="{{url('/colors')}}">Colors</a>
                                                <li><a href="#"  data-toggle="modal" data-target="#addcategory">Barcode</a>
                                                @php
                                                    $categories = DB::table('categories')->orderBy('top', 'ASC')->get();
                                                    foreach ($categories as $category) {
                                                        $sub_categories=  DB::table('sub_categories')->where('category_id', $category->id)->get();
                                                        if($sub_categories->count()>0){
                                                @endphp
                                                <li  class="arrow"><a href="{{url('categoryProduct')}}/{{$category->id}}/{{$category->name}}">{{$category->name}} <i class="fa fa-caret-right"></i></a>
                                                    <ul class="submenu">
                                                        @php
                                                            foreach ($sub_categories as $sub_category) {
                                                        @endphp
                                                        <li><a href="{{url('categoryProduct')}}/{{$sub_category->id}}/{{$sub_category->name}}">{{$sub_category->name}}</a>
                                                        @php
                                                            }
                                                        @endphp
                                                    </ul>
                                                </li>
                                                @php

                                                    }else{

                                                @endphp
                                                <li><a href="{{url('categoryProduct')}}/{{$category->id}}/{{$category->name}}">{{$category->name}}</a></li>
                                            @php
                                                }
                                            }
                                            @endphp
                                        </nav>
                                    </div>
                                </div>
                            </div>

                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                            <!-- Header End -->
                        </div>
                        <div class="input_field">
                            <input type="text" placeholder="Discover The World of Fragrance" name="keyword">
                        </div>
                        <button type="submit">
                            <i class="ti-search"></i>
                        </button>
                    </form>
                </div>
                <div class="header_right">
                    <!-- Language -->
                    <div class="lang_currency list_item_currency">
                        <a href="#">
                            <div class="flag-icon">
                            <img src="http://localhost/myfrag/public/website/img/f2.jpg" alt="">
                            </div>
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <div class="language_list_content">
                            <p>Change language <a href="#">learn more</a></p>
                            <ul class="lang_lists" id="lang_lists">
                                @foreach (\App\Language::all() as $key => $language)
                                    <li><a href="#" id="{{ $language->code }}" class="{{ $language->code }}">{{ $language->name }} - {{ $language->code }}</a></li>
                                @endforeach
                            </ul>
                            <p>Change currency <a href="language-learn-more.html">Learn more</a></p>
                            <p class="d-flex justify-content-between align-items-center"> <span>$ - USD - U.S. Dollar</span> <a href="#">Change</a> </p>
                            <p class="text-center border-tops"> <span><a href="country-region">Change country/region.</a></span> </p>

                        </div>
                    </div>
                    <!-- end Language -->
                    <!-- Sin in -->
                    <div class="lang_currency accounts_wrap">
                        <a href="#">
                            @if(Auth::check())
                                <span  class="main_line">Hello,<b>{{@Auth::user()->full_name}}</b> </span>
                                <span class="sub_line">Account & List</span>
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            @else
                                <a href="{{url('customer-login')}}" class="boxed_btn">Sign in</a>
                                <p>New Customer ?<a href="{{url('customer-register')}}">Create Account</a></p>
                            @endif

                        </a>
                        <div class="account_list_wrap">
                            <div class="list_header text-center">
                                @if(Auth::check())
                                @else
                                    <a href="{{url('customer-login')}}" class="boxed_btn">sign in</a>
                                    <p>New Customer ?<a href="{{url('customer-register')}}">Create account</a></p>
                                @endif
                                </div>
                            <div class="list_contet">
                                <div class="single_list">
                                    <h4>My List </h4>
                                    <li><a href="{{url('my-blend') }}">My Blend </a></li>
                                    <li><a href="{{url('my-subscription') }}">My Subscription  </a></li>
                                    <li><a href="{{url('customer-wishlists')}}">My Wish List  </a></li>
                                    <li><a href="{{url('my-sample') }}">My Samples   </a></li>
                                    <li><a href="{{url('my-compare-list')}}">Compare List</a></li>
                                    <li><a href="{{url('recently-viewed')}}">Recently Viewed</a></li>
                                {{--  <li><a href="{{url('myblend')}}">Create List </a></li> --}}
                                </div>
                                <div class="single_list">
                                    <h4>My Account  </h4>
                                    <li><a href="{{url('customer-profile')}}">My Account  </a></li>
                                    <li><a href="{{url('my-orders') }}">My Orders</a></li>
                                    @auth
                                        <li><a href="{{route('logout')}}">Sign out </a></li>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Sin -->
                    <div class="lang_currency">
                        <a href="#">
                            <span class="main_line">Returns</span>
                            <span class="sub_line">& Orders</span>
                        </a>
                    </div>
                    <!--? Card -->
                    <div class="cart">
                        <a href="{{ route('cart') }}">
                            <img src="http://localhost/myfrag/public/website/img/card.png" alt="">
                            <span>Cart</span>
                            @if(Session::has('cart'))
                                <span> ({{ count(Session::get('cart'))}})</span>
                            @else
                                <span class="card-number">0</span>
                            @endif
                        </a>
                    </div>
                    <!-- /card end -->
                </div>
                <!--/ header_top  -->
                <div class="header_bottm">
                    <div class="header_bottm_left">
                        {{--  <p><a href="#">Blend your own fragrance </a></p>  --}}
                    </div>
                    <div class="header_bottm_right">
                        <p>
                            <a href="{{route('myblend')}}">My Blend</a>
                            <a href="{{route('notes')}}">Notes </a>
                            <a href="{{route('all-brands')}}">Brands </a>
                            <a href="{{route('subscription')}}">Subscription </a>
                            <a href="{{route('samples')}}">Samples </a>
                            <a href="{{route('perfumers')}}">Perfumers </a>
                            <a href="{{route('colors')}}">Colors </a>
                            <a href="{{route('astrology')}}">Astrology </a>
                            <a href="{{route('barcode')}}" data-toggle="modal" data-target="#addcategory">Barcode </a>
                            <a href="{{url('categoryProduct/4/accesories')}}">Accessories </a>
                            <a href="{{url('compare-list')}}">Compare List </a>
                            <a href="{{route('blogs')}}">Blogs </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--/Header Area-->


