<?php $__env->startSection('content'); ?>
<<<<<<< HEAD
<section class="py-5">
    <div class="container-fluid">

      <div class="bg-secondary py-5 my-5 rounded-5" style="background: url('images/bg-leaves-img-pattern.png') no-repeat;">
        <div class="container my-5">
          <div class="row">
            <div class="col-md-6 p-5">
              <div class="section-header">
                <h2 class="section-title display-4">Get <span class="text-primary">25% Discount</span> on your first purchase</h2>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dictumst amet, metus, sit massa posuere maecenas. At tellus ut nunc amet vel egestas.</p>
            </div>
            <div class="col-md-6 p-5">
              <form>
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text"
                    class="form-control form-control-lg" name="name" id="name" placeholder="Name">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Email</label>
                  <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="abc@mail.com">
                </div>
                <div class="form-check form-check-inline mb-3">
                  <label class="form-check-label" for="subscribe">
                  <input class="form-check-input" type="checkbox" id="subscribe" value="subscribe">
                  Subscribe to the newsletter</label>
                </div>
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-dark btn-lg">Submit</button>
                </div>
              </form>

            </div>

          </div>

        </div>
      </div>

    </div>
  </section>
=======
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Login</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->

        <!--================login_part Area =================-->
        <section class="login_part section_padding ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_text text-center">
                            <div class="login_part_text_iner">
                                <h2>New to our Shop?</h2>
                                <p>There are advances being made in science and technology
                                    everyday, and a good example of this is the</p>
                                <a href="<?php echo e(route('register.view')); ?>" class="btn_3">Create an Account</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                <h3>Welcome Back! <br>
                                    Please Sign in now</h3>

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
                                        <input type="email" class="form-control" id="email" name="email" value="<?php echo e(old('email')); ?>"
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
                                        <input type="password" class="form-control" id="password" name="password" value=""
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
                                    <div class="col-md-12 form-group">
                                        <div class="creat_account d-flex align-items-center">
                                            <input type="checkbox" id="f-option" name="remember">
                                            <label for="f-option">Remember me</label>
                                        </div>
                                        <button type="submit" value="submit" class="btn_3">
                                            Log in
                                        </button>
                                        <a class="lost_pass" href="#">Forget password?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================login_part end =================-->
    </main>
>>>>>>> c6cc5dcf2b10fb2bc1e9731b84be9dad9ee23e58
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\Reatail-And-Whole\resources\views/login.blade.php ENDPATH**/ ?>