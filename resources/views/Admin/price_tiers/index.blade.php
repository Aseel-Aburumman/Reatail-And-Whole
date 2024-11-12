<!-- resources/views/admin/price_tiers/index.blade.php -->

@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')

<div class="container mt-5">
    <h1>Price Tiers</h1>

    <div class="mt-5 mb-3">
        <a href="{{ route('price_tiers.create') }}" class="btn btn-primary">Add New Price Tier</a>
    </div>

    <div class="card shadow-sm rounded">
        <div class="card-header bg-primary text-white">
            <h2>Price Tiers List</h2>
        </div>

        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Percentage</th>
                        <th>Quantity</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($priceTiers as $priceTier)
                        <tr>
                            <td>{{ $priceTier->id }}</td>
                            <td>{{ $priceTier->name }}</td>
                            <td>{{ $priceTier->percentage }}%</td>
                            <td>{{ $priceTier->quantity }}</td>
                            <td>
                                <a href="{{ route('price_tiers.show', $priceTier->id) }}" class="btn btn-info btn-sm me-2">View</a>
                                <a href="{{ route('price_tiers.edit', $priceTier->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                                <form action="{{ route('price_tiers.destroy', $priceTier->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
