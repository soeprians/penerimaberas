<?php
//menyertakan file program koneksi.php pada register
require('koneksi.php');
//inisialisasi session
session_start();

$error = '';
$validate = '';

//mengecek apakah sesssion username tersedia atau tidak jika tersedia maka akan diredirect ke halaman index
if( isset($_SESSION['username']) ) header('Location: index.php');

//mengecek apakah form disubmit atau tidak
if( isset($_POST['submit']) ){
   
        // menghilangkan backshlases
    $username = stripslashes($_POST['username']);
        //cara sederhana mengamankan dari sql injection
    $username = mysqli_real_escape_string($koneksi, $username);
         // menghilangkan backshlases
    $password = stripslashes($_POST['password']);
         //cara sederhana mengamankan dari sql injection
    $password = mysqli_real_escape_string($koneksi, $password);
    
        //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
    if(!empty(trim($username)) && !empty(trim($password))){
       
            //select data berdasarkan username dari database
        $query      = "SELECT * FROM akun WHERE username = '$username'";
        $result     = mysqli_query($koneksi, $query);
        $rows       = mysqli_num_rows($result);
        
        if ($rows != 0) {
            $hash   = mysqli_fetch_assoc($result)['password'];
            if(password_verify($password, $hash)){
                $_SESSION['username'] = $username;
                
                header('Location: dashboard.php');
            }
            
            //jika gagal maka akan menampilkan pesan error
        } else {
            $error =  'Register User Gagal !!';
        }
        
    }else {
        $error =  'Data tidak boleh kosong !!';
    }
} 

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Puskesos PMKS</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-secondary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-4 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-dark mb-4">Selamat Datang</h1>
                                    </div>
                                    <form class="user" action="ceklogin.php" method="POST">
                                        <div class="form-group">
                                            <input type="username" name="username" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Masukan Username Anda">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Masukan Password Anda">
                                            <?php if($validate != '') {?>
                                                <p class="text-danger"><?= $validate; ?></p>
                                            <?php }?>
                                        </div>
                                        
                                        <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                                            <i class="fa fa-sign-in-alt"></i>&nbsp;&nbsp;Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>