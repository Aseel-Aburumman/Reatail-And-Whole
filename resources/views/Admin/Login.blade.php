

@extends('admin.layout.master')
@section('main_content')

<section class="section d-flex align-items-center vh-100 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-7 col-xl-6">
                <div class="card shadow-lg border-0">
                    <div class="card-header text-center bg-primary text-white py-4">
                        <h3 class="mb-0">Admin Panel Login</h3>
                    </div>
                    <div class="card-body p-5">

                        <!-- Success and Error Messages -->
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <!-- Login Form -->
                        <form method="POST" action="{{ route('admin_login_submit') }}">
                            @csrf
                            <!-- Email Input -->
                            <div class="form-group mb-4">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <div class="alert alert-danger mt-2">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>

                            <!-- Password Input -->
                            <div class="form-group mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter your password">
                                @if ($errors->has('password'))
                                    <div class="alert alert-danger mt-2">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid mb-4">
                                <button type="submit" class="btn btn-primary btn-lg">Login</button>
                            </div>

                            <!-- Forgot Password -->
                            <div class="text-center">
                                <a href="{{ route('admin_forget_password') }}" class="text-muted">Forgot Password?</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
