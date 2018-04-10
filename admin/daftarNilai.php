
<table class="table table-sm">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th> 
      <th>TTL</th>
      <th>Username</th>
      <th>Password</th>
      <th>Nilai Motorik</th>
      <th>Nilai Verbal</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
<?php
    include("../config/config.php");
    $queryTampil = "SELECT DISTINCT p.id_tabel_pendaftar, s.tabel_siswa_nama, s.tabel_siswa_ttl, u.tabel_user_username, u.tabel_user_password, v.tabel_verifikasi_nilai_motorik, v.tabel_verifikasi_nilai_verbal, v.id_tabel_verifikasi FROM tabel_siswa s, tabel_pendaftar p, tabel_user u, tabel_verifikasi v WHERE s.id_tabel_siswa = p.id_tabel_siswa AND p.id_tabel_pendaftar = u.id_tabel_pendaftar AND p.id_tabel_pendaftar = v.id_tabel_pendaftar AND p.tabel_pendaftar_cek='cek'";
      
    $hasil = mysqli_query($Connection,$queryTampil);
    $no=1;
   while ($data = mysqli_fetch_row($hasil))
   {
?>
      <form method="POST" name="kirim-data" action="editNilai.php">
            
            <tr>
              <th>
                  <?=$no?>
                  <input type="hidden" id="form1" class="form-control" name="idVerifikasi" value="<?=$data[7]?>"> 
              </th>
              <th><?=$data[1]?></th>
              <th><?=$data[2]?></th>
              <th><?=$data[3]?></th>
              <th><?=$data[4]?></th>
              <th>
                <div class="md-form">
                    <input type="text" id="form1" class="form-control" name="motorik" value="<?=$data[5]?>">
                    <label for="form1" class="">Nilai Motorik</label>
                </div>               
              </th>
              <th>
                <div class="md-form">
                    <input type="text" id="form1" class="form-control" name="verbal" value="<?=$data[6]?>">
                    <label for="form1" class="">Nilai Verbal</label>
                </div>               
              </th>
              <th>
                    <div class="col-md-12 mb-r">
                        <button type="submit" name="Submit" value="Kirim" class="btn btn-rounded btn-primary"><i class="fa fa-users pr-2" aria-hidden="true"></i>Edit</button>
                    </div>
              </th>
            </tr>
      
      </form>
<?php
       $no++;
    }
?>
    
  </tbody>
</table>
                       