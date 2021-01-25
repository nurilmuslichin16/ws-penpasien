<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title mb-4">
            <div class="title_left">
                <a href="/pasien" class="btn btn-secondary btn-sm">
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
                            Cetak Data Pengguna Mobile
                        </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <i class="fa fa-check-square-o"></i>
                                    <label for="heard">Terakhir Login [Dari]:</label>
                                    <input class="form-control" type="date" name="date" />
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <i class="fa fa-check-square"></i>
                                    <label for="heard">Terakhir Login [Sampai]:</label>
                                    <input class="form-control" type="date" name="date" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12 col-md-12">
                                    <i class="fa fa-info-circle"></i>
                                    <label for="heard">Status:</label>
                                    <select id="heard" class="form-control">
                                        <option value="">All</option>
                                        <option value="press">Tidak Aktif</option>
                                        <option value="net">Aktif</option>
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