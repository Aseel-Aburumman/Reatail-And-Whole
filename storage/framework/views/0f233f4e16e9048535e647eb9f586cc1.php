<?php $__env->startSection('main_content'); ?>
<?php echo $__env->make('admin.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container mt-5 pt-5 pb-3">
    <div class="card shadow-sm rounded">
        <div class="card-header bg-secondary text-white">
            <h2>Store Details</h2>
        </div>
        <div class="card-body">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td><?php echo e($store->id); ?></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><?php echo e($store->name); ?></td>
                    </tr>
                    <tr>
                        <th>Owner</th>
                        <td><?php echo e($store->user->name); ?></td>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <td><?php echo e($store->created_at->format('Y-m-d H:i:s')); ?></td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td><?php echo e($store->updated_at->format('Y-m-d H:i:s')); ?></td>
                    </tr>
                </tbody>
            </table>
            <a href="<?php echo e(route('stores.index')); ?>" class="btn btn-secondary mt-4">Back to Store List</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/admin/stores/show.blade.php ENDPATH**/ ?>