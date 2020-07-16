<?php /* E:\xampp\htdocs\myfragmence\resources\views/reviews/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no"><?php echo e(__('Product Reviews')); ?></h3>
        <div class="pull-right clearfix">
            <form class="" id="sort_by_rating" action="<?php echo e(route('reviews.index')); ?>" method="GET">
                <div class="box-inline pad-rgt pull-left">
                    <div class="select" style="min-width: 300px;">
                        <select class="form-control demo-select2" name="rating" id="rating" onchange="filter_by_rating()">
                            <option value=""><?php echo e(__('Filter by Rating')); ?></option>
                            <option value="rating,desc"><?php echo e(__('Rating (High > Low)')); ?></option>
                            <option value="rating,asc"><?php echo e(__('Rating (Low > High)')); ?></option>
                        </select>
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
                    <th><?php echo e(__('Product')); ?></th>
                    <th><?php echo e(__('Product Owner')); ?></th>
                    <th><?php echo e(__('Customer')); ?></th>
                    <th><?php echo e(__('Rating')); ?></th>
                    <th><?php echo e(__('Comment')); ?></th>
                    <th><?php echo e(__('Published')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($review->product != null && $review->user != null): ?>
                        <tr>
                            <td><?php echo e(($key+1) + ($reviews->currentPage() - 1)*$reviews->perPage()); ?></td>
                            <td><a href="<?php echo e(route('product', $review->product->slug)); ?>" target="_blank"><?php echo e(__($review->product->name)); ?></a><?php if($review->viewed == 0): ?> <span class="badge badge-success"><?php echo e(__('New')); ?></span> <?php endif; ?></td>
                            <td><?php echo e($review->product->added_by); ?></td>
                            <td><?php echo e($review->user->name); ?> (<?php echo e($review->user->email); ?>)</td>
                            <td><?php echo e($review->rating); ?></td>
                            <td><?php echo e($review->comment); ?></td>
                            <td><label class="switch">
                                <input onchange="update_published(this)" value="<?php echo e($review->id); ?>" type="checkbox" <?php if($review->status == 1) echo "checked";?> >
                                <span class="slider round"></span></label></td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="clearfix">
            <div class="pull-right">
                <?php echo e($reviews->appends(request()->input())->links()); ?>

            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        function update_published(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('<?php echo e(route('reviews.published')); ?>', {_token:'<?php echo e(csrf_token()); ?>', id:el.value, status:status}, function(data){
                if(data == 1){
                    showAlert('success', 'Published reviews updated successfully');
                }
                else{
                    showAlert('danger', 'Something went wrong');
                }
            });
        }
        function filter_by_rating(el){
            var rating = $('#rating').val();
            if (rating != '') {
                $('#sort_by_rating').submit();
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>