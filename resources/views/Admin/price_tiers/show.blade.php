<!-- resources/views/admin/price_tiers/show.blade.php -->

@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')

<div class="container mt-5 pt-5 pb-3"> <!-- Increased top margin and padding -->
    <div class="card shadow-sm rounded"> <!-- Card for structured layout -->
        <div class="card-header bg-secondary text-white">
            <h2>Price Tier Details</h2>
        </div>
        <div class="card-body">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $priceTier->id }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $priceTier->name }}</td>
                    </tr>
                    <tr>
                        <th>Percentage</th>
                        <td>{{ $priceTier->percentage }}%</td>
                    </tr>
                    <tr>
                        <th>Quantity</th>
                        <td>{{ $priceTier->quantity }}</td>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <td>{{ $priceTier->created_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{ $priceTier->updated_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ route('price_tiers.index') }}" class="btn btn-secondary mt-4">Back to Price Tier List</a> <!-- Extra space for button -->
        </div>
    </div>
</div>
@endsection
