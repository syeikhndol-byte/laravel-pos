<form wire:submit="save" class="row g-3">
    <div class="col-md-12">
        <label for="title" class="form-label">{{ __('Title') }}</label>
        <input type="text" wire:model="form.title" class="form-control @error('form.title') is-invalid @enderror"
            id="title">
        @error('form.title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>

    <div class="col-md-12">
        <label for="content" class="form-label">{{ __('Content') }}</label>
        <textarea wire:model="form.content" class="form-control @error('form.content') is-invalid @enderror" id="content"
            rows="3"></textarea>
        @error('form.content')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">{{ __('Submit Form') }}</button>
    </div>
</form>
