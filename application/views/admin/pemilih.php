<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


</div>

<div class="row container-fluid">
    <div class="col-lg-12">
        <div class="form-group">
            <a href="tambahberita.php" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">+ Tambah Data Baru</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover data-table table-striped tablesorter" id="table_id">
            <thead>
                <tr>
                    <th class="header">No</th>
                    <th class="header">NIM</th>
                    <th class="header">Nama Mahasiswa</th>
                    <th class="header">Jenis Kelamin</th>
                    <th class="header">Prodi</th>

                </tr>
            </thead>

            <tbody>

                <?php $i = 1; ?>
                <?php foreach ($pilih as $pemilih) : ?>
                    <tr>
                        <td><?= $i; ?> </td>
                        <td><?= $pemilih['nim']; ?></td>
                        <td><?= $pemilih['nama']; ?></td>
                        <td class="text-justify"><?= $pemilih['jenkel_pil']; ?></td>
                        <td><?= $pemilih['prodi']; ?></td>

                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>


</div>
<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?php base_url('admin/pemilih'); ?>" method="post">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" aria-describedby="emailHelp" placeholder="Masukkan NIM" name="nim" autocomplete="off">
                        <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukkan Nama" name="nama" autocomplete="off">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="jenkel">Jenis Kelamin</label>
                        <select name="jenkel_pil" id="jenkel" class="form-control">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select name="prodi" id="jurusan" class="form-control">
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>