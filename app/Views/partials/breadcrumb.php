<section class="mt-5 pt-3">
    <div class="container pt-5">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>" class="text-decoration-none">Home</a></li>
                <?php if(is_array($meta->name)): ?>
                    <?php foreach($meta->name as $key => $name): ?>
                        <li class="breadcrumb-item<?= $key == count($meta->name) - 1 ? ' active' : '' ?>" <?= $key == count($meta->name) - 1 ? 'aria-current="page"' : '' ?>>
                            <?php if($key != count($meta->name) - 1): ?>
                                <a href="<?= base_url($name) ?>" class="text-decoration-none"><?= ucwords($name) ?></a>
                            <?php else: ?>
                                <h1 class="d-inline h6 fw-normal text-muted mb-0"><?= ucwords($name) ?></h1>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li class="breadcrumb-item active" aria-current="page"><h1 class="d-inline h6 fw-normal text-muted mb-0"><?= ucwords($meta->name) ?></h1></li>
                <?php endif; ?>
            </ol>
        </nav>
    </div>
</section>