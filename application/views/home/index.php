<!-- Image and text -->
<nav class="navbar navbar-light">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('home'); ?>">
            <img src="<?= base_url('assets/') ?>img/logo.gif" width="30" height="30" class="d-inline-block align-top" alt="">
            Universitas Methodist Indonesia
        </a>
    </div>
</nav>


<!-- jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container mt-5">


        <div class="text-center">
            <img src="<?= base_url('assets/'); ?>img/logo.gif" alt="" width="250" height="250">

            <h5>Pemilihan Ketua Dan Wakil Ketua BEM Universitas Methodist Indonesia</h5>
            <h6 class="text-success">Dilakukan Secara Online</h6>
            <div class="row mt-3">
                <div class="col-md-6 mx-auto">

                    <?= $this->session->flashdata('message'); ?>

                    <form method="post" action="<?= base_url('home'); ?>">
                        <div class="">
                            <div class="form-group ">
                                <input type="text" class="form-control" placeholder="Masukkan NPM" autocomplete="off" autofocus name="nim">
                                <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary mb-2">Masuk </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- akhir jumbotron -->