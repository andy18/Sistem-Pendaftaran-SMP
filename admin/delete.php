<?php
    include("../config/config.php");
    
    $idSiswa = $_GET['idSiswa'];
    $idAyah = $_GET['idAyah'];
    $idIbu = $_GET['idIbu'];
    $idWali = $_GET['idWali'];
    $idPendaftar = $_GET['idPendaftar'];
    
    $queryUser = "DELETE FROM tabel_user WHERE id_tabel_pendaftar = '$idPendaftar'";
    mysqli_query($Connection, $queryUser);

    $queryPendaftar = "DELETE FROM tabel_pendaftar WHERE id_tabel_pendaftar = '$idPendaftar'";
    mysqli_query($Connection, $queryPendaftar);

    $querySiswa = "DELETE FROM tabel_siswa WHERE id_tabel_siswa = '$idSiswa'";
    mysqli_query($Connection, $querySiswa);

    $queryAyah = "DELETE FROM tabel_ayah WHERE id_tabel_ayah = '$idAyah'";
    mysqli_query($Connection, $queryAyah);
    
    $queryIbu = "DELETE FROM tabel_ibu WHERE id_tabel_ibu = '$idIbu'";
    mysqli_query($Connection, $queryIbu);

    $queryWali = "DELETE FROM tabel_wali WHERE id_tabel_wali = '$idWali'";
    mysqli_query($Connection, $queryWali);
    
    header("Location: index.php?menu=daftarPendaftar");
    
    
?>