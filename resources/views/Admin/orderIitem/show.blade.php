<!-- resources/views/admin/users/show.blade.php -->

@extends('admin.layout.master')
@section('main_content')
    @include('admin.layout.nav')
    @include('admin.layout.sidebar')

    <div class="container mt-5 pt-5 pb-3"> <!-- Increased top margin and padding -->
        <div class="card shadow-sm rounded"> <!-- Card for structured layout -->
            <div class="card-header bg-secondary text-white">
                <h2>Order Details</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Order ID</th>
                            <th>Store Name</th>
                            <th>Order Made By</th>
                            <th>Deadline</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $Order->id }}</td>
                            <td>{{ $Order->store->name }}</td>
                            <td>{{ $Order->retailer->name }}</td>
                            <td>{{ $Order->deadline }}</td>
                        </tr>
                    </tbody>
                </table>

                <h4 class="mt-4">Order Items</h4>

                <!-- Loop through each order item -->
                <div class="order-items-list">
                    @foreach ($Order->orderItems as $item)
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->product->name }}</h5>
                                <p><strong>Total Quantity:</strong> {{ $item->total_quantity }}</p>

                                <div class="table-responsive">
                                    <table class="table table-sm table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Contributor</th>
                                                <th>Quantity Contributed</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($item->contributions as $contribution)
                                                <tr>
                                                    <td>{{ $contribution->retailer->name }}</td>
                                                    <td>{{ $contribution->quantity }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <a href="{{ route('order.index') }}" class="btn btn-secondary mt-4">Back to Order List</a>
                <!-- Extra space for button -->
            </div>
        </div>
    </div>
@endsection
