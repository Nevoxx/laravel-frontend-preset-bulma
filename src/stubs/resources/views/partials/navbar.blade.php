<nav class="navbar has-shadow">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            {{ config('app.name') }}
        </a>

        @auth
            <a class="navbar-item" href="{{ route('home') }}">
                Dashboard
            </a>
        @endauth

        <div class="navbar-burger burger" data-target="main-nav-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="main-nav-menu" class="navbar-menu">
        <div class="navbar-end">
            @auth
                <div class="navbar-item has-dropdown is-hoverable">
                    <div class="navbar-link">
                        Hello, {{ auth()->user()->name ?? '' }}
                    </div>
                    <div class="navbar-dropdown">
                        <form id="logout-form" name="logout_form" method="POST" action="{{ route('logout') }}">
                            {{ csrf_field() }}
                            <a class="navbar-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        </form>
                    </div>
                </div>
            @endauth

            @guest
                <a class="navbar-item" href="{{ route('login') }}">
                    Login
                </a>
                <a class="navbar-item" href="{{ route('register') }}">
                    Register
                </a>
            @endguest
        </div>
    </div>
</nav>