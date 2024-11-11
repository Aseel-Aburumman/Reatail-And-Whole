<!-- resources/views/admin/users/show.blade.php -->

@extends('admin.layout.master')
@section('main_content')
    @include('admin.layout.nav')
    @include('admin.layout.sidebar')

    <div class="container mt-5 pt-5 pb-3"> <!-- Increased top margin and padding -->
        <div class="card shadow-sm rounded"> <!-- Card for structured layout -->
            <div class="card-header bg-secondary text-white">
                <h2>User Details</h2>
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
                <div class="accordion" id="orderItemsAccordion">
                    @foreach ($Order->orderItems as $item)
                        <div class="card mb-3">
                            <div class="card-header">
                                <a class="btn btn-link" data-toggle="collapse" href="#collapseItem{{ $item->id }}"
                                    role="button" aria-expanded="false" aria-controls="collapseItem{{ $item->id }}">
                                    {{ $item->product->name }} - Total Quantity: {{ $item->total_quantity }}
                                </a>
                            </div>
                            <div id="collapseItem{{ $item->id }}" class="collapse">
                                <div class="card-body">
                                    <table class="table table-sm">
                                        <thead>
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
                <a href="{{ route('admin.orderItem.show', $Order->id) }}" class="btn btn-warning btn-sm me-2">Show Order
                    Detail</a>
                <a href="{{ route('order.index') }}" class="btn btn-secondary mt-4">Back to User List</a>
                <!-- Extra space for button -->
            </div>
        </div>
    </div>
@endsection
