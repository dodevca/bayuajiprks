<?= $this->extend('layouts/main') ?>

<?= $this->section('main') ?>
<section id="jumbotron">
    <div id="jumbotron-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php foreach($contents->jumbotron as $key => $jumbotron): ?>
                <button type="button" data-bs-target="#jumbotron-carousel" data-bs-slide-to="<?= $key ?>"<?= $key == 0 ? ' class="active" aria-current="true"' : '' ?> aria-label="Slide 1"></button>
            <?php endforeach; ?>
        </div>
        <div class="carousel-inner">
            <?php foreach($contents->jumbotron as $key => $jumbotron): ?>
                <div class="carousel-item<?= $key == 0 ? ' active' : '' ?>" data-bs-ride="true" style="background-image: url(<?= base_url('images/' . $jumbotron->cover) ?>)">
                    <div class="container position-relative min-vh-100">
                        <div class="row position-absolute top-50 translate-middle-y z-2 w-100">
                            <div class="col-lg-6 px-3">
                                <?php if($jumbotron->badge): ?>
                                    <span class="badge bg-primary bg-opacity-75 text-white mb-3" data-aos="fade-right"><?= $jumbotron->badge ?></span>
                                <?php endif; ?>
                                <h1 class="fs-1"><?= $jumbotron->title ?></h1>
                                <p class="text-muted"><?= $jumbotron->subtitle ?></p>
                                <?php if($jumbotron->action): ?>
                                    <a href="<?= base_url($jumbotron->action_url) ?>" class="btn btn-secondary btn-lg" data-aos="fade-up"><?= $jumbotron->action ?><i class="bi bi-arrow-right ms-2"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section id="category">
    <div class="container py-5">
        <div class="row">
            <?php foreach($contents->category->list as $category): ?>
                <div class="col-6 col-md-3">
                    <div class="category-item rounded" style="background-image: url(<?= base_url('images/' . $category->cover) ?>)" data-aos="zoom-in-up">
                        <div class="p-3">    
                            <h3 class="fs-5 text-center text-dark mt-2"><?= $category->name ?></h3>
                            <div class="position-absolute bottom-0 start-50 translate-middle-x">
                                <a href="<?= base_url('collections?c=' . $category->slug) ?>" class="btn btn-primary mb-4">check it out</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section id="latest">
    <div class="container py-5">
        <h3 class="h2 mb-4">What's new</h3>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="d-flex flex-column justify-content-end latest-item h-100 p-4 rounded gap-3" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)" data-aos="fade-right">
                    <div class="d-flex align-items-start badge p-2 ms-auto mb-auto">
                        <span class="small">$</span>
                        <span class="fs-3">40</span>
                    </div>
                    <div class="pt-4">
                        <h4 class="fs-3 text-dark">Lorem Ipsum</h4>
                        <p class="text-muted text-truncate mb-0">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <a href="#" class="btn btn-primary me-auto"><i class="bi bi-bag me-2"></i>buy or offer</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="d-flex flex-column justify-content-end latest-item h-100 p-4 rounded gap-3" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)" data-aos="fade-down-left">
                            <div class="d-flex align-items-start badge p-2 ms-auto mb-auto">
                                <span class="small">$</span>
                                <span class="fs-3">40</span>
                            </div>
                            <div class="pt-4">
                                <h4 class="fs-3 text-dark">Lorem Ipsum</h4>
                                <p class="text-muted text-truncate mb-0">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <a href="#" class="btn btn-primary me-auto"><i class="bi bi-bag me-2"></i>buy or offer</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column justify-content-end latest-item h-100 p-4 rounded gap-3" style="background-image: url(<?= base_url('images/jumbotron-demo.png') ?>)" data-aos="fade-up-left">
                            <div class="d-flex align-items-start badge p-2 ms-auto mb-auto">
                                <span class="small">$</span>
                                <span class="fs-3">40</span>
                            </div>
                            <div class="pt-4">
                                <h4 class="fs-3 text-dark">Lorem Ipsum</h4>
                                <p class="text-muted text-truncate mb-0">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <a href="#" class="btn btn-primary me-auto"><i class="bi bi-bag me-2"></i>buy or offer</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <a href="<?= base_url('collections') ?>" class="btn btn-link">show more</a>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>