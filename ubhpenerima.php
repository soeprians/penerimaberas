<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kodeberas = $_POST['kodeberas'];
$nkk = $_POST['nkk'];
$nik = $_POST['nik'];
$namapenerima = $_POST['namapenerima'];
$telepon = $_POST['telepon'];
$tglpengajuan = $_POST['tglpengajuan'];
$tglpengambilan = $_POST['tglpengambilan'];

// update data ke database
mysqli_query($koneksi, "update penerima set kodeberas='$kodeberas', nkk='$nkk', nik='$nik', namapenerima='$namapenerima', telepon='$telepon', tglpengajuan='$tglpengajuan', tglpengambilan='$tglpengambilan' where nkk='$nkk'");

// mengalihkan halaman kembali ke index.php
header("location:datapenerima.php");

?>