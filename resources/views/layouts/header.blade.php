<header>
    <div class="container">
        <div class="navbar">
            <div class="header-logo">
                <a href="/"><h1>Kiwipc</h1></a>
            </div>

            <div class="header-menu">
                <a class="{{ (request()->is('/*')) ? 'active' : '' }}" href="/">Home</a>
                <a class="{{ (request()->is('gaming-pc*')) ? 'active' : '' }}" href="/gaming-pc">Gaming PC's</a>
            </div>

            <div class="header-other">
                <div class="header-cart">
                    <a href="/cart"><i class="fa fa-shopping-cart"></i></a>
                </div>
                <a class="{{ (request()->is('login')) ? 'active' : '' }} btn-primary" href="/login">Login</a>
            </div>
        </div>
    </div>
</header>