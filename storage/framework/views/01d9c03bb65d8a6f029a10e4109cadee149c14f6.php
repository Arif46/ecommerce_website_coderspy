<?php /* E:\xampp\htdocs\myfragmence\resources\views/perfumes/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-12">
        <a href="<?php echo e(route('perfumes.create')); ?>" class="btn btn-rounded btn-info pull-right"><?php echo e(__('Add New Perfumer')); ?></a>
    </div>
    <div class="col-sm-2"></div>
    <div class="col-sm-3">
        <form action="<?php echo e(route('perfumersImport')); ?>" method="POST" name="importform" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <input type="file" name="file" class="form-control" required>
    </div>
    <div class="col-sm-6">
        <button class="btn btn-success">Import Excel Sheet</button>
        <a class="float-right btn btn-primary" href="<?php echo e(route('perfumesExport')); ?>">Export Perfume</a>
    </div>
    </form>
</div>
<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no"><?php echo e(__('Perfume')); ?></h3>
        <div class="pull-right clearfix">
            <form class="" id="sort_brands" action="" method="GET">
                <div class="box-inline pad-rgt pull-left">
                    <div class="" style="min-width: 200px;">
                        <input type="text" class="form-control" id="search" name="search"<?php if(isset($sort_search)): ?> value="<?php echo e($sort_search); ?>" <?php endif; ?> placeholder=" Type name & Enter">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped res-table mar-no" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo e(__('Name')); ?></th>
                    <th><?php echo e(__('Image')); ?></th>
                    <th><?php echo e(__('Education')); ?></th>
                    <th><?php echo e(__('Number')); ?></th>
                    <th><?php echo e(__('Website')); ?></th>
                    <th width="10%"><?php echo e(__('Options')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e(($key+1) + ($brands->currentPage() - 1)*$brands->perPage()); ?></td>
                        <td><?php echo e($brand->name); ?></td>
                        <td><img loading="lazy"  class="img-md" src="<?php echo e(asset('public/'.$brand->img)); ?>" alt="Logo"></td>
                        <td><?php echo e($brand->education); ?></td>
                        <td><?php echo e($brand->number_database); ?></td>
                        <td><?php echo e($brand->website); ?></td>
                        <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    <?php echo e(__('Actions')); ?> <i class="dropdown-caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="<?php echo e(route('perfumes.edit', encrypt($brand->id))); ?>"><?php echo e(__('Edit')); ?></a></li>
                                    <li><a onclick="confirm_modal('<?php echo e(route('perfumes.destroy', $brand->id)); ?>');"><?php echo e(__('Delete')); ?></a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="clearfix">
            <div class="pull-right">
                <?php echo e($brands->appends(request()->input())->links()); ?>

            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        function sort_brands(el){
            $('#sort_brands').submit();
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>