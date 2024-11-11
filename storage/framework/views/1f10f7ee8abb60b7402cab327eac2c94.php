<!-- resources/views/admin/users/create.blade.php -->


<?php $__env->startSection('main_content'); ?>
    <?php echo $__env->make('admin.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container mt-5 pt-5 pb-3">
        <div class="card shadow-sm rounded">
            <div class="card-header bg-secondary text-white">
                <h2>Add New Order</h2>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('admin.order.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="form-group mb-3">
                        <label for="initiator_retailer_id">Order Made By</label>
                        <select class="form-control" id="initiator_retailer_id" name="initiator_retailer_id" required>
                            <option value="">Select a retailer</option>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($user->id); ?>"
                                    <?php echo e(isset($Order) && $Order->initiator_retailer_id == $user->id ? 'selected' : ''); ?>>
                                    <?php echo e($user->name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="store_id">Store Name</label>
                        <select class="form-control" id="store_id" name="store_id" required>
                            <option value="">Select a Store</option>
                            <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($store->id); ?>"
                                    <?php echo e(isset($Order) && $Order->store_id == $store->id ? 'selected' : ''); ?>>
                                    <?php echo e($store->name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="deadline">Deadline</label>
                        <input type="date" class="form-control" id="deadline" name="deadline" required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="<?php echo e(route('order.index')); ?>" class="btn btn-secondary">Back to Order List</a>
                        <button type="submit" class="btn btn-primary">Create Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Reatail-And-Whole\resources\views/admin/order/create.blade.php ENDPATH**/ ?>