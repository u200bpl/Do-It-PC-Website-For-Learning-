<header>
    <div class="container">
        <div class="navbar">
            <div class="header-logo">
                <a href="/"><h1><img src="{{ asset('img/logo.png') }}" alt="Doit PC"></h1></a>
            </div>

            <div class="header-menu">
                <a class="{{ (request()->is('/*')) ? 'active' : '' }}" href="/">Home</a>
                <a class="{{ (request()->is('gaming-pc*')) ? 'active' : '' }}" href="/gaming-pc">Gaming PC's</a>
                <a class="{{ (request()->is('custom-pc*')) ? 'active' : '' }}" href="/custom-pc">Custom PC</a>
                <a class="{{ (request()->is('reparatie*')) ? 'active' : '' }}" href="/reparatie">Reparaties</a>
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

<style>
header {
    position: fixed;
    background-color: var(--secondary);
    width: 100%;
    z-index: 999;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    height: 85px;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 0;
}

.header-logo img {
    width: 175px;
}

.header-menu {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.header-menu > .active {
    color: var(--primary);
}

.header-menu a {
    text-decoration: none;
    color: var(--black);
    font-size: var(--font-size-a);
    font-weight: 500;
    margin-right: 30px;
}

.header-menu .btn {
    border-radius: 8px;
    padding: 5px 10px;
    border: 2px solid var(--primary);
    background-color: var(--primary);
    color: var(--secondary);
    margin: 0;
}

.header-menu .btn:hover {
    border-radius: 8px;
    padding: 5px 10px;
    border: 2px solid var(--primary);
    background-color: var(--secondary);
    color: var(--primary);
}

.header-menu a:hover {
    color: var(--primary);
}

.header-other {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.header-cart {
    margin-right: 30px;
}

.header-cart a {
    text-decoration: none;
    color: var(--black);
    font-size: var(--font-size-a);
    font-weight: 500;
}

.header-cart a:hover {
    color: var(--primary);
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown > span {
    font-size: var(--font-size-a);
    font-weight: 500;
    cursor: pointer;
    padding: 5px 10px;
    border-radius: 8px;
    border: 2px solid var(--primary);
}

.dropdown > span:hover {
    /* background-color: rgba(63, 213, 13, 0.2); */
    color: var(--primary);
    border: 2px solid var(--primary);
}
  
.dropdown-content {
    display: none;
    position: absolute;
    background-color: var(--secondary);
    width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
    
}

.dropdown-content a {
    display: block;
    font-size: var(--font-size-p);
    margin: 5px 0;
}
  
.dropdown:hover .dropdown-content {
    display: block;
}

.bottom-line {
    width: 100%;
    height: 1px;
    background-color: var(--grey);
    /* margin: 20px 0; */
}

.dropdown-content input {
    width: 100%;
    background-color: var(--secondary);
    cursor: pointer;
    font-weight: 500;
    font-size: var(--font-size-p);
    display: inline-block;
    border: none;
    box-sizing: border-box;
}
</style>