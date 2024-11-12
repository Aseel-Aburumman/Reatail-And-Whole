<?php $__env->startSection('main_content'); ?>
<?php echo $__env->make('admin.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container mt-5">
    <h1>Statuses</h1>

<<<<<<< HEAD:storage/framework/views/4c1ec60b1e5d15575da6200fa5555bc3.php
    <!-- Add extra spacing above the "Add New User" button, visible only to admins -->
    <div class="mt-5 mb-3">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create user')): ?>
            <a href="<?php echo e(route('admin.users.create')); ?>" class="btn btn-primary">Add New User</a>
        <?php endif; ?>
=======
    <!-- Add extra spacing above the "Add New Status" button -->
    <div class="mt-5 mb-3">
        <a href="<?php echo e(route('statuses.create')); ?>" class="btn btn-primary">Add New Status</a>
>>>>>>> 0457ca1a6fd5f849ba4ec0cc5b1e34daf9ce1b3b:storage/framework/views/602576f0a946be005ac9861b60380410.php
    </div>

    <div class="card shadow-sm rounded">
        <div class="card-header bg-primary text-white">
            <h2>Statuses List</h2>
        </div>

        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
<<<<<<< HEAD:storage/framework/views/4c1ec60b1e5d15575da6200fa5555bc3.php
                        <th>Email</th>
                        <th>Role</th>
=======
>>>>>>> 0457ca1a6fd5f849ba4ec0cc5b1e34daf9ce1b3b:storage/framework/views/602576f0a946be005ac9861b60380410.php
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
<<<<<<< HEAD:storage/framework/views/4c1ec60b1e5d15575da6200fa5555bc3.php
                        <td><?php echo e($user->id); ?></td>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->getRoleNames()->join(', ')); ?></td> <!-- Display user roles -->
                        <td>
                            <a href="<?php echo e(route('admin.users.show', $user->id)); ?>" class="btn btn-info btn-sm me-2">View</a>

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit user')): ?>
                                <a href="<?php echo e(route('admin.users.edit', $user->id)); ?>" class="btn btn-warning btn-sm me-2">Edit</a>
                            <?php endif; ?>

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete user')): ?>
                                <form action="<?php echo e(route('admin.users.destroy', $user->id)); ?>" method="POST" style="display: inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            <?php endif; ?>
=======
                        <td><?php echo e($status->id); ?></td>
                        <td><?php echo e($status->name); ?></td>
                        <td>
                            <a href="<?php echo e(route('statuses.show', $status->id)); ?>" class="btn btn-info btn-sm me-2">View</a>
                            <a href="<?php echo e(route('statuses.edit', $status->id)); ?>" class="btn btn-warning btn-sm me-2">Edit</a>
                            <form action="<?php echo e(route('statuses.destroy', $status->id)); ?>" method="POST" style="display: inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
>>>>>>> 0457ca1a6fd5f849ba4ec0cc5b1e34daf9ce1b3b:storage/framework/views/602576f0a946be005ac9861b60380410.php
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/admin/statuses/index.blade.php ENDPATH**/ ?>