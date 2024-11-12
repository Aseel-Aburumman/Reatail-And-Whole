<!-- resources/views/admin/price_tiers/index.blade.php -->


<?php $__env->startSection('main_content'); ?>
<?php echo $__env->make('admin.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container mt-5">
    <h1>Price Tiers</h1>

    <!-- إضافة زر "إضافة مستوى سعر جديد" مع بعض التنسيقات -->
    <div class="mt-5 mb-3">
        <a href="<?php echo e(route('price_tiers.create')); ?>" class="btn btn-primary">Add New Price Tier</a>
    </div>

    <div class="card shadow-sm rounded">
        <div class="card-header bg-primary text-white">
            <h2>Price Tiers List</h2>
        </div>

        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Percentage</th>
                        <th>Quantity</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $priceTiers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $priceTier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($priceTier->id); ?></td>
                            <td><?php echo e($priceTier->name); ?></td>
                            <td><?php echo e($priceTier->percentage); ?>%</td>
                            <td><?php echo e($priceTier->quantity); ?></td>
                            <td>
                                <a href="<?php echo e(route('price_tiers.show', $priceTier->id)); ?>" class="btn btn-info btn-sm me-2">View</a>
                                <a href="<?php echo e(route('price_tiers.edit', $priceTier->id)); ?>" class="btn btn-warning btn-sm me-2">Edit</a>
                                <form action="<?php echo e(route('price_tiers.destroy', $priceTier->id)); ?>" method="POST" style="display: inline;">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/admin/price_tiers/index.blade.php ENDPATH**/ ?>