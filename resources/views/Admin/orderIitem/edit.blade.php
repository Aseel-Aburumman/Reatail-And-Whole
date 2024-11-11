<!-- resources/views/admin/users/edit.blade.php -->

@extends('admin.layout.master')
@section('main_content')
    @include('admin.layout.nav')
    @include('admin.layout.sidebar')

    <div class="container mt-5 pt-5 pb-3">
        <div class="card shadow-sm rounded">
            <div class="card-header custom-header">
                <h2>Edit Order</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.order.update', $Order->id) }}" method="POST">
                    @csrf
                    @method('PUT')



                    <div class="form-group mb-3">
                        <label for="initiator_retailer_id">Order Made By</label>
                        <select class="form-control" id="initiator_retailer_id" name="initiator_retailer_id" required>
                            <option value="">Select a retailer</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}"
                                    {{ isset($Order) && $Order->initiator_retailer_id == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="store_id">Store Name</label>
                        <select class="form-control" id="store_id" name="store_id" required>
                            <option value="">Select a Store</option>
                            @foreach ($stores as $store)
                                <option value="{{ $store->id }}"
                                    {{ isset($Order) && $Order->store_id == $store->id ? 'selected' : '' }}>
                                    {{ $store->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="deadline">Deadline</label>
                        <input type="date" class="form-control" id="deadline" name="deadline"
                            value="{{ $Order->deadline }}" required>
                    </div>



                    <div class="d-flex justify-content-between">
                        <a href="{{ route('order.index') }}" class="btn btn-secondary">Back to Order List</a>
                        <button type="submit" class="btn btn-primary">Update Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
