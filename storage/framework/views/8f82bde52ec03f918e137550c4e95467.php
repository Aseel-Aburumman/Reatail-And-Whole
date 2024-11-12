<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="active"><a class="nav-link" href="index.html"><i class="fas fa-hand-point-right"></i>
                    <span>Dashboard</span></a></li>

            <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Dropdown
                        Items</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Item 1</a>
                    </li>
                    <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Item 2</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown active">
                <a href="<?php echo e(route('order.index')); ?>" class="nav-link has-dropdown"><i
                        class="fas fa-hand-point-right"></i><span>Order
                        Manegment Center</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href="<?php echo e(route('order.index')); ?>"><i
                                class="fas fa-angle-right"></i> Orders</a>
                    </li>
                    <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Item 2</a>
                    </li>
                </ul>
            <li class=""><a class="nav-link" href="setting.html"><i class="fas fa-hand-point-right"></i> <span>Setting</span></a></li>
            <li class="">
                <a class="nav-link" href="<?php echo e(route('admin.products.index')); ?>">
                    <i class="fas fa-hand-point-right"></i>
                    <span>Product Manage</span>
                </a>
            </li>

            <li class=""><a class="nav-link" href="setting.html"><i class="fas fa-hand-point-right"></i>
                    <span>Setting</span></a></li>

             <li class=""><a class="nav-link" href="<?php echo e(route('price_tiers.index')); ?>"><i class="fas fa-tags"></i>
                    <span>price tiers</span></a></li>

                    <li class=""><a class="nav-link" href="<?php echo e(route('statuses.index')); ?>"><i class="fas fa-check-circle"></i>
                        <span>Statuses</span></a></li>


                    <li class=""><a class="nav-link" href="<?php echo e(route('stores.index')); ?>"><i class="fas fa-warehouse"></i></i>
                        <span>stores</span></a></li>

            <li class=""><a class="nav-link" href="form.html"><i class="fas fa-hand-point-right"></i>
                    <span>Form</span></a></li>

            <li class=""><a class="nav-link" href="table.html"><i class="fas fa-hand-point-right"></i>
                    <span>Table</span></a></li>

            <li class=""><a class="nav-link" href="invoice.html"><i class="fas fa-hand-point-right"></i>
                    <span>Invoice</span></a></li>

        </ul>
    </aside>
</div>
<?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/admin/layout/sidebar.blade.php ENDPATH**/ ?>