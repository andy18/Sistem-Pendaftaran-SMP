<?php
    include ("config.php");
    $tgl=date('Y-m-d');
    
    if ($_POST['Submit']=="Kirim")
    {
        //menginisialisasi data inputan
        $nisn = $_POST['nisn'];
        $asalSD = $_POST['asalSD'];
        $namaSiswa = $_POST['namaSiswa'];
        $ttlSiswa = $_POST['ttlSiswa'];
        $alamatSiswa = $_POST['alamatSiswa'];
        $namaAyah = $_POST['namaAyah'];
        $ttlAyah = $_POST['ttlAyah'];
        $pekerjaanAyah = $_POST['pekerjaanAyah'];
        $penghasilanAyah = $_POST['penghasilanAyah'];
        $alamatAyah = $_POST['alamatAyah'];
        //query untuk menginput data
        $query1 = "INSERT INTO tabel_ortu (tabel_ortu_nama,tabel_ortu_ttl, tabel_ortu_pekerjaan, tabel_ortu_penghasilan, tabel_ortu_alamat) VALUES ('$namaAyah', '$ttlAyah', '$pekerjaanAyah', '$penghasilanAyah', '$alamatAyah')";

        mysqli_query($Connection, $query1);

        $queryTampil1 = "SELECT * FROM tabel_ortu WHERE tabel_ortu_ttl = '$ttlAyah'";

        $eksekusi1 = mysqli_query($Connection, $queryTampil1);
        $data1 = mysqli_fetch_row($eksekusi1);

        $idAyah = $data1[0];

        $query2 = "INSERT INTO tabel_siswa (tabel_siswa_nisn, tabel_siswa_nama, tabel_siswa_ttl, tabel_siswa_asal_sd, id_tabel_ortu, tabel_siswa_alamat) VALUES ('$nisn', '$namaSiswa', '$ttlSiswa', '$asalSD', '$idAyah', '$alamatSiswa')";

        mysqli_query($Connection, $query2);
        
        $queryTampil2 = "SELECT * FROM tabel_siswa WHERE tabel_siswa_nisn = '$nisn'";

        $eksekusi2 = mysqli_query($Connection, $queryTampil2);
        $data2 = mysqli_fetch_row($eksekusi2);

        $idSiswa = $data2[0];
        
        $query3 = "INSERT INTO tebel_pendaftar (id_tabel_siswa, tebel_pendaftar_tgl) VALUES ('$idSiswa', '$tgl')";

        mysqli_query($Connection, $query3);
    }
    
    header("location: index.php?menu=pendaftaran");
?>