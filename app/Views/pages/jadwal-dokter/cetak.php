<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title mb-4">
            <div class="title_left">
                <a href="/jadwal-dokter" class="btn btn-secondary btn-sm">
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
                            Cetak Data Jadwal Dokter
                        </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <i class="fa fa-check-square-o"></i>
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
                            <div class="ln_solid"></div>
                            <div class="row justify-content-end">
                                <div class="mr-2">
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
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