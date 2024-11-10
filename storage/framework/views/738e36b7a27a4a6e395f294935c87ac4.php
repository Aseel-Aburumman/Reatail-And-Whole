<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="icon" type="image/png" href="<?php echo e(asset('uploads/favicon.png')); ?>">
    <title>Admin Panel</title>

    <!-- Fonts and CSS for style and layout -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/font_awesome_5_free.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/bootstrap-tagsinput.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/duotone-dark.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/iziToast.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/fontawesome-iconpicker.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/bootstrap4-toggle.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/components.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/air-datepicker.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/spacing.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/custom.css')); ?>">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <?php echo $__env->yieldContent('main_content'); ?> <!-- Section for rendering different parts of the admin panel -->
        </div>
    </div>

    <!-- Primary JavaScript Files -->
    <script src="<?php echo e(asset('dist/js/jquery-3.7.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/tooltip.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/jquery.nicescroll.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/stisla.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/jscolor.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/iziToast.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/bootstrap-tagsinput.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/dataTables.bootstrap4.min.js')); ?>"></script>

    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom and Core Scripts -->
    <script src="<?php echo e(asset('dist/js/scripts.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/custom.js')); ?>"></script>

    <!-- SweetAlert Success Notification Example -->
    <?php if(session('success')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '<?php echo e(session("success")); ?>',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php endif; ?>

</body>
</html>
<?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/admin/layout/master.blade.php ENDPATH**/ ?>