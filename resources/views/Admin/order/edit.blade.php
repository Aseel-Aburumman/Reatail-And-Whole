<!-- resources/views/admin/users/edit.blade.php -->

@extends('admin.layout.master')
@section('main_content')
    @include('admin.layout.nav')
    @include('admin.layout.sidebar')

    <div class="container mt-5 pt-5 pb-3">
        <div class="card shadow-sm rounded">
            <div class="card-header custom-header">
                <h2>Edit Order</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.order.update', $Order->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $Order->name }}"
                            required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $Order->email }}"
                            required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $Order->phone }}"
                            required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location"
                            value="{{ $user->location }}" required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('order.index') }}" class="btn btn-secondary">Back to Order List</a>
                        <button type="submit" class="btn btn-primary">Update Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
