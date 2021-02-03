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
                <div class="col-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-plus-square"></i> &nbsp;Tambah Pendaftaran Rawat Inap</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="pasien">Rekam Medis</label>
                                            <select class="form-control select2" id="pasien" name="pasien" style="width: 100%;">
                                                <option selected="selected">Pilih Rekam Medis</option>
                                                <option value="Bedah Umum">00000001</option>
                                                <option>00000002</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="no_asuransi">Nama Pasien</label>
                                            <input type="text" class="form-control" id="no_asuransi" name="no_asuransi" placeholder="Nuril Muslichin" readonly>
                                        </div>
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
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Pembayaran</label><br />
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-secondary active">
                                                    <input type="radio" name="asuransi" id="asuransi_umum" autocomplete="off" checked> Umum
                                                </label>
                                                <label class="btn btn-secondary">
                                                    <input type="radio" name="asuransi" id="asuransi_bpjs" autocomplete="off"> BPJS
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="no_asuransi">Nomer Asuransi</label>
                                            <input type="text" class="form-control" id="no_asuransi" name="no_asuransi" placeholder="Contoh: 1234xxxx" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="reset" class="btn btn-default">Reset</button>
                                <button type="submit" class="btn btn-success float-right">Tambah</button>
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