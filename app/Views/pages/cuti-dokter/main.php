<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Cuti Dokter</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th width="5%">
                                        No
                                    </th>
                                    <th>
                                        Dokter
                                    </th>
                                    <th>
                                        Tanggal Libur
                                    </th>
                                    <th width="10%">
                                        Aksi
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Dr. Nuril
                                        </td>
                                        <td>
                                            12 Jan 2021
                                        </td>
                                        <td>
                                            <a class="btn btn-warning" style="padding: 12px; margin: 0px;">
                                                <i class="material-icons" style="color: white;">create</i>
                                            </a>
                                            <a class="btn btn-danger" style="padding: 12px; margin: 0px;">
                                                <i class="material-icons" style="color: white;">delete</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            Dr. Muslichin
                                        </td>
                                        <td>
                                            30 Jan 2021
                                        </td>
                                        <td>
                                            <a class="btn btn-warning" style="padding: 12px; margin: 0px;">
                                                <i class="material-icons" style="color: white;">create</i>
                                            </a>
                                            <a class="btn btn-danger" style="padding: 12px; margin: 0px;">
                                                <i class="material-icons" style="color: white;">delete</i>
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
<?= $this->endSection('content'); ?>