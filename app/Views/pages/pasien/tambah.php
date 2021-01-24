<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title mb-4">
            <div class="title_left">
                <a href="/pasien" class="btn btn-secondary btn-sm">
                    <i class="fa fa-arrow-left"></i>&nbsp; Kembali
                </a>
                &nbsp;<?= $breadCrumb; ?>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row" style="display: block; margin-top: 12px;">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>
                            <i class="fa fa-plus"></i>&nbsp;
                            Tambah Pasien
                        </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form class="form-horizontal form-label-left">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">NIK <span class="required">*</span>
                                        </label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="number" id="first-name" required="required" class="form-control  ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Depan <span class="required">*</span>
                                        </label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" id="first-name" required="required" class="form-control  ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nama Belakang <span class="required">*</span>
                                        </label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" id="last-name" name="last-name" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Gender <span class="required">*</span></label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <p class="mt-2 mb-0">
                                                Laki-Laki&nbsp;
                                                <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required />
                                                &nbsp;
                                                &nbsp;
                                                Perempuan&nbsp;
                                                <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir <span class="required">*</span></label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input id="middle-name" class="form-control" type="text" name="middle-name" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir <span class="required">*</span>
                                        </label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input id="birthday" class="date-picker form-control" required="required" type="date">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Agama <span class="required">*</span>
                                        </label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <select id="heard" class="form-control">
                                                <option value="">Pilih Agama</option>
                                                <option value="">Islam</option>
                                                <option value="press">Kristen</option>
                                                <option value="net">Katolik</option>
                                                <option value="mouth">Budha</option>
                                                <option value="mouth">Hindu</option>
                                                <option value="mouth">Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Pendidikan Terakhir <span class="required">*</span>
                                        </label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <select id="heard" class="form-control">
                                                <option value="">Pilih Pendidikan Terakhir</option>
                                                <option value="">Tidak Sekolah</option>
                                                <option value="press">SD</option>
                                                <option value="net">SMP</option>
                                                <option value="mouth">SMK</option>
                                                <option value="mouth">D3 / Diploma</option>
                                                <option value="mouth">S1 / Sarjana</option>
                                                <option value="mouth">S2 / Magister</option>
                                                <option value="mouth">S3 / Doktor</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Status Perkawinan <span class="required">*</span></label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <p class="mt-2 mb-0">
                                                Belum Menikah&nbsp;
                                                <input type="radio" class="flat" name="nikah" id="genderM" value="M" checked="" required />
                                                &nbsp;
                                                &nbsp;
                                                Menikah&nbsp;
                                                <input type="radio" class="flat" name="nikah" id="genderF" value="F" />
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Provinsi <span class="required">*</span>
                                        </label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <select id="heard" class="form-control">
                                                <option value="">Pilih Provinsi</option>
                                                <option value="press">Jawa Tengah</option>
                                                <option value="net">Jawa Timur</option>
                                                <option value="mouth">Jawa Barat</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Kota / Kabupaten <span class="required">*</span>
                                        </label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <select id="heard" class="form-control">
                                                <option value="">Pilih Kota / Kabupaten</option>
                                                <option value="press">Kota Pekalongan</option>
                                                <option value="net">Kab. Pekalongan</option>
                                                <option value="mouth">Batang</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Kecamatan <span class="required">*</span>
                                        </label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <select id="heard" class="form-control">
                                                <option value="">Pilih Kecamatan</option>
                                                <option value="press">Pekalongan Barat</option>
                                                <option value="net">Pekalongan Timur</option>
                                                <option value="mouth">Pekalongan Selatan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Kelurahan <span class="required">*</span>
                                        </label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <select id="heard" class="form-control">
                                                <option value="">Pilih Kelurahan</option>
                                                <option value="press">Pasirkratonkramat</option>
                                                <option value="net">Noyontaan</option>
                                                <option value="mouth">Tirto</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat <span class="required">*</span>
                                        </label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <textarea class="form-control" rows="2" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Kewarganegaraan <span class="required">*</span></label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input id="middle-name" class="form-control" type="text" name="middle-name" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nomor HP <span class="required">*</span></label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input id="middle-name" class="form-control" type="text" name="middle-name" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Email <span class="required">*</span></label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input id="middle-name" class="form-control" type="email" name="middle-name" required="required">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="row justify-content-end">
                                <button class="btn btn-primary" type="reset">Reset</button>
                                &nbsp;
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<?= $this->endSection('content'); ?>