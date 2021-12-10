<!--Memanggil Header-->
<?php include('index.php'); ?>

<!-- Main Content -->
<div id="content">

	<!-- Begin Page Content -->
	<div class="container-fluid">
		
		<h1 class="h3 mb-2 text-gray-800">Edit Data Beras | Desa Sekarwangi</h1>
		<?php
		include 'koneksi.php';
		$kodeberas = $_GET['kodeberas'];
		$data = mysqli_query($koneksi,"SELECT * FROM databeras WHERE kodeberas='$kodeberas'");
		while($d = mysqli_fetch_array($data)){
			?>
			<form method="POST" action="ubhberas.php">
				<div class="col-sm-12 py-1">
					<div class="form-group row">
						<label for="inputKodeBeras" class="col-sm-3 col-form-label">Kode Beras</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="kodeberas" id="inputKodeBeras" value="<?php echo $d['kodeberas']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputBesaranBeras" class="col-sm-3 col-form-label">Besaran Beras</label>
						<div class="col-sm-5">
							<select name="besaranberas" class="form-control" required>
								<option value="">-Select-</option>
								<option value="5 Kilogram" <?php if($d['besaranberas'] == '5 Kilogram'){ echo 'selected'; } ?>>5 Kilogram</option>
								<option value="6 Kilogram" <?php if($d['besaranberas'] == '6 Kilogram'){ echo 'selected'; } ?>>6 Kilogram</option>
								<option value="7 Kilogram" <?php if($d['besaranberas'] == '7 Kilogram'){ echo 'selected'; } ?>>7 Kilogram</option>
								<option value="8 Kilogram" <?php if($d['besaranberas'] == '8 Kilogram'){ echo 'selected'; } ?>>8 Kilogram</option>
								<option value="9 Kilogram" <?php if($d['besaranberas'] == '9 Kilogram'){ echo 'selected'; } ?>>9 Kilogram</option>
								<option value="10 Kilogram" <?php if($d['besaranberas'] == '10 Kilogram'){ echo 'selected'; } ?>>10 Kilogram</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputKualitas" class="col-sm-3 col-form-label">Kualitas</label>
						<div class="col-sm-5">
							<select name="kualitas" class="form-control" required>
								<option value="">-Select-</option>
								<option value="Bagus" <?php if($d['kualitas'] == 'Bagus'){ echo 'selected'; } ?>>Bagus</option>
								<option value="Sedang" <?php if($d['kualitas'] == 'Sedang'){ echo 'selected'; } ?>>Sedang</option>
								<option value="Rendah" <?php if($d['kualitas'] == 'Rendah'){ echo 'selected'; } ?>>Rendah</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputGudangPenyalur" class="col-sm-3 col-form-label">Gudang Penyalur</label>
						<div class="col-sm-5">
							<select name="gudangpenyalur" class="form-control" required>
								<option value="">-Select-</option>
								<option value="Dinas Sosial" <?php if($d['gudangpenyalur'] == 'Dinas Sosial'){ echo 'selected'; } ?>>Dinas Sosial</option>
								<option value="Kecamatan" <?php if($d['gudangpenyalur'] == 'Kecamatan'){ echo 'selected'; } ?>>Kecamatan</option>
								<option value="Kodim" <?php if($d['gudangpenyalur'] == 'Kodim'){ echo 'selected'; } ?>>Kodim</option>
								<option value="Koramil" <?php if($d['gudangpenyalur'] == 'Koramil'){ echo 'selected'; } ?>>Koramil</option>
								<option value="Polres" <?php if($d['gudangpenyalur'] == 'Polres'){ echo 'selected'; } ?>>Polres</option>
								<option value="Polsek" <?php if($d['gudangpenyalur'] == 'Kecamatan'){ echo 'selected'; } ?>>Kecamatan</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputStokBeras" class="col-sm-3 col-form-label">Stok Beras</label>
						<div class="col-sm-5">
							<select name="stokberas" class="form-control" required>
								<option value="">-Select-</option>
								<option value="Tidak Tersedia" <?php if($d['stokberas'] == 'Tidak Tersedia'){ echo 'selected'; } ?>>Tidak Tersedia</option>
								<option value="Tersedia" <?php if($d['stokberas'] == 'Tersedia'){ echo 'selected'; } ?>>Tersedia</option>
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
						</div>
					</form>
					<?php 
				}
				?>
			</div>
			
		</div>

		<!--Memanggil Footer-->
		<?php include('footer.php'); ?>