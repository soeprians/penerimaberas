<!--Memanggil Header-->
<?php include('index.php'); ?>

<!-- Main Content -->
<div id="content">

	<!-- Begin Page Content -->
	<div class="container-fluid">
		
		<h1 class="h3 mb-2 text-gray-800">Edit Jenis Beras | Desa Sekarwangi</h1>
		<?php
		include 'koneksi.php';
		$kodeberas = $_GET['kodeberas'];
		$data = mysqli_query($koneksi,"SELECT * FROM jenisberas WHERE kodeberas='$kodeberas'");
		while($d = mysqli_fetch_array($data)){
			?>
			<form method="POST" action="ubhjenisberas.php">
				<div class="col-sm-12 py-1">
					<div class="form-group row">
						<label for="inputKodeBeras" class="col-sm-3 col-form-label">Kode Beras</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="kodeberas" id="inputKodeBeras" value="<?php echo $d['kodeberas']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputNamaBeras" class="col-sm-3 col-form-label">Nama Beras</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="namaberas" id="inputNamaBeras" value="<?php echo $d['namaberas']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputMasaKadaluarsa" class="col-sm-3 col-form-label">Masa Kadaluarsa</label>
						<div class="col-sm-5">
							<select name="masakadaluarsa" class="form-control" required>
								<option value="">-Select-</option>
								<option value="4 Bulan" <?php if($d['masakadaluarsa'] == '4 Bulan'){ echo 'selected'; } ?>>4 Bulan</option>
								<option value="5 Bulan" <?php if($d['masakadaluarsa'] == '5 Bulan'){ echo 'selected'; } ?>>5 Bulan</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputGudangPusat" class="col-sm-3 col-form-label">Gudang Pusat</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="gudangpusat" id="inputGudangPusat" value="<?php echo $d['gudangpusat']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputCabang" class="col-sm-3 col-form-label">Cabang</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="cabang" id="inputCabang" value="<?php echo $d['cabang']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputFoto" class="col-sm-3 col-form-label">Foto</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="fotoberas" id="inputFoto" value="<?php echo $d['fotoberas']; ?>">
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
						</div>
					</form>
					<?php 
				}
				?>
			</div>
			
		</div>

		<!--Memanggil Footer-->
		<?php include('footer.php'); ?>