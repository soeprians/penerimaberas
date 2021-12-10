<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$nkk = $_GET['nkk'];


// menghapus data dari database
mysqli_query($koneksi,"delete from datakeluargapenerima where nkk='$nkk'");

// mengalihkan halaman kembali
header("location:datakeluargapenerima.php");

?>