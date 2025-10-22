<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="row justify-content-center mt-5">
    <div class="col-md-6 col-lg-5">
        <h2 class="text-center mb-4 fw-bold text-pink">💖 Create Account</h2>

        <?php if (session()->getFlashdata('register_error')): ?>
            <div class="alert alert-danger text-center rounded-pill" role="alert">
                <?= esc(session()->getFlashdata('register_error')) ?>
            </div>
        <?php endif; ?>

        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-body p-4">
                <form action="<?= base_url('register') ?>" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold">Name</label>
                        <input type="text" 
                               class="form-control rounded-pill" 
                               id="name" name="name" 
                               placeholder="Enter your full name"
                               value="<?= esc(old('name')) ?>" 
                               required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Email</label>
                        <input type="email" 
                               class="form-control rounded-pill" 
                               id="email" name="email" 
                               placeholder="Enter your email address"
                               value="<?= esc(old('email')) ?>" 
                               required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">Password</label>
                        <input type="password" 
                               class="form-control rounded-pill" 
                               id="password" name="password" 
                               placeholder="Enter a secure password"
                               required>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirm" class="form-label fw-semibold">Confirm Password</label>
                        <input type="password" 
                               class="form-control rounded-pill" 
                               id="password_confirm" name="password_confirm" 
                               placeholder="Re-enter your password"
                               required>
                    </div>
                    <button type="submit" 
                            class="btn w-100 rounded-pill fw-semibold py-2"
                            style="background: linear-gradient(90deg, #ff9a9e, #fad0c4); color: #fff;">
                        💕 Create Account
                    </button>
                </form>

                <div class="text-center mt-3">
                    <small class="text-muted">
                        Already have an account? 
                        <a href="<?= base_url('login') ?>" 
                           class="text-decoration-none fw-semibold"
                           style="color:#f06292;">
                            Log in here
                        </a>
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .text-pink {
        color: #f06292 !important;
    }
</style>
<?= $this->endSection() ?>
