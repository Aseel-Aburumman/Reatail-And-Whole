<!-- resources/views/admin/statuses/show.blade.php -->

@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')

<div class="container mt-5 pt-5 pb-3"> <!-- Increased top margin and padding -->
    <div class="card shadow-sm rounded"> <!-- Card for structured layout -->
        <div class="card-header bg-secondary text-white">
            <h2>Status Details</h2>
        </div>
        <div class="card-body">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $status->id }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $status->name }}</td>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <td>{{ $status->created_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{ $status->updated_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ route('statuses.index') }}" class="btn btn-secondary mt-4">Back to Status List</a> <!-- Extra space for button -->
        </div>
    </div>
</div>
@endsection
