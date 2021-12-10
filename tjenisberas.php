<?php 

// koneksi database
include 'koneksi.php';

// menangkap sebuah data yang dikirim dari form
$kodeberas = $_POST['kodeberas'];
$namaberas = $_POST['namaberas'];
$masakadaluarsa = $_POST['masakadaluarsa'];
$gudangpusat = $_POST['gudangpusat'];
$cabang = $_POST['cabang'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:jenisberas.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO jenisberas VALUES('$kodeberas', '$namaberas', '$masakadaluarsa', '$gudangpusat', '$cabang', '$xx')");
		header("location:jenisberas.php?alert=berhasil");
	}else{
		header("location:jenisberas.php?alert=gagal_ukuran");
	}
}