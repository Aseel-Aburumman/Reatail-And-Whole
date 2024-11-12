<!-- resources/views/admin/users/edit.blade.php -->


<?php $__env->startSection('main_content'); ?>
    <?php echo $__env->make('admin.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container mt-5 pt-5 pb-3">
        <div class="card shadow-sm rounded">
            <div class="card-header custom-header">
                <h2>Edit Order</h2>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('admin.OrderContribution.update', $Ordercontribution->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <input type="hidden" name="order_id" value="<?php echo e($Ordercontribution->order_id); ?>">


                    <div class="form-group mb-3">
                        <label for="retailer_id">Contributor</label>
                        <select class="form-control" id="retailer_id" name="retailer_id" required>
                            <option value="">Select a retailer</option>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($user->id); ?>"
                                    <?php echo e(isset($Ordercontribution) && $Ordercontribution->retailer_id == $user->id ? 'selected' : ''); ?>>
                                    <?php echo e($user->name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>



                    <div class="form-group mb-3">
                        <label for="quantity">quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity"
                            value="<?php echo e($Ordercontribution->quantity); ?>" required>
                    </div>



                    <div class="d-flex justify-content-between">
                        <a href="<?php echo e(route('order.index')); ?>" class="btn btn-secondary">Back to Order List</a>
                        <button type="submit" class="btn btn-primary">Update Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Reatail-And-Whole\resources\views/admin/orderDetail/edit.blade.php ENDPATH**/ ?>