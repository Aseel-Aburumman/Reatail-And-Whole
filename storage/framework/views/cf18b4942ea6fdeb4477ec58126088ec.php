<!-- resources/views/admin/users/create.blade.php -->


<?php $__env->startSection('main_content'); ?>
<?php echo $__env->make('admin.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container mt-5 pt-5 pb-3">
    <div class="card shadow-sm rounded">
        <div class="card-header bg-secondary text-white">
            <h2>Add New User</h2>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('admin.users.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group mb-3">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>

                <div class="form-group mb-3">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" id="location" name="location">
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="<?php echo e(route('admin.users.index')); ?>" class="btn btn-secondary">Back to User List</a>
                    <button type="submit" class="btn btn-primary">Create User</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/admin/users/create.blade.php ENDPATH**/ ?>