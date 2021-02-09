<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
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
                <div class="col-md-6 col-sm-12">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" style="width: 150px;" src="/dist/img/user4-128x128.jpg" alt="User profile picture">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <p class="ml-3"><i class="fas fa-user"></i><strong>&nbsp; Nuril Muslichin</strong></p>
                                    <p class="ml-3 text-muted"><i class="fas fa-at"></i>&nbsp; nurilmuslichin16@gmail.com</p>
                                    <p class="ml-3"><i class="fas fa-venus-mars"></i>&nbsp; Laki-Laki</p>
                                    <a href="/ubah-profile" class="btn btn-warning btn-sm ml-3"><i class="fas fa-pencil-alt"></i>&nbsp; Ubah</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection('content'); ?>