<?php 

// koneksi database
include 'koneksi.php';

// menangkap sebuah data yang dikirim dari form
$nkk = $_POST['nkk'];
$jumlahanggotakeluarga = $_POST['jumlahanggotakeluarga'];
$pendapatankeluarga = $_POST['pendapatankeluarga'];
$alamat = $_POST['alamat'];
$bantuanpemerintah = $_POST['bantuanpemerintah'];
$tglpengambilan = $_POST['tglpengambilan'];

// menginput data ke databasenya
$insert = mysqli_query($koneksi, "insert into datakeluargapenerima value('$nkk', '$jumlahanggotakeluarga', '$pendapatankeluarga', '$alamat', '$bantuanpemerintah')");

//set session sukses
$_SESSION["sukses"] = 'Data Berhasil Disimpan';

// mengalihkan sebuah halaman kembali
header("location:datakeluargapenerima.php");

 ?>