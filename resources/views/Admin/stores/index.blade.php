@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')

<div class="container mt-5">
    <h1 class="mb-4">Stores</h1>

    <!-- زر إضافة متجر جديد -->
    <div class="mt-5 mb-3">
        <a href="{{ route('store.create') }}" class="btn btn-primary">Add New Store</a>
    </div>


    <!-- قائمة المتاجر -->
    <div class="card shadow-sm rounded border-0">
        <div class="card-header bg-primary text-white d-flex align-items-center justify-content-between">
            <h3 class="mb-0">List of Stores</h3>
            <span class="badge bg-light text-dark">{{ $stores->count() }} Total Stores</span>
        </div>

        <div class="card-body">
            <table class="table table-striped table-hover table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Owner</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($stores as $store)
                        <tr>
                            <td>{{ $store->id }}</td>
                            <td>{{ $store->name }}</td>
                            <td>{{ $store->user->name }}</td>
                            <td>
                                <a href="{{ route('store.show', $store->id) }}" class="btn btn-info btn-sm me-2">View</a>
                                <a href="{{ route('store.edit', $store->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                                <form action="{{ route('store.destroy', $store->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">No stores found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
