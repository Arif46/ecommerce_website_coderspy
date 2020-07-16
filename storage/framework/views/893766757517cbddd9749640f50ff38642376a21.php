<?php /* E:\xampp\htdocs\myfragmence\resources\views/auth/login.blade.php */ ?>
<?php
    $logo = App\GeneralSetting::first();
?>

<?php $__env->startSection('content'); ?>


<main class="login-body" data-vide-bg="<?php echo e(url('public/uploads/admin_bg.mp4')); ?>">

    <!-- Login Admin -->
<form class="form-default" role="form" action="<?php echo e(route('login')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="login-form">
        <!-- logo-login -->
        <div class="logo-login">
        <img src="<?php echo e(asset('public/')); ?>/<?php echo e(@$logo->admin_logo); ?>" alt="">
        </div>
        <h2>Login Here</h2>
        <div class="form-input">
            <label for="name">Email</label>
            <input class="form-control form-control-sm <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" value="<?php echo e(old('email')); ?>" type="email" name="email" placeholder="Email">
            <span class="focus-border"></span>
            <?php if($errors->has('email')): ?>
                <span class="invalid-feedback invalid-select" role="alert">
                    <strong style="color: red;"><?php echo e($errors->first('email')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
        <div class="form-input">
            <label for="name">Password</label>
            <input class="form-control form-control-sm <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" type="password" name="password" placeholder="Password">
            <span class="focus-border"></span>
            <?php if($errors->has('password')): ?>
                <span class="invalid-feedback invalid-select" role="alert">
                    <strong style="color: red;"><?php echo e($errors->first('password')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
        <div class="form-input pt-30">
            <input type="submit" name="submit" value="login">
        </div>
        <!-- Forget Password -->
        <a href="<?php echo e(route('password.request')); ?>" class="forget">Forget Password</a>
    </div>
</form>
    <!-- /end login form -->

</main>





<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        function autoFill(){
            $('#email').val('admin@example.com');
            $('#password').val('123456');
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>