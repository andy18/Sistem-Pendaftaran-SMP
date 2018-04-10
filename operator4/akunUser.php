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
        
        $username = $_GET['username'];
        $password = $_GET['password'];
            
    ?>

    <!-- Grid column -->
    <div class="col-md-12 mb-r">
        <a href="index.php?menu=daftarPendaftar">
            <button type="button" class="btn btn-rounded btn-primary"><i class="fa fa-users pr-2" aria-hidden="true"></i>Lanjut</button>
        </a>
    </div>
    <!-- Grid column -->

    <!--Main Layout-->
    <main class="text-center py-5 mt-3">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
        
<div class="card grey lighten-5">

    <!--Card content-->
    <div class="card-body">            
            <div class="row">
                    <!--First column-->
                    <div class="col-md-2">
                        <div class="md-form">
                            <div align="left">Username </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left">: <?=$username?></div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
            
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            
                        </div>
                    </div>
            </div>
        
            <div class="row">
                    <!--First column-->
                    <div class="col-md-2">
                        <div class="md-form">
                            <div align="left">Password </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left">: <?=$password?></div>
                        </div>
                    </div>

                    <div class="col-md-1">
                        <div class="md-form">
            
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            
                        </div>
                    </div>
            </div>        
    </div>
</div>
            <!--/First row-->
                </div>
            </div>
        </div>
        
    </main>
    <!--Main Layout-->

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

</html>