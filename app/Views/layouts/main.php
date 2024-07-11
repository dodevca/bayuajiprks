<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= $meta->title ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= $meta->description ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= base_url('site.webmanifest') ?>">
    <link rel="stylesheet" href="<?= base_url('css/style.min.css') ?>">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url() ?>">
                    <img src="<?= base_url('images/logo-full.png') ?>" class="logo d-none d-lg-block">
                    <img src="<?= base_url('images/logo.png') ?>" class="logo d-lg-none">
                </a>
                <div class="d-flex align-item-center justify-content-end gap-2 order-lg-2">
                    <?php if($meta->name != 'collections'): ?>
                        <div class="dropdown">
                            <button type="button" class="btn btn-link px-2" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-search text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end shadow-lg px-2 mt-4">
                                <form action="#" method="POST">
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-0">
                                            <i class="bi bi-search"></i>
                                        </span>
                                        <input type="text" class="form-control border-0" placeholder="Type something . . ." aria-label="Search form" aria-describedby="search">
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php endif; ?>
                    <button class="navbar-toggler border-0 px-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Navbar toggle button">
                        <i class="bi bi-list text-muted"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse order-lg-1" id="navbar-menu">
                    <ul class="navbar-nav me-auto my-2 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link<?= $meta->name == 'home' ? ' active' : '' ?>"<?= $meta->name == 'home' ? ' aria-current="page"' : '' ?> href="<?= base_url() ?>">home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link<?= $meta->name == 'collections' ? ' active' : '' ?>"<?= $meta->name == 'collections' ? ' aria-current="page"' : '' ?>  href="<?= base_url('collections') ?>">collections</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link<?= $meta->name == 'about' ? ' active' : '' ?>"<?= $meta->name == 'about' ? ' aria-current="page"' : '' ?>  href="<?= base_url('about') ?>">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link<?= $meta->name == 'contact' ? ' active' : '' ?>"<?= $meta->name == 'contact' ? ' aria-current="page"' : '' ?>  href="<?= base_url('contact') ?>">contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <?= $this->renderSection('main') ?>
    </main>
    <footer>
        <section class="bg-secondary">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-4 mb-md-0">
                        <h3 class="text-white mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                    </div>
                    <div class="col-md-6 text-center my-auto">
                        <a href="#" class="btn btn-primary btn-lg"><i class="bi bi-envelope me-2"></i>get in touch</a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container pt-5">
                <div class="row">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <h5 class="h6 text-dark">Collections</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="fs-6 text-muted text-decoration-none">Lorem</a></li>
                            <li><a href="#" class="fs-6 text-muted text-decoration-none">Ipsum</a></li>
                            <li><a href="#" class="fs-6 text-muted text-decoration-none">Dolor</a></li>
                            <li><a href="#" class="fs-6 text-muted text-decoration-none">Sit Amet</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <h5 class="h6 text-dark">Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="fs-6 text-muted text-decoration-none">About</a></li>
                            <li><a href="#" class="fs-6 text-muted text-decoration-none">Terms & Conditions</a></li>
                            <li><a href="#" class="fs-6 text-muted text-decoration-none">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <h5 class="h6 text-dark">Follow Me</h5>
                        <div class="d-flex align-item-center gap-3">
                            <a href="#" class="fs-4 text-secondary"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="fs-4 text-secondary"><i class="bi bi-telegram"></i></a>
                            <a href="#" class="fs-4 text-secondary"><i class="bi bi-twitter-x"></i></a>
                            <a href="#" class="fs-4 text-secondary"><i class="bi bi-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-0">
            <div class="container border-top py-4">
                <p class="text-muted mb-0">&copy; 2024 Bayuajiprks. All rights reserved.</p>
            </div>
        </section>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('js/main.js') ?>"></script>
</body>
</html>