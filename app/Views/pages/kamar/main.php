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
                <a href="#" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i>&nbsp; Tambah Kamar
                </a>
                <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa fa-print"></i>&nbsp; Cetak Data
                </a>
            </div>
        </div>

        <div class="row" style="display: block; margin-top: 12px;">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Kamar</h2>
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
                                                <th>Nama Kamar</th>
                                                <th width="15%">Terpakai</th>
                                                <th width="15%">Kosong</th>
                                                <th width="10%">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>1</th>
                                                <td>Merak</td>
                                                <td>1 Tempat Tidur</td>
                                                <td>4 Tempat Tidur</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <td>Anggrek</td>
                                                <td>0 Tempat Tidur</td>
                                                <td>5 Tempat Tidur</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <td>Melati</td>
                                                <td>2 Tempat Tidur</td>
                                                <td>1 Tempat Tidur</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>4</th>
                                                <td>Merpati</td>
                                                <td>2 Tempat Tidur</td>
                                                <td>2 Tempat Tidur</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>5</th>
                                                <td>Dara</td>
                                                <td>0 Tempat Tidur</td>
                                                <td>3 Tempat Tidur</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
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