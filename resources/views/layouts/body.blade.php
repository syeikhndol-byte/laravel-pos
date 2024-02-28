<div id="loading">
    @include('components._body_loader')
</div>
@include('components.sidebar')
<main class="main-content">
    <div class="position-relative">
        @include('components.navbar')
        @include('components._sub-header-page')
    </div>
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        {{ $slot }}
    </div>
    @include('components.footer')
    @include('components._modal')
</main>

@include('components._scripts')
