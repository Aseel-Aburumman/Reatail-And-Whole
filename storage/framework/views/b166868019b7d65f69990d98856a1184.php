<!-- resources/views/products/show.blade.php -->

<?php $__env->startSection('main_content'); ?>
<?php echo $__env->make('admin.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container mt-5">
    <h1>Product Details</h1>

    <div class="card shadow-sm rounded">
        <div class="card-header bg-primary text-white">
            <h2><?php echo e($product->name); ?></h2>
        </div>

        <div class="card-body">
            <p><strong>Price:</strong> $<?php echo e(number_format($product->price, 2)); ?></p>
            <p><strong>Description:</strong> <?php echo e($product->description); ?></p>
            <p><strong>Minimum Quantities:</strong> <?php echo e($product->minimumquantities); ?></p>
            <p><strong>Store ID:</strong> <?php echo e($product->store_id); ?></p>
            <p><strong>Image:</strong></p>
            <?php if($product->image): ?>
                <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>" style="width: 200px; height: auto;">
            <?php else: ?>
                <p>No Image Available</p>
            <?php endif; ?>

            <div class="mt-3">
                <a href="<?php echo e(route('admin.products.index')); ?>" class="btn btn-secondary">Back to Products</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/admin/products/show.blade.php ENDPATH**/ ?>