<div class="container">
    <h1>Edit Status</h1>

    <form action="{{ route('statuses.update', $status->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $status->name }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('statuses.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
