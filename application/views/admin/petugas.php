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
                    <th class="header">Nama Petugas</th>
                    <th class="header">Username</th>
                    <th class="header">Level</th>

                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($pilih as $petugas) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $petugas['nama_petugas']; ?></td>
                        <td> <?= $petugas['email']; ?> </td>
                        <td> <?= $petugas['level']; ?> </td>

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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Petugas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <form action="<?= base_url('auth/petugas'); ?>" method="post">
                    <div class="form-group">
                        <label for="nama_petugas">Nama Petugas</label>
                        <input type="text" class="form-control" id="nama_petugas" aria-describedby="emailHelp" placeholder="Masukkan Nama" name="nama_petugas">
                        <?= form_error('nama_petugas', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="email">Email </label>
                        <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Masukkan email" name="email">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="password1">Password </label>
                        <input type="password" class="form-control" id="password1" aria-describedby="passwordHelp" placeholder="Masukkan password" name="password1">
                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="password2">Password </label>
                        <input type="password" class="form-control" id="password2" aria-describedby="passwordHelp" placeholder="Ulangi Password" name="password2">
                    </div>
                    <div class="form-group">
                        <label for="level">Jenis Kelamin</label>
                        <select name="level" id="level" class="form-control">
                            <option value="Admin">Admin</option>
                            <option value="user">User</option>
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