<!--Memanggil Header-->
<?php include('index.php'); ?>

<!-- Main Content -->
<div id="content">

	<!-- Begin Page Content -->
	<div class="container-fluid">
		
		<h1 class="h3 mb-2 text-gray-800">Edit Keluarga Penerima | Desa Sekarwangi</h1>
		<?php
		include 'koneksi.php';
		$nkk = $_GET['nkk'];
		$data = mysqli_query($koneksi,"SELECT * FROM datakeluargapenerima WHERE nkk='$nkk'");
		while($d = mysqli_fetch_array($data)){
			?>
			<form method="POST" action="ubhkeluargapenerima.php">
				<div class="form-group row">
					<label for="inputNKK" class="col-sm-3 col-form-label">NKK</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="nkk" id="inputNKK" value="<?php echo $d['nkk']; ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputJumlahAnggotaKeluarga" class="col-sm-3 col-form-label">Jumlah Anggota Keluarga</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="inputJumlahAnggotaKeluarga" name="jumlahanggotakeluarga" value="<?php echo $d['jumlahanggotakeluarga']; ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPendapatanKeluarga" class="col-sm-3 col-form-label">Rata-rata Pendapatan Keluarga</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="pendapatankeluarga" id="inputPendapatanKeluarga" value="<?php echo $d['pendapatankeluarga']; ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputAlamat" class="col-sm-3 col-form-label">Alamat</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="inputAlamat" name="alamat" value="<?php echo $d['alamat']; ?>">
					</div>
				</div>
				<!--<div class="form-group row">
					<label for="inputBantuanPemerintah" class="col-sm-3 col-form-label">Bantuan Beras Sebelumnya</label>
					<div class="col-sm-9">
						<select name="bantuanpemerintah" class="form-control" required>
							<option value="">-Select-</option>
							<option value="Pernah Dapat Bantuan" <?php if($d['bantuanpemerintah'] == 'Pernah Dapat Bantuan'){ echo 'selected'; } ?>>Pernah Dapat Bantuan</option>
							<option value="Tidak Dapat Bantuan" <?php if($d['bantuanpemerintah'] == 'Tidak Dapat Bantuan'){ echo 'selected'; } ?>>Tidak Dapat Bantuan</option>
						</select>
					</div>
				</div>-->
				<div class="form-group row">
					<div class="col-sm-10">
						<button type="reset" class="btn btn-secondary">
							<i class="fa fa-undo"></i>&nbsp;&nbsp;Reset</button>
							<button type="submit" class="btn btn-success">
								<i class="fas fa-check fa-md"></i>&nbsp;&nbsp;Simpan</button>
							</div>
						</div>
					</form>
					<?php
				}
				?>
			</div>
			
		</div>

		<!--Memanggil Footer-->
		<?php include('footer.php'); ?>