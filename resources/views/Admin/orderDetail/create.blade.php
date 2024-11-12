<!-- resources/views/admin/users/create.blade.php -->

@extends('admin.layout.master')
@section('main_content')
    @include('admin.layout.nav')
    @include('admin.layout.sidebar')

    <div class="container mt-5 pt-5 pb-3">
        <div class="card shadow-sm rounded">
            <div class="card-header bg-secondary text-white">
                <h2>Add New Order</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.order.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="status_id" value="1">

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
                        <label for="total_quantity">Total Quantity</label>
                        <input type="number" class="form-control" id="total_quantity" name="total_quantity" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="product_id">Product Name</label>
                        <select class="form-control" id="product_id" name="product_id" required>
                            <option value="">Select a Store</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}"
                                    {{ isset($Order) && $Order->product_id == $product->id ? 'selected' : '' }}>
                                    {{ $product->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="price_tier_id">Price Tier Id Name</label>
                        <select class="form-control" id="price_tier_id" name="price_tier_id" required>
                            <option value="">Select a Price Tier</option>
                            @foreach ($priceTiers as $priceTier)
                                <option value="{{ $priceTier->id }}"
                                    {{ isset($Order) && $Order->price_tier_id == $priceTier->id ? 'selected' : '' }}>
                                    {{ $priceTier->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="deadline">Deadline</label>
                        <input type="date" class="form-control" id="deadline" name="deadline" required>
                    </div>


                    <div class="d-flex justify-content-between">
                        <a href="{{ route('order.index') }}" class="btn btn-secondary">Back to Order List</a>
                        <button type="submit" class="btn btn-primary">Create Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
