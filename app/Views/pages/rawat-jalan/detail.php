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
                        <a href="/rawat-jalan" class="btn btn-sm btn-secondary mr-3">
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

            <!-- Profile Image -->
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Informasi Pendaftaran</h3>
                </div>
                <div class="card-body box-profile">

                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="text-center">
                                <h1 style="font-size: 100px;"><?= $rawat_jalan['asuransi'] == "BPJS" ? "B" : "A"; ?>-<?= $rawat_jalan['no_antrian']; ?></h1>
                            </div>

                            <h3 class="profile-username text-center mt-2">No. Pendaftaran</h3>

                            <p class="text-muted text-center mb-4"><?= $rawat_jalan['no_pendaftaran']; ?></p>

                            <div class="container-fluid">
                                <a href="#" class="btn btn-block btn-success mb-4 <?= $rawat_jalan['status'] == 0 ? "" : "disabled"; ?>">
                                    <i class="fas fa-check"></i> &nbsp;
                                    Konfirmasi Pendaftaran
                                </a>
                            </div>
                        </div>

                        <div class="col-md-8 col-sm-12">
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item" style="border-top: 0px;">
                                    <i class="fas fa-book-medical mr-1"></i> <b>Nomor Rekam Medis</b>
                                    <div class="float-right text-muted"><?= $rawat_jalan['no_rm']; ?></div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-user-injured mr-1"></i> <b>Nama Pasien</b>
                                    <div class="float-right text-muted">Join ? ? ?</div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-venus-mars mr-1"></i> <b>Jenis Kelamin</b>
                                    <div class="float-right text-muted">Join ? ? ?</div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-user-clock mr-1"></i> <b>Umur</b>
                                    <div class="float-right text-muted">Join ? ? ?</div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-calendar mr-1"></i> <b>Tanggal Pendaftaran</b>
                                    <div class="float-right text-muted"><?= format_indo($rawat_jalan['tgl_daftar']); ?></div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-calendar-check mr-1"></i> <b>Tanggal Periksa</b>
                                    <div class="float-right text-muted"><?= format_indo($rawat_jalan['tgl_periksa']); ?></div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-stethoscope mr-1"></i> <b>Tujuan Poliklinik</b>
                                    <div class="float-right text-muted">Join ? ? ?</div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-user-md mr-1"></i> <b>Tujuan Dokter</b>
                                    <div class="float-right text-muted">Join ? ? ?</div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-clinic-medical mr-1"></i> <b>Asuransi</b>
                                    <div class="float-right text-muted"><?= $rawat_jalan['asuransi']; ?></div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-circle mr-1"></i> <b>No Asuransi</b>
                                    <div class="float-right text-muted"><?= $rawat_jalan['no_asuransi'] == "" ? "-" : $rawat_jalan['no_asuransi']; ?></div>
                                </li>
                                <li class="list-group-item" style="border-bottom: 0px;">
                                    <i class="fas fa-info-circle mr-1"></i> <b>Status</b>
                                    <?php if ($rawat_jalan['status'] == 0) { ?>
                                        <span class="float-right badge badge-warning">Menunggu</span>
                                    <?php } else if ($rawat_jalan['status'] == 1) { ?>
                                        <span class="float-right badge badge-success">Terdaftar</span>
                                    <?php } else { ?>
                                        <span class="float-right badge badge-danger">Batal</span>
                                    <?php } ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection('content'); ?>