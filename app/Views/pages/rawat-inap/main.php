<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title mb-4">
            <div class="title_left">
                &nbsp;<?= $breadCrumb; ?>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <a href="/cetak-rawat-inap" class="btn btn-primary btn-sm">
                    <i class="fa fa-print"></i>&nbsp; Cetak Data
                </a>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row mt-3">
            <div class="col-4">
                <i class="fa fa-check-square-o"></i>
                <label for="heard">Tanggal Daftar:</label>
                <input class="form-control" class='date' type="date" name="date" required='required' />
            </div>
            <div class="col-4">
                <i class="fa fa-info-circle"></i>
                <label for="heard">Status:</label>
                <select id="heard" class="form-control">
                    <option value="">All</option>
                    <option value="press">Batal</option>
                    <option value="net">Menunggu</option>
                    <option value="mouth">Selesai</option>
                </select>
            </div>
            <div class="col-4">
                <i class="fa fa-hospital-o"></i>
                <label for="heard">Kamar:</label>
                <select id="heard" class="form-control">
                    <option value="">All</option>
                    <option value="press">Anggrek</option>
                    <option value="net">Melati</option>
                    <option value="mouth">Mawar</option>
                    <option value="mouth">Sekar</option>
                    <option value="mouth">Sari</option>
                </select>
            </div>
        </div>

        <div class="row" style="display: block; margin-top: 12px;">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Daftar Pendaftaran Rawat Jalan</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable" class="table table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th width="5%">#</th>
                                                <th>Nomor Pendaftaran</th>
                                                <th>Nama Pasien</th>
                                                <th>Tanggal Daftar</th>
                                                <th>Kamar</th>
                                                <th>Status</th>
                                                <th width="5%">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>1</th>
                                                <td>1102802283</td>
                                                <td>Nuril Muslichin</td>
                                                <td>12 Jan 2021</td>
                                                <td>Merak</td>
                                                <td>
                                                    <span class="badge badge-warning">Menunggu</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-bars"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<?= $this->endSection('content'); ?>