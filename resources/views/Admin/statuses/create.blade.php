<div class="container">
    <h1>Create New Status</h1>

    <form action="{{ route('statuses.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('statuses.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
