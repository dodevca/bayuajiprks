<?= $this->extend('layouts/main') ?>

<?= $this->section('main') ?>
<section id="jumbotron">
    <div id="jumbotron-carousel" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#jumbotron-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#jumbotron-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#jumbotron-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-ride="true" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)">
                <div class="container position-relative min-vh-100">
                    <div class="row position-absolute top-50 start-0 translate-middle-y z-2 w-100">
                        <div class="col-lg-6 px-3">
                            <h1 class="text-dark">Example headline.</h1>
                            <p class="text-muted">Some representative placeholder content for the first slide of the carousel.</p>
                            <a class="btn btn-secondary rounded-pill" href="#">Action</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-ride="true" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">

                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-ride="true" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#jumbotron-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#jumbotron-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<?= $this->endSection() ?>