<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bayuajiprks</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <div class="dropdown">
                        <button type="button" class="btn btn-link px-2" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-search text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end border-0 shadow-lg px-2">
                        <div class="input-group">
                            <span class="input-group-text bg-white border-0">
                                <i class="bi bi-search text-secondary"></i>
                            </span>
                            <input type="text" class="form-control border-0" placeholder="Type something . . ." aria-label="Search form" aria-describedby="search">
                        </div>
                        </div>
                    </div>
                    <button class="navbar-toggler border-0 px-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Navbar toggle button">
                        <i class="bi bi-list text-muted"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse order-lg-1" id="navbar-menu">
                    <ul class="navbar-nav me-auto my-2 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">link</a>
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
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('js/main.js') ?>"></script>
</body>
</html>