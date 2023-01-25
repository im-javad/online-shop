@inject('basketAtViews', 'App\Support\Basket\BasketAtViews')

<!-- Navbar (shop) start -->
<div id="header-wrap">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="main-logo">
                        <a id="shop-name" href="{{ route('shop.home') }}">FARVAHAR BOOK</a>
                    </div>
                </div>
                <div class="col-md-10">
                    <nav id="navbar">
                        <div class="main-menu stellarnav">
                            <ul class="menu-list">
                                <li class="menu-item active"><a href="{{ route('shop.home') }}" data-effect="Home">Home</a></li>
                                <li class="menu-item"><a href="{{ route('shop.basket.index') }}" class="nav-link" data-effect="Cart" id="nav-cart">Cart:({{ $basketAtViews->countBasket()}})</a></li>
                                <li class="menu-item"><a href="{{ route('shop.products.index') }}" class="nav-link" data-effect="Shop">Shop</a></li>
                                <li class="menu-item"><a href="#" class="nav-link" data-effect="Contact">Contact</a></li>
                                <li class="menu-item has-sub">
                                    <a class="nav-link" data-effect="Auth">Auth</a>
                                    @guest
                                        <ul>
                                            <li><a href="{{ route('register') }}">Register</a></li>
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                        </ul>
                                    @endguest
                                    @auth
                                        <ul>
                                            <form action="{{ route('logout') }}" method="POST" class="logout-form">
                                            @csrf
                                                <button type="submit" class="logout-btn">Logout</button>
                                            </form>
                                            <li><a href="#">MyPanel</a></li>
                                        </ul>
                                    @endauth
                                </li>
                                @guest
                                    <li class="menu-item"><a class="nav-link" data-effect="Contact"></a></li>
                                    <li class="menu-item"><a href="#" class="nav-link" data-effect="Contact" id="user-status">Guest</a></li>
                                @endguest
                                @auth
                                    <li class="menu-item"><a class="nav-link" data-effect="Contact"></a></li>
                                    <li class="menu-item"><a href="#" class="nav-link" data-effect="Contact" id="user-status">{{ Auth::user()->name }}</a></li>
                                @endauth
                            </ul>
                            <div class="hamburger">
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </div>
                        </div>
                    </nav>
                </div>   
            </div>
        </div>
    </header>
</div>
<!-- Navbar (shop) end -->
