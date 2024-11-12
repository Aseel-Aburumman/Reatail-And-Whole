<!-- resources/views/admin/users/create.blade.php -->


<?php $__env->startSection('main_content'); ?>
    <?php echo $__env->make('admin.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container mt-5 pt-5 pb-3">
        <div class="card shadow-sm rounded">
            <div class="card-header bg-secondary text-white">
                <h2>Add New OrderContribution</h2>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('admin.OrderContribution.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <!-- Select the Order for this Contribution -->
                    

                    <input type="hidden" name="status_id" value="1">
                    <input type="hidden" name="order_id" value="<?php echo e($order_id); ?>">
                    <input type="hidden" name="initiator_retailer_id" value="<?php echo e($Order->initiator_retailer_id); ?>">


                    <div class="form-group mb-3">
                        <label for="retailer_id">Order Contribution Made By</label>
                        <select class="form-control" id="retailer_id" name="retailer_id" required>
                            <option value="">Select a retailer</option>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    

                    <div class="form-group mb-3">
                        <label for="quantity">Contribution Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" required>
                    </div>

                    


                    

                    <div class="d-flex justify-content-between">
                        <a href="<?php echo e(route('order.index')); ?>" class="btn btn-secondary">Back to Order List</a>
                        <button type="submit" class="btn btn-primary">Create Order Contribution</button>
                    </div>
                </form>
            </div>
        </

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Reatail-And-Whole\resources\views/admin/orderDetail/create.blade.php ENDPATH**/ ?>