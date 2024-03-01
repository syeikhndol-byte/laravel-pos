<div>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">{{ __('List Users') }}</h4>
            </div>
            <div class="text-center ms-3 ms-lg-0 ms-md-0">
                <a href="{{ route('posts.create') }}" class="mt-lg-0 mt-md-0 mt-3 btn btn-primary btn-icon"
                    data-bs-toggle="tooltip" data-modal-form="form" data-icon="person_add" data-size="small"
                    data--href="{{ route('posts.create') }}" data-app-title="{{ __('Add Users') }}" data-placement="top"
                    title="{{ __('Add Users') }}">
                    <i class="btn-inner">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                    </i>
                    <span>{{ __('Add Users') }}</span>
                </a>
                <x-button type="primary" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">{{ __('Add Users With Modal') }}</x-button>

            </div>
        </div>
        <div class="card-body">
            <!-- Flash Message -->
            @forelse ($users as $user)
                @include('livewire.users._users')
            @empty
                @include('livewire.users._null_users')
            @endforelse
        </div>
    </div>
</div>
