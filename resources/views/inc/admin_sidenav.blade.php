<!--MAIN NAVIGATION-->
<!--===================================================-->
<nav id="mainnav-container">
    <div id="mainnav">

        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">

                    <!--Profile Widget-->
                    <!--================================-->
                    {{-- <div id="mainnav-profile" class="mainnav-profile">
                        <div class="profile-wrap text-center">
                            <div class="pad-btm">
                                <img loading="lazy"  class="img-circle img-md" src="{{ asset('img/profile-photos/1.png') }}" alt="Profile Picture">
                            </div>
                            <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                <span class="pull-right dropdown-toggle">
                                    <i class="dropdown-caret"></i>
                                </span>
                                <p class="mnp-name">{{Auth::user()->name}}</p>
                                <span class="mnp-desc">{{Auth::user()->email}}</span>
                            </a>
                        </div>
                        <div id="profile-nav" class="collapse list-group bg-trans">
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-gear icon-lg icon-fw"></i> Settings
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-information icon-lg icon-fw"></i> Help
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
                            </a>
                        </div>
                    </div> --}}


                    <!--Shortcut buttons-->
                    <!--================================-->
                    <div id="mainnav-shortcut" class="hidden">
                        <ul class="list-unstyled shortcut-wrap">
                            <li class="col-xs-3" data-content="My Profile">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                    <i class="demo-pli-male"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Messages">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                    <i class="demo-pli-speech-bubble-3"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Activity">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                    <i class="demo-pli-thunder"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Lock Screen">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                                    <i class="demo-pli-lock-2"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--================================-->
                    <!--End shortcut buttons-->


                    <ul id="mainnav-menu" class="list-group">

                        <!--Category name-->
                        {{-- <li class="list-header">Navigation</li> --}}

                        <!--Menu list item-->
                        <li class="{{ areActiveRoutes(['admin.dashboard'])}}">
                            <a class="nav-link" href="{{route('admin.dashboard')}}">
                                <i class="fa fa-home"></i>
                                <span class="menu-title">{{__('Dashboard')}}</span>
                            </a>
                        </li>

                        <!-- Product Menu -->
                        @if(Auth::user()->user_type == 'admin' || in_array('1', json_decode(Auth::user()->staff->role->permissions)))
                            <li>
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="menu-title">{{__('Products')}}</span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="{{ areActiveRoutes(['brands.index', 'brands.create', 'brands.edit'])}}">
                                        <a class="nav-link" href="{{route('brands.index')}}">{{__('Brand')}}</a>
                                    </li>
                                    <li class="{{ areActiveRoutes(['perfumes.index', 'perfumes.create', 'perfumes.edit'])}}">
                                        <a class="nav-link" href="{{route('perfumes.index')}}">{{__('Perfumer')}}</a>
                                    </li>
                                    {{-- <li class="{{ areActiveRoutes(['notecategory.index', 'notecategory.create', 'notecategory.edit'])}}">
                                        <a class="nav-link" href="{{route('notecategory.index')}}">{{__('Notes Category')}}</a>
                                    </li> --}}
                                    {{-- <li class="{{ areActiveRoutes(['topnote.index', 'topnote.create', 'topnote.edit'])}}">
                                        <a class="nav-link" href="{{route('topnote.index')}}">{{__('Top Notes')}}</a>
                                    </li>

                                    <li class="{{ areActiveRoutes(['middlenote.index', 'middlenote.create', 'middlenote.edit'])}}">
                                        <a class="nav-link" href="{{route('middlenote.index')}}">{{__('Middle Notes')}}</a>
                                    </li>

                                    <li class="{{ areActiveRoutes(['basenote.index', 'basenote.create', 'basenote.edit'])}}">
                                        <a class="nav-link" href="{{route('basenote.index')}}">{{__('Base Notes')}}</a> --}}
                                    </li>

                                    <li class="{{ areActiveRoutes(['categories.index', 'categories.create', 'categories.edit'])}}">
                                        <a class="nav-link" href="{{route('categories.index')}}">{{__('Category')}}</a>
                                    </li>
                                    <li class="{{ areActiveRoutes(['subcategories.index', 'subcategories.create', 'subcategories.edit'])}}">
                                        <a class="nav-link" href="{{route('subcategories.index')}}">{{__('Subcategory')}}</a>
                                    </li>
                                    <li class="{{ areActiveRoutes(['subsubcategories.index', 'subsubcategories.create', 'subsubcategories.edit'])}}">
                                        <a class="nav-link" href="{{route('subsubcategories.index')}}">{{__('Sub Subcategory')}}</a>
                                    </li>
                                    <li class="{{ areActiveRoutes(['products.admin', 'products.create', 'products.admin.edit'])}}">
                                        <a class="nav-link" href="{{route('products.admin')}}">{{__('In House Products')}}</a>
                                    </li>
                                    @if(\App\BusinessSetting::where('type', 'vendor_system_activation')->first()->value == 1)
                                        <li class="{{ areActiveRoutes(['products.seller', 'products.seller.edit'])}}">
                                            <a class="nav-link" href="{{route('products.seller')}}">{{__('Seller Products')}}</a>
                                        </li>
                                    @endif
                                    <li class="{{ areActiveRoutes(['product_bulk_upload.index'])}}">
                                        <a class="nav-link" href="{{route('product_bulk_upload.index')}}">{{__('Bulk Upload')}}</a>
                                    </li>
                                    @php
                                        $review_count = DB::table('reviews')
                                                    ->orderBy('code', 'desc')
                                                    ->join('products', 'products.id', '=', 'reviews.product_id')
                                                    ->where('products.user_id', Auth::user()->id)
                                                    ->where('reviews.viewed', 0)
                                                    ->select('reviews.id')
                                                    ->distinct()
                                                    ->count();
                                    @endphp
                                    <li class="{{ areActiveRoutes(['reviews.index'])}}">
                                        <a class="nav-link" href="{{route('reviews.index')}}">{{__('Product Reviews')}}@if($review_count > 0)<span class="pull-right badge badge-info">{{ $review_count }}</span>@endif</a>
                                    </li>
                                </ul>
                            </li>


                            <li>
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="menu-title">{{__('Subscription Queue')}}</span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="{{ areActiveRoutes(['duration.plan','duration.add','duration.edit'])}}">
                                        <a class="nav-link" href="{{route('duration.plan')}}">{{__('Duration Plan')}}</a>
                                    </li>

                                    <li class="{{ areActiveRoutes(['product.plan','product.plan.add', 'product.plan.edit'])}}">
                                        <a class="nav-link" href="{{route('product.plan')}}">{{__('Product Plan')}}</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="menu-title">{{__('Notes')}}</span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="{{ areActiveRoutes(['notecategory.index', 'notecategory.create', 'notecategory.edit'])}}">
                                        <a class="nav-link" href="{{route('notecategory.index')}}">{{__('Notes Category')}}</a>
                                    </li>
                                    <li class="{{ areActiveRoutes(['topnote.index', 'topnote.create', 'topnote.edit'])}}">
                                        <a class="nav-link" href="{{route('topnote.index')}}">{{__('Top Notes')}}</a>
                                    </li>

                                    <li class="{{ areActiveRoutes(['middlenote.index', 'middlenote.create', 'middlenote.edit'])}}">
                                        <a class="nav-link" href="{{route('middlenote.index')}}">{{__('Middle Notes')}}</a>
                                    </li>

                                    <li class="{{ areActiveRoutes(['basenote.index', 'basenote.create', 'basenote.edit'])}}">
                                        <a class="nav-link" href="{{route('basenote.index')}}">{{__('Base Notes')}}</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="menu-title">{{__('Packeges')}}</span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="{{ areActiveRoutes(['packegs.index', 'packegs.create', 'packeg.edit'])}}">
                                        <a class="nav-link" href="{{route('packegs.index')}}">{{__('Packeg')}}</a>
                                    </li>
                                </ul>
                            </li>

                        @endif

                        @if(Auth::user()->user_type == 'admin' || in_array('2', json_decode(Auth::user()->staff->role->permissions)))
                        <li class="{{ areActiveRoutes(['flash_deals.index', 'flash_deals.create', 'flash_deals.edit'])}}">
                            <a class="nav-link" href="{{ route('flash_deals.index') }}">
                                <i class="fa fa-bolt"></i>
                                <span class="menu-title">{{__('Flash Deal')}}</span>
                            </a>
                        </li>
                        @endif

                        @if(Auth::user()->user_type == 'admin' || in_array('3', json_decode(Auth::user()->staff->role->permissions)))
                            @php
                                $orders = DB::table('orders')
                                            ->orderBy('code', 'desc')
                                            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
                                            ->where('order_details.seller_id', \App\User::where('user_type', 'admin')->first()->id)
                                            ->where('orders.viewed', 0)
                                            ->select('orders.id')
                                            ->distinct()
                                            ->count();
                            @endphp
                        <li class="{{ areActiveRoutes(['orders.index.admin', 'orders.show'])}}">
                            <a class="nav-link" href="{{ route('orders.index.admin') }}">
                                <i class="fa fa-shopping-basket"></i>
                                <span class="menu-title">{{__('Inhouse orders')}} @if($orders > 0)<span class="pull-right badge badge-info">{{ $orders }}</span>@endif</span>
                            </a>
                        </li>
                        @endif

                        @if(Auth::user()->user_type == 'admin' || in_array('14', json_decode(Auth::user()->staff->role->permissions)))
                        <li class="{{ areActiveRoutes(['pick_up_point.order_index','pick_up_point.order_show'])}}">
                            <a class="nav-link" href="{{ route('pick_up_point.order_index') }}">
                                <i class="fa fa-money"></i>
                                <span class="menu-title">{{__('Pick-up Point Order')}}</span>
                            </a>
                        </li>
                        @endif

                        @if(Auth::user()->user_type == 'admin' || in_array('4', json_decode(Auth::user()->staff->role->permissions)))
                        <li class="{{ areActiveRoutes(['sales.index', 'sales.show'])}}">
                            <a class="nav-link" href="{{ route('sales.index') }}">
                                <i class="fa fa-money"></i>
                                <span class="menu-title">{{__('Total sales')}}</span>
                            </a>
                        </li>
                        @endif

                        @php
                            $refund_request_addon = \App\Addon::where('unique_identifier', 'refund_request')->first();
                        @endphp
                        @if ($refund_request_addon != null && $refund_request_addon->activated == 1)
                            <li>
                                <a href="#">
                                    <i class="fa fa-refresh"></i>
                                    <span class="menu-title">{{__('Refund Request')}}</span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="{{ areActiveRoutes(['refund_requests_all', 'reason_show'])}}">
                                        <a class="nav-link" href="{{route('refund_requests_all')}}">{{__('Refund Requests')}}
                                            @if(count(\App\RefundRequest::where('admin_seen',0)->get()) > 0)<span class="pull-right badge badge-info">{{ count(\App\RefundRequest::where('admin_seen',0)->get()) }}</span>@endif
                                        </a>
                                    </li>
                                    <li class="{{ areActiveRoutes(['paid_refund'])}}">
                                        <a class="nav-link" href="{{route('paid_refund')}}">{{__('Approved Refund')}}</a>
                                    </li>
                                    <li class="{{ areActiveRoutes(['refund_time_config'])}}">
                                        <a class="nav-link" href="{{route('refund_time_config')}}">{{__('Refund Configuration')}}</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if((Auth::user()->user_type == 'admin' || in_array('5', json_decode(Auth::user()->staff->role->permissions))) && \App\BusinessSetting::where('type', 'vendor_system_activation')->first()->value == 1)
                        <li>
                            <a href="#">
                                <i class="fa fa-user-plus"></i>
                                <span class="menu-title">{{__('Sellers')}}</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="{{ areActiveRoutes(['sellers.index', 'sellers.create', 'sellers.edit', 'sellers.payment_history','sellers.approved','sellers.profile_modal'])}}">
                                    @php
                                        $sellers = \App\Seller::where('verification_status', 0)->where('verification_info', '!=', null)->count();
                                        //$withdraw_req = \App\SellerWithdrawRequest::where('viewed', '0')->get();
                                    @endphp
                                    <a class="nav-link" href="{{route('sellers.index')}}">{{__('Seller List')}} @if($sellers > 0)<span class="pull-right badge badge-info">{{ $sellers }}</span> @endif</a>
                                </li>
                                <li class="{{ areActiveRoutes(['withdraw_requests_all'])}}">
                                    <a class="nav-link" href="{{ route('withdraw_requests_all') }}">{{__('Seller Withdraw Requests')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['sellers.payment_histories'])}}">
                                    <a class="nav-link" href="{{ route('sellers.payment_histories') }}">{{__('Seller Payments')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['business_settings.vendor_commission'])}}">
                                    <a class="nav-link" href="{{ route('business_settings.vendor_commission') }}">{{__('Seller Commission')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['seller_verification_form.index'])}}">
                                    <a class="nav-link" href="{{route('seller_verification_form.index')}}">{{__('Seller Verification Form')}}</a>
                                </li>
                            </ul>
                        </li>
                        @endif

                        @if(Auth::user()->user_type == 'admin' || in_array('6', json_decode(Auth::user()->staff->role->permissions)))
                        <li>
                            <a href="#">
                                <i class="fa fa-user-plus"></i>
                                <span class="menu-title">{{__('Customers')}}</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="{{ areActiveRoutes(['customers.index'])}}">
                                    <a class="nav-link" href="{{ route('customers.index') }}">{{__('Customer list')}}</a>
                                </li>
                            </ul>
                        </li>
                        @endif
                        @php
                            $conversation = \App\Conversation::where('receiver_id', Auth::user()->id)->where('receiver_viewed', '1')->get();
                        @endphp
                        <li class="{{ areActiveRoutes(['conversations.admin_index', 'conversations.admin_show'])}}">
                            <a class="nav-link" href="{{ route('conversations.admin_index') }}">
                                <i class="fa fa-comment"></i>
                                <span class="menu-title">{{__('Conversations')}}</span>
                                @if (count($conversation) > 0)
                                    <span class="pull-right badge badge-info">{{ count($conversation) }}</span>
                                @endif
                            </a>
                        </li>

                        <li class="{{ areActiveRoutes(['region'])}}">
                            <a class="nav-link" href="{{ route('region') }}">
                                <i class="fa fa-comment"></i>
                                <span class="menu-title">{{__('Region')}}</span>
                            </a>
                        </li>
                        <li class="{{ areActiveRoutes(['country'])}}">
                            <a class="nav-link" href="{{ route('country') }}">
                                <i class="fa fa-comment"></i>
                                <span class="menu-title">{{__('Country')}}</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-file"></i>
                                <span class="menu-title">{{__('Reports')}}</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="{{ areActiveRoutes(['stock_report.index'])}}">
                                    <a class="nav-link" href="{{ route('stock_report.index') }}">{{__('Stock Report')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['in_house_sale_report.index'])}}">
                                    <a class="nav-link" href="{{ route('in_house_sale_report.index') }}">{{__('In House Sale Report')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['seller_report.index'])}}">
                                    <a class="nav-link" href="{{ route('seller_report.index') }}">{{__('Seller Report')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['seller_sale_report.index'])}}">
                                    <a class="nav-link" href="{{ route('seller_sale_report.index') }}">{{__('Seller Based Selling Report')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['wish_report.index'])}}">
                                    <a class="nav-link" href="{{ route('wish_report.index') }}">{{__('Product Wish Report')}}</a>
                                </li>
                            </ul>
                        </li>

                        @if(Auth::user()->user_type == 'admin' || in_array('7', json_decode(Auth::user()->staff->role->permissions)))
                        <li>
                            <a href="#">
                                <i class="fa fa-envelope"></i>
                                <span class="menu-title">{{__('Messaging')}}</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="{{ areActiveRoutes(['newsletters.index'])}}">
                                    <a class="nav-link" href="{{route('newsletters.index')}}">{{__('Newsletters')}}</a>
                                </li>

                                @if (\App\Addon::where('unique_identifier', 'otp_system')->first() != null && \App\Addon::where('unique_identifier', 'otp_system')->first()->activated)
                                    <li class="{{ areActiveRoutes(['sms.index'])}}">
                                        <a class="nav-link" href="{{route('sms.index')}}">{{__('SMS')}}</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                        @endif

                        @if(Auth::user()->user_type == 'admin' || in_array('8', json_decode(Auth::user()->staff->role->permissions)))
                        <li>
                            <a href="#">
                                <i class="fa fa-briefcase"></i>
                                <span class="menu-title">{{__('Business Settings')}}</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="{{ areActiveRoutes(['activation.index'])}}">
                                    <a class="nav-link" href="{{route('activation.index')}}">{{__('Activation')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['payment_method.index'])}}">
                                    <a class="nav-link" href="{{ route('payment_method.index') }}">{{__('Payment method')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['smtp_settings.index'])}}">
                                    <a class="nav-link" href="{{ route('smtp_settings.index') }}">{{__('SMTP Settings')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['google_analytics.index'])}}">
                                    <a class="nav-link" href="{{ route('google_analytics.index') }}">{{__('Google Analytics')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['facebook_chat.index'])}}">
                                    <a class="nav-link" href="{{ route('facebook_chat.index') }}">{{__('Facebook Chat & Pixel')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['social_login.index'])}}">
                                    <a class="nav-link" href="{{ route('social_login.index') }}">{{__('Social Media Login')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['currency.index'])}}">
                                    <a class="nav-link" href="{{route('currency.index')}}">{{__('Currency')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['languages.index', 'languages.create', 'languages.store', 'languages.show', 'languages.edit'])}}">
                                    <a class="nav-link" href="{{route('languages.index')}}">{{__('Languages')}}</a>
                                </li>
                            </ul>
                        </li>
                        @endif

                        @if(Auth::user()->user_type == 'admin' || in_array('9', json_decode(Auth::user()->staff->role->permissions)))
                        <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i>
                                <span class="menu-title">{{__('Frontend Settings')}}</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="{{ areActiveRoutes(['home_settings.index', 'home_banners.index', 'sliders.index', 'home_categories.index', 'home_banners.create', 'home_categories.create', 'home_categories.edit', 'sliders.create','my-blend-subscription.create','blogs-category.create','blogs-category.index','blogs-category.edit','blog-posts.index','blog-posts.create','blog-posts.edit','events.index','events.create'])}}">
                                    <a class="nav-link" href="{{route('home_settings.index')}}">{{__('Home')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['header_top'])}}">
                                    <a class="nav-link" href="{{route('header_top')}}">{{__('Header News Bar')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['header_top'])}}">
                                    <a class="nav-link" href="{{route('my-blend-subscription.create')}}">{{__('My Blend & Subscription')}}</a>
                                </li>
                                {{-- Event --}}

                                <li class="{{ areActiveRoutes(['events.create','events.edit']) }}">
                                    <a class="nav-link" href="#">
                                        <span class="menu-title">{{__('Event')}}</span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li class="{{ areActiveRoutes(['events.index'])}}">
                                            <a class="nav-link" href="{{ route('events.index') }}">{{__('All Events')}}</a>
                                        </li>
                                    </ul>

                                </li>
                                {{-- Blog --}}

                                <li class="{{ areActiveRoutes(['blogs-category.create','blogs-category.edit']) }}">
                                    <a class="nav-link" href="#">
                                        <span class="menu-title">{{__('Blog')}}</span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li class="{{ areActiveRoutes(['blogs-category.index'])}}">
                                            <a class="nav-link" href="{{ route('blogs-category.index') }}">{{__('Blog Category')}}</a>
                                        </li>
                                        <li class="{{ areActiveRoutes(['blog-posts.index'])}}">
                                            <a class="nav-link" href="{{ route('blog-posts.index') }}">{{__('Blog Post')}}</a>
                                        </li>
                                    </ul>

                                </li>
                                {{-- About --}}
                                <li>
                                    <a href="#">
                                        <span class="menu-title">{{__('About')}}</span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul class="collapse">

                                        {{-- <li class="{{ areActiveRoutes(['admin.about'])}}">
                                            <a class="nav-link" href="{{ route('admin.about') }}">{{__('About')}}</a>
                                        </li> --}}
                                        <li>
                                            <a href="#">
                                                <span class="menu-title">{{__('About Us')}}</span>
                                                <i class="arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="{{ areActiveRoutes(['about_menu'])}}">
                                                    <a class="nav-link" href="{{ route('about_menu') }}">{{__('About Us Menu')}}</a>
                                                </li>
                                                <li class="{{ areActiveRoutes(['admin.about'])}}">
                                                    <a class="nav-link" href="{{ route('admin.about') }}">{{__('About us Page')}}</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="{{ areActiveRoutes(['returnpolicy.index'])}}">
                                            <a class="nav-link" href="">{{__('Blogs')}}</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="menu-title">{{__('For Press')}}</span>
                                                <i class="arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="{{ areActiveRoutes(['press_contacts.list'])}}">
                                                    <a class="nav-link" href="{{ route('press_contacts.list') }}">{{__('Press Contacts')}}</a>
                                                </li>
                                                <li class="{{ areActiveRoutes(['press_list'])}}">
                                                    <a class="nav-link" href="{{ route('press_list') }}">{{__('Press List')}}</a>
                                                </li>
                                                <li class="{{ areActiveRoutes(['press_setting'])}}">
                                                    <a class="nav-link" href="{{ route('press_setting') }}">{{__('Press Settings')}}</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="{{ areActiveRoutes(['PriceMatch'])}}">
                                            <a class="nav-link" href="{{ route('PriceMatch') }}">{{__('Price Match')}}</a>
                                        </li>

                                        <li class="{{ areActiveRoutes(['charitable_giving'])}}">
                                            <a class="nav-link" href="{{ route('charitable_giving') }}">{{__('Charitable Giving')}}</a>
                                        </li>
                                        <li class="{{ areActiveRoutes(['online_community'])}}">
                                            <a class="nav-link" href="{{ route('online_community') }}">{{__('Online Community')}}</a>
                                        </li>
                                        <li class="{{ areActiveRoutes(['authentication'])}}">
                                            <a class="nav-link" href="{{ route('authentication') }}">{{__('100% Authentication')}}</a>
                                        </li>
                                        <li class="{{ areActiveRoutes(['reward_points'])}}">
                                            <a class="nav-link" href="{{ route('reward_points') }}">{{__('Reward points program')}}</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="menu-title">{{__('Careers')}}</span>
                                                <i class="arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="{{ areActiveRoutes(['career_position'])}}">
                                                    <a class="nav-link" href="{{ route('career_position') }}">{{__('Career Positions')}}</a>
                                                </li>
                                                <li class="{{ areActiveRoutes(['admin_careers'])}}">
                                                    <a class="nav-link" href="{{ route('admin_careers') }}">{{__('Career Page')}}</a>
                                                </li>
                                                <li class="{{ areActiveRoutes(['applicants'])}}">
                                                    <a class="nav-link" href="{{ route('applicants') }}">{{__('Applicants List')}}</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>

                                </li>

                                {{-- For Business --}}
                                <li>
                                    <a href="#">
                                        <span class="menu-title">{{__('For Business')}}</span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul class="collapse">

                                        {{-- contact --}}
                                        <li class="{{ areActiveRoutes(['contact.list'])}}">
                                            <a class="nav-link" href="{{ route('contact.list') }}">
                                                <span class="menu-title">{{__('For Business')}} </span>
                                            </a>
                                        </li>
                                        {{-- blogger --}}
                                        <li class="{{ areActiveRoutes(['blogger.list'])}}">
                                            <a class="nav-link" href="{{ route('blogger.list') }}">
                                                <span class="menu-title">{{__('Bloggers List')}} </span>
                                            </a>
                                        </li>
                                        {{-- Idea --}}
                                        <li class="{{ areActiveRoutes(['idea.list'])}}">
                                            <a class="nav-link" href="{{ route('idea.list') }}">
                                                <span class="menu-title">{{__('Idea List')}} </span>
                                            </a>
                                        </li>
                                        {{-- Personal Request --}}
                                        <li class="{{ areActiveRoutes(['personal_requests.list'])}}">
                                            <a class="nav-link" href="{{ route('personal_requests.list') }}">
                                                <span class="menu-title">{{__('Personal Request')}} </span>
                                            </a>
                                        </li>
                                        {{-- Request Fragrance --}}
                                        <li class="{{ areActiveRoutes(['request_fragrance'])}}">
                                            <a class="nav-link" href="{{ route('request_fragrance') }}">
                                                <span class="menu-title">{{__('Request Fragrance')}} </span>
                                            </a>
                                        </li>
                                        {{-- Subscription Agreement --}}
                                        <li class="{{ areActiveRoutes(['subscription_agreement'])}}">
                                            <a class="nav-link" href="{{ route('subscription_agreement') }}">
                                                <span class="menu-title">{{__('Subscription Agreement')}} </span>
                                            </a>
                                        </li>


                                        {{-- distributor --}}
                                        <li class="{{ areActiveRoutes(['distributor.list'])}}">
                                            <a class="nav-link" href="{{ route('distributor.list') }}">
                                                <span class="menu-title">{{__('Distributor List')}} </span>
                                            </a>
                                        </li>
                                        {{-- Your Feedback --}}
                                        <li class="{{ areActiveRoutes(['feedback.list'])}}">
                                            <a class="nav-link" href="{{ route('feedback.list') }}">
                                                <span class="menu-title">{{__('Feedbacks')}} </span>
                                            </a>
                                        </li>

                                    </ul>

                                </li>
                                {{-- Online Shopping --}}
                                <li>
                                    <a href="#">
                                        <span class="menu-title">{{__('Online Shopping')}}</span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul class="collapse">

                                        <li class="{{ areActiveRoutes(['online_shopping'])}}">
                                            <a class="nav-link" href="{{route('online_shopping')}}">{{__('Online Shopping')}}</a>
                                        </li>
                                        <li class="{{ areActiveRoutes(['refund_policy'])}}">
                                            <a class="nav-link" href="{{route('refund_policy')}}">{{__('Return/Refund Policy')}}</a>
                                        </li>
                                        <li class="{{ areActiveRoutes(['shipping_policy'])}}">
                                            <a class="nav-link" href="{{route('shipping_policy')}}">{{__('Shipping Policy')}}</a>
                                        </li>
                                        <li class="{{ areActiveRoutes(['terms_condition'])}}">
                                            <a class="nav-link" href="{{route('terms_condition')}}">{{__('Terms & Conditions')}}</a>
                                        </li>
                                        <li class="{{ areActiveRoutes(['privacy_policy'])}}">
                                            <a class="nav-link" href="{{route('privacy_policy')}}">{{__('Privacy Policy')}}</a>
                                        </li>
                                        <li class="{{ areActiveRoutes(['how_to_shop'])}}">
                                            <a class="nav-link" href="{{route('how_to_shop')}}">{{__('How To Shop')}}</a>
                                        </li>
                                        <li class="{{ areActiveRoutes(['consumer_rights'])}}">
                                            <a class="nav-link" href="{{route('consumer_rights')}}">{{__('Consumer Rights')}}</a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <span class="menu-title">{{__('FAQ')}}</span>
                                                <i class="arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="{{ areActiveRoutes(['faq_category'])}}">
                                                    <a class="nav-link" href="{{ route('faq_category') }}">{{__('FAQ Category')}}</a>
                                                </li>
                                                <li class="{{ areActiveRoutes(['faq'])}}">
                                                    <a class="nav-link" href="{{ route('faq') }}">{{__('FAQ List')}}</a>
                                                </li>
                                                <li class="{{ areActiveRoutes(['press_setting'])}}">
                                                    <a class="nav-link" href="{{ route('press_setting') }}">{{__('Press Settings')}}</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="{{ areActiveRoutes(['accessibility'])}}">
                                            <a class="nav-link" href="{{route('accessibility')}}">{{__('Accessibility ')}}</a>
                                        </li>
                                        <li class="{{ areActiveRoutes(['user_agreement'])}}">
                                            <a class="nav-link" href="{{route('user_agreement')}}">{{__('User Agreement')}}</a>
                                        </li>
                                        <li class="{{ areActiveRoutes(['cookies'])}}">
                                            <a class="nav-link" href="{{route('cookies')}}">{{__('Cookies')}}</a>
                                        </li>
                                    </ul>

                                </li>


                                <li class="{{ areActiveRoutes(['links.index', 'links.create', 'links.edit'])}}">
                                    <a class="nav-link" href="{{route('links.index')}}">{{__('Useful Link')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['generalsettings.index'])}}">
                                    <a class="nav-link" href="{{route('generalsettings.index')}}">{{__('General Settings')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['generalsettings.logo'])}}">
                                    <a class="nav-link" href="{{route('generalsettings.logo')}}">{{__('Logo Settings')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['background_image'])}}">
                                    <a class="nav-link" href="{{route('background_image')}}">{{__('Background Settings')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['generalsettings.color'])}}">
                                    <a class="nav-link" href="{{route('generalsettings.color')}}">{{__('Color Settings')}}</a>
                                </li>
                            </ul>
                        </li>
                        @endif

                        @if(Auth::user()->user_type == 'admin' || in_array('12', json_decode(Auth::user()->staff->role->permissions)))
                        <li>
                            <a href="#">
                                <i class="fa fa-gear"></i>
                                <span class="menu-title">{{__('E-commerce Setup')}}</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="{{ areActiveRoutes(['attributes.index','attributes.create','attributes.edit'])}}">
                                    <a class="nav-link" href="{{route('attributes.index')}}">{{__('Attribute')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['coupon.index','coupon.create','coupon.edit'])}}">
                                    <a class="nav-link" href="{{route('coupon.index')}}">{{__('Coupon')}}</a>
                                </li>
                                <li>
                                    <li class="{{ areActiveRoutes(['pick_up_points.index','pick_up_points.create','pick_up_points.edit'])}}">
                                        <a class="nav-link" href="{{route('pick_up_points.index')}}">{{__('Pickup Point')}}</a>
                                    </li>
                                </li>
                            </ul>
                        </li>
                        @endif

                        @if (\App\Addon::where('unique_identifier', 'affiliate_system')->first() != null && \App\Addon::where('unique_identifier', 'affiliate_system')->first()->activated)
                            <li>
                                <a href="#">
                                    <i class="fa fa-link"></i>
                                    <span class="menu-title">{{__('Affiliate System')}}</span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="{{ areActiveRoutes(['affiliate.configs'])}}">
                                        <a class="nav-link" href="{{route('affiliate.configs')}}">{{__('Affiliate Configurations')}}</a>
                                    </li>
                                    <li class="{{ areActiveRoutes(['affiliate.index'])}}">
                                        <a class="nav-link" href="{{route('affiliate.index')}}">{{__('Affiliate Options')}}</a>
                                    </li>
                                    <li class="{{ areActiveRoutes(['affiliate.users', 'affiliate_users.show_verification_request', 'affiliate_user.payment_history'])}}">
                                        <a class="nav-link" href="{{route('affiliate.users')}}">{{__('Affiliate Users')}}</a>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        @if (\App\Addon::where('unique_identifier', 'offline_payment')->first() != null && \App\Addon::where('unique_identifier', 'offline_payment')->first()->activated)
                            <li>
                                <a href="#">
                                    <i class="fa fa-link"></i>
                                    <span class="menu-title">{{__('Offline Payment System')}}</span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="{{ areActiveRoutes(['manual_payment_methods.index', 'manual_payment_methods.create', 'manual_payment_methods.edit'])}}">
                                        <a class="nav-link" href="{{ route('manual_payment_methods.index') }}">{{__('Manual Payment Methods')}}</a>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        @if (\App\Addon::where('unique_identifier', 'club_point')->first() != null && \App\Addon::where('unique_identifier', 'club_point')->first()->activated)
                            <li>
                                <a href="#">
                                    <i class="fa fa-btc"></i>
                                    <span class="menu-title">{{__('Club Point System')}}</span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="{{ areActiveRoutes(['club_points.configs'])}}">
                                        <a class="nav-link" href="{{route('club_points.configs')}}">{{__('Club Point Configurations')}}</a>
                                    </li>
                                    <li class="{{ areActiveRoutes(['set_product_points', 'product_club_point.edit'])}}">
                                        <a class="nav-link" href="{{route('set_product_points')}}">{{__('Set Product Point')}}</a>
                                    </li>
                                    <li class="{{ areActiveRoutes(['club_points.index', 'club_point.details'])}}">
                                        <a class="nav-link" href="{{route('club_points.index')}}">{{__('User Points')}}</a>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        @if (\App\Addon::where('unique_identifier', 'otp_system')->first() != null && \App\Addon::where('unique_identifier', 'otp_system')->first()->activated)
                            <li>
                                <a href="#">
                                    <i class="fa fa-mobile"></i>
                                    <span class="menu-title">{{__('OTP System')}}</span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="{{ areActiveRoutes(['otp.configconfiguration'])}}">
                                        <a class="nav-link" href="{{route('otp.configconfiguration')}}">{{__('OTP Configurations')}}</a>
                                    </li>
                                    <li class="{{ areActiveRoutes(['otp_credentials.index'])}}">
                                        <a class="nav-link" href="{{route('otp_credentials.index')}}">{{__('Set OTP Credentials')}}</a>
                                    </li>
                                </ul>
                            </li>
                        @endif



                        @if(Auth::user()->user_type == 'admin' || in_array('13', json_decode(Auth::user()->staff->role->permissions)))
                            @php
                                $support_ticket = DB::table('tickets')
                                            ->where('viewed', 0)
                                            ->select('id')
                                            ->count();
                            @endphp
                        <li class="{{ areActiveRoutes(['support_ticket.admin_index', 'support_ticket.admin_show'])}}">
                            <a class="nav-link" href="{{ route('support_ticket.admin_index') }}">
                                <i class="fa fa-support"></i>
                                <span class="menu-title">{{__('Suppot Ticket')}} @if($support_ticket > 0)<span class="pull-right badge badge-info">{{ $support_ticket }}</span>@endif</span>
                            </a>
                        </li>
                        @endif

                        @if(Auth::user()->user_type == 'admin' || in_array('11', json_decode(Auth::user()->staff->role->permissions)))
                        <li class="{{ areActiveRoutes(['seosetting.index'])}}">
                            <a class="nav-link" href="{{ route('seosetting.index') }}">
                                <i class="fa fa-search"></i>
                                <span class="menu-title">{{__('SEO Setting')}}</span>
                            </a>
                        </li>
                        @endif


                        {{-- @if(Auth::user()->user_type == 'admin' || in_array('15', json_decode(Auth::user()->staff->role->permissions)))
                            <li class="{{ areActiveRoutes(['addons.index', 'addons.create'])}}">
                                <a class="nav-link" href="{{ route('addons.index') }}">
                                    <i class="fa fa-wrench"></i>
                                    <span class="menu-title">{{__('Addon Manager')}}</span>
                                </a>
                            </li>
                        @endif --}}

                        <li class=" ">
                            <a class="nav-link" href="{{route('subscribed.index')}}">
                                <i class="fa fa-mail-forward"></i>
                                <span class="menu-title">{{__('Subscribed Emails')}}</span>
                            </a>
                        </li>
                         @if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions)))
                        <li>
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span class="menu-title">{{__('Finance')}}</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                 <li class="{{ areActiveRoutes(['manage-forecast'])}}">
                                    <a class="nav-link" href="{{ route('manage-forecast') }}">{{__(' Manage Forecast')}}</a>
                                </li>
                                 <li class="{{ areActiveRoutes(['staffs.index', 'staffs.create', 'staffs.edit'])}}">
                                    <a class="nav-link" href="{{ route('staffs.index') }}">{{__('Add Budget')}}</a>
                                </li>
                                 <li class="{{ areActiveRoutes(['staffs.index', 'staffs.create', 'staffs.edit'])}}">
                                    <a class="nav-link" href="{{ route('staffs.index') }}">{{__(' Manage Budget')}}</a>
                                </li>
                                 <li class="{{ areActiveRoutes(['staffs.index', 'staffs.create', 'staffs.edit'])}}">
                                    <a class="nav-link" href="{{ route('staffs.index') }}">{{__('Monthly Forecast')}}</a>
                                </li>
                                 <li class="{{ areActiveRoutes(['roles.index', 'roles.create', 'roles.edit'])}}">
                                    <a class="nav-link" href="{{route('roles.index')}}">{{__('Monthly Budget')}}</a>
                                </li>
                                  <li class="{{ areActiveRoutes(['staffs.index', 'staffs.create', 'staffs.edit'])}}">
                                    <a class="nav-link" href="{{ route('staffs.index') }}">{{__('Yearly Forecast')}}</a>
                                </li>
                                 <li class="{{ areActiveRoutes(['roles.index', 'roles.create', 'roles.edit'])}}">
                                    <a class="nav-link" href="{{route('roles.index')}}">{{__('Yearly Budget')}}</a>
                                </li>

                            </ul>
                        </li>
                        @endif
                            @if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions)))
                        <li>
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span class="menu-title">{{__('Account')}}</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">

                                 <li class="{{ areActiveRoutes(['staffs.index', 'staffs.create', 'staffs.edit'])}}">
                                    <a class="nav-link" href="{{ route('staffs.index') }}">{{__('Monthly Statement')}}</a>
                                </li>
                                 <li class="{{ areActiveRoutes(['staffs.index', 'staffs.create', 'staffs.edit'])}}">
                                    <a class="nav-link" href="{{ route('staffs.index') }}">{{__(' Yearly Statement')}}</a>
                                </li>
                                </li>

                            </ul>
                        </li>
                        @endif
                        @if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions)))
                        <li>
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span class="menu-title">{{__('HRM')}}</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                 <li class="{{ areActiveRoutes(['doc.index', 'doc.create', 'doc.edit'])}}">
                                    <a class="nav-link" href="{{route('doc.index')}}">{{__('Office Doc File')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['department.index', 'department.create', 'department.edit'])}}">
                                    <a class="nav-link" href="{{ route('department.index') }}">{{__('Department')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['designation.index', 'designation.create', 'designation.edit'])}}">
                                    <a class="nav-link" href="{{ route('designation.index') }}">{{__('Designation')}}</a>
                                </li>
                                  <li class="{{ areActiveRoutes(['staff_profile.index', 'staff_profile.create', 'staff_profile.edit'])}}">
                                    <a class="nav-link" href="{{ route('staff_profile.index') }}">{{__('Staff Profile')}}</a>
                                </li>

                                 <li class="{{ areActiveRoutes(['staffs.index', 'staffs.create', 'staffs.edit'])}}">
                                    <a class="nav-link" href="{{ route('staffs.index') }}">{{__('Role Assign')}}</a>
                                </li>
                             {{--     <li class="{{ areActiveRoutes(['staffs.index', 'staffs.create', 'staffs.edit'])}}">
                                    <a class="nav-link" href="{{ route('staffs.index') }}">{{__('Attendance')}}</a>
                                </li>
                                 <li class="{{ areActiveRoutes(['staffs.index', 'staffs.create', 'staffs.edit'])}}">
                                    <a class="nav-link" href="{{ route('staffs.index') }}">{{__('Commission')}}</a>
                                </li> --}}
                                 <li class="{{ areActiveRoutes(['roles.index', 'roles.create', 'roles.edit'])}}">
                                    <a class="nav-link" href="{{route('roles.index')}}">{{__('Staff permissions')}}</a>
                                </li>

                            </ul>
                        </li>
                        @endif
                             @if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions)))
                        <li>
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span class="menu-title">{{__('Legal')}}</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="{{ areActiveRoutes(['legal-file-types.index', 'legal-file-types.create', 'legal-file-types.edit'])}}">
                                    <a class="nav-link" href="{{route('legal-file-types.index')}}">{{__('File type')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['legal-file-manager.index', 'legal-file-manager.create', 'legal-file-types.edit'])}}">
                                    <a class="nav-link" href="{{route('legal-file-manager.index')}}">{{__('File manage')}}</a>
                                </li>
                            </ul>
                        </li>
                        @endif

                          @if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions)))
                        <li>
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span class="menu-title">{{__('Expense')}}</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="{{ areActiveRoutes(['expense-category.index','expense-category.create','expense-category.edit'])}}">
                                    <a class="nav-link" href="{{ route('expense-category.index') }}">{{__('Category')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['expense-subcategory.index','expense-subcategory.create','expense-subcategory.edit'])}}">
                                    <a class="nav-link" href="{{ route('expense-subcategory.index') }}">{{__('Sub-category')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['expense.index', 'expense.create', 'expense.edit'])}}">
                                    <a class="nav-link" href="{{ route('expense.index') }}">{{__('Expense Item')}}</a>
                                </li>

                                <li class="{{ areActiveRoutes(['expense.statement', 'expense.statement', 'expense.statement'])}}">
                                    <a class="nav-link" href="{{route('expense.statement')}}">{{__('Expense Statement')}}</a>
                                </li>
                            </ul>
                        </li>
                        @endif
                          @if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions)))
                        <li>
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span class="menu-title">{{__('Bank')}}</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="{{ areActiveRoutes(['bank.index', 'bank.create', 'bank.edit'])}}">
                                    <a class="nav-link" href="{{ route('bank.index') }}">{{__('Add Bank')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['banktransaction.index', 'banktransaction.create', 'banktransaction.edit'])}}">
                                    <a class="nav-link" href="{{route('banktransaction.index')}}">{{__('Bank Transaction')}}</a>
                                </li>
                                 <li class="{{ areActiveRoutes(['bankledger.index'])}}">
                                    <a class="nav-link" href="{{route('bankledger.index')}}">{{__('Bank Ledger Report')}}</a>
                                </li>
                            </ul>
                        </li>
                        @endif
                         @if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions)))
                        <li>
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span class="menu-title">{{__('Tax')}}</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">

                                <li class="{{ areActiveRoutes(['tax.index', 'tax.create', 'tax.edit'])}}">
                                    <a class="nav-link" href="{{route('tax.index')}}">{{__('Add Income Tax')}}</a>
                                </li>
                                 <li class="{{ areActiveRoutes(['roles.index', 'roles.create', 'roles.edit'])}}">
                                    <a class="nav-link" href="{{route('roles.index')}}">{{__('Tax Report')}}</a>
                                </li>
                                 <li class="{{ areActiveRoutes(['roles.index', 'roles.create', 'roles.edit'])}}">
                                    <a class="nav-link" href="{{route('roles.index')}}">{{__('Invoice Wise Tax Report')}}</a>
                                </li>
                            </ul>
                        </li>
                        @endif
                            @if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions)))
                        <li>
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span class="menu-title">{{__('Supplier')}}</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">

                                 <li class="{{ areActiveRoutes(['supplier.index', 'supplier.create', 'supplier.edit'])}}">
                                    <a class="nav-link" href="{{ route('supplier.index') }}">{{__('Add Supplier')}}</a>
                                </li>
                                 <li class="{{ areActiveRoutes(['staffs.index', 'staffs.create', 'staffs.edit'])}}">
                                    <a class="nav-link" href="{{ route('staffs.index') }}">{{__(' Supplier Ledger')}}</a>
                                </li>
                                 <li class="{{ areActiveRoutes(['staffs.index', 'staffs.create', 'staffs.edit'])}}">
                                    <a class="nav-link" href="{{ route('staffs.index') }}">{{__(' Supplier Advance')}}</a>
                                </li>
                                </li>
                            </ul>
                        </li>
                        @endif
                          @if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions)))
                        <li>
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span class="menu-title">{{__('Raw Materials')}}</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">

                                 <li class="{{ areActiveRoutes(['raw.category.index'])}}">
                                    <a class="nav-link" href="{{ route('raw.category.index') }}">{{__('Raw Category')}}</a>
                                </li>
                                 <li class="{{ areActiveRoutes(['raw.unit.index'])}}">
                                    <a class="nav-link" href="{{ route('raw.unit.index') }}">{{__(' Raw Unit')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['raw.create'])}}">
                                    <a class="nav-link" href="{{ route('raw.create')}}">{{__(' Add Raw ')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['raw.index'])}}">
                                    <a class="nav-link" href="{{ route('raw.index')}}">{{__(' Manage Raw')}}</a>
                                </li>
                               
                            </ul>
                        </li>
                        @endif
                            @if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions)))
                        <li>
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span class="menu-title">{{__('Purchase')}}</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">

                                 <li class="{{ areActiveRoutes(['purchase.index', 'purchase.create', 'purchase.edit'])}}">
                                    <a class="nav-link" href="{{ route('purchase.index') }}">{{__('Add Purchase')}}</a>
                                </li>
                                </li>

                            </ul>
                        </li>
                        @endif

                        @if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions)))
                            <li>
                                <a href="#">
                                    <i class="fa fa-money"></i>
                                    <span class="menu-title">{{__('Return')}}</span>
                                    <i class="arrow"></i>
                                </a>
                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="{{ areActiveRoutes(['staffs.index', 'staffs.create', 'staffs.edit'])}}">
                                        <a class="nav-link" href="{{ route('staffs.index') }}">{{__('Return')}}</a>
                                    </li>
                                    <li class="{{ areActiveRoutes(['roles.index', 'roles.create', 'roles.edit'])}}">
                                        <a class="nav-link" href="{{route('roles.index')}}">{{__('Stock Return List')}}</a>
                                    </li>
                                    <li class="{{ areActiveRoutes(['roles.index', 'roles.create', 'roles.edit'])}}">
                                        <a class="nav-link" href="{{route('roles.index')}}">{{__('Supplier Return List')}}</a>
                                    </li>
                                    <li class="{{ areActiveRoutes(['roles.index', 'roles.create', 'roles.edit'])}}">
                                        <a class="nav-link" href="{{route('roles.index')}}">{{__('Wastage Return List')}}</a>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        @include('inc.purchases_menu')
                    </ul>
                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>
