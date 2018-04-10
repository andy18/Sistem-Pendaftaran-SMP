<br><br><br>                                
<!-- Grid column -->
<div class="col-md-12 mb-r">
    <a href="index.php?men=menikah&&menu=pernikahan"><button type="button" class="btn btn-rounded btn-amber"><i class="fa fa-users pr-2" aria-hidden="true"></i>Menikah</button></a>
    <a href="index.php?men=cerai&&menu=pernikahan"><button type="button" class="btn btn-rounded btn-brown"><i class="fa fa-users  pr-2" aria-hidden="true"></i>Bercerai/Meninggal</button></a>
    <a href="index.php?men=belum&&menu=pernikahan"><button type="button" class="btn btn-rounded btn-mdb"><i class="fa fa-users pr-2" aria-hidden="true"></i>Belum Menikah</button></a>
</div>
<!-- Grid column -->

<?php

    include ("config.php");
    $var=$_GET['men'];

    if ($var=="menikah")
    {
        include("menikah.php");
    }
    else if($var=="cerai")
    {
        include("cerai.php");
    }
    else if($var=="belum")
    {
        include("belum.php");
    }
    else
    {
        include("menikah.php");
    }

?>

<h1><?=$judul ?></h1>
<!-- HTML -->
<div id="chartdiv"></div>
