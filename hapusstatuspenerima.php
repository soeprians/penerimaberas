<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$nkk = $_GET['nkk'];
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


// menghapus data dari database
mysqli_query($koneksi,"delete from statuspenerima where nkk='$nkk'");

// mengalihkan halaman kembali
header("location:statuspenerima.php");

?>