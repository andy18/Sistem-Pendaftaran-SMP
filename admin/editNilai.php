<?php
    session_start();
    include ("../config/config.php");
    if ($_POST['Submit']=="Kirim")
    {
        $nilaiMotorik = $_POST['motorik'];
        $nilaiVerbal = $_POST['verbal']; 
        $idVerifikasi = $_POST['idVerifikasi']; 
    }
    
    $rerata=($nilaiMotorik+$nilaiVerbal)/2;
    $ket="";

    echo "<h2>".$nilaiMotorik."</h2>";
    echo "<h2>".$nilaiVerbal."</h2>";
    echo "<h2>".$rerata."</h2>";

    if($rerata>=51){
        $ket="Lulus";
    }if($rerata<=50){
        $ket="Tidak";
    }
    
    $query= "UPDATE tabel_verifikasi SET tabel_verifikasi_nilai_motorik = '$nilaiMotorik', tabel_verifikasi_nilai_verbal = '$nilaiVerbal', tabel_verifikasi_ket = '$ket' WHERE id_tabel_verifikasi = '$idVerifikasi';";

    mysqli_query($Connection, $query);

    header("Location: index.php?menu=daftarNilai");
?>