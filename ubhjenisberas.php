<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kodeberas = $_POST['kodeberas'];
$namaberas = $_POST['namaberas'];
$masakadaluarsa = $_POST['masakadaluarsa'];
$gudangpusat = $_POST['gudangpusat'];
$cabang = $_POST['cabang'];
$fotoberas = $_POST['fotoberas'];

// update data ke database
mysqli_query($koneksi, "update jenisberas set kodeberas='$kodeberas', namaberas='$namaberas', masakadaluarsa='$masakadaluarsa', gudangpusat='$gudangpusat', cabang='$cabang', fotoberas='$fotoberas' where kodeberas='$kodeberas'");

// mengalihkan halaman kembali ke index.php
header("location:jenisberas.php");

?>