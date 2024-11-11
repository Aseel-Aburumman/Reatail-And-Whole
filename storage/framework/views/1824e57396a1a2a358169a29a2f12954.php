<div class="container">
    <h1>Edit Status</h1>

    <form action="<?php echo e(route('statuses.update', $status->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo e($status->name); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?php echo e(route('statuses.index')); ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>
<?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/admin/statuses/edit.blade.php ENDPATH**/ ?>