<div class="container">
    <h1>Edit Price Tier</h1>

    <form action="<?php echo e(route('price_tiers.update', $priceTier->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo e($priceTier->name); ?>" required>
        </div>

        <div class="form-group">
            <label for="percentage">Percentage</label>
            <input type="number" name="percentage" class="form-control" value="<?php echo e($priceTier->percentage); ?>" min="0" max="100" required>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" class="form-control" value="<?php echo e($priceTier->quantity); ?>" min="1" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?php echo e(route('price_tiers.index')); ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>
<?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/admin/price_tiers/edit.blade.php ENDPATH**/ ?>