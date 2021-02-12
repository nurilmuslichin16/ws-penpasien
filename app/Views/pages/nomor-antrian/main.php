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
                <div class="col-sm-12 col-md-6">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="mb-0" style="text-align: center;">UMUM</h3>
                        </div>
                        <div class="card-body">
                            <h1 style="text-align: center;">A-001</h1>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-secondary">
                                <i class="fas fa-chevron-left"></i>&nbsp; Prev
                            </a>
                            &nbsp;
                            <a href="#" class="btn btn-info float-right">
                                Next &nbsp;<i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="mb-0" style="text-align: center;">BPJS</h3>
                        </div>
                        <div class="card-body">
                            <h1 style="text-align: center;">B-001</h1>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-secondary">
                                <i class="fas fa-chevron-left"></i>&nbsp; Prev
                            </a>
                            &nbsp;
                            <a href="#" class="btn btn-info float-right">
                                Next &nbsp;<i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection(); ?>