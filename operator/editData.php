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
    //session_start();
    
    include("../config/config.php");
    
    $idSiswa = $_GET['idSiswa'];
    $idAyah = $_GET['idAyah'];
    $idIbu = $_GET['idIbu'];
    $idWali = $_GET['idWali'];
    $idPendaftar = $_GET['idPendaftar'];
    
    $cekL="";
    $cekP="";
    
    $cekLW="";
    $cekPW="";
    
    $querySiswa = "SELECT tabel_siswa_nama, tabel_siswa_nomor_kk, tabel_siswa_jk, tabel_siswa_ttl, tabel_siswa_hobi, tabel_siswa_alamat FROM tabel_siswa WHERE id_tabel_siswa = '$idSiswa'";
    
    $query1 = mysqli_query($Connection, $querySiswa);
    $data1 = mysqli_fetch_row($query1);
    
    if($data1[2]=="L"){
        $cekL="checked";
    }if($data1[2]=="P"){
        $cekP="checked";
    }
    
    $queryAyah = "SELECT tabel_ayah_nama, tabel_ayah_ttl, tabel_ayah_pekerjaan, tabel_ayah_penghasilan, tabel_ayah_nomor_hp, tabel_ayah_alamat FROM tabel_ayah WHERE id_tabel_ayah = '$idAyah'";
    
    $query2 = mysqli_query($Connection, $queryAyah);
    $data2 = mysqli_fetch_row($query2);
    
    $queryIbu = "SELECT tabel_ibu_nama, tabel_ibu_ttl, tabel_ibu_pekerjaan, tabel_ibu_penghasilan, tabel_ibu_nomor_hp, tabel_ibu_alamat FROM tabel_ibu WHERE id_tabel_ibu = '$idIbu'";
    
    $query3 = mysqli_query($Connection, $queryIbu);
    $data3 = mysqli_fetch_row($query3);
    
    $queryWali = "SELECT tabel_wali_nomor_ktp, tabel_wali_nama, tabel_wali_jk, tabel_wali_ttl, tabel_wali_pekerjaan, tabel_wali_penghasilan, tabel_wali_nomor_hp, tabel_wali_alamat FROM tabel_wali WHERE id_tabel_wali = '$idWali'";
    
    $query4 = mysqli_query($Connection, $queryWali);
    $data4 = mysqli_fetch_row($query4);
    
    if($data4[2]=="L"){
        $cekLW="checked";
    }if($data4[2]=="P"){
        $cekPW="checked";
    }
    
?>
    
                <!-- Grid column -->
            <div class="col-md-12 mb-r">
                <a href="index.php?menu=daftarPendaftar">
                    <button type="button" class="btn btn-rounded btn-primary"><i class="fa fa-users pr-2" aria-hidden="true"></i>Kembali</button>
                </a>
            </div>
            <!-- Grid column -->

    <!--Main Layout-->
    <main class="text-center py-5 mt-3">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
               
