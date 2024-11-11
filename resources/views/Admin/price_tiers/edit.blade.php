<!-- resources/views/admin/price_tiers/edit.blade.php -->

@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')

<div class="container mt-5 pt-5 pb-3">
    <div class="card shadow-sm rounded">
        <div class="card-header bg-secondary text-white">
            <h2>Edit Price Tier</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('price_tiers.update', $priceTier->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $priceTier->name }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="percentage">Percentage</label>
                    <input type="number" class="form-control" id="percentage" name="percentage" value="{{ $priceTier->percentage }}" min="0" max="100" required>
                </div>

                <div class="form-group mb-3">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $priceTier->quantity }}" min="1" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('price_tiers.index') }}" class="btn btn-secondary">Back to Price Tiers List</a>
                    <button type="submit" class="btn btn-primary">Update Price Tier</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
