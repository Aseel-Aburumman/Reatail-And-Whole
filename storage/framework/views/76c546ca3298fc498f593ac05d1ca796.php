<!-- resources/views/admin/users/show.blade.php -->


<?php $__env->startSection('main_content'); ?>
    <?php echo $__env->make('admin.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container mt-5 pt-5 pb-3"> <!-- Increased top margin and padding -->
        <div class="card shadow-sm rounded"> <!-- Card for structured layout -->
            <div class="card-header bg-secondary text-white">
                <h2>User Details</h2>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td><?php echo e($Order->id); ?></td>
                        </tr>
                        <tr>
                            <th>Store Name</th>
                            <td><?php echo e($Order->store->name); ?></td>
                        </tr>
                        <tr>
                            <th>Order Made By</th>
                            <td><?php echo e($Order->retailer->name); ?></td>
                        </tr>
                        <tr>
                            <th>Deadline</th>
                            <td><?php echo e($Order->deadline); ?></td>
                        </tr>

                        <tr>
                            <th>Created At</th>
                            <td><?php echo e($Order->created_at->format('Y-m-d H:i:s')); ?></td>
                        </tr>
                        <tr>
                            <th>Updated At</th>
                            <td><?php echo e($Order->updated_at->format('Y-m-d H:i:s')); ?></td>
                        </tr>
                    </tbody>
                </table>
                <a href="<?php echo e(route('admin.orderItem.show', $Order->id)); ?>" class="mt-4 btn btn-warning  me-2">Show Order
                    Detail</a>
                <a href="<?php echo e(route('order.index')); ?>" class="btn btn-secondary mt-4">Back to User List</a>
                <!-- Extra space for button -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Reatail-And-Whole\resources\views/admin/order/show.blade.php ENDPATH**/ ?>