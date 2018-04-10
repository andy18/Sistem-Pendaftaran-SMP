<table class="table table-sm">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>TTL</th>
      <th>Alamat</th>
      <th>Nomor KK</th>
      <th>Nama Ayah</th>
      <th>Nama Ibu</th>
      <th>Nama Wali</th>
      <th>Tanggal Daftar</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
<?php
    include("../config/config.php");
    
    $queryTampil = "SELECT s.id_tabel_siswa, a.id_tabel_ayah, i.id_tabel_ibu, w.id_tabel_wali, p.id_tabel_pendaftar, s.tabel_siswa_nama, s.tabel_siswa_ttl, s.tabel_siswa_hobi, s.tabel_siswa_alamat, s.tabel_siswa_nomor_kk, a.tabel_ayah_nama, i.tabel_ibu_nama, w.tabel_wali_nama, YEAR(p.tabel_pendaftar_tgl), Month(p.tabel_pendaftar_tgl), Day(p.tabel_pendaftar_tgl) FROM tabel_siswa s, tabel_ayah a, tabel_ibu i, tabel_wali w, tabel_pendaftar p WHERE s.id_tabel_ayah = a.id_tabel_ayah AND s.id_tabel_ibu = i.id_tabel_ibu AND s.id_tabel_wali = w.id_tabel_wali AND p.id_tabel_siswa = s.id_tabel_siswa ORDER BY YEAR(p.tabel_pendaftar_tgl), Month(p.tabel_pendaftar_tgl), Day(p.tabel_pendaftar_tgl)";
    
    $hasil = mysqli_query($Connection,$queryTampil);
    $no=1;
    while ($data = mysqli_fetch_row($hasil))
    {
    ?>   
            <tr>
              <th><?=$no?></th>
              <th><?=$data[5]?></th>
              <th><?=$data[6]?></th>
              <th><?=$data[8]?></th>
              <th><?=$data[9]?></th>
              <th><?=$data[10]?></th>
              <th><?=$data[11]?></th>
              <th><?=$data[12]?></th>
              <th><?=$data[15]?>-<?=$data[14]?>-<?=$data[13]?></th>
              <th>
                <a class="btn btn-primary btn-sm" href="delete.php?idSiswa=<?=$data[0]?> && idAyah=<?=$data[1]?> && idIbu=<?=$data[2]?> && idWali=<?=$data[3]?> && idPendaftar=<?=$data[4]?>" onclick="return confirm('Yakin mau di hapus?');"><i class="fa fa-magic mr-1"></i> Hapus</a> ||
                <a class="btn btn-primary btn-sm" href="editData.php?idSiswa=<?=$data[0]?> && idAyah=<?=$data[1]?> && idIbu=<?=$data[2]?> && idWali=<?=$data[3]?> && idPendaftar=<?=$data[4]?>"><i class="fa fa-magic mr-1"></i> Edit</a> ||
                <a class="btn btn-primary btn-sm" href="detailData.php?idSiswa=<?=$data[0]?> && idAyah=<?=$data[1]?> && idIbu=<?=$data[2]?> && idWali=<?=$data[3]?> && idPendaftar=<?=$data[4]?>"><i class="fa fa-magic mr-1"></i> Detail</a>
              </th>
            </tr>
<?php
        $no++;
    }
?>
    
  </tbody>
</table>

                                    