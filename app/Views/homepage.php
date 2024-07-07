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
                            <span class="badge bg-primary bg-opacity-75 text-white mb-3">Slide 1</span>
                            <h1 class="h1 text-dark">Example headline</h1>
                            <p class="text-muted">Some representative placeholder content for the first slide of the carousel.</p>
                            <a class="btn btn-secondary rounded-pill" href="#">Action</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-ride="true" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)">
                <div class="container position-relative min-vh-100">
                    <div class="row position-absolute top-50 translate-middle-y z-2 w-100">
                        <div class="col-lg-6 px-3">
                            <span class="badge bg-primary bg-opacity-75 text-white mb-3">Slide 2</span>
                            <h1 class="h1 text-dark">Example headline</h1>
                            <p class="text-muted">Some representative placeholder content for the first slide of the carousel.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-ride="true" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)">
                <div class="container position-relative min-vh-100">
                    <div class="row position-absolute top-50 translate-middle-y z-2 w-100">
                        <div class="col-lg-6 px-3">
                            <span class="badge bg-primary bg-opacity-75 text-white mb-3">Slide 3</span>
                            <h1 class="h1 text-dark">Example headline</h1>
                            <p class="text-muted">Some representative placeholder content for the first slide of the carousel.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>