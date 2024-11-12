<!-- resources/views/admin/users/create.blade.php -->

@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')

<div class="container mt-5 pt-5 pb-3">
    <div class="card shadow-sm rounded">
        <div class="card-header bg-secondary text-white">
            <h2>Add New User</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.product.store') }}" method="POST">
                @csrf

                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group mb-3">
                    <label for="price">Price</label>
                    <input type="price" class="form-control" id="price" name="price" required>
                </div>

                <div class="form-group mb-3">
                    <label for="Description">Description</label>
                    <input type="text" class="form-control" id="Description" name="Description">
                </div>

                <div class="form-group mb-3">
                    <label for="Minimum Quantities">Minimum Quantities</label>
                    <input type="text" class="form-control" id="Minimum Quantities" name="Minimum Quantities">
                </div>

                <div class="form-group mb-3">
                    <label for="Store ID">Store ID</label>
                    <input type="Store ID" class="form-control" id="Store ID" name="Store ID" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.product.index') }}" class="btn btn-secondary">Back to product List</a>
                    <button type="submit" class="btn btn-primary">Create product</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
