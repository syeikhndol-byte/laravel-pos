<ul class="navbar-nav iq-main-menu" id="sidebar">
    <li class="nav-item static-item">
        <a class="nav-link static-item disabled" href="#" tabindex="-1">
            <span class="default-icon">Main Menu</span>
            <span class="mini-icon">-</span>
        </a>
    </li>
    <x-nav-link :active="request()->routeIs('home')" href="{{ route('home') }}">Dashboard</x-nav-link>
    <x-nav-link :active="request()->routeIs('posts.*')" href="{{ route('posts.index') }}">Post</x-nav-link>
    <x-nav-link :active="request()->routeIs('users.*')" href="{{ route('users.index') }}">Users</x-nav-link>
    <x-nav-link :active="request()->routeIs('about')" href="/about">Setting Apps</x-nav-link>
</ul>
