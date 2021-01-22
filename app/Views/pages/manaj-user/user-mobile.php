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
                    <i class="fa fa-plus"></i>&nbsp; Tambah Pengguna Mobile
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
                        <h2>Pengguna Mobile</h2>
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
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>No.HP</th>
                                                <th>Email</th>
                                                <th>Terakhir Login</th>
                                                <th>Status</th>
                                                <th width="10%">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>1</th>
                                                <td>1221120028222</td>
                                                <td>Nuril Muslichin</td>
                                                <td>085229531170</td>
                                                <td>nurilmuslichin16@gmail.com</td>
                                                <td>21 Jan 2021</td>
                                                <td>
                                                    <span class="badge badge-success">Aktif</span>
                                                </td>
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
                                                <td>1221120023211</td>
                                                <td>Titan Yusro</td>
                                                <td>085229532230</td>
                                                <td>titanyusro@gmail.com</td>
                                                <td>02 Jan 2021</td>
                                                <td>
                                                    <span class="badge badge-danger">Tidak Aktif</span>
                                                </td>
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