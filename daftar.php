<br><br>                   
<form method="POST" name="kirim-data" action="kirimDaftar.php">
    <h2>Data Siswa Pendaftar</h2>
    <br>
    <!--First row-->
    <div class="row">
        <!--First column-->
        <div class="col-md-6">
            <div class="md-form">
                <input type="text" id="form41" class="form-control" name="nisn">
                <label for="form41" class="">Nomor Induk Nasional (NISN)</label>
            </div>
        </div>

        <!--Second column-->
        <div class="col-md-6">
            <div class="md-form">
                <input type="text" id="form41" class="form-control" name="asalSD">
                <label for="form41" class="">Sekolah Dasar (SD) Asal</label>
            </div>
        </div>
    </div>
    <!--/.First row-->

    <!--Second row-->
    <div class="row">

        <!--First column-->
        <div class="col-md-6">
            <div class="md-form">
                <input type="text" id="form41" class="form-control" name="namaSiswa">
                <label for="form41" class="">Nama</label>
            </div>
        </div>

        <!--Second column-->
        <div class="col-md-6">
            <div class="md-form">
                <input type="text" id="form51" class="form-control" name="ttlSiswa">
                <label for="form51" class="">Tempat Tanggal Lahir (Tempat,Tanggal/Bulan/Tahun)</label>
            </div>
        </div>

    </div>
    <!--/Second row.-->
    
    <!--Third row-->
    <div class="row">
        <!--First column-->
        <div class="col-md-12">

            <div class="md-form">
                <textarea type="text" id="form76" class="md-textarea" name="alamatSiswa"></textarea>
                <label for="form76">Alamat</label>
            </div>

        </div>
    </div>
    <!--/.Third row-->
    
    <h2>Data Orangtua Siswa Pendaftar</h2>
    <br>
    <!--First row-->
    <div class="row">
        <!--First column-->
        <div class="col-md-6">
            <div class="md-form">
                <input type="text" id="form41" class="form-control" name="namaAyah">
                <label for="form41" class="">Nama Ayah</label>
            </div>
        </div>

        <!--Second column-->
        <div class="col-md-6">
            <div class="md-form">
                <input type="text" id="form41" class="form-control" name="ttlAyah">
                <label for="form41" class="">Tempat Tanggal Lahir (Tempat,Tanggal/Bulan/Tahun)</label>
            </div>
        </div>
    </div>
    <!--/.First row-->

    <!--Second row-->
    <div class="row">

        <!--First column-->
        <div class="col-md-6">
            <div class="md-form">
                <input type="text" id="form41" class="form-control" name="pekerjaanAyah">
                <label for="form41" class="">Pekerjaan</label>
            </div>
        </div>

        <!--Second column-->
        <div class="col-md-6">
            <div class="md-form">
                <input type="text" id="form51" class="form-control" name="penghasilanAyah">
                <label for="form51" class="">Penghasilan Perbulan</label>
            </div>
        </div>

    </div>
    <!--/Second row.-->
    
    <!--Third row-->
    <div class="row">
        <!--First column-->
        <div class="col-md-12">

            <div class="md-form">
                <textarea type="text" id="form76" class="md-textarea" name="alamatAyah"></textarea>
                <label for="form76">Alamat</label>
            </div>

        </div>
    </div>
    <!--/.Third row-->
      
    <!-- Grid column -->
    <div class="col-md-12 mb-r">
        <button type="submit" name="Submit" value="Kirim" class="btn btn-rounded btn-primary"><i class="fa fa-users pr-2" aria-hidden="true"></i>Kirim</button>
    </div>
    <!-- Grid column -->
    
</form>