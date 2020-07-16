<?php /* E:\xampp\htdocs\myfragmence\resources\views/auth/login1.blade.php */ ?>
<?php $__env->startSection('content'); ?>


<main class="login-body" data-vide-bg="<?php echo e(url('public/uploads/admin_bg.mp4')); ?>">

    <!-- Login Admin -->
    
    <div class="login-form">
        <!-- logo-login -->
        <div class="logo-login">
            <img src="<?php echo e(url('public/website/img/logo-login.png')); ?>" alt="">
        </div>
        <h2>Login Here</h2>
        <div class="form-input">
            <label for="name">Email</label>
            <input type="text" name="email" placeholder="Email">
        </div>
        <div class="form-input">
            <label for="name">Password</label>
            <input type="password" name="password" placeholder="Password">
        </div>
        <div class="form-input pt-30">
            <input type="submit" name="submit" value="login">
        </div>
        <!-- Forget Password -->
        <a href="#" class="forget">Forget Password</a>
    </div>
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