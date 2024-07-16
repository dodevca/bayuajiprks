<?= $this->extend('layouts/main') ?>

<?= $this->section('main') ?>
<?= $this->include('partials/breadcrumb') ?>
<section id="about">
    <div class="container py-4">
        <div class="row g-4">
            <div class="col-md-9">
                <h2 class="mb-4">Get In Touch</h2>
                <form action="" method="POST">
                    <div class="row g-3 needs-validation" novalidate>
                        <div class="col-md-6">
                            <label for="first-name" class="form-label ms-2 mb-1">First name</label>
                            <input type="text" class="form-control" id="first-name" name="first-name" placeholder="Your first name" required>
                            <div class="invalid-feedback">
                                Please enter a valid name
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="last-name" class="form-label ms-2 mb-1">Last name <span class="text-muted">(Optional)</span></label>
                            <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Your last name">
                            <div class="invalid-feedback">
                                Please enter a valid name
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label ms-2 mb-1">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            <div class="invalid-feedback">
                                Please enter a valid email
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="subject" class="form-label ms-2 mb-1">Subject</label>
                            <input type="subject" class="form-control" id="subject" name="subject" placeholder="Type a subject" required>
                            <div class="invalid-feedback">
                                Please enter a subject
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label ms-2 mb-1">Message</label>
                            <textarea class="form-control" id="message" name="message" placeholder="How can I help?" rows="10" required></textarea>
                            <div class="invalid-feedback">
                                Please enter a message
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary" disabled><i class="bi bi-send me-2"></i>send</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3">
                <div class="bg-secondary p-3 rounded">
                    <h2 class="fs-5 text-white mb-4">My Social Media</h2>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#" class="d-flex align-items-center text-white text-decoration-none gap-2"><i class="bi bi-instagram fs-4"></i><span class="text-truncate">loremipsum</span></a></li>
                        <li><a href="#" class="d-flex align-items-center text-white text-decoration-none gap-2"><i class="bi bi-telegram fs-4"></i><span class="text-truncate">loremipsum</span></a></li>
                        <li><a href="#" class="d-flex align-items-center text-white text-decoration-none gap-2"><i class="bi bi-twitter-x fs-4"></i><span class="text-truncate">loremipsum</span></a></li>
                        <li><a href="#" class="d-flex align-items-center text-white text-decoration-none gap-2"><i class="bi bi-dribbble fs-4"></i><span class="text-truncate">loremipsum</span></a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>