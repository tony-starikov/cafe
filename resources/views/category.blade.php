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
    <div class="container mt-2">
        <div
            class="p-5 text-center bg-image"
            style="
          background-image: url('https://images.pexels.com/photos/1695052/pexels-photo-1695052.jpeg?cs=srgb&dl=pexels-igor-haritanovich-1695052.jpg&fm=jpg');
          height: 300px;
        "
        >
            <div class="mask" style="background-color: rgba(0,0,0,0.31)">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white">
                        <h1 class="mb-3"><strong>{{ $category }}</strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Background image -->
</header>

<main class="mt-3">
    <div class="container text-body">
        <!-- Products -->
        <section class="text-center mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-2 mb-2">
                        <div class="card h-100">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img
                                    src="img/1.png"
                                    class="img-fluid"
                                />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="#" class="text-body">Чизкейк с клубникой <span class="badge bg-success">NEW</span></a>
                                </h5>
                                <h6>45.00 UAH</h6>
                                <a href="#!" class="btn btn-primary">В корзину <span><i class="fas fa-shopping-cart"></i></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-2 mb-2">
                        <div class="card h-100">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img
                                    src="img/2.png"
                                    class="img-fluid"
                                />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="#" class="text-body">Бельгийская вафля <span class="badge bg-danger">SALE</span></a>
                                </h5>
                                <h6>50.00 UAH</h6>
                                <a href="#!" class="btn btn-primary">В корзину <span><i class="fas fa-shopping-cart"></i></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-2 mb-2">
                        <div class="card h-100">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img
                                    src="img/3.png"
                                    class="img-fluid"
                                />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Киевский медовик</h5>
                                <h6>35.00 UAH</h6>
                                <a href="#!" class="btn btn-primary">В корзину <span><i class="fas fa-shopping-cart"></i></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-2 mb-2">
                        <div class="card h-100">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img
                                    src="img/4.png"
                                    class="img-fluid"
                                />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Черничный пирог</h5>
                                <h6>105.00 UAH</h6>
                                <a href="#!" class="btn btn-primary">В корзину <span><i class="fas fa-shopping-cart"></i></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-2 mb-2">
                        <div class="card h-100">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img
                                    src="img/5.png"
                                    class="img-fluid"
                                />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Шоколадный брауни</h5>
                                <h6>100.00 UAH</h6>
                                <a href="#!" class="btn btn-primary">В корзину <span><i class="fas fa-shopping-cart"></i></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-2 mb-2">
                        <div class="card h-100">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img
                                    src="img/6.png"
                                    class="img-fluid"
                                />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Чай Зеленый</h5>
                                <h6>32.00 UAH</h6>
                                <a href="#!" class="btn btn-primary">В корзину <span><i class="fas fa-shopping-cart"></i></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Products -->

        <!-- Pagination -->

        <div class="container">
            <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
                <ul class="pagination pagination-lg">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Pagination -->
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
