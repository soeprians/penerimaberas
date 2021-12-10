<!--Memanggil Header-->
<?php include('index.php'); ?>

<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Jenis Beras | Desa Sekarwangi</h1>
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
                                      <form method="POST" action="tjenisberas.php" enctype="multipart/form-data">
                                        <div class="col-sm-12 py-1">
                                            <div class="form-group row">
                                             <label for="validationCustom02" class="col-sm-3 col-form-label">Kode Beras</label>
                                             <div class="col-sm-9">
                                               <input type="text" class="form-control" id="validationCustom02" name="kodeberas" placeholder="Masukan Kode Beras" required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                         <label for="validationCustom02" class="col-sm-3 col-form-label">Nama Beras</label>
                                         <div class="col-sm-9">
                                           <input type="text" class="form-control" id="validationCustom02" name="namaberas" placeholder="Masukan Nama Beras" required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                     <label for="validationCustom03" class="col-sm-3 col-form-label">Masa Kadaluarsa</label>
                                     <div class="col-sm-9">
                                       <select name="masakadaluarsa" class="form-control" required oninvalid="this.setCustomValidity('Pilih Salah Satu !')" oninput="setCustomValidity('')">
                                        <option value="">-Select-</option>
                                        <option value="4 Bulan">4 Bulan</option>
                                        <option value="5 Bulan">5 Bulan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                             <label for="validationCustom04" class="col-sm-3 col-form-label">Gudang Pusat</label>
                             <div class="col-sm-9">
                               <input type="text" class="form-control" id="validationCustom04" name="gudangpusat" placeholder="Masukan Gudang Pusat" required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                           </div>
                       </div>
                       <div class="form-group row">
                         <label for="validationCustom05" class="col-sm-3 col-form-label">Cabang</label>
                         <div class="col-sm-9">
                           <input type="text" class="form-control" id="validationCustom05" name="cabang" placeholder="Masukan Cabang"required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                       </div>
                   </div>
                   <div class="form-group row">
                     <label for="validationCustom06" class="col-sm-3 col-form-label">Foto : </label>
                     <div class="col-sm-9">
                        <input type="file" name="foto" >
                        <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</p>
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
<a href="printjenisberas.php" class="btn btn-success" target="_blank">
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
                   <th>Nama Beras</th>
                   <th>Masa Kadaluarsa</th>
                   <th>Gudang Utama</th>
                   <th>Cabang</th>
                   <th>Foto</th>
                   <th>Opsi</th>
               </tr>
           </thead>
           <tbody align="center">
            <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM jenisberas");
            while ($d = mysqli_fetch_array($data)){
               ?>

               
               <tr>
                <th><?php echo $no++; ?></th>
                <th><?php echo $d['kodeberas']; ?></th>
                <th><?php echo $d['namaberas']; ?></th>
                <th><?php echo $d['masakadaluarsa']; ?></th>
                <th><?php echo $d['gudangpusat']; ?></th>
                <th><?php echo $d['cabang']; ?></th>
                <td><img src="gambar/<?php echo $d['fotoberas'] ?>" width="125" height="125"></td>
                <td>
                   <a href="ubahjenisberas.php?kodeberas=<?php echo $d['kodeberas']; ?>" class="btn btn-warning">
                    <i class="far fa-edit"></i>&nbsp;&nbsp;Edit</a>
                    <a  href="hapusjenisberas.php?kodeberas=<?php echo $d['kodeberas']; ?>" class="btn btn-danger">
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