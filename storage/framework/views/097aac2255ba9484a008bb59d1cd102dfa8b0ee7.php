<?php /* E:\xampp\htdocs\myfragmence\resources\views/business_settings/facebook_chat.blade.php */ ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title text-center"><?php echo e(__('Facebook Chat Setting')); ?></h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="<?php echo e(route('facebook_chat.update')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <div class="col-lg-3">
                                <label class="control-label"><?php echo e(__('Facebook Chat')); ?></label>
                            </div>
                            <div class="col-lg-6">
                                <label class="switch">
                                    <input value="1" name="facebook_chat" type="checkbox" <?php if(\App\BusinessSetting::where('type', 'facebook_chat')->first()->value == 1): ?>
                                        checked
                                    <?php endif; ?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="types[]" value="FACEBOOK_PAGE_ID">
                            <div class="col-lg-3">
                                <label class="control-label"><?php echo e(__('Facebook Page ID')); ?></label>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="FACEBOOK_PAGE_ID" value="<?php echo e(env('FACEBOOK_PAGE_ID')); ?>" placeholder="Facebook Page ID" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 text-right">
                                <button class="btn btn-purple" type="submit"><?php echo e(__('Save')); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel bg-gray-light">
                <div class="panel-body">
                    <p class="h5"><?php echo e(__('Please be carefull when you are configuring Facebook chat. For incorrect configuration you will not get messenger icon on your user-end site.')); ?></p>
                    <ul class="list-group mar-no">
                        <li class="list-group-item text-dark">1. Login into your facebook page</li>
                        <li class="list-group-item text-dark">2. Find the About option of your facebook page.</li>
                        <li class="list-group-item text-dark">3. At the very bottom, you can find the “Facebook Page ID”.</li>
                        <li class="list-group-item text-dark">4. Go to Settings of your page and find the option of "Advance Messaging".</li>
                        <li class="list-group-item text-dark">5. Scroll down that page and you will get "white listed domain".</li>
                        <li class="list-group-item text-dark">6. Set your website domain name.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title text-center"><?php echo e(__('Facebook Pixel Setting')); ?></h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="<?php echo e(route('facebook_pixel.update')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <div class="col-lg-3">
                                <label class="control-label"><?php echo e(__('Facebook Pixel')); ?></label>
                            </div>
                            <div class="col-lg-6">
                                <label class="switch">
                                    <input value="1" name="facebook_pixel" type="checkbox" <?php if(\App\BusinessSetting::where('type', 'facebook_pixel')->first()->value == 1): ?>
                                        checked
                                    <?php endif; ?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="types[]" value="FACEBOOK_PIXEL_ID">
                            <div class="col-lg-3">
                                <label class="control-label"><?php echo e(__('Facebook Pixel ID')); ?></label>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="FACEBOOK_PIXEL_ID" value="<?php echo e(env('FACEBOOK_PIXEL_ID')); ?>" placeholder="Facebook Pixel ID" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 text-right">
                                <button class="btn btn-purple" type="submit"><?php echo e(__('Save')); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel bg-gray-light">
                <div class="panel-body">
                    <p class="h5"><?php echo e(__('Please be carefull when you are configuring Facebook pixel.')); ?></p>
                    <ul class="list-group mar-no">
                        <li class="list-group-item text-dark">1. Log in to Facebook and go to your Ads Manager account.</li>
                        <li class="list-group-item text-dark">2. Open the Navigation Bar and select Events Manager.</li>
                        <li class="list-group-item text-dark">3. Copy your Pixel ID from underneath your Site Name and paste the number into Facebook Pixel ID field.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>