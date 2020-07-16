<?php /* E:\xampp\htdocs\myfragmence\resources\views/bank/index.blade.php */ ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(@$title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 
<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no"><?php echo e(__('Bank')); ?></h3>
        <div class="pull-right clearfix">
            <div class="box-inline pad-rgt pull-left">
                <div class="" style="min-width: 200px;">
                    <a href="<?php echo e(route('bank.create')); ?>" class="btn btn-rounded btn-success pull-right"><?php echo e(__('+Bank')); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped res-table mar-no " cellspacing="0" width="100%" id="myFrag">
            <thead>
                <tr>
                    <th>SL.</th>
                    <th><?php echo e(__('Bank Name')); ?></th>
                    <th><?php echo e(__('A/C Name')); ?></th>
                    <th><?php echo e(__('A/C Number')); ?></th>
                    <!-- <th><?php echo e(__('Branch')); ?></th>
                    <th><?php echo e(__('Signature Image')); ?></th> -->
                    <th><?php echo e(__('Status')); ?></th>
                    <th><?php echo e(__('Published')); ?></th>
                    <th width="10%"><?php echo e(__('Action')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php  $i=1;?>
                <?php $__currentLoopData = $BankAccount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $banks): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($i++); ?></td>
                        <td><?php echo e(@$banks->bank_name); ?></td>
                        <td><?php echo e(@$banks->ac_name); ?></td>
                        <td><?php echo e(@$banks->ac_number); ?></td>
                       <!--  <td><?php echo e(@$banks->branch); ?></td>
                        <td>
                            <img loading="lazy"  class="img img-responsive" src="<?php echo e(asset('public/'.$banks->Signature)); ?>" alt="Signature" style="width:50px; height:auto">
                        </td> -->
                        
                        <td>
                            <?php if(@$banks->active_status==1): ?>
                                 <button class="btn btn-success btn-sm">Active</button>
                            <?php else: ?>
                                 <button class="btn btn-danger btn-sm">Inactive</button>
                            <?php endif; ?>
                        </td>
                        <td>
                           <small><?php echo e(date("jS \of F Y", strtotime(@$banks->created_at))); ?></small>
                       </td>
                       <td class="notexport">
                           <a href="<?php echo e(route('bank.edit', encrypt(@$banks->id))); ?>" class="btn btn-sm btn-info" title="Edit Subcategory"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                           <a href="#" id="confirm-delete" class="btn btn-sm btn-danger" title="Delete Subcategory"  onclick="confirm_modal('<?php echo e(route('bank.destroy', @$banks->id)); ?>');"> <i class="fa fa-trash-o" aria-hidden="true"></i> </a>
                       </td>
                        <!-- <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    <?php echo e(__('Actions')); ?> <i class="dropdown-caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="<?php echo e(route('bank.edit', encrypt(@$banks->id))); ?>"><?php echo e(__('Edit')); ?></a></li>
                                    <li><a onclick="confirm_modal('<?php echo e(route('bank.destroy', @$banks->id)); ?>');"><?php echo e(__('Delete')); ?></a></li>
                                </ul>
                            </div>
                        </td>   -->
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table> 
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>