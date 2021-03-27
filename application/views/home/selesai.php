<!-- Image and text -->
<nav class="navbar navbar-light">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('home'); ?>">
            <img src="<?= base_url('assets/') ?>img/logo.gif" width="30" height="30" class="d-inline-block align-top" alt="">
            Universitas Methodist Indonesia
        </a>
    </div>
</nav>
<div class="container mt-5 mb-5">
    <div class="card-body shadow border-0">
        <div class="text-center">

            <span class="fas fa-check text-success" style="font-size:50px;"> </span>
            <h3 class="text-primary mt-3">Terimakasih</h3>
            <h4 class="text-primary">Anda Berhasil Memilih</h4>
            <a href="<?= base_url('home/logout'); ?>" class="btn btn-primary mt-2 border-0 shadow">Logout</a>
        </div>
    </div>
</div>