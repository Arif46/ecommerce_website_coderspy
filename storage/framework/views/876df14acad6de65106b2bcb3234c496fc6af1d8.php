<?php /* D:\xampp\htdocs\myfrag\resources\views/website/layouts/header.blade.php */ ?>
<header>
    <div class="header_area">
        <!-- header_top  -->
        <?php
            $HeaderTop = App\HeaderTop::where('active_status', 1)->first();
            $categories = App\Category::get();
        ?>
        <div class="header-top-links text-center">
        <p><?php echo e(@$HeaderTop->title); ?> <a href="<?php echo e(route('learn_more')); ?>"><?php echo app('translator')->getFromJson('Learn More.'); ?></a></p>
        </div>
        <div class="header_top mian-wrapper">
            <div class="left-box">
                <div class="header_left">
                    <!-- logo -->
                    <div class="logo">
                        <a href="<?php echo e(route('home')); ?>">
                            <?php
                                $siteLogo = \App\GeneralSetting::select('logo')->first();
                            ?>
                            <?php if($siteLogo->logo != null): ?>
                                <?php if(File::exists(public_path($siteLogo->logo))): ?>
                                    <img src="<?php echo e(url('public/')); ?>/<?php echo e($siteLogo->logo); ?>" alt="">
                                <?php else: ?>
                                    <img src="<?php echo e(url('public/website/img/logo.png')); ?>" alt="">
                                <?php endif; ?>
                            <?php else: ?>
                                <img src="<?php echo e(url('public/website/img/logo.png')); ?>" alt="">
                            <?php endif; ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="right-box d-flex flex-wrap">
                <div class="header_middle">
                    <form action="<?php echo e(route('searchProduct')); ?>" method="get">

                        <div class="select_cat">
                            <div class="category-btn  d-none d-md-block">
                                <span>All<i class="ti-angle-down arrow-icon"></i></span>
                                <!-- Main-menu -->
                                <div class="menu-wrapper">
                                    <div class="main-menu ">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="#">All</a>
                                                <li><a href="<?php echo e(route('myblend')); ?>">My Blend</a>
                                                <li><a href="<?php echo e(url('/notes')); ?>">Notes</a>
                                                <li><a href="<?php echo e(url('/brands')); ?>">Brands</a>
                                                <li><a href="<?php echo e(url('subscription')); ?>">Subscription</a>
                                                <li><a href="<?php echo e(url('/perfumers')); ?>">Perfumers</a>
                                                <li><a href="<?php echo e(url('/colors')); ?>">Colors</a>
                                                <li><a href="#"  data-toggle="modal" data-target="#addcategory">Barcode</a>
                                                <?php
                                                    $categories = DB::table('categories')->orderBy('top', 'ASC')->get();
                                                    foreach ($categories as $category) {
                                                        $sub_categories=  DB::table('sub_categories')->where('category_id', $category->id)->get();
                                                        if($sub_categories->count()>0){
                                                ?>
                                                <li  class="arrow"><a href="<?php echo e(url('categoryProduct')); ?>/<?php echo e($category->id); ?>/<?php echo e($category->name); ?>"><?php echo e($category->name); ?> <i class="fa fa-caret-right"></i></a>
                                                    <ul class="submenu">
                                                        <?php
                                                            foreach ($sub_categories as $sub_category) {
                                                        ?>
                                                        <li><a href="<?php echo e(url('categoryProduct')); ?>/<?php echo e($sub_category->id); ?>/<?php echo e($sub_category->name); ?>"><?php echo e($sub_category->name); ?></a>
                                                        <?php
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <?php

                                                    }else{

                                                ?>
                                                <li><a href="<?php echo e(url('categoryProduct')); ?>/<?php echo e($category->id); ?>/<?php echo e($category->name); ?>"><?php echo e($category->name); ?></a></li>
                                            <?php
                                                }
                                            }
                                            ?>
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
                                <?php $__currentLoopData = \App\Language::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="#" id="<?php echo e($language->code); ?>" class="<?php echo e($language->code); ?>"><?php echo e($language->name); ?> - <?php echo e($language->code); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <?php if(Auth::check()): ?>
                                <span  class="main_line">Hello,<b><?php echo e(@Auth::user()->full_name); ?></b> </span>
                                <span class="sub_line">Account & List</span>
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            <?php else: ?>
                                <a href="<?php echo e(url('customer-login')); ?>" class="boxed_btn">Sign in</a>
                                <p>New Customer ?<a href="<?php echo e(url('customer-register')); ?>">Create Account</a></p>
                            <?php endif; ?>

                        </a>
                        <div class="account_list_wrap">
                            <div class="list_header text-center">
                                <?php if(Auth::check()): ?>
                                <?php else: ?>
                                    <a href="<?php echo e(url('customer-login')); ?>" class="boxed_btn">sign in</a>
                                    <p>New Customer ?<a href="<?php echo e(url('customer-register')); ?>">Create account</a></p>
                                <?php endif; ?>
                                </div>
                            <div class="list_contet">
                                <div class="single_list">
                                    <h4>My List </h4>
                                    <li><a href="<?php echo e(url('my-blend')); ?>">My Blend </a></li>
                                    <li><a href="<?php echo e(url('my-subscription')); ?>">My Subscription  </a></li>
                                    <li><a href="<?php echo e(url('customer-wishlists')); ?>">My Wish List  </a></li>
                                    <li><a href="<?php echo e(url('my-sample')); ?>">My Samples   </a></li>
                                    <li><a href="<?php echo e(url('my-compare-list')); ?>">Compare List</a></li>
                                    <li><a href="<?php echo e(url('recently-viewed')); ?>">Recently Viewed</a></li>
                                
                                </div>
                                <div class="single_list">
                                    <h4>My Account  </h4>
                                    <li><a href="<?php echo e(url('customer-profile')); ?>">My Account  </a></li>
                                    <li><a href="<?php echo e(url('my-orders')); ?>">My Orders</a></li>
                                    <?php if(auth()->guard()->check()): ?>
                                        <li><a href="<?php echo e(route('logout')); ?>">Sign out </a></li>
                                    <?php endif; ?>
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
                        <a href="<?php echo e(route('cart')); ?>">
                            <img src="http://localhost/myfrag/public/website/img/card.png" alt="">
                            <span>Cart</span>
                            <?php if(Session::has('cart')): ?>
                                <span> (<?php echo e(count(Session::get('cart'))); ?>)</span>
                            <?php else: ?>
                                <span class="card-number">0</span>
                            <?php endif; ?>
                        </a>
                    </div>
                    <!-- /card end -->
                </div>
                <!--/ header_top  -->
                <div class="header_bottm">
                    <div class="header_bottm_left">
                        
                    </div>
                    <div class="header_bottm_right">
                        <p>
                            <a href="<?php echo e(route('myblend')); ?>">My Blend</a>
                            <a href="<?php echo e(route('notes')); ?>">Notes </a>
                            <a href="<?php echo e(route('all-brands')); ?>">Brands </a>
                            <a href="<?php echo e(route('subscription')); ?>">Subscription </a>
                            <a href="<?php echo e(route('samples')); ?>">Samples </a>
                            <a href="<?php echo e(route('perfumers')); ?>">Perfumers </a>
                            <a href="<?php echo e(route('colors')); ?>">Colors </a>
                            <a href="<?php echo e(route('astrology')); ?>">Astrology </a>
                            <a href="<?php echo e(route('barcode')); ?>" data-toggle="modal" data-target="#addcategory">Barcode </a>
                            <a href="<?php echo e(url('categoryProduct/4/accesories')); ?>">Accessories </a>
                            <a href="<?php echo e(url('compare-list')); ?>">Compare List </a>
                            <a href="<?php echo e(route('blogs')); ?>">Blogs </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--/Header Area-->


