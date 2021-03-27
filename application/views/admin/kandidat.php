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
                    <th class="header">Nama Ketua</th>
                    <th class="header">Jenis Kelamin Ketua</th>
                    <th class="header">Nama Wakil</th>
                    <th class="header">Jenis Kelamin Wakil</th>
                    <th class="header">Visi</th>
                    <th class="header">Misi</th>

                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($pilih as $kandidat) : ?>
                    <tr>
                        <td><?= $i; ?> </td>
                        <td><?= $kandidat['nama_ketua']; ?></td>
                        <td> <?= $kandidat['jenkel_ketua']; ?></td>
                        <td class="text-justify"><?= $kandidat['nama_wakil']; ?></td>
                        <td> <?= $kandidat['jenkel_wakil']; ?> </td>
                        <td> <?= $kandidat['visi']; ?> </td>
                        <td> <?= $kandidat['misi']; ?> </td>



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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kandidat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <form action="<?php base_url('admin/kandidat'); ?>" method="post">
                    <div class="form-group">
                        <label for="nama_ketua">Nama Ketua</label>
                        <input type="text" class="form-control" id="nama_ketua" aria-describedby="emailHelp" placeholder="Masukkan Nama Ketua" name="nama_ketua">
                        <?= form_error('nama_ketua', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="jenkel_ketua">Jenis Kelamin</label>
                        <select name="jenkel_ketua" id="jenkel_ketua" class="form-control">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_wakil">Nama Wakil Ketua</label>
                        <input type="text" class="form-control" id="nama_wakil" aria-describedby="emailHelp" placeholder="Masukkan Nama Wakil" name="nama_wakil">
                        <?= form_error('nama_wakil', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="jenkel_wakil">Jenis Kelamin</label>
                        <select name="jenkel_wakil" id="jenkel_wakil" class="form-control">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="visi">Visi</label>
                        <textarea name="visi" id="visi" cols="10" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="misi">Misi</label>
                        <textarea id="misi" name="misi" cols="10" rows="5" class="form-control"></textarea>
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