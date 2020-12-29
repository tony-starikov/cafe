<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>FAMILY CAFE - @yield('title')</title>
    <!-- MDB icon -->
    <link rel="icon" href="/img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="/css/mdb.min.css" />
    <!-- Custom styles -->
    <style>
        /* body{
          background-color: #f6e0a2;
        }
        .icon-color {
          background-color:#94536d !important;
        } */
    </style>
</head>
<body>
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="{{ route('index') }}"><strong>FAMILY CAFE</strong></a>

            <!-- Toggle button -->
            <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent1"
                aria-controls="navbarSupportedContent1"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                <!-- Left links -->
                @if(Auth::check() && Auth::user()->isAdmin())
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">ГЛАВНАЯ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">ЗАКАЗЫ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.index') }}">КАТЕГОРИИ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">ТОВАРЫ</a>
                    </li>
                </ul>
                @else
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index') }}">ГЛАВНАЯ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('userOrdersIndex') }}">ЗАКАЗЫ</a>
                        </li>
                    </ul>
                @endif
                <!-- Left links -->

                <!-- Right links -->
                <ul class="navbar-nav d-flex flex-row">
                    <!-- Icons -->
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#">
                            <span><i class="fas fa-phone"></i></span>
                            <span class="clearfix d-none d-sm-inline-block">+380670017002</span>
                        </a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="{{ route('basket') }}">
                            <span><i class="fas fa-shopping-cart"></i></span>
                            <span class="clearfix d-none d-sm-inline-block">КОРЗИНА</span>
                        </a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>

                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <!-- Icon dropdown -->
                    <li class="nav-item me-3 me-lg-0 dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="navbarDropdown"
                            role="button"
                            data-mdb-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <i class="fas fa-user"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @auth()
                                <li><a class="dropdown-item" href="{{ route('getLogout') }}">ВЫЙТИ</a></li>
                            @endauth
                        </ul>
                    </li>
                </ul>
                <!-- Right links -->
            </div>
    </nav>
    <!-- Navbar -->

</header>

<main class="mt-3">
    <div class="container text-body">
        @if(session()->has('message'))
            <p class="alert alert-success text-center">{{ session()->get('message') }}</p>
        @endif

        @yield('content')
    </div>
</main>

<!-- MDB -->
<script type="text/javascript" src="/js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>
</html>
