<!DOCTYPE html>
<html>
<head>
	<title>Print</title>
</head>
<body>
	
	<center>
		
		<h3>JENIS BERAS</h3>
		<h3>DESA SEKARWANGI</h3>
		
	</center>
	
	<?php 
	include 'koneksi.php';
	?>
	
	<table border="1" cellpadding="5" cellspacing="0" style="width: 100%">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Beras</th>
				<th>Nama Beras</th>
				<th>Masa Kadaluarsa</th>
				<th>Gudang Utama</th>
				<th>Cabang</th>
				<th>Foto</th>
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
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['kodeberas']; ?></td>
					<td><?php echo $d['namaberas']; ?></td>
					<td><?php echo $d['masakadaluarsa']; ?></td>
					<td><?php echo $d['gudangpusat']; ?></td>
					<td><?php echo $d['cabang']; ?></td>
					<td><img src="gambar/<?php echo $d['fotoberas'] ?>" width="100" height="100"></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
	
	<script>
		window.print();
	</script>
	
</body>
</html>