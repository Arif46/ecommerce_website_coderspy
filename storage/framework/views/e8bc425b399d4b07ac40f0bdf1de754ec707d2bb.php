<?php /* E:\xampp\htdocs\myfragmence\resources\views/packeg/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-12">
            <a href="<?php echo e(route('packegs.create')); ?>" class="btn btn-rounded btn-info pull-right"><?php echo e(__('Create Packeg')); ?></a>
        </div>
    </div>
    <br>

    <!-- Basic Data Tables -->
    <!--===================================================-->
    <div class="panel">
        <div class="panel-heading bord-btm clearfix pad-all h-100">
            <h3 class="panel-title pull-left pad-no"><?php echo e(__('Packegs')); ?></h3>

        </div>
        <div class="panel-body">
            <table class="table table-striped res-table mar-no" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo e(__('Name')); ?></th>
                    <th><?php echo e(__('Description')); ?></th>
                    <th><?php echo e(__('Count Product')); ?></th>
                    <th><?php echo e(__('Regular Price')); ?></th>
                    <th><?php echo e(__('Offer Price')); ?></th>
                    <th width="10%"><?php echo e(__('Status')); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php ($i=1); ?>
                    <?php $__currentLoopData = $packegs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $packeg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr
                            <?php if($packeg->type ==1): ?>
                                style="background-color: greenyellow"
                            <?php endif; ?>
                            >
                                <td><?php echo e($i++); ?></td>
                                <td width="30%"><?php echo e($packeg->name); ?>

                                    <?php if($packeg->type ==1): ?><span style="color: white">Defualt Packeg</span><?php endif; ?></td>
                                <td><?php echo e(\Illuminate\Support\Str::limit(strip_tags($packeg->description),20,'...')); ?></td>
                                <td><?php echo e($packeg->product_count); ?></td>
                                <td><?php echo e($packeg->regular_price); ?></td>
                                <td><?php echo e($packeg->offer_price); ?></td>
                                <td><?php echo e($packeg->status); ?></td>
                                <td>
                                    <div class="btn-group dropdown">
                                        <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                            <?php echo e(__('Actions')); ?> <i class="dropdown-caret"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="<?php echo e(route('packegs.edit', $packeg->id)); ?>"><?php echo e(__('Edit')); ?></a></li>
                                            <li><a onclick="confirm_modal('<?php echo e(route('packeg_delete', $packeg->id)); ?>');"><?php echo e(__('Delete')); ?></a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <div class="clearfix">
                <div class="pull-right">
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript">

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>