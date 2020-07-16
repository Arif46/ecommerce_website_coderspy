<?php /* E:\xampp\htdocs\myfragmence\resources\views/country/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-sm-12">
        <a href="<?php echo e(route('country_create')); ?>" class="btn btn-rounded btn-info pull-right"><?php echo e(__('Add New Country')); ?></a>
    </div>
</div>

<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no"><?php echo e(__('Country List')); ?></h3>
        <div class="pull-right clearfix">
            <form class="" id="sort_country" action="" method="GET">
                <div class="box-inline pad-rgt pull-left">
                    <div class="" style="min-width: 200px;">
                        <input type="text" class="form-control" id="search" name="search"<?php if(isset($sort_search)): ?> value="<?php echo e($sort_search); ?>" <?php endif; ?> placeholder=" Type Name & Enter">
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
                    <th><?php echo e(__('Region')); ?></th>
                    <th><?php echo e(__('Code')); ?></th>
                    <th><?php echo e(__('Nicename')); ?></th>
                    <th><?php echo e(__('ISO3')); ?></th>
                    <th><?php echo e(__('Numcode')); ?></th>
                    <th><?php echo e(__('Phonecode')); ?></th>
                    <th><?php echo e(__('Status')); ?></th>
                    <th width="10%"><?php echo e(__('Options')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e(($key+1) + (@$countries->currentPage() - 1)*@$countries->perPage()); ?></td>
                        <td><?php echo e(@$country->name); ?></td>
                        <td><?php echo e(@$country->region_name); ?></td>
                        <td><?php echo e(@$country->code); ?></td>
                        <td><?php echo e(@$country->nicename); ?></td>
                        <td><?php echo e(@$country->iso3); ?></td>
                        <td><?php echo e(@$country->numcode); ?></td>
                        <td><?php echo e(@$country->phonecode); ?></td>
                        <td>
                            <?php if($country->active_status == '0'): ?>
                                <span class="badge badge-pill badge-danger">Deavtive</span>
                            <?php else: ?>
                                <span class="badge badge-pill badge-success">Active</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    <?php echo e(__('Actions')); ?> <i class="dropdown-caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="<?php echo e(route('country_edit', encrypt(@$country->id))); ?>"><?php echo e(__('Edit')); ?></a></li>
                                    <li><a onclick="confirm_modal('<?php echo e(route('country_destroy', @$country->id)); ?>');"><?php echo e(__('Delete')); ?></a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="clearfix">
            <div class="pull-right">
                <?php echo e($countries->appends(request()->input())->links()); ?>

            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        function sort_brands(el){
            $('#sort_country').submit();
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>