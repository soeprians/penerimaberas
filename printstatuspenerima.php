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
				<th>Nama Penerima</th>
				<th>Bantuan Beras 1</th>
                   <th>Bantuan Beras 2</th>
                   <th>Bantuan Beras 3</th>
                   <th>Bantuan Beras 4</th>
                   <th>Bantuan Beras 5</th>
                   <th>Bantuan Beras 6</th>
                   <th>Bantuan Beras 7</th>
                   <th>Bantuan Beras 8</th>
                   <th>Bantuan Beras 9</th>
                   <th>Bantuan Beras 10</th>
			</tr>
		</thead>
		<tbody align="center">
			<?php 
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi, "SELECT * FROM statuspenerima");
			while ($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nkk']; ?></td>
					<td><?php echo $d['namapenerima']; ?></td>
					<td><?php echo $d['bantuan1']; ?></td>
                <td><?php echo $d['bantuan2']; ?></td>
                <td><?php echo $d['bantuan3']; ?></td>
                <td><?php echo $d['bantuan4']; ?></td>
                <td><?php echo $d['bantuan5']; ?></td>
                <td><?php echo $d['bantuan6']; ?></td>
                <td><?php echo $d['bantuan7']; ?></td>
                <td><?php echo $d['bantuan8']; ?></td>
                <td><?php echo $d['bantuan9']; ?></td>
                <td><?php echo $d['bantuan10']; ?></td>
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