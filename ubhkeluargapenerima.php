<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nkk = $_POST['nkk'];
$jumlahanggotakeluarga = $_POST['jumlahanggotakeluarga'];
$pendapatankeluarga = $_POST['pendapatankeluarga'];
$alamat = $_POST['alamat'];
$bantuanpemerintah = $_POST['bantuanpemerintah'];

// update data ke database
mysqli_query($koneksi, "update datakeluargapenerima set nkk='$nkk', jumlahanggotakeluarga='$jumlahanggotakeluarga', pendapatankeluarga='$pendapatankeluarga', alamat='$alamat', bantuanpemerintah='$bantuanpemerintah' where nkk='$nkk'");

// mengalihkan halaman kembali ke index.php
header("location:datakeluargapenerima.php");

?>