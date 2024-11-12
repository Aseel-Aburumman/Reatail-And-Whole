@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')

<div class="container mt-5 pt-5 pb-3">
    <div class="card shadow-sm rounded">
        <div class="card-header bg-secondary text-white">
            <h2>Store Details</h2>
        </div>
        <div class="card-body">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $store->id }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $store->name }}</td>
                    </tr>
                    <tr>
                        <th>Owner</th>
                        <td>{{ $store->user->name }}</td>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <td>{{ $store->created_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{ $store->updated_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ route('stores.index') }}" class="btn btn-secondary mt-4">Back to Store List</a>
        </div>
    </div>
</div>
@endsection
