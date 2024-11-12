<!-- resources/views/products/show.blade.php -->
@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')

<div class="container mt-5">
    <h1>Product Details</h1>

    <div class="card shadow-sm rounded">
        <div class="card-header bg-primary text-white">
            <h2>{{ $product->name }}</h2>
        </div>

        <div class="card-body">
            <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
            <p><strong>Description:</strong> {{ $product->description }}</p>
            <p><strong>Minimum Quantities:</strong> {{ $product->minimumquantities }}</p>
            <p><strong>Store ID:</strong> {{ $product->store_id }}</p>
            <p><strong>Image:</strong></p>
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 200px; height: auto;">
            @else
                <p>No Image Available</p>
            @endif

            <div class="mt-3">
                <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Back to Products</a>
            </div>
        </div>
    </div>
</div>
@endsection
