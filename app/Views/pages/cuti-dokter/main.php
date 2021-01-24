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
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=".bs-example-modal-lg">
                    <i class="fa fa-plus"></i>&nbsp; Tambah Cuti Dokter
                </button>
            </div>
        </div>

        <div class="row" style="display: block; margin-top: 12px;">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Cuti Dokter</h2>
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
                                                <th>Nama</th>
                                                <th>Tanggal</th>
                                                <th width="10%">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>1</th>
                                                <td>Dr. Nuril</td>
                                                <td>16 Feb 2021</td>
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
                                                <td>Dr. Muslichin</td>
                                                <td>01 Mei 2021</td>
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
                                                <td>Dr. Ningsih</td>
                                                <td>22 April 2021</td>
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

<!-- modals -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                <div class="modal-header">
                    <h2 class="modal-title" id="myModalLabel">Tambah Cuti Dokter</h2>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="last-name">Dokter <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 ">
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
                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align">Tanggal <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <input class="form-control" class='date' type="date" name="date" required='required' />
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- /modals -->
<?= $this->endSection('content'); ?>