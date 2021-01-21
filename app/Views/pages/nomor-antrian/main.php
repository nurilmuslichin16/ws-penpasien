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
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel" style="height:600px;">
                    <div class="x_title">
                        <h2>Nomor Antrian</h2>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <div class="bs-docs-section">
                            <div class="bs-glyphicons">
                                <ul class="bs-glyphicons-list">
                                    <li>
                                        <b class="mt-0" style="font-size: 22px;">BU - 1</b>
                                        <span class="glyphicon-class mb-2">Bedah Umum</span>
                                        <div class="row mt-1">
                                            <div class="col-6">
                                                <a href="#" class="btn btn-secondary btn-sm">
                                                    <i class="fa fa-arrow-left"></i>
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <a href="#" class="btn btn-secondary btn-sm">
                                                    <i class="fa fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <b class="mt-0" style="font-size: 22px;">M - 5</b>
                                        <span class="glyphicon-class mb-2">Mata</span>
                                        <div class="row mt-1">
                                            <div class="col-6">
                                                <a href="#" class="btn btn-secondary btn-sm">
                                                    <i class="fa fa-arrow-left"></i>
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <a href="#" class="btn btn-secondary btn-sm">
                                                    <i class="fa fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <b class="mt-0" style="font-size: 22px;">KK - 10</b>
                                        <span class="glyphicon-class mb-2">Kulit dan Kelamin</span>
                                        <div class="row mt-1">
                                            <div class="col-6">
                                                <a href="#" class="btn btn-secondary btn-sm">
                                                    <i class="fa fa-arrow-left"></i>
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <a href="#" class="btn btn-secondary btn-sm">
                                                    <i class="fa fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <b class="mt-0" style="font-size: 22px;">GM - 3</b>
                                        <span class="glyphicon-class mb-2">Gigi dan Mulut</span>
                                        <div class="row mt-1">
                                            <div class="col-6">
                                                <a href="#" class="btn btn-secondary btn-sm">
                                                    <i class="fa fa-arrow-left"></i>
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <a href="#" class="btn btn-secondary btn-sm">
                                                    <i class="fa fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <b class="mt-0" style="font-size: 22px;">PD - 2</b>
                                        <span class="glyphicon-class mb-2">Penyakit Dalam</span>
                                        <div class="row mt-1">
                                            <div class="col-6">
                                                <a href="#" class="btn btn-secondary btn-sm">
                                                    <i class="fa fa-arrow-left"></i>
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <a href="#" class="btn btn-secondary btn-sm">
                                                    <i class="fa fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
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