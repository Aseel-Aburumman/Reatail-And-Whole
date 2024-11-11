<div class="container">
    <h1>Statuses</h1>
    <a href="<?php echo e(route('statuses.create')); ?>" class="btn btn-primary">Add New Status</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($status->id); ?></td>
                    <td><?php echo e($status->name); ?></td>
                    <td>
                        <a href="<?php echo e(route('statuses.edit', $status->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form action="<?php echo e(route('statuses.destroy', $status->id)); ?>" method="POST" style="display:inline-block;">
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
<?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/admin/statuses/index.blade.php ENDPATH**/ ?>