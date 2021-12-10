<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kodeberas = $_POST['kodeberas'];
$besaranberas = $_POST['besaranberas'];
$kualitas = $_POST['kualitas'];
$gudangpenyalur = $_POST['gudangpenyalur'];
$stokberas = $_POST['stokberas'];

// update data ke database
mysqli_query($koneksi, "update databeras set kodeberas='$kodeberas', besaranberas='$besaranberas', kualitas='$kualitas', gudangpenyalur='$gudangpenyalur', stokberas='$stokberas' where kodeberas='$kodeberas'");

// mengalihkan halaman kembali ke index.php
header("location:databeras.php");

?>