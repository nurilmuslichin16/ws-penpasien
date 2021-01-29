<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Dokter</h1>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Data Master</li>
                        <li class="breadcrumb-item active">Dokter</li>
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
                    <div class="card card-primary">
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
                                                <option selected="selected">Alabama</option>
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
                                <button type="submit" class="btn btn-primary">Submit</button> &nbsp;
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-list"></i> &nbsp;Daftar Dokter</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Poliklinik</th>
                                        <th>Alamat</th>
                                        <th width="10%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dr. Nuril</td>
                                        <td>Laki-Laki</td>
                                        <td>Dokter Umum</td>
                                        <td>Kramatsari, Pekalongan</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-sm btn-info">
                                                    <i class="fas fa-bars"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dr. Muslichin</td>
                                        <td>Laki-Laki</td>
                                        <td>Dokter Gigi</td>
                                        <td>Pasirsari, Pekalongan</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-sm btn-info">
                                                    <i class="fas fa-bars"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Dr. Ningsih</td>
                                        <td>Perempuan</td>
                                        <td>Dokter Kulit</td>
                                        <td>Poncol, Pekalongan</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-sm btn-info">
                                                    <i class="fas fa-bars"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Poliklinik</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection('content'); ?>