<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-left">
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
                <!-- col -->
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-list"></i> &nbsp;Daftar Kamar</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-tambah">
                                <i class="fas fa-plus-square"></i>&nbsp; Tambah Kamar
                            </button>
                            <hr>
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%">#</th>
                                        <th>Nama Kamar</th>
                                        <th>Tipe Kamar</th>
                                        <th>Jumlah Tempat Tidur</th>
                                        <th>Tempat Tidur Terpakai</th>
                                        <th>Sisa Tempat Tidur</th>
                                        <th width="10%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($kamar as $k) : ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $k['nama_kamar']; ?></td>
                                            <td><?= $k['tipe']; ?></td>
                                            <td><?= $k['stok_tempat_tidur']; ?> &nbsp;<small>Tempat Tidur</small></td>
                                            <td><?= $k['tempat_tidur_terpakai']; ?> &nbsp;<small>Tempat Tidur</small></td>
                                            <td><?= $k['stok_tempat_tidur'] - $k['tempat_tidur_terpakai']; ?> &nbsp;<small>Tempat Tidur</small></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-sm btn-warning">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-sm btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    endforeach; ?>
                                </tbody>
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

    <!-- Modal -->
    <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h4 class="modal-title"><i class="fa fa-plus-square"></i> &nbsp;Tambah Kamar</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="nama_kamar">Nama Kamar</label>
                                    <input type="text" class="form-control" id="nama_kamar" name="nama_kamar" placeholder="Contoh: Melati">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="tipe_kamar">Tipe Kamar</label>
                                    <select class="form-control select2" id="tipe_kamar" name="tipe_kamar" style="width: 100%;">
                                        <option selected="selected">Pilih Tipe</option>
                                        <option value="Bedah Umum">VVIP</option>
                                        <option>VIP</option>
                                        <option>Kelas A</option>
                                        <option>Kelas B</option>
                                        <option>Kelas C</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="jumlah_tempat_tidur">Jumlah Tempat Tidur</label>
                                    <input type="number" class="form-control" id="jumlah_tempat_tidur" name="jumlah_tempat_tidur" placeholder="Contoh: 8">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

</div>
<!-- /.content-wrapper -->
<?= $this->endSection('content'); ?>