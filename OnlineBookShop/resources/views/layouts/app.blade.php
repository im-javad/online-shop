<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/vendor.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/icomoon/icomoon.css">
</head>
<body>
<!-- Navbar start -->
    <div id="header-wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="main-logo">
                            <a id="shop-name" href="index.html">FARVAHAR BOOK</a>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <nav id="navbar">
                            <div class="main-menu stellarnav">
                                <ul class="menu-list">
                                    <li class="menu-item active"><a href="index" data-effect="Home">Home</a></li>
                                    <li class="menu-item"><a href="cart" class="nav-link" data-effect="Cart">Cart:(9)</a></li>
                                    <li class="menu-item"><a href="shop" class="nav-link" data-effect="Shop">Shop</a></li>
                                    <li class="menu-item"><a href="contact" class="nav-link" data-effect="Contact">Contact</a></li>
                                    <li class="menu-item has-sub">
                                        <a class="nav-link" data-effect="Auth">Auth</a>
                                        <ul>
                                            <li><a href="auth.register">Register</a></li>
                                            <li><a href="auth.login">Login</a></li>
                                         </ul>
                                    </li>
                                    <li class="menu-item"><a class="nav-link" data-effect="Contact"></a></li>
                                    <li class="menu-item"><a href="#" class="nav-link" data-effect="Contact" style="color: #ff7100; font-weight: 750;">Guest</a></li>
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
<!-- Navbar end -->

@yield('content')

<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
</body>
</html>

