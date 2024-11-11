<div class="container">
    <h1>Create New Price Tier</h1>

    <form action="<?php echo e(route('price_tiers.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="percentage">Percentage</label>
            <input type="number" name="percentage" class="form-control" min="0" max="100" required>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" class="form-control" min="1" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="<?php echo e(route('price_tiers.index')); ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>
<?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/admin/price_tiers/create.blade.php ENDPATH**/ ?>