<!--Memanggil Header-->
<?php include('index.php'); ?>

<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Data Keluarga Penerima Beras | Desa Sekarwangi</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!--<a href="tambahpenerimaan.php" class="btn btn-primary">Tambah Data</a>-->

                <!-- Search -->
                <div class="row">
                    <div class="col-sm-12 col-md-9">
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#penerimaModal">
                            <i class="fa fa-file"></i>&nbsp;&nbsp;Tambah Data</button>
                            <div class="modal fade" id="penerimaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">×</span>
                                          </button>
                                      </div>
                                      <form method="POST" action="tkeluargapenerima.php">
                                        <div class="col-sm-12 py-1">
                                            <div class="form-group row">
                                             <label for="validationCustom02" class="col-sm-3 col-form-label">NKK</label>
                                             <div class="col-sm-9">
                                               <input type="text" class="form-control" id="validationCustom02" name="nkk" placeholder="Masukan NKK" required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                         <label for="validationCustom03" class="col-sm-3 col-form-label">Jumlah Anggota Keluarga</label>
                                         <div class="col-sm-9">
                                           <input type="text" class="form-control" id="validationCustom03" name="jumlahanggotakeluarga" placeholder="Masukan Jumlah Anggota Keluarga" required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                     <label for="validationCustom04" class="col-sm-3 col-form-label">Rata-rata Pendapatan Keluarga</label>
                                     <div class="col-sm-9">
                                       <input type="text" class="form-control" id="validationCustom04" name="pendapatankeluarga" placeholder="Masukan Pendapatan Keluarga" required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                                   </div>
                               </div>
                               <div class="form-group row">
                                 <label for="validationCustom05" class="col-sm-3 col-form-label">Alamat</label>
                                 <div class="col-sm-9">
                                   <input type="text" class="form-control" id="validationCustom05" name="alamat" placeholder="Masukan Alamat"required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                               </div>
                           </div>
                           <!--<div class="form-group row">
                             <label for="validationCustom07" class="col-sm-3 col-form-label">Bantuan Beras Sebelumnya</label>
                             <div class="col-sm-9">
                               <select name="bantuanpemerintah" class="form-control" required oninvalid="this.setCustomValidity('Pilih Salah Satu !')" oninput="setCustomValidity('')">
                                <option value="">-Select-</option>
                                <option value="Pernah Dapat Bantuan">Pernah Dapat Bantuan</option>
                                <option value="Tidak Dapat Bantuan">Tidak Dapat Bantuan</option>
                            </select>
                        </div>
                    </div>-->
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger">
                           <i class="fa fa-undo"></i>&nbsp;&nbsp;Reset</button>
                           <button type="submit" class="btn btn-success">
                            <i class="fas fa-check fa-md"></i>&nbsp;&nbsp;Simpan</button>
                        </button>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<a href="printkeluargapenerima.php" class="btn btn-success" target="_blank">
    <i class="fa fa-print"></i>&nbsp;&nbsp;Print</a>
</div>
</div>
</div>

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead align="center">
                <tr>
                   <th>No</th>
                   <th>NKK</th>
                   <th>Jumlah Anggota Keluarga</th>
                   <th>Rata-rata Pendapatan</th>
                   <th>Alamat Keluarga</th>
                   <!--<th>Bantuan Beras Sebelumnya</th>-->
                   <th>Opsi</th>
               </tr>
           </thead>
           <tbody align="center">
            <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM datakeluargapenerima");
            while ($d = mysqli_fetch_array($data)){
               ?>

               
               <tr>
                <th><?php echo $no++; ?></th>
                <th><?php echo $d['nkk']; ?></th>
                <th><?php echo $d['jumlahanggotakeluarga']; ?></th>
                <th><?php echo $d['pendapatankeluarga']; ?></th>
                <th><?php echo $d['alamat']; ?></th>
                <!--<th><?php echo $d['bantuanpemerintah']; ?></th>-->
                <td>
                   <a href="ubahkeluargapenerima.php?nkk=<?php echo $d['nkk']; ?>" class="btn btn-warning">
                    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit</a>
                    <a  href="hapuskeluargapenerima.php?nkk=<?php echo $d['nkk']; ?>" class="btn btn-danger">
                        <i class="fa fa-trash"></i>&nbsp;&nbsp;Hapus</a>
                    </td>
                </tr>
                <?php  
            }
            ?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>

<!--Memanggil Footer-->
<?php include('footer.php'); ?>    