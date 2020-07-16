<?php /* E:\xampp\htdocs\myfragmence\resources\views/website/pages/users_login.blade.php */ ?>
<?php $__env->startSection('title','Login Form'); ?>
<?php $__env->startSection('content'); ?>
<style>
.btn-purple {
    color: #FFF;
    background-color: #5856d6;
    border-color: #5856d6;
}

.btn-purple:active,
.btn-purple:focus,
.btn-purple:hover {
    background-color: #3331c8;
    border-color: #3331c8;
    color: #FFF;
}

.btn-purple.btn-outline {
    background-color: transparent;
    border-color: #5856d6;
    color: #5856d6;
}

.btn-purple.btn-outline:active,
.btn-purple.btn-outline:focus,
.btn-purple.btn-outline:hover {
    background-color: #5856d6;
    border-color: #5856d6;
    color: #5856d6;
}

.btn-color-470604 {
    color: #ffffff !important;
    background: linear-gradient(to left, #e9168c 2%, #f75254 99%);
    background: -o-linear-gradient(left, #e9168c 2%, #f75254 99%);
    background: -ms-linear-gradient(left, #e9168c 2%, #f75254 99%);
    background: -moz-linear-gradient(left, #e9168c 2%, #f75254 99%);
    background: -webkit-linear-gradient(left, #e9168c 2%, #f75254 99%);
    border-image: linear-gradient(to left, #e9168c 2%, #f75254 99%);
    border-image: -o-linear-gradient(left, #e9168c 2%, #f75254 99%);
    border-image: -ms-linear-gradient(left, #e9168c 2%, #f75254 99%);
    border-image: -moz-linear-gradient(left, #e9168c 2%, #f75254 99%);
    border-image: -webkit-linear-gradient(left, #e9168c 2%, #f75254 99%);
}

.btn-color-470604:active,
.btn-color-470604:focus,
.btn-color-470604:hover {
    background: linear-gradient(to left, #e9168c 2%, #f75254 99%);
    background: -o-linear-gradient(left, #e9168c 2%, #f75254 99%);
    background: -ms-linear-gradient(left, #e9168c 2%, #f75254 99%);
    background: -moz-linear-gradient(left, #e9168c 2%, #f75254 99%);
    background: -webkit-linear-gradient(left, #e9168c 2%, #f75254 99%);
    border-image: linear-gradient(to left, #e9168c 2%, #f75254 99%);
    border-image: -o-linear-gradient(left, #e9168c 2%, #f75254 99%);
    border-image: -ms-linear-gradient(left, #e9168c 2%, #f75254 99%);
    border-image: -moz-linear-gradient(left, #e9168c 2%, #f75254 99%);
    border-image: -webkit-linear-gradient(left, #e9168c 2%, #f75254 99%);
}

.btn-gradient-2 {
    color: #ffffff !important;
    background: linear-gradient(left, #089997 2%, #1e101d 99%);
    background: -o-linear-gradient(left, #089997 2%, #1e101d 99%);
    background: -ms-linear-gradient(left, #089997 2%, #1e101d 99%);
    background: -moz-linear-gradient(left, #089997 2%, #1e101d 99%);
    background: -webkit-linear-gradient(left, #089997 2%, #1e101d 99%);
    border-image: linear-gradient(left, #089997 2%, #1e101d 99%);
    border-image: -o-linear-gradient(left, #089997 2%, #1e101d 99%);
    border-image: -ms-linear-gradient(left, #089997 2%, #1e101d 99%);
    border-image: -moz-linear-gradient(left, #089997 2%, #1e101d 99%);
    border-image: -webkit-linear-gradient(left, #089997 2%, #1e101d 99%);
}

.btn-gradient-2:active,
.btn-gradient-2:focus,
.btn-gradient-2:hover {
    background: linear-gradient(left, #089997 2%, #1e101d 99%);
    background: -o-linear-gradient(left, #089997 2%, #1e101d 99%);
    background: -ms-linear-gradient(left, #089997 2%, #1e101d 99%);
    background: -moz-linear-gradient(left, #089997 2%, #1e101d 99%);
    background: -webkit-linear-gradient(left, #089997 2%, #1e101d 99%);
    border-image: linear-gradient(left, #089997 2%, #1e101d 99%);
    border-image: -o-linear-gradient(left, #089997 2%, #1e101d 99%);
    border-image: -ms-linear-gradient(left, #089997 2%, #1e101d 99%);
    border-image: -moz-linear-gradient(left, #089997 2%, #1e101d 99%);
    border-image: -webkit-linear-gradient(left, #089997 2%, #1e101d 99%);
}

.btn-facebook {
    color: #fff;
    background-color: #3b5998;
    border-color: #3b5998;
}

.btn-linkedin {
    color: #fff;
    background-color: #0077b5;
    border-color: #0077b5;
}

.btn-instagram {
    color: #fff;
    background-color: #b55427;
    border-color: #b55427;
}

.btn-facebook:active,
.btn-facebook:focus,
.btn-facebook:hover {
    background-color: #2d4373;
    border-color: #2d4373;
    color: #fff;
}

.btn-facebook.btn-outline {
    background-color: transparent;
    border-color: #3b5998;
    color: #3b5998;
}

.btn-facebook.btn-outline:active,
.btn-facebook.btn-outline:focus,
.btn-facebook.btn-outline:hover {
    background-color: #3b5998;
    border-color: #3b5998;
    color: #3b5998;
}

.btn-google {
    color: #fff;
    background-color: #dd4b39;
    border-color: #dd4b39;
}

.btn-google:active,
.btn-google:focus,
.btn-google:hover {
    background-color: #c23321;
    border-color: #c23321;
    color: #fff;
}

.btn-google.btn-outline {
    background-color: transparent;
    border-color: #dd4b39;
    color: #dd4b39;
}

.btn-google.btn-outline:active,
.btn-google.btn-outline:focus,
.btn-google.btn-outline:hover {
    background-color: #dd4b39;
    border-color: #dd4b39;
    color: #dd4b39;
}


.btn-twitter {
    color: #fff;
    background-color: #00aced;
    border-color: #00aced;
}

.btn-twitter:active,
.btn-twitter:focus,
.btn-twitter:hover {
    background-color: #0493bf;
    border-color: #0493bf;
    color: #fff;
}

.btn-twitter.btn-outline {
    background-color: transparent;
    border-color: #00aced;
    color: #00aced;
}

.btn-twitter.btn-outline:active,
.btn-twitter.btn-outline:focus,
.btn-twitter.btn-outline:hover {
    background-color: #00aced;
    border-color: #00aced;
    color: #00aced;
}

.btn-icon-left .icon,
.btn-icon-left .fa {
    margin-right: 0.625rem;
}

.btn-icon-right .icon,
.btn-icon-right .fa {
    margin-left: 0.625rem;
}

.btn-icon--2 {
    position: relative;
    padding-left: 40px !important;
}

.btn-icon--2 .icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    left: 0;
    top: 0;
    width: 40px;
    height: 100%;
    background: rgba(0, 0, 0, 0.2);
}

.link-xs {
    font-size: 0.75rem;
}

a {
    color: #72bf40;
}

.btn-anim-primary:before,
.bootstrap-tagsinput .label,
.logo-bar-icons .nav-search-box .nav-box-number,
.logo-bar-icons .nav-compare-box .nav-box-number,
.logo-bar-icons .nav-wishlist-box .nav-box-number,
.logo-bar-icons .nav-cart-box .nav-box-number,
.side-menu-list ul li .badge,
.navbar.bg-base-1,
.btn-base-1,
.vd--1,
.vd--2,
.checkbox-primary input[type="checkbox"]:checked+label::before,
.checkbox-primary input[type="radio"]:checked+label::before,
.radio input[type="radio"]:checked+label::after,
.radio-primary input[type="radio"]+label::after,
.radio-primary input[type="radio"]:checked+label::after,
.form-card--style-2 .form-header,
.modal[data-modal-color=base-1] .modal-content,
.pagination>.active .page-link,
.pagination>.active .page-link:focus,
.pagination>.active .page-link:hover,
.pagination>.active>span,
.pagination>.active>span:focus,
.pagination>.active>span:hover,
.pager .page-item .page-link:focus,
.pager .page-item .page-link:hover,
.progress-bar,
.flatpickr-month,
.hamburger.is-active .hamburger-inner:after,
.hamburger.is-active .hamburger-inner:before,
.noUi-horizontal .noUi-handle,
.noUi-vertical .noUi-handle,
.input-group-btn-vertical>.btn:hover,
#map-zoom-in:hover,
#map-zoom-out:hover,
.product-box-2 .add-to-cart:hover {
    background-color: #72bf40;
}
</style>

<section class="gry-bg py-5">
    <div class="profile">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="card">
                        <div class="text-center px-35 pt-5">
                            <h3 class="heading heading-4 strong-500">
                                <?php echo e(__('Login to your account.')); ?>

                            </h3>
                        </div>
                        <div class="px-5 py-3 py-lg-5">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg">
                                    <form class="form-default" role="form" action="<?php echo e(route('login')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- <label><?php echo e(__('email')); ?></label> -->
                                                    <div class="input-group input-group--style-1">
                                                        <?php if(\App\Addon::where('unique_identifier',
                                                        'otp_system')->first() != null &&
                                                        \App\Addon::where('unique_identifier',
                                                        'otp_system')->first()->activated): ?>
                                                        <input type="text"
                                                            class="form-control form-control-sm <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                                            value="<?php echo e(old('email')); ?>"
                                                            placeholder="<?php echo e(__('Email Or Phone')); ?>" name="email"
                                                            id="email">
                                                        <?php else: ?>
                                                        <input type="email"
                                                            class="form-control form-control-sm <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                                            value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(__('Email')); ?>"
                                                            name="email">
                                                        <?php endif; ?>
                                                        <span class="input-group-addon">
                                                            <i class="text-md la la-user"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- <label><?php echo e(__('password')); ?></label> -->
                                                    <div class="input-group input-group--style-1">
                                                        <input type="password"
                                                            class="form-control <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                                                            placeholder="<?php echo e(__('Password')); ?>" name="password"
                                                            id="password">
                                                        <span class="input-group-addon">
                                                            <i class="text-md la la-lock"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="checkbox pad-btm text-left">
                                                        <input id="demo-form-checkbox" class="magic-checkbox"
                                                            type="checkbox" name="remember" id="remember"
                                                            <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                        <label for="demo-form-checkbox" class="text-sm">
                                                            <?php echo e(__('Remember Me')); ?>

                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 text-right">
                                                <a href="<?php echo e(route('password.request')); ?>"
                                                    class="link link-xs link--style-3"><?php echo e(__('Forgot password?')); ?></a>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col text-center">
                                                <button type="submit"
                                                    class="btn btn-styled btn-base-1 btn-md w-100"><?php echo e(__('Login')); ?></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-1 text-center align-self-stretch">
                                    <div class="border-right h-100 mx-auto" style="width:1px;"></div>
                                </div>
                                <div class="col-12 col-lg">
                                    <?php if(\App\BusinessSetting::where('type', 'google_login')->first()->value == 1): ?>
                                    <a href="<?php echo e(route('social.login', ['provider' => 'google'])); ?>"
                                        class="btn btn-styled btn-block btn-google btn-icon--2 btn-icon-left px-4 my-4">
                                        <i class="icon fa fa-google"></i> <?php echo e(__('Login with Google')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if(\App\BusinessSetting::where('type', 'facebook_login')->first()->value == 1): ?>
                                    <a href="<?php echo e(route('social.login', ['provider' => 'facebook'])); ?>"
                                        class="btn btn-styled btn-block btn-facebook btn-icon--2 btn-icon-left px-4 my-4">
                                        <i class="icon fa fa-facebook"></i> <?php echo e(__('Login with Facebook')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if(\App\BusinessSetting::where('type', 'twitter_login')->first()->value == 1): ?>
                                    <a href="<?php echo e(route('social.login', ['provider' => 'twitter'])); ?>"
                                        class="btn btn-styled btn-block btn-twitter btn-icon--2 btn-icon-left px-4 my-4">
                                        <i class="icon fa fa-twitter"></i> <?php echo e(__('Login with Twitter')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if(\App\BusinessSetting::where('type', 'linkedin_login')->first()->value == 1): ?>
                                    <a href="<?php echo e(route('social.login', ['provider' => 'linkedin'])); ?>"
                                        class="btn btn-styled btn-block btn-linkedin btn-icon--2 btn-icon-left px-4 my-4">
                                        <i class="icon fa fa-linkedin"></i> <?php echo e(__('Login with Linkedin')); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if(\App\BusinessSetting::where('type', 'instagram_login')->first()->value == 1): ?>
                                    <a href="<?php echo e(route('social.login', ['provider' => 'instagram'])); ?>"
                                        class="btn btn-styled btn-block btn-instagram btn-icon--2 btn-icon-left px-4 my-4">
                                        <i class="icon fa fa-instagram"></i> <?php echo e(__('Login with Instagram')); ?>

                                    </a>
                                    <?php endif; ?>

                                    <?php if(\App\BusinessSetting::where('type', 'pinterest_login')->first()->value == 1): ?>
                                    <a href="<?php echo e(route('social.login', ['provider' => 'pinterest'])); ?>"
                                        class="btn btn-styled btn-block btn-google btn-icon--2 btn-icon-left px-4 my-4">
                                        <i class="icon fa fa-pinterest"></i> <?php echo e(__('Login with Pinterest')); ?>

                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="text-center px-35 pb-3">
                            <p class="text-md">
                                <?php echo e(__('Need an account?')); ?> <a href="<?php echo e(route('customersRegister')); ?>"
                                    class="strong-600"><?php echo e(__('Register Now')); ?></a>
                            </p>
                        </div>
                    </div>
                </div>

                

    </div>
    </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('website.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>