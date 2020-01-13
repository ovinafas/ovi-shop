<div class="list-group">
    <a href="{{ route('home') }}"
        class="list-group-item {{ Request::is('home') ? 'bg-primary text-white' : '' }}">Dashboard
    </a>
    <a href="{{ route('profile.info') }}"
        class="list-group-item {{ Request::is('profile.info') ? 'bg-primary text-white' : '' }}">Contact Info
    </a>
    <a href="{{ route('profile.orders') }}"
        class="list-group-item {{ Request::is('profile.orders') ? 'bg-primary text-white' : '' }}">Orders
    </a>

</div>
