<!-- resources/views/admin/price_tiers/show.blade.php -->


<?php $__env->startSection('main_content'); ?>
<?php echo $__env->make('admin.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container mt-5 pt-5 pb-3"> <!-- Increased top margin and padding -->
    <div class="card shadow-sm rounded"> <!-- Card for structured layout -->
        <div class="card-header bg-secondary text-white">
            <h2>Price Tier Details</h2>
        </div>
        <div class="card-body">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td><?php echo e($priceTier->id); ?></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><?php echo e($priceTier->name); ?></td>
                    </tr>
                    <tr>
                        <th>Percentage</th>
                        <td><?php echo e($priceTier->percentage); ?>%</td>
                    </tr>
                    <tr>
                        <th>Quantity</th>
                        <td><?php echo e($priceTier->quantity); ?></td>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <td><?php echo e($priceTier->created_at->format('Y-m-d H:i:s')); ?></td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td><?php echo e($priceTier->updated_at->format('Y-m-d H:i:s')); ?></td>
                    </tr>
                </tbody>
            </table>
            <a href="<?php echo e(route('price_tiers.index')); ?>" class="btn btn-secondary mt-4">Back to Price Tier List</a> <!-- Extra space for button -->
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/admin/price_tiers/show.blade.php ENDPATH**/ ?>