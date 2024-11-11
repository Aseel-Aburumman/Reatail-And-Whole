<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Products</h1>
    <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary mb-3">Add New Product</a>

    <?php if($products->isEmpty()): ?>
        <p>No products available.</p>
    <?php else: ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($product->id); ?></td>
                        <td><?php echo e($product->name); ?></td>
                        <td>$<?php echo e(number_format($product->price, 2)); ?></td>
                        <td><?php echo e($product->description); ?></td>
                        <td>
                            <a href="<?php echo e(route('products.show', $product->id)); ?>" class="btn btn-info btn-sm">View</a>
                            <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/admin/products/index.blade.php ENDPATH**/ ?>