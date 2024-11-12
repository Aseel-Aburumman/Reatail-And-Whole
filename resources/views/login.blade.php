@extends('layouts.main')
@section('content')
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
                  @if(session('success'))
                      <div class="alert alert-success">
                          {{ session('success') }}
                      </div>
                  @endif
                  @if($errors->has('login_error'))
                      <div class="alert alert-danger">
                          {{ $errors->first('login_error') }}
                      </div>
                  @endif

                  <form class="row contact_form" action="{{ route('login') }}" method="post" novalidate="novalidate">
                      @csrf
                      <div class="col-md-12 form-group p_star">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control form-control-lg" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
                          @error('email')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                      <div class="col-md-12 form-group p_star">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" class="form-control form-control-lg" id="password" name="password" value="" placeholder="Password">
                          @error('password')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
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
@endsection
