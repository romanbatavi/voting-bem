<div class="container-fluid bg-light">
    <div class="container ">
        <div class="card border-0 shadow">
            <div class="card-body">
                <!-- Image and text -->

                <div class="container">
                    <a class="navbar-brand" href="<?= base_url('home'); ?>">
                        <img src="<?= base_url('assets/') ?>img/logo.gif" width="30" height="30" class="d-inline-block align-top" alt="">
                        Universitas Methodist Indonesia
                    </a>
                    <div class="judul">
                        <h2 class="text-center ">Ketua BEM Dan Wakil BEM</h2>
                        <h5 class="text-center">Universitas Methodist Indonesia</h5>
                        <h5 class="text-center">Tahun <?= date('Y'); ?></h5>
                    </div>

                    <div class="card-body mt-5 mx-auto text-center">
                        <div class="row">
                            <?php
                            $nim = $this->session->userdata('nim');
                            ?>

                            <?php $i = 1; ?>
                            <?php foreach ($query as $q) : ?>
                                <div class="col-md-6">
                                    <div class="card" style="max-width: 30rem;">
                                        <div class="card-header bg-transparent ">
                                            <h2><?php echo "0" . $i ?></h2>
                                        </div>
                                        <div class="card-body ">
                                            <img src="<?= base_url('assets/img/') . $q->gambar; ?>" alt="" width="300" height="300">
                                            <div class="row">

                                                <div class="col-sm-6">
                                                    <b class="text-muted">Calon Ketua BEM</b><br>
                                                    <b><?= $q->nama_ketua; ?></b>
                                                </div>
                                                <div class="col-sm-6">
                                                    <b class="text-muted">Calon Wakil Ketua BEM</b><br>
                                                    <b><?= $q->nama_wakil; ?></b>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="card-footer bg-transparent "><a href="<?= base_url('home/pemilihan/' . $q->id_kandidat); ?>" class="btn btn-danger"><span class="fas fa-check"></span></a></div>
                                    </div>
                                </div>
                                <?php $i++ ?>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>