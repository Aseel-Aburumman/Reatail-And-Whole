@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')

<div class="container mt-5 pt-5 pb-3">
    <div class="card shadow-sm rounded">
        <div class="card-header bg-secondary text-white">
            <h2>Edit Store</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('store.update', $store->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $store->name }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="user_id">Owner</label>
                    <select class="form-control" id="user_id" name="user_id" required>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ $store->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('stores.index') }}" class="btn btn-secondary">Back to Store List</a>
                    <button type="submit" class="btn btn-primary">Update Store</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
