<div class="container">
    <h1>Create New Status</h1>

    <form action="<?php echo e(route('statuses.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="<?php echo e(route('statuses.index')); ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>
<?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/admin/statuses/create.blade.php ENDPATH**/ ?>