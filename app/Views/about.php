<?= $this->extend('layouts/main') ?>

<?= $this->section('main') ?>
<?= $this->include('partials/breadcrumb') ?>
<section id="about">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 ps-md-4 order-1 order-md-2">
                <div class="rounded p-5 mx-md-5 shadow-primary">
                    <img src="<?= base_url('images/logo-full.png') ?>" class="w-100 h-auto my-auto">
                </div>
            </div>
            <div class="col-md-6 col-lg-8 mb-4 order-2 pe-md-4 order-md-1">
                <h2 class="mb-4">My Stories</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 pe-md-4 order-3">
                <div class="rounded p-5 mx-md-5 shadow-primary">
                    <img src="<?= base_url('images/logo-full.png') ?>" class="w-100 h-auto my-auto">
                </div>
            </div>
            <div class="col-md-6 col-lg-8 ps-md-4 order-4">
                <h2 class="mb-4">My Mission</h2>
                <p>
                    But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?
                </p>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>