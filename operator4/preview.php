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
        include ("../config/config.php");
        $idSiswa = $_GET['idSiswa'];
        $idAyah = $_GET['idAyah'];
        $idIbu = $_GET['idIbu'];
        $idWali = $_GET['idWali'];
        $idPendaftar = $_GET['idPendaftar'];
        
        $queryTampil1 = "SELECT * FROM `tabel_siswa` WHERE id_tabel_siswa= '$idSiswa'";

        $eksekusi1 = mysqli_query($Connection, $queryTampil1);
        $data1 = mysqli_fetch_array($eksekusi1);
		
		if($idAyah != null)
		{
			$queryTampil2 = "SELECT * FROM `tabel_ayah` WHERE id_tabel_siswa= '$idAyah'";

			$eksekusi2 = mysqli_query($Connection, $queryTampil2);
			$data2 = mysqli_fetch_array($eksekusi2);
		}
        
    
        $queryTampil3 = "SELECT * FROM `tabel_ibu` WHERE id_tabel_ibu= '$idIbu'";

        $eksekusi3 = mysqli_query($Connection, $queryTampil3);
        $data3 = mysqli_fetch_array($eksekusi3);
    
        $queryTampil4 = "SELECT * FROM `tabel_wali` WHERE id_tabel_siswa= '$idWali'";

        $eksekusi4 = mysqli_query($Connection, $queryTampil4);
        $data4 = mysqli_fetch_array($eksekusi4);
    
    ?>

    <!-- Grid column -->
    <div class="col-md-12 mb-r">
        <a href="autoPassword.php?idPendaftar=<?=$idPendaftar?>">
            <button type="button" class="btn btn-rounded btn-primary"><i class="fa fa-users pr-2" aria-hidden="true"></i>Buat Username dan Password</button>
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
                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left"><h3>A. Data Siswa</h3></div>
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

                    <div class="col-md-3">
                        <div class="md-form">
                            
                        </div>
                    </div>
            </div>
        
            <div class="row">
                    <!--First column-->
                    <div class="col-md-2">
                        <div class="md-form">
                            <div align="left">Nama </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left">: <?=$data1['tabel_siswa_nama']?></div>
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
                            <div align="left">Jenis Kelamin </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left">: <?=$data1['tabel_siswa_jk']?></div>
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
                            <div align="left">Tempat, Tanggal Lahir </div>
                        </div>
                    </div>

                    <div class="col-md-1">
                        <div class="md-form">
                            <div align="left">: <?=$data1['tabel_siswa_ttl']?></div>
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
                            <div align="left">Nomor Kartu Keluarga </div>
                        </div>
                    </div>

                    <div class="col-md-1">
                        <div class="md-form">
                            <div align="left">: <?=$data1['tabel_siswa_nomor_kk']?></div>
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
                            <div align="left">Hobi </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left">: <?=$data1['tabel_siswa_hobi']?></div>
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
                            <div align="left">Alamat </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left">: <?=$data1['tabel_siswa_alamat']?></div>
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
            <hr>
            <div class="row">
                <!--First column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <div align="left"><h3>B. Data Orangtua Siswa</h3></div>
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

                    <div class="col-md-1">
                        <div class="md-form">
                            
                        </div>
                    </div>
            </div>
        
            <div class="row">
                <!--First column-->
                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left"><h4>1. Data Ayah Siswa</h4></div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left"><h4>2. Data Ibu Siswa</h4></div>
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
                            <div align="left">Nama Ayah</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left">: <?=$data2['tabel_ayah_nama']?></div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="md-form">
                            
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form">
                            <div align="left">Nama Ibu</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left">: <?=$data3['tabel_ibu_nama']?></div>
                        </div>
                    </div>
            </div>
            
            <div class="row">
                    <!--First column-->
                    <div class="col-md-2">
                        <div class="md-form">
                            <div align="left">Tempat, Tanggal Lahir</div>
                        </div>
                    </div>

                    <div class="col-md-1">
                        <div class="md-form">
                            <div align="left">: <?=$data2['tabel_ayah_ttl']?></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-form">
                            
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form">
                            <div align="left">Tempat Tanggal Lahir</div>
                        </div>
                    </div>

                    <div class="col-md-1">
                        <div class="md-form">
                            <div align="left">: <?=$data3['tabel_ibu_ttl']?></div>
                        </div>
                    </div>
            </div>
            
            <div class="row">
                    <!--First column-->
                    <div class="col-md-2">
                        <div class="md-form">
                            <div align="left">Pekerjaan</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left">: <?=$data2['tabel_ayah_pekerjaan']?></div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="md-form">
                            
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form">
                            <div align="left">Pekerjaan</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left">: <?=$data3['tabel_ibu_pekerjaan']?></div>
                        </div>
                    </div>
            </div>
            
            <div class="row">
                    <!--First column-->
                    <div class="col-md-2">
                        <div class="md-form">
                            <div align="left">Penghasilan</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left">: Rp. <?=$data2['tabel_ayah_penghasilan']?></div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="md-form">
                            
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form">
                            <div align="left">Penghasilan</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left">: Rp. <?=$data3['tabel_ibu_penghasilan']?></div>
                        </div>
                    </div>
            </div>
            
            <div class="row">
                    <!--First column-->
                    <div class="col-md-2">
                        <div class="md-form">
                            <div align="left">Nomor Hp</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left">: <?=$data2['tabel_ayah_nomor_hp']?></div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="md-form">
                            
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form">
                            <div align="left">Nomor Hp</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left">: <?=$data3['tabel_ibu_nomor_hp']?></div>
                        </div>
                    </div>
            </div>
            
            <div class="row">
                    <!--First column-->
                    <div class="col-md-2">
                        <div class="md-form">
                            <div align="left">Alamat</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left">: <?=$data2['tabel_ayah_alamat']?></div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="md-form">
                            
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form">
                            <div align="left">Alamat</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left" align="left">: <?=$data3['tabel_ibu_alamat']?></div>
                        </div>
                    </div>
            </div>
            
            <hr>
            <div class="row">
                <!--First column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <div align="left"><h3>C. Data Wali Siswa</h3></div>
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

                    <div class="col-md-1">
                        <div class="md-form">
                            
                        </div>
                    </div>
            </div>
        
            <div class="row">
                    <!--First column-->
                    <div class="col-md-2">
                        <div class="md-form">
                            <div align="left">Nama Wali</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left" align="left">: <?=$data4['tabel_wali_nama']?></div>
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
                            <div align="left">Jenis Kelamin </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left" align="left">: <?=$data4['tabel_wali_jk']?></div>
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
                        <div class="md-form ">
                            <div align="left">Tempat, Tanggal Lahir</div>
                        </div>
                    </div>

                    <div class="col-md-1">
                        <div class="md-form">
                            <div align="left" align="left">: <?=$data4['tabel_wali_ttl']?></div>
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
                            <div align="left">Nomor KTP </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left" align="left">: <?=$data4['tabel_wali_nomor_ktp']?></div>
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
                            <div align="left">Pekerjaan </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left" align="left">: <?=$data4['tabel_wali_pekerjaan']?></div>
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
                            <div align="left">Penghasilan</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left" align="left" align="left">: <?=$data4['tabel_wali_penghasilan']?></div>
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
                            <div align="left">Nomor Hp </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left" align="left">: <?=$data4['tabel_wali_nomor_hp']?></div>
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
                            <div align="left">Alamat </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form">
                            <div align="left" align="left">: <?=$data4['tabel_wali_alamat']?></div>
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