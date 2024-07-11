<?= $this->extend('layouts/main') ?>

<?= $this->section('main') ?>
<section class="mt-5">
    <div class="container py-5">
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
                    <label class="btn btn-outline-primary" for="check-lorem">Lorem</label>
                    <input type="checkbox" class="btn-check" id="check-ipsum" autocomplete="off">
                    <label class="btn btn-outline-primary" for="check-ipsum">Ipsum</label>
                    <input type="checkbox" class="btn-check" id="check-dolor" autocomplete="off">
                    <label class="btn btn-outline-primary" for="check-dolor">Dolor</label>
                    <input type="checkbox" class="btn-check" id="check-sit-amet" autocomplete="off">
                    <label class="btn btn-outline-primary" for="check-sit-amet">Sit Amet</label>
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
<?= $this->endSection() ?>