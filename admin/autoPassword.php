<?php
    include("../config/config.php");
    
    $idPendaftar = $_GET['idPendaftar'];
    function acakangkahuruf($panjang)
    {
        $karakter= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
        $string = '';
        for ($i = 0; $i < $panjang; $i++) {
            $pos = rand(0, strlen($karakter)-1);
            $string .= $karakter{$pos};
        }
        return $string;
    }
    //cara memanggilnya
    $username = acakangkahuruf(5);
    $password = acakangkahuruf(7);

    $query1 = "INSERT INTO `tabel_user` (`tabel_user_username`, `tabel_user_password_md5`, `tabel_user_password`, `id_tabel_pendaftar`) VALUES ('$username', md5('$password'), '$password', '$idPendaftar');";

    mysqli_query($Connection, $query1);
    
    header("Location: akunUser.php?username=$username && password=$password");
?>