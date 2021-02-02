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
                            <h3 class="card-title"><i class="fa fa-plus-square"></i> &nbsp;Tambah Dokter</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
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
                                            <label for="tanggal_lahir">Alamat</label>
                                            <textarea class="form-control" rows="2" placeholder="Masukkan ..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="spesialis">Spesialis</label>
                                            <select class="form-control select2" id="spesialis" name="spesialis" style="width: 100%;">
                                                <option selected="selected">Pilih Spesialis</option>
                                                <option value="Bedah Umum">Bedah Umum</option>
                                                <option>Umum</option>
                                                <option>Gigi dan Mulut</option>
                                                <option>Kulit dan Kelamin</option>
                                                <option>Penyakit Dalam</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="lulusan">Lulusan</label>
                                            <input type="text" class="form-control" id="lulusan" name="lulusan" placeholder="Contoh: STMIK Widya Pratama">
                                        </div>
                                        <div class="form-group">
                                            <label for="tahun_lulus">Tahun Lulus</label>
                                            <input type="number" class="form-control" id="tahun_lulus" name="tahun_lulus" placeholder="Contoh: 2021">
                                        </div>
                                        <div class="form-group">
                                            <label for="no_hp">Nomer Handphone / Whatsapp</label>
                                            <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Contoh: 085229531162">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Contoh: nurilmuslichin16@gmail.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="foto">Foto</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="foto" name="foto">
                                                    <label class="custom-file-label" for="foto">Choose file</label>
                                                </div>
                                            </div>
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