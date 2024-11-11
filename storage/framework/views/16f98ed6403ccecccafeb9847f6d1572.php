<?php $__env->startSection('content'); ?>
<style>
    .custom-input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
    background-color: #f9f9f9;
}

</style>
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Sign Up</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->

        <!--================register_part Area =================-->
        <section class="login_part section_padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_text text-center">
                            <div class="login_part_text_iner">
                                <h2>Already have an account?</h2>
                                <p>If you already have an account with us, please log in to access your account.</p>
                                <a href="<?php echo e(route('login.view')); ?>" class="btn_3">Log In</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                <h3>Welcome! <br> Please Sign up now</h3>

                                <!-- عرض رسائل الخطأ إن وجدت -->
                                <?php if(session('success')): ?>
                                    <div class="alert alert-success">
                                        <?php echo e(session('success')); ?>

                                    </div>
                                <?php endif; ?>
                                <?php if($errors->any()): ?>
                                    <div class="alert alert-danger">
                                        <ul>
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                                <form class="row contact_form" action="<?php echo e(route('register')); ?>" method="post" novalidate="novalidate">
                                    <?php echo csrf_field(); ?>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control custom-input" id="name" name="name" value="<?php echo e(old('name')); ?>"
                                            placeholder="Full Name">
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control custom-input" id="phone" name="phone" value="<?php echo e(old('phone')); ?>"
                                            placeholder="Phone Number">
                                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control custom-input" id="location" name="location" value="<?php echo e(old('location')); ?>"
                                            placeholder="Location">
                                        <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="email" class="form-control custom-input" id="email" name="email" value="<?php echo e(old('email')); ?>"
                                            placeholder="Email">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control custom-input" id="password" name="password"
                                            placeholder="Password">
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control custom-input" id="password_confirmation" name="password_confirmation"
                                            placeholder="Confirm Password">
                                        <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <button type="submit" value="submit" class="btn_3">
                                            Sign Up
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================register_part end =================-->
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/register.blade.php ENDPATH**/ ?>