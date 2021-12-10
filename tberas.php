<?php 

// koneksi database
include 'koneksi.php';

// menangkap sebuah data yang dikirim dari form
$kodeberas = $_POST['kodeberas'];
$besaranberas = $_POST['besaranberas'];
$kualitas = $_POST['kualitas'];
$gudangpenyalur = $_POST['gudangpenyalur'];
$stokberas = $_POST['stokberas'];

// menginput data ke databasenya
$insert = mysqli_query($koneksi, "insert into databeras value('$kodeberas', '$besaranberas', '$kualitas', '$gudangpenyalur', '$stokberas')");

//set session sukses
$_SESSION["sukses"] = 'Data Berhasil Disimpan';

// mengalihkan sebuah halaman kembali
header("location:databeras.php");

?>