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
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-stethoscope"></i> &nbsp;Pilih Poliklinik</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <small>*Silahkan pilih poliklinik untuk menampilkan jadwal berdasarkan poliklinik.</small>
                            <div class="row mt-3">
                                <?php foreach ($poliklinik as $p) : ?>
                                    <div class="col-md-3 col-sm-12 mb-3">
                                        <a href="#" class="btn btn-block btn-outline-primary btn-sm"><?= $p['nama_poliklinik']; ?></a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection('content'); ?>