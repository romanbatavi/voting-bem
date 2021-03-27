<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


</div>

<div class="container-fluid ">
    <!-- Donut Chart -->
    <div class="">
        <div class="mb-4 border-0 ">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Hasil Suara</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4">
                    <canvas id="myPieChart"></canvas>
                </div>
                <hr>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-danger"></i> Tidak Memilih
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Pemilih
                    </span>

                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- End of Main Content -->