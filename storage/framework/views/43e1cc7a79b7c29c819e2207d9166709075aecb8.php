<?php /* E:\xampp\htdocs\myfragmence\resources\views/notes_category/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-sm-12">
        <a href="<?php echo e(route('notecategory.create')); ?>" class="btn btn-rounded btn-info pull-right"><?php echo e(__('Add New Category')); ?></a>
    </div>
</div>

<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no"><?php echo e(__('Notes Category')); ?></h3>
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
                    <th>SL.</th>
                    <th><?php echo e(__('Name')); ?></th>
                    <th><?php echo e(__('Description')); ?></th>
                    <th><?php echo e(__('Banner Image')); ?></th>
                    <th><?php echo e(__('Status')); ?></th>
                    <th width="10%"><?php echo e(__('Options')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $notes_categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $notes_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e(($key+1) + ($notes_categorys->currentPage() - 1)*$notes_categorys->perPage()); ?></td>
                        <td><?php echo e(@$notes_category->name); ?></td>
                        <td style="width: 40%"><?php echo e(substr(@$notes_category->description,0,200)); ?> ...</td>
                        <td>
                            <img loading="lazy"  class="img img-responsive" src="<?php echo e(asset('public/'.$notes_category->image)); ?>" alt="Logo" style="width:80px; height:auto">
                        </td>
                        <td>
                            <?php if($notes_category->active_status == '0'): ?>
                                <span class="badge badge-pill badge-danger" style="padding: 10px;">Deavtive</span>
                            <?php else: ?>
                                <span class="badge badge-pill badge-success" style="padding: 10px;">Active</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    <?php echo e(__('Actions')); ?> <i class="dropdown-caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="<?php echo e(route('notecategory.edit', encrypt(@$notes_category->id))); ?>"><?php echo e(__('Edit')); ?></a></li>
                                    <li><a onclick="confirm_modal('<?php echo e(route('notecategory.destroy', @$notes_category->id)); ?>');"><?php echo e(__('Delete')); ?></a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="clearfix">
            <div class="pull-right">
                <?php echo e($notes_categorys->appends(request()->input())->links()); ?>

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