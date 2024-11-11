<div class="container">
    <h1>Status Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $status->name }}</h5>
            <p class="card-text">Created At: {{ $status->created_at }}</p>
            <p class="card-text">Updated At: {{ $status->updated_at }}</p>
            <a href="{{ route('statuses.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
