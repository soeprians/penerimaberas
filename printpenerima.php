<!DOCTYPE html>
<html>
<head>
	<title>Print</title>
</head>
<body>
	
	<center>
		
		<h3>DATA WARGA PENERIMA BERAS</h3>
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
				<th>NKK</th>
				<th>NIK</th>
				<th>Nama Penerima</th>
				<th>Telepon</th>
				<th>Tanggal Pengajuan</th>
				<th>Tanggal Pengambilan</th>
			</tr>
		</thead>
		<tbody align="center">
			<?php 
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi, "SELECT * FROM penerima");
			while ($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['kodeberas']; ?></td>
					<td><?php echo $d['nkk']; ?></td>
					<td><?php echo $d['nik']; ?></td>
					<td><?php echo $d['namapenerima']; ?></td>
					<td><?php echo $d['telepon']; ?></td>
					<td><?php echo $d['tglpengajuan']; ?></td>
					<td><?php echo $d['tglpengambilan']; ?></td>
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