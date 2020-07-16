<?php /* E:\xampp\htdocs\myfragmence\resources\views/layouts/login.blade.php */ ?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link name="favicon" type="image/x-icon" href="<?php echo e(asset('public/img/favicon.png')); ?>" rel="shortcut icon" />

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="<?php echo e(asset('public/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!--Font Awesome [ OPTIONAL ]-->
    <link href="<?php echo e(asset('public/plugins/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">

    <!--active-shop Stylesheet [ REQUIRED ]-->
    <!-- <link href="<?php echo e(asset('public/css/active-shop.min.css')); ?>" rel="stylesheet"> -->

    <!--active-shop Premium Icon [ DEMONSTRATION ]-->
    <!-- <link href="<?php echo e(asset('public/css/demo/active-shop-demo-icons.min.css')); ?>" rel="stylesheet"> -->

    <!--Demo [ DEMONSTRATION ]-->
    <!-- <link href="<?php echo e(asset('public/css/demo/active-shop-demo.min.css')); ?>" rel="stylesheet"> -->

    <!--Theme [ DEMONSTRATION ]-->
    <!-- <link href="<?php echo e(asset('public/css/themes/type-c/theme-navy.min.css')); ?>" rel="stylesheet"> -->

    <!-- <link href="<?php echo e(asset('public/css/custom.css')); ?>" rel="stylesheet"> -->


    <link href="<?php echo e(asset('public/website/css/style.css')); ?>" rel="stylesheet">




</head>
<body>
    <?php
        $generalsetting = \App\GeneralSetting::first();
    ?>


    <?php echo $__env->yieldContent('content'); ?>



    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src=" <?php echo e(asset('public/js/jquery.min.js')); ?>"></script>





    <!-- Admin page Video-->
    <script src="<?php echo e(url('public/website/js/vendor/jquery-1.12.4.min.js ')); ?> "></script>
    <script src="<?php echo e(url('public/website/js/jquery.vide.js')); ?>"></script>



    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="<?php echo e(asset('public/js/bootstrap.min.js')); ?>"></script>


    <!--active-shop [ RECOMMENDED ]-->
    <!-- <script src="<?php echo e(asset('public/js/active-shop.min.js')); ?>"></script> -->

    <!--Alerts [ SAMPLE ]-->
    <script src="<?php echo e(asset('public/js/demo/ui-alerts.js')); ?>"></script>

    <?php echo $__env->yieldContent('script'); ?>

</body>
</html>
