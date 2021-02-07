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
                            <h3 class="card-title"><i class="fa fa-list"></i> &nbsp;Jadwal Poliklinik Bedah Umum</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-tambah">
                                <i class="fas fa-plus-square"></i>&nbsp; Tambah Jadwal Dokter
                            </button>
                            <hr>
                            <p>
                                <i class="fas fa-filter"></i>&nbsp; <strong>Filter</strong>
                            </p>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="hari_filter">Hari</label>
                                        <select class="form-control select2" id="hari_filter" name="hari_filter" style="width: 100%;">
                                            <option selected="selected">Pilih Hari</option>
                                            <option value="press">Senin</option>
                                            <option value="net">Selasa</option>
                                            <option value="mouth">Rabu</option>
                                            <option value="mouth">Kamis</option>
                                            <option value="mouth">Jum'at</option>
                                            <option value="mouth">Sabtu</option>
                                            <option value="mouth">Minggu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="dokter_filter">Dokter</label>
                                        <select class="form-control select2" id="dokter_filter" name="dokter_filter" style="width: 100%;">
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
                                        <th>Hari</th>
                                        <th>Jam Kerja</th>
                                        <th>Dokter</th>
                                        <th width="10%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Senin</td>
                                        <td>08.00 - 12.00</td>
                                        <td>Dr. Nuril Muslichin</td>
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
                <h4 class="modal-title"><i class="fa fa-plus-square"></i> &nbsp;Tambah JadwalDokter</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="hari">Hari</label>
                                <select class="form-control select2" id="hari" name="hari" style="width: 100%;">
                                    <option selected="selected">Pilih Hari</option>
                                    <option value="Bedah Umum">Senin</option>
                                    <option>Selasa</option>
                                    <option>Rabu</option>
                                    <option>Kamis</option>
                                    <option>Jum'at</option>
                                    <option>Sabtu</option>
                                    <option>Minggu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jam_mulai">Jam Mulai</label>
                                <input type="time" class="form-control" id="jam_mulai" name="jam_mulai" placeholder="Contoh: Bedah Saraf">
                            </div>
                            <div class="form-group">
                                <label for="jam_selesai">Jam Selesai</label>
                                <input type="time" class="form-control" id="jam_selesai" name="jam_selesai" placeholder="Contoh: Bedah Saraf">
                            </div>
                            <div class="form-group">
                                <label for="dokter">Dokter</label>
                                <select class="form-control select2" id="dokter" name="dokter" style="width: 100%;">
                                    <option selected="selected">Pilih Dokter</option>
                                    <option value="Bedah Umum">Nuril Muslichin</option>
                                    <option>Titan Yusro</option>
                                    <option>Ningsih</option>
                                    <option>Andi Raharjo</option>
                                    <option>Tyas</option>
                                </select>
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

<?= $this->endSection('content'); ?>