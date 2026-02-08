<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $this->load->view('commons/header_meta');
    $this->load->view('commons/css_links');
    ?>
</head>

<body>

    <?php
    $this->load->view('commons/header');
    $this->load->view('commons/js_links');
    ?>

    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5 hero-header align-items-center">
        <video class="hero-bg-video" autoplay muted loop playsinline>
            <source src="<?= base_url('assets/videos/video-2.mp4') ?>" type="video/mp4">
        </video>

        <div class="hero-overlay"></div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center">
                    <h4 class="text-dark fs-5 rounded-pill badge bg-primary" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700">serving since 1986</h4>
                    <h1 class="my-3 display-3 text-primary" data-aos="fade-up" data-aos-delay="150" data-aos-duration="700">Rishad Mateen & Company</h1>
                    <h3 class="text-secondary" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">Farm-fresh fruits and vegetables you can trust!</h3>
                    <p class="text-white mt-4 mb-4 mx-auto" data-aos="fade-up" data-aos-delay="250" data-aos-duration="700" style="max-width: 600px;">
                        We process and export fresh fruits and vegetables with a strong focus on quality, efficiency, and competitive pricing, using advanced post-harvest facilities and close collaboration with growers to add value and meet global market demands.
                    </p>
                    <a href="https://wa.me/923001234567" target="_blank" class="btn btn-success p-0 whatsapp-btn d-inline-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
                        <span class="wa-icon d-flex align-items-center justify-content-center">
                            <i class="fab fa-whatsapp"></i>
                        </span>
                        <span class="wa-text d-flex align-items-center px-3">
                            Contact Us
                        </span>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite">
        <div class="container py-5">
            <div class="tab-class text-center">
                <div class="row g-4">
                    <div class="col-lg-4 text-start" data-aos="slide-up" data-aos-delay="100" data-aos-duration="800">
                        <h1>Our Products</h1>
                    </div>
                    <div class="col-lg-8 text-end" data-aos="slide-up" data-aos-delay="100" data-aos-duration="800">
                        <ul class="nav nav-pills d-inline-flex text-center mb-5">
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                    <span class="text-dark" style="width: 130px;">All Products</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                    <span class="text-dark" style="width: 130px;">Vegetables</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                    <span class="text-dark" style="width: 130px;">Fruits</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-4 col-xl-3" data-aos="slide-up" data-aos-delay="100" data-aos-duration="600">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="<?= base_url('assets/img/fruite-item-5.jpg') ?>" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Grapes</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">Get a Quote</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3" data-aos="slide-up" data-aos-delay="150" data-aos-duration="600">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="<?= base_url('assets/img/fruite-item-5.jpg') ?>" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Grapes</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">Get a Quote</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3" data-aos="slide-up" data-aos-delay="250" data-aos-duration="600">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="<?= base_url('assets/img/fruite-item-2.jpg') ?>" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Raspberries</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">Get a Quote</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3" data-aos="slide-up" data-aos-delay="300" data-aos-duration="600">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="<?= base_url('assets/img/fruite-item-4.jpg') ?>" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Apricots</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">Get a Quote</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3" data-aos="slide-up" data-aos-delay="350" data-aos-duration="600">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="<?= base_url('assets/img/fruite-item-3.jpg') ?>" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Banana</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">Get a Quote</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3" data-aos="slide-up" data-aos-delay="400" data-aos-duration="600">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="<?= base_url('assets/img/fruite-item-1.jpg') ?>" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Oranges</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">Get a Quote</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3" data-aos="slide-up" data-aos-delay="450" data-aos-duration="600">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="<?= base_url('assets/img/fruite-item-2.jpg') ?>" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Raspberries</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">Get a Quote</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3" data-aos="slide-up" data-aos-delay="500" data-aos-duration="600">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="<?= base_url('assets/img/fruite-item-5.jpg') ?>" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Grapes</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">Get a Quote</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-4 col-xl-3" data-aos="slide-up" data-aos-delay="100" data-aos-duration="600">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="<?= base_url('assets/img/fruite-item-5.jpg') ?>" class="img-fluid w-100 rounded-top" alt="Fruite Item 5">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Grapes</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">Get a Quote</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3" data-aos="slide-up" data-aos-delay="150" data-aos-duration="600">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="<?= base_url('assets/img/fruite-item-2.jpg') ?>" class="img-fluid w-100 rounded-top" alt="Fruite Item 2">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Raspberries</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">Get a Quote</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-4 col-xl-3" data-aos="slide-up" data-aos-delay="100" data-aos-duration="600">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="<?= base_url('assets/img/fruite-item-1.jpg') ?>" class="img-fluid w-100 rounded-top" alt="Fruite Item 1">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Oranges</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">Get a Quote</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3" data-aos="slide-up" data-aos-delay="150" data-aos-duration="600">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="<?= base_url('assets/img/fruite-item-6.jpg') ?>" class="img-fluid w-100 rounded-top" alt="Fruite Item 6">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Apple</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">Get a Quote</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fruits Shop End-->

    <!-- Banner Section Start-->
    <div class="container-fluid banner bg-secondary my-5">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="py-4">
                        <h1 class="display-3 text-white">Fresh Exotic Fruits</h1>
                        <p class="fw-normal display-3 text-dark mb-4">in Our Store</p>
                        <p class="mb-4 text-dark">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.</p>
                        <a href="#" class="banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5">BUY</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="slide-up" data-aos-delay="150" data-aos-duration="600">
                    <div class="position-relative">
                        <img src="<?= base_url('assets/img/baner-1.png') ?>" class="img-fluid w-100 rounded" alt="Banner 1">
                        <div class="d-flex align-items-center justify-content-center bg-white rounded-circle position-absolute" style="width: 140px; height: 140px; top: 0; left: 0;">
                            <h1 style="font-size: 100px;">1</h1>
                            <div class="d-flex flex-column">
                                <span class="h2 mb-0">50$</span>
                                <span class="h4 text-muted mb-0">kg</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Bestsaler Product Start -->
    <div class="container-fluid">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                <h1 class="display-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="600">Best Selling Products</h1>
                <p data-aos="fade-up" data-aos-delay="150" data-aos-duration="600">Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-xl-4" data-aos="slide-up" data-aos-delay="100" data-aos-duration="600">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="<?= base_url('assets/img/best-product-1.jpg') ?>" class="img-fluid rounded-circle w-100" alt="Best Product 1">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5">Organic Tomato</a>
                                <div class="d-flex my-3">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">3.12 $</h4>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">Get a Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4" data-aos="slide-up" data-aos-delay="150" data-aos-duration="600">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="<?= base_url('assets/img/best-product-2.jpg') ?>" class="img-fluid rounded-circle w-100" alt="Best Product 2">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5">Organic Tomato</a>
                                <div class="d-flex my-3">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">3.12 $</h4>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">Get a Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4" data-aos="slide-up" data-aos-delay="200" data-aos-duration="600">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="<?= base_url('assets/img/best-product-3.jpg') ?>" class="img-fluid rounded-circle w-100" alt="Best Product 3">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5">Organic Tomato</a>
                                <div class="d-flex my-3">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">3.12 $</h4>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">Get a Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4" data-aos="slide-up" data-aos-delay="250" data-aos-duration="600">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="<?= base_url('assets/img/best-product-4.jpg') ?>" class="img-fluid rounded-circle w-100" alt="Best Product 4">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5">Organic Tomato</a>
                                <div class="d-flex my-3">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">3.12 $</h4>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">Get a Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4" data-aos="slide-up" data-aos-delay="300" data-aos-duration="600">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="<?= base_url('assets/img/best-product-5.jpg') ?>" class="img-fluid rounded-circle w-100" alt="Best Product 5">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5">Organic Tomato</a>
                                <div class="d-flex my-3">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">3.12 $</h4>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">Get a Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4" data-aos="slide-up" data-aos-delay="350" data-aos-duration="600">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="<?= base_url('assets/img/best-product-6.jpg') ?>" class="img-fluid rounded-circle w-100" alt="Best Product 6">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5">Organic Tomato</a>
                                <div class="d-flex my-3">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">3.12 $</h4>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">Get a Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bestsaler Product End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial">
        <div class="container py-5">
            <div class="testimonial-header text-center">
                <h4 class="text-primary" data-aos="slide-up" data-aos-delay="100" data-aos-duration="600">Explore</h4>
                <h1 class="display-5 mb-5 text-dark" data-aos="slide-up" data-aos-delay="150" data-aos-duration="600">Our Fresh Products</h1>
            </div>

            <!-- Navigation -->
            <div class="text-end justify-content-end testimonial-nav d-flex gap-2 m-2">
                <button class="btn btn-sm btn-primary swiper-prev">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="btn btn-sm btn-primary swiper-next">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>

            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">

                    <!-- Card 1 -->
                    <div class="swiper-slide">
                        <div class="card mb-3">
                            <img src="<?= base_url('assets/img/fruite-item-1.jpg') ?>" class="card-img-top" alt="Apple">
                            <div class="card-body text-center">
                                <a href="#" class="h5 d-block">Organic Apple</a>
                                <a href="#" class="btn btn-sm btn-outline-primary rounded-pill w-50 mx-auto d-block">Read more</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="swiper-slide">
                        <div class="card mb-3">
                            <img src="<?= base_url('assets/img/fruite-item-2.jpg') ?>" class="card-img-top" alt="Banana">
                            <div class="card-body text-center">
                                <a href="#" class="h5 d-block">Fresh Banana</a>
                                <a href="#" class="btn btn-sm btn-outline-primary rounded-pill w-50 mx-auto d-block">Read more</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="swiper-slide">
                        <div class="card mb-3">
                            <img src="<?= base_url('assets/img/fruite-item-3.jpg') ?>" class="card-img-top" alt="Orange">
                            <div class="card-body text-center">
                                <a href="#" class="h5 d-block">Juicy Orange</a>
                                <a href="#" class="btn btn-sm btn-outline-primary rounded-pill w-50 mx-auto d-block">Read more</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="swiper-slide">
                        <div class="card mb-3">
                            <img src="<?= base_url('assets/img/fruite-item-4.jpg') ?>" class="card-img-top" alt="Tomato">
                            <div class="card-body text-center">
                                <a href="#" class="h5 d-block">Organic Tomato</a>
                                <a href="#" class="btn btn-sm btn-outline-primary rounded-pill w-50 mx-auto d-block">Read more</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="swiper-slide">
                        <div class="card mb-3">
                            <img src="<?= base_url('assets/img/fruite-item-5.jpg') ?>" class="card-img-top" alt="Grapes">
                            <div class="card-body text-center">
                                <a href="#" class="h5 d-block">Fresh Grapes</a>
                                <a href="#" class="btn btn-sm btn-outline-primary rounded-pill w-50 mx-auto d-block">Read more</a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Pagination -->
                <!-- <div class="swiper-pagination"></div> -->
            </div>

        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Team Start -->
    <div class="container">
        <div class="text-center mb-5">
            <h4 class="text-primary" data-aos="slide-up" data-aos-delay="100" data-aos-duration="600">Our Team</h4>
            <h1 class="display-5" data-aos="slide-up" data-aos-delay="150" data-aos-duration="600">Meet Our Experts</h1>
        </div>

        <div class="row g-4 justify-content-center">

            <!-- Team Member 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-img">
                        <img src="<?= base_url('assets/img/team-1.jpeg') ?>" alt="Team Member">
                    </div>
                    <div class="team-content text-center">
                        <h4 class="mb-1">John Smith</h4>
                        <p class="text-muted mb-3">Managing Director</p>

                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-img">
                        <img src="<?= base_url('assets/img/team-2.jpeg') ?>" alt="Team Member">
                    </div>
                    <div class="team-content text-center">
                        <h4 class="mb-1">Sarah Khan</h4>
                        <p class="text-muted mb-3">Operations Manager</p>

                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-img">
                        <img src="<?= base_url('assets/img/team-3.jpeg') ?>" alt="Team Member">
                    </div>
                    <div class="team-content text-center">
                        <h4 class="mb-1">Ali Ahmed</h4>
                        <p class="text-muted mb-3">Export Manager</p>

                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Team End -->


    <!-- Badge Counter Start -->
    <div class="container py-5 my-5">
        <div class="mt-5 row g-4 justify-content-center text-center">

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="badge-counter bg-yellow">
                    <h2 class="counter text-white" data-target="10">0</h2>
                    <p>Years of experience</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="badge-counter bg-green">
                    <h2 class="counter text-white" data-target="1800">0</h2>
                    <p>Kilos Sold</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="badge-counter bg-teal">
                    <h2 class="counter text-white" data-target="1200">0</h2>
                    <p>Hectares of production</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="badge-counter bg-blue">
                    <h2 class="counter text-white" data-target="8">0</h2>
                    <p>Production Counteries</p>
                </div>
            </div>

        </div>
    </div>
    <!-- Badge Counter End -->




    <!-- Trade & Production Section Start -->
    <div class="container py-5 my-5">
        <div class="text-center mb-4">
            <h4 class="text-primary">Rishad Mateen & Company</h4>
            <h2 class="fw-bold">We trade fruits and vegetables in more than 40 countries</h2>
        </div>

        <!-- Tabs -->
        <ul class="nav nav-pills justify-content-center mb-4" id="tradeTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link border border-2 m-2 active px-4" id="trade-tab" data-bs-toggle="pill" data-bs-target="#trade"
                    type="button" role="tab">
                    Where We Trade
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link border border-2 m-2 px-4" id="produce-tab" data-bs-toggle="pill" data-bs-target="#produce"
                    type="button" role="tab">
                    Where We Produce
                </button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content">

            <!-- WHERE WE TRADE -->
            <div class="tab-pane fade show active" id="trade" role="tabpanel">
                <div class="country-badges text-center">
                    <span class="badge">Spain</span>
                    <span class="badge">Portugal</span>
                    <span class="badge">France</span>
                    <span class="badge">Germany</span>
                    <span class="badge">Italy</span>
                    <span class="badge">Poland</span>
                    <span class="badge">Greece</span>
                    <span class="badge">Bulgaria</span>
                    <span class="badge">Hungary</span>
                    <span class="badge">UK</span>
                    <span class="badge">USA</span>
                    <span class="badge">Canada</span>
                    <span class="badge">Panama</span>
                    <span class="badge">Costa Rica</span>
                    <span class="badge">Morocco</span>
                    <span class="badge">South Africa</span>
                    <span class="badge">Dubai</span>
                    <span class="badge">Saudi Arabia</span>
                    <span class="badge">Oman</span>
                    <span class="badge">Taiwan</span>
                    <span class="badge">Russia</span>
                    <span class="badge">Ukraine</span>
                    <span class="badge">Brazil</span>
                    <span class="badge">Australia</span>
                    <span class="badge">Colombia</span>
                    <span class="badge">Indonesia</span>
                    <span class="badge">Switzerland</span>
                    <span class="badge">Algeria</span>
                    <span class="badge">Jordan</span>
                    <span class="badge">Pakistan</span>
                    <span class="badge">Japan</span>
                </div>
            </div>

            <!-- WHERE WE PRODUCE -->
            <div class="tab-pane fade" id="produce" role="tabpanel">
                <div class="country-badges text-center">
                    <span class="badge">Spain</span>
                    <span class="badge">Egypt</span>
                    <span class="badge">India</span>
                    <span class="badge">China</span>
                    <span class="badge">Ecuador</span>
                    <span class="badge">Peru</span>
                    <span class="badge">Argentina</span>
                    <span class="badge">Chile</span>
                </div>
            </div>

        </div>
    </div>
    <!-- Trade & Production Section End -->






    <!-- Request Quote Form Start -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <!-- Quote Intro Section Start -->

                <span class="quote-eyebrow">REQUEST YOUR QUOTE</span>

                <h1 class="quote-title mt-3 mb-4">
                    We offer you the best service and
                    quality fruit and vegetables
                </h1>

                <div class="quote-contact">

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h6>Phone</h6>
                            <p>+34 629 85 99 19</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div>
                            <h6>WhatsApp</h6>
                            <p>+34 684 75 85 37</p>
                        </div>
                    </div>

                </div>

            </div>
            <!-- Quote Intro Section End -->

            <div class="col-lg-7">

                <div class="quote-form-card">
                    <form>

                        <div class="row g-4">

                            <div class="col-md-6">
                                <label class="form-label">Full Name *</label>
                                <input type="text" class="form-control" placeholder="Your full name" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Company *</label>
                                <input type="text" class="form-control" placeholder="Your company name" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Business Email *</label>
                                <input type="email" class="form-control" placeholder="purchasing@company.com" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Phone / WhatsApp *</label>
                                <input type="text" class="form-control" placeholder="+Country Code Phone Number" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Purchase Volume *</label>
                                <select class="form-select" required>
                                    <option value="">— Please choose an option —</option>
                                    <option>1–5 Tons</option>
                                    <option>5–10 Tons</option>
                                    <option>10–25 Tons</option>
                                    <option>25+ Tons</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Required Calibers *</label>
                                <input type="text" class="form-control" placeholder="Ex: Onion 60/80, 90/100" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Target Price (€/kg) *</label>
                                <input type="text" class="form-control" placeholder="Ex: 1.50 €/kg" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Packaging *</label>
                                <input type="text" class="form-control" placeholder="Ex: 25kg bags, 10kg boxes" required>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Additional Details</label>
                                <textarea class="form-control" rows="4"
                                    placeholder="Any additional specifications or comments"></textarea>
                            </div>

                            <div class="col-12 d-flex align-items-center gap-2">
                                <input type="checkbox" required>
                                <small>
                                    I have read and accept the
                                    <a href="#" class="text-primary">privacy policy</a>
                                </small>
                            </div>

                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-submit px-5">
                                    REQUEST QUOTE
                                </button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>
    </div>
    <!-- Request Quote Form End -->





    <?php
    $this->load->view('commons/footer');
    ?>

    <script>
        document.addEventListener("DOMContentLoaded", function() {


            // /* ================= LENIS ================= */
            // const lenis = new Lenis({
            //     duration: 1.2, // scroll smoothness
            //     easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            //     smoothWheel: true,
            //     smoothTouch: false
            // });

            // function raf(time) {
            //     lenis.raf(time);
            //     requestAnimationFrame(raf);
            // }
            // requestAnimationFrame(raf);

            /* ================= AOS ================= */
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                offset: 120
            });

            /* Refresh AOS on Lenis scroll */
            // lenis.on('scroll', () => {
            //     AOS.refreshHard(); // better than refresh()
            // });




            const counters = document.querySelectorAll(".counter");
            let started = false;

            const runCounter = () => {
                counters.forEach(counter => {
                    const target = +counter.dataset.target;
                    let count = 0;
                    const speed = 120;

                    const update = () => {
                        count += target / speed;
                        if (count < target) {
                            counter.innerText = Math.ceil(count);
                            requestAnimationFrame(update);
                        } else {
                            counter.innerText = target;
                        }
                    };
                    update();
                });
            };

            const observer = new IntersectionObserver(entries => {
                if (entries[0].isIntersecting && !started) {
                    runCounter();
                    started = true;
                }
            }, {
                threshold: 0.4
            });

            observer.observe(document.querySelector(".badge-counter"));

            new Swiper(".testimonial-swiper", {
                loop: true,
                speed: 800,
                spaceBetween: 20,

                autoplay: {
                    delay: 1500,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },

                grabCursor: true,
                allowTouchMove: true,

                pagination: {
                    el: ".testimonial-swiper .swiper-pagination", // ✅ scope to this swiper
                    clickable: true
                },

                // navigation: {
                //     nextEl: ".testimonial-swiper .swiper-button-next", // ✅ scope
                //     prevEl: ".testimonial-swiper .swiper-button-prev"
                // },

                navigation: {
                    nextEl: ".swiper-next",
                    prevEl: ".swiper-prev"
                },

                breakpoints: {
                    0: {
                        slidesPerView: 1
                    },
                    576: {
                        slidesPerView: 2
                    },
                    768: {
                        slidesPerView: 3
                    },
                    992: {
                        slidesPerView: 4
                    }
                }
            });

            // Spinner
            var spinner = function() {
                setTimeout(function() {
                    if ($('#spinner').length > 0) {
                        $('#spinner').removeClass('show');
                    }
                }, 1);
            };
            spinner(0);


            const $nav = $('.navbar.fixed-top');
            console.log('11');

            // function handleNavbarBg() {
            //     if ($(window).scrollTop() > 55) {
            //         console.log('22');

            //         // ON SCROLL → WHITE
            //         // $nav.addClass('bg-white');
            //         $nav.css({
            //                 background: 'white'
            //             });
            //     } else {
            //         // TOP → TRANSPARENT / GLASS
            //         console.log('33');
            //         $nav.css({
            //                 background: 'rgba(255, 255, 255, 0.3) !important',
            //             });
            //     }
            // }

            // Run on load, scroll & resize
            $(window).on('load scroll resize', handleNavbarBg);



            // Back to top button
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    $('.back-to-top').fadeIn('slow');
                } else {
                    $('.back-to-top').fadeOut('slow');
                }
            });
            $('.back-to-top').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 1500, 'easeInOutExpo');
                return false;
            });


            // vegetable carousel
            $(".vegetable-carousel").owlCarousel({
                autoplay: true,
                smartSpeed: 1500,
                center: false,
                dots: true,
                loop: true,
                margin: 25,
                nav: true,
                navText: [
                    '<i class="bi bi-arrow-left"></i>',
                    '<i class="bi bi-arrow-right"></i>'
                ],
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    },
                    1200: {
                        items: 4
                    }
                }
            });


            // Modal Video
            $(document).ready(function() {
                var $videoSrc;
                $('.btn-play').click(function() {
                    $videoSrc = $(this).data("src");
                });
                console.log($videoSrc);

                $('#videoModal').on('shown.bs.modal', function(e) {
                    $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
                })

                $('#videoModal').on('hide.bs.modal', function(e) {
                    $("#video").attr('src', $videoSrc);
                })
            });



            // Product Quantity
            $('.quantity button').on('click', function() {
                var button = $(this);
                var oldValue = button.parent().parent().find('input').val();
                if (button.hasClass('btn-plus')) {
                    var newVal = parseFloat(oldValue) + 1;
                } else {
                    if (oldValue > 0) {
                        var newVal = parseFloat(oldValue) - 1;
                    } else {
                        newVal = 0;
                    }
                }
                button.parent().parent().find('input').val(newVal);
            });

        });
    </script>


</body>

</html>