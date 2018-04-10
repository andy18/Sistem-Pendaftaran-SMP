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

<body>
    <?php
        session_start();
        if(empty($_SESSION['id_tabel_admin']))
        {
            echo "<script>alert('Anda Harus Masuk');</script>";
            echo "<script>window.location='login.php';</script>";
        }
        
        if(! isset ($_GET['Submit']))
        {
            $_GET['Submit']="";
        }
        if(! isset ($_GET['menu']))
        {
            $_GET['menu']="";
        }
        if(! isset ($_GET['menux']))
        {
            $_GET['menux']="";
        }
        if(! isset ($_GET['men']))
        {
            $_GET['men']="";
        }
        if(! isset ($_GET['me']))
        {
            $_GET['me']="";
        }
	
    ?>

    <!-- Start your project here-->
    
    <!--Main Navigation-->
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark black">
            <div class="container">
                <a class="navbar-brand" href="#"><strong>DaftarSMP</strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?menu=pengumuman">Pengumuman & Informasi </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?menu=daftarPendaftar">Daftar Semua Pendaftar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?menu=isiNilai">Isi Nilai</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?menu=daftarNilai">Daftar Nilai</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <!--Main Navigation-->

    <!--Main Layout-->
    <main class="text-center py-5 mt-3">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        include ("../config/config.php");
                        $var=$_GET['menu'];

                        if ($var=="pengumuman")
                        {
                            include("pengumuman.php");
                        }
                        else if($var=="daftarPendaftar")
                        {
                            include("daftarPendaftar.php");
                        }
                        else if($var=="isiNilai")
                        {
                            include("isiNilai.php");
                        }
                        else if($var=="daftarNilai")
                        {
                            include("daftarNilai.php");
                        }
                        else
                        {
                            include("daftarPendaftar.php");
                        }

                    ?>  

                </div>
            </div>
        </div>
        
        
    </main>
    <!--Main Layout-->
                
    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    
   
    
    <!-- Resources -->
    <script src="../js/amcharts.js"></script>
    <script src="../js/serial.js"></script>
    <script src="../js/export.min.js"></script>
    <script src="../js/light.js"></script> 
    
     <script>
        $(document).ready(function(){
            
            $("#formOrangTua").hide();
            $("#formWali").hide();
            
            $("#orangtua").click(function(){
                $("#formOrangTua").show(200);
                $("#formWali").hide();
            });
            $("#wali").click(function(){
                $("#formWali").show(200);
                $("#formOrangTua").hide();
            });
        });
    </script>
        

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <!-- Custom JavaScript -->
    <script type="text/javascript" src="../js/custom.js"></script>
</body>

</html>
