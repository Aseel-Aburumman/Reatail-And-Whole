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


                            <li class=""><a class="nav-link" href="{{ route('order.index') }}"><i class="fas fa-hand-point-right"></i> <span>Order
                        Manegment Center</span></a></li>

            <!-- Users Section -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Users</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.users.index') }}"><i class="fas fa-angle-right"></i> User List</a></li>
                    <li><a class="nav-link" href="{{ route('admin.users.create') }}"><i class="fas fa-angle-right"></i> Add User</a></li>
                </ul>
            </li>


            <li class=""><a class="nav-link" href="setting.html"><i class="fas fa-hand-point-right"></i> <span>Setting</span></a></li>
            <li class="">
                <a class="nav-link" href="{{ route('admin.products.index') }}">
                    <i class="fas fa-hand-point-right"></i>
                    <span>Product Manage</span>
                </a>
            </li>

            <li class=""><a class="nav-link" href="setting.html"><i class="fas fa-hand-point-right"></i>
                    <span>Setting</span></a></li>

             <li class=""><a class="nav-link" href="{{ route('price_tiers.index') }}"><i class="fas fa-tags"></i>
                    <span>price tiers</span></a></li>

                    <li class=""><a class="nav-link" href="{{ route('statuses.index') }}"><i class="fas fa-check-circle"></i>
                        <span>Statuses</span></a></li>


                    <li class=""><a class="nav-link" href="{{ route('stores.index') }}"><i class="fas fa-warehouse"></i></i>
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
