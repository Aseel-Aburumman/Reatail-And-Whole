<!-- resources/views/admin/price_tiers/create.blade.php -->

@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')

<div class="container mt-5 pt-5 pb-3">
    <div class="card shadow-sm rounded">
        <div class="card-header bg-secondary text-white">
            <h2>Create New Price Tier</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('price_tiers.store') }}" method="POST">
                @csrf

                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group mb-3">
                    <label for="percentage">Percentage</label>
                    <input type="number" class="form-control" id="percentage" name="percentage" min="0" max="100" required>
                </div>

                <div class="form-group mb-3">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('price_tiers.index') }}" class="btn btn-secondary">Back to Price Tier List</a>
                    <button type="submit" class="btn btn-primary">Save Price Tier</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

