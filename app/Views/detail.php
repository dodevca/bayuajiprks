<?= $this->extend('layouts/main') ?>

<?= $this->section('main') ?>
<?= $this->include('partials/breadcrumb') ?>
<section id="about">
    <div class="container py-4">
        <div class="row g-4">
            <div class="col-md-8">
                <div id="collections-carousel" class="carousel slide mb-4">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#collections-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#collections-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#collections-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="<?= base_url('images/jumbotron-demo.png') ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="<?= base_url('images/jumbotron-demo.png') ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="<?= base_url('images/jumbotron-demo.png') ?>" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#collections-carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#collections-carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="mb-4">
                    <h4 class="h6 mb-3">Details</h4>
                    <table class="table table-borderless w-auto">
                        <tbody>
                            <tr>
                                <th class="ps-0 fw-normal" scope="row">Lorem</th>
                                <td>:</td>
                                <td>Dolor Sit Amet</td>
                            </tr>
                            <tr>
                                <th class="ps-0 fw-normal" scope="row">Lorem</th>
                                <td>:</td>
                                <td>Dolor Sit Amet</td>
                            </tr>
                            <tr>
                                <th class="ps-0 fw-normal" scope="row">Lorem</th>
                                <td>:</td>
                                <td>Dolor Sit Amet</td>
                            </tr>
                            <tr>
                                <th class="ps-0 fw-normal" scope="row">Lorem</th>
                                <td>:</td>
                                <td>Dolor Sit Amet</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mb-4 ">
                    <h4 class="h6 mb-3">Description</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-4">
                    <h2 class="small fw-normal mb-1">Lorem</h2>
                    <h1 class="h3 text-dark fw-normal mb-1">Lorem Ipsum</h1>
                    <p class="fs-5 fw-bold mb-0">$40</p>
                </div>
                <button type="button" class="btn btn-primary btn-lg w-100 mb-4">buy now</button>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h4 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                How it delivered to me?
                            </button>
                        </h4>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h4 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                What I get?
                            </button>
                        </h4>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                </div>
                <div class="border-top p-3">
                    <h4 class="h6 text-dark fw-normal px-1">Share this product to:</h4>
                    <div class="d-flex align-item-center px-1 gap-3">
                        <a href="#" class="fs-4 text-secondary"><i class="bi bi-telegram"></i></a>
                        <a href="#" class="fs-4 text-secondary"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="fs-4 text-secondary"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="fs-4 text-secondary"><i class="bi bi-whatsapp"></i></a>
                        <a href="#" class="fs-4 text-secondary"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="fs-4 text-secondary"><i class="bi bi-threads"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>