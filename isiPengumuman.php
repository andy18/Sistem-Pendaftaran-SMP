<?php
    include ("config.php");

    $query = "SELECT p.tabel_pengumuman_judul, p.tabel_pengumuman_isi, a.tabel_admin_user, p.tabel_pengumuman_tgl FROM tabel_pengumuman p, tabel_admin a WHERE p.id_tabel_admin = a.id_tabel_admin";
    $hasil = mysqli_query($Connection,$query);
    $data = mysqli_fetch_row($hasil);
?>



<!--Card-->
<div class="card card-cascade wider reverse my-4">

    <!--Card image-->
    <div class="view overlay hm-white-slight">
        <img src="img/banner.png" class="img-fluid">
        <a href="#!">
            <div class="mask"></div>
        </a>
    </div>
    <!--/Card image-->

    <!--Card content-->
    <div class="card-body text-center">
        <!--Title-->
        <h4 class="card-title"><strong><?=$data[0] ?></strong></h4>

        <p class="card-text"><?=$data[1] ?></p>

    </div>
    <!--/.Card content-->

</div>
<!--/.Card-->
        