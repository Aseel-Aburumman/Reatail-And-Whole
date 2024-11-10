<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right justify-content-end rightsidetop">
        <li class="nav-link">
            <a href="<?php echo e(url('/')); ?>" target="_blank" class="btn btn-warning">HOME</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img alt="image" src="uploads/Admin.png" class="rounded-circle-custom">

            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href=""><i class="far fa-user"></i> Edit Profile</a></li>
                <li>
                    <a class="dropdown-item" href=""
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                       <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                    <form id="logout-form" action="" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/admin/layout/nav.blade.php ENDPATH**/ ?>