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
		$data = mysqli_query($koneksi,"SELECT * FROM statuspenerima WHERE nkk='$nkk'");
		while($d = mysqli_fetch_array($data)){
			?>
			<form method="POST" action="ubhstatuspenerima.php">
				<div class="form-group row">
					<label for="inputNKK" class="col-sm-3 col-form-label">NKK</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="nkk" id="inputNKK" value="<?php echo $d['nkk']; ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputNamaPenerima" class="col-sm-3 col-form-label">NamaPenerima</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="namapenerima" id="inputNamaPenerima" value="<?php echo $d['namapenerima']; ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputStatusPenerima1" class="col-sm-3 col-form-label">Bantuan Beras 1</label>
					<div class="col-sm-9">
						<select name="bantuan1" class="form-control">
							<option value="">-Select-</option>
							<option value="Tidak Mengajukan" <?php if($d['bantuan1'] == 'Tidak Mengajukan'){ echo 'selected'; } ?>>Tidak Mengajukan</option>
							<option value="Telah Terverifikasi" <?php if($d['bantuan1'] == 'Telah Terverifikasi'){ echo 'selected'; } ?>>Telah Terverifikasi</option>
							<option value="Beras Sudah Diterima" <?php if($d['bantuan1'] == 'Beras Sudah Diterima'){ echo 'selected'; } ?>>Beras Sudah Diterima</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputStatusPenerima2" class="col-sm-3 col-form-label">Bantuan Beras 2</label>
					<div class="col-sm-9">
						<select name="bantuan2" class="form-control">
							<option value="">-Select-</option>
							<option value="Tidak Mengajukan" <?php if($d['bantuan2'] == 'Tidak Mengajukan'){ echo 'selected'; } ?>>Tidak Mengajukan</option>
							<option value="Telah Terverifikasi" <?php if($d['bantuan2'] == 'Telah Terverifikasi'){ echo 'selected'; } ?>>Telah Terverifikasi</option>
							<option value="Beras Sudah Diterima" <?php if($d['bantuan2'] == 'Beras Sudah Diterima'){ echo 'selected'; } ?>>Beras Sudah Diterima</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputStatusPenerima3" class="col-sm-3 col-form-label">Bantuan Beras 3</label>
					<div class="col-sm-9">
						<select name="bantuan3" class="form-control">
							<option value="">-Select-</option>
							<option value="Tidak Mengajukan" <?php if($d['bantuan3'] == 'Tidak Mengajukan'){ echo 'selected'; } ?>>Tidak Mengajukan</option>
							<option value="Telah Terverifikasi" <?php if($d['bantuan3'] == 'Telah Terverifikasi'){ echo 'selected'; } ?>>Telah Terverifikasi</option>
							<option value="Beras Sudah Diterima" <?php if($d['bantuan3'] == 'Beras Sudah Diterima'){ echo 'selected'; } ?>>Beras Sudah Diterima</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputStatusPenerima4" class="col-sm-3 col-form-label">Bantuan Beras 4</label>
					<div class="col-sm-9">
						<select name="bantuan4" class="form-control">
							<option value="">-Select-</option>
							<option value="Tidak Mengajukan" <?php if($d['bantuan4'] == 'Tidak Mengajukan'){ echo 'selected'; } ?>>Tidak Mengajukan</option>
							<option value="Telah Terverifikasi" <?php if($d['bantuan4'] == 'Telah Terverifikasi'){ echo 'selected'; } ?>>Telah Terverifikasi</option>
							<option value="Beras Sudah Diterima" <?php if($d['bantuan4'] == 'Beras Sudah Diterima'){ echo 'selected'; } ?>>Beras Sudah Diterima</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputStatusPenerima5" class="col-sm-3 col-form-label">Bantuan Beras 5</label>
					<div class="col-sm-9">
						<select name="bantuan5" class="form-control">
							<option value="">-Select-</option>
							<option value="Tidak Mengajukan" <?php if($d['bantuan5'] == 'Tidak Mengajukan'){ echo 'selected'; } ?>>Tidak Mengajukan</option>
							<option value="Telah Terverifikasi" <?php if($d['bantuan5'] == 'Telah Terverifikasi'){ echo 'selected'; } ?>>Telah Terverifikasi</option>
							<option value="Beras Sudah Diterima" <?php if($d['bantuan5'] == 'Beras Sudah Diterima'){ echo 'selected'; } ?>>Beras Sudah Diterima</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputStatusPenerima6" class="col-sm-3 col-form-label">Bantuan Beras 6</label>
					<div class="col-sm-9">
						<select name="bantuan6" class="form-control">
							<option value="">-Select-</option>
							<option value="Tidak Mengajukan" <?php if($d['bantuan6'] == 'Tidak Mengajukan'){ echo 'selected'; } ?>>Tidak Mengajukan</option>
							<option value="Telah Terverifikasi" <?php if($d['bantuan6'] == 'Telah Terverifikasi'){ echo 'selected'; } ?>>Telah Terverifikasi</option>
							<option value="Beras Sudah Diterima" <?php if($d['bantuan6'] == 'Beras Sudah Diterima'){ echo 'selected'; } ?>>Beras Sudah Diterima</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputStatusPenerima7" class="col-sm-3 col-form-label">Bantuan Beras 7</label>
					<div class="col-sm-9">
						<select name="bantuan7" class="form-control">
							<option value="">-Select-</option>
							<option value="Tidak Mengajukan" <?php if($d['bantuan7'] == 'Tidak Mengajukan'){ echo 'selected'; } ?>>Tidak Mengajukan</option>
							<option value="Telah Terverifikasi" <?php if($d['bantuan7'] == 'Telah Terverifikasi'){ echo 'selected'; } ?>>Telah Terverifikasi</option>
							<option value="Beras Sudah Diterima" <?php if($d['bantuan7'] == 'Beras Sudah Diterima'){ echo 'selected'; } ?>>Beras Sudah Diterima</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputStatusPenerima8" class="col-sm-3 col-form-label">Bantuan Beras 8</label>
					<div class="col-sm-9">
						<select name="bantuan8" class="form-control">
							<option value="">-Select-</option>
							<option value="Tidak Mengajukan" <?php if($d['bantuan8'] == 'Tidak Mengajukan'){ echo 'selected'; } ?>>Tidak Mengajukan</option>
							<option value="Telah Terverifikasi" <?php if($d['bantuan8'] == 'Telah Terverifikasi'){ echo 'selected'; } ?>>Telah Terverifikasi</option>
							<option value="Beras Sudah Diterima" <?php if($d['bantuan8'] == 'Beras Sudah Diterima'){ echo 'selected'; } ?>>Beras Sudah Diterima</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputStatusPenerima9" class="col-sm-3 col-form-label">Bantuan Beras 9</label>
					<div class="col-sm-9">
						<select name="bantuan9" class="form-control">
							<option value="">-Select-</option>
							<option value="Tidak Mengajukan" <?php if($d['bantuan9'] == 'Tidak Mengajukan'){ echo 'selected'; } ?>>Tidak Mengajukan</option>
							<option value="Telah Terverifikasi" <?php if($d['bantuan9'] == 'Telah Terverifikasi'){ echo 'selected'; } ?>>Telah Terverifikasi</option>
							<option value="Beras Sudah Diterima" <?php if($d['bantuan9'] == 'Beras Sudah Diterima'){ echo 'selected'; } ?>>Beras Sudah Diterima</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputStatusPenerima10" class="col-sm-3 col-form-label">Bantuan Beras 10</label>
					<div class="col-sm-9">
						<select name="bantuan9" class="form-control">
							<option value="">-Select-</option>
							<option value="Tidak Mengajukan" <?php if($d['bantuan10'] == 'Tidak Mengajukan'){ echo 'selected'; } ?>>Tidak Mengajukan</option>
							<option value="Telah Terverifikasi" <?php if($d['bantuan10'] == 'Telah Terverifikasi'){ echo 'selected'; } ?>>Telah Terverifikasi</option>
							<option value="Beras Sudah Diterima" <?php if($d['bantuan10'] == 'Beras Sudah Diterima'){ echo 'selected'; } ?>>Beras Sudah Diterima</option>
						</select>
					</div>
				</div>
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