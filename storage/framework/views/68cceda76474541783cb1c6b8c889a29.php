<<<<<<< HEAD
<!-- resources/views/users/index.blade.php -->
<!-- resources/views/users/index.blade.php -->

<?php $__env->startSection('main_content'); ?>
<?php echo $__env->make('admin.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container mt-5">
    <h1>Users</h1>

    <!-- Add extra spacing above the "Add New User" button -->
    <div class="mt-5 mb-3">
        <a href="<?php echo e(route('admin.users.create')); ?>" class="btn btn-primary">Add New User</a>
    </div>

    <div class="card shadow-sm rounded">
        <div class="card-header bg-primary text-white">
            <h2>Users List</h2>
        </div>

        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($user->id); ?></td>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td>
                            <a href="<?php echo e(route('admin.users.show', $user->id)); ?>" class="btn btn-info btn-sm me-2">View</a>
                            <a href="<?php echo e(route('admin.users.edit', $user->id)); ?>" class="btn btn-warning btn-sm me-2">Edit</a>
                            <form action="<?php echo e(route('admin.users.destroy', $user->id)); ?>" method="POST" style="display: inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
=======
<?php $__env->startSection('main_content'); ?>
    <?php echo $__env->make('admin.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container mt-5">
        <h1>Orders</h1>

        <div class="mt-5 mb-3">
            <a href="<?php echo e(route('admin.order.create')); ?>" class="btn btn-primary">Add New order</a>
        </div>

        <div class="card shadow-sm rounded">
            <div class="card-header bg-primary text-white">
                <h2>Orders List</h2>
            </div>

            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>Store Name</th>
                            <th>Order Made By</th>
                            <th>Deadline</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $Orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($order->id); ?></td>
                                <td><?php echo e($order->store->name); ?></td>
                                <td><?php echo e($order->retailer->name); ?></td>
                                <td><?php echo e($order->deadline); ?></td>

                                <td>
                                    <a href="<?php echo e(route('admin.order.show', $order->id)); ?>"
                                        class="btn btn-info btn-sm me-2">View</a>
                                    <a href="<?php echo e(route('admin.order.edit', $order->id)); ?>"
                                        class="btn btn-warning btn-sm me-2">Edit</a>
                                    <form action="<?php echo e(route('admin.order.destroy', $order->id)); ?>" method="POST"
                                        style="display: inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
>>>>>>> 7931ca8e714a7ecaf17ad6094f88890a2796d9bc
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/admin/order/index.blade.php ENDPATH**/ ?>