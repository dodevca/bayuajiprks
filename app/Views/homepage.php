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
                            <span class="badge bg-primary bg-opacity-75 text-white ms-1 mb-3" data-aos="fade-right">Slide 1</span>
                            <h1 class="h1 text-dark">Example headline</h1>
                            <p class="text-muted">Some representative placeholder content for the first slide of the carousel.</p>
                            <a class="btn btn-secondary rounded-pill" href="#" data-aos="fade-up">Action</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-ride="true" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)">
                <div class="container position-relative min-vh-100">
                    <div class="row position-absolute top-50 translate-middle-y z-2 w-100">
                        <div class="col-lg-6 px-3">
                            <span class="badge bg-primary bg-opacity-75 text-white ms-1 mb-3" data-aos="fade-right">Slide 2</span>
                            <h1 class="h1 text-dark">Example headline</h1>
                            <p class="text-muted">Some representative placeholder content for the first slide of the carousel.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-ride="true" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)">
                <div class="container position-relative min-vh-100">
                    <div class="row position-absolute top-50 translate-middle-y z-2 w-100" data-aos="fade-right">
                        <div class="col-lg-6 px-3">
                            <span class="badge bg-primary bg-opacity-75 text-white ms-1 mb-3">Slide 3</span>
                            <h1 class="h1 text-dark">Example headline</h1>
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
                <div class="category-item p-3 rounded shadow" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)" data-aos="zoom-in-up">
                    <div class="position-absolute bottom-0 start-50 translate-middle-x">
                        <a href="#" class="btn btn-primary text-white mb-4">Check it out</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="category-item p-3 rounded shadow" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)" data-aos="zoom-in-up" data-aos-delay="300">
                    <div class="position-absolute bottom-0 start-50 translate-middle-x">
                        <a href="#" class="btn btn-primary text-white mb-4">Check it out</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="category-item p-3 rounded shadow" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)" data-aos="zoom-in-up" data-aos-delay="600">
                    <div class="position-absolute bottom-0 start-50 translate-middle-x">
                        <a href="#" class="btn btn-primary text-white mb-4">Check it out</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="category-item p-3 rounded shadow" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)" data-aos="zoom-in-up" data-aos-delay="600">
                    <div class="position-absolute bottom-0 start-50 translate-middle-x">
                        <a href="#" class="btn btn-primary text-white mb-4">Check it out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>