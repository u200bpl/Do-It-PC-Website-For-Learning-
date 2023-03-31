<header>
    <div class="container">
        <div class="navbar">
            <div class="header-logo">
                <a href="/"><h1><img src="{{ asset('img/logo.png') }}" alt="Doit PC"></h1></a>
            </div>

            <div class="header-menu">
                <a class="{{ (request()->is('/*')) ? 'active' : '' }}" href="/">Home</a>
                <a class="{{ (request()->is('gaming-pc*')) ? 'active' : '' }}" href="/gaming-pc">Gaming PC's</a>
            </div>

            <div class="header-other">
                <div class="header-cart">
                    <a href="/cart"><i class="fa fa-shopping-cart"></i></a>
                </div>
                <div class="header-menu">
                    @if (Auth::check())
                        <div class="dropdown">
                            <span><i class="fa-solid fa-user-check"></i> {{ Auth::user()->first_name }}</span>
                            <div class="dropdown-content">
                                <a href="/account">Account</a>
                                <a href="/support">Support</a>
                                @if (Auth::user()->is_admin == 1)
                                    <a href="/admin">Admin Panel</a>
                                @endif
                                <div class="bottom-line"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <input type="submit" value="Logout">
                                </form>
                            </div>
                        </div>
                    @else
                        <a class="btn {{ (request()->is('login*')) ? 'active' : '' }}" href="/login"><i class="fa-solid fa-user-xmark"></i> Inloggen</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>