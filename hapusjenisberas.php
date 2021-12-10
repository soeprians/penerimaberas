<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$kodeberas = $_GET['kodeberas'];


// menghapus data dari database
mysqli_query($koneksi,"delete from jenisberas where kodeberas='$kodeberas'");

// mengalihkan halaman kembali
header("location:jenisberas.php");

?>