<!--Card-->
<div class="card grey lighten-5">

    <!--Card content-->
    <div class="card-body">
        <!--Title-->
        <h3 class="card-title">FORM PENDAFTARAN SD </h3>
        <hr>
        <form method="POST" name="kirim-data" action="kirimEdit.php?idSiswa=<?=$idSiswa?> && idAyah=<?=$idAyah?> && idIbu=<?=$idIbu?> && idWali=<?=$idWali?>">
             
            <h4>Data Siswa Pendaftar</h4>
            <hr>
            <!--First row-->
            <div class="row">
                <!--First column-->
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="text" id="form41" class="form-control" name="namaSiswa" value="<?=$data1[0]?>">
                        <label for="form41" class="">Nama</label>
                    </div>
                </div>

                <!--Second column-->
                <div class="form-inline">
                    <div class="form-group">
                        <input name="jenisKelaminSiswa" type="radio" id="radio120" value="L" <?=$cekL?>>
                        <label for="radio120">Laki - Laki</label>
                    </div>

                    <div class="form-group">
                        <input name="jenisKelaminSiswa" type="radio" id="radio121" value="P" <?=$cekP?>>
                        <label for="radio121">Perempuan</label>
                    </div>
                </div>
            </div>
            <!--/First row-->
            
            <!--Second row-->
            <div class="row">
                
                <!--First column-->
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="text" id="form41" class="form-control" name="ttlSiswa" value="<?=$data1[3]?>">
                        <label for="form41" class="">Tempat, Tanggal Lahir (Tempat, Tanggal-Bulan-Tahun)</label>
                    </div>
                </div>
                
                <!--Second column-->
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="text" id="form41" class="form-control" name="hobiSiswa" value="<?=$data1[4]?>">
                        <label for="form41" class="">Hobi/Kegemaran</label>
                    </div>
                </div>
            
            </div>
            <!--/Second row-->
            
            <!--Third row-->
            <div class="row">

                <!--First column-->
                <div class="col-md-12">
                    <div class="md-form">
                        <input type="text" id="form41" class="form-control" name="nomorKK" value="<?=$data1[1]?>">
                        <label for="form41" class="">Nomor Kartu Keluarga</label>
                    </div>
                </div>

            </div>
            <!--/Third row-->

            <!--Third row-->
            <div class="row">
                <!--First column-->
                <div class="col-md-12">

                    <div class="md-form">
                        <textarea type="text" id="form76" class="md-textarea" name="alamatSiswa"><?=$data1[5]?></textarea>
                        <label for="form76">Alamat</label>
                    </div>

                </div>
            </div>
            <!--/Third row-->
            <hr>
                <div class="col-md-12 mb-r">
                    <button id="orangtua" type="button" name="Submit" value="Kirim" class="btn btn-rounded btn-primary"><i class="fa fa-users pr-2" aria-hidden="true"></i>Data Orangtua Siswa</button>
                    <button id="wali" type="button" name="Submit" value="Kirim" class="btn btn-rounded btn-primary"><i class="fa fa-users pr-2" aria-hidden="true"></i>Data Wali Siswa</button>
                </div>
            <hr>
            
            <!--Form Data Orangtua Siswa-->
            <div id="formOrangTua">
                <h4>Data Orangtua Siswa Pendaftar</h4>
                <hr>
                
                <!--Data Ayah-->
                <h5 align="left">A. Data Ayah</h5>
                <hr>
                <!--First row-->
                <div class="row">
                    <!--First column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="form41" class="form-control" name="namaAyah" value="<?=$data2[0]?>">
                            <label for="form41" class="">Nama Ayah</label>
                        </div>
                    </div>

                    <!--Second column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="form41" class="form-control" name="ttlAyah" value="<?=$data2[1]?>">
                            <label for="form41" class="">Tempat, Tanggal Lahir (Tempat,Tanggal-Bulan-Tahun)</label>
                        </div>
                    </div>
                </div>
                <!--/.First row-->

                <!--Second row-->
                <div class="row">

                    <!--First column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" id="form41" class="form-control" name="pekerjaanAyah" value="<?=$data2[2]?>">
                            <label for="form41" class="">Pekerjaan Ayah</label>
                        </div>
                    </div>

                    <!--Second column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" id="form51" class="form-control" name="penghasilanAyah" value="<?=$data2[3]?>">
                            <label for="form51" class="">Penghasilan Perbulan</label>
                        </div>
                    </div>
                    
                    <!--Third column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" id="form51" class="form-control" name="nomorAyah" value="<?=$data2[4]?>">
                            <label for="form51" class="">Nomor HP/Telephone</label>
                        </div>
                    </div>

                </div>
                <!--/Second row.-->

                <!--Third row-->
                <div class="row">
                    <!--First column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="form76" class="md-textarea" name="alamatAyah"><?=$data2[5]?></textarea>
                            <label for="form76">Alamat Ayah</label>
                        </div>

                    </div>
                </div>
                <!--/Third row-->
                <!--Data Ayah-->
                
                <!--Data Ibu-->
                <h5 align="left">A. Data Ibu</h5>
                <hr>
                <!--First row-->
                <div class="row">
                    <!--First column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="form41" class="form-control" name="namaIbu" value="<?=$data3[0]?>">
                            <label for="form41" class="">Nama Ibu</label>
                        </div>
                    </div>

                    <!--Second column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="form41" class="form-control" name="ttlIbu" value="<?=$data3[1]?>">
                            <label for="form41" class="">Tempat, Tanggal Lahir (Tempat,Tanggal-Bulan-Tahun)</label>
                        </div>
                    </div>
                </div>
                <!--/.First row-->

                <!--Second row-->
                <div class="row">

                    <!--First column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" id="form41" class="form-control" name="pekerjaanIbu" value="<?=$data3[2]?>">
                            <label for="form41" class="">Pekerjaan Ibu</label>
                        </div>
                    </div>

                    <!--Second column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" id="form51" class="form-control" name="penghasilanIbu" value="<?=$data3[3]?>">
                            <label for="form51" class="">Penghasilan Perbulan</label>
                        </div>
                    </div>
                    
                    <!--Third column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" id="form51" class="form-control" name="nomorIbu" value="<?=$data3[4]?>">
                            <label for="form51" class="">Nomor HP/Telephone</label>
                        </div>
                    </div>

                </div>
                <!--/Second row.-->

                <!--Third row-->
                <div class="row">
                    <!--First column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="form76" class="md-textarea" name="alamatIbu"><?=$data3[5]?></textarea>
                            <label for="form76">Alamat Ibu</label>
                        </div>

                    </div>
                </div>
                <!--/Third row-->
                <!--Data Ibu-->
                
            </div>
            <!--/Form Data Orangtua Siswa-->
            
            <!--Form Data Wali Siswa-->
            <div id="formWali">
                <h4>Data Wali Siswa Pendaftar</h4>
                <hr>
                
                <!--First row-->
                <div class="row">
                    <!--First column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="form41" class="form-control" name="namaWali" value="<?=$data4[1]?>">
                            <label for="form41" class="">Nama Wali</label>
                        </div>
                    </div>
                    
                    <!--Second column-->
                    <div class="form-inline">
                        <div class="form-group">
                            <input name="jenisKelaminWali" type="radio" id="radio120" value="L" <?=$cekLW?>>
                            <label for="radio120">Laki - Laki</label>
                        </div>

                        <div class="form-group">
                            <input name="jenisKelaminWali" type="radio" id="radio121" value="P" <?=$cekPW?>>
                            <label for="radio121">Perempuan</label>
                        </div>
                    </div>
                </div>
                <!--/.First row-->
                
                 <!--Second row-->
                <div class="row">

                    <!--First column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="form41" class="form-control" name="nomorKTPWali" value="<?=$data4[0]?>">
                            <label for="form41" class="">Nomor KTP Wali</label>
                        </div>
                    </div>

                    <!--Second column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="form41" class="form-control" name="ttlWali" <?=$data4[3]?>>
                            <label for="form41" class="">Tempat, Tanggal Lahir (Tempat, Tanggal-Bulan-Tahun)</label>
                        </div>
                    </div>

                </div>
                <!--/Second row-->

                <!--Third row-->
                <div class="row">

                    <!--First column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" id="form41" class="form-control" name="pekerjaanWali" value="<?=$data4[4]?>">
                            <label for="form41" class="">Pekerjaan</label>
                        </div>
                    </div>

                    <!--Second column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" id="form51" class="form-control" name="penghasilanWali" value="<?=$data4[5]?>">
                            <label for="form51" class="">Penghasilan Perbulan</label>
                        </div>
                    </div>
                    
                    <!--Third column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" id="form51" class="form-control" name="nomorWali" value="<?=$data4[6]?>">
                            <label for="form51" class="">Nomor HP/Telephone</label>
                        </div>
                    </div>

                </div>
                <!--/Third row.-->

                <!--Fourth row-->
                <div class="row">
                    <!--First column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="form76" class="md-textarea" name="alamatWali"><?=$data4[7]?></textarea>
                            <label for="form76">Alamat</label>
                        </div>

                    </div>
                </div>
                <!--/Fourth row-->
                
            </div>
            <!--/Form Data Wali Siswa-->

            <!-- Grid column -->
            <div class="col-md-12 mb-r">
                <button type="submit" name="Submit" value="Kirim" class="btn btn-rounded btn-primary"><i class="fa fa-users pr-2" aria-hidden="true"></i>Kirim Data</button>
            </div>
            <!-- Grid column -->

        </form>
    </div>

</div>
<!--/.Card-->

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

