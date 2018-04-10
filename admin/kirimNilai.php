<?php
    session_start();
    include ("../config/config.php");
    $tgl=date('Y-m-d');
    $idAdmin = $_SESSION['id_tabel_admin'];

    if ($_POST['Submit']=="Kirim")
    {
        $nilaiMotorik = $_POST['motorik'];
        $nilaiVerbal = $_POST['verbal']; 
        $idPendaftar = $_POST['idPendaftar']; 
    }
    
    $rerata=($nilaiMotorik+$nilaiVerbal)/2;
    $ket="";

    echo "<h2>".$idAdmin."</h2>";
    echo "<h2>".$rerata."</h2>";
    
    if($rerata>=51){
        $ket="Lulus";
    }if($rerata<=50){
        $ket="Tidak";
    }
    
    $query = "INSERT INTO `tabel_verifikasi` (`tabel_verifikasi_nilai_motorik`, `tabel_verifikasi_nilai_verbal`, `tabel_verifikasi_ket`, `id_tabel_pendaftar`, `id_tabel_admin`, `tabel_verifikasi_tgl`) VALUES ($nilaiMotorik, $nilaiVerbal, '$ket', $idPendaftar, $idAdmin, '$tgl')";

    mysqli_query($Connection, $query);

    $query2 = "UPDATE tabel_pendaftar SET tabel_pendaftar_cek = 'cek' WHERE id_tabel_pendaftar = '$idPendaftar'";

    mysqli_query($Connection, $query2);
    
    header("Location: index.php?menu=isiNilai");
?>