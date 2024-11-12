<!-- resources/views/admin/statuses/show.blade.php -->


<?php $__env->startSection('main_content'); ?>
<?php echo $__env->make('admin.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container mt-5 pt-5 pb-3"> <!-- Increased top margin and padding -->
    <div class="card shadow-sm rounded"> <!-- Card for structured layout -->
        <div class="card-header bg-secondary text-white">
            <h2>Status Details</h2>
        </div>
        <div class="card-body">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td><?php echo e($status->id); ?></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><?php echo e($status->name); ?></td>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <td><?php echo e($status->created_at->format('Y-m-d H:i:s')); ?></td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td><?php echo e($status->updated_at->format('Y-m-d H:i:s')); ?></td>
                    </tr>
                </tbody>
            </table>
            <a href="<?php echo e(route('statuses.index')); ?>" class="btn btn-secondary mt-4">Back to Status List</a> <!-- Extra space for button -->
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/admin/statuses/show.blade.php ENDPATH**/ ?>