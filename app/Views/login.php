<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="row justify-content-center mt-5">
    <div class="col-md-6 col-lg-5">
        <h2 class="text-center mb-4 fw-bold text-pink">💖 Sign In</h2>

        <?php if (session()->getFlashdata('register_success')): ?>
            <div class="alert alert-success text-center rounded-pill" role="alert">
                <?= esc(session()->getFlashdata('register_success')) ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('login_error')): ?>
            <div class="alert alert-danger text-center rounded-pill" role="alert">
                <?= esc(session()->getFlashdata('login_error')) ?>
            </div>
        <?php endif; ?>

        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-body p-4">
                <form action="<?= base_url('login') ?>" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Email</label>
                        <input type="email" 
                               class="form-control rounded-pill" 
                               id="email" name="email" 
                               placeholder="Enter your email"
                               value="<?= esc(old('email')) ?>" 
                               required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">Password</label>
                        <input type="password" 
                               class="form-control rounded-pill" 
                               id="password" name="password" 
                               placeholder="Enter your password"
                               required>
                    </div>
                    <button type="submit" 
                            class="btn w-100 rounded-pill fw-semibold py-2"
                            style="background: linear-gradient(90deg, #ff9a9e, #fad0c4); color: #fff;">
                        💕 Login
                    </button>
                </form>
            </div>
        </div>

        <div class="text-center mt-3">
            <small class="text-muted">
                Don’t have an account? 
                <a href="<?= base_url('register') ?>" 
                   class="text-decoration-none fw-semibold"
                   style="color:#f06292;">
                   Register here
                </a>
            </small>
        </div>
    </div>
</div>

<style>
    .text-pink {
        color: #f06292 !important;
    }
</style>
<?= $this->endSection() ?>
