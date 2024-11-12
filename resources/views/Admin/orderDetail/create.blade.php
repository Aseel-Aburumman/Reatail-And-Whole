<!-- resources/views/admin/users/create.blade.php -->

@extends('admin.layout.master')
@section('main_content')
    @include('admin.layout.nav')
    @include('admin.layout.sidebar')

    <div class="container mt-5 pt-5 pb-3">
        <div class="card shadow-sm rounded">
            <div class="card-header bg-secondary text-white">
                <h2>Add New OrderContribution</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.OrderContribution.store') }}" method="POST">
                    @csrf

                    <!-- Select the Order for this Contribution -->
                    {{-- <div class="form-group mb-3">
                        <label for="order_id">Order</label>
                        <select class="form-control" id="order_id" name="order_id" required>
                            <option value="">Select an Order</option>
                            @foreach ($orders as $order)
                                <option value="{{ $order->id }}">{{ $order->id }} - {{ $order->total_quantity }}</option>
                            @endforeach
                        </select>
                    </div> --}}

                    <input type="hidden" name="status_id" value="1">
                    <input type="hidden" name="order_id" value="{{ $order_id }}">
                    <input type="hidden" name="initiator_retailer_id" value="{{ $Order->initiator_retailer_id }}">


                    <div class="form-group mb-3">
                        <label for="retailer_id">Order Contribution Made By</label>
                        <select class="form-control" id="retailer_id" name="retailer_id" required>
                            <option value="">Select a retailer</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- <div class="form-group mb-3">
                        <label for="store_id">Store Name</label>
                        <select class="form-control" id="store_id" name="store_id" required>
                            <option value="">Select a Store</option>
                            @foreach ($stores as $store)
                                <option value="{{ $store->id }}">{{ $store->name }}</option>
                            @endforeach
                        </select>
                    </div> --}}

                    <div class="form-group mb-3">
                        <label for="quantity">Contribution Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" required>
                    </div>

                    {{-- <div class="form-group mb-3">
                        <label for="product_id">Product Name</label>
                        <select class="form-control" id="product_id" name="product_id" required>
                            <option value="">Select a Product</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div> --}}
{{-- 
                    <div class="form-group mb-3">
                        <label for="price_tier_id">Price Tier</label>
                        <select class="form-control" id="price_tier_id" name="price_tier_id" required>
                            <option value="">Select a Price Tier</option>
                            @foreach ($priceTiers as $priceTier)
                                <option value="{{ $priceTier->id }}">{{ $priceTier->name }}</option>
                            @endforeach
                        </select>
                    </div> --}}

                    {{-- <div class="form-group mb-3">
                        <label for="deadline">Deadline</label>
                        <input type="date" class="form-control" id="deadline" name="deadline" required>
                    </div> --}}

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('order.index') }}" class="btn btn-secondary">Back to Order List</a>
                        <button type="submit" class="btn btn-primary">Create Order Contribution</button>
                    </div>
                </form>
            </div>
        </
