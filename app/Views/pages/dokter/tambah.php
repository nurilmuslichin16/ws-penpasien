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
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Tambah Dokter</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form class="form-horizontal form-label-left">
                            <!-- Smart Wizard -->
                            <div id="wizard" class="form_wizard wizard_horizontal">
                                <ul class="wizard_steps">
                                    <li>
                                        <a href="#step-1">
                                            <span class="step_no">1</span>
                                            <span class="step_descr">
                                                Step 1<br />
                                                <small>Data Personal</small>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-2">
                                            <span class="step_no">2</span>
                                            <span class="step_descr">
                                                Step 2<br />
                                                <small>Data Dokter</small>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-3">
                                            <span class="step_no">3</span>
                                            <span class="step_descr">
                                                Step 3<br />
                                                <small>Kontak</small>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-4">
                                            <span class="step_no">4</span>
                                            <span class="step_descr">
                                                Step 4<br />
                                                <small>Foto</small>
                                            </span>
                                        </a>
                                    </li>
                                </ul>

                                <div id="step-1">

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Depan <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name" required="required" class="form-control  ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nama Belakang <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="last-name" name="last-name" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Gender <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <p class="mt-2 mb-0">
                                                Laki-Laki&nbsp;
                                                <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required />
                                                &nbsp;
                                                &nbsp;
                                                Perempuan&nbsp;
                                                <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" class="form-control col" type="text" name="middle-name" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="birthday" class="date-picker form-control" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <textarea class="form-control" rows="3" required="required"></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div id="step-2">

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Spesialis <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select id="heard" class="form-control" required="required">
                                                <option value="">All</option>
                                                <option value="press">Bedah Umum</option>
                                                <option value="net">Umum</option>
                                                <option value="mouth">Gigi dan Mulut</option>
                                                <option value="mouth">Kulit dan Kelamin</option>
                                                <option value="mouth">Penyakit Dalam</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Lulusan <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="last-name" name="last-name" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Tahun Lulus <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" class="form-control col" type="number" name="middle-name" required="required">
                                        </div>
                                    </div>

                                </div>
                                <div id="step-3">

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nomor HP <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="last-name" name="last-name" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Email <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" class="form-control col" type="email" name="middle-name" required="required">
                                        </div>
                                    </div>

                                </div>
                                <div id="step-4">

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Foto Profile</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="file" id="first-name" class="form-control ">
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- End SmartWizard Content -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<?= $this->endSection('content'); ?>