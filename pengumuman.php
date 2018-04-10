<br><br>                           
<?php

    include ("config.php");
    $var=$_GET['menux'];

    if ($var=="daftar")
    {
        include("daftar.php");
    }
    else
    {
        include("isiPengumuman.php");
    }
?>

<!-- Grid column -->
<div class="col-md-12 mb-r">
    <a href="index.php?menux=daftar&&menu=pendaftaran"><button type="button" class="btn btn-rounded btn-primary"><i class="fa fa-users pr-2" aria-hidden="true"></i>Daftar Sekarang</button></a>
</div>
<!-- Grid column -->