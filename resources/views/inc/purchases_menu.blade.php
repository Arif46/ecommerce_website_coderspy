@if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions)))
    <li>
        <a href="#">
            <i class="fa fa-money"></i>
            <span class="menu-title">{{__('Purchasing')}}</span>
            <i class="arrow"></i>
        </a>
        <!--Submenu-->
        <ul class="collapse">

            <li class="{{ areActiveRoutes(['suppliers', 'suppliers.create', 'suppliers.edit'])}}">
                <a class="nav-link" href="{{ route('suppliers') }}">{{__('Manage Supplier')}}</a>
            </li> 
            <li class="{{ areActiveRoutes(['purchase.category', 'purchase.category.create', 'purchase.category.edit'])}}">
                <a class="nav-link" href="{{ route('purchase.category') }}">{{__('Manage Category')}}</a>
            </li> 
            <li class="{{ areActiveRoutes(['purchase.subcategory', 'purchase.subcategory.create', 'purchase.subcategory.edit'])}}">
                <a class="nav-link" href="{{ route('purchase.subcategory') }}">{{__('Manage Subcategory')}}</a>
            </li>  
            <li class="{{ areActiveRoutes(['purchase.unit', 'purchase.unit.create', 'purchase.unit.edit'])}}">
                <a class="nav-link" href="{{ route('purchase.unit') }}">{{__('Manage Units')}}</a>
            </li> 
            <li class="{{ areActiveRoutes(['purchase.products', 'purchase.products.create', 'purchase.products.edit'])}}">
                <a class="nav-link" href="{{ route('purchase.products') }}">{{__('Manage Products')}}</a>
            </li> 
            <li class="{{ areActiveRoutes(['purchase.products.list', 'purchase.products.list.create', 'purchase.products.list.edit'])}}">
                <a class="nav-link" href="{{ route('purchase.products.list') }}">{{__('Manage Purchase')}}</a>
            </li> 
        </ul>
    </li>
@endif
