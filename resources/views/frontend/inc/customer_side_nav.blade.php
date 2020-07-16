<div class="sidebar sidebar--style-3 no-border stickyfill p-0">
    <div class="widget mb-0">
        <div class="widget-profile-box text-center p-3">
            @if (Auth::user()->avatar_original != null)

                <img src="{{ url('public/')}}/{{ Auth::user()->avatar_original }}" class="image rounded-circle customer_image">

            @else
                <img src="{{ url('public/')}}/frontend/images/user.png" class="image rounded-circle customer_image">
            @endif
            <div class="name">{{ Auth::user()->name }}</div>
        </div>
        <div class="sidebar-widget-title py-3">
            <span>{{__('Menu')}}</span>
        </div>
        <div class="widget-profile-menu py-3">
            <ul class="categories categories--style-3">
                <li>
                    <a href="{{ route('customerDashboard') }}" class="{{ areActiveRoutesHome(['customerDashboard'])}}">
                        <i class="la la-dashboard"></i>
                        <span class="category-name">
                            {{__('Dashboard')}}
                        </span>
                    </a>
                </li>
                @php
                $delivery_viewed = App\Order::where('user_id', Auth::user()->id)->where('delivery_viewed', 0)->get()->count();
                $payment_status_viewed = App\Order::where('user_id', Auth::user()->id)->where('payment_status_viewed', 0)->get()->count();
                $refund_request_addon = \App\Addon::where('unique_identifier', 'refund_request')->first();
                $club_point_addon = \App\Addon::where('unique_identifier', 'club_point')->first();
                @endphp
                {{-- <li>
                    <a href="{{ route('purchase_history.index') }}" class="{{ areActiveRoutesHome(['purchase_history.index'])}}">
                        <i class="la la-file-text"></i>
                        <span class="category-name">
                            {{__('Purchase History')}} @if($delivery_viewed > 0 || $payment_status_viewed > 0)<span class="ml-2" style="color:green"><strong>({{ __('New Notifications') }})</strong></span>@endif
                        </span>
                    </a>
                </li> --}}
                   <li>
                    <a href="{{ url('customer-purchase-history') }}" class="{{ areActiveRoutesHome(['purchase_history.index'])}}">
                        <i class="la la-file-text"></i>
                        <span class="category-name">
                            {{__('Purchase History')}} @if($delivery_viewed > 0 || $payment_status_viewed > 0)<span class="ml-2" style="color:green"><strong>({{ __('New Notifications') }}) </strong></span>@endif
                        </span>
                    </a>
                </li>

                @if ($refund_request_addon != null && $refund_request_addon->activated == 1)
                    <li>
                        <a href="{{ route('customer_refund_request') }}" class="{{ areActiveRoutesHome(['customer_refund_request'])}}">
                            <i class="la la-file-text"></i>
                            <span class="category-name">
                                {{__('Sent Refund Request')}}
                            </span>
                        </a>
                    </li>
                @endif

              {{--   <li>
                    <a href="{{ route('wishlists.index') }}" class="{{ areActiveRoutesHome(['wishlists.index'])}}">
                        <i class="la la-heart-o"></i>
                        <span class="category-name">
                            {{__('Wishlist')}}
                        </span>
                    </a>
                </li> --}}
                  <li>
                    <a href="{{ url('customer-wishlists') }}" class="">
                        <i class="la la-heart-o"></i>
                        <span class="category-name">
                            {{__('Wishlist')}}
                        </span>
                    </a>
                </li>
              {{--   @if (\App\BusinessSetting::where('type', 'conversation_system')->first()->value == 1)
                    @php
                        $conversation = \App\Conversation::where('sender_id', Auth::user()->id)->where('sender_viewed', 0)->get();
                    @endphp
                    <li>
                        <a href="{{ route('conversations.index') }}" class="{{ areActiveRoutesHome(['conversations.index', 'conversations.show'])}}">
                            <i class="la la-comment"></i>
                            <span class="category-name">
                                {{__('Conversations')}}
                                @if (count($conversation) > 0)
                                    <span class="ml-2" style="color:green"><strong>({{ count($conversation) }})</strong></span>
                                @endif
                            </span>
                        </a>
                    </li>
                @endif --}}
                  @if (\App\BusinessSetting::where('type', 'conversation_system')->first()->value == 1)
                    @php
                        $conversation = \App\Conversation::where('sender_id', Auth::user()->id)->where('sender_viewed', 0)->get();
                    @endphp
                    <li>
                        <a href="{{ url('customer-conversations') }}" class="{{ areActiveRoutesHome(['conversations.index', 'conversations.show'])}}">
                            <i class="la la-comment"></i>
                            <span class="category-name">
                                {{__('Conversations')}}
                                @if (count($conversation) > 0)
                                    <span class="ml-2" style="color:green"><strong>({{ count($conversation) }})</strong></span>
                                @endif
                            </span>
                        </a>
                    </li>
                @endif
              {{--   <li>
                    <a href="{{ route('profile') }}" class="{{ areActiveRoutesHome(['profile'])}}">
                        <i class="la la-user"></i>
                        <span class="category-name">
                            {{__('Manage Profile')}}
                        </span>
                    </a>
                </li> --}}
                 <li>
                    <a href="{{ url('customer-profile') }}" class="{{ areActiveRoutesHome(['profile'])}}">
                        <i class="la la-user"></i>
                        <span class="category-name">
                            {{__('Manage Profile')}}
                        </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('my-blend') }}" class="{{ areActiveRoutesHome(['my-blend'])}}">
                        <i class="la la-user"></i>
                        <span class="category-name">
                            {{__('My Blends')}}
                        </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('subscription/queue') }}" class="{{ areActiveRoutesHome(['my-subscription'])}}">
                        <i class="la la-user"></i>
                        <span class="category-name">
                            {{__('My Subscriptions')}}
                        </span>
                    </a>
                </li>
                  <li>
                    <a href="{{ url('my-compare-list') }}" class="{{ areActiveRoutesHome(['my-compare-list'])}}">
                        <i class="la la-user"></i>
                        <span class="category-name">
                            {{__('My Compare List')}}
                        </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('my-sample') }}" class="{{ areActiveRoutesHome(['my-sample'])}}">
                        <i class="la la-user"></i>
                        <span class="category-name">
                            {{__('My Samples')}}
                        </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('my-orders') }}" class="{{ areActiveRoutesHome(['my-orders'])}}">
                        <i class="la la-user"></i>
                        <span class="category-name">
                            {{__('My Orders')}}
                        </span>
                    </a>
                </li>
{{--                <li>--}}
{{--                    <a href="{{ url('my-address') }}" class="{{ areActiveRoutesHome(['my-address'])}}">--}}
{{--                        <i class="la la-user"></i>--}}
{{--                        <span class="category-name">--}}
{{--                            {{__('My Address')}}--}}
{{--                        </span>--}}
{{--                    </a>--}}
{{--                </li>--}}

                <li>
                    <a href="{{ url('recently-viewed') }}" class="{{ areActiveRoutesHome(['recently-viewed'])}}">
                        <i class="la la-user"></i>
                        <span class="category-name">
                            {{__('Recently Viewed')}}
                        </span>
                    </a>
                </li>

                @if (\App\BusinessSetting::where('type', 'wallet_system')->first()->value == 1)
                    <li>
                        <a href="{{ route('wallet.index') }}" class="{{ areActiveRoutesHome(['wallet.index'])}}">
                            <i class="la la-dollar"></i>
                            <span class="category-name">
                                {{__('My Wallet')}}
                            </span>
                        </a>
                    </li>
                @endif

                @if ($club_point_addon != null && $club_point_addon->activated == 1)
                    <li>
                        <a href="{{ route('earnng_point_for_user') }}" class="{{ areActiveRoutesHome(['earnng_point_for_user'])}}">
                            <i class="la la-dollar"></i>
                            <span class="category-name">
                                {{__('Earning Points')}}
                            </span>
                        </a>
                    </li>
                @endif

                @if (\App\Addon::where('unique_identifier', 'affiliate_system')->first() != null && \App\Addon::where('unique_identifier', 'affiliate_system')->first()->activated && Auth::user()->affiliate_user != null && Auth::user()->affiliate_user->status)
                    <li>
                        <a href="{{ route('affiliate.user.index') }}" class="{{ areActiveRoutesHome(['affiliate.user.index', 'affiliate.payment_settings'])}}">
                            <i class="la la-dollar"></i>
                            <span class="category-name">
                                {{__('Affiliate System')}}
                            </span>
                        </a>
                    </li>
                @endif
                @php
                    $support_ticket = DB::table('tickets')
                                ->where('client_viewed', 0)
                                ->where('user_id', Auth::user()->id)
                                ->count();
                @endphp
               {{--  <li>
                    <a href="{{ route('support_ticket.index') }}" class="{{ areActiveRoutesHome(['support_ticket.index'])}}">
                        <i class="la la-support"></i>
                        <span class="category-name">
                            {{__('Support Ticket')}} @if($support_ticket > 0)<span class="ml-2" style="color:green"><strong>({{ $support_ticket }} {{ __('New') }})</strong></span></span>@endif
                        </span>
                    </a>
                </li> --}}
                 <li>
                    <a href="{{ url('customer-support-ticket') }}" class="{{ areActiveRoutesHome(['support_ticket.index'])}}">
                        <i class="la la-support"></i>
                        <span class="category-name">
                            {{__('Support Ticket')}} @if($support_ticket > 0)<span class="ml-2" style="color:green"><strong>({{ $support_ticket }} {{ __('New') }})</strong></span></span>@endif
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        @if (\App\BusinessSetting::where('type', 'vendor_system_activation')->first()->value == 1)
            <div class="widget-seller-btn pt-4">
                <a href="{{ route('shops.create') }}" class="btn btn-anim-primary w-100">{{__('Be A Seller')}}</a>
            </div>
        @endif
    </div>
</div>
