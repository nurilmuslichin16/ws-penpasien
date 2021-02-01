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
            <div class="card card-primary">
                <div class="card-body">
                    <p>
                        <i class="fas fa-filter"></i>&nbsp; <strong>Filter</strong>
                    </p>
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="tanggal_daftar">Tanggal Daftar</label>
                                <input type="date" class="form-control" id="tanggal_daftar" name="tanggal_daftar">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control select2" id="status" name="status" style="width: 100%;">
                                    <option selected="selected">Pilih Status</option>
                                    <option value="Bedah Umum">Menunggu</option>
                                    <option>Terdaftar</option>
                                    <option>Batal</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="kamar">Kamar</label>
                                <select class="form-control select2" id="kamar" name="kamar" style="width: 100%;">
                                    <option selected="selected">Pilih Kamar</option>
                                    <option value="press">Anggrek</option>
                                    <option value="net">Melati</option>
                                    <option value="mouth">Mawar</option>
                                    <option value="mouth">Sekar</option>
                                    <option value="mouth">Sari</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-list"></i> &nbsp;Daftar Rawat Inap</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="/tambah-rawat-jalan" class="btn btn-primary mb-3">
                                <i class="fas fa-plus-square"></i>&nbsp; Pendaftaran Rawat Jalan
                            </a>
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%">#</th>
                                        <th>Nomor Pendaftaran</th>
                                        <th>Nama Pasien</th>
                                        <th>Tanggal Daftar</th>
                                        <th>Kamar</th>
                                        <th>Status</th>
                                        <th width="10%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($rawat_inap as $ri) : ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $ri['no_pendaftaran']; ?></td>
                                            <td><?= $ri['no_rm']; ?></td>
                                            <td><?= format_indo($ri['tanggal_daftar']); ?></td>
                                            <td><?= $ri['id_kamar']; ?></td>
                                            <td>
                                                <?php if ($ri['status'] == 0) { ?>
                                                    <span class="right badge badge-warning">Menunggu</span>
                                                <?php } elseif ($ri['status'] == 1) { ?>
                                                    <span class="right badge badge-success">Terdaftar</span>
                                                <?php } else { ?>
                                                    <span class="right badge badge-danger">Batal</span>
                                                <?php } ?>
                                            </td>
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