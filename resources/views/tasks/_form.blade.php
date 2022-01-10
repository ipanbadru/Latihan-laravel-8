<div class="mb-2">
    <input type="text" class="form-control mb-2 @error('list') is-invalid @enderror" name="list"
        value="{{ old('list', $task->list) }}" placeholder="The name of the tasks">
    @error('list')
    <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
<button type="submit" class="btn btn-primary">{{ $submit }}</button>
