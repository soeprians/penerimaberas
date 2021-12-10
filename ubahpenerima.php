<!--Memanggil Header-->
<?php include('index.php'); ?>

<!-- Main Content -->
<div id="content">

	<!-- Begin Page Content -->
	<div class="container-fluid">
		
		<h1 class="h3 mb-2 text-gray-800">Edit Data Penerima | Desa Sekarwangi</h1>
		<?php
		include 'koneksi.php';
		$nkk = $_GET['nkk'];
		$data = mysqli_query($koneksi,"SELECT * FROM penerima WHERE nkk='$nkk'");
		while($d = mysqli_fetch_array($data)){
			?>
			<form method="POST" action="ubhpenerima.php">
				<div class="col-sm-12 py-1">
					<div class="form-group row">
						<label for="inputKodeBeras" class="col-sm-3 col-form-label">Kode Beras</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="kodeberas" id="inputKodeBeras" value="<?php echo $d['kodeberas']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputNKK" class="col-sm-3 col-form-label">NKK</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="nkk" id="inputNKK" value="<?php echo $d['nkk']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputNIK" class="col-sm-3 col-form-label">NIK</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="inputNIK" name="nik" value="<?php echo $d['nik']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputNamaPenerima" class="col-sm-3 col-form-label">Nama Penerima</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="namapenerima" id="inputNamaPenerima" value="<?php echo $d['namapenerima']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputTelepon" class="col-sm-3 col-form-label">Telepon</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="inputTelepon" name="telepon" value="<?php echo $d['telepon']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputTglPengajuan" class="col-sm-3 col-form-label">Tanggal Pengajuan</label>
						<div class="col-sm-9">
							<input type="date" class="form-control" id="inputTglPengajuan" name="tglpengajuan" value="<?php echo $d['tglpengajuan']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputTglPengambilan" class="col-sm-3 col-form-label">Tanggal Pengambilan</label>
						<div class="col-sm-9">
							<input type="date" class="form-control" id="inputTglPengambilan" name="tglpengambilan" value="<?php echo $d['tglpengambilan']; ?>">
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