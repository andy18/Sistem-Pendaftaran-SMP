<?php

    include ("config.php");
    $judul="MENIKAH";
    $ket="Orang Menikah";
    $tahun=2013;
    $tiga=0;
    $empat=0;
    $lima=0;
    $enam=0;
    $tuju=0;

    while($tahun<=2017)
    {
        $query = "SELECT i.dim_tabel_identitas_nama, i.dim_tabel_identitas_jk, a.dim_tabel_agama_nama, pr.dim_tabel_status_pernikahan_ket, YEAR(t.dim_tabel_tanggal_tanggal) FROM dim_tabel_identitas i, dim_tabel_agama a, dim_tabel_status_pernikahan pr, fakta_kependudukan f, dim_tabel_tanggal t WHERE f.id_dim_tabel_identitas = i.id_dim_tabel_identitas AND f.id_dim_tabel_agama = a.id_dim_tabel_agama AND f.id_dim_tabel_status_pernikahan = pr.id_dim_tabel_status_pernikahan AND f.id_dim_tabel_tanggal = t.id_dim_tabel_tanggal AND pr.dim_tabel_status_pernikahan_ket='Menikah' AND YEAR(t.dim_tabel_tanggal_tanggal)=$tahun";
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

?>