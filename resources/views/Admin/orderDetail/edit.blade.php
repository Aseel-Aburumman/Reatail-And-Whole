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
                <form action="{{ route('admin.OrderContribution.update', $Ordercontribution->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="order_id" value="{{ $Ordercontribution->order_id }}">


                    <div class="form-group mb-3">
                        <label for="retailer_id">Contributor</label>
                        <select class="form-control" id="retailer_id" name="retailer_id" required>
                            <option value="">Select a retailer</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}"
                                    {{ isset($Ordercontribution) && $Ordercontribution->retailer_id == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>



                    <div class="form-group mb-3">
                        <label for="quantity">quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity"
                            value="{{ $Ordercontribution->quantity }}" required>
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
