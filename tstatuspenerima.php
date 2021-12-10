<?php 

// koneksi database
include 'koneksi.php';

// menangkap sebuah data yang dikirim dari form
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

// menginput data ke databasenya
$insert = mysqli_query($koneksi, "insert into statuspenerima value('$nkk', '$namapenerima', '$bantuan1', '$bantuan2', '$bantuan3', '$bantuan4', '$bantuan5', '$bantuan6', '$bantuan7', '$bantuan8', '$bantuan9', '$bantuan10')");

//set session sukses
$_SESSION["sukses"] = 'Data Berhasil Disimpan';

// mengalihkan sebuah halaman kembali
header("location:statuspenerima.php");

 ?>