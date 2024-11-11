<div class="container">
    <h1>Price Tiers</h1>
    <a href="<?php echo e(route('price_tiers.create')); ?>" class="btn btn-primary">Add New Price Tier</a>

    <table class="table mt-3">
        <thead>
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
                        <a href="<?php echo e(route('price_tiers.edit', $priceTier->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form action="<?php echo e(route('price_tiers.destroy', $priceTier->id)); ?>" method="POST" style="display:inline-block;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/admin/price_tiers/index.blade.php ENDPATH**/ ?>