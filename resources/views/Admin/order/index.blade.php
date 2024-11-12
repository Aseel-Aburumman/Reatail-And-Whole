@extends('admin.layout.master')
@section('main_content')
    @include('admin.layout.nav')
    @include('admin.layout.sidebar')

    <div class="container mt-5">
        <h1>Orders</h1>

        <div class="mt-5 mb-3">
            <a href="{{ route('admin.order.create') }}" class="btn btn-primary">Add New order</a>
        </div>

        <div class="card shadow-sm rounded">
            <div class="card-header bg-primary text-white">
                <h2>Orders List</h2>
            </div>

            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>Store Name</th>
                            <th>Order Made By</th>
                            <th>Deadline</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->store->name }}</td>
                                <td>{{ $order->retailer->name }}</td>
                                <td>{{ $order->deadline }}</td>

                                <td>
                                    <a href="{{ route('admin.order.show', $order->id) }}"
                                        class="btn btn-info btn-sm me-2">View</a>
                                    <a href="{{ route('admin.order.edit', $order->id) }}"
                                        class="btn btn-warning btn-sm me-2">Edit</a>
                                    <form action="{{ route('admin.order.destroy', $order->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure?')">Delete</button>
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
