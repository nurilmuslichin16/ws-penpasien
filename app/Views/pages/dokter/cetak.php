<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title mb-4">
            <div class="title_left">
                <a href="/dokter" class="btn btn-secondary btn-sm">
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
                            Cetak Data
                        </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <i class="fa fa-check-square-o"></i>
                                    <label for="heard">Umur Awal:</label>
                                    <input class="form-control" type="number" name="date" />
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <i class="fa fa-check-square"></i>
                                    <label for="heard">Umur Akhir:</label>
                                    <input class="form-control" type="number" name="date" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12 col-md-6">
                                    <i class="fa fa-user"></i>
                                    <label for="heard">Jenis Kelamin:</label>
                                    <p class="mt-2">
                                        Laki-Laki&nbsp;
                                        <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required />
                                        &nbsp;
                                        &nbsp;
                                        Perempuan&nbsp;
                                        <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                                    </p>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <i class="fa fa-stethoscope"></i>
                                    <label for="heard">Spesialis:</label>
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