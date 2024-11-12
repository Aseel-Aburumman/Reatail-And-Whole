<?php $__env->startSection('main_content'); ?>
<?php echo $__env->make('admin.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container mt-5">
    <h1 class="mb-4">Stores</h1>

    <!-- زر إضافة متجر جديد -->
    <div class="mt-5 mb-3">
        <a href="<?php echo e(route('store.create')); ?>" class="btn btn-primary">Add New Store</a>
    </div>


    <!-- قائمة المتاجر -->
    <div class="card shadow-sm rounded border-0">
        <div class="card-header bg-primary text-white d-flex align-items-center justify-content-between">
            <h3 class="mb-0">List of Stores</h3>
            <span class="badge bg-light text-dark"><?php echo e($stores->count()); ?> Total Stores</span>
        </div>

        <div class="card-body">
            <table class="table table-striped table-hover table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Owner</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($store->id); ?></td>
                            <td><?php echo e($store->name); ?></td>
                            <td><?php echo e($store->user->name); ?></td>
                            <td>
                                <a href="<?php echo e(route('store.show', $store->id)); ?>" class="btn btn-info btn-sm me-2">View</a>
                                <a href="<?php echo e(route('store.edit', $store->id)); ?>" class="btn btn-warning btn-sm me-2">Edit</a>
                                <form action="<?php echo e(route('store.destroy', $store->id)); ?>" method="POST" style="display:inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="4" class="text-center text-muted">No stores found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/admin/stores/index.blade.php ENDPATH**/ ?>