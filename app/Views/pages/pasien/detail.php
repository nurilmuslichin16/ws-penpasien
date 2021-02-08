<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-left">
                        <a href="/pasien" class="btn btn-sm btn-secondary mr-3">
                            <i class="fas fa-arrow-left"></i>&nbsp; Kembali
                        </a>
                        <?php foreach ($breadCrumb as $key => $b) : ?>
                            <li class="<?= $key === array_key_last($breadCrumb) ? "breadcrumb-item active" : "breadcrumb-item" ?>"><?= $b; ?></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-12">

                    <!-- Profile Image -->
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Pasien</h3>
                        </div>
                        <div class="card-body box-profile">
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item" style="border-top: 0px;">
                                    <i class="fas fa-book-medical mr-1"></i> <b>Nomor Rekam Medis</b>
                                    <div class="float-right text-muted"><?= $pasien['no_rm']; ?></div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-id-badge mr-1"></i> <b>NIK</b>
                                    <div class="float-right text-muted"><?= $pasien['nik']; ?></div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-id-card mr-1"></i> <b>Nama Depan</b>
                                    <div class="float-right text-muted"><?= $pasien['nama_depan']; ?></div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-id-card mr-1"></i> <b>Nama Belakang</b>
                                    <div class="float-right text-muted"><?= $pasien['nama_belakang']; ?></div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-venus-mars mr-1"></i> <b>Jenis Kelamin</b>
                                    <div class="float-right text-muted"><?= $pasien['jekel'] == 0 ? "Laki-Laki" : "Perempuan"; ?></div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-calendar mr-1"></i> <b>Tempat & Tanggal Lahir</b>
                                    <div class="float-right text-muted"><?= $pasien['tempat_lahir']; ?>, <?= format_indo($pasien['tanggal_lahir']); ?></div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-pray mr-1"></i> <b>Agama</b>
                                    <div class="float-right text-muted"><?= $pasien['agama']; ?></div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-graduation-cap mr-1"></i> <b>Pendidikan Terakhir</b>
                                    <div class="float-right text-muted"><?= $pasien['pendidikan_terakhir']; ?></div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-heart mr-1"></i> <b>Status Perkawinan</b>
                                    <div class="float-right text-muted"><?= $pasien['status_perkawinan'] == 0 ? "Belum Menikah" : "Menikah"; ?></div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-passport mr-1"></i> <b>Kewarganegaraan</b>
                                    <div class="float-right text-muted"><?= $pasien['kewarganegaraan']; ?></div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-phone mr-1"></i> <b>No. HP</b>
                                    <div class="float-right text-muted"><?= $pasien['no_hp']; ?></div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-at mr-1"></i> <b>Email</b>
                                    <div class="float-right text-muted"><?= $pasien['email']; ?></div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-map-marker-alt mr-1"></i> <b>Provinsi</b>
                                    <div class="float-right text-muted"><?= $pasien['prov']; ?></div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-map-marker-alt mr-1"></i> <b>Kota / Kabupaten</b>
                                    <div class="float-right text-muted"><?= $pasien['kota_kab']; ?></div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-map-marker-alt mr-1"></i> <b>Kecamatan</b>
                                    <div class="float-right text-muted"><?= $pasien['kec']; ?></div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-map-marker-alt mr-1"></i> <b>Kelurahan</b>
                                    <div class="float-right text-muted"><?= $pasien['kel']; ?></div>
                                </li>
                                <li class="list-group-item" style="border-bottom: 0px;">
                                    <i class="fas fa-map-marker-alt mr-1"></i> <b>Alamat</b>
                                    <div class="float-right text-muted"><?= $pasien['alamat']; ?></div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-8 col-sm-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Riwayat Pendaftaran Rawat Jalan</h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%">#</th>
                                        <th>Tanggal Pendaftaran</th>
                                        <th>Tanggal Periksa</th>
                                        <th>Poliklinik</th>
                                        <th>Dokter</th>
                                        <th>Asuransi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>12 Februari 2021</td>
                                        <td>16 Februari 2021</td>
                                        <td>Gigi dan Mulut</td>
                                        <td>Dr. Budi Ahmad</td>
                                        <td>Umum</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>29 Februari 2021</td>
                                        <td>1 Maret 2021</td>
                                        <td>Kulit dan Kelamin</td>
                                        <td>Dr. Yudi Maman</td>
                                        <td>BPJS</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Riwayat Pendaftaran Rawat Inap</h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <table id="tabel_tambahan" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%">#</th>
                                        <th>Tanggal Pendaftaran</th>
                                        <th>Kamar</th>
                                        <th>Asuransi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="4" style="text-align: center;">Belum ada pendaftaran</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection('content'); ?>