<div class="modal fade" id="modal-ubah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title"><i class="fa fa-plus-square"></i> &nbsp;Ubah Pengguna Web</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('/manajUser/ubahWeb', ['class' => 'form-ubah']); ?>
            <?= csrf_field(); ?>
            <div class="modal-body">
                <div class="row">
                    <input type="hidden" class="form-control" id="id_user_web" name="id_user_web" value="<?= $id_user_web; ?>">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $nama_lengkap; ?>" readonly>
                            <div class="invalid-feedback" id="error-nama"></div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $email; ?>" readonly>
                            <div class="invalid-feedback" id="error-email"></div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Jenis Kelamin</label>
                            <input type="text" class="form-control" id="jekel" name="jekel" value="<?= $jekel == 0 ? 'Laki-Laki' : 'Perempuan'; ?>" readonly>
                            <div class="invalid-feedback" id="error-jekel"></div>
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <select class="form-control select2" id="level" name="level" style="width: 100%;">
                                <option>Pilih Level</option>
                                <option value="0" <?= $level == 0 ? 'selected' : ''; ?>>Admin</option>
                                <option value="1" <?= $level == 1 ? 'selected' : ''; ?>>Petugas</option>
                                <option value="2" <?= $level == 2 ? 'selected' : ''; ?>>Kepala Pendaftaran</option>
                            </select>
                            <div class="invalid-feedback" id="error-level"></div>
                        </div>
                        <div class="form-group">
                            <label for="level">Status</label>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" value="aktif" name="status" id="status" <?= $status == 0 ? '' : 'checked'; ?>>
                                <label class="custom-control-label" for="status">Aktif</label>
                            </div>
                        </div>
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
        if (response.error.level) {
            $('#level').addClass('is-invalid');
            $('#error-level').html(response.error.level);
        } else {
            $('#level').removeClass('is-invalid');
            $('#error-level').empty();
        }
    }

    function bersihkan_form() {
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

        $('.form-ubah').submit(function(e) {
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
                    $('#btn-submit').html('Ubah');
                },
                success: function(response) {
                    if (response.error) {
                        validasi_form(response);
                    } else {
                        bersihkan_form();
                        notif_sukses(response.sukses);

                        $('#modal-ubah').modal('hide');
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