<!-- resources/views/admin/price_tiers/edit.blade.php -->


<?php $__env->startSection('main_content'); ?>
<?php echo $__env->make('admin.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container mt-5 pt-5 pb-3">
    <div class="card shadow-sm rounded">
        <div class="card-header bg-secondary text-white">
            <h2>Edit Price Tier</h2>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('price_tiers.update', $priceTier->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo e($priceTier->name); ?>" required>
                </div>

                <div class="form-group mb-3">
                    <label for="percentage">Percentage</label>
                    <input type="number" class="form-control" id="percentage" name="percentage" value="<?php echo e($priceTier->percentage); ?>" min="0" max="100" required>
                </div>

                <div class="form-group mb-3">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" value="<?php echo e($priceTier->quantity); ?>" min="1" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="<?php echo e(route('price_tiers.index')); ?>" class="btn btn-secondary">Back to Price Tiers List</a>
                    <button type="submit" class="btn btn-primary">Update Price Tier</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/admin/price_tiers/edit.blade.php ENDPATH**/ ?>