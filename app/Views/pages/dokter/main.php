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
                            <h3 class="card-title"><i class="fa fa-list"></i> &nbsp;Daftar Dokter</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="/tambah-dokter" class="btn btn-success">
                                <i class="fas fa-plus-square"></i>&nbsp; Tambah Dokter
                            </a>
                            <hr>
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%">#</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat, Tanggal Lahir</th>
                                        <th>Poliklinik</th>
                                        <th>Alamat</th>
                                        <th width="10%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($dokter as $d) : ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $d['nama_depan']; ?> <?= $d['nama_belakang']; ?></td>
                                            <td><?= $d['jekel'] == 0 ? "Laki-Laki" : "Perempuan" ?></td>
                                            <td><?= $d['tempat_lahir']; ?>, <?= format_indo($d['tanggal_lahir']); ?></td>
                                            <td><?= $d['id_poli']; ?></td>
                                            <td><?= substr($d['alamat'], 0, 50); ?> ...</td>
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