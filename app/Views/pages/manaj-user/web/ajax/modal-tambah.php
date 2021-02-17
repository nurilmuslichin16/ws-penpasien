<div class="modal fade" id="modal-tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title"><i class="fa fa-plus-square"></i> &nbsp;Tambah Pengguna Web</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('/pengguna-web', ['class' => 'form-tambah']); ?>
            <?= csrf_field(); ?>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Contoh: Nuril Muslichin">
                            <div class="invalid-feedback" id="error-nama"></div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Contoh: nuril@gmail.com">
                            <div class="invalid-feedback" id="error-email"></div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Jenis Kelamin</label><br />
                            <div class="btn-group btn-group-toggle" id="jekel" data-toggle="buttons">
                                <label class="btn btn-secondary">
                                    <input type="radio" name="jekel" value="0" autocomplete="off"> Laki-Laki
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" name="jekel" value="1" autocomplete="off"> Perempuan
                                </label>
                            </div>
                            <div class="invalid-feedback" id="error-jekel"></div>
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <select class="form-control select2" id="level" name="level" style="width: 100%;">
                                <option>Pilih Level</option>
                                <option value="0">Admin</option>
                                <option value="1">Petugas</option>
                                <option value="2">Kepala Pendaftaran</option>
                            </select>
                            <div class="invalid-feedback" id="error-level"></div>
                        </div>
                        <i><small>*Password default adalah "sipenpas"</small></i>
                        <br />
                        <i><small>*Status user default adalah aktif</small></i>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success" id="btn-submit">Tambah</button>
            </div>
            <?= form_close(); ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
    function validasi_form(response) {
        if (response.error.nama_lengkap) {
            $('#nama_lengkap').addClass('is-invalid');
            $('#error-nama').html(response.error.nama_lengkap);
        } else {
            $('#nama_lengkap').removeClass('is-invalid');
            $('#error-nama').empty();
        }

        if (response.error.email) {
            $('#email').addClass('is-invalid');
            $('#error-email').html(response.error.email);
        } else {
            $('#email').removeClass('is-invalid');
            $('#error-email').empty();
        }

        if (response.error.jekel) {
            $('#jekel').addClass('is-invalid');
            $('#error-jekel').html(response.error.jekel);
        } else {
            $('#jekel').removeClass('is-invalid');
            $('#error-jekel').empty();
        }

        if (response.error.level) {
            $('#level').addClass('is-invalid');
            $('#error-level').html(response.error.level);
        } else {
            $('#level').removeClass('is-invalid');
            $('#error-level').empty();
        }
    }

    function bersihkan_form() {
        $('#nama_lengkap').removeClass('is-invalid');
        $('#error-nama').empty();

        $('#email').removeClass('is-invalid');
        $('#error-email').empty();

        $('#jekel').removeClass('is-invalid');
        $('#error-jekel').empty();

        $('#level').removeClass('is-invalid');
        $('#error-level').empty();
    }

    function notif_sukses(pesan) {
        Swal.fire({
            title: 'Data Tersimpan',
            text: pesan,
            icon: 'success',
            showConfirmButton: false,
            timer: 2000
        })
    }

    $(document).ready(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        $('.form-tambah').submit(function(e) {
            e.preventDefault()
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $('#btn-submit').attr('disable', 'disabled');
                    $('#btn-submit').html('<i class="fa fa-spin fa-spinner"></i>');
                },
                complete: function() {
                    $('#btn-submit').removeAttr('disable');
                    $('#btn-submit').html('Tambah');
                },
                success: function(response) {
                    if (response.error) {
                        validasi_form(response);
                    } else {
                        bersihkan_form();
                        notif_sukses(response.sukses);

                        $('#modal-tambah').modal('hide');
                        dataUserWeb();
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                    console.log(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            })
        })
    })
</script>