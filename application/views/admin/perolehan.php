<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


</div>

<div class="container-fluid">
    <div class="row">
        <?php foreach ($kandidat as $data) :
            $x = $this->db->query("select * from suara where id_kandidat='$data->id_kandidat'");
            $xbanyak = $x->num_rows();
            $perolehan = ($xbanyak / $banyak) * 100;
            ?>
            <div class="col-md-6 text-center ">
                <div class="card mx-auto" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/' . $data->gambar); ?>" class="card-img-top">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">

                                <p class="card-text"><?php echo $data->nama_ketua; ?></p>
                            </div>
                            <div class="col">

                                <p class="float-right">
                                    <?= $data->nama_wakil; ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">

                                <p class="text-danger font-weight-bold"><?php echo number_format($perolehan, 2) . "%"; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>
<!-- End of Main Content -->