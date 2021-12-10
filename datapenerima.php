<!--Memanggil Header-->
<?php include('index.php'); ?>

<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Data Warga Penerima Beras | Desa Sekarwangi</h1>
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
                                      <form method="POST" action="tpenerima.php">
                                        <div class="col-sm-12 py-1">
                                            <div class="form-group row">
                                             <label for="validationCustom01" class="col-sm-3 col-form-label">Kode Beras</label>
                                             <div class="col-sm-9">
                                               <input type="text" class="form-control" id="validationCustom01" name="kodeberas" placeholder="Masukan Kode Beras" required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                         <label for="validationCustom02" class="col-sm-3 col-form-label">NKK</label>
                                         <div class="col-sm-9">
                                           <input type="text" class="form-control" id="validationCustom02" name="nkk" placeholder="Masukan NKK" required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                     <label for="validationCustom03" class="col-sm-3 col-form-label">NIK</label>
                                     <div class="col-sm-9">
                                       <input type="text" class="form-control" id="validationCustom03" name="nik" placeholder="Masukan NIK" required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                                   </div>
                               </div>
                               <div class="form-group row">
                                 <label for="validationCustom04" class="col-sm-3 col-form-label">Nama Penerima</label>
                                 <div class="col-sm-9">
                                   <input type="text" class="form-control" id="validationCustom04" name="namapenerima" placeholder="Masukan Nama Penerima" required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                               </div>
                           </div>
                           <div class="form-group row">
                             <label for="validationCustom05" class="col-sm-3 col-form-label">Telepon</label>
                             <div class="col-sm-9">
                               <input type="text" class="form-control" id="validationCustom05" name="telepon" placeholder="Masukan Telepon" required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                           </div>
                       </div>
                       <div class="form-group row">
                         <label for="validationCustom06" class="col-sm-3 col-form-label">Tanggal Pengajuan</label>
                         <div class="col-sm-9">
                           <input type="date" class="form-control" id="validationCustom06" name="tglpengajuan" placeholder="Masukan Tanggal Pengajuan"  required oninvalid="this.setCustomValidity('Tanggal tidak boleh kosong !')" oninput="setCustomValidity('')">
                       </div>
                   </div>
                   <div class="form-group row">
                     <label for="validationCustom07" class="col-sm-3 col-form-label">Tanggal Pengambilan</label>
                     <div class="col-sm-9">
                       <input type="date" class="form-control" id="validationCustom07" name="tglpengambilan" placeholder="Masukan Tanggal Pengambilan" required oninvalid="this.setCustomValidity('Tanggal tidak boleh kosong !')" oninput="setCustomValidity('')">
                   </div>
               </div>
               <div class="modal-footer">
                <button type="reset" class="btn btn-danger">
                   <i class="fa fa-undo"></i>&nbsp;&nbsp;Reset</button>
                   <button type="submit" class="btn btn-success">
                    <i class="fas fa-check fa-md"></i>&nbsp;&nbsp;Simpan</button>

                </div>
            </div>
        </form>
    </div>
</div>
</div>
<a href="printpenerima.php" class="btn btn-success" target="_blank">
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
                    <th>Kode Beras</th>
                    <th>NKK</th>
                    <th>NIK</th>
                    <th>Nama Penerima</th>
                    <th>Telepon</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Tanggal Pengambilan</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody align="center">
                <?php 
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM penerima");
                while ($d = mysqli_fetch_array($data)){
                   ?>

                   
                   <tr>
                    <th><?php echo $no++; ?></th>
                    <th><?php echo $d['kodeberas']; ?></th>
                    <th><?php echo $d['nkk']; ?></th>
                    <th><?php echo $d['nik']; ?></th>
                    <th><?php echo $d['namapenerima']; ?></th>
                    <th><?php echo $d['telepon']; ?></th>
                    <th><?php echo $d['tglpengajuan']; ?></th>
                    <th><?php echo $d['tglpengambilan']; ?></th>
                    <td>
                       <a href="ubahpenerima.php?nkk=<?php echo $d['nkk']; ?>" class="btn btn-warning">
                        <i class="far fa-edit"></i>&nbsp;&nbsp;Edit</a>
                        
                        <a  href="hapuspenerima.php?nkk=<?php echo $d['nkk']; ?>" class="btn btn-danger">
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