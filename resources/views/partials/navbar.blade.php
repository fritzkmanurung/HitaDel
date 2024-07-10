<nav>
    <i class='bx bx-menu toggle-sidebar' ></i>
    <form action="{{ route('search') }}" method="GET">
        <div class="form-group">
            <input type="text" name="keyword" class="form-control" placeholder="Search users" aria-label="Search"
                    aria-describedby="search-button">
            <button class="" type="submit" id="search-button">
                <i class='bx bx-search icon' ></i>
            </button>
        </div>
    </form>

    <span class="divider"></span>
    <div class="profile">
        @if (Auth::user()->profile_picture)
        <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile Picture">
        @else
            <img src="{{ asset('img/layouts/user.jpeg') }}" alt="Profile Picture">
        @endif
        <ul class="profile-link">
            <li><a href="{{ route('profile') }}"><i class='bx bxs-user-circle icon' ></i> Profile</a></li>
            <li><a href="{{ route('settings') }}"><i class='bx bxs-cog' ></i> Settings</a></li>
            <li><a href="{{ route('login') }}"><i class='bx bxs-log-out-circle' ></i> Logout</a></li>
        </ul>
    </div>
</nav>