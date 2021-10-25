<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarCenteredExample2"
            aria-controls="navbarCenteredExample2"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div
            class="collapse navbar-collapse justify-content-center"
            id="navbarCenteredExample2"
        >
            <!-- Left links -->
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">ВСЕ КАТЕГОРИИ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('new') }}">НОВИНКИ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sale') }}">СКИДКИ</a>
                </li>

            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
