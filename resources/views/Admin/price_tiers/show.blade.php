<div class="container">
    <h1>Price Tier Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $priceTier->name }}</h5>
            <p class="card-text">Percentage: {{ $priceTier->percentage }}%</p>
            <p class="card-text">Quantity: {{ $priceTier->quantity }}</p>
            <p class="card-text">Created At: {{ $priceTier->created_at }}</p>
            <p class="card-text">Updated At: {{ $priceTier->updated_at }}</p>
            <a href="{{ route('price-tiers.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
