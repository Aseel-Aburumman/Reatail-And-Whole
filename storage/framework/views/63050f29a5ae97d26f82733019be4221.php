<!-- resources/views/Admin/Login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="col-md-4">
            <h3 class="text-center mb-4">Admin Login</h3>
            <div class="card shadow-sm p-4">
                <form action="<?php echo e(route('login')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
                <?php if(session('error')): ?>
                    <div class="alert alert-danger mt-3">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>
            </div>
            <p class="text-center mt-3">
                <a href="<?php echo e(route('password.request')); ?>">Forgot Your Password?</a>
            </p>
        </div>
    </div>

    <!-- Bootstrap JS (optional, for additional features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/Admin/Login.blade.php ENDPATH**/ ?>