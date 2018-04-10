<?php
    session_start();
    include ("../config/config.php");
    $tgl=date('Y-m-d');
    
    if ($_POST['Submit']=="Kirim")
    {
        //menginisialisasi data inputan Siswa
        $namaSiswa = $_POST['namaSiswa'];
        $jenisKelaminSiswa = $_POST['jenisKelaminSiswa'];
        $ttlSiswa = $_POST['ttlSiswa'];
        $hobiSiswa = $_POST['hobiSiswa'];
        $nomorKK = $_POST['nomorKK'];
        $alamatSiswa = $_POST['alamatSiswa'];
        
        //menginisialisasi data Ayah
        $namaAyah = $_POST['namaAyah'];
        $ttlAyah = $_POST['ttlAyah'];
        $pekerjaanAyah = $_POST['pekerjaanAyah'];
        $penghasilanAyah = $_POST['penghasilanAyah'];
        $nomorAyah = $_POST['nomorAyah'];
        $alamatAyah = $_POST['alamatAyah'];
        
        //menginisialisasi data Ibu
        $namaIbu = $_POST['namaIbu'];
        $ttlIbu= $_POST['ttlIbu'];
        $pekerjaanIbu = $_POST['pekerjaanIbu'];
        $penghasilanIbu = $_POST['penghasilanIbu'];
        $nomorIbu = $_POST['nomorIbu'];
        $alamatIbu = $_POST['alamatIbu'];
        
        //menginisialisasi data Wali
        $namaWali = $_POST['namaWali'];
        $jenisKelaminWali = $_POST['jenisKelaminWali'];
        $nomorKTPWali = $_POST['nomorKTPWali'];
        $ttlWali = $_POST['ttlWali'];
        $pekerjaanWali = $_POST['pekerjaanWali'];
        $penghasilanWali = $_POST['penghasilanWali'];
        $nomorWali = $_POST['nomorWali'];
        $alamatWali = $_POST['alamatWali'];
        
        //keadaan ketika tidak memakai wali
        if ($namaWali=="" && $nomorKTPWali == "" && $ttlWali ="" && $pekerjaanWali=="" && $penghasilan=="" && $nomorWali=="" && $alamatWali=="" || $jenisKelaminWali=="")
        {
            $namaWali = "-";
            $jenisKelaminWali = "-";
            $nomorKTPWali = "-";
            $ttlWali = "-";
            $pekerjaanWali = "-";
            $penghasilanWali = 0;
            $nomorWali = "-";
            $alamatWali = "-";
            
            //query untuk menginput data Wali
            $query1Ayah = "INSERT INTO `tabel_wali` (`tabel_wali_nomor_ktp`, `tabel_wali_nama`, `tabel_wali_jk`, `tabel_wali_ttl`, `tabel_wali_pekerjaan`, `tabel_wali_penghasilan`, `tabel_wali_nomor_hp`, `tabel_wali_alamat`) VALUES ('$nomorKTPWali', '$namaWali', '$jenisKelaminWali', '$ttlWali', '$pekerjaanWali', '$penghasilanWali', '$nomorWali', '$alamatWali');";

            mysqli_query($Connection, $query1Ayah);
        }
        
        //query untuk menginput data Wali
        $query1 = "INSERT INTO `tabel_wali` (`tabel_wali_nomor_ktp`, `tabel_wali_nama`, `tabel_wali_jk`, `tabel_wali_ttl`, `tabel_wali_pekerjaan`, `tabel_wali_penghasilan`, `tabel_wali_nomor_hp`, `tabel_wali_alamat`) VALUES ('$nomorKTPWali', '$namaWali', '$jenisKelaminWali', '$ttlWali', '$pekerjaanWali', '$penghasilanWali', '$nomorWali', '$alamatWali');";

        mysqli_query($Connection, $query1);
        
        //end
        
        //keadaan ketika tidak memakai orangtua
        
        //input data Ayah
        if ($namaAyah=="" && $ttlAyah ="" && $pekerjaanWali=="" && $penghasilanAyah=="" && $nomorAyah=="" && $alamatAyah=="")
        {
            $namaAyah = "-";
            $ttlAyah = "-";
            $pekerjaanAyah = "-";
            $penghasilanAyah = 0;
            $nomorAyah = "-";
            $alamatAyah = "-";
            
            //query untuk menginput data Ayah
            $query1Ayah = "INSERT INTO `tabel_ayah` (`tabel_ayah_nama`, `tabel_ayah_ttl`, `tabel_ayah_pekerjaan`, `tabel_ayah_penghasilan`, `tabel_ayah_nomor_hp`, `tabel_ayah_alamat`) VALUES ('$namaAyah', '$ttlAyah', '$pekerjaanAyah', '$penghasilanAyah', '$nomorAyah', '$alamatAyah');";

            mysqli_query($Connection, $query1Ayah);
        }
        
       //query untuk menginput data Ayah
        $query2 = "INSERT INTO `tabel_ayah` (`tabel_ayah_nama`, `tabel_ayah_ttl`, `tabel_ayah_pekerjaan`, `tabel_ayah_penghasilan`, `tabel_ayah_nomor_hp`, `tabel_ayah_alamat`) VALUES ('$namaAyah', '$ttlAyah', '$pekerjaanAyah', '$penghasilanAyah', '$nomorAyah', '$alamatAyah');";

        mysqli_query($Connection, $query2);
        
        //input data Ibu
        if ($namaIbu=="" && $ttlIbu ="" && $pekerjaanIbu=="" && $penghasilanIbu=="" && $nomorIbu=="" && $alamatIbu=="")
        {
            $namaIbu = "-";
            $ttlIbu = "-";
            $pekerjaanIbu = "-";
            $penghasilanIbu = 0;
            $nomorIbu = "-";
            $alamatIbu = "-";
            
            //query untuk menginput data Ayah
            $query1Ibu = "INSERT INTO `tabel_ibu` (`tabel_ibu_nama`, `tabel_ibu_ttl`, `tabel_ibu_pekerjaan`, `tabel_ibu_penghasilan`, `tabel_ibu_nomor_hp`, `tabel_ibu_alamat`) VALUES ('$namaIbu', '$ttlIbu', '$pekerjaanIbu', '$penghasilanIbu', '$nomorIbu', '$alamatIbu');";

            mysqli_query($Connection, $query1Ibu);
        }
        
        //query untuk menginput data Ayah
        $query3 = "INSERT INTO `tabel_ibu` (`tabel_ibu_nama`, `tabel_ibu_ttl`, `tabel_ibu_pekerjaan`, `tabel_ibu_penghasilan`, `tabel_ibu_nomor_hp`, `tabel_ibu_alamat`) VALUES ('$namaIbu', '$ttlIbu', '$pekerjaanIbu', '$penghasilanIbu', '$nomorIbu', '$alamatIbu');";

        mysqli_query($Connection, $query3);
        
        //end
        
        //mengambil id Ayah
        $queryTampil1 = "SELECT * FROM tabel_ayah WHERE tabel_ayah_nama = '$namaAyah' AND tabel_ayah_ttl = '$ttlAyah'";

        $eksekusi1 = mysqli_query($Connection, $queryTampil1);
        $data1 = mysqli_fetch_row($eksekusi1);

        $idAyah = $data1[0];
        //end
        
        //mengambil id Ibu
        $queryTampil2 = "SELECT * FROM tabel_ibu WHERE tabel_ibu_nama = '$namaIbu' AND tabel_ibu_ttl = '$ttlIbu'";

        $eksekusi2 = mysqli_query($Connection, $queryTampil2);
        $data2 = mysqli_fetch_row($eksekusi2);

        $idIbu = $data2[0];
        //end
        
        //mengambil id Wali
        $queryTampil3 = "SELECT * FROM tabel_wali WHERE tabel_wali_nama = '$namaWali' AND tabel_wali_ttl = '$ttlWali'";

        $eksekusi3 = mysqli_query($Connection, $queryTampil3);
        $data3 = mysqli_fetch_row($eksekusi3);

        $idWali = $data3[0];
        //end

        //menginput data ke tabel Siswa
        $querySiswa = "INSERT INTO `tabel_siswa` (`tabel_siswa_nama`, `tabel_siswa_nomor_kk`, `tabel_siswa_jk`, `tabel_siswa_ttl`, `tabel_siswa_hobi`, `tabel_siswa_alamat`, `id_tabel_ayah`, `id_tabel_ibu`, `id_tabel_wali`) VALUES ('$namaSiswa', '$nomorKK', '$jenisKelaminSiswa', '$ttlSiswa', '$hobiSiswa', '$alamatSiswa', '$idAyah', '$idIbu', '$idWali')";

        mysqli_query($Connection, $querySiswa); 
        
        $queryTampil4 = "SELECT * FROM tabel_siswa WHERE tabel_siswa_nama = '$namaSiswa' AND tabel_siswa_ttl = '$ttlSiswa'";

        $eksekusi4 = mysqli_query($Connection, $queryTampil4);
        $data4 = mysqli_fetch_row($eksekusi4);

        $idSiswa = $data4[0];
        
        $idOperator = $_SESSION['id_tabel_operator'];
            
        //menginputkan data ke tabel daftar
        $queryPendaftar = "INSERT INTO `tabel_pendaftar` (`id_tabel_siswa`, `id_tabel_operator`, `tabel_pendaftar_tgl`) VALUES ('$idSiswa', '$idOperator', '$tgl')";

        mysqli_query($Connection, $queryPendaftar); 
        
        $queryTampil5 = "SELECT * FROM tabel_pendaftar WHERE id_tabel_siswa = '$idSiswa'";

        $eksekusi5 = mysqli_query($Connection, $queryTampil5);
        $data5 = mysqli_fetch_row($eksekusi5);

        $idPendaftar = $data5[0];
        
        // */
    }
    
    header("location: preview.php?idPendaftar=$data5[0] && idSiswa=$data4[0] && idWali=$data3[0] && idIbu=$data2[0] && idAyah=$data1[0]");
?>