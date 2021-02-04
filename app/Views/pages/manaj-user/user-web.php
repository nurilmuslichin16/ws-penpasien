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
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-list"></i> &nbsp;Daftar Pengguna Web</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <button href="/tambah-pengguna-web" class="btn btn-success mb-3" data-toggle="modal" data-target="#modal-tambah">
                                <i class="fas fa-plus-square"></i>&nbsp; Tambah Pengguna Web
                            </button>
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%">#</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Level</th>
                                        <th>Status</th>
                                        <th width="10%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($web as $w) : ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $w['nama_lengkap']; ?></td>
                                            <td><?= $w['email']; ?></td>
                                            <td><?= $w['jekel'] == 0 ? "Laki-Laki" : "Perempuan" ?></td>
                                            <td>
                                                <?php if ($w['level_user'] == 0) { ?>
                                                    <span class="right badge badge-success">Admin</span>
                                                <?php } elseif ($w['level_user'] == 1) { ?>
                                                    <span class="right badge badge-secondary">Petugas</span>
                                                <?php } else { ?>
                                                    <span class="right badge badge-info">Kepala Pendaftaran</span>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <?php if ($w['status'] == 0) { ?>
                                                    <span class="right badge badge-danger">Tidak Aktif</span>
                                                <?php } else { ?>
                                                    <span class="right badge badge-success">Aktif</span>
                                                <?php } ?>
                                            </td>
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
</div>
<!-- /.content-wrapper -->

<!-- Modal -->
<div class="modal fade" id="modal-tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title"><i class="fa fa-plus-square"></i> &nbsp;Tambah Pengguna Web</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Contoh: Bedah Saraf">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Contoh: Bedah Saraf">
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
                                <label for="level">Level</label>
                                <select class="form-control select2" id="level" name="level" style="width: 100%;">
                                    <option selected="selected">Pilih Level</option>
                                    <option value="">Admin</option>
                                    <option value="press">Petugas</option>
                                    <option value="net">Kepala Pendaftaran</option>
                                </select>
                            </div>
                            <p>
                                <strong>Note</strong>
                                <br />
                                <i><small>*Password default adalah "sipenpas"</small></i>
                                <br />
                                <i><small>*Status user default adalah aktif</small></i>
                            </p>
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

<?= $this->endSection('content'); ?>