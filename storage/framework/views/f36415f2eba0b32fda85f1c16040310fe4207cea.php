<?php /* E:\xampp\htdocs\myfragmence\resources\views/website/pages/index.blade.php */ ?>
<?php $__env->startSection('title','Home'); ?>
<?php $__env->startSection('content'); ?>
<body class="body-bg1">
    <!-- Slider Start -->
    <div class="home-slider owl-carousel whit-bg">
        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($slider->status): ?>
                <div class="about_area slider-height2 section-over2 section-bg" style="background: url('<?php echo e(url('public/'.$slider->photo)); ?>') no-repeat center center;">
                    <div class="container container-special">
                        <div class="row">
                            <div class="col-lg-6 col-md-7 col-sm-8">
                                <div class="hero-content">
                                    <h2 class="mb-20"><?php echo e($slider->title); ?></h2>
                                    <h4 class="mb-40"><?php echo e($slider->short_description); ?></h4>
                                    <a href="<?php echo e($slider->url); ?>" class="btnw">Learn more</a>
                                    <p class="mb-50"><br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php $__empty_1 = true; $__currentLoopData = @$firstSlider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f_slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <!-- Slider 01 -->
        <div class="about_area main-slider-padding">
            <div class="container-fluid">

                <div class="row justify-content-between">

                    <div class="col-lg-6 col-md-7">
                        <div class="about_info info_height">
                            <!-- Barcode -->
                            <div class="barcode mb_30">
                                <img src="<?php echo e(url('public/')); ?>/<?php echo e(@$f_slider->first_image); ?>" alt="">
                            </div>
                            <!-- logo -->
                            <div class="logo  mb_30">
                                <a href="#">
                                    <img src="<?php echo e(url('public/')); ?>/<?php echo e(@$f_slider->second_image); ?>" alt="" class>
                                </a>
                                <div class="play">
                                    <a href="#">
                                        <img src="<?php echo e(url('public/')); ?>/<?php echo e(@$f_slider->third_image); ?>" alt="">
                                    </a>
                                </div>
                                <!-- Share -->
                                <div class="play">
                                    <a href="#">
                                        <img src="http://localhost/myfrag/public/website/img/share_butuon.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Content -->
                            <div class="about_text">
                                <p><?php echo e($f_slider->first_description); ?></p>
                                <div class="social_link">
                                    <ul>
                                        <li>
                                            <a href="<?php echo e(@$socialLinks->facebook); ?>" class="fb-icons">
                                                <img src="<?php echo e(url('public/website/img/icons/green/fb.png')); ?>" alt="" class="s-icon-2">
                                                <img src="<?php echo e(url('public/website/img/icons/green_fill/fb.png')); ?>" alt="" class="s-icon-1">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(@$socialLinks->twitter); ?>" class="twitter-icons">
                                                <img src="<?php echo e(url('public/website/img/icons/green/twitter.png')); ?>" alt=""  class="s-icon-2">
                                                <img src="<?php echo e(url('public/website/img/icons/green_fill/twitter.png')); ?>" alt=""  class="s-icon-1">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(@$socialLinks->instagram); ?>" class="instagram-icons">
                                                <img src="<?php echo e(url('public/website/img/icons/green/instagram.png')); ?>" alt=""  class="s-icon-2">
                                                <img src="<?php echo e(url('public/website/img/icons/green_fill/instagram.png')); ?>" alt=""  class="s-icon-1">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(@$socialLinks->linkedin); ?>" class="linkedin-icons">
                                                <img src="<?php echo e(url('public/website/img/icons/green/linkedin.png')); ?>" alt="" class="s-icon-2">
                                                <img src="<?php echo e(url('public/website/img/icons/green_fill/linkedin.png')); ?>" alt=""  class="s-icon-1">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(@$socialLinks->pinterest); ?>" class="pinterest-icons">
                                                <img src="<?php echo e(url('public/website/img/icons/green/pinterest.png')); ?>" alt=""  class="s-icon-2">
                                                <img src="<?php echo e(url('public/website/img/icons/green_fill/pinterest.png')); ?>" alt=""  class="s-icon-1">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(@$socialLinks->snapchart); ?>" class="snapchart-icons">
                                                <img src="<?php echo e(url('public/website/img/icons/green/snapchart.png')); ?>" alt="" class="s-icon-2">
                                                <img src="<?php echo e(url('public/website/img/icons/green_fill/snapchart.png')); ?>" alt="" class="s-icon-1">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(@$socialLinks->tiktok); ?>" class="tiktok-icons">
                                                <img src="<?php echo e(url('public/website/img/icons/green/tiktok.png')); ?>" alt="" class="s-icon-2">
                                                <img src="<?php echo e(url('public/website/img/icons/green_fill/tiktok.png')); ?>" alt="" class="s-icon-1">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(@$socialLinks->youtube); ?>" class="youtube-icons">
                                                <img src="<?php echo e(url('public/website/img/icons/green/youtube.png')); ?>" alt="" class="s-icon-2">
                                                <img src="<?php echo e(url('public/website/img/icons/green_fill/youtube.png')); ?>" alt="" class="s-icon-1">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="about_info_2 info_height position-relative">
                            <div class="about_thumb">
                                <img src="<?php echo e(url('public/')); ?>/<?php echo e(@$f_slider->forth_image); ?>" alt="">
                            </div>
                            <p><?php echo e($f_slider->second_description); ?></p>

                            <!-- 50%  off-->
                            <div class="offers-img position-absolute">
                                <img src="http://localhost/myfrag/public/website/img/offers.png" alt="" style="width: 120px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <?php endif; ?>
    <!-- Slider 02 -->
        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(!$slider->status): ?>
                <div class="about_area slider-height2 section-over2 section-bg" style="background: url('<?php echo e(url('public/'.$slider->photo)); ?>') no-repeat center center;">
                    <div class="container container-special">
                        <div class="row">
                            <div class="col-lg-6 col-md-7 col-sm-8">
                                <div class="hero-content">
                                    <h2 class="mb-20"><?php echo e($slider->title); ?></h2>
                                    <h4 class="mb-40"><?php echo e($slider->short_description); ?></h4>
                                    <a href="<?php echo e($slider->url); ?>" class="btnw">Learn more</a>
                                    <p class="mb-50"><br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <!-- slider End -->
    <!-- Blend Subscription Start-->
    <?php $__empty_1 = true; $__currentLoopData = $blend_subs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blend_sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php if($blend_sub->my_blend): ?>
            <div class="Subscription_area Subscription_area2 text-center section-over1 d-flex align-items-center section-bg mb-60 "  style="background: url(<?php echo e(url('public/')); ?>/<?php echo e($blend_sub->my_blend); ?>) no-repeat center center;">
                <div class="container-fluid">
                    <div class="row" >
                        <div class="col-12">
                            <span>
                                <a href="<?php echo e(route('myblend')); ?>" class="">
                                    <img src="http://localhost/myfrag/public/website/img/myBlend_iocn.png" alt="" style="width:60px;">
                                    My Blend
                                </a>
                            </span>
                            <a href="<?php echo e($blend_sub->subscription_url); ?>" class="btnw float-right tutorial-pop">Tutorial</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if($blend_sub->subscription): ?>
            <div class="Subscription_area Subscription_area2 text-center section-over1 d-flex align-items-center section-bg mb-60"  style="background: url(<?php echo e(url('public/')); ?>/<?php echo e($blend_sub->subscription); ?>) no-repeat center center;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <span>
                                <a href="<?php echo e(route('subscription')); ?>">
                                <img src="http://localhost/myfrag/public/website/img/subscribetion.png" alt="" style="width:60px;">
                                Subscription
                            </a>
                            </span>
                            <a href="<?php echo e($blend_sub->subscription_url); ?>" class="btnw float-right tutorial-pop">Tutorial</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <?php endif; ?>


        <!-- Most Reviewed -->
        <div class="Trending_area section_padding3 gray-bg position-relative">
            <div class="see-all-product position-absolute">
                 <a href="" class="btnw">See More</a>
            </div>

            <div class="container container-special">
                <div class="row justify-content-center">
                    <div class="section_title text-center mb_30">
                        <h3>Most Reviewed/Trending</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cat-product-carousel owl-carousel">
                            <?php $__currentLoopData = $products['spray']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="single-product-carousel">
                                <div class="single_tranding">
                                    <a href="<?php echo e(route('product', @$item->slug)); ?>">
                                        <img src="<?php echo e(url('public/'.@$item->featured_img)); ?>" alt="">
                                        <div class="des">
                                            <p class="title"><?php echo e(@$item->name); ?></p>
                                            <p class="brand"><?php echo e(@$item->brand_name); ?></p>
                                            <p class="price"><?php echo e(@$item->unit_price); ?></p>
                                        </div>
                                    </a>
                                        <div class="des-hover">
                                          <span onclick="showAddToCartModal(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span>
                                    <?php if(Auth::check()): ?>
                                          <span data-toggle="tooltip"  onclick="addToCompareList(<?php echo e(@$item->id); ?>)" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                    <?php else: ?>
                                        <span onclick="addToCompare(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                    <?php endif; ?>
                                    <span onclick="addToWishList(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-heart"></i></span>
                                        </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Most Reviewed  -->

        <!-- New Arrival -->
        <div class="Trending_area section_padding3 gray-bg position-relative">
             <div class="see-all-product position-absolute">
                 <a href="" class="btnw">See More</a>
            </div>
            <div class="container container-special">
            <div class="row justify-content-center">
                    <div class="section_title text-center mb_30">
                        <h3>New Arrival</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cat-product-carousel owl-carousel">
                            <?php $__currentLoopData = $products['spray']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="single-product-carousel">
                                <div class="single_tranding">
                                    <a href="<?php echo e(route('product', @$item->slug)); ?>">
                                        <img src="<?php echo e(url('public/'.@$item->featured_img)); ?>" alt="">
                                        <div class="des">
                                            <p class="title"><?php echo e(@$item->name); ?></p>
                                            <p class="brand"><?php echo e(@$item->brand_name); ?></p>
                                            <p class="price"><?php echo e(@$item->unit_price); ?></p>
                                        </div>
                                    </a>
                                        <div class="des-hover">
                                          <span onclick="showAddToCartModal(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span>
                                    <?php if(Auth::check()): ?>
                                          <span data-toggle="tooltip"  onclick="addToCompareList(<?php echo e(@$item->id); ?>)" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                    <?php else: ?>
                                        <span onclick="addToCompare(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                    <?php endif; ?>
                                    <span onclick="addToWishList(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-heart"></i></span>
                                        </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New Arrival  -->

        <!-- Single product brand  -->
        <div class="category-bg  position-relative" style=" background-image: url(<?php echo e(asset('public/'.@$category['spray']->banner)); ?>);">
              <div class="see-all-product position-absolute">
                 <a href="" class="btnw">See More</a>
            </div>
            <div class="container container-special">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cat-product-carousel owl-carousel">
                            <?php $__currentLoopData = $products['spray']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="single-product-carousel">
                                <div class="single_tranding">
                                    <a href="<?php echo e(route('product', @$item->slug)); ?>">
                                        <img src="<?php echo e(url('public/'.@$item->featured_img)); ?>" alt="">
                                        <div class="des">
                                            <p class="title"><?php echo e(@$item->name); ?></p>
                                            <p class="brand"><?php echo e(@$item->brand_name); ?></p>
                                            <p class="price"><?php echo e(@$item->unit_price); ?></p>
                                        </div>
                                    </a>
                                        <div class="des-hover">
                                          <span onclick="showAddToCartModal(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span>
                                    <?php if(Auth::check()): ?>
                                          <span data-toggle="tooltip"  onclick="addToCompareList(<?php echo e(@$item->id); ?>)" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                    <?php else: ?>
                                        <span onclick="addToCompare(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                    <?php endif; ?>
                                    <span onclick="addToWishList(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-heart"></i></span>
                                        </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Single product brand  -->
        <!-- Single product brand  -->
        <div class="category-bg position-relative" style=" background-image: url(<?php echo e(asset('public/'.@$category['oil']->banner)); ?>);">
              <div class="see-all-product position-absolute">
                 <a href="" class="btnw">See More</a>
            </div>
            <div class="container container-special">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cat-product-carousel owl-carousel">
                            <?php $__currentLoopData = $products['oil']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="single-product-carousel">
                                <div class="single_tranding">
                                    <a href="<?php echo e(route('product', @$item->slug)); ?>">
                                        <img src="<?php echo e(url('public/'.@$item->featured_img)); ?>" alt="">
                                        <div class="des">
                                            <p class="title"><?php echo e(@$item->name); ?></p>
                                            <p class="brand"><?php echo e(@$item->brand_name); ?></p>
                                            <p class="price"><?php echo e(@$item->unit_price); ?></p>
                                        </div>
                                    </a>
                                       <div class="des-hover">
                                          <span onclick="showAddToCartModal(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span>
                                    <?php if(Auth::check()): ?>
                                          <span data-toggle="tooltip"  onclick="addToCompareList(<?php echo e(@$item->id); ?>)" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                    <?php else: ?>
                                        <span onclick="addToCompare(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                    <?php endif; ?>
                                    <span onclick="addToWishList(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-heart"></i></span>
                                        </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Single product brand  -->
        <!-- Single product brand  -->
        <div class="category-bg position-relative" style=" background-image: url(<?php echo e(asset('public/'.@$category['ambiance']->banner)); ?>);">
              <div class="see-all-product position-absolute">
                 <a href="" class="btnw">See More</a>
            </div>
            <div class="container container-special">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cat-product-carousel owl-carousel">
                            <?php $__currentLoopData = $products['ambiance']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="single-product-carousel">
                                    <div class="single_tranding">
                                        <a href="<?php echo e(route('product', @$item->slug)); ?>">
                                            <img src="<?php echo e(url('public/'.@$item->featured_img)); ?>" alt="">
                                            <div class="des">
                                                <p class="title"><?php echo e(@$item->name); ?></p>
                                                <p class="brand"><?php echo e(@$item->brand_name); ?></p>
                                                <p class="price"><?php echo e(@$item->unit_price); ?></p>
                                            </div>
                                        </a>
                                             <div class="des-hover">
                                          <span onclick="showAddToCartModal(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span>
                                    <?php if(Auth::check()): ?>
                                          <span data-toggle="tooltip"  onclick="addToCompareList(<?php echo e(@$item->id); ?>)" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                    <?php else: ?>
                                        <span onclick="addToCompare(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                    <?php endif; ?>
                                    <span onclick="addToWishList(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-heart"></i></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Single product brand  -->
        <!-- Single product brand  -->
        <div class="category-bg position-relative" style=" background-image: url(<?php echo e(asset('public/'.@$category['natural']->banner)); ?>);">
              <div class="see-all-product position-absolute">
                 <a href="" class="btnw">See More</a>
            </div>
            <div class="container container-special">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cat-product-carousel owl-carousel">
                            <?php $__currentLoopData = $products['natural']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="single-product-carousel">
                                    <div class="single_tranding">
                                        <a href="<?php echo e(route('product', @$item->slug)); ?>">
                                            <img src="<?php echo e(url('public/'.@$item->featured_img)); ?>" alt="">
                                            <div class="des">
                                                <p class="title"><?php echo e(@$item->name); ?></p>
                                                <p class="brand"><?php echo e(@$item->brand_name); ?></p>
                                                <p class="price"><?php echo e(@$item->unit_price); ?></p>
                                            </div>
                                        </a>
                                            <div class="des-hover">
                                          <span onclick="showAddToCartModal(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span>
                                    <?php if(Auth::check()): ?>
                                          <span data-toggle="tooltip"  onclick="addToCompareList(<?php echo e(@$item->id); ?>)" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                    <?php else: ?>
                                        <span onclick="addToCompare(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                    <?php endif; ?>
                                    <span onclick="addToWishList(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-heart"></i></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Single product brand  -->
        <!-- Single product brand  -->
        <div class="category-bg position-relative" style=" background-image: url(<?php echo e(asset('public/'.@$category['essential']->banner)); ?>);">
              <div class="see-all-product position-absolute">
                 <a href="" class="btnw">See More</a>
            </div>
            <div class="container container-special">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cat-product-carousel owl-carousel">
                            <?php $__currentLoopData = $products['essential']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="single-product-carousel">
                                    <div class="single_tranding">
                                        <a href="<?php echo e(route('product', @$item->slug)); ?>">
                                            <img src="<?php echo e(url('public/'.@$item->featured_img)); ?>" alt="">
                                            <div class="des">
                                                <p class="title"><?php echo e(@$item->name); ?></p>
                                                <p class="brand"><?php echo e(@$item->brand_name); ?></p>
                                                <p class="price"><?php echo e(@$item->unit_price); ?></p>
                                            </div>
                                        </a>
                                            <div class="des-hover">
                                          <span onclick="showAddToCartModal(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span>
                                    <?php if(Auth::check()): ?>
                                          <span data-toggle="tooltip"  onclick="addToCompareList(<?php echo e(@$item->id); ?>)" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                    <?php else: ?>
                                        <span onclick="addToCompare(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                    <?php endif; ?>
                                    <span onclick="addToWishList(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-heart"></i></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Single product brand  -->
        <!-- Single product brand  -->
        <div class="category-bg position-relative" style=" background-image: url(<?php echo e(asset('public/'.@$category['bakhoor']->banner)); ?>);">
              <div class="see-all-product position-absolute">
                 <a href="" class="btnw">See More</a>
            </div>
            <div class="container container-special">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cat-product-carousel owl-carousel">
                            <?php $__currentLoopData = $products['bakhoor']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="single-product-carousel">
                                    <div class="single_tranding">
                                        <a href="<?php echo e(route('product', @$item->slug)); ?>">
                                            <img src="<?php echo e(url('public/'.@$item->featured_img)); ?>" alt="">
                                            <div class="des">
                                                <p class="title"><?php echo e(@$item->name); ?></p>
                                                <p class="brand"><?php echo e(@$item->brand_name); ?></p>
                                                <p class="price"><?php echo e(@$item->unit_price); ?></p>
                                            </div>
                                        </a>
                                             <div class="des-hover">
                                          <span onclick="showAddToCartModal(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-basket"></i></span>
                                    <?php if(Auth::check()): ?>
                                          <span data-toggle="tooltip"  onclick="addToCompareList(<?php echo e(@$item->id); ?>)" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                    <?php else: ?>
                                        <span onclick="addToCompare(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-random"></i></span>
                                    <?php endif; ?>
                                    <span onclick="addToWishList(<?php echo e(@$item->id); ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop"><i class="fa fa-heart"></i></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Single product brand  -->
    </div>
</div>


</body>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<style>
    .see-more{
        margin: 64px 0px !important;
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('website.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>