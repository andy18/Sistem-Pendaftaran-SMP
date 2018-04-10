<?php

    include ("config.php");
    $judul="PNS";
    $ket="Orang PNS";
    $tahun=2013;
    $tiga=0;
    $empat=0;
    $lima=0;
    $enam=0;
    $tuju=0;

    while($tahun<=2017)
    {
        $query = "SELECT i.dim_tabel_identitas_nama, i.dim_tabel_identitas_jk, a.dim_tabel_agama_nama, pk.dim_tabel_status_pekerjaan_ket, YEAR(t.dim_tabel_tanggal_tanggal) FROM dim_tabel_identitas i, dim_tabel_agama a, dim_tabel_status_pekerjaan pk, fakta_kependudukan f, dim_tabel_tanggal t WHERE f.id_dim_tabel_identitas = i.id_dim_tabel_identitas AND f.id_dim_tabel_agama = a.id_dim_tabel_agama AND f.id_dim_tabel_status_pekerjaan = pk.id_dim_tabel_status_pekerjaan AND f.id_dim_tabel_tanggal = t.id_dim_tabel_tanggal AND pk.dim_tabel_status_pekerjaan_ket='PNS' AND YEAR(t.dim_tabel_tanggal_tanggal)=$tahun";
        $hasil = mysqli_query($Connect,$query);
        while(mysqli_fetch_row($hasil))
        {
            if($tahun==2013)
            {
                $tiga=$tiga+1;
            }
            else if($tahun==2014)
            {
                $empat=$empat+1;
            }
            else if($tahun==2015)
            {
                $lima=$lima+1;
            }
            else if($tahun==2016)
            {
                $enam=$enam+1;
            }
            else if($tahun==2017)
            {
                $tuju=$tuju+1;
            }
            else
            {
                echo"Kosong";
            }
        }

        $tahun=$tahun+1;

    }

    $persen = $tiga+$empat+$lima+$enam+$tuju;
    $tigap=($tiga*100)/$persen;
    $empatp=($empat*100)/$persen;
    $limap=($lima*100)/$persen;
    $enamp=($enam*100)/$persen;
    $tujup=($tuju*100)/$persen;
?>