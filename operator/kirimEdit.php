<?php
    session_start();
    include ("../config/config.php");
    $tgl=date('Y-m-d');
    
    if ($_POST['Submit']=="Kirim")
    {
        $idSiswa = $_GET['idSiswa'];
        $idAyah = $_GET['idAyah'];
        $idIbu = $_GET['idIbu'];
        $idWali = $_GET['idWali'];
        
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
        
        echo"<h2>".$jenisKelaminWali."</h2>";
        
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
            
            //query untuk mengupdate data Wali
            $query1Wali = "UPDATE tabel_wali SET tabel_wali_nomor_ktp = '$nomorKTPWali', tabel_wali_nama = '$namaWali', tabel_wali_jk = '$jenisKelaminWali', tabel_wali_ttl = '$ttlWali', tabel_wali_pekerjaan = '$pekerjaanWali', tabel_wali_penghasilan = '$penghasilanWali', tabel_wali_nomor_hp = '$nomorWali', tabel_wali_alamat = '$alamatWali' WHERE id_tabel_wali = '$idWali'";

            mysqli_query($Connection, $query1Wali);
        }
        
        //query untuk menupdate data Wali
        $query1 = "UPDATE tabel_wali SET tabel_wali_nomor_ktp = '$nomorKTPWali', tabel_wali_nama = '$namaWali', tabel_wali_jk = '$jenisKelaminWali', tabel_wali_ttl = '$ttlWali', tabel_wali_pekerjaan = '$pekerjaanWali', tabel_wali_penghasilan = '$penghasilanWali', tabel_wali_nomor_hp = '$nomorWali', tabel_wali_alamat = '$alamatWali' WHERE id_tabel_wali = '$idWali'";

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
            
            //query untuk mengupdate data Ayah
            $query1Ayah = "UPDATE tabel_ayah SET tabel_ayah_nama = '$namaAyah', tabel_ayah_ttl = '$ttlAyah', tabel_ayah_pekerjaan = '$pekerjaanAyah', tabel_ayah_penghasilan = '$penghasilanAyah', tabel_ayah_nomor_hp = '$nomorAyah', tabel_ayah_alamat = '$alamatWali' WHERE id_tabel_ayah = '$idAyah'";

            mysqli_query($Connection, $query1Ayah);
        }
        
       //query untuk mengupdate data Ayah
        $query2 = "UPDATE tabel_ayah SET tabel_ayah_nama = '$namaAyah', tabel_ayah_ttl = '$ttlAyah', tabel_ayah_pekerjaan = '$pekerjaanAyah', tabel_ayah_penghasilan = '$penghasilanAyah', tabel_ayah_nomor_hp = '$nomorAyah', tabel_ayah_alamat = '$alamatAyah' WHERE id_tabel_ayah = '$idAyah'";

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
            
            //query untuk mengupdate data Ayah
            $query1Ibu = "UPDATE tabel_ibu SET tabel_ibu_nama = '$namaIbu', tabel_ibu_ttl = '$ttlIbu', tabel_ibu_pekerjaan = '$pekerjaanIbu', tabel_ibu_penghasilan = '$penghasilanIbu', tabel_ibu_nomor_hp = '$nomorIbu', tabel_ibu_alamat = '$alamatIbu' WHERE id_tabel_ibu = '$idIbu';";

            mysqli_query($Connection, $query1Ibu);
        }
        
        //query untuk mengupdate data Ayah
        $query3 = "UPDATE tabel_ibu SET tabel_ibu_nama = '$namaIbu', tabel_ibu_ttl = '$ttlIbu', tabel_ibu_pekerjaan = '$pekerjaanIbu', tabel_ibu_penghasilan = '$penghasilanIbu', tabel_ibu_nomor_hp = '$nomorIbu', tabel_ibu_alamat = '$alamatIbu' WHERE id_tabel_ibu = '$idIbu'";

        mysqli_query($Connection, $query3);
        
        //end
        
        //mengupdate data ke tabel Siswa
        $querySiswa = "UPDATE tabel_siswa SET tabel_siswa_nama = '$namaSiswa', tabel_siswa_nomor_kk = '$nomorKK', tabel_siswa_jk = '$jenisKelaminSiswa', tabel_siswa_ttl = '$ttlSiswa', tabel_siswa_hobi = '$hobiSiswa', tabel_siswa_alamat = '$alamatSiswa' WHERE id_tabel_siswa = '$idSiswa'";

        mysqli_query($Connection, $querySiswa);             
        
        // */
    }
    
   header("location: index.php?menu=daftarPendaftar");
?>