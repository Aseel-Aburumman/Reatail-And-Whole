<!-- resources/views/admin/users/show.blade.php -->


<?php $__env->startSection('main_content'); ?>
    <?php echo $__env->make('admin.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container mt-5 pt-5 pb-3"> <!-- Increased top margin and padding -->
        <div class="card shadow-sm rounded"> <!-- Card for structured layout -->
            <div class="card-header bg-secondary text-white">
                <h2>Order Details</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Order ID</th>
                            <th>Store Name</th>
                            <th>Order Made By</th>
                            <th>Deadline</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo e($Order->id); ?></td>
                            <td><?php echo e($Order->store->name); ?></td>
                            <td><?php echo e($Order->retailer->name); ?></td>
                            <td><?php echo e($Order->deadline); ?></td>
                        </tr>
                    </tbody>
                </table>

                <h4 class="mt-4">Order Items</h4>

                <!-- Loop through each order item -->
                <div class="order-items-list">
                    <?php $__currentLoopData = $Order->orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($item->product->name); ?></h5>
                                <p><strong>Total Quantity:</strong> <?php echo e($item->total_quantity); ?></p>

                                <div class="table-responsive">
                                    <table class="table table-sm table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Contributor</th>
                                                <th>Quantity Contributed</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $item->contributions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contribution): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($contribution->retailer->name); ?></td>
                                                    <td><?php echo e($contribution->quantity); ?></td>
                                                    <td>
                                                        <a href="<?php echo e(route('admin.orderItem.edit', $contribution->id)); ?>"
                                                            class="btn btn-warning btn-sm me-2">Edit</a>
                                                        <form
                                                            action="<?php echo e(route('admin.orderItem.destroy', $contribution->id)); ?>"
                                                            method="POST" style="display: inline;">
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
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <a href="<?php echo e(route('order.index')); ?>" class="btn btn-secondary mt-4">Back to Order List</a>
                <!-- Extra space for button -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Reatail-And-Whole\resources\views/admin/orderIitem/show.blade.php ENDPATH**/ ?>