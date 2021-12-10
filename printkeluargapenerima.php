<!DOCTYPE html>
<html>
<head>
	<title>Print</title>
</head>
<body>
	
	<center>
		
		<h3>DATA KELUARGA PENERIMA BERAS</h3>
		<h3>DESA SEKARWANGI</h3>
		
	</center>
	
	<?php 
	include 'koneksi.php';
	?>
	
	<table border="1" cellpadding="5" cellspacing="0" style="width: 100%">
		<thead>
			<tr>
				<th>No</th>
				<th>NKK</th>
				<th>Jumlah Anggota Keluarga</th>
				<th>Rata-rata Pendapatan</th>
				<th>Alamat</th>
				<th>Bantuan Beras Sebelumnya</th>
			</tr>
		</thead>
		<tbody align="center">
			<?php 
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi, "SELECT * FROM datakeluargapenerima");
			while ($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nkk']; ?></td>
					<td><?php echo $d['jumlahanggotakeluarga']; ?></td>
					<td><?php echo $d['pendapatankeluarga']; ?></td>
					<td><?php echo $d['alamat']; ?></td>
					<td><?php echo $d['bantuanpemerintah']; ?></td>
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