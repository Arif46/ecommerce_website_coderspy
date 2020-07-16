<?php /* E:\xampp\htdocs\myfragmence\resources\views/notes/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-sm-12">
        <a href="<?php echo e(route('topnote.create')); ?>" class="btn btn-rounded btn-info pull-right"><?php echo e(__('Add New Top Notes')); ?></a>
    </div>
</div>

<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no"><?php echo e(__('Notes')); ?></h3>
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
                    <th><?php echo e(__('Category')); ?></th>
                    <th><?php echo e(__('Description')); ?></th>
                    <th><?php echo e(__('Image')); ?></th> 
                    <th><?php echo e(__('Banner Image')); ?></th>
                    <th width="10%"><?php echo e(__('Options')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e(($key+1) + ($notes->currentPage() - 1)*$notes->perPage()); ?></td>
                        <td><?php echo e(@$note->name); ?></td>
                        <td><?php echo e(@$note->category->name); ?></td>
                        <td style="width: 40%"><?php echo e(substr(@$note->description,0,200)); ?> ...</td>
                        <td><img loading="lazy"  class="img-sm" src="<?php echo e(asset('public/'.$note->image)); ?>" alt="Logo"></td>
                        <td><img loading="lazy"  class="img img-responsive" src="<?php echo e(asset('public/'.$note->banner_image)); ?>" alt="Logo" style="width:100px; height:auto"></td>

                        
                        <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    <?php echo e(__('Actions')); ?> <i class="dropdown-caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="<?php echo e(route('topnote.edit', encrypt($note->id))); ?>"><?php echo e(__('Edit')); ?></a></li>
                                    <li><a onclick="confirm_modal('<?php echo e(route('topnote.destroy', $note->id)); ?>');"><?php echo e(__('Delete')); ?></a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="clearfix">
            <div class="pull-right">
                <?php echo e($notes->appends(request()->input())->links()); ?>

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