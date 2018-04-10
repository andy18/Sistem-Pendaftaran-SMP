<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pendaftaran SD</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../css/style.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../css/export.css" type="text/css" media="all" />
    
    <!-- JQuery -->
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    
</head>

<body style="background-image: url('../img/bg.png')">
<!-- Modal Login -->
    <form method="post" name="formLogin">
        <div class="" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-bold">Masuk Admin</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="text" id="defaultForm-email" class="form-control validate" name="username">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Username</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-lock prefix grey-text"></i>
                            <input type="password" id="defaultForm-pass" class="form-control validate" name="password">
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                        </div>

                    </div>
                    <div class=" d-flex justify-content-center">
                        <button type="submit" name="Login" class="btn btn-default">Login</button>
                    </div>
					<div class="modal-footer d-flex justify-content-center">
                        <a href="../index.php" class="btn btn-default">Keluar</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- /Modal Login -->


    
        <!-- Resources -->
    <script src="../js/amcharts.js"></script>
    <script src="../js/serial.js"></script>
    <script src="../js/export.min.js"></script>
    <script src="../js/light.js"></script> 
    
        

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <!-- Custom JavaScript -->
    <script type="text/javascript" src="../js/custom.js"></script>
</body>
<?php
    session_start();
    include ("../config/config.php");
    
    if(isset($_POST['Login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordmd5 = md5($password);
        
        $queryLogin = "SELECT * FROM tabel_admin WHERE tabel_admin_username = '$username' AND tabel_admin_password_md5 = '$passwordmd5'";
        $ambil = mysqli_query($Connection, $queryLogin);
        
        $hitung = mysqli_num_rows($ambil);
        $pecah = mysqli_fetch_array($ambil);
        if($hitung>0){
            $_SESSION['id_tabel_admin'] = $pecah['id_tabel_admin'];
            $_SESSION['tabel_admin_username'] = $pecah['tabel_admin_username'];
            
            echo "<script>alert('Masuk Berhasil');</script>";
            echo "<script>window.location='index.php';</script>";
        }else{
            echo "<script>alert('Masuk Gagal');</script>";
		    echo "<script>window.location='login.php';</script>";
        }
           
    }
?>
</html>

  