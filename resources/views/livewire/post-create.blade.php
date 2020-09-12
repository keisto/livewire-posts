<div class="mb-4">
    <form class="d-flex items-center" wire:submit.prevent="create">
        <div class="form-group flex-grow-1 mr-3 mb-0">
            <label for="body" class="sr-only">Your Post</label>
            <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror" wire:model="body"></textarea>

            @error('body')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-dark h-full px-4">Post</button>
    </form>
</div>
