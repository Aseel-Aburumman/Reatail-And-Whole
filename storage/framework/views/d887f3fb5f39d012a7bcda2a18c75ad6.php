<?php $__env->startSection('content'); ?>
<section class="py-5">
    <div class="container-fluid">

      <!-- الجزء الجديد مع الخلفية والخصم -->
      <div class="bg-secondary py-5 my-5 rounded-5" style="background: url('images/bg-leaves-img-pattern.png') no-repeat;">
        <div class="container my-5">
          <div class="row">
            <div class="col-md-6 p-5">
              <div class="section-header">
                <h2 class="section-title display-4">Get <span class="text-primary">25% Discount</span> on your first purchase</h2>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dictumst amet, metus, sit massa posuere maecenas. At tellus ut nunc amet vel egestas.</p>
            </div>

            <!-- جزء تسجيل الدخول من التمبلت القديم -->
            <div class="col-md-6 p-5">
              <div class="login_part_form">
                <div class="login_part_form_iner">
                  <h3>Welcome Back! <br> Please Sign in now</h3>

                  <!-- عرض رسائل الخطأ إن وجدت -->
                  <?php if(session('success')): ?>
                      <div class="alert alert-success">
                          <?php echo e(session('success')); ?>

                      </div>
                  <?php endif; ?>
                  <?php if($errors->has('login_error')): ?>
                      <div class="alert alert-danger">
                          <?php echo e($errors->first('login_error')); ?>

                      </div>
                  <?php endif; ?>

                  <form class="row contact_form" action="<?php echo e(route('login')); ?>" method="post" novalidate="novalidate">
                      <?php echo csrf_field(); ?>
                      <div class="col-md-12 form-group p_star">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control form-control-lg" id="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email">
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
                          <label for="password" class="form-label">Password</label>
                          <input type="password" class="form-control form-control-lg" id="password" name="password" value="" placeholder="Password">
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
                      <div class="col-md-12 form-group">
                          <div class="creat_account d-flex align-items-center">
                              <input type="checkbox" id="f-option" name="remember">
                              <label for="f-option" class="form-check-label">Remember me</label>
                          </div>
                          <div class="d-grid gap-2">
                              <button type="submit" value="submit" class="btn btn-dark btn-lg">Log in</button>
                          </div>
                          <a class="lost_pass" href="#">Forget password?</a>
                      </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/login.blade.php ENDPATH**/ ?>