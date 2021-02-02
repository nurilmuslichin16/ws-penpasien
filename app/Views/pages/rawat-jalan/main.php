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
                            <h3 class="card-title"><i class="fa fa-list"></i> &nbsp;Daftar Rawat Jalan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="/tambah-rawat-jalan" class="btn btn-success">
                                <i class="fas fa-plus-square"></i>&nbsp; Pendaftaran Rawat Jalan
                            </a>
                            <hr>
                            <p>
                                <i class="fas fa-filter"></i>&nbsp; <strong>Filter</strong>
                            </p>
                            <div class="row">
                                <div class="col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="tanggal_daftar">Tanggal Daftar</label>
                                        <input type="date" class="form-control" id="tanggal_daftar" name="tanggal_daftar">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="tanggal_periksa">Tanggal Periksa</label>
                                        <input type="date" class="form-control" id="tanggal_periksa" name="tanggal_periksa">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
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
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="poliklinik">Poliklinik</label>
                                        <select class="form-control select2" id="poliklinik" name="poliklinik" style="width: 100%;">
                                            <option selected="selected">Pilih Poliklinik</option>
                                            <option value="press">Bedah Umum</option>
                                            <option value="net">Umum</option>
                                            <option value="mouth">Gigi dan Mulut</option>
                                            <option value="mouth">Kulit dan Kelamin</option>
                                            <option value="mouth">Penyakit Dalam</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="dokter">Dokter</label>
                                        <select class="form-control select2" id="dokter" name="dokter" style="width: 100%;">
                                            <option selected="selected">Pilih Dokter</option>
                                            <option value="press">Dr. Nuril</option>
                                            <option value="net">Dr. Muslichin</option>
                                            <option value="mouth">Dr. Titan</option>
                                            <option value="mouth">Dr. Choriul</option>
                                            <option value="mouth">Dr. Ningsih'at</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%">#</th>
                                        <th>Nomor Pendaftaran</th>
                                        <th>Nama Pasien</th>
                                        <th>Tanggal Daftar</th>
                                        <th>Tanggal Periksa</th>
                                        <th>Poliklinik</th>
                                        <th>Dokter</th>
                                        <th>Status</th>
                                        <th width="10%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($rawat_jalan as $rj) : ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $rj['no_pendaftaran']; ?></td>
                                            <td><?= $rj['no_rm']; ?></td>
                                            <td><?= format_indo($rj['tgl_daftar']); ?></td>
                                            <td><?= format_indo($rj['tgl_periksa']); ?></td>
                                            <td><?= $rj['id_poli']; ?></td>
                                            <td><?= $rj['id_dokter']; ?></td>
                                            <td>
                                                <?php if ($rj['status'] == 0) { ?>
                                                    <span class="right badge badge-warning">Menunggu</span>
                                                <?php } elseif ($rj['status'] == 1) { ?>
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