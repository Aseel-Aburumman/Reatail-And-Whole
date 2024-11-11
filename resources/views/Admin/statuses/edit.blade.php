<!-- resources/views/admin/statuses/edit.blade.php -->

@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')

<div class="container mt-5 pt-5 pb-3">
    <div class="card shadow-sm rounded">
        <div class="card-header bg-secondary text-white">
            <h2>Edit Status</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('statuses.update', $status->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $status->name }}" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('statuses.index') }}" class="btn btn-secondary">Back to Status List</a>
                    <button type="submit" class="btn btn-primary">Update Status</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
