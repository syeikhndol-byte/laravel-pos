<ul class="navbar-nav iq-main-menu" id="sidebar">
    <li class="nav-item static-item">
        <a class="nav-link static-item disabled" href="#" tabindex="-1">
            <span class="default-icon">Main Menu</span>
            <span class="mini-icon">-</span>
        </a>
    </li>
    <x-nav-link :active="request()->routeIs('home')" href="{{ route('home') }}">{{ __('Dashboard') }}</x-nav-link>
    <x-nav-link :active="request()->routeIs('catproduct.*')" href="{{ route('catproduct.index') }}">{{ __('Category Product') }}</x-nav-link>
    <x-nav-link :active="request()->routeIs('product.*')" href="{{ route('product.index') }}">{{ __('Product') }}</x-nav-link>
    <x-nav-link :active="request()->routeIs('posts.*')" href="{{ route('posts.index') }}">{{ __('Post') }}</x-nav-link>
    <x-nav-link :active="request()->routeIs('users.*')" href="{{ route('users.index') }}">{{ __('Users') }}</x-nav-link>
    <x-nav-link :active="request()->routeIs('about')" href="/about">{{ __('Setting') }}</x-nav-link>
</ul>
