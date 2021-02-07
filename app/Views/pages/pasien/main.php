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
                            <h3 class="card-title"><i class="fa fa-list"></i> &nbsp;Daftar Pasien</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="/tambah-pasien" class="btn btn-success mb-3">
                                <i class="fas fa-plus-square"></i>&nbsp; Tambah Pasien
                            </a>
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%">#</th>
                                        <th>NIK</th>
                                        <th>Nomor Rekam Medis</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat & Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th width="10%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($pasien as $p) : ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $p['nik']; ?></td>
                                            <td><?= $p['no_rm']; ?></td>
                                            <td><?= $p['nama_depan']; ?> <?= $p['nama_belakang']; ?></td>
                                            <td><?= $p['jekel'] == 0 ? "Laki-Laki" : "Perempuan" ?></td>
                                            <td><?= $p['tempat_lahir']; ?>, <?= format_indo($p['tanggal_lahir']); ?></td>
                                            <td><?= $p['alamat']; ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="/pasien/<?= $p['no_rm']; ?>" class="btn btn-sm btn-default">
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