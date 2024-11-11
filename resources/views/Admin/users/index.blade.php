<!-- resources/views/users/index.blade.php -->
<!-- resources/views/users/index.blade.php -->
@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')

<div class="container mt-5">
    <h1>Users</h1>

    <!-- Add extra spacing above the "Add New User" button -->
    <div class="mt-5 mb-3">
        <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Add New User</a>
    </div>

    <div class="card shadow-sm rounded">
        <div class="card-header bg-primary text-white">
            <h2>Users List</h2>
        </div>

        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-info btn-sm me-2">View</a>
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: inline;">
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
