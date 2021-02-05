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
                        <a href="/dokter" class="btn btn-sm btn-secondary mr-3">
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
                            <h3 class="card-title">Informasi Dokter</h3>
                        </div>
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" style="width: 200px;" src="/dist/img/profil_fix.jpg" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center mt-2">Dr. Nuril Muslichin</h3>

                            <p class="text-muted text-center">Spesialis Umum</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <i class="fas fa-venus-mars mr-1"></i> <b>Jenis Kelamin</b>
                                    <div class="float-right text-muted">Laki-Laki</div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-map-marker mr-1"></i> <b>Tempat Lahir</b>
                                    <div class="float-right text-muted">Kota Pekalongan</div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-calendar mr-1"></i> <b>Tanggal Lahir</b>
                                    <div class="float-right text-muted">16 Februari 1999</div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-phone mr-1"></i> <b>Nomor HP</b>
                                    <div class="float-right text-muted">0852 2953 1170</div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-at mr-1"></i> <b>Email</b>
                                    <div class="float-right text-muted">nurilmuslichin16@gmail.com</div>
                                </li>
                            </ul>
                            <strong><i class="fas fa-graduation-cap mr-1"></i> Lulusan</strong>

                            <p class="text-muted">
                                STMIK Widya Pratam Kota Pekalongan - 2020
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                            <p class="text-muted">Jl Kramatsari 2 Gg.8 No.20A Kota Pekalongan.</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-8 col-sm-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Riwayat Pelayanan</h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%">#</th>
                                        <th>Tanggal</th>
                                        <th>Rekam Medis</th>
                                        <th>Pasien</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>12 Februari 2021</td>
                                        <td>00000212</td>
                                        <td>Budi Suyono</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>09 Februari 2021</td>
                                        <td>00002321</td>
                                        <td>Ahmad Jaya</td>
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