<?php
    session_start();
?>
<br><br>                 
<!--Card-->
<div class="card grey lighten-5">

    <!--Card content-->
    <div class="card-body">
        <!--Title-->
        <h3 class="card-title">FORM PENDAFTARAN SD </h3>
        <hr>
        <form method="POST" name="kirim-data" action="kirimDaftar.php">
            
            <h4>Data Siswa Pendaftar</h4>
            <hr>
            <!--First row-->
            <div class="row">
                <!--First column-->
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="text" id="form41" class="form-control" name="namaSiswa">
                        <label for="form41" class="">Nama</label>
                    </div>
                </div>

                <!--Second column-->
                <div class="form-inline">
                    <div class="form-group">
                        <input name="jenisKelaminSiswa" type="radio" id="radio120" value="L">
                        <label for="radio120">Laki - Laki</label>
                    </div>

                    <div class="form-group">
                        <input name="jenisKelaminSiswa" type="radio" id="radio121" value="P">
                        <label for="radio121">Perempuan</label>
                    </div>
                </div>
            </div>
            <!--/First row-->
            
            <!--Second row-->
            <div class="row">
                
                <!--First column-->
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="text" id="form41" class="form-control" name="ttlSiswa">
                        <label for="form41" class="">Tempat, Tanggal Lahir (Tempat, Tanggal-Bulan-Tahun)</label>
                    </div>
                </div>
                
                <!--Second column-->
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="text" id="form41" class="form-control" name="hobiSiswa">
                        <label for="form41" class="">Hobi/Kegemaran</label>
                    </div>
                </div>
            
            </div>
            <!--/Second row-->
            
            <!--Third row-->
            <div class="row">

                <!--First column-->
                <div class="col-md-12">
                    <div class="md-form">
                        <input type="text" id="form41" class="form-control" name="nomorKK">
                        <label for="form41" class="">Nomor Kartu Keluarga</label>
                    </div>
                </div>

            </div>
            <!--/Third row-->

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
            <!--/Third row-->
            <hr>
                <div class="col-md-12 mb-r">
                    <button id="orangtua" type="button" name="Submit" value="Kirim" class="btn btn-rounded btn-primary"><i class="fa fa-users pr-2" aria-hidden="true"></i>Data Orangtua Siswa</button>
                    <button id="wali" type="button" name="Submit" value="Kirim" class="btn btn-rounded btn-primary"><i class="fa fa-users pr-2" aria-hidden="true"></i>Data Wali Siswa</button>
                </div>
            <hr>
            
            <!--Form Data Orangtua Siswa-->
            <div id="formOrangTua">
                <h4>Data Orangtua Siswa Pendaftar</h4>
                <hr>
                
                <!--Data Ayah-->
                <h5 align="left">A. Data Ayah</h5>
                <hr>
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
                            <label for="form41" class="">Tempat, Tanggal Lahir (Tempat,Tanggal-Bulan-Tahun)</label>
                        </div>
                    </div>
                </div>
                <!--/.First row-->

                <!--Second row-->
                <div class="row">

                    <!--First column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" id="form41" class="form-control" name="pekerjaanAyah">
                            <label for="form41" class="">Pekerjaan Ayah</label>
                        </div>
                    </div>

                    <!--Second column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" id="form51" class="form-control" name="penghasilanAyah">
                            <label for="form51" class="">Penghasilan Perbulan</label>
                        </div>
                    </div>
                    
                    <!--Third column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" id="form51" class="form-control" name="nomorAyah">
                            <label for="form51" class="">Nomor HP/Telephone</label>
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
                            <label for="form76">Alamat Ayah</label>
                        </div>

                    </div>
                </div>
                <!--/Third row-->
                <!--Data Ayah-->
                
                <!--Data Ibu-->
                <h5 align="left">B. Data Ibu</h5>
                <hr>
                <!--First row-->
                <div class="row">
                    <!--First column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="form41" class="form-control" name="namaIbu">
                            <label for="form41" class="">Nama Ibu</label>
                        </div>
                    </div>

                    <!--Second column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="form41" class="form-control" name="ttlIbu">
                            <label for="form41" class="">Tempat, Tanggal Lahir (Tempat,Tanggal-Bulan-Tahun)</label>
                        </div>
                    </div>
                </div>
                <!--/.First row-->

                <!--Second row-->
                <div class="row">

                    <!--First column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" id="form41" class="form-control" name="pekerjaanIbu">
                            <label for="form41" class="">Pekerjaan Ibu</label>
                        </div>
                    </div>

                    <!--Second column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" id="form51" class="form-control" name="penghasilanIbu">
                            <label for="form51" class="">Penghasilan Perbulan</label>
                        </div>
                    </div>
                    
                    <!--Third column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" id="form51" class="form-control" name="nomorIbu">
                            <label for="form51" class="">Nomor HP/Telephone</label>
                        </div>
                    </div>

                </div>
                <!--/Second row.-->

                <!--Third row-->
                <div class="row">
                    <!--First column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="form76" class="md-textarea" name="alamatIbu"></textarea>
                            <label for="form76">Alamat Ibu</label>
                        </div>

                    </div>
                </div>
                <!--/Third row-->
                <!--Data Ibu-->
                
            </div>
            <!--/Form Data Orangtua Siswa-->
            
            <!--Form Data Wali Siswa-->
            <div id="formWali">
                <h4>Data Wali Siswa Pendaftar</h4>
                <hr>
                
                <!--First row-->
                <div class="row">
                    <!--First column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="form41" class="form-control" name="namaWali">
                            <label for="form41" class="">Nama Wali</label>
                        </div>
                    </div>
                    
                    <!--Second column-->
                    <div class="form-inline">
                        <div class="form-group">
                            <input name="jenisKelaminWali" type="radio" id="radio120" value="L">
                            <label for="radio120">Laki - Laki</label>
                        </div>

                        <div class="form-group">
                            <input name="jenisKelaminWali" type="radio" id="radio121" value="P">
                            <label for="radio121">Perempuan</label>
                        </div>
                    </div>
                </div>
                <!--/.First row-->
                
                 <!--Second row-->
                <div class="row">

                    <!--First column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="form41" class="form-control" name="nomorKTPWali">
                            <label for="form41" class="">Nomor KTP Wali</label>
                        </div>
                    </div>

                    <!--Second column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="form41" class="form-control" name="ttlWali">
                            <label for="form41" class="">Tempat, Tanggal Lahir (Tempat, Tanggal-Bulan-Tahun)</label>
                        </div>
                    </div>

                </div>
                <!--/Second row-->

                <!--Third row-->
                <div class="row">

                    <!--First column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" id="form41" class="form-control" name="pekerjaanWali">
                            <label for="form41" class="">Pekerjaan</label>
                        </div>
                    </div>

                    <!--Second column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" id="form51" class="form-control" name="penghasilanWali">
                            <label for="form51" class="">Penghasilan Perbulan</label>
                        </div>
                    </div>
                    
                    <!--Third column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" id="form51" class="form-control" name="nomorWali">
                            <label for="form51" class="">Nomor HP/Telephone</label>
                        </div>
                    </div>

                </div>
                <!--/Third row.-->

                <!--Fourth row-->
                <div class="row">
                    <!--First column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="form76" class="md-textarea" name="alamatWali"></textarea>
                            <label for="form76">Alamat</label>
                        </div>

                    </div>
                </div>
                <!--/Fourth row-->
                
            </div>
            <!--/Form Data Wali Siswa-->

            <!-- Grid column -->
            <div class="col-md-12 mb-r">
                <button type="submit" name="Submit" value="Kirim" class="btn btn-rounded btn-primary"><i class="fa fa-users pr-2" aria-hidden="true"></i>Kirim Data</button>
            </div>
            <!-- Grid column -->

        </form>
    </div>

</div>
<!--/.Card-->

