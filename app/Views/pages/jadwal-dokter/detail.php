<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title mb-5">
            <div class="title_left">
                <a href="/jadwal-dokter" class="btn btn-secondary btn-sm">
                    <i class="fa fa-arrow-left"></i>&nbsp; Kembali
                </a>
                <?= $breadCrumb; ?>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-3">
                <i class="fa fa-check-square-o"></i>
                <label for="heard">Hari:</label>
                <select id="heard" class="form-control">
                    <option value="">All</option>
                    <option value="press">Senin</option>
                    <option value="net">Selasa</option>
                    <option value="mouth">Rabu</option>
                    <option value="mouth">Kamis</option>
                    <option value="mouth">Jum'at</option>
                    <option value="mouth">Sabtu</option>
                    <option value="mouth">Minggu</option>
                </select>
            </div>
            <div class="col-3">
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

        <div class="row" style="display: block; margin-top: 12px;">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Jadwal Dokter -<small>Klinik Bedah Umum</small></h2>
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
                                                <th>Hari</th>
                                                <th>Jam Kerja</th>
                                                <th>Dokter</th>
                                                <th width="10%">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>1</th>
                                                <td>Senin</td>
                                                <td>13.00 - 17.00</td>
                                                <td>Dr. Nuril</td>
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
                                                <td>Jum'at</td>
                                                <td>08.00 - 13.00</td>
                                                <td>Dr. Muslichin</td>
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
                                                <td>Kamis</td>
                                                <td>10.00 - 14.00</td>
                                                <td>Dr. Titan</td>
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
                                                <td>Kamis</td>
                                                <td>10.00 - 14.00</td>
                                                <td>Dr. Titan</td>
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
                                                <td>Kamis</td>
                                                <td>10.00 - 14.00</td>
                                                <td>Dr. Titan</td>
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
                                                <td>Kamis</td>
                                                <td>10.00 - 14.00</td>
                                                <td>Dr. Titan</td>
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
                                                <td>Kamis</td>
                                                <td>10.00 - 14.00</td>
                                                <td>Dr. Titan</td>
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
                                                <td>Kamis</td>
                                                <td>10.00 - 14.00</td>
                                                <td>Dr. Titan</td>
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
                                                <td>Kamis</td>
                                                <td>10.00 - 14.00</td>
                                                <td>Dr. Titan</td>
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
                                                <td>Kamis</td>
                                                <td>10.00 - 14.00</td>
                                                <td>Dr. Titan</td>
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
                                                <td>Kamis</td>
                                                <td>10.00 - 14.00</td>
                                                <td>Dr. Titan</td>
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
                                                <td>Kamis</td>
                                                <td>10.00 - 14.00</td>
                                                <td>Dr. Titan</td>
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
                                                <td>Kamis</td>
                                                <td>10.00 - 14.00</td>
                                                <td>Dr. Titan</td>
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