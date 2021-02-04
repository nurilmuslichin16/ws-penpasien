<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <a href="/dokter" class="btn btn-sm btn-secondary mr-3">
                            <i class="fas fa-arrow-left"></i>&nbsp; Kembali
                        </a>
                        <?php foreach ($breadCrumb as $key => $b) : ?>
                            <li class="<?= $key === array_key_last($breadCrumb) ? "breadcrumb-item active" : "breadcrumb-item" ?>"><?= $b; ?></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-plus-square"></i> &nbsp;Tambah Pasien</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="nik">NIK</label>
                                            <input type="text" class="form-control" id="nik" name="nik" placeholder="Contoh: 3307218827xxxxxx">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_depan">Nama Depan</label>
                                            <input type="text" class="form-control" id="nama_depan" name="nama_depan" placeholder="Contoh: Nuril">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_belakang">Nama Belakang</label>
                                            <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" placeholder="Contoh: Muslichin">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Jenis Kelamin</label><br />
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-secondary active">
                                                    <input type="radio" name="jekel" id="jekel_laki" autocomplete="off" checked> Laki-Laki
                                                </label>
                                                <label class="btn btn-secondary">
                                                    <input type="radio" name="jekel" id="jekel_perempuan" autocomplete="off"> Perempuan
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Contoh: Kota Pekalongan">
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                                        </div>
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <select class="form-control select2" id="agama" name="agama" style="width: 100%;">
                                                <option selected="selected">Pilih Agama</option>
                                                <option value="">Islam</option>
                                                <option value="press">Kristen</option>
                                                <option value="net">Katolik</option>
                                                <option value="mouth">Budha</option>
                                                <option value="mouth">Hindu</option>
                                                <option value="mouth">Konghucu</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                            <select class="form-control select2" id="pendidikan_terakhir" name="pendidikan_terakhir" style="width: 100%;">
                                                <option selected="selected">Pilih Pendidikan Terakhir</option>
                                                <option value="">Tidak Sekolah</option>
                                                <option value="press">SD</option>
                                                <option value="net">SMP</option>
                                                <option value="mouth">SMK</option>
                                                <option value="mouth">D3 / Diploma</option>
                                                <option value="mouth">S1 / Sarjana</option>
                                                <option value="mouth">S2 / Magister</option>
                                                <option value="mouth">S3 / Doktor</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Status Perkawinan</label><br />
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-secondary active">
                                                    <input type="radio" name="status_perkawinan" id="belum_menikah" autocomplete="off" checked> Belum Menikah
                                                </label>
                                                <label class="btn btn-secondary">
                                                    <input type="radio" name="status_perkawinan" id="menikah" autocomplete="off"> Menikah
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="pendidikan_terakhir">Provinsi</label>
                                            <select id="heard" class="form-control">
                                                <option selected="selected">Pilih Provinsi</option>
                                                <option value="press">Jawa Tengah</option>
                                                <option value="net">Jawa Timur</option>
                                                <option value="mouth">Jawa Barat</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="pendidikan_terakhir">Kota / Kabupaten</label>
                                            <select id="heard" class="form-control">
                                                <option selected="selected">Pilih Kota / Kabupaten</option>
                                                <option value="press">Kota Pekalongan</option>
                                                <option value="net">Kab. Pekalongan</option>
                                                <option value="mouth">Batang</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="pendidikan_terakhir">Kecamatan</label>
                                            <select id="heard" class="form-control">
                                                <option selected="selected">Pilih Kecamatan</option>
                                                <option value="press">Pekalongan Barat</option>
                                                <option value="net">Pekalongan Timur</option>
                                                <option value="mouth">Pekalongan Selatan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="pendidikan_terakhir">Kelurahan</label>
                                            <select id="heard" class="form-control">
                                                <option selected="selected">Pilih Kelurahan</option>
                                                <option value="press">Pasirkratonkramat</option>
                                                <option value="net">Noyontaan</option>
                                                <option value="mouth">Tirto</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Alamat</label>
                                            <textarea class="form-control" rows="2" placeholder="Masukkan ..."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="kewarganegaraan">Kewarganegaraan</label>
                                            <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" placeholder="Contoh: Indonesia">
                                        </div>
                                        <div class="form-group">
                                            <label for="no_hp">Nomor HP</label>
                                            <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Contoh: 085229xxxxxx">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Contoh: nurilxx@gmail.com">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="reset" class="btn btn-default">Reset</button>
                                <button type="submit" class="btn btn-success float-right">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection('content'); ?>