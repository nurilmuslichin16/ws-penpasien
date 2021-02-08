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
                        <a href="/rawat-inap" class="btn btn-sm btn-secondary mr-3">
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
                            <h3 class="card-title">Informasi Pendaftaran</h3>
                        </div>
                        <div class="card-body box-profile">

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item" style="border-top: 0px;">
                                    <i class="fas fa-bookmark mr-1"></i> <b>No. Pendaftaran</b>
                                    <div class="float-right text-muted"><?= $rawat_inap['no_pendaftaran']; ?></div>
                                </li>
                                <li class="list-group-item" style="border-top: 0px;">
                                    <i class="fas fa-book-medical mr-1"></i> <b>Nomor Rekam Medis</b>
                                    <div class="float-right text-muted"><?= $rawat_inap['no_rm']; ?></div>
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
                                    <div class="float-right text-muted"><?= format_indo($rawat_inap['tanggal_daftar']); ?></div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-bed mr-1"></i> <b>Kamar</b>
                                    <div class="float-right text-muted">Join ? ? ?</div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-clinic-medical mr-1"></i> <b>Asuransi</b>
                                    <div class="float-right text-muted"><?= $rawat_inap['asuransi']; ?></div>
                                </li>
                                <li class="list-group-item">
                                    <i class="fas fa-circle mr-1"></i> <b>No Asuransi</b>
                                    <div class="float-right text-muted"><?= $rawat_inap['no_asuransi'] == "" ? "-" : $rawat_inap['no_asuransi']; ?></div>
                                </li>
                                <li class="list-group-item" style="border-bottom: 0px;">
                                    <i class="fas fa-info-circle mr-1"></i> <b>Status</b>
                                    <?php if ($rawat_inap['status'] == 0) { ?>
                                        <span class="float-right badge badge-warning">Menunggu</span>
                                    <?php } else if ($rawat_inap['status'] == 1) { ?>
                                        <span class="float-right badge badge-success">Terdaftar</span>
                                    <?php } else { ?>
                                        <span class="float-right badge badge-danger">Batal</span>
                                    <?php } ?>
                                </li>
                            </ul>

                            <a href="#" class="btn btn-block btn-success mb-4 <?= $rawat_inap['status'] == 0 ? '' : 'disabled' ?>">
                                <i class="fas fa-check"></i> &nbsp;
                                Konfirmasi Pendaftaran
                            </a>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection('content'); ?>