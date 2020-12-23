<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>FAMILY CAFE</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
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
            <a class="navbar-brand" href="#"><strong>FAMILY CAFE</strong></a>

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
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">ГЛАВНАЯ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ДОСТАВКА</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ОПЛАТА И ВОЗВРАТ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">О НАС</a>
                    </li>
                </ul>
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
                        <a class="nav-link" href="#">
                            <span class="badge badge-pill bg-danger">1</span>
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
                            <li><a class="dropdown-item" href="#">ВОЙТИ</a></li>
                            <li><a class="dropdown-item" href="#">РЕГИСТРАЦИЯ</a></li>
                            <!-- <li><hr class="dropdown-divider" /></li>
                            <li>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </li> -->
                        </ul>
                    </li>
                </ul>
                <!-- Right links -->
            </div>
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
    <!-- <div class="container mt-2">
      <div
      class="p-5 text-center bg-image"
      style="
        background-image: url('https://images.pexels.com/photos/1695052/pexels-photo-1695052.jpeg?cs=srgb&dl=pexels-igor-haritanovich-1695052.jpg&fm=jpg');
        height: 300px;
      "
      >
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.308)">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
              <h1 class="mb-3">Теперь мы <strong>online!</strong></h1>
              <h4 class="mb-3">Заказывай на сайте - забирай в кафе без <strong>очереди!</strong></h4>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Background image -->
</header>

<main class="mt-3">
    <div class="container text-body">
        <div class="row">
            <div class="col-md-6 mt-3">
                <img src="img/1.png" alt="cake" class="img-fluid">
            </div>
            <div class="col-md-6 mt-3">
                <div class="p-4">
                    <div class="mb-3">
                        <a href="#">
                            <span class="badge bg-secondary mr-1">CATEGORY</span>
                        </a>
                        <a href="#">
                            <span class="badge bg-success mr-1">NEW</span>
                        </a>
                        <a href="#">
                            <span class="badge bg-danger mr-1">SALE</span>
                        </a>
                    </div>
                    <p class="lead">
                        <span class="mr-1">
                            <del><strong>200 UAH</strong></del>
                        </span>
                        <span class="mr-1">
                            <strong>100 UAH</strong>
                        </span>
                    </p>
                    <p class="lead font-weight-bold">{{ $product }}</p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente quisquam doloremque odio accusantium a laudantium veniam perferendis. Repudiandae debitis, iure doloremque cumque dolores nihil, expedita consequatur, natus rerum enim hic?
                    </p>
                    <p>
                        <button type="submit" class="btn btn-primary btn-md">
                            В КОРЗИНУ <i class="fas fa-shopping-cart ml-1"></i>
                        </button>
                    </p>
                </div>
            </div>
        </div>

        <hr>

        <div class="row d-flex justify-content-center">
            <div class="col-md-6 text-center">
                <h4 class="my-3 h4">
                    ИФОРМАЦИЯ О КАТЕГОРИИ
                </h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore nisi debitis ea accusamus aliquid minima praesentium ex iure quasi sunt eum dolores cumque, distinctio magnam repudiandae deserunt veritatis eveniet nostrum!
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-12 mt-3">
                <img src="img/2.png" alt="cat" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-12 mt-3">
                <img src="img/3.png" alt="cat" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-12 mt-3">
                <img src="img/4.png" alt="cat" class="img-fluid">
            </div>
        </div>
    </div>
</main>



<!-- Footer -->
<footer class="bg-light text-center text-lg-start">
    <!-- Grid container -->
    <div class="container mb-3">
        <hr>
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">FAMILY CAFE</h5>

                <p>
                    Доставка еды на дом – удобный и комфортный способ организации легкого перекуса или сытного обеда, вкусного завтрака или романтического ужина.
                </p>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#!" class="text-dark">Меню доставки</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Рестораны</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Меню ресторана</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Бизнес ланчи</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Новости</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

                <ul class="list-unstyled">
                    <li>
                        <a href="#!" class="text-dark">Бонусная программа</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Организация праздников</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Вакансии</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-dark" href="#!">FAMILY CAFE</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
</body>

<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>
</html>
