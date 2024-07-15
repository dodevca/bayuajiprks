<?= $this->extend('layouts/main') ?>

<?= $this->section('main') ?>
<?= $this->include('partials/breadcrumb') ?>
<section>
    <div class="container py-4">
        <form action="#" method="POST" id="search-bar">
            <div class="input-group border rounded p-2 mb-3">
                <span class="input-group-text bg-white border-0">
                    <i class="bi bi-search"></i>
                </span>
                <input type="text" class="form-control border-0" placeholder="Type something . . ." aria-label="Search form" aria-describedby="search">
            </div>
            <div class="d-flex flex-wrap align-items-center justify-content-beetwen gap-3">
                <div class="d-flex flex-wrap align-items-center gap-2">
                    <input type="checkbox" class="btn-check" id="check-lorem" checked autocomplete="off">
                    <label class="btn btn-outline-primary" for="check-lorem"><h2 class="fs-6 fw-normal mb-0">Lorem</h2></label>
                    <input type="checkbox" class="btn-check" id="check-ipsum" autocomplete="off">
                    <label class="btn btn-outline-primary" for="check-ipsum"><h2 class="fs-6 fw-normal mb-0">Ipsum</h2></label>
                    <input type="checkbox" class="btn-check" id="check-dolor" autocomplete="off">
                    <label class="btn btn-outline-primary" for="check-dolor"><h2 class="fs-6 fw-normal mb-0">Dolor</h2></label>
                    <input type="checkbox" class="btn-check" id="check-sit-amet" autocomplete="off">
                    <label class="btn btn-outline-primary" for="check-sit-amet"><h2 class="fs-6 fw-normal mb-0">Sit Amet</h2></label>
                </div>
                <div class="dropdown ms-auto">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-filter me-2"></i>sort
                    </button>
                    <ul class="dropdown-menu border-0 shadow-lg dropdown-menu-end">
                        <li>
                            <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                            <label class="btn btn-outline-secondary w-100 text-start border-0 rounded-0" for="option1">Checked</label>
                        </li>
                        <li>
                            <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                            <label class="btn btn-outline-secondary w-100 text-start border-0 rounded-0" for="option2">Checked</label>
                        </li>
                        <li>
                            <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off">
                            <label class="btn btn-outline-secondary w-100 text-start border-0 rounded-0" for="option3">Checked</label>
                        </li>
                        <li>
                            <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off">
                            <label class="btn btn-outline-secondary w-100 text-start border-0 rounded-0" for="option4">Checked</label>
                        </li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</section>
<section id="collections">
    <div class="container pb-5">
        <div class="row">
            <div class="col-6 col-md-4 col-lg-3 mb-3">
                <a href="<?= base_url('collections/38388283') ?>" class="collections-item rounded">
                    <div class="position-relative bg-light overflow-hidden rounded-top">
                        <img src="<?= base_url('images/collections/1.png') ?>" class="w-100 h-auto">
                        <span class="badge text-bg-secondary position-absolute top-0 end-0 m-3 z-1">New</span>
                    </div>
                    <div class="p-3">
                        <h4 class="small fw-normal mb-1">Lorem</h4>
                        <h3 class="h6 text-dark fw-normal mb-1">Lorem Ipsum</h3>
                        <p class="text-muted mb-0">$40</p>
                    </div>
                </a>
            </div>
            <div class="col-12 text-center py-3">
                <a href="#" class="btn btn-link">show more</a>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>