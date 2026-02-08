<!-- Spinner Start -->
<div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->


<!-- Navbar start -->
<nav class="navbar navbar-expand-lg fixed-top shadow-sm" style="background: black !important;">

    <div class="container-fluid">

        <!-- LEFT: LOGO -->
        <!-- <a class="navbar-brand fw-bold" href="#">
            <img src="<?= base_url('assets/img/logo-2.png') ?>" alt="Logo" height="60">
        </a> -->
        <a href="#" class="d-flex align-items-center navbar-brand fw-bold">
            <img src="<?= base_url('assets/img/logo-2.png') ?>" alt="Logo" height="50">
            <div>
                <h5 class="fw-bold ps-1 text-primary my-0 py-0">Rishad Mateen</h5>
                <h5 class="fw-bold ps-1 text-primary my-0 py-0"><span class="text-danger">&</span> Company</h5>
            </div>
        </a>

        <!-- TOGGLER (MOBILE) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <i class="bi bi-menu-button-wide text-primary"></i>
        </button>

        <!-- CENTER + RIGHT -->
        <div class="collapse navbar-collapse" id="mainNavbar">

            <!-- CENTER: MENU -->
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-4">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Fruits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Vegetables</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Catalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>

            <!-- RIGHT: SEARCH ICON -->
            <div class="d-flex">
                <button class="btn btn-outline-success rounded-circle" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>

        </div>
    </div>
</nav>
<!-- Navbar End -->


<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->