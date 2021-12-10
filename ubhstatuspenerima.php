<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nkk = $_POST['nkk'];
$namapenerima = $_POST['namapenerima'];
$bantuan1 = $_POST['bantuan1'];
$bantuan2 = $_POST['bantuan2'];
$bantuan3 = $_POST['bantuan3'];
$bantuan4 = $_POST['bantuan4'];
$bantuan5 = $_POST['bantuan5'];
$bantuan6 = $_POST['bantuan6'];
$bantuan7 = $_POST['bantuan7'];
$bantuan8 = $_POST['bantuan8'];
$bantuan9 = $_POST['bantuan9'];
$bantuan10 = $_POST['bantuan10'];

// update data ke database
mysqli_query($koneksi, "update statuspenerima set nkk='$nkk', namapenerima='$namapenerima', bantuan1='$bantuan1', bantuan2='$bantuan2', bantuan3='$bantuan3', bantuan4='$bantuan4', bantuan5='$bantuan5', bantuan6='$bantuan6',bantuan7='$bantuan7',bantuan8='$bantuan8',bantuan9='$bantuan9',bantuan10='$bantuan10' where nkk='$nkk'");

// mengalihkan halaman kembali ke index.php
header("location:statuspenerima.php");

?>