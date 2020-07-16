<?php /* E:\xampp\htdocs\myfragmence\resources\views/inc/purchases_menu.blade.php */ ?>
<?php if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions))): ?>
    <li>
        <a href="#">
            <i class="fa fa-money"></i>
            <span class="menu-title"><?php echo e(__('Purchasing')); ?></span>
            <i class="arrow"></i>
        </a>
        <!--Submenu-->
        <ul class="collapse">

            <li class="<?php echo e(areActiveRoutes(['suppliers', 'suppliers.create', 'suppliers.edit'])); ?>">
                <a class="nav-link" href="<?php echo e(route('suppliers')); ?>"><?php echo e(__('Manage Supplier')); ?></a>
            </li> 
            <li class="<?php echo e(areActiveRoutes(['purchase.category', 'purchase.category.create', 'purchase.category.edit'])); ?>">
                <a class="nav-link" href="<?php echo e(route('purchase.category')); ?>"><?php echo e(__('Manage Category')); ?></a>
            </li> 
            <li class="<?php echo e(areActiveRoutes(['purchase.subcategory', 'purchase.subcategory.create', 'purchase.subcategory.edit'])); ?>">
                <a class="nav-link" href="<?php echo e(route('purchase.subcategory')); ?>"><?php echo e(__('Manage Subcategory')); ?></a>
            </li>  
            <li class="<?php echo e(areActiveRoutes(['purchase.unit', 'purchase.unit.create', 'purchase.unit.edit'])); ?>">
                <a class="nav-link" href="<?php echo e(route('purchase.unit')); ?>"><?php echo e(__('Manage Units')); ?></a>
            </li> 
            <li class="<?php echo e(areActiveRoutes(['purchase.products', 'purchase.products.create', 'purchase.products.edit'])); ?>">
                <a class="nav-link" href="<?php echo e(route('purchase.products')); ?>"><?php echo e(__('Manage Products')); ?></a>
            </li> 
            <li class="<?php echo e(areActiveRoutes(['purchase.products.list', 'purchase.products.list.create', 'purchase.products.list.edit'])); ?>">
                <a class="nav-link" href="<?php echo e(route('purchase.products.list')); ?>"><?php echo e(__('Manage Purchase')); ?></a>
            </li> 
        </ul>
    </li>
<?php endif; ?>
