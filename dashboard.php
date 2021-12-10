<!--Memanggil Header-->
<?php include('index.php'); ?>

<!-- Main Content -->
<div id="content">

 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard Desa Sekarwangi</h1>
    <div class="row">

        <?php
                        // https://www.malasngoding.com
                        // menghubungkan dengan koneksi database
        include 'koneksi.php';
        
                        // mengambil data barang
        $data_penerima = mysqli_query($koneksi,"SELECT * FROM penerima");
        $data_jenisberas = mysqli_query($koneksi,"SELECT * FROM jenisberas");

                        // menghitung data barang
        $jumlah_penerima = mysqli_num_rows($data_penerima);
        $jumlah_jenisberas = mysqli_num_rows($data_jenisberas);

        //$dapatbantuan = mysqli_query($koneksi,"SELECT * FROM datakeluargapenerima WHERE bantuanpemerintah = 'Pernah Dapat Bantuan'");
        //$jumlahdapatbantuan = mysqli_num_rows($dapatbantuan);

        //$tidakdapatbantuan = mysqli_query($koneksi,"SELECT * FROM datakeluargapenerima WHERE bantuanpemerintah = 'Tidak Dapat Bantuan'");
        //$jumlahtidakdapatbantuan = mysqli_num_rows($tidakdapatbantuan);

        //$dapatbantuan  = "SELECT * FROM datakeluargapenerima WHERE bantuanpemerintah = 'Dapat Bantuan'";
        //$jumlahdapatbantuan = num_rows;

        //echo 'Jumlah Dapat Bantuan'.$jumlahdapatbantuan;


        ?>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="datapenerima.php">Data Penerima Beras</a>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_penerima; ?></div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-handshake fa-3x text-gray-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="jenisberas.php">Jenis Beras</a>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_jenisberas; ?></div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-shopping-basket fa-3x text-gray-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<h1 class="h3 mb-4 text-gray-800">Warga Yang Sebelumnya Dapat/Tidak Bantuan Beras</h1>
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="datakeluargapenerima.php">Yang Dapat Bantuan</a>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlahdapatbantuan; ?></div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-check fa-3x text-gray-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="datakeluargapenerima.php">Yang Tidak Dapat Bantuan</a>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlahtidakdapatbantuan; ?></div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-times fa-3x text-gray-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
</div>
</div>

<!--Memanggil Footer-->
<?php include('footer.php'); ?>