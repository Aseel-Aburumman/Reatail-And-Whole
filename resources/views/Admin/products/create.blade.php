<!-- resources/views/products/create.blade.php -->
@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')

<div class="container mt-5">
    <h1>Add New Product</h1>

    <div class="card shadow-sm rounded">
        <div class="card-header bg-primary text-white">
            <h2>Product Details</h2>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" step="0.01" name="price" class="form-control" id="price" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="description"></textarea>
                </div>

                <div class="mb-3">
                    <label for="minimumquantities" class="form-label">Minimum Quantities</label>
                    <input type="number" name="minimumquantities" class="form-control" id="minimumquantities" required>
                </div>

                <div class="mb-3">
                    <label for="store_id" class="form-label">Store ID</label>
                    <input type="number" name="store_id" class="form-control" id="store_id" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>

                <button type="submit" class="btn btn-primary">Save Product</button>
            </form>
        </div>
    </div>
</div>
@endsection
