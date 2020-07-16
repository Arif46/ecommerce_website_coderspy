<?php /* E:\xampp\htdocs\myfragmence\resources\views/brands/edit.blade.php */ ?>
<?php $__env->startSection('content'); ?>

<div class="col-lg-6 col-lg-offset-3">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo e(__('Brand Information')); ?></h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="<?php echo e(route('brands.update', $brand->id)); ?>" method="POST" enctype="multipart/form-data">
            <input name="_method" type="hidden" value="PATCH">
        	<?php echo csrf_field(); ?>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name"><?php echo e(__('Name')); ?></label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="<?php echo e(__('Name')); ?>" id="name" name="name" class="form-control" required value="<?php echo e($brand->name); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name"><?php echo e(__('Country')); ?></label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="<?php echo e(__('Country')); ?>" id="country" name="country" value="<?php echo e($brand->country); ?>" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name"><?php echo e(__('Activity')); ?></label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="<?php echo e(__('Activity')); ?>" id="brands_activity" name="brands_activity" value="<?php echo e($brand->brands_activity); ?>" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name"><?php echo e(__('Company')); ?></label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="<?php echo e(__('Company')); ?>" id="brands_parent_company" name="brands_parent_company" value="<?php echo e($brand->brands_parent_company); ?>" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name"><?php echo e(__('Website')); ?></label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="<?php echo e(__('Website')); ?>" id="website" name="website" class="form-control" value="<?php echo e($brand->website); ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="logo"><?php echo e(__('Logo')); ?> <small>(120x80)</small></label>
                    <div class="col-sm-10">
                        <input type="file" id="logo" name="logo" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"><?php echo e(__('Meta Title')); ?></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="meta_title" value="<?php echo e($brand->meta_title); ?>" placeholder="<?php echo e(__('Meta Title')); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"><?php echo e(__('Description')); ?></label>
                    <div class="col-sm-10">
                        <textarea name="meta_description" rows="8" class="form-control"><?php echo e($brand->meta_description); ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name"><?php echo e(__('Slug')); ?></label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="<?php echo e(__('Slug')); ?>" id="slug" name="slug" value="<?php echo e($brand->slug); ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"><?php echo e(__('About')); ?></label>
                    <div class="col-sm-10">
                        <textarea name="about" rows="5" class="form-control"><?php echo e($brand->about); ?></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <button class="btn btn-purple" type="submit"><?php echo e(__('Update')); ?></button>
            </div>
        </form>
        <!--===================================================-->
        <!--End Horizontal Form-->

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>