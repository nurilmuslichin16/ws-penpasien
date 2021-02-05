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
                            <h3 class="card-title"><i class="fa fa-copy"></i> &nbsp;Laporan Pendaftaran Rawat Inap</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <small>*Jika ingin mencetak semua data langsung klik tombol <strong>Cetak</strong></small>
                                <div class="row mt-2">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="tanggal_daftar_mulai">Tanggal Daftar <small>[Dari]</small></label>
                                            <input type="date" class="form-control" id="tanggal_daftar_mulai" name="tanggal_daftar_mulai">
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_daftar_sampai">Tanggal Daftar <small>[Sampai]</small></label>
                                            <input type="date" class="form-control" id="tanggal_daftar_sampai" name="tanggal_daftar_sampai">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="kamar">Kamar</label>
                                            <select class="form-control select2" id="kamar" name="kamar" style="width: 100%;">
                                                <option selected="selected">Pilih Kamar</option>
                                                <option value="press">Anggrek</option>
                                                <option value="net">Melati</option>
                                                <option value="mouth">Mawar</option>
                                                <option value="mouth">Sekar</option>
                                                <option value="mouth">Sari</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control select2" id="status" name="status" style="width: 100%;">
                                                <option selected="selected">Pilih Status</option>
                                                <option value="press">Batal</option>
                                                <option value="net">Menunggu</option>
                                                <option value="mouth">Selesai</option>
                                            </select>
                                        </div>
                                    </div>
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