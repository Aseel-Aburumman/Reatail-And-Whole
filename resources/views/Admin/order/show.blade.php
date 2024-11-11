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
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{ $Order->id }}</td>
                        </tr>
                        <tr>
                            <th>Store Name</th>
                            <td>{{ $Order->store->name }}</td>
                        </tr>
                        <tr>
                            <th>Order Made By</th>
                            <td>{{ $Order->retailer->name }}</td>
                        </tr>
                        <tr>
                            <th>Deadline</th>
                            <td>{{ $Order->deadline }}</td>
                        </tr>

                        <tr>
                            <th>Created At</th>
                            <td>{{ $Order->created_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                        <tr>
                            <th>Updated At</th>
                            <td>{{ $Order->updated_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{ route('admin.orderItem.show', $Order->id) }}" class="mt-4 btn btn-warning  me-2">Show Order
                    Detail</a>
                <a href="{{ route('order.index') }}" class="btn btn-secondary mt-4">Back to Order List</a>
                <!-- Extra space for button -->
            </div>
        </div>
    </div>
@endsection
