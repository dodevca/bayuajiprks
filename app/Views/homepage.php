<?= $this->extend('layouts/main') ?>

<?= $this->section('main') ?>
<section id="jumbotron">
    <div id="jumbotron-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#jumbotron-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#jumbotron-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#jumbotron-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-ride="true" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)">
                <div class="container position-relative min-vh-100">
                    <div class="row position-absolute top-50 translate-middle-y z-2 w-100">
                        <div class="col-lg-6 px-3">
                            <span class="badge bg-primary bg-opacity-75 text-white mb-3" data-aos="fade-right">Slide 1</span>
                            <h1 class="fs-1">Example headline</h1>
                            <p class="text-muted">Some representative placeholder content for the first slide of the carousel.</p>
                            <a class="btn btn-secondary btn-lg" href="#" data-aos="fade-up">action<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-ride="true" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)">
                <div class="container position-relative min-vh-100">
                    <div class="row position-absolute top-50 translate-middle-y z-2 w-100">
                        <div class="col-lg-6 px-3">
                            <span class="badge bg-primary bg-opacity-75 text-white mb-3" data-aos="fade-right">Slide 2</span>
                            <h2 class="fs-1">Example headline</h2>
                            <p class="text-muted">Some representative placeholder content for the first slide of the carousel.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-ride="true" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)">
                <div class="container position-relative min-vh-100">
                    <div class="row position-absolute top-50 translate-middle-y z-2 w-100" data-aos="fade-right">
                        <div class="col-lg-6 px-3">
                            <span class="badge bg-primary bg-opacity-75 text-white mb-3">Slide 3</span>
                            <h2 class="fs-1">Example headline</h2>
                            <p class="text-muted">Some representative placeholder content for the first slide of the carousel.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="category">
    <div class="container py-5">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="category-item rounded" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)" data-aos="zoom-in-up">
                    <div class="p-3">    
                        <h3 class="fs-5 text-center text-dark mt-2">Lorem</h3>
                        <div class="position-absolute bottom-0 start-50 translate-middle-x">
                            <a href="#" class="btn btn-primary text-white mb-4">check it out</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="category-item rounded" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)" data-aos="zoom-in-up">
                    <div class="p-3">    
                        <h3 class="fs-5 text-center text-dark mt-2">Ipsum</h3>
                        <div class="position-absolute bottom-0 start-50 translate-middle-x">
                            <a href="#" class="btn btn-primary text-white mb-4">check it out</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="category-item rounded" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)" data-aos="zoom-in-up">
                    <div class="p-3">    
                        <h3 class="fs-5 text-center text-dark mt-2">Dolor</h3>
                        <div class="position-absolute bottom-0 start-50 translate-middle-x">
                            <a href="#" class="btn btn-primary text-white mb-4">check it out</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="category-item rounded" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)" data-aos="zoom-in-up">
                    <div class="p-3">    
                        <h3 class="fs-5 text-center text-dark mt-2">Sit Amet</h3>
                        <div class="position-absolute bottom-0 start-50 translate-middle-x">
                            <a href="#" class="btn btn-primary text-white mb-4">check it out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="latest">
    <div class="container py-5">
        <h3 class="h2 mb-4">What's new</h3>
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="d-flex flex-column justify-content-end latest-item h-100 p-4 rounded gap-3" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)" data-aos="fade-right">
                    <div class="d-flex align-items-start badge p-2 ms-auto mb-auto">
                        <span class="small">$</span>
                        <span class="fs-3">40</span>
                    </div>
                    <div class="pt-4">
                        <h4 class="fs-3 text-dark">Lorem Ipsum</h4>
                        <p class="text-muted text-truncate mb-0">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <a href="#" class="btn btn-primary text-white me-auto"><i class="bi bi-bag me-2"></i>buy or offer</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12 mb-3">
                        <div class="d-flex flex-column justify-content-end latest-item h-100 p-4 rounded gap-3" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)" data-aos="fade-down-left">
                            <div class="d-flex align-items-start badge p-2 ms-auto mb-auto">
                                <span class="small">$</span>
                                <span class="fs-3">40</span>
                            </div>
                            <div class="pt-4">
                                <h4 class="fs-3 text-dark">Lorem Ipsum</h4>
                                <p class="text-muted text-truncate mb-0">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <a href="#" class="btn btn-primary text-white me-auto"><i class="bi bi-bag me-2"></i>buy or offer</a>
                        </div>
                    </div>
                    <div class="col-12 mb-3"left
                        <div class="d-flex flex-column justify-content-end latest-item h-100 p-4 rounded gap-3" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)" data-aos="fade-up-left">
                            <div class="d-flex align-items-start badge p-2 ms-auto mb-auto">
                                <span class="small">$</span>
                                <span class="fs-3">40</span>
                            </div>
                            <div class="pt-4">
                                <h4 class="fs-3 text-dark">Lorem Ipsum</h4>
                                <p class="text-muted text-truncate mb-0">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <a href="#" class="btn btn-primary text-white me-auto"><i class="bi bi-bag me-2"></i>buy or offer</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center py-3">
                <a href="#" class="btn btn-link">show more</a>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>