<header>
    <div class="container">
        <div class="navbar">
            <div class="header-logo">
                <a href="/"><h1>Do-It PC</h1></a>
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
                        <a class="btn-primary" href="/login">Login</a>
                        <!-- <a class="{{ (request()->is('register')) ? 'active' : '' }}" href="/register">Registreer</a> -->
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>