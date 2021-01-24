<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title mb-4">
            <div class="title_left">
                <a href="/rawat-jalan" class="btn btn-secondary btn-sm">
                    <i class="fa fa-arrow-left"></i>&nbsp; Kembali
                </a>
                &nbsp;<?= $breadCrumb; ?>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row" style="display: block; margin-top: 12px;">
            <div class="col-md-6 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>
                            <i class="fa fa-filter"></i>&nbsp;
                            Cetak Data Pendaftaran Pasien Rawat Jalan
                        </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <i class="fa fa-check-square-o"></i>
                                    <label for="heard">Tanggal Daftar [Dari]:</label>
                                    <input class="form-control" class='date' type="date" name="date" />
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <i class="fa fa-check-square"></i>
                                    <label for="heard">Tanggal Daftar [Sampai]:</label>
                                    <input class="form-control" class='date' type="date" name="date" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12 col-md-6">
                                    <i class="fa fa-check-square-o"></i>
                                    <label for="heard">Tanggal Periksa [Dari]:</label>
                                    <input class="form-control" class='date' type="date" name="date" />
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <i class="fa fa-check-square"></i>
                                    <label for="heard">Tanggal Periksa [Sampai]:</label>
                                    <input class="form-control" class='date' type="date" name="date" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12 col-md-12">
                                    <i class="fa fa-stethoscope"></i>
                                    <label for="heard">Poliklinik:</label>
                                    <select id="heard" class="form-control">
                                        <option value="">All</option>
                                        <option value="press">Bedah Umum</option>
                                        <option value="net">Umum</option>
                                        <option value="mouth">Gigi dan Mulut</option>
                                        <option value="mouth">Kulit dan Kelamin</option>
                                        <option value="mouth">Penyakit Dalam</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12 col-md-12">
                                    <i class="fa fa-user-md"></i>
                                    <label for="heard">Dokter:</label>
                                    <select id="heard" class="form-control">
                                        <option value="">All</option>
                                        <option value="press">Dr. Nuril</option>
                                        <option value="net">Dr. Muslichin</option>
                                        <option value="mouth">Dr. Titan</option>
                                        <option value="mouth">Dr. Choriul</option>
                                        <option value="mouth">Dr. Ningsih'at</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12 col-md-12">
                                    <i class="fa fa-info-circle"></i>
                                    <label for="heard">Status:</label>
                                    <select id="heard" class="form-control">
                                        <option value="">All</option>
                                        <option value="press">Batal</option>
                                        <option value="net">Menunggu</option>
                                        <option value="mouth">Terdaftar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="row justify-content-end">
                                <div class="mr-2">
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success">Cetak</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<?= $this->endSection('content'); ?>