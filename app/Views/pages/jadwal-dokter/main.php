<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label class="bmd-label-floating" for="exampleFormControlSelect1">Example select</label>
                                <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" title="Single Select">
                                    <option disabled selected>Single Option</option>
                                    <option value="2">Foobar</option>
                                    <option value="3">Is great</option>
                                    <option value="4">Is bum</option>
                                    <option value="5">Is wow</option>
                                    <option value="6">boom</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Jadwal Dokter</h4>
                        <p class="card-category"> Poliklinik Bedah</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th width="5%">
                                        No
                                    </th>
                                    <th>
                                        Hari
                                    </th>
                                    <th>
                                        Jam Kerja
                                    </th>
                                    <th>
                                        Dokter
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
                                            Senin
                                        </td>
                                        <td>
                                            08.00 - 13.00
                                        </td>
                                        <td>
                                            Dr. Nuril
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
                                            Rabu
                                        </td>
                                        <td>
                                            13.00 - 18.00
                                        </td>
                                        <td>
                                            Dr. Nuril
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
                                            Selasa
                                        </td>
                                        <td>
                                            09.00 - 14.00
                                        </td>
                                        <td>
                                            Dr. Muslichin
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
                                            Jum'at
                                        </td>
                                        <td>
                                            15.00 - 20.00
                                        </td>
                                        <td>
                                            Dr. Muslichin
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