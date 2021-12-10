<?php 

// koneksi database
include 'koneksi.php';

// menangkap sebuah data yang dikirim dari form
$kodeberas = $_POST['kodeberas'];
$nkk = $_POST['nkk'];
$nik = $_POST['nik'];
$namapenerima = $_POST['namapenerima'];
$telepon = $_POST['telepon'];
$tglpengajuan = $_POST['tglpengajuan'];
$tglpengambilan = $_POST['tglpengambilan'];

// menginput data ke databasenya
$insert = mysqli_query($koneksi, "insert into penerima value('$kodeberas', '$nkk', '$nik', '$namapenerima', '$telepon', '$tglpengajuan', '$tglpengambilan')");

//set session sukses
$_SESSION["sukses"] = 'Data Berhasil Disimpan';

// mengalihkan sebuah halaman kembali
header("location:datapenerima.php");

 ?>