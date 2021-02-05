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
                <div class="col-sm-12 col-md-6">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-copy"></i> &nbsp;Laporan Jadwal Dokter</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <small>*Jika ingin mencetak semua data langsung klik tombol <strong>Cetak</strong></small>
                                <div class="form-group mt-2">
                                    <label for="poliklinik">Poliklinik</label>
                                    <select class="form-control select2" id="poliklinik" name="poliklinik" style="width: 100%;">
                                        <option selected="selected">Pilih Poliklinik</option>
                                        <option value="press">Bedah Umum</option>
                                        <option value="net">Umum</option>
                                        <option value="mouth">Gigi dan Mulut</option>
                                        <option value="mouth">Kulit dan Kelamin</option>
                                        <option value="mouth">Penyakit Dalam</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="dokter">Dokter</label>
                                    <select class="form-control select2" id="dokter" name="dokter" style="width: 100%;">
                                        <option selected="selected">Pilih Dokter</option>
                                        <option value="press">Dr. Nuril</option>
                                        <option value="net">Dr. Muslichin</option>
                                        <option value="mouth">Dr. Titan</option>
                                        <option value="mouth">Dr. Choriul</option>
                                        <option value="mouth">Dr. Ningsih'at</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="reset" class="btn btn-default">Reset</button>
                                <button type="submit" class="btn btn-info float-right">Cetak</button>
                            </div>
                        </form>
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