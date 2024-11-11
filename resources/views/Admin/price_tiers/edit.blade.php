<div class="container">
    <h1>Edit Price Tier</h1>

    <form action="{{ route('price_tiers.update', $priceTier->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $priceTier->name }}" required>
        </div>

        <div class="form-group">
            <label for="percentage">Percentage</label>
            <input type="number" name="percentage" class="form-control" value="{{ $priceTier->percentage }}" min="0" max="100" required>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" class="form-control" value="{{ $priceTier->quantity }}" min="1" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('price_tiers.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
