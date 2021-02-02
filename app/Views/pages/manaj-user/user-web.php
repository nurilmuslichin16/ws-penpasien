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
                            <a href="/tambah-pengguna-web" class="btn btn-primary mb-3">
                                <i class="fas fa-plus-square"></i>&nbsp; Tambah Pengguna Web
                            </a>
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
<?= $this->endSection('content'); ?>