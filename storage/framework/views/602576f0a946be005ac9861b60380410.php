<?php $__env->startSection('main_content'); ?>
<?php echo $__env->make('admin.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container mt-5">
    <h1>Statuses</h1>

    <!-- Add extra spacing above the "Add New Status" button -->
    <div class="mt-5 mb-3">
        <a href="<?php echo e(route('statuses.create')); ?>" class="btn btn-primary">Add New Status</a>
    </div>

    <div class="card shadow-sm rounded">
        <div class="card-header bg-primary text-white">
            <h2>Statuses List</h2>
        </div>

        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="table-primary">
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
                            <a href="<?php echo e(route('statuses.show', $status->id)); ?>" class="btn btn-info btn-sm me-2">View</a>
                            <a href="<?php echo e(route('statuses.edit', $status->id)); ?>" class="btn btn-warning btn-sm me-2">Edit</a>
                            <form action="<?php echo e(route('statuses.destroy', $status->id)); ?>" method="POST" style="display: inline;">
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

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/admin/statuses/index.blade.php ENDPATH**/ ?>