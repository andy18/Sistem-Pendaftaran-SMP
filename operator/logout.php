<?php
    session_start();
    unset($_SESSION['id_tabel_operator']);
    echo "<script>alert('KeluarBerhasil');</script>";
    echo "<script>window.location='login.php';</script>";
?>