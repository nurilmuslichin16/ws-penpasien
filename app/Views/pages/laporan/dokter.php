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
                            <h3 class="card-title"><i class="fa fa-copy"></i> &nbsp;Laporan Dokter</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="umur_mulai">Umur <small>[Dari]</small></label>
                                            <input type="number" class="form-control" id="umur_mulai" name="umur_mulai" placeholder="Contoh: 24">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="umur_sampai">Umur <small>[Sampai]</small></label>
                                            <input type="number" class="form-control" id="umur_sampai" name="umur_sampai" placeholder="Contoh: 50">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Jenis Kelamin</label><br />
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-secondary active">
                                                    <input type="radio" name="jekel" id="jekel_laki" autocomplete="off"> Laki-Laki
                                                </label>
                                                <label class="btn btn-secondary">
                                                    <input type="radio" name="jekel" id="jekel_perempuan" autocomplete="off"> Perempuan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="spesialis">Spesialis</label>
                                            <select class="form-control select2" id="spesialis" name="spesialis" style="width: 100%;">
                                                <option selected="selected">Pilih Spesialis</option>
                                                <option value="press">Bedah Umum</option>
                                                <option value="net">Umum</option>
                                                <option value="mouth">Gigi dan Mulut</option>
                                                <option value="mouth">Kulit dan Kelamin</option>
                                                <option value="mouth">Penyakit Dalam</option>
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