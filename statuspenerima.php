<!--Memanggil Header-->
<?php include('index.php'); ?>

<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Status Penerima Beras | Desa Sekarwangi</h1>
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
                                      <form method="POST" action="tstatuspenerima.php">
                                        <div class="col-sm-12 py-1">
                                            <div class="form-group row">
                                             <label for="validationCustom02" class="col-sm-3 col-form-label">NKK</label>
                                             <div class="col-sm-9">
                                               <input type="text" class="form-control" id="validationCustom02" name="nkk" placeholder="Masukan NKK" required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                 <label for="validationCustom04" class="col-sm-3 col-form-label">Nama Penerima</label>
                                 <div class="col-sm-9">
                                   <input type="text" class="form-control" id="validationCustom04" name="namapenerima" placeholder="Masukan Nama Penerima" required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                               </div>
                           <div class="form-group row">
                             <label for="validationCustom02" class="col-sm-3 col-form-label">Bantuan Beras 1</label>
                             <div class="col-sm-9">
                               <select name="bantuan1" class="form-control" >
                                <option value="">-Select-</option>
                                <option value="Belum Mengajukan">Tidak Mengajukan</option>
                                <option value="Telah Terverifikasi">Telah Terverifikasi</option>
                                <option value="Beras Sudah Diterima">Beras Sudah Diterima</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                             <label for="validationCustom03" class="col-sm-3 col-form-label">Bantuan Beras 2</label>
                             <div class="col-sm-9">
                               <select name="bantuan2" class="form-control" >
                                <option value="">-Select-</option>
                                <option value="Belum Mengajukan">Tidak Mengajukan</option>
                                <option value="Telah Terverifikasi">Telah Terverifikasi</option>
                                <option value="Beras Sudah Diterima">Beras Sudah Diterima</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                             <label for="validationCustom04" class="col-sm-3 col-form-label">Bantuan Beras 3</label>
                             <div class="col-sm-9">
                               <select name="bantuan3" class="form-control" >
                                <option value="">-Select-</option>
                                <option value="Belum Mengajukan">Tidak Mengajukan</option>
                                <option value="Telah Terverifikasi">Telah Terverifikasi</option>
                                <option value="Beras Sudah Diterima">Beras Sudah Diterima</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                             <label for="validationCustom05" class="col-sm-3 col-form-label">Bantuan Beras 4</label>
                             <div class="col-sm-9">
                               <select name="bantuan4" class="form-control" >
                                <option value="">-Select-</option>
                                <option value="Belum Mengajukan">Tidak Mengajukan</option>
                                <option value="Telah Terverifikasi">Telah Terverifikasi</option>
                                <option value="Beras Sudah Diterima">Beras Sudah Diterima</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                             <label for="validationCustom06" class="col-sm-3 col-form-label">Bantuan Beras 5</label>
                             <div class="col-sm-9">
                               <select name="bantuan5" class="form-control" >
                                <option value="">-Select-</option>
                                <option value="Belum Mengajukan">Tidak Mengajukan</option>
                                <option value="Telah Terverifikasi">Telah Terverifikasi</option>
                                <option value="Beras Sudah Diterima">Beras Sudah Diterima</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                             <label for="validationCustom07" class="col-sm-3 col-form-label">Bantuan Beras 6</label>
                             <div class="col-sm-9">
                               <select name="bantuan6" class="form-control" >
                                <option value="">-Select-</option>
                                <option value="Belum Mengajukan">Tidak Mengajukan</option>
                                <option value="Telah Terverifikasi">Telah Terverifikasi</option>
                                <option value="Beras Sudah Diterima">Beras Sudah Diterima</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                             <label for="validationCustom08" class="col-sm-3 col-form-label">Bantuan Beras 7</label>
                             <div class="col-sm-9">
                               <select name="bantuan7" class="form-control" >
                                <option value="">-Select-</option>
                                <option value="Belum Mengajukan">Tidak Mengajukan</option>
                                <option value="Telah Terverifikasi">Telah Terverifikasi</option>
                                <option value="Beras Sudah Diterima">Beras Sudah Diterima</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                             <label for="validationCustom09" class="col-sm-3 col-form-label">Bantuan Beras 8</label>
                             <div class="col-sm-9">
                               <select name="bantuan8" class="form-control" >
                                <option value="">-Select-</option>
                                <option value="Belum Mengajukan">Tidak Mengajukan</option>
                                <option value="Telah Terverifikasi">Telah Terverifikasi</option>
                                <option value="Beras Sudah Diterima">Beras Sudah Diterima</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                             <label for="validationCustom010" class="col-sm-3 col-form-label">Bantuan Beras 9</label>
                             <div class="col-sm-9">
                               <select name="bantuan9" class="form-control" >
                                <option value="">-Select-</option>
                                <option value="Belum Mengajukan">Tidak Mengajukan</option>
                                <option value="Telah Terverifikasi">Telah Terverifikasi</option>
                                <option value="Beras Sudah Diterima">Beras Sudah Diterima</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                             <label for="validationCustom011" class="col-sm-3 col-form-label">Bantuan Beras 10</label>
                             <div class="col-sm-9">
                               <select name="bantuan10" class="form-control" >
                                <option value="">-Select-</option>
                                <option value="Tidak Mengajukan">Tidak Mengajukan</option>
                                <option value="Telah Terverifikasi">Telah Terverifikasi</option>
                                <option value="Beras Sudah Diterima">Beras Sudah Diterima</option>
                            </select>
                        </div>
                    </div>

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
</div>
<a href="printstatuspenerima.php" class="btn btn-success" target="_blank">
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
                   <th>Nama Penerima</th>
                   <th>Bantuan Beras 1</th>
                   <th>Bantuan Beras 2</th>
                   <th>Bantuan Beras 3</th>
                   <th>Bantuan Beras 4</th>
                   <th>Bantuan Beras 5</th>
                   <th>Bantuan Beras 6</th>
                   <th>Bantuan Beras 7</th>
                   <th>Bantuan Beras 8</th>
                   <th>Bantuan Beras 9</th>
                   <th>Bantuan Beras 10</th>
                   <th>Opsi</th>
               </tr>
           </thead>
           <tbody align="center">
            <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM statuspenerima");
            while ($d = mysqli_fetch_array($data)){
               ?>

               
               <tr>
                <th><?php echo $no++; ?></th>
                <th><?php echo $d['nkk']; ?></th>
                <th><?php echo $d['namapenerima']; ?></th>
                <th><?php echo $d['bantuan1']; ?></th>
                <th><?php echo $d['bantuan2']; ?></th>
                <th><?php echo $d['bantuan3']; ?></th>
                <th><?php echo $d['bantuan4']; ?></th>
                <th><?php echo $d['bantuan5']; ?></th>
                <th><?php echo $d['bantuan6']; ?></th>
                <th><?php echo $d['bantuan7']; ?></th>
                <th><?php echo $d['bantuan8']; ?></th>
                <th><?php echo $d['bantuan9']; ?></th>
                <th><?php echo $d['bantuan10']; ?></th>
                <td>
                   <a href="ubahstatuspenerima.php?nkk=<?php echo $d['nkk']; ?>" class="btn btn-warning">
                    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit</a>
                    <a  href="hapusstatuspenerima.php?nkk=<?php echo $d['nkk']; ?>" class="btn btn-danger">
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