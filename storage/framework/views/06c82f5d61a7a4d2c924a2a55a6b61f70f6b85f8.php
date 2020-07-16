<?php /* E:\xampp\htdocs\myfragmence\resources\views/inc/admin_sidenav.blade.php */ ?>
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
                        

                        <!--Menu list item-->
                        <li class="<?php echo e(areActiveRoutes(['admin.dashboard'])); ?>">
                            <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>">
                                <i class="fa fa-home"></i>
                                <span class="menu-title"><?php echo e(__('Dashboard')); ?></span>
                            </a>
                        </li>

                        <!-- Product Menu -->
                        <?php if(Auth::user()->user_type == 'admin' || in_array('1', json_decode(Auth::user()->staff->role->permissions))): ?>
                            <li>
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="menu-title"><?php echo e(__('Products')); ?></span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="<?php echo e(areActiveRoutes(['brands.index', 'brands.create', 'brands.edit'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('brands.index')); ?>"><?php echo e(__('Brand')); ?></a>
                                    </li>
                                    <li class="<?php echo e(areActiveRoutes(['perfumes.index', 'perfumes.create', 'perfumes.edit'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('perfumes.index')); ?>"><?php echo e(__('Perfumer')); ?></a>
                                    </li>
                                    
                                    
                                    </li>

                                    <li class="<?php echo e(areActiveRoutes(['categories.index', 'categories.create', 'categories.edit'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('categories.index')); ?>"><?php echo e(__('Category')); ?></a>
                                    </li>
                                    <li class="<?php echo e(areActiveRoutes(['subcategories.index', 'subcategories.create', 'subcategories.edit'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('subcategories.index')); ?>"><?php echo e(__('Subcategory')); ?></a>
                                    </li>
                                    <li class="<?php echo e(areActiveRoutes(['subsubcategories.index', 'subsubcategories.create', 'subsubcategories.edit'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('subsubcategories.index')); ?>"><?php echo e(__('Sub Subcategory')); ?></a>
                                    </li>
                                    <li class="<?php echo e(areActiveRoutes(['products.admin', 'products.create', 'products.admin.edit'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('products.admin')); ?>"><?php echo e(__('In House Products')); ?></a>
                                    </li>
                                    <?php if(\App\BusinessSetting::where('type', 'vendor_system_activation')->first()->value == 1): ?>
                                        <li class="<?php echo e(areActiveRoutes(['products.seller', 'products.seller.edit'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('products.seller')); ?>"><?php echo e(__('Seller Products')); ?></a>
                                        </li>
                                    <?php endif; ?>
                                    <li class="<?php echo e(areActiveRoutes(['product_bulk_upload.index'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('product_bulk_upload.index')); ?>"><?php echo e(__('Bulk Upload')); ?></a>
                                    </li>
                                    <?php
                                        $review_count = DB::table('reviews')
                                                    ->orderBy('code', 'desc')
                                                    ->join('products', 'products.id', '=', 'reviews.product_id')
                                                    ->where('products.user_id', Auth::user()->id)
                                                    ->where('reviews.viewed', 0)
                                                    ->select('reviews.id')
                                                    ->distinct()
                                                    ->count();
                                    ?>
                                    <li class="<?php echo e(areActiveRoutes(['reviews.index'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('reviews.index')); ?>"><?php echo e(__('Product Reviews')); ?><?php if($review_count > 0): ?><span class="pull-right badge badge-info"><?php echo e($review_count); ?></span><?php endif; ?></a>
                                    </li>
                                </ul>
                            </li>


                            <li>
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="menu-title"><?php echo e(__('Subscription Queue')); ?></span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="<?php echo e(areActiveRoutes(['duration.plan','duration.add','duration.edit'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('duration.plan')); ?>"><?php echo e(__('Duration Plan')); ?></a>
                                    </li>

                                    <li class="<?php echo e(areActiveRoutes(['product.plan','product.plan.add', 'product.plan.edit'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('product.plan')); ?>"><?php echo e(__('Product Plan')); ?></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="menu-title"><?php echo e(__('Notes')); ?></span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="<?php echo e(areActiveRoutes(['notecategory.index', 'notecategory.create', 'notecategory.edit'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('notecategory.index')); ?>"><?php echo e(__('Notes Category')); ?></a>
                                    </li>
                                    <li class="<?php echo e(areActiveRoutes(['topnote.index', 'topnote.create', 'topnote.edit'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('topnote.index')); ?>"><?php echo e(__('Top Notes')); ?></a>
                                    </li>

                                    <li class="<?php echo e(areActiveRoutes(['middlenote.index', 'middlenote.create', 'middlenote.edit'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('middlenote.index')); ?>"><?php echo e(__('Middle Notes')); ?></a>
                                    </li>

                                    <li class="<?php echo e(areActiveRoutes(['basenote.index', 'basenote.create', 'basenote.edit'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('basenote.index')); ?>"><?php echo e(__('Base Notes')); ?></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="menu-title"><?php echo e(__('Packeges')); ?></span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="<?php echo e(areActiveRoutes(['packegs.index', 'packegs.create', 'packeg.edit'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('packegs.index')); ?>"><?php echo e(__('Packeg')); ?></a>
                                    </li>
                                </ul>
                            </li>

                        <?php endif; ?>

                        <?php if(Auth::user()->user_type == 'admin' || in_array('2', json_decode(Auth::user()->staff->role->permissions))): ?>
                        <li class="<?php echo e(areActiveRoutes(['flash_deals.index', 'flash_deals.create', 'flash_deals.edit'])); ?>">
                            <a class="nav-link" href="<?php echo e(route('flash_deals.index')); ?>">
                                <i class="fa fa-bolt"></i>
                                <span class="menu-title"><?php echo e(__('Flash Deal')); ?></span>
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if(Auth::user()->user_type == 'admin' || in_array('3', json_decode(Auth::user()->staff->role->permissions))): ?>
                            <?php
                                $orders = DB::table('orders')
                                            ->orderBy('code', 'desc')
                                            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
                                            ->where('order_details.seller_id', \App\User::where('user_type', 'admin')->first()->id)
                                            ->where('orders.viewed', 0)
                                            ->select('orders.id')
                                            ->distinct()
                                            ->count();
                            ?>
                        <li class="<?php echo e(areActiveRoutes(['orders.index.admin', 'orders.show'])); ?>">
                            <a class="nav-link" href="<?php echo e(route('orders.index.admin')); ?>">
                                <i class="fa fa-shopping-basket"></i>
                                <span class="menu-title"><?php echo e(__('Inhouse orders')); ?> <?php if($orders > 0): ?><span class="pull-right badge badge-info"><?php echo e($orders); ?></span><?php endif; ?></span>
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if(Auth::user()->user_type == 'admin' || in_array('14', json_decode(Auth::user()->staff->role->permissions))): ?>
                        <li class="<?php echo e(areActiveRoutes(['pick_up_point.order_index','pick_up_point.order_show'])); ?>">
                            <a class="nav-link" href="<?php echo e(route('pick_up_point.order_index')); ?>">
                                <i class="fa fa-money"></i>
                                <span class="menu-title"><?php echo e(__('Pick-up Point Order')); ?></span>
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if(Auth::user()->user_type == 'admin' || in_array('4', json_decode(Auth::user()->staff->role->permissions))): ?>
                        <li class="<?php echo e(areActiveRoutes(['sales.index', 'sales.show'])); ?>">
                            <a class="nav-link" href="<?php echo e(route('sales.index')); ?>">
                                <i class="fa fa-money"></i>
                                <span class="menu-title"><?php echo e(__('Total sales')); ?></span>
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php
                            $refund_request_addon = \App\Addon::where('unique_identifier', 'refund_request')->first();
                        ?>
                        <?php if($refund_request_addon != null && $refund_request_addon->activated == 1): ?>
                            <li>
                                <a href="#">
                                    <i class="fa fa-refresh"></i>
                                    <span class="menu-title"><?php echo e(__('Refund Request')); ?></span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="<?php echo e(areActiveRoutes(['refund_requests_all', 'reason_show'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('refund_requests_all')); ?>"><?php echo e(__('Refund Requests')); ?>

                                            <?php if(count(\App\RefundRequest::where('admin_seen',0)->get()) > 0): ?><span class="pull-right badge badge-info"><?php echo e(count(\App\RefundRequest::where('admin_seen',0)->get())); ?></span><?php endif; ?>
                                        </a>
                                    </li>
                                    <li class="<?php echo e(areActiveRoutes(['paid_refund'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('paid_refund')); ?>"><?php echo e(__('Approved Refund')); ?></a>
                                    </li>
                                    <li class="<?php echo e(areActiveRoutes(['refund_time_config'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('refund_time_config')); ?>"><?php echo e(__('Refund Configuration')); ?></a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                        <?php if((Auth::user()->user_type == 'admin' || in_array('5', json_decode(Auth::user()->staff->role->permissions))) && \App\BusinessSetting::where('type', 'vendor_system_activation')->first()->value == 1): ?>
                        <li>
                            <a href="#">
                                <i class="fa fa-user-plus"></i>
                                <span class="menu-title"><?php echo e(__('Sellers')); ?></span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="<?php echo e(areActiveRoutes(['sellers.index', 'sellers.create', 'sellers.edit', 'sellers.payment_history','sellers.approved','sellers.profile_modal'])); ?>">
                                    <?php
                                        $sellers = \App\Seller::where('verification_status', 0)->where('verification_info', '!=', null)->count();
                                        //$withdraw_req = \App\SellerWithdrawRequest::where('viewed', '0')->get();
                                    ?>
                                    <a class="nav-link" href="<?php echo e(route('sellers.index')); ?>"><?php echo e(__('Seller List')); ?> <?php if($sellers > 0): ?><span class="pull-right badge badge-info"><?php echo e($sellers); ?></span> <?php endif; ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['withdraw_requests_all'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('withdraw_requests_all')); ?>"><?php echo e(__('Seller Withdraw Requests')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['sellers.payment_histories'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('sellers.payment_histories')); ?>"><?php echo e(__('Seller Payments')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['business_settings.vendor_commission'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('business_settings.vendor_commission')); ?>"><?php echo e(__('Seller Commission')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['seller_verification_form.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('seller_verification_form.index')); ?>"><?php echo e(__('Seller Verification Form')); ?></a>
                                </li>
                            </ul>
                        </li>
                        <?php endif; ?>

                        <?php if(Auth::user()->user_type == 'admin' || in_array('6', json_decode(Auth::user()->staff->role->permissions))): ?>
                        <li>
                            <a href="#">
                                <i class="fa fa-user-plus"></i>
                                <span class="menu-title"><?php echo e(__('Customers')); ?></span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="<?php echo e(areActiveRoutes(['customers.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('customers.index')); ?>"><?php echo e(__('Customer list')); ?></a>
                                </li>
                            </ul>
                        </li>
                        <?php endif; ?>
                        <?php
                            $conversation = \App\Conversation::where('receiver_id', Auth::user()->id)->where('receiver_viewed', '1')->get();
                        ?>
                        <li class="<?php echo e(areActiveRoutes(['conversations.admin_index', 'conversations.admin_show'])); ?>">
                            <a class="nav-link" href="<?php echo e(route('conversations.admin_index')); ?>">
                                <i class="fa fa-comment"></i>
                                <span class="menu-title"><?php echo e(__('Conversations')); ?></span>
                                <?php if(count($conversation) > 0): ?>
                                    <span class="pull-right badge badge-info"><?php echo e(count($conversation)); ?></span>
                                <?php endif; ?>
                            </a>
                        </li>

                        <li class="<?php echo e(areActiveRoutes(['region'])); ?>">
                            <a class="nav-link" href="<?php echo e(route('region')); ?>">
                                <i class="fa fa-comment"></i>
                                <span class="menu-title"><?php echo e(__('Region')); ?></span>
                            </a>
                        </li>
                        <li class="<?php echo e(areActiveRoutes(['country'])); ?>">
                            <a class="nav-link" href="<?php echo e(route('country')); ?>">
                                <i class="fa fa-comment"></i>
                                <span class="menu-title"><?php echo e(__('Country')); ?></span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-file"></i>
                                <span class="menu-title"><?php echo e(__('Reports')); ?></span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="<?php echo e(areActiveRoutes(['stock_report.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('stock_report.index')); ?>"><?php echo e(__('Stock Report')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['in_house_sale_report.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('in_house_sale_report.index')); ?>"><?php echo e(__('In House Sale Report')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['seller_report.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('seller_report.index')); ?>"><?php echo e(__('Seller Report')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['seller_sale_report.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('seller_sale_report.index')); ?>"><?php echo e(__('Seller Based Selling Report')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['wish_report.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('wish_report.index')); ?>"><?php echo e(__('Product Wish Report')); ?></a>
                                </li>
                            </ul>
                        </li>

                        <?php if(Auth::user()->user_type == 'admin' || in_array('7', json_decode(Auth::user()->staff->role->permissions))): ?>
                        <li>
                            <a href="#">
                                <i class="fa fa-envelope"></i>
                                <span class="menu-title"><?php echo e(__('Messaging')); ?></span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="<?php echo e(areActiveRoutes(['newsletters.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('newsletters.index')); ?>"><?php echo e(__('Newsletters')); ?></a>
                                </li>

                                <?php if(\App\Addon::where('unique_identifier', 'otp_system')->first() != null && \App\Addon::where('unique_identifier', 'otp_system')->first()->activated): ?>
                                    <li class="<?php echo e(areActiveRoutes(['sms.index'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('sms.index')); ?>"><?php echo e(__('SMS')); ?></a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </li>
                        <?php endif; ?>

                        <?php if(Auth::user()->user_type == 'admin' || in_array('8', json_decode(Auth::user()->staff->role->permissions))): ?>
                        <li>
                            <a href="#">
                                <i class="fa fa-briefcase"></i>
                                <span class="menu-title"><?php echo e(__('Business Settings')); ?></span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="<?php echo e(areActiveRoutes(['activation.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('activation.index')); ?>"><?php echo e(__('Activation')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['payment_method.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('payment_method.index')); ?>"><?php echo e(__('Payment method')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['smtp_settings.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('smtp_settings.index')); ?>"><?php echo e(__('SMTP Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['google_analytics.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('google_analytics.index')); ?>"><?php echo e(__('Google Analytics')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['facebook_chat.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('facebook_chat.index')); ?>"><?php echo e(__('Facebook Chat & Pixel')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['social_login.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('social_login.index')); ?>"><?php echo e(__('Social Media Login')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['currency.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('currency.index')); ?>"><?php echo e(__('Currency')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['languages.index', 'languages.create', 'languages.store', 'languages.show', 'languages.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('languages.index')); ?>"><?php echo e(__('Languages')); ?></a>
                                </li>
                            </ul>
                        </li>
                        <?php endif; ?>

                        <?php if(Auth::user()->user_type == 'admin' || in_array('9', json_decode(Auth::user()->staff->role->permissions))): ?>
                        <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i>
                                <span class="menu-title"><?php echo e(__('Frontend Settings')); ?></span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="<?php echo e(areActiveRoutes(['home_settings.index', 'home_banners.index', 'sliders.index', 'home_categories.index', 'home_banners.create', 'home_categories.create', 'home_categories.edit', 'sliders.create','my-blend-subscription.create','blogs-category.create','blogs-category.index','blogs-category.edit','blog-posts.index','blog-posts.create','blog-posts.edit','events.index','events.create'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('home_settings.index')); ?>"><?php echo e(__('Home')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['header_top'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('header_top')); ?>"><?php echo e(__('Header News Bar')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['header_top'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('my-blend-subscription.create')); ?>"><?php echo e(__('My Blend & Subscription')); ?></a>
                                </li>
                                

                                <li class="<?php echo e(areActiveRoutes(['events.create','events.edit'])); ?>">
                                    <a class="nav-link" href="#">
                                        <span class="menu-title"><?php echo e(__('Event')); ?></span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li class="<?php echo e(areActiveRoutes(['events.index'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('events.index')); ?>"><?php echo e(__('All Events')); ?></a>
                                        </li>
                                    </ul>

                                </li>
                                

                                <li class="<?php echo e(areActiveRoutes(['blogs-category.create','blogs-category.edit'])); ?>">
                                    <a class="nav-link" href="#">
                                        <span class="menu-title"><?php echo e(__('Blog')); ?></span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li class="<?php echo e(areActiveRoutes(['blogs-category.index'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('blogs-category.index')); ?>"><?php echo e(__('Blog Category')); ?></a>
                                        </li>
                                        <li class="<?php echo e(areActiveRoutes(['blog-posts.index'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('blog-posts.index')); ?>"><?php echo e(__('Blog Post')); ?></a>
                                        </li>
                                    </ul>

                                </li>
                                
                                <li>
                                    <a href="#">
                                        <span class="menu-title"><?php echo e(__('About')); ?></span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul class="collapse">

                                        
                                        <li>
                                            <a href="#">
                                                <span class="menu-title"><?php echo e(__('About Us')); ?></span>
                                                <i class="arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="<?php echo e(areActiveRoutes(['about_menu'])); ?>">
                                                    <a class="nav-link" href="<?php echo e(route('about_menu')); ?>"><?php echo e(__('About Us Menu')); ?></a>
                                                </li>
                                                <li class="<?php echo e(areActiveRoutes(['admin.about'])); ?>">
                                                    <a class="nav-link" href="<?php echo e(route('admin.about')); ?>"><?php echo e(__('About us Page')); ?></a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="<?php echo e(areActiveRoutes(['returnpolicy.index'])); ?>">
                                            <a class="nav-link" href=""><?php echo e(__('Blogs')); ?></a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="menu-title"><?php echo e(__('For Press')); ?></span>
                                                <i class="arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="<?php echo e(areActiveRoutes(['press_contacts.list'])); ?>">
                                                    <a class="nav-link" href="<?php echo e(route('press_contacts.list')); ?>"><?php echo e(__('Press Contacts')); ?></a>
                                                </li>
                                                <li class="<?php echo e(areActiveRoutes(['press_list'])); ?>">
                                                    <a class="nav-link" href="<?php echo e(route('press_list')); ?>"><?php echo e(__('Press List')); ?></a>
                                                </li>
                                                <li class="<?php echo e(areActiveRoutes(['press_setting'])); ?>">
                                                    <a class="nav-link" href="<?php echo e(route('press_setting')); ?>"><?php echo e(__('Press Settings')); ?></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="<?php echo e(areActiveRoutes(['PriceMatch'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('PriceMatch')); ?>"><?php echo e(__('Price Match')); ?></a>
                                        </li>

                                        <li class="<?php echo e(areActiveRoutes(['charitable_giving'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('charitable_giving')); ?>"><?php echo e(__('Charitable Giving')); ?></a>
                                        </li>
                                        <li class="<?php echo e(areActiveRoutes(['online_community'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('online_community')); ?>"><?php echo e(__('Online Community')); ?></a>
                                        </li>
                                        <li class="<?php echo e(areActiveRoutes(['authentication'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('authentication')); ?>"><?php echo e(__('100% Authentication')); ?></a>
                                        </li>
                                        <li class="<?php echo e(areActiveRoutes(['reward_points'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('reward_points')); ?>"><?php echo e(__('Reward points program')); ?></a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="menu-title"><?php echo e(__('Careers')); ?></span>
                                                <i class="arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="<?php echo e(areActiveRoutes(['career_position'])); ?>">
                                                    <a class="nav-link" href="<?php echo e(route('career_position')); ?>"><?php echo e(__('Career Positions')); ?></a>
                                                </li>
                                                <li class="<?php echo e(areActiveRoutes(['admin_careers'])); ?>">
                                                    <a class="nav-link" href="<?php echo e(route('admin_careers')); ?>"><?php echo e(__('Career Page')); ?></a>
                                                </li>
                                                <li class="<?php echo e(areActiveRoutes(['applicants'])); ?>">
                                                    <a class="nav-link" href="<?php echo e(route('applicants')); ?>"><?php echo e(__('Applicants List')); ?></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>

                                </li>

                                
                                <li>
                                    <a href="#">
                                        <span class="menu-title"><?php echo e(__('For Business')); ?></span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul class="collapse">

                                        
                                        <li class="<?php echo e(areActiveRoutes(['contact.list'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('contact.list')); ?>">
                                                <span class="menu-title"><?php echo e(__('For Business')); ?> </span>
                                            </a>
                                        </li>
                                        
                                        <li class="<?php echo e(areActiveRoutes(['blogger.list'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('blogger.list')); ?>">
                                                <span class="menu-title"><?php echo e(__('Bloggers List')); ?> </span>
                                            </a>
                                        </li>
                                        
                                        <li class="<?php echo e(areActiveRoutes(['idea.list'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('idea.list')); ?>">
                                                <span class="menu-title"><?php echo e(__('Idea List')); ?> </span>
                                            </a>
                                        </li>
                                        
                                        <li class="<?php echo e(areActiveRoutes(['personal_requests.list'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('personal_requests.list')); ?>">
                                                <span class="menu-title"><?php echo e(__('Personal Request')); ?> </span>
                                            </a>
                                        </li>
                                        
                                        <li class="<?php echo e(areActiveRoutes(['request_fragrance'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('request_fragrance')); ?>">
                                                <span class="menu-title"><?php echo e(__('Request Fragrance')); ?> </span>
                                            </a>
                                        </li>
                                        
                                        <li class="<?php echo e(areActiveRoutes(['subscription_agreement'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('subscription_agreement')); ?>">
                                                <span class="menu-title"><?php echo e(__('Subscription Agreement')); ?> </span>
                                            </a>
                                        </li>


                                        
                                        <li class="<?php echo e(areActiveRoutes(['distributor.list'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('distributor.list')); ?>">
                                                <span class="menu-title"><?php echo e(__('Distributor List')); ?> </span>
                                            </a>
                                        </li>
                                        
                                        <li class="<?php echo e(areActiveRoutes(['feedback.list'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('feedback.list')); ?>">
                                                <span class="menu-title"><?php echo e(__('Feedbacks')); ?> </span>
                                            </a>
                                        </li>

                                    </ul>

                                </li>
                                
                                <li>
                                    <a href="#">
                                        <span class="menu-title"><?php echo e(__('Online Shopping')); ?></span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul class="collapse">

                                        <li class="<?php echo e(areActiveRoutes(['online_shopping'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('online_shopping')); ?>"><?php echo e(__('Online Shopping')); ?></a>
                                        </li>
                                        <li class="<?php echo e(areActiveRoutes(['refund_policy'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('refund_policy')); ?>"><?php echo e(__('Return/Refund Policy')); ?></a>
                                        </li>
                                        <li class="<?php echo e(areActiveRoutes(['shipping_policy'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('shipping_policy')); ?>"><?php echo e(__('Shipping Policy')); ?></a>
                                        </li>
                                        <li class="<?php echo e(areActiveRoutes(['terms_condition'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('terms_condition')); ?>"><?php echo e(__('Terms & Conditions')); ?></a>
                                        </li>
                                        <li class="<?php echo e(areActiveRoutes(['privacy_policy'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('privacy_policy')); ?>"><?php echo e(__('Privacy Policy')); ?></a>
                                        </li>
                                        <li class="<?php echo e(areActiveRoutes(['how_to_shop'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('how_to_shop')); ?>"><?php echo e(__('How To Shop')); ?></a>
                                        </li>
                                        <li class="<?php echo e(areActiveRoutes(['consumer_rights'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('consumer_rights')); ?>"><?php echo e(__('Consumer Rights')); ?></a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <span class="menu-title"><?php echo e(__('FAQ')); ?></span>
                                                <i class="arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="<?php echo e(areActiveRoutes(['faq_category'])); ?>">
                                                    <a class="nav-link" href="<?php echo e(route('faq_category')); ?>"><?php echo e(__('FAQ Category')); ?></a>
                                                </li>
                                                <li class="<?php echo e(areActiveRoutes(['faq'])); ?>">
                                                    <a class="nav-link" href="<?php echo e(route('faq')); ?>"><?php echo e(__('FAQ List')); ?></a>
                                                </li>
                                                <li class="<?php echo e(areActiveRoutes(['press_setting'])); ?>">
                                                    <a class="nav-link" href="<?php echo e(route('press_setting')); ?>"><?php echo e(__('Press Settings')); ?></a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="<?php echo e(areActiveRoutes(['accessibility'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('accessibility')); ?>"><?php echo e(__('Accessibility ')); ?></a>
                                        </li>
                                        <li class="<?php echo e(areActiveRoutes(['user_agreement'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('user_agreement')); ?>"><?php echo e(__('User Agreement')); ?></a>
                                        </li>
                                        <li class="<?php echo e(areActiveRoutes(['cookies'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('cookies')); ?>"><?php echo e(__('Cookies')); ?></a>
                                        </li>
                                    </ul>

                                </li>


                                <li class="<?php echo e(areActiveRoutes(['links.index', 'links.create', 'links.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('links.index')); ?>"><?php echo e(__('Useful Link')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['generalsettings.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('generalsettings.index')); ?>"><?php echo e(__('General Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['generalsettings.logo'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('generalsettings.logo')); ?>"><?php echo e(__('Logo Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['background_image'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('background_image')); ?>"><?php echo e(__('Background Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['generalsettings.color'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('generalsettings.color')); ?>"><?php echo e(__('Color Settings')); ?></a>
                                </li>
                            </ul>
                        </li>
                        <?php endif; ?>

                        <?php if(Auth::user()->user_type == 'admin' || in_array('12', json_decode(Auth::user()->staff->role->permissions))): ?>
                        <li>
                            <a href="#">
                                <i class="fa fa-gear"></i>
                                <span class="menu-title"><?php echo e(__('E-commerce Setup')); ?></span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="<?php echo e(areActiveRoutes(['attributes.index','attributes.create','attributes.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('attributes.index')); ?>"><?php echo e(__('Attribute')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['coupon.index','coupon.create','coupon.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('coupon.index')); ?>"><?php echo e(__('Coupon')); ?></a>
                                </li>
                                <li>
                                    <li class="<?php echo e(areActiveRoutes(['pick_up_points.index','pick_up_points.create','pick_up_points.edit'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('pick_up_points.index')); ?>"><?php echo e(__('Pickup Point')); ?></a>
                                    </li>
                                </li>
                            </ul>
                        </li>
                        <?php endif; ?>

                        <?php if(\App\Addon::where('unique_identifier', 'affiliate_system')->first() != null && \App\Addon::where('unique_identifier', 'affiliate_system')->first()->activated): ?>
                            <li>
                                <a href="#">
                                    <i class="fa fa-link"></i>
                                    <span class="menu-title"><?php echo e(__('Affiliate System')); ?></span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="<?php echo e(areActiveRoutes(['affiliate.configs'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('affiliate.configs')); ?>"><?php echo e(__('Affiliate Configurations')); ?></a>
                                    </li>
                                    <li class="<?php echo e(areActiveRoutes(['affiliate.index'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('affiliate.index')); ?>"><?php echo e(__('Affiliate Options')); ?></a>
                                    </li>
                                    <li class="<?php echo e(areActiveRoutes(['affiliate.users', 'affiliate_users.show_verification_request', 'affiliate_user.payment_history'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('affiliate.users')); ?>"><?php echo e(__('Affiliate Users')); ?></a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>

                        <?php if(\App\Addon::where('unique_identifier', 'offline_payment')->first() != null && \App\Addon::where('unique_identifier', 'offline_payment')->first()->activated): ?>
                            <li>
                                <a href="#">
                                    <i class="fa fa-link"></i>
                                    <span class="menu-title"><?php echo e(__('Offline Payment System')); ?></span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="<?php echo e(areActiveRoutes(['manual_payment_methods.index', 'manual_payment_methods.create', 'manual_payment_methods.edit'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('manual_payment_methods.index')); ?>"><?php echo e(__('Manual Payment Methods')); ?></a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>

                        <?php if(\App\Addon::where('unique_identifier', 'club_point')->first() != null && \App\Addon::where('unique_identifier', 'club_point')->first()->activated): ?>
                            <li>
                                <a href="#">
                                    <i class="fa fa-btc"></i>
                                    <span class="menu-title"><?php echo e(__('Club Point System')); ?></span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="<?php echo e(areActiveRoutes(['club_points.configs'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('club_points.configs')); ?>"><?php echo e(__('Club Point Configurations')); ?></a>
                                    </li>
                                    <li class="<?php echo e(areActiveRoutes(['set_product_points', 'product_club_point.edit'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('set_product_points')); ?>"><?php echo e(__('Set Product Point')); ?></a>
                                    </li>
                                    <li class="<?php echo e(areActiveRoutes(['club_points.index', 'club_point.details'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('club_points.index')); ?>"><?php echo e(__('User Points')); ?></a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>

                        <?php if(\App\Addon::where('unique_identifier', 'otp_system')->first() != null && \App\Addon::where('unique_identifier', 'otp_system')->first()->activated): ?>
                            <li>
                                <a href="#">
                                    <i class="fa fa-mobile"></i>
                                    <span class="menu-title"><?php echo e(__('OTP System')); ?></span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="<?php echo e(areActiveRoutes(['otp.configconfiguration'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('otp.configconfiguration')); ?>"><?php echo e(__('OTP Configurations')); ?></a>
                                    </li>
                                    <li class="<?php echo e(areActiveRoutes(['otp_credentials.index'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('otp_credentials.index')); ?>"><?php echo e(__('Set OTP Credentials')); ?></a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>



                        <?php if(Auth::user()->user_type == 'admin' || in_array('13', json_decode(Auth::user()->staff->role->permissions))): ?>
                            <?php
                                $support_ticket = DB::table('tickets')
                                            ->where('viewed', 0)
                                            ->select('id')
                                            ->count();
                            ?>
                        <li class="<?php echo e(areActiveRoutes(['support_ticket.admin_index', 'support_ticket.admin_show'])); ?>">
                            <a class="nav-link" href="<?php echo e(route('support_ticket.admin_index')); ?>">
                                <i class="fa fa-support"></i>
                                <span class="menu-title"><?php echo e(__('Suppot Ticket')); ?> <?php if($support_ticket > 0): ?><span class="pull-right badge badge-info"><?php echo e($support_ticket); ?></span><?php endif; ?></span>
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if(Auth::user()->user_type == 'admin' || in_array('11', json_decode(Auth::user()->staff->role->permissions))): ?>
                        <li class="<?php echo e(areActiveRoutes(['seosetting.index'])); ?>">
                            <a class="nav-link" href="<?php echo e(route('seosetting.index')); ?>">
                                <i class="fa fa-search"></i>
                                <span class="menu-title"><?php echo e(__('SEO Setting')); ?></span>
                            </a>
                        </li>
                        <?php endif; ?>


                        

                        <li class=" ">
                            <a class="nav-link" href="<?php echo e(route('subscribed.index')); ?>">
                                <i class="fa fa-mail-forward"></i>
                                <span class="menu-title"><?php echo e(__('Subscribed Emails')); ?></span>
                            </a>
                        </li>
                         <?php if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions))): ?>
                        <li>
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span class="menu-title"><?php echo e(__('Finance')); ?></span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                 <li class="<?php echo e(areActiveRoutes(['manage-forecast'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('manage-forecast')); ?>"><?php echo e(__(' Manage Forecast')); ?></a>
                                </li>
                                 <li class="<?php echo e(areActiveRoutes(['staffs.index', 'staffs.create', 'staffs.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('staffs.index')); ?>"><?php echo e(__('Add Budget')); ?></a>
                                </li>
                                 <li class="<?php echo e(areActiveRoutes(['staffs.index', 'staffs.create', 'staffs.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('staffs.index')); ?>"><?php echo e(__(' Manage Budget')); ?></a>
                                </li>
                                 <li class="<?php echo e(areActiveRoutes(['staffs.index', 'staffs.create', 'staffs.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('staffs.index')); ?>"><?php echo e(__('Monthly Forecast')); ?></a>
                                </li>
                                 <li class="<?php echo e(areActiveRoutes(['roles.index', 'roles.create', 'roles.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('roles.index')); ?>"><?php echo e(__('Monthly Budget')); ?></a>
                                </li>
                                  <li class="<?php echo e(areActiveRoutes(['staffs.index', 'staffs.create', 'staffs.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('staffs.index')); ?>"><?php echo e(__('Yearly Forecast')); ?></a>
                                </li>
                                 <li class="<?php echo e(areActiveRoutes(['roles.index', 'roles.create', 'roles.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('roles.index')); ?>"><?php echo e(__('Yearly Budget')); ?></a>
                                </li>

                            </ul>
                        </li>
                        <?php endif; ?>
                            <?php if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions))): ?>
                        <li>
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span class="menu-title"><?php echo e(__('Account')); ?></span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">

                                 <li class="<?php echo e(areActiveRoutes(['staffs.index', 'staffs.create', 'staffs.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('staffs.index')); ?>"><?php echo e(__('Monthly Statement')); ?></a>
                                </li>
                                 <li class="<?php echo e(areActiveRoutes(['staffs.index', 'staffs.create', 'staffs.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('staffs.index')); ?>"><?php echo e(__(' Yearly Statement')); ?></a>
                                </li>
                                </li>

                            </ul>
                        </li>
                        <?php endif; ?>
                        <?php if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions))): ?>
                        <li>
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span class="menu-title"><?php echo e(__('HRM')); ?></span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                 <li class="<?php echo e(areActiveRoutes(['doc.index', 'doc.create', 'doc.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('doc.index')); ?>"><?php echo e(__('Office Doc File')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['department.index', 'department.create', 'department.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('department.index')); ?>"><?php echo e(__('Department')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['designation.index', 'designation.create', 'designation.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('designation.index')); ?>"><?php echo e(__('Designation')); ?></a>
                                </li>
                                  <li class="<?php echo e(areActiveRoutes(['staff_profile.index', 'staff_profile.create', 'staff_profile.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('staff_profile.index')); ?>"><?php echo e(__('Staff Profile')); ?></a>
                                </li>

                                 <li class="<?php echo e(areActiveRoutes(['staffs.index', 'staffs.create', 'staffs.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('staffs.index')); ?>"><?php echo e(__('Role Assign')); ?></a>
                                </li>
                             
                                 <li class="<?php echo e(areActiveRoutes(['roles.index', 'roles.create', 'roles.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('roles.index')); ?>"><?php echo e(__('Staff permissions')); ?></a>
                                </li>

                            </ul>
                        </li>
                        <?php endif; ?>
                             <?php if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions))): ?>
                        <li>
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span class="menu-title"><?php echo e(__('Legal')); ?></span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="<?php echo e(areActiveRoutes(['legal-file-types.index', 'legal-file-types.create', 'legal-file-types.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('legal-file-types.index')); ?>"><?php echo e(__('File type')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['legal-file-manager.index', 'legal-file-manager.create', 'legal-file-types.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('legal-file-manager.index')); ?>"><?php echo e(__('File manage')); ?></a>
                                </li>
                            </ul>
                        </li>
                        <?php endif; ?>

                          <?php if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions))): ?>
                        <li>
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span class="menu-title"><?php echo e(__('Expense')); ?></span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="<?php echo e(areActiveRoutes(['expense-category.index','expense-category.create','expense-category.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('expense-category.index')); ?>"><?php echo e(__('Category')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['expense-subcategory.index','expense-subcategory.create','expense-subcategory.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('expense-subcategory.index')); ?>"><?php echo e(__('Sub-category')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['expense.index', 'expense.create', 'expense.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('expense.index')); ?>"><?php echo e(__('Expense Item')); ?></a>
                                </li>

                                <li class="<?php echo e(areActiveRoutes(['expense.statement', 'expense.statement', 'expense.statement'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('expense.statement')); ?>"><?php echo e(__('Expense Statement')); ?></a>
                                </li>
                            </ul>
                        </li>
                        <?php endif; ?>
                          <?php if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions))): ?>
                        <li>
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span class="menu-title"><?php echo e(__('Bank')); ?></span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="<?php echo e(areActiveRoutes(['bank.index', 'bank.create', 'bank.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('bank.index')); ?>"><?php echo e(__('Add Bank')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['banktransaction.index', 'banktransaction.create', 'banktransaction.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('banktransaction.index')); ?>"><?php echo e(__('Bank Transaction')); ?></a>
                                </li>
                                 <li class="<?php echo e(areActiveRoutes(['bankledger.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('bankledger.index')); ?>"><?php echo e(__('Bank Ledger Report')); ?></a>
                                </li>
                            </ul>
                        </li>
                        <?php endif; ?>
                         <?php if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions))): ?>
                        <li>
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span class="menu-title"><?php echo e(__('Tax')); ?></span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">

                                <li class="<?php echo e(areActiveRoutes(['tax.index', 'tax.create', 'tax.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('tax.index')); ?>"><?php echo e(__('Add Income Tax')); ?></a>
                                </li>
                                 <li class="<?php echo e(areActiveRoutes(['roles.index', 'roles.create', 'roles.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('roles.index')); ?>"><?php echo e(__('Tax Report')); ?></a>
                                </li>
                                 <li class="<?php echo e(areActiveRoutes(['roles.index', 'roles.create', 'roles.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('roles.index')); ?>"><?php echo e(__('Invoice Wise Tax Report')); ?></a>
                                </li>
                            </ul>
                        </li>
                        <?php endif; ?>
                            <?php if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions))): ?>
                        <li>
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span class="menu-title"><?php echo e(__('Supplier')); ?></span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">

                                 <li class="<?php echo e(areActiveRoutes(['supplier.index', 'supplier.create', 'supplier.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('supplier.index')); ?>"><?php echo e(__('Add Supplier')); ?></a>
                                </li>
                                 <li class="<?php echo e(areActiveRoutes(['staffs.index', 'staffs.create', 'staffs.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('staffs.index')); ?>"><?php echo e(__(' Supplier Ledger')); ?></a>
                                </li>
                                 <li class="<?php echo e(areActiveRoutes(['staffs.index', 'staffs.create', 'staffs.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('staffs.index')); ?>"><?php echo e(__(' Supplier Advance')); ?></a>
                                </li>
                                </li>
                            </ul>
                        </li>
                        <?php endif; ?>
                          <?php if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions))): ?>
                        <li>
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span class="menu-title"><?php echo e(__('Raw Materials')); ?></span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">

                                 <li class="<?php echo e(areActiveRoutes(['raw.category.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('raw.category.index')); ?>"><?php echo e(__('Raw Category')); ?></a>
                                </li>
                                 <li class="<?php echo e(areActiveRoutes(['raw.unit.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('raw.unit.index')); ?>"><?php echo e(__(' Raw Unit')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['raw.create'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('raw.create')); ?>"><?php echo e(__(' Add Raw ')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['raw.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('raw.index')); ?>"><?php echo e(__(' Manage Raw')); ?></a>
                                </li>
                               
                            </ul>
                        </li>
                        <?php endif; ?>
                            <?php if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions))): ?>
                        <li>
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span class="menu-title"><?php echo e(__('Purchase')); ?></span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">

                                 <li class="<?php echo e(areActiveRoutes(['purchase.index', 'purchase.create', 'purchase.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('purchase.index')); ?>"><?php echo e(__('Add Purchase')); ?></a>
                                </li>
                                </li>

                            </ul>
                        </li>
                        <?php endif; ?>

                        <?php if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions))): ?>
                            <li>
                                <a href="#">
                                    <i class="fa fa-money"></i>
                                    <span class="menu-title"><?php echo e(__('Return')); ?></span>
                                    <i class="arrow"></i>
                                </a>
                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="<?php echo e(areActiveRoutes(['staffs.index', 'staffs.create', 'staffs.edit'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('staffs.index')); ?>"><?php echo e(__('Return')); ?></a>
                                    </li>
                                    <li class="<?php echo e(areActiveRoutes(['roles.index', 'roles.create', 'roles.edit'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('roles.index')); ?>"><?php echo e(__('Stock Return List')); ?></a>
                                    </li>
                                    <li class="<?php echo e(areActiveRoutes(['roles.index', 'roles.create', 'roles.edit'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('roles.index')); ?>"><?php echo e(__('Supplier Return List')); ?></a>
                                    </li>
                                    <li class="<?php echo e(areActiveRoutes(['roles.index', 'roles.create', 'roles.edit'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('roles.index')); ?>"><?php echo e(__('Wastage Return List')); ?></a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>

                        <?php echo $__env->make('inc.purchases_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </ul>
                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>
