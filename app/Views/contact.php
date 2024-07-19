<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

    <!-- konten view di sini -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="h3">Hello <?= $name ?>!</h3>
                <p>Silakan hubungi kami melalui form berikut</p>
                <form action="" class="form">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Enter your message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Kirim" class="btn btn-primary w-100">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>