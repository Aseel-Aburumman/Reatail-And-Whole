<!-- resources/views/products/edit.blade.php -->

<?php $__env->startSection('main_content'); ?>
<?php echo $__env->make('admin.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container mt-5">
    <h1>Edit Product</h1>

    <div class="card shadow-sm rounded">
        <div class="card-header bg-primary text-white">
            <h2>Product Details</h2>
        </div>

        <div class="card-body">
            <form action="<?php echo e(route('admin.products.update', $product->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="<?php echo e($product->name); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" step="0.01" name="price" class="form-control" id="price" value="<?php echo e($product->price); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="description"><?php echo e($product->description); ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="minimumquantities" class="form-label">Minimum Quantities</label>
                    <input type="number" name="minimumquantities" class="form-control" id="minimumquantities" value="<?php echo e($product->minimumquantities); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="store_id" class="form-label">Store ID</label>
                    <input type="number" name="store_id" class="form-control" id="store_id" value="<?php echo e($product->store_id); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="image">
                    <?php if($product->image): ?>
                        <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>" style="width: 100px; height: auto;">
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn btn-primary">Update Product</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/admin/products/edit.blade.php ENDPATH**/ ?>