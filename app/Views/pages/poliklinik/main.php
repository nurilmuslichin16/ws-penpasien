<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Data Poliklinik</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th width="5%">
                                        No
                                    </th>
                                    <th>
                                        Poliklinik
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
                                            Klinik Bedah Umum
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
                                            Klinik Bedah Orthopedi
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
                                            3
                                        </td>
                                        <td>
                                            Klinik Gigi dan Mulut
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
                                            4
                                        </td>
                                        <td>
                                            Klinik Umum
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
                                            5
                                        </td>
                                        <td>
                                            Klinik Radiologi
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
                                            6
                                        </td>
                                        <td>
                                            Klinik Penyakit Dalam
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