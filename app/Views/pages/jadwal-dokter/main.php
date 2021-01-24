<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                &nbsp;<?= $breadCrumb; ?>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row mt-2 mb-2">
            <div class="col-md-12 col-sm-12 ">
                <a href="/cetak-jadwal-dokter" class="btn btn-primary btn-sm">
                    <i class="fa fa-print"></i>&nbsp; Cetak Data
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Jadwal Dokter</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="bs-docs-section">
                            <h2 id="glyphicons-glyphs">Pilih Poliklinik</h2>
                            <p>Silahkan pilih terlebih dahulu untuk menampilkan dokter berdasarkan poliklinik.</p>
                            <div class="bs-glyphicons">
                                <ul class="bs-glyphicons-list">
                                    <li onclick="goTo(1)">
                                        <span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-asterisk</span>
                                    </li>

                                    <li>
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-plus</span>
                                    </li>

                                    <li>
                                        <span class="glyphicon glyphicon-euro" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-euro</span>
                                    </li>

                                    <li>
                                        <span class="glyphicon glyphicon-eur" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-eur</span>
                                    </li>

                                    <li>
                                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-minus</span>
                                    </li>

                                    <li>
                                        <span class="glyphicon glyphicon-cloud" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-cloud</span>
                                    </li>

                                    <li>
                                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-envelope</span>
                                    </li>

                                    <li>
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-pencil</span>
                                    </li>

                                    <li>
                                        <span class="glyphicon glyphicon-glass" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-glass</span>
                                    </li>

                                    <li>
                                        <span class="glyphicon glyphicon-music" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-music</span>
                                    </li>

                                    <li>
                                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-search</span>
                                    </li>

                                    <li>
                                        <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-heart</span>
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

<script>
    function goTo(id) {
        window.location = "/jadwal-dokter/detail"
    }
</script>

<?= $this->endSection('content'); ?>