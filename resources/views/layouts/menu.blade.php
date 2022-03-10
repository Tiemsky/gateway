<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
    @if (Auth::user()->isAdmin == 1)
        <a href="{{ route('add-user') }}" class="nav-link {{ Request::is('add-user') ? 'active' : '' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>Add User</p>
        </a>

        <a href="{{ route('get-users') }}" class="nav-link {{ Request::is('get-users') ? 'active' : '' }}">
            <i class="nav-icon fas fa-user"></i>
            <p>Get Users</p>
        </a>
    @endif

    <a href="{{ route('my-bank-statement') }}" class="nav-link {{ Request::is('my-statement') ? 'active' : '' }}">
        <i class="nav-icon fa fa-cog""></i>
        <p>View Transaction</p>
    </a>

  

    <a href="{{ route('change-password') }}" class="nav-link {{ Request::is('change-password') ? 'active' : '' }}">
        <i class="nav-icon fa fa-cog""></i>
        <p>change password</p>
    </a>
</li>
