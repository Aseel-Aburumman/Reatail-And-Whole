<div class="container">
    <h1>Create New Price Tier</h1>

    <form action="{{ route('price_tiers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="percentage">Percentage</label>
            <input type="number" name="percentage" class="form-control" min="0" max="100" required>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" class="form-control" min="1" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('price_tiers.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
