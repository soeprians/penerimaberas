<!DOCTYPE html>
<html>
<head>
	<title>Print</title>
</head>
<body>
	
	<center>
		
		<h3>DATA BERAS</h3>
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
				<th>Besaran Beras</th>
				<th>Kualitas Beras</th>
				<th>Gudang Penyalur</th>
				<th>Stok Beras</th>
			</tr>
		</thead>
		<tbody align="center">
			<?php 
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi, "SELECT * FROM databeras");
			while ($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['kodeberas']; ?></td>
					<td><?php echo $d['besaranberas']; ?></td>
					<td><?php echo $d['kualitas']; ?></td>
					<td><?php echo $d['gudangpenyalur']; ?></td>
					<td><?php echo $d['stokberas']; ?></td>
